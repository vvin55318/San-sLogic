<?php
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
include("main.php");
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>關於我們</title>
    <?=$front_css?>
</head>

<body class="vh-100">
<?=$header?>
    
<!------------------------------------------------------------------------------------------------------------------------>
<!-- about us -->
<section id="con100" class="container w-75">
    <h3 class="text-center wow fadeIn" style="margin-top:125px;">About us</h3>

<?php
    $sql="SELECT * FROM p_bg_about_1 where dpy=1";
    $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            if($row['position']==1){
                echo '
                    <div class="media mt-5 ">
                        <img src="upload/'.$row['text'].'" class="col-8 col-md-6 align-self-center mr-3 wow slideInRight" data-wow-duration="1s" alt="...">
                        <div class="col-12 col-md-8 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h3 class="mt-0 ">'.$row['title'].'</h3>
                            <div class="m-3">
                            '.$row['info'].'
                            </div>
                        </div>
                    </div>
                ';
            }
            else if($row['position']==2){
                echo '
                <div class="media mt-5">
                <div class="col-12 media-body d-flex flex-column justify-content-center align-items-center">
                    <h3 class="mt-0 align-self-start wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">'.$row['title'].'</h3>
                    <div class="m-auto align-self-start wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">'.$row['info'].'</div>
                    <img src="upload/'.$row['text'].'" class="col-md-6 col-8 align-self-center mr-3 wow slideInUp" data-wow-duration="1s" " alt="...">
                </div>
            </div>
                ';
            }
            else {
                echo '
                    <div class="media mt-5 ">
                        <div class="col-12 col-md-8 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h3 class="mt-0 ">'.$row['title'].'</h3>
                            <div class="m-3">
                            '.$row['info'].'
                            </div>
                        </div>
                        <img src="upload/'.$row['text'].'" class="col-8 col-md-6 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s" alt="...">
                    </div>
                ';
            }
        }

?>








    <!-- <div class="media mt-5 ">
        <img src="images/home_about/4m5.jpg" class="col-8 col-md-6 align-self-center mr-3 wow slideInRight" data-wow-duration="1s" alt="...">
        <div class="col-12 col-md-8 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h3 class="mt-0 ">我們是神邏輯</h3>
            <div class="m-3">
                <p>致力於提供具設計的「共鳴性」產品。</p>
                <p>
                    神邏輯團隊將議題及流行轉化成逗趣的產品，並嘗試在模型市場建立起屬於台灣特色的模型。目前各國都已有明確的定位，要在市場上建立起台灣模型確實不易，這也是我們團隊希望突破的挑戰!並且致力於推出更棒更好的，且更“神邏輯”的玩具給大家！
                </p>
            </div>
        </div>
    </div> -->


        <!-- 新增關於我們 左、中、右 -->
    <!-- 左 <div class="media mt-5">
        <img src="images/home_about/4m5.jpg" class="col-8 col-md-6 align-self-center mr-3" alt="...">
        <div class="col-12 col-md-8 media-body">
            <h3 class="mt-0">我們是神邏輯</h3>
            <div class="m-3">
                <p>致力於提供具設計的「共鳴性」產品。</p>
                <p>
                    神邏輯團隊將議題及流行轉化成逗趣的產品，並嘗試在模型市場建立起屬於台灣特色的模型。目前各國都已有明確的定位，要在市場上建立起台灣模型確實不易，這也是我們團隊希望突破的挑戰!並且致力於推出更棒更好的，且更“神邏輯”的玩具給大家！
                </p>
            </div>
        </div>
    </div> -->
    <!-- 中 <div class="media mt-5">
        <div class="col-12 media-body d-flex flex-column justify-content-center align-items-center">
            <h3 class="mt-0 align-self-start">臥佛先生辛酸史......</h3>
            <p class="m-3 align-self-start">到了發薪日，天天在加班的臥佛先生相信這次可以突破22K的魔咒......</p>
            <img src="images/asset_53072_image_big.jpg" class="col-md-6 col-8 align-self-center mr-3" alt="...">
            <p class="m-3 align-self-start">逼不得已的臥佛先生，只好投胎成搪膠公仔......出賣自己?!</p>
        </div>
    </div> -->
    <!-- 右 <div class="media mt-5">
        <div class="col-12 col-md-8 media-body">
            <h3 class="mt-0">我們是神邏輯</h3>
            <div class="m-3">
                <p>致力於提供具設計的「共鳴性」產品。</p>
                <p>
                    神邏輯團隊將議題及流行轉化成逗趣的產品，並嘗試在模型市場建立起屬於台灣特色的模型。目前各國都已有明確的定位，要在市場上建立起台灣模型確實不易，這也是我們團隊希望突破的挑戰!並且致力於推出更棒更好的，且更“神邏輯”的玩具給大家！
                </p>
            </div>
        </div>
        <img src="images/home_about/4m5.jpg" class="col-8 col-md-6 align-self-center mr-3" alt="...">
    </div> -->
</section>



<div class="d-flex justify-content-center align-items-center mt-5 wow fadeIn">
    <hr class="w-25">
    <h3 class="text-center">作品概念</h3>
    <hr class="w-25">
</div>



<!-- story divider -----------------------------------------------------------
<div id="con100" class=" container w-75 d-flex mt-5">
<span class="h3 link_ti_no_hover px-1">Story</span><hr>
</div> -->

<!-- story content -->
<section id="con100" class="container w-75 mb-5">

<?php
    $sql="SELECT * FROM p_bg_about_2 where dpy=1";
    $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            if($row['position']==1){
                echo '
                    <div class="media mt-5 ">
                        <img src="upload/'.$row['text'].'" class="col-8 col-md-6 align-self-center mr-3 wow slideInRight" data-wow-duration="1s" alt="...">
                        <div class="col-12 col-md-8 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h3 class="mt-0 ">'.$row['title'].'</h3>
                            <div class="m-3">
                            '.$row['info'].'
                            </div>
                        </div>
                        
                    </div>
                ';
            }
            else if($row['position']==2){
                echo '
                    <div class="media mt-5">
                        <div class="col-12 media-body d-flex flex-column justify-content-center align-items-center">
                            <h3 class="mt-0 align-self-start wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">'.$row['title'].'</h3>
                            <div class="m-auto align-self-start wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">'.$row['info'].'</div>
                            <img src="upload/'.$row['text'].'" class="col-md-6 col-8 align-self-center mr-3 wow slideInUp" data-wow-duration="1s" " alt="...">
                        </div>
                    </div>
                ';
            }
            else {
                echo '
                    <div class="media mt-5 ">
                        <div class="col-12 col-md-8 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h3 class="mt-0 ">'.$row['title'].'</h3>
                            <div class="m-3">
                            '.$row['info'].'
                            </div>
                        </div>
                        <img src="upload/'.$row['text'].'" class="col-8 col-md-6 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s" alt="...">
                    </div>
                ';
            }
        }



?>



























    <!-- 臺灣的捷運文化 -->
    <!-- <div class="media mt-5">
        <div class="col-md-6 col-12 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"">
            <h3 class="mt-0">臺灣的捷運文化</h3>
            <div class="m-3">
                <p>臺灣城市有非常發達的捷運系統，除了舒適與便利之外，超水準的捷運文化，像是禮讓博愛座、搭電扶梯靠右、有秩序的排隊.......等等，是臺灣人多年來發展的獨有默契。</p>

                <p>雖然大部分的民眾都有這些默契，卻不代表全數，總還是有帶著“神邏輯“的乘客們，讓捷運公司與其他乘客傷透腦筋。</p>
                
                <p>經過一番思考規劃，我們決定換個角度思考！運用可以娛樂收藏的模型公仔傳達理念，改變以往只使用影片和海報的宣傳，讓我們帶著詼諧與風趣，一起轉化捷運上有著“神邏輯“的乘客們。</p>
                
                <p>臥佛先生 : 哎～今天也是好累，來躺一下好了......Zzzz (決定不在乎別人的看法</p>
            </div>
        </div>
        <img src="images/asset_52401_image_big.jpg" class="col-md-6 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s" alt="...">
    </div>
    <!-- 臥佛先生辛酸史...... -->
    <!-- <div class="media mt-5 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="col-12 media-body d-flex flex-column justify-content-center align-items-center">
            <h3 class="mt-0 align-self-start">臥佛先生辛酸史......</h3>
            <p class="m-3 align-self-start">到了發薪日，天天在加班的臥佛先生相信這次可以突破22K的魔咒......</p>
            <img src="images/asset_53072_image_big.jpg" class="col-md-6 col-8 align-self-center mr-3 wow fadeInUp" data-wow-duration="1s" alt="...">
            <p class="m-3 align-self-start">逼不得已的臥佛先生，只好投胎成搪膠公仔......出賣自己?!</p>
        </div>
    </div>
    <!-- 臥佛演化史 -->
    <!-- <div class="media mt-5">
        <div class="col-md-6 col-12 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"">
            <h3 class="mt-0">臥佛演化史</h3>
            <div class="m-3">
                <p>最早的臥佛先生可是站著呢！</p>

                <p>從抬頭的角度到身長比例，我們捏出了許多的草模進行比對，也參考了傳統宗教雕像及文獻圖片，才成功詮釋出現在4頭身的比例。</p>
                
                <p>除此之外，為了讓公仔更貼近生活，讓臥佛的配件從原本的念珠改成唸書，最後再轉化為公事包，身上的衣服也從原本的袈裟變成上班族的西裝。</p>
            </div>
        </div>
        <img src="images/1.演化圖-01.jpg" class="col-md-6 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s"" alt="...">
    </div>

    <!-- 臥佛先生 - 經典香蕉黃 -->
    <!-- <div class="media mt-5">
        <div class="col-md-6 col-12 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"">
            <h3 class="mt-0">【臥佛先生 - 經典香蕉黃】</h3>
            <div class="m-3">
                <p>模型規格</p>

                <p>尺寸｜寬 18 cm 高 5 cm</p>
                
                <p>配件｜公事包x1</p>
            </div>
        </div>
        <img src="images/AB_投稿_0520_2.jpg" class="col-md-6 col-12 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s" alt="...">
    </div>
    <!-- 臥佛先生 - 限定黑金 -->
    <!-- <div class="media mt-5">
        <div class="col-md-6 col-12 media-body wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h3 class="mt-0">【臥佛先生 - 限定黑金】</h3>
            <div class="m-3">
                <p>持續一年的超時加班，整個人身體都起了變化，從黃色昇華成金黃ㄌ</p>
            </div>
        </div>
        <img src="images/DSC_7736-1.jpg" class="col-md-6 col-12 align-self-center mr-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" alt="...">
    </div> --> 
</section>

<!-- team divider------------------------------------------------>
<!-- <div class="container w-75 d-flex mt-5">
<span class="h3">Team</span><hr>
</div> -->

<!-- team content -->
<!-- <section class="container w-75">
<div class="media mt-5">
    <img src="https://picsum.photos/250/250/?random=1" class="col-4 align-self-center mr-3" alt="...">
    <div class="col-8 media-body">
        <h5 class="mt-0">Center-aligned media</h5>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia recusandae molestiae ipsa ipsam impedit ea odio reiciendis! Doloribus, amet aliquid!
        </p>
        <p class="mb-0">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia recusandae molestiae ipsa ipsam impedit ea odio reiciendis! Doloribus, amet aliquid!
        </p>
    </div>
</div> -->


<?=$footer_1?>
<?=$plugins?>
</body>
</html>