<?php

require './admin/middlewares/data.php';

session_start();
session_unset();
session_destroy();

header('location:login_soft.php');

?>