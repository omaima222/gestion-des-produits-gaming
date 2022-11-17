<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://www.w3.org/2000/svg">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
   	<link href="../assets/css/app.min.css" rel="stylesheet" />
  	<link href="../assets/css/style.css" rel="stylesheet" />
    
</head>
<body class="">
  <header class="d-flex justify-content-between" >
    <a href="dashboard.php"><img class="m-4" src="../assets/img/logo.png" alt="logo"></a>
    <h1 class=" text-white d-flex align-self-center fw-light ">ADMIN DASHBOARD</h1>
    <a href=""><i class="bi bi-circle text-white fa-5x"></i></a>    
  </header>
  <div class="Btable m-4 p-3">
    <section class="border border-white border-2 m-2 p-4">
     <h2 class="d-flex justify-content-between text-white fw-light ">All products<span><a href="add.php">+</a></span></h2>
     <table class="table bg-none text-white fw-light ">
        <thead>
          <tr>
          <th scope="col"></th>
           <th scope="col">ID</th>
           <th scope="col">Name</th>
           <th scope="col">Category</th>
           <th scope="col">Description</th>
           <th scope="col">Quantity</th>
           <th scope="col">Price</th>

          </tr>
        </thead>
        <tbody>
          <tr class="">
           <th scope="row"><img src="../assets/img/product1.jpg" alt=""></th>
           <td>1</td>
           <td>Mark</td>
           <td>Otto</td>
           <td>@mdo</td>
           <th >Description</th>
           <th >Quantity</th>
          </tr>
         </tbody>
     </table>
    </section>
    <section class=" border border-white border-2 m-2 ">
      <h2 class="d-flex justify-content-between text-white fw-light m-3">Statics</h2>
    </section>
  </div>


</body>
</html>