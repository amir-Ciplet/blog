<?php






?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="registerpage.css"/>
</head>
<body>
<h1 class="h1">register</h1>

    <div class="main">

            <form methode="POST" action="../fucntion/register.php">
            <input type="text" class="input" name="username" placeholder="username"/>
            <input type="password" class="input" name="password" placeholder="password"/>
            <input type="password" class="input" name="confirm_password" placeholder="confirm password"/>
            <input type="text" class="input" name="email" placeholder="email"/>


            <input type="submit" class="submit"/>

        </form>
        
    </div>
    
</body>
</html>