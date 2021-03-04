<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BAPERS | Sign In</title>

    <link rel="stylesheet" href="css/index/index.css">
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <main>
        <div class="hero-img">
            <img draggable="false" src="images/index-img.jpg" alt="Camera image for the home page of BAPERS system">
        </div>
        <div class="hero-form">
            <form method="POST" action="">
                <h1>Sign in to your account</h1>
                <div class="form-input-email">
                    <label for="login-email">Email:</label>
                    <input type="email" placeholder="Email" name="login-email" id="login-email" required>
                </div>
                <div class="form-input-password">
                    <label for="login-email">Password:</label>
                    <input type="password" placeholder="Password" name="login-password" id="login-password" required>
                </div>
                <div class="form-input-submit">
                    <input type="submit" value="Sign In" name="login-btn" id="login-btn">
                </div>
            </form>
        </div>
    </main>
</body>
</html>