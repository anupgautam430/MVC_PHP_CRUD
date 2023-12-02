<?php

if($_SERVER['SERVER_NAME']== 'localhost')
{
    define('ROOT','http://localhost/MVC_PHP_CRUD/public'); //this is the root configuration for the local host server.
}else
{
    define('ROOT','https://www.websitename.com'); // this is for the website when lunches.
}


