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
    <title>模型作品</title>
    <?=$front_css?>
    
<body class="h-100">
<?=$header?>

<!-- Model -->
    <section id="expand" class="container w-75 d-flex flex-column justify-content-center align-items-center" style="margin-top:76px">

    <!-- style="margin-top:76px;display:none" -->
    </section>



<section id="model_section1" class="container w-75  d-flex flex-column justify-content-atart align-items-center">
    <h3 class="text-center mt-5  wow fadeIn" data-wow-duration="1s">Model</h3>

    <?php
        $sql="SELECT * FROM p_bg_model WHERE dpy=1 ORDER BY id DESC";
        $rows=$db->query($sql)->fetchAll();
        $i=0;
        
        foreach($rows as $row){
            if($i%3==0) echo '<div class="media mb-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="'.(0.5+$i/10).'s">';
            echo '
                    <div style="position:relative">
                        <div class="img_positioning'.$i.' shadow_cor text-center m-2" style="cursor:pointer;">
                            <img src="upload/'.$row['text'].'" class="align-self-center model_img" style="height:250px" alt="...">
                            <span class="overwrap'.$i.' img_position" style="pointer-events:none;font-size:2rem;color:#ddd;display:none;color:#fff">
                            '.$row['title'].'
                            </span>
                        </div>
                    </div>
            ';
            if($i*2%3==1) echo '</div>'; 
        $i++;
        }
    ?>

</section>
    

<?=$footer_1?>
<?=$plugins?>

<script>
    document.getElementsByClassName("media")[0].style.marginTop="2.5rem"
// 展開顯示
<?php
$i=0;
foreach($rows as $row){
    echo '
    $(".img_positioning'.$i.'").mouseover(function(){
        $(".overwrap'.$i.'").css({"display":"block"})
    })
    $(".img_positioning'.$i.'").mouseout(function(){
        $(".overwrap'.$i.'").css("display","none")
    })
    ';
    $i++;
}
    ?>

// 點選展開
<?php
$i=0;
foreach($rows as $row){
    echo '
 
    $(".img_positioning'.$i.'").click(function(){
        $("h3").css({"display":"none"})
        $("#expand").css({"margin-top":"76px"})
        $("#expand").html(`
                <h3 class="text-center mt-5 mb-5">Model</h3>
    
                <div class="d-flex ">
                    <img src="upload/'.$row['text'].'" style="width:350px" class="mr-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <p>'.$row['info'].'</p>
                        <span class="down_down mt-auto align-self-end">
                            <img src="images/icon/icons8-expand-arrow-48.png">
                        </span>
                    </div>
                </div>
        `)

        $(".down_down").click(function(){
            $("#expand").html("")
            $("h3").css({"display":"block"})
        })
    
    })
    ';
    $i++;
}
    




$j=0;
foreach($rows as $row){
echo '



window.addEventListener("mousemove",function(event){
    // 游標座標
    mou_x=event.pageX
    mou_y=event.pageY

    // 計算圖片中心座標
    let img_pos=document.getElementsByClassName("model_img")['.$j.'].getBoundingClientRect()
    //x,y,top,laft,right,width,height
    //中心座標(297,288)
    img_x=Math.trunc(img_pos.x+(img_pos.width)/2)
    img_y=Math.trunc(img_pos.y+(img_pos.width)/2)

    // 中心座標歸零
    xxx=mou_x-img_x
    yyy=mou_y-img_y

    //兩點計算座標角度
    rel_ang=getTwoPointAngle(xxx,yyy,0,0)

    //兩點計算座標角度
    function getTwoPointAngle(px1,py1,px2,py2){
    const x =(px1 - px2);
    const y =(py1 - py2);

    const z = Math.sqrt(x * x + y * y);

    const angle = Math.round((Math.asin(y / z) / Math.PI) * 180); //最終角度
    if(px1>0) {
        ins_angle=angle
        ans_angle=90-ins_angle+90
    }
    else if(px1<0 && py1>0){
        ans_angle=angle
    }
    else if(px1<=0 && py1<0){
        ins_angle=angle
        ans_angle=360+ins_angle
    }
    else ans_angle=angle

    return ans_angle;
}

var angleInRad = rel_ang * 2 * Math.PI / 360 ;
relx= 3 * Math.cos(angleInRad) ;
rely= 3 * Math.sin(angleInRad) ;

// style
$(".model_img")['.$j.'].style.filter=`drop-shadow(${Math.trunc(relx)*2}px ${Math.trunc(rely)*-2}px 8px #888)`
})

';
$j++;
}
?>





</script>
</body>
</html>