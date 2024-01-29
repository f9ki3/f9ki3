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

function $select(selector){
    return document.querySelector(selector)
}