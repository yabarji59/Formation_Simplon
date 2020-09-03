<?php 

// boucle if .methode get . modif h1 selon page
if(isset($_GET['page'])){
    $myPage=$_GET['page'];
}
else{
    $myPage = 'home';
}

// inclusion du css head
echo '<link rel="stylesheet" href="./modules/content/css/style.css">';

// inclusion vue ma premiere partie content
require './modules/content/views/contentView.php';

// inclusion vue ma deuxieme partie content
require './modules/'.$myPage.'/controlers/'.$myPage.'Ctrl.php';





