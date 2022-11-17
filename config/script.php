<?php

   include('db_conn.php');
   session_start();
   if(isset($_POST['signup']))  signUp();
   if(isset($_POST['login']))    logIn();


//__________________________________L O G I N__________________________________//


function logIn(){
    global $conn;
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $sql="SELECT * FROM user WHERE name='$userName' ";
    $result=mysqli_query($conn,$sql);

    if($result){
        $user= mysqli_fetch_assoc($result);
        if( password_verify( $password , $user['password'])){
           echo "success";
        }else{echo "failure";}
    }else{
        echo "incorrect inputs";
    }


}

//__________________________________S I G N U P__________________________________//

function signUp(){

    global $conn;
    $userName = htmlspecialchars(trim($_POST['SuserName']));
    $email    = htmlspecialchars(strtolower($_POST['Semail']));
    $password = password_hash(htmlspecialchars($_POST['Spassword']),PASSWORD_DEFAULT);

    $signup="INSERT INTO user (name,email,password) VALUES('$userName','$email','$password')";
    $result=mysqli_query($conn,$signup);

    if($result){
        header('location:../index.php');
    }
  
}




?>