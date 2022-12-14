

<?php
    include('config/script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />
  	<link href="assets/css/style.css" rel="stylesheet" />

</head>
<body class="d-flex justify-content-center align-items-center" >
    <div style="box-shadow: -7px 7px 20px black;  border-radius: 1rem!important;" class="d-flex " >
        <img class="half" style=" width: 400px;  height:480px; border-top-left-radius: 1rem!important; border-bottom-left-radius: 1rem!important; " src="assets/img/bg.jpg" alt="bg">
        <section style=" height:30rem; background-color: #50545F ; border-top-right-radius: 1rem!important; border-bottom-right-radius: 1rem!important;" class="otherhalf"> 
             <h6 class=" d-flex justify-content-end m-3 fw-light">Don’t have an account ?<span><a href="pages/signUp.php">Sign up</a></span></h6>
             <h1 style="font-size: 3rem;" class="text-white mx-5 my-4 fw-light">LOG IN</h1>            
            <form id="LogIn" action="config/script.php" method="POST" class="" data-parsley-validate>
                <div class="mx-5">
                    <?php if(isset( $_SESSION['error'])){ ?>
                      <div style="background-color: #DB8383;" class="text-black p-2 rounded-3 fw-bold text-center"><?= $_SESSION['error'];?></div>
                    <?php  }     unset($_SESSION['error']); ?>
                </div> 
                <div class="mx-5">
					<label for="userNAme" class="col-form-label text-white fw-light">USER NAME</label>
				    <input style="background:none;" class="form-control border border-white border-1 rounded " type="text" name="userName"  class="form-control" id="userNAme" data-parsley-trigger="keyup"  data-parsley-minlength="5" data-parsley-maxlength="20"  required>
		        </div>  
                <div class="m-5">
					<label for="password" class="col-form-label text-white fw-light">PASSWORD</label>
				    <input style="background:none;" class="form-control border border-white border-1 rounded " type="password" name="password"  class="form-control" id="password" data-parsley-trigger="keyup"  data-parsley-minlength="8" required>
		        </div>  
                <button style="width:19.3rem "  type="submit" id="task-save-btn" name="login" class="btn btn-primary mx-5 my-4 rounded-pill fw-light border-0" > L  O  G  I  N </button>
            </form>      
        </section>
    </div>
</body>
<script src="main.js"></script>
</html>
