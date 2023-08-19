<?php
include "cek_login.php";

session_destroy();

header("location:../login.php");