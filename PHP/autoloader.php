<!-- Include this .php file with include '/path'; -->
<?php
spl_autoload_register(function ($class_name) {
    $path = "";
    include $path . strtolower($class_name) . '.class.php';
});
?>

