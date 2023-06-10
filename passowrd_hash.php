<?php
$password = "Apple";
$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("Apple", $hash)){
    
}