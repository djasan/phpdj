<?php
require 'config/routes.php';

function dbug($value)
{
    echo '<pre style="background-color:teal;color:antiquewhite;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    echo '</pre>';
}

function dd($value)
{
    dbug($value);
    die('Script php arrété !');
}