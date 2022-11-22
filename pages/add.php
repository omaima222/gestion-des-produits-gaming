<?php
    include('../config/script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    
    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />
  	<link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body class="dashboard_product d-flex  p-5">
    <header class="">
        <a href="dashboard.php"><img class="mx-4" src="../assets/img/logo.png" alt="logo"></a>
    </header>
    <section style=" block-size: fit-content; width:fit-content; background-color: rgba(0, 0, 0, 0.842); border-radius: 1rem;" class=" product border border-white border-2 mx-5 ">
    <div class="d-flex justify-content-between mx-5 my-3">
     <h1 style="font-weight:lighter;" class="text-white">PRODUCT</h1>
     <a href="dashboard.php"><h2 class="my-4">X</h2></a>
    </div>
     <form class="productForm" id="addForm" action="../config/script.php"  method="POST" enctype="multipart/form-data">
        <div class="d-flex justify-content-center py-2 px-5">
        <section class="mx-3">
      <div class="my-2">
					<label for="name" class="col-form-label text-white fw-light">Name</label>
				    <input  class="form-control border border-white border-2 text-white fw-light " type="text" name="name"  class="form-control" id="name" required>
	  </div>  
      <div class="my-2">
					<label for="category" class="col-form-label text-white fw-light">Category</label>
						 <select class="form-select  border border-white border-2 text-white fw-light" style="background:none;  border-radius: 0.6rem; " aria-label="Default select example" name="category" id="category" required>
						 <option selected disabled value="">PLease select</option>
						 <option value= 1 >Video games</option>
					     <option value= 2 >PC gamer</option>
						 <option value= 3 >Gaming mouse</option>
						 <option value= 4 >Gaming keyboard</option>
                         <option value= 5 >Gaming laptop</option>
                         </select>
      </div>  
      <div class="my-2">
					<label for="quantity" class="col-form-label text-white fw-light">Quantity</label>
				    <input  class="form-control border border-white border-2 text-white fw-light " type="text" name="quantity"  class="form-control" id="quantity" required>
	  </div>  
      <div class="my-2">
					<label for="price" class="col-form-label text-white fw-light">Price</label>
				    <input  class="form-control border border-white border-2 text-white fw-light  " type="text" name="price"  class="form-control" id="price" required>
	  </div>  
      </section>
      <section class="mx-3" >
      <div class="my-2">
					<label for="photo" class="col-form-label text-white fw-light ">Photo</label>
				    <input  class="form-control border border-white border-2 "accept=" .jpg, .png, .jpeg" type="file" name="photo"  class="form-control" id="photo" required>
	  </div>  
      <div class="my-2">
					<label for="description" class="col-form-label text-white fw-light">Description</label>
		            <textarea style="background:none;  border-radius: 0.6rem; height:12.5rem; " class="form-control text-white fw-light  border border-white border-2 text-white fw-light" name="description" id="description" required></textarea>
	  </div>
      </section>
      </div>
      <div class="d-flex justify-content-end my-3 mx-5">
        <button style="width:8rem; background-color: #38A04F!important; font-weight:lighter;" type="submit" id="task-add-btn" name="add" class="btn btn-primary" >A D D</button>
      </div>
      </form>
    </section>

</body>


</html>