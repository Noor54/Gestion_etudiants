<?php
//session_start();
if($_SESSION['NIV']!=0 AND $_SESSION['NIV']!=1)
{
 header("Location:index.html");
 //session_destroy();
 exit;
}
?>