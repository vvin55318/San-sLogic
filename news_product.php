<?php
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
echo '
<ul class="list-unstyled mt-5 row">
';
$sql="SELECT * FROM p_bg_news_2 WHERE dpy=1 ORDER BY id DESC";
$rows=$db->query($sql)->fetchAll();
$i=0;
foreach($rows as $row){
  if($i==0){
    echo '
      <li class="media mb-5 col-12">
        <img src="upload/'.$row['text'].'" class=" col-md-4 mr-3 wow fadeInUp" data-wow-delay="0.5s" alt="...">
        <div class="media-body wow fadeIn" data-wow-delay="1s">
          <h5 class="mt-0 mb-1">'.$row['title'].'</h5>
          '.$row['info'].'
        </div>
      </li>
    ';
  }
  else {
    echo '
      <li class="media my-4 col-md-12">
        <img src="upload/'.$row['text'].'" class="col-md-3 mr-3 wow fadeInUp" data-wow-delay="0.5s" alt="...">
          <div class="media-body  wow fadeIn" data-wow-delay="1s">
              <h5 class="mt-0 mb-1">'.$row['title'].'</h5>
              '.$row['info'].'
          </div>
      </li>
    ';
  }
  $i++;
}
echo '
  </ul>
  ';