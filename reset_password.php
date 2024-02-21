<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b4bccc0b37.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Monoton&family=Pacifico&display=swap" rel="stylesheet">
    <!-- CUstume Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Reset Password</title>
</head>
<body>

    <div class="auth-content">
        <form action="" method="post">
            <h2 class="form-title">Reset your Password</h2>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>

            <div>
                <button type="submit" name="reset-password-btn" class="btn btn-prim btn-big">Reset Password</button>
            </div>
        </form>
    </div>
    
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>