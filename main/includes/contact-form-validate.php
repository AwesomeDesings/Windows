<?php
$nameErr = $lastErr = $emailErr = $subjectErr = $messageErr = "";  
$name = $last = $email = $subject = $message = "";  
$submitBtn;


if (isset($submitBtn)){
    if (empty($name)){
        $nameErr = 'name is required!';
    }else{
        $name = validate($_POST['name']);
        //check if name format is correct
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = 'only letters and white space allowed!';
        }
    }
    
    if (empty($subject)) {
        $subjecttErr = 'you must have a subject!';
    }else{
        $subject = validate($_POST['subject']);
        if (empty($email)){
            $emailErr = 'email is required!';
        }else{
            $email = validate($_POST['email']);
            //check if the email format is correct
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = 'email format is not correct!';
            }
        }
    }
}

        function validate($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
}