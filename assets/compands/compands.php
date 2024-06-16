<?php

// Get Valid Inputs
function validate_inputs($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check The Password
function password_validation($newPassword, $confirmPassword) {
    $pattern = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?!.* ).{6,16}$/';
    if ($newPassword === $confirmPassword) {
        if (preg_match($pattern, $newPassword)) return true;
        else return null;
    }
    return false;
}

// Check The Phone Number
function phone_number_validation($phone_num) {
    $pattern = '/^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/';
    if (preg_match($pattern, $phone_num)) return true;
    else return false;
}

// CHeck the array has empty value
function IsEmpty($array) {
    foreach ($array as $inputs) {
        if (empty($inputs)) return false; 
    }
    return true;
}

// Check The array has target value
function IsExists($array, $target_val) {
    foreach ($array as $val) {
        if ($val == $target_val) {
            return true;
        }
    }
    return false;
}

$basePath = "/assets/imgs/malcom-photos/";


?>