<?php 
    function validateName($str){
        if(empty($str)) return false;
        else if(!preg_match("/^([a-zA-Z ]+)$/",$str)) return false;
        return true;
    }

    function validateEmail($str){
        if(empty($str)) return false;
        else if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$str)) return false;
        return true;
    }

    function validatePassword($str){
        if(empty($str)) return false;
        else if(strlen($str)<8)  return false;
        //else if(!preg_match('@[A-Z]@',$str) && !preg_match('@[a-z]@',$str) && !preg_match('@[0-9]@',$str)) return false;
        else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/", $str)) return false;
        return true;
    }

    function validatePhone($str){
        if(empty($str)) return false;
        else if(!preg_match("/^[0-9]{11}$/",$str)) return false;
        return true;
    }
?>