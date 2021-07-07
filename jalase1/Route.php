<?php

class Route
{
    public static function checkRoute($uri)
    {

        $regexes = array();
        array_push($regexes, "/contact/i");
        array_push($regexes, "(/news/id=[\d+])");
        array_push($regexes, "(/news(/id=[\d+])?)");
        array_push($regexes, "(/home/$)");
        array_push($regexes, "(/page[a-zA-Z0-9_\-]+)");
        array_push($regexes, "(/user\?name=([a-zA-Z]+)\.php$)");

        $errorFlag = true;
        foreach ($regexes as $regex) {
            if (preg_match($regex, $uri)) {
                require "Handlers/handler1.php";
                $errorFlag = false;
                break;
            }
        }
        if ($errorFlag)
            require "Handlers/errorHandler.php";
    }
}










