<?php
    include('../config/script.php');
    include('../config/db_conn.php');
    if(!isset($_SESSION['userid'])){
        header('location:../index.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit or delete a product</title>
    
    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />
  	<link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body class="dashboard_product ">
   <header  class="d-flex justify-content-between" >
        <a href="dashboard.php"><img class="m-4" src="../assets/img/logo.png" alt="logo"></a>
        <?php 
                global $conn;
                $uid=$_SESSION['userid'];
                $sql="SELECT * FROM user 
                    WHERE id='$uid'";
                $result=mysqli_query($conn,$sql);
                $user=mysqli_fetch_assoc($result);
        ?>
        <section class="text-center">
           <h4 class="text-white fw-light m-4"><?= $user['name']; ?><span> <a  class="m-1" href="../config/logout.php"><img style="width:2rem; height:2rem;" src="../assets/img/user.png" alt=""></a>    </span></h4>
        </section>
   </header>
   <div style="width:100%;" class="product_container d-flex justify-content-center p-2">
     <section style=" block-size: fit-content; width:fit-content; background-color: rgba(0, 0, 0, 0.842); border-radius: 1rem;" class=" product border border-white border-2">
            <div class="d-flex justify-content-between mx-5 my-3">
              <h1 style="font-weight:lighter;" class="text-white mx-3">PRODUCT</h1>
              <a href="dashboard.php"><h2 class="my-4">X</h2></a>
            </div>
            <?php

                global $conn;
                if(isset($_GET['id'])){
                  $id=$_GET['id'];
                  $sql="SELECT * FROM products 
                    INNER JOIN categories on products.category_id=categories.c_id 
                    WHERE id='$id'"; 
              
                  $result=mysqli_query($conn,$sql);
                  $products=mysqli_fetch_assoc($result);

                  $name=$products['name'];
                  $category=$products['category_id'];
                  $quantity=$products['quantity'];
                  $price=$products['price'];
                  $description=$products['description'];
                  $pic=$products['photo'];
                }
              ?>
              <form class="productForm" id="editDeleteForm"  action="../config/script.php" method="POST" enctype="multipart/form-data" >
                        <input  value="<?=$products['id'];?>" type="hidden" name="UPid">

                        <div class="all d-flex justify-content-center py-2 px-5">
                               <section class="mx-3">
                                     <div class="my-2">
                                        <label for="name" class="col-form-label text-white fw-light">Name</label>
                                          <input  class="form-control border border-white border-2 text-white fw-light" value="<?=$name;?>" type="text" name="name"  class="form-control" id="name" required>
                                     </div>  
                                     <div class="my-2">
                                          <label for="category" class="col-form-label text-white fw-light">Category</label>
                                          <select class="form-select  border border-white border-2 text-white fw-light" style="background:none;  border-radius: 0.6rem; " aria-label="Default select example" name="category" id="category" required>
                                            <option selected disabled value="">PLease select</option>
                                            <option value= 1  <?php echo $category==1 ? 'selected':'';?> >Video games</option>
                                            <option value= 2  <?php echo $category==2 ? 'selected':'';?>>PC gamer</option>
                                            <option value= 3  <?php echo $category==3 ? 'selected':'';?>>Gaming mouse</option>
                                            <option value= 4  <?php echo $category==4 ? 'selected':'';?>>Gaming keyboard</option>
                                            <option value= 5  <?php echo $category==5 ? 'selected':'';?>>Gaming laptop</option>
                                          </select>
                                     </div>  
                                     <div class="my-2">
                                          <label for="quantity" class="col-form-label text-white fw-light">Quantity</label>
                                          <input  class="form-control border border-white border-2 text-white  fw-light"value="<?=$quantity;?>" type="text" name="quantity"  class="form-control" id="quantity" required>
                                     </div>  
                                     <div class="my-2">
                                          <label for="price" class="col-form-label text-white fw-light">Price</label>
                                          <input  class="form-control border border-white border-2 text-white  fw-light"value="<?=$price;?>" type="text" name="price"  class="form-control" id="price" required>
                                     </div>  
                              </section>
                              <section class="mx-3" >
                                      <div class="my-2">
                                          <label for="photo" class="col-form-label text-white fw-light ">Photo</label>
                                          <input  class="form-control border border-white border-2 text-white  fw-light" value="<?=$pic;?>" accept=" .jpg, .png, .jpeg" type="file" name="photo"  class="form-control" id="photo" >
                                      </div>  
                                      <div class="my-2">
                                          <label for="description" class="col-form-label text-white fw-light">Description</label>
                                          <textarea style="background:none;  border-radius: 0.6rem; height:12.5rem; " class="form-control text-white fw-light  border border-white border-2 text-white  fw-light" name="description" id="description" required><?=$description;?></textarea>
                                      </div>
                              </section>
                        </div>
                        <div class="d-flex justify-content-end my-3 mx-5">
                          <button style="width:8rem; background-color: #CD1C1C!important; font-weight:lighter;" value="<?=$id;?>" onclick="return confirm('do you really want to delete this product?')" type="submit" id="task-delete-btn" name="delete" class="btn btn-primary mx-4" >D E L E T E</button>
                          <button style="width:8rem; background-color: #4337D3!important; font-weight:lighter;" type="submit" id="task-update-btn" name="update" class="btn btn-primary" >U P D A T E</button>
                        </div>
              </form>
     </section>
  </div>
</body>


</html>