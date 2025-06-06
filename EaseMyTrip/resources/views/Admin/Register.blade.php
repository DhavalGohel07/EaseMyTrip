<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title> 

    <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(rgba(20, 20, 20, .5), rgba(20, 20, 20, .5)), url("images/admin-bg.jpg");

}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;  
  background: #ed7e64;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #ed7e64;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #ed7e64;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #ed7e64;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #ed7e64;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
.error{
        font-weight: bold;
        color:#ff0000;
        text-align: center;
        padding: auto;
    }
    </style>

   </head>
<body>
  <div class="wrapper">
    <h2>Admin-Registration</h2> <form action="{{ route('admin-register') }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="input-box">
        <input type="text" maxlength="50" name="Name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="email" name="Email" placeholder="Enter your Email" required>
      </div>
      <div class="input-box">
        <input type="phone" name="PhoneNumber" maxlength="10" placeholder="Enter Phone Number" required>
      </div>
      <div class="input-box">
        <input type="password"  name="Password" placeholder="Create password" required>
      </div>
      
      <div >

        @if(Session::has('error'))
        <div class="error" role="alert">
            {{ Session::get('error') }}
        </div>

    @endif
    </div>

      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="admin-login">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>