<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/something">
</head>

<body>

  <style>
     @media(max-width: 500px) {
        header img {
           display: block;
        }
        header {
           padding-left: 25%;
        }
     }
  </style>

  <header> 
    <img src="img/retro.png" alt="">
    <img src="img/logo.png" class="marginImg" alt="">
    
  </header>

 
   <div class="live" style="background: url('img/login.jpg');">
       
        <div class="double">
           <div class="welcome">
              <div class="up">Welcome to <b>Sterling Bank</b></div>
              <div class="down">Learning Management System</div>
           </div>
        </div>
        <div class="double2">
           <div class="loginBox">
               <div class="loginTop">
                  <div class="nick">
                      <i class="material-icons">person</i><span>Sign in</span>
                  </div>
               </div>

               <form action="" class="loginForm">
                  <label for="">Email address</label>
                  <input type="email" />

                  <label for="">Password</label>
                  <input type="password" />


                  <h4><input type="radio" name="" id=""> Remember me</h4>

                  <input type="submit" value="LOG IN">

                  <h5><a href="#">Forgot your Password?</a></h5>
               </form>
           </div>
        </div>
  

   </div>

</body>
</html>