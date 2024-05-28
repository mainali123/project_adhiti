<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Signup</title>
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
            <h3>Sign Up</h3>
            <div class="form-holder active">
                <input type="text" placeholder="name" class="form-control">
            </div>
            <div class="form-holder">
                <input type="text" placeholder="e-mail" class="form-control">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> I agree all statement in <a href="#">Terms & Conditions</a>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-login">
                <button>Sign up</button>
                <p>Already Have account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
</body>
</html>

<script>
    $(function(){
        $('.form-holder').delegate("input", "focus", function(){
            $('.form-holder').removeClass("active");
            $(this).parent().addClass("active");
        })
    })


</script>