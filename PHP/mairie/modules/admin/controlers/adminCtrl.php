<?php 

// inclusion vue du admin
require_once './modules/admin/views/adminView.php';



// inclusion css du admin
echo '<link rel="stylesheet" href="./modules/admin/css/style.css">';



// boucle if .methode get . modif h1 selon content
if(isset($_GET['content'])){
    $myContent=$_GET['content'];
}
else{
    $myContent = 'admin';
}

