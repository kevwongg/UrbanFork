<?php
session_start();
include 'database.php';
session_unset();
header("Location: index.php");