<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(rgba(20, 20, 20, .5), rgba(20, 20, 20, .5)), url("images/admin-bg.jpg");
    }

    .wrapper {
      position: relative;
      max-width: 430px;
      width: 800px;
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .wrapper h2 {
      position: relative;
      font-size: 22px;
      font-weight: 600px;
      color: #333;
    }

    .wrapper h2::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 28px;
      border-radius: 12px;
      background: #ed7e64;
    }

    .wrapper form {
      margin-top: 30px;
    }

    .wrapper form .input-box {
      height: 52px;
      margin: 18px 0;
    }

    form .input-box input {
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
    .input-box input:valid {
      border-color: #ed7e64;
    }

    form .policy {
      display: flex;
      align-items: center;
    }

    form h3 {
      color: #707070;
      font-size: 14px;
      font-weight: 500;
      margin-left: 10px;
    }

    .input-box.button input {
      color: #fff;
      letter-spacing: 1px;
      border: none;
      background: #ed7e64;
      cursor: pointer;
    }

    .input-box.button input:hover {
      background: #ed7e64;
    }

    form .text h3 {
      color: #333;
      width: 100%;
      text-align: center;
    }

    form .text h3 a {
      color: #ed7e64;
      text-decoration: none;
    }

    form .text h3 a:hover {
      text-decoration: underline;
    }

    .otp-input {
      height: 50px;
      width: 50px;
      outline: none;
      padding: 0 15px;
      font-size: 17px;
      font-weight: 400;
      color: #333;
      border: 1.5px solid #C7BEBE;
      border-bottom-width: 2.5px;
      border-radius: 6px;
      transition: all 0.3s ease;
      margin: 10px 5px;
      text-align: center;
    }

    .otp-input:focus,
    .otp-input:valid {
      border-color: #ed7e64;
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

  <h2>Verify OTP</h2>


  <form action="{{ route('checkotp') }}" method="POST">
    @csrf
    <div id="otp-container">

        

<input type="hidden" name="email" value="{{Session::get('email')}}">
<input type="hidden" name="emailotp" value="{{Session::get('otp')}}">

<input type="text" name="otp[]" maxlength="1" class="otp-input" autofocus required>
<input type="text" name="otp[]" maxlength="1" class="otp-input" required>
<input type="text" name="otp[]" maxlength="1" class="otp-input" required>
<input type="text" name="otp[]" maxlength="1" class="otp-input" required>
<input type="text" name="otp[]" maxlength="1" class="otp-input" required>
<input type="text" name="otp[]" maxlength="1" class="otp-input" required>
    </div>
    <div class="input-box button">
      <input type="submit" value="Verify OTP">
    </div>
    @if(Session::has('error'))
    <div class="error" role="alert">
      {{ Session::get('error') }}
    </div>
    @endif
  </form>

</div>

<script>
    const otpInputs = document.querySelectorAll('.otp-input');

    otpInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.inputType === 'deleteContentBackward') {
                if (index > 0) {
                    otpInputs[index - 1].focus();
                }
            } else if (index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
        });
    });
</script>

</body>
</html>
