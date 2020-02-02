<?php
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
include("main.php");
//十分鐘
setcookie("loading","55688",time()+600);
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>神邏輯公仔 san's logic</title>
<?=$front_css?>
</head>
<body class="vh-100">
   <!-- loading ------------------------------------------------------------------>
   <?php
    $rand=rand(1,5);
    switch ($rand) {
        case 1:
            $gif="5m16美拍OK";
        break;
        case 2:
            $gif="5m16耶穌OK";
            break;
        case 3:
            $gif="5m17不倒翁";
            break;
        case 4:
            $gif="5M17臥佛";
            break;
        case 5:
            $gif="5M171彌勒";
            break;
        

    }
   
   echo '
    <div id="loading" class="h-100 w-100 d-flex justify-content-center align-items-center">
            <img src="images/load/'.$gif.'.gif" style="width:600px;border-radius:10px" id="load_img">
            <div id="loading-txt"></div>
        </div>
    ';
    ?>

<?=$header?>

<!-- section carousel -->

<section class="w-100 wow fadeInDown" data-wow-duration="1.5s" id="section1">
    <div class="container w-100 h-50 d-flex justify-content-center align-items-center " style="margin-top:76px;">
        <div id="carouselExampleIndicators" class="carousel carousel-fade slide   mt-5" data-ride="carousel">
            <ol class="carousel-indicators">

    <?php
        $sql="SELECT * FROM p_bg_home where dpy=1";
        $rows=$db->query($sql)->fetchAll();
        $i=0;
        foreach($rows as $row){
            if($i==0){
                echo '
                    <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>
                ';
            }
            else {
                echo '
                <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>
                ';
            }
            $i++;
        };
    ?>

            </ol>
            <div class="carousel-inner">
                <?php
                    $sql="SELECT * FROM p_bg_home where dpy=1";
                    $rows=$db->query($sql)->fetchAll();
                    $i=0;
                    foreach( $rows as $row){
                        if($i==0){
                            echo '
                                <div class="carousel-item active ">
                                    <a href=""><img src="upload/'.$row['text'].'" class="d-block w-100"  alt="..."></a>
                                </div>
                            ';
                        }
                        else{
                            echo '
                                <div class="carousel-item">
                                    <a href=""><img src="upload/'.$row['text'].'" class="d-block w-100"  alt="..."></a>
                                </div>
                            ';
                        }
                        $i++;
                    }
                ?>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<!-- about divider------------------------------------------------------------->
<div class=" container w-75 d-flex mt-5 wow slideInRight" data-wow-duration="1.5s">
    <a href="about.php" class="h3 nav_link link_ti px-1 dicline1">About</a>
    <hr class="dicline1">
</div>

<!-- about content-->
<section id="section2" class="container w-75">
    <div  class="media mt-5 wow slideInLeft" data-wow-duration ="2.5s">
        <img src="images/home_about/4m5.jpg" class="col-8 col-md-4 align-self-center mr-3 " alt="...">
        <div class="col-12 col-md-8 media-body">
            <h3 class="mt-0">我們是神邏輯</h3>
            <p class="m-3">
                致力於提供具設計的「共鳴性」產品。
神邏輯團隊將議題及流行轉化成逗趣的產品，並嘗試在模型市場建立起屬於台灣特色的模型。目前各國都已有明確的定位，要在市場上建立起台灣模型確實不易，這也是我們團隊希望突破的挑戰!並且致力於推出更棒更好的，且更“神邏輯”的玩具給大家！
            </p>
        </div>
    </div>
</section>

<!-- product divider------------------------------------------------>
<div class="container w-75 d-flex mt-5 wow slideInRight" data-wow-duration="1.5s">
    <a href="model.php" class="h3 nav_link link_ti px-1 dicline1">model</a>
    <hr class="dicline1">
</div>

<!-- prodcut content -->
<section id="section3" class="container w-75" style="overflow:hidden">
    <div id="model" class="d-flex justify-content-between align-items-start mt-5 w-100">



        <div class="col-md-4 d-flex flex-column mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="images/home_model/31841660_2044527215809780_3565354615580917760_o.jpg" class="w-75 align-self-center" alt="">
            <div class="mt-3 wrap">
                <p><b>擋路耶穌</b></p>
                <p>經歷一場血拚過後,手提著大包小包的耶穌搭著捷運,因為下車方便就擋在車門口.</p>
                <p>--西門站到了--</p>
                <p> 路人: 那個先生?借過一下</p>
                <p> 耶穌: ??</p>
                <p> 路人: 我們沒辦法上車了</p>
                <p>耶穌: ლ(ﾟдﾟლ) 啥?</p>
            </div>



            </div>
            <div class="col-md-4 d-flex flex-column mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <img src="images/home_model/Ab_不倒翁修圖_2.jpg" class="w-75 align-self-center" alt="">
                <div class="mt-3 wrap">
                    <p><b>酒醉不倒翁</b></p>
                    <p>沒有人明白我的苦</p>
                    <p>我還沒有醉,我還可以再喝!!</p>
                    <p>路人:那個扶手要抓穩啊</p>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <img src="images/home_model/AB_彌哈_0520.jpg" class="w-75 align-self-center" alt="">
                <div class="mt-3 wrap">
                    <p><b>大笑彌勒佛</b></p>
                    <p>哇哈哈哈哈哈哈~~!!ㄝㄝ很有趣捏 !! 哈哈哈哈!!</p>
                    <p> 路人1: (默默忍耐...</p>
                    <p> 路人2: (默默忍耐...怎麼都沒人去阻止一下!!</p>
                    <p> 路人3: 那個先生!</p>
                </div>
            </div>




        <!-- 新增首頁公仔模型 -->
         <div class="col-md-4 d-flex flex-column mb-4">
            <img src="images/home_model/自由女神.png" class="w-75 align-self-center" alt="">
            <div class="mt-3 wrap">
                <p><b>自拍女神</b></p>
                <p>我好美麗~我好美麗~揪咪~~~卡擦</p>
                <p>(◕︿◕✿)</p>
                <p>路人: 啊啊!! 別揮到我</p>
                <p>女神: (無視</p>
            </div>
        </div> 
         <div class="col-md-4 d-flex flex-column mb-4">
            <img src="images/home_model/abby_修圖臥佛_180507_1.jpg" class="w-75 align-self-center" alt="">
            <div class="mt-3 wrap">
                <p><b>橫躺臥佛公仔</b></p>
                <p> 熬夜加班真的是有夠累的,沒想到捷運座位那麼舒服～嗯哼zzzZZ.</p>
                <p>路人: 那個人是誰啊？</p>
                <p>臥佛:Zzz</p>
                <p>路人: 真的是有夠誇張 嘰嘰咂咂((</p>
                <p>臥佛:Zzz Zzz~</p>
            </div> 
        </div>
    </div>
<!-- page contral bar -->
    <div class="d-flex justify-content-center align-items-center mt-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item mx-2">
                    <h3 class="" style="cursor:pointer" aria-label="Previous">
                        <span id="arrow_left" aria-hidden="true">&laquo;</span>
                    </h3>
                </li>
                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
                <li class="page-item mx-2">
                    <h3 class="" style="cursor:pointer" aria-label="Next">
                        <span id="arrow_right" aria-hidden="true">&raquo;</span>
                    </h3>
                </li>
            </ul>
        </nav>
    </div>
</section>

<?=$footer_1?>


<?=$plugins?>
<script>
    $("#arrow_right").click(function(){
        console.log(123)

        $("#model")[0].style.transform=`translateX(-99%)`

        $("#arrow_left").click(function(){
            $("#model")[0].style=`transform(99%)`
        })
    })

    // loading--------------------------------------------------------------------


<?php
if(empty($_COOKIE["loading"])){
    echo '
        $(document).ready(function(){
        $("#section1,#section2,#section3,#navbar,#footer_1,.dicline1").hide();
            $(window).on("load", function () {
                let loadingPerc = 0;
                let loading = setInterval(() => {
                    if (loadingPerc >= 100) {
                        $("#load_img").fadeOut(()=>{
                                $("#load_img")[0].src="images/load/LOGO_延伸圖案_DM.png"
                            setTimeout(()=>{
                                $("#load_img").fadeIn()
                            },200)
                        })
                        setTimeout(()=>{
                                $("#loading").fadeOut(()=>{
                                $("#loading").removeClass("d-flex")
                                })
                                setTimeout(()=>{

                                $("#section1,#section2,#section3,.dicline1,#navbar,#footer_1").fadeIn();
                                },500)
                            },1500)
                        // wow 初始化 
                    new WOW().init();
                    clearInterval(loading);
                    }
                    else {
                        loadingPerc += 4;
                    }
                }, 50);
            })
        })
    ';
}
else {
    echo '
        $("#loading").removeClass("d-flex")
        $("#loading")[0].style.display="none"
    ';
}
?>

</script>

</body>
</html>









