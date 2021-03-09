<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Login</title>
</head>

<body>

<div class="wrapper">

<header>
        <div class="logo">
        <img  src="images/9.png" alt="">
        <h1 >Online Library Management System</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
    </header>

    <section>
    
    <div class="log_img">
    <div class="boxu">
        <h1 style="font-size: 1.5em; text-align: center;">Library Management System</h1><br>
        <h1>User Login Form</h1><br>

        <form name="login" action="" method="post">
            <div class="login">
            <input type="text" name="username" placeholder="Username" id="" required> <br>
            <input type="password" name="password" placeholder="Password" id="" required> <br>
            <button>Login</button>
            </div>
        </form>
        <p>
            <a href="">forgot password</a><br><br><br>
            New to this website? <a href="registration.php">sign up</a>
        </p>
    </div>
    </div>
    
    </section>

    <footer>
        <p style="position:relative; top:3vh; color:white; text-align:center; font-size:1.2em;">
            Email:&nbsp; &nbsp; online.online@library-lb.com <br><br>
            Mobile:&nbsp; &nbsp; +3254400********  
        </p>
    </footer>

</div>
</body>
</html>