<?php
       if(isset($_POST['submit'])){
           $fname = $_POST['firstName'];
           $lname = $_POST['lastName'];
           $phonenum = $_POST['phoneNumber'];
           $mailFrom = $_POST['email'];
           $subject = $_POST['subject'];
           $message = $_POST['Message'];

            $mailTo = "tljessop@hotmail.com";

            $headers = "From: ".$mailFrom;
            $txt = "Your school contact from was filled in by".$fname." ".$lname."\n\n".$message;

           mail();

       } 

?>