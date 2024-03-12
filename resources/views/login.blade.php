<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
        }
        *{
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            overflow: hidden;
        }
        .main-container{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .cont-bg{
            background-color: rgb(19, 19, 19);
            height: 100vh;
            width: 50%;
        }
        .form-container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
        }
        .form_data{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .input_holders{
            height: 42px;
            width: 320px;
            padding-left: 8px;
            border-radius: 3px;
            border: rgb(199, 199, 199) solid 1px;
        }
        .quote_obj{
            position: absolute;
            color: white;
            bottom: 0;
            width: 30%;
            margin: 30px;
            z-index: 9;
        }
        .form_devider{
            margin-top: 20px;
            height: 1px;
            width: 20%;
            border-radius: 999px;
            background-color: rgb(199, 199, 199);
        }
        .sub_btn{
            background-color: rgb(37, 37, 37);
            border: none;
            height: 42px;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
        }
        .loading {
            display: none;
        }
        .bg_vid{
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            object-fit: cover;
            opacity: 50%;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="cont-bg">
            <video src="/video/vidbg.mp4" loop="true" autoplay muted class="bg_vid"></video>
        </div>
        <div class="form-container">
           
            <form method="POST" class="form_data" action="{{ route('login.store') }}">
                @csrf
        
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="email" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="form_devider"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        const continueBtn = document.querySelector('.continue-btn');
        const passwordInput = document.querySelector('.password-input');
        const emailInput = document.querySelector('.email-input');
        const loginBtn = document.querySelector('.login-btn');
        const email_notice = document.querySelector('.email_notice')
        const password_notice = document.querySelector('.password_notice')

        continueBtn.addEventListener('click', function() {
            continueBtn.disabled = true;
            setTimeout(function() {
                continueBtn.style.display = 'none';
                password_notice.style.display = 'block';
                passwordInput.style.display = 'block';
                loginBtn.style.display = 'block';
                emailInput.style.display = 'none';
                email_notice.style.display = 'none';
            }, 2000);
            continueBtn.textContent = 'Loading...';
        });
    </script>
</body>
</html>
