<?php
if (isset($_POST['submit-update'])){
    
    require 'dbh.inc.php';
    
    $oldmail = $_POST['oldmail'];
    $newmail = $_POST['newmail'];
    $newuser = $_POST['newuser'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    
    if(empty($oldmail) || !filter_var($oldmail, FILTER_VALIDATE_EMAIL) || empty($newmail) || !filter_var($newmail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../profil.php?error=invalid");
        exit();
    }
    else if(empty($password)){
        header("Location: ../profil.php?error=nopassword");
        exit();
    }
    else if(empty($passwordRepeat)){
        header("Location: ../profil.php?error=norepeatpassword");
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../profil.php?error=passwordsdonotmatch");
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
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            
            $stmt -> bind_param("ss", $oldmail, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            /*
            $result_check = mysqli_stmt_num_rows($stmt);
            if($result_check > 1 || $result_check < 1){
                header("Location: ../profil.php?error=wrongpassword");
                exit();
            }
            else{ */
                $sql = "UPDATE users SET uidUsers = ?, emailUsers = ? WHERE emailUsers = ?;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../profil.php?error=sqlerror");
                    exit();
                }
                else{
                    
                    mysqli_stmt_bind_param($stmt, "sss", $newuser, $newmail, $oldmail);
                    mysqli_stmt_execute($stmt);
                    
                    header("Location: ../profil.php?update=success");
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