<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="color.css"> 
         </head> 
         <body>
             <header>
             <div class="logo"> <img src="pics/WhatsApp Image 2024-07-02 at 1.17.29 PM.jpeg" alt="Logo"> </div> 
             <nav>
             <label class="logo">ANTHILL TRAVEL SOLUTIONS</label>
    <a href="#">Home</a> 
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
    <a href="signup.php">Sign Up</a>
</nav>
</header>
<head>
<main>
<h1>Sign Up</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <label for="username">Username:</label> <input type="text" id="username" name="username" placeholder="Enter your username" required>
       <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Enter your email" required>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <label for="password_confirmation">Repeat password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>

    <button type="submit">Sign Up</button>
    <a href="login.php"><button type="button">Login</button></a>
</form>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #17616e;
            padding: 20px;
        }

        form {
            background-color: #7697a0;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 50%;
            margin-left:25%
           
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px maroon;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color:#964405 ;
            color: #0b2839;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 15px;
        }

        button:hover {
            background-color: #5a3211;
        }
        h1{
            text-align: center;
            color: #10475e;
        }
    </style>
</body>
<footer>
    <p>&copy; 2024 ANTHILL TRAVEL SOLUTIONS. All rights reserved.</p>
</footer>
</html>