<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="../assets/css/sidebar.css">
  <style>
    .btn-sidebar:hover{
      border: 1px solid white;
    }
    body {
      height: 100vh;
      margin: 0;
      overflow: hidden;
    }

    .d-flex.flex-column {
      height: 100%;
      max-height: 100vh;
      overflow-y: auto;
    }

    .nav-link:hover {
      pointer-events: none;
    }
    .dropdown-menu .dropdown-item:hover {
      background-color: gray;
      color: white; /* Adjust text color for better visibility */
    }

    .sidebar{
        position: sticky;
        top: 0;
        height: 100vh;
    }

    @media (max-width: 768px) {
      .sidebar{
        display: none;
      }
    }

  </style>
</head>
<body>
<div class="sidebar">
<div class="d-flex flex-column flex-shrink-0 p-3 " style="width: auto; background-color: rgb(24, 4, 43);">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img src="../assets/img/admin.gif" alt="" style="width: 45px">
      <span class="fs-4 fw-bold text-light">Administrator</span>
    </a>
    <hr style="color: white">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item btn-sidebar rounded">
        <a href="dashboard" class="nav-link text-light " aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/dashboard.png" height="16"><use xlink:href="#home"/></img>
          Dashboard
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="web_project" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/web.png" height="16"><use xlink:href="#home"/></img>
          Web Projects
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="#" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/technician.png" height="16"><use xlink:href="#home"/></img>
          IT Technician
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="#" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/design.png" height="16"><use xlink:href="#home"/></img>
          Graphic Design
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="#" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/article.png" height="16"><use xlink:href="#home"/></img>
          Articles
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="#" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/email.png" height="16"><use xlink:href="#home"/></img>
          Messages
        </a>
      </li>
      <li class="nav-item btn-sidebar rounded">
        <a href="#" class="nav-link text-light" aria-current="page">
          <img class="bi pe-none me-2" width="16" src="../assets/img/settings.png" height="16"><use xlink:href="#home"/></img>
          Settings
        </a>
      </li>
      
    </ul>
    <hr style="color: white">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-light link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../assets/img/admin.gif" alt="" width="32" height="32" class="rounded-circle border me-2">
        <strong class="text-light">f9ki3</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="../functions/logout">Log out</a></li>
      </ul>
    </div>
  </div>
</div>
  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>