<?php
// regular expression

preg_match('/\/contact\//', $actual_link, $contactMatches);

if (count($contactMatches) > 0) {
    require_once "Handler/ContactHandler.php";
}
