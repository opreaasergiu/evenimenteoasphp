<?php
if (isset($_POST['submit-delete'])){
    
    require 'dbh.inc.php';
    
    $email = $_POST['mail'];
    $password = $_POST['pwd-del'];
    $passwordRepeat = $_POST['pwd-del-repeat'];
    
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../profil.php?error=invalid");
        exit();
    }
    else if(empty($password)){
        header("Location: ../profil.php?error=nopassword&mail=".$email);
        exit();
    }
    else if(empty($passwordRepeat)){
        header("Location: ../profil.php?error=norepeatpassword&mail=".$email);
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../profil.php?error=passwordsdonotmatch&mail=".$email);
        exit();
    }
    else{
        // Verificare parola
        $sql = "SELECT * FROM users WHERE pwdUsers = ? AND emailUsers = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../profil.php?error=sqlerror");
            exit();
        }
        else{
            // TO DO hash parola si insert in stmt
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            
            $stmt -> bind_param('ss', $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            /*
            $result_check = mysqli_stmt_num_rows($stmt);
            if($result_check > 1 || $result_check < 1){
                header("Location: ../profil.php?error=wrongpassword");
                exit();
            }
            else{ */
                $sql = "DELETE FROM users where emailUsers = ?;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../profil.php?error=sqlerror");
                    exit();
                }
                else{
                    
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    
                    header("Location: ../profil.php?delete=success");
                    exit();
                }
                
            }
        }
    //}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        
}
else{
    header("Location: ../profil.php");
    exit();
}