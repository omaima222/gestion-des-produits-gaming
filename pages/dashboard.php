
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
    <title>Admin dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://www.w3.org/2000/svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
   	<link href="../assets/css/app.min.css" rel="stylesheet" />
  	<link href="../assets/css/style.css" rel="stylesheet" />

</head>
<body class="dashboard_product p-3">
        <header class="bar d-flex justify-content-between" >
              <a  class="text-center"href="dashboard.php"><img src="../assets/img/logo.png" alt="logo"></a>
              <h1 class="text-white fw-light text-center">ADMIN DASHBOARD</h1>
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
        <div style=" block-size: fit-content;" class="Btable d-flex justify-content-center rounded-3 p-2">
                 <section style="" class=" border border-white rounded-3 border-2 m-2 p-4">
                      <h2 class="d-flex justify-content-between text-white fw-light ">All products<span><a href="add.php">+</a></span></h2>
                      <div class="table-responsive">
                            <table  class="table bg-none text-white fw-light  ">
                                  <thead>
                                    <tr  style="font-size: 1rem;" class="my-4">
                                    <th scope="col">ID</th>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                          <?php 
                                            global $conn;
                                            $sql="SELECT * FROM products 
                                                  INNER JOIN categories on products.category_id=categories.c_id";
                                            $result = mysqli_query($conn,$sql);
                                            ?>

                                            <?php   while($product = mysqli_fetch_assoc($result)){  
                                              if(strlen($product['description'])>30){
                                                $desc= substr($product['description'],0,30).' . . .';
                                              }else $desc=$product['description'];
                                          ?>            
                                          <tr id="case" scope="row" style="font-size: 0.9rem;" class="clickable" onclick="window.location='Edit_delete.php?id=<?= $product['id']; ?>'">
                                            <td><?= $product['id']; ?></td>
                                            <td><img style ="width:5rem;" src="../assets/img/<?= $product['photo']; ?>" alt=""></td>
                                            <td><?= $product['name']; ?></td>
                                            <td><?= $product['category_name']; ?></td>
                                            <td title="<?= $product['description']; ?>"><?= $desc; ?></td>
                                            <td><?= $product['quantity']; ?></td>
                                            <td><?= $product['price'].'???'; ?></td>
                                          </tr>
                                            
                                          <?php } ;  ?>
                                  </tbody>
                            </table>
                      </div>
                  </section>
                  <section  style="" class=" border rounded-3 border-white border-2 m-2 p-4 ">
                      <h2 class="d-flex justify-content-between text-white fw-light">Statistics</h2>
                      <div class="statics">
                            <table class="table bg-none text-white fw-light ">
                                <thead>
                                  <tr style="font-size: 1rem;" class="my-4">
                                  <th scope="col">Products total</th>
                                  </tr>
                                </thead>
                                <tbody style="font-size: 0.9rem;">
                                    <?php 
                                      global $conn;
                                      $sql="SELECT category_id FROM products";
                                      $result=mysqli_query($conn,$sql);
                                      $pcGamer=0;
                                      $videoGames=0;
                                      $gamingMouses=0;
                                      $gamingKeyboard=0;
                                      $gamingLaptops=0;
                                      while( $product=mysqli_fetch_assoc($result)){
                                        if($product['category_id'] == 1){
                                          $videoGames++;
                                        }else  if($product['category_id'] == 2){
                                          $pcGamer++;
                                        }else  if($product['category_id'] == 3){
                                          $gamingMouses++;
                                        }else  if($product['category_id'] == 4){
                                          $gamingKeyboard++;
                                        }else  if($product['category_id'] == 5){
                                          $gamingLaptops++;
                                        }
                                        }
                                    ?>                      
                                    <tr   class="p-3" scope="row">
                                      <td>Video games : <?= $videoGames; ?></td>
                                    </tr>
                                    <tr   scope="row">
                                      <td>PC gamer  : <?= $pcGamer; ?></td>
                                    </tr>
                                    <tr   scope="row">
                                      <td>Gaming mouses : <?= $gamingMouses; ?></td>
                                    </tr>
                                    <tr   scope="row">
                                      <td>Gaming keyboards : <?= $gamingKeyboard; ?></td>
                                    </tr>
                                    <tr   scope="row">
                                      <td>Gaming laptops : <?= $gamingLaptops; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table bg-none text-white fw-light my-5 ">
                                <thead>
                                  <tr style="font-size: 1rem;" class="">
                                  <th scope="col">Products out of stock</th>
                                  </tr>
                                </thead>
                                <tbody style="font-size: 0.9rem;">
                                    <?php 
                                      global $conn;
                                      $sql="SELECT name,quantity FROM products";
                                      $result=mysqli_query($conn,$sql);
                                      while( $product=mysqli_fetch_assoc($result)){
                                         if($product['quantity'] == 0){  
                                    ?>                      
                                        <tr   class="p-3" scope="row">
                                          <td><?= $product['name'] ?></td>
                                        </tr>
                                    <?php } }; ?>
                                </tbody>
                            </table>
                          </div>
                   </section>
         </div>

</body>
</html>