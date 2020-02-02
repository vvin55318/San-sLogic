<?=include("main.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊</title>
    <?=$front_css?>

</head>
<body class="vh-100">
<?=$header?>

<!-- sign up -->
<section id="signup_sec" class="container w-75 h-75">
    <div class=" d-flex flex-column justify-content-around align-items-center w-100  h-100" style="margin-top:96px;">
        <h3 class="mt-5">Sign up</h3>
        <form class="d-flex flex-column justify-content-center align-items-center">
            <div class="form-group mt-2">
                <label for="exampleInputAddress1">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress1" aria-describedby="addressHelp">
            </div>
            <div class="form-group my-2">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-2">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-grou my-2">
                <label for="exampleInputChkPassword1">Confirm Password</label>
                <input type="chk" class="form-control" id="exampleInputChkPassword1" aria-describedby="chkpasseord">
            </div>
            <div class="form-group my-2">
                <label for="exampleInputVerificationCode1">
                    Verification code</label>
                <input type="VerificationCode" class="form-control" id="exampleInputVerificationCode1">
            </div>
            <div class="w-100 d-flex justify-content-between">
                <a href="signin.php" class="btn-link text-san-blue">sign in</a>
            </div>
            <button type="submit" class="btn btn-primary align-self-center mt-5">Submit</button>
        </form>
    </div>
</section>

<?=$footer_2?>
<?=$plugins?> 
</body>
</html>