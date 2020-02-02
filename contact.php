<?=include("main.php")?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>聯絡我們</title>
    <?=$front_css?>
</head>

<body class="vh-100">
<?=$header?>

<!-- contact title -->
<div class="container w-75 ">
    <h3 class="text-center wow fadeIn" style="margin-top:125px;">Contact</h3>
</div>
<!-- contact form -->
<section id="contact_sec" class="w-100 d-flex justify-content-center align-items-center  wow fadeIn" data-wow-delay="0.5s">
    <div id="section_contact_form_d1" class="container w-50  d-flex justify-content-center" style="border:2px solid #0b025a;border-radius:5px">
        <form action="api.php?do=contact" method="post" style="margin-bottom:0px">
            <div class="d-flex flex-column justify-content-center align-items-start m-5">
                <div class="form-group col-12">
                    <label for="inputName4">name</label>
                    <input type="text" class="form-control" id="inputName4" name="name" size="30">
                </div>
                <div class="form-group col-12">
                    <label for="inputEmail">email</label>
                    <input type="text" class="form-control" id="inputEmail" name="email" size="30">
                </div>
                    <div class="form-group col-12">
                        <label for="address">address</label>
                        <input type="text" class="form-control" id="address" name="address" size="30">
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" name="time" id="time" value="">
                        <label for="message" >留言</label>
                        <textarea class="form-control" id="message" name="message" rows="4" ></textarea>
                    </div>
                <button type="submit" class="btn btn-primary" id="confirm">confirm</button>
            </div>
        </form>
        </div>
</section>

<?=$footer_1?>
<?=$plugins?>

<script>
    // 設定訪客留言時間
    Date.now()
    var time=new Date()
    time.getFullYear()
    time.getMonth()+1
    time.getDate()
    time.getHours()
    time.getMinutes()
    time.getSeconds()
    time=`${time.getFullYear()}-${time.getMonth()+1}-${time.getDate()} ${time.getHours()}:${time.getMinutes()}:${time.getSeconds()}`
    console.log(time)
$("#confirm").click(function(){
    $("#time").attr("value",time)
})
</script>
</body>
</html>