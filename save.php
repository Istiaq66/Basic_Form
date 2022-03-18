<?php
session_start();

include 'Connection.php';

if (isset($_POST['submit'])) {

    $FName = $_POST['Fname'];
    $LName = $_POST['Lname'];
    $Gender = $_POST['gender'];
    $date = $_POST['date'];
    $Uni = $_POST['university'];
    $Sub = $_POST['subject'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pack = $_POST['Package'];
    $Lap = $_POST['Laptop'];
    $Gproject = $_POST['project'];
    $time = implode(',', $_POST['time']);
    $Part = implode(',', $_POST['Participation']);
    $rnd = implode(',', $_POST['rnd']);


    $username = "Stamasoft.com";
    $useremail = "noreplay@stamsoft.com";
    $subject = "Aplication Submitted";
    $message = "Congratulations Your aplication for scholarship has been submitted. We will Contact you soon.";

    $to = $email;
    $body = "";

    $body .= "From: " . $username . "\r\n";
    $body .= "Email: " . $useremail . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $subject, $body);


    $username2 = "Stamasoft.com";
    $useremail2 = "noreplay@stamsoft.com";
    $subject2 = "Aplication Submitted";
    $message2 = "Congratulations Your aplication for scholarship has been submitted. We will Contact you soon.";

    $to2 = "showrav.stamasoft@gmail.com";
    $body2 = "";

    $body2 .= "From: " . $username . "\r\n";
    $body2 .= "Email: " . $useremail . "\r\n";
    $body2 .= "Message: " . $message . "\r\n";


    mail($to2, $subject2, $body2);



    $query = "INSERT INTO student (Fname,Lname,gender,birth,university,subj,semster,email,phone,package,device,Gproject,classtime,project,rnd)
     values ('$FName','$LName','$Gender','$date','$Uni','$Sub','$year','$email','$phone','$pack','$Lap','$Gproject','" . $time . "','" . $Part . "','" . $rnd . "')";


    $result = mysqli_query($conn, $query);





    if ($result) {
        $_SESSION['status'] = "Aplication Submitted";
        echo '<script type="text/javascript">';
        echo 'window.location.href = "Form.php";';
        echo '</script>';
    } else {
        $_SESSION['status'] = "Data insertion failed";
        echo '<script type="text/javascript">';
        echo 'window.location.href = "Form.php";';
        echo '</script>';
    }
}
