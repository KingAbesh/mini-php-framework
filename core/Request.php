<?php

class Request 
{
     public static function uri()

     {

         return $uri = trim($_SERVER['REQUEST_URI'], '/');

     }
     
}
