function portfolio(){
    // about click
    $select('#div-web').style.display = 'flex';
    $select('#div-console').style.display = 'flex';
    $select('#portfolio').style.backgroundColor = 'transparent';
    $select('#portfolio').style.color = ' black';
    $select('#portfolio').style.backgroundColor = 'yellow';
    $select('#about').style.border = '1px solid yellow';
    $select('#about').style.color = ' yellow';
    $select('#about').style.backgroundColor = 'transparent';
    $select('#div-about').style.display = 'none';
}

function about(){
    // about click
    $select('#div-web').style.display = 'none';
    $select('#div-console').style.display = 'none';
    $select('#about').style.backgroundColor = 'yellow';
    $select('#about').style.color = ' black';
    $select('#portfolio').style.backgroundColor = 'transparent';
    $select('#portfolio').style.border = '1px solid yellow';
    $select('#portfolio').style.color = ' yellow';
    $select('#div-about').style.display = 'flex';
}

function graphic_design() {
    // Replace the URL with the desired link
    var link = "https://www.pinterest.ph/fykkkie/graphic-arts/";
    
    // Open the link in a new tab
    window.open(link, '_blank');
}

function tech() {
    // Replace the URL with the desired link
    var link = "https://www.instagram.com/stories/highlights/17864311289744963/";
    
    // Open the link in a new tab
    window.open(link, '_blank');
}


function $select(selector){
    return document.querySelector(selector)
}