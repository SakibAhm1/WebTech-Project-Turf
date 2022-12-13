<?php
    session_start();
    setcookie("userid", '',time()-100);
    session_unset();
    session_destroy();
?>