<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/pages/B1.css">

</head>
<body>

 <div class="overlay">
            <!-- LOGN IN FORM by Omar Dsoky -->
            <form action="{{route('login')}}" method='POST'>
               @csrf
               <!--   con = Container  for items in the form-->
               <div class="con">
               <!--     Start  header Content  -->
               <header class="head-form" >
                  <h2>Log In</h2>
                  <!--     A welcome message or an explanation of the login form -->
                  <p>login here using your username and password</p>
               </header>
               <!--     End  header Content  -->
               <br>
               <div class="field-set">

                  <!--   user name -->
                     <span class="input-item">
                       <i class="fa fa-user-circle"></i>
                     </span>
                    <!--   user name Input-->

                     <input class="form-input" id="txt-input" type="text" placeholder="@UserName"  required>

                  <br>

                       <!--   Password -->

                  <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <!--   Password Input-->
                  <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>

            <!--      Show/hide password  -->
                 <span>
                    <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                 </span>


                  <br>
            <!--        buttons -->
            <!--      button LogIn -->

            <input type='submit'    />
                  {{-- <a class="btn-rounded" role="button"> Log In </a> --}}
               </div>

            <!--   other buttons -->
               <div class="other">
            <!--      Forgot Password button-->
                  <button class="btn submits frgt-pass">Forgot Password</button>
            <!--     Sign Up button -->
            <a href="register" class="btn btn-danger" role="button" data-mdb-toggle="button">Register Now</a>

            <!--         Sign Up font icon -->
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
</a>
            <!--      End Other the Division -->
               </div>

            <!--   End Conrainer  -->
              </div>

              <!-- End Form -->
            </form>

            </div>

</body>
