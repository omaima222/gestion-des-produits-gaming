<?php

   include('db_conn.php');
   session_start();
   if(isset($_POST['signup']))   signUp();
   if(isset($_POST['login']))    logIn();
   if(isset($_POST['add']))    addProduct();
   if(isset($_POST['update'])) updateProduct();
   if(isset($_POST['delete'])) deleteProduct();

  

//__________________________________L O G I N__________________________________//


function logIn(){
    global $conn;
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $sql="SELECT * FROM user WHERE name='$userName' && password='$password'";

    if(mysqli_num_rows(mysqli_query($conn,$sql))){
        header("Location:../pages/dashboard.php?");
    }
    else
    {
    echo "incorrect inputs";
    }
}

//__________________________________S I G N U P__________________________________//


function signUp(){

    global $conn;
    $userName = htmlspecialchars(trim($_POST['SuserName']));
    $email    = htmlspecialchars(strtolower($_POST['Semail']));
    $password = htmlspecialchars($_POST['Spassword']);
    $signup="INSERT INTO user (name,email,password) VALUES('$userName','$email','$password')";
    $result=mysqli_query($conn,$signup);

    if($result){
        header('location:../pages/dashboard.php');
    }
  
}

//__________________________________A D D__________________________________//


function  addProduct(){
    global $conn;
    $pic=$_FILES['photo']['name'];
    $image=$_FILES['photo']['tmp_name'];
    $name    =$_POST['name'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    // $photo=$_POST['photo'];
    $sql="INSERT INTO products (name,category_id,description,quantity,price,photo) VALUES('$name','$category','$description','$quantity','$price','$pic')";
    move_uploaded_file($image, '../assets/img/'.$pic);
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:../pages/dashboard.php');
    }
}

//__________________________________D E L E T E__________________________________//

function   deleteProduct(){
    global $conn;
    $id=$_POST['delete'];
    $sql="DELETE FROM products WHERE id ='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:../pages/dashboard.php');
    }
}
//__________________________________U P D A T E__________________________________//

function   updateProduct(){
    global $conn;

    $id=$_POST['UPid'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $pic=$_FILES['photo']['name'];
    $image=$_FILES['photo']['tmp_name'];
    if(empty($pic)){
        $sql="UPDATE products SET name='$name' , category_id='$category' , quantity='$quantity' ,
          price='$price' , description='$description' WHERE id='$id'";
    }else{
        $sql="UPDATE products SET name='$name' , category_id='$category' , quantity='$quantity' ,
          price='$price' , description='$description' , photo='$pic' WHERE id='$id'";
        move_uploaded_file($image, '../assets/img/'.$pic);

    }
    
    $result=mysqli_query($conn,$sql);    
    if($result){
        header('location:../pages/dashboard.php');
    }
}




?>