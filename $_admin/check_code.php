<?php

$name = $_POST['color'];

// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $color){ 
    echo $color."<br />";
}

?>