<?php
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
include("main.php");
session_start();
if(!empty($_SESSION['admin'])) header("location:bg_background.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入</title>
    <?=$front_css?>
</head>

<body class="vh-100">
<?=$header?>

<section class="container w-75 h-75 d-flex justify-content-center align-items-center">
    <div class="d-flex justify-content-around align-items-center w-100  h-100" style="margin-top:76px;">
        <!-- left form -->
        
        <div class="col d-flex flex-column justify-content-center align-items-center wow fadeInLeft">
            <h3 class="align-self-center">Sign in</h3>
            <div class="form-group mt-5">
                <label for="acc">Email address</label>
                <input type="text" class="form-control" size="30" aria-describedby="emailHelp" name="acc" id="acc">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" size="30"name="pwd" id="pwd">
            </div>
            <div id="sign_sec_form_d3" class="d-flex justify-content-between">
                <a href="signup.php" class="btn-link text-san-blue">sign up</a>
                <a href="#" class="btn-link text-san-blue">forget</a>
            </div>
            <div class="w-50">
                <button type="submit" id="signin_btn" class="btn btn-primary align-self-start mt-3">Submit</button>
            </div>
    </div>


        <!-- right img -->
    <?php
    
        $sql="SELECT * FROM p_bg_signin WHERE dpy=1";
        $rows=$db->query($sql)->fetchAll();
        // 隨機圖片
        $arr_nmb=count($rows)-1;
        $rand=rand(0,$arr_nmb);
        $img=$rows[$rand]['text'];

        // 尺寸
        $size=$rows[$rand]['size'];
        if($size==1) $img_size=4;
        else if($size==2) $img_size=5;
        else $img_size=6;
    echo '
            <img class="wow fadeInRight col-'.$img_size.'" src="upload/'.$img.'" alt=""><img>
            ';
    ?>
    </div>
</section>

<?=$footer_2?>
<?=$plugins?>
<script>
    
    

    $("#signin_btn").on("click",function(){
        var acc=$("#acc").val();
        var pwd=$("#pwd").val();
        // var acc=document.getElementById("acc").value;
        // var pwd=document.getElementById("pwd").value;
        const chk={
        acc: acc,
        pwd: pwd
        };
        $.post("api.php?do=check", chk ,function(re){
            if(re=="acc_pwd_correct") location.href="bg_background.php";
            else {
                alert(re);
            };
        })
    })

</script>
</body>
</html>