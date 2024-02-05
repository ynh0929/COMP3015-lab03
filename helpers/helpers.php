<?php

function validPassword($password) {
    return strlen($password) > 8;
}

function validEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}