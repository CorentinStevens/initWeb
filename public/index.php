<?php
require('../vendor/autoload.php');

$router = new AltoRouter();
$router->map('GET', "/", function () {
    require('../elements/header.php');
    require('../templates/accueil.php');
    require('../elements/footer.php');

});

$match = $router->match();
if ($match !== false) {
    call_user_func_array($match["target"], $match["params"]);
}else{
 
    header("HTTP/1.0 404 Not Found");
    require("../templates/404.php");
}?>