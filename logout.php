<?php
session_start();
unset($_SESSION["dataDump"]);
unset($_SESSION["count"]);
header("Location:index.php");
