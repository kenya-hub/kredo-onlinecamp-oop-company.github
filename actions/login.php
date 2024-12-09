<?php

include '../classes/User.php';

// Crete an obj
$user = new User ;

// call th method
$user->login($_POST);

?>