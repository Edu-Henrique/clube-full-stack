<?php

function redirect($to)
{
    return header("Location: ". $to);
}

function setMessageErrorRedirect($index, $message, $redirectTo)
{
    setFlash($index, $message);
    return redirect($redirectTo);
}