function login() {
    var username = $("#username").val();
    var password = $("#password").val();

    // Reference to the login button
    var loginButton = $("#loginButton");

    // Disable the button and show the spinner
    loginButton.prop("disabled", true);
    loginButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Logging in');

    // Simulate a 2-second delay with setTimeout
    setTimeout(function () {
        $.ajax({
            type: "POST",
            url: "../functions/login.php",
            data: { username: username, password: password },
            success: function (response) {
                // Re-enable the button and hide the spinner
                loginButton.prop("disabled", false);
                loginButton.html("LOGIN");

                if (response === "success") {
                    $("#response").text("Login successful!");
                    // Redirect to your desired page on successful login
                    $("#response").empty();
                    $("#response").append('<button id="redirectButton" class="btn bounce w-100 " style="color: green; border: 1px solid green" disabled>Login Success</button>');
                    setTimeout(function (){
                        window.location.href = "../admin/dashboard";
                    }, 1000)
                } else {
                    $("#response").empty();
                    $("#response").append('<button id="redirectButton" class="btn bounce w-100 " style="color: red; border: 1px solid red" disabled>Failed login check your credential</button>');
                }
            },
            error: function () {
                // Handle the error case
                // Re-enable the button and hide the spinner
                loginButton.prop("disabled", false);
                loginButton.html("LOGIN");
                $("#response").text("An error occurred during login.");
            }
        });
    }, 1000); // 2-second delay
}
