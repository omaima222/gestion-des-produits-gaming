<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />
  	<link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body class="d-flex justify-content-center align-items-center" style=" background-color: #101622;">
     <div style="box-shadow: -7px 7px 20px black;  border-radius: 1rem!important;" class="d-flex " >
        <img class="" style=" width: 400px;  height:480px; border-top-left-radius: 1rem!important; border-bottom-left-radius: 1rem!important; " src="../assets/img/bg.jpg" alt="bg">
        <section style="width: 400px;  height:480px; background-color: #50545F ; border-top-right-radius: 1rem!important; border-bottom-right-radius: 1rem!important;" class="py-5 "> 
             <h1 style="font-size: 3rem;" class="text-white m-5  fw-light">SIGN UP</h1>            
            <form id="LogIn" action="" class="">
                <div class="mx-5">
					<label for="USER NAME" class="col-form-label text-white fw-light">USER NAME</label>
				    <input style="background-color: #50545F;" class="form-control border border-white border-1 rounded " type="text" name="userName"  class="form-control" id="userNAme" required>
		        </div>  
                <div class="mx-5 my-3">
					<label for="EMAIL" class="col-form-label text-white fw-light">EMAIL</label>
				    <input style="background-color: #50545F;" class="form-control border border-white border-1 rounded " type="email" name="email"  class="form-control" id="email" required>
		        </div>  
                <div class=" mx-5 my-3">
					<label for="PASSWORD" class="col-form-label text-white fw-light">PASSWORD</label>
				    <input style="background-color: #50545F;" class="form-control border border-white border-1 rounded " type="password" name="password"  class="form-control" id="password" required>
		        </div>  
                <button style="width:19.3rem "  type="submit" id="task-save-btn" name="save" class="btn btn-primary mx-5 my-4 rounded-pill fw-light border-0" > L  O  G  I  N </button>
            </form>      
        </section>
     </div>
</body>
</html>