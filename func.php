<?php

function dumpanddie($arr)
{
    echo '<pre>';

    die(var_dump($arr));

    echo '</pre>';

}

function ageChecker($age)
{
    if ($age >= 18) {
        return true;
    }
    return false;
}
