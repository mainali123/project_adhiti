<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v4 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/sign-up.css">
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="https://m.media-amazon.com/images/I/71FLtz7W7eL._SX679_.jpg" alt="">
        </div>
        <form action="">
            <h3>Log In</h3>
            <!--<div class="form-holder active">
                <input type="text" placeholder="name" class="form-control">
            </div>-->
            <div class="form-holder">
                <input type="text" placeholder="e-mail" class="form-control">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-login">
                <button>Login</button>
                <p>Don't Have Account? <a href="sign-up.php">Sign up</a></p>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script>
    $(function(){
        $('.form-holder').delegate("input", "focus", function(){
            $('.form-holder').removeClass("active");
            $(this).parent().addClass("active");
        })
    })
</script>