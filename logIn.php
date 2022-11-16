<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
   	<link href="assets/css/app.min.css" rel="stylesheet" />
  	<link href="assets/css/style.css" rel="stylesheet" />
</head>
<body style=" background-color: #101622 ;">
     <div style=" width: fit-content" class="d-flex justify-content-center align-items-center " >
        <img style=" width: 400px;  height:480px;" src="assets/bg.jpg" alt="bg">
        <section style="width: 400px;  height:480px; background-color: #50545F ;"> 
             <h6 class="d-flex justify-content-end m-3">Don’t have an account ?<span><a href="">Sign up</a></span></h6>
             <h1 style="font-size: 3rem;" class="text-white mx-5 my-4">LOG IN</h1>
             <form id="LogIn" action="" class="">
                <div class="mx-5">
					<label for="USER NAME" class="col-form-label text-white">USER NAME</label>
				    <input style="background-color: #50545F;" class="form-control border border-white border-1 rounded " type="text" name="userName"  class="form-control" id="userNAme" required>
		        </div>  
                <div class="m-5">
					<label for="PASSWORD" class="col-form-label text-white">PASSWORD</label>
				    <input style="background-color: #50545F;" class="form-control border border-white border-1 rounded " type="text" name="password"  class="form-control" id="password" required>
		        </div>  
                <button style="width:19.3rem"  type="submit" id="task-save-btn" name="save" class="btn btn-primary mx-5 rounded-pill" >L O G I N</button>
             </form>
             
        </section>
     </div>
</body>
</html>