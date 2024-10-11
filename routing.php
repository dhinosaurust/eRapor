<?php

$source = "public/view/$parameter.php";

if(!isset($parameter)) die('Routing yang dituju tidak ada atau file tidak ada');

if($parameter === ''){
    include "public/view/default.php";
} else {
    include($source);
}

?>