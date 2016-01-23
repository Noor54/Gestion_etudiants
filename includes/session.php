<?php
session_start();
if(!(isset($_SESSION['NIV'])))
{
 header("Location:index.html");
//exit;
}
?>