<?=include("main.php")?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>最新消息</title>
    <?=$front_css?>
</head>
<body class="vh-100">
<?=$header?>
   

<!-- news title -->
<div class="container w-75">
    <h3 class="text-center wow fadeIn" style="margin-top:96px;">News</h3>
</div>
<!-- news menu bar -->
<div class="container w-75 d-flex justify-content-center align-items-center wow fadeIn" data-wow-delay="0.5s">
    <hr class="w-25">
        <h5><span class="link_ti px-1" style="cursor:pointer;font-size:1.5rem;color:#ffff33" id="event_btn">event</span></h5>
    <hr class="w-25">
        <h5><span class="link_ti px-1" style="cursor:pointer" id="product_btn">product</span></h5>
    <hr class="w-25">
</div>
<!-- news -->
<section id="con100" class="container w-75 " >

</section>

<?=$footer_1?>
<?=$plugins?>

<script>
    $.get("news_event.php",function(re){
      $("#con100").html(re)  
    })



  $("#event_btn").click(function(){
      $("#event_btn").css({"font-size":"1.5rem","color":"#ffff33"})
      $("#product_btn").css({"font-size":"1rem","color":"#fff"})
    $.get("news_event.php",function(re){
      $("#con100").html(re)  
    })
  })


  $("#product_btn").click(function(){
    $("#event_btn").css({"font-size":"1rem","color":"#fff"})
      $("#product_btn").css({"font-size":"1.5rem","color":"#ffff33"})
    $.get("news_product.php",function(re){
      $("#con100").html(re)  
    })
  })

</script>

</body>
</html>