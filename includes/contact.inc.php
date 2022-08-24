<?php
    if (isset($_POST['submit-contact'])){
    
    require 'dbh.inc.php';
        
    $prenume = $_POST['prenume'];
    $nume = $_POST['nume'];
    $nrtel = $_POST['nrtel'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];
    
    if (empty($prenume) || empty($nume) || empty($nrtel) || empty($email)){
        header("Location: ../contact.php?error=emptyfields&prenume=".$prenume."&nume=".$nume."&nrtel=".$nrtel."&email=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", prenume) && !preg_match("/^[a-zA-Z]*$/", nume)){
        header("Location: ../contact.php?error=invalidnamemail");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../contact.php?error=invalidmail&prenume=".$prenume."&nume".$nume);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z]*$/", $prenume) && !preg_match("/^[a-zA-Z]*$/", $nume)){
        header("Location: ../contact.php?error=invalidname&mail=".$email);
        exit();
    }
    else if (!preg_match("/^[0-9]*$/", $nrtel)){
        header("Location: ../contact.php?error=invalidphone&prenume=".$prenume."&nume=".$nume."&mail=".$email);
        exit();
    }
    else if (empty($mesaj)){
        header("Location: ../contact.php?error=nomessage&prenume=".$prenume."&nume=".$nume."&mail=".$email);
        exit();
    }
    else
    {
         $sql = "INSERT INTO mesaj(prenume, nume, telefon, email, mesaj) VALUES (?, ?, ?, ?, ?)";
         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt, $sql)){
             header("Location: ../signup.php?error=sqlerror");
             exit();
         }
         else{
             mysqli_stmt_bind_param($stmt, "sssss", $prenume, $nume, $nrtel, $email, $mesaj);
             mysqli_stmt_execute($stmt);
             
             header("Location: ../contact.php?contact=success");
             exit();
         }
    
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
else{
    header("Location: ../contact.php");
    exit();
}