<?php

function isValidEmail(string $email) : bool
{

    // return filter_var($email, FILTER_VALIDATE_EMAIL); Можно так (для себя)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;

}

function isValidName(string $name): bool
{
    $targetEmail = 'Ильяс';

    if ($name === $targetEmail){
        return true;
    } 
    return false;
}

function isValidPhone(string $phone) : bool
{
    //$phone = '+79625548758';
    if (filter_var($phone, FILTER_SANITIZE_NUMBER_INT))
    
   // if ($phone === $number)
    {
        return true;
    }
        return false;
}
?>