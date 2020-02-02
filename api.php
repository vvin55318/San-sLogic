<?php
session_start();
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
date_default_timezone_set("Asia/Taipei");


switch ($_GET['do']) {
    ////////////////////////////////////////////////////////////////////////// 登入驗證
    case 'check':
        $sql="SELECT * FROM p_bg_admin WHERE acc='".$_POST['acc']."' AND pwd='".$_POST['pwd']."'";
        $result=$db->query($sql)->fetch();
        if($result){
            $_SESSION['admin']=$_POST['acc'];
           echo "acc_pwd_correct";
        }
        else {
            echo "帳號密碼錯誤";
        }
        break;
        // 登出
    case 'logout':
        unset($_SESSION['admin']);
        echo "index.php";
        break;
        ////////////////////////////////////////////////////////////// 後台 home 新增到資料庫
    case 'home_add':
        if(!empty($_FILES)){
        copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
        echo 'upload/'.$_FILES["img"]["name"];
        $_POST['text']=$_FILES['img']['name'];
        }
        $sql="INSERT INTO p_bg_home VALUES (null,'".$_POST['text']."',".$_POST['dpy'].")";
        $db->query($sql);
        print_r($sql);
        header("location:bg_background.php");
        break;
        // 後台 about_1 新增到資料庫
    case 'about_add_1':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
        $sql="INSERT INTO p_bg_about_1 VALUES (null,'".$_POST['text']."','".$_POST['title']."','".$_POST['info']."','".$_POST['position']."',".$_POST['dpy'].")";
        $db->query($sql);
        header("location:bg_background_about.php");
        break;
        // 後台 about_2 新增到資料庫
    case 'about_add_2':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
        $sql="INSERT INTO p_bg_about_2 VALUES (null,'".$_POST['text']."','".$_POST['title']."','".$_POST['info']."','".$_POST['position']."',".$_POST['dpy'].")";
        $db->query($sql);
        header("location:bg_background_about.php");
        break;
        // 後台 news_1 新增到資料庫
    case 'news_add_1':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
        $sql="INSERT INTO p_bg_news_1 VALUES (null,'".$_POST['text']."','".$_POST['title']."','".$_POST['info']."',".$_POST['dpy'].")";
        $db->query($sql);
        header("location:bg_background_news.php");
        break;
        // 後台 news_1 新增到資料庫
    case 'news_add_2':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
        $sql="INSERT INTO p_bg_news_2 VALUES (null,'".$_POST['text']."','".$_POST['title']."','".$_POST['info']."',".$_POST['dpy'].")";
        $db->query($sql);
        header("location:bg_background_news.php");
        break;
        // 後台 model 新增到資料庫
    case 'model_add':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
        $sql="INSERT INTO p_bg_model VALUES (null,'".$_POST['text']."','".$_POST['title']."','".$_POST['info']."',".$_POST['dpy'].")";
        $db->query($sql);
        header("location:bg_background_model.php");
        break;
        // 後台 member 新增到資料庫
    case 'member_add': 
        $sql="INSERT INTO p_bg_admin VALUES (null,'".$_POST['acc']."','".$_POST['pwd']."','".$_POST['name']."',".$_POST['gender'].",'".$_POST['address']."')";
        $db->query($sql);
        header("location:bg_background_member.php");
        break;
        // 後台 signin 新增到資料庫
    case 'signin_add':
        if(!empty($_FILES)){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            echo 'upload/'.$_FILES["img"]["name"];
            $_POST['text']=$_FILES['img']['name'];
            }
            $sql="INSERT INTO p_bg_signin VALUES (null,'".$_POST['text']."',".$_POST['size'].",".$_POST['dpy'].")";
            $db->query($sql);
            print_r($sql);
            header("location:bg_background_signin.php");
        break;
        // 後台 contact 新增到資料庫
    case 'contact':
        $sql="INSERT INTO p_bg_contact VALUES (null,'".$_POST['name']."','".$_POST['email']."','".$_POST['address']."','".$_POST['message']."','".$_POST['time']."')";
        $db->query($sql);
        header("location:index.php");
        break;
        ////////////////////////////////////////////////////////////////// 後台 home 刪除功能
    case 'home_del':
        $sql="DELETE FROM p_bg_home WHERE id=".$_POST['id']." AND text='".$_POST['text']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 about1 刪除功能
    case 'about_del_1':
        $sql="DELETE FROM p_bg_about_1 WHERE id=".$_POST['id']." AND text='".$_POST['text']."' AND title='".$_POST['title']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        // 後台 about2 刪除功能
    case 'about_del_2':
        $sql="DELETE FROM p_bg_about_2 WHERE id=".$_POST['id']." AND text='".$_POST['text']."' AND title='".$_POST['title']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 news1 刪除功能
    case 'news_del_1':
        $sql="DELETE FROM p_bg_news_1 WHERE id=".$_POST['id']." AND text='".$_POST['text']."' AND title='".$_POST['title']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 news2 刪除功能
    case 'news_del_2':
        $sql="DELETE FROM p_bg_news_2 WHERE id=".$_POST['id']." AND text='".$_POST['text']."' AND title='".$_POST['title']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 model 刪除功能
    case 'model_del':
        $sql="DELETE FROM p_bg_model WHERE id=".$_POST['id']." AND text='".$_POST['text']."' AND title='".$_POST['title']."'" ;
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 momber 刪除功能
    case 'member_del':
        $sql="DELETE FROM p_bg_admin WHERE id=".$_POST['id']." AND acc='".$_POST['acc']."' AND pwd='".$_POST['pwd']."'";
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 signin 刪除功能
    case 'signin_del':
        $sql="DELETE FROM p_bg_signin WHERE id=".$_POST['id']." AND text='".$_POST['text']."'";
        $db->query($sql);
        echo "刪除完畢";
        break;
        // 後台 contact 刪除功能
    case 'contact_del':
        $sql="DELETE FROM p_bg_contact WHERE id=".$_POST['id']." AND name='".$_POST['name']."' AND email='".$_POST['email']."'";
        $db->query($sql);
        echo "刪除完畢";
        break;
        /////////////////////////////////////////////ajax拿資料
        // bg_home
    case 'home_data':
        $sql="SELECT * FROM p_bg_home WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row["text"].'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label>
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span>'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                    <input type="button" class="btn btn-sm del" value="刪除" >
                    <input type="button" class="btn btn-sm mdy" value="修改">
                    </td>
                </tr>
            ';
        }
        break;  
        // bg_about_1  
    case 'about_data_1':
        $sql="SELECT * FROM p_bg_about_1 WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            if($row["position"]==1){
                $position="左";
            }else if($row["position"]==2){
                $position="中";   
            }else $position="右";
            echo '
                <tr>
                    <td class="text-san-blue">'.$row['id'].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row["text"].'</td>
                    <td class="text-san-blue">'.$row['title'].'</td>
                    <td class="text-san-blue">'.$row['info'].'</td>
                    <td class="text-san-blue">'.$position.'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label class="label_1">
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span>'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                        <input type="button" class="btn btn-sm del_1" value="刪除" >
                        <input type="button" class="btn btn-sm mdy_1" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_about_2
    case 'about_data_2':
        $sql="SELECT * FROM p_bg_about_2 WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            if($row["position"]==1){
                $position="左";
            }else if($row["position"]==2){
                $position="中";   
            }else $position="右";
            echo '
                <tr>
                    <td class="text-san-blue">'.$row['id'].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row['text'].'</td>
                    <td class="text-san-blue">'.$row['title'].'</td>
                    <td class="text-san-blue">'.$row['info'].'</td>
                    <td class="text-san-blue">'.$position.'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label class="label_2">
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span>'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                        <input type="button" class="btn btn-sm del_2" value="刪除" >
                        <input type="button" class="btn btn-sm mdy_2" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_news_1
    case 'news_data_1':
        $sql="SELECT * FROM p_bg_news_1 WHERE 1  ORDER BY id DESC";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row['id'].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row["text"].'</td>
                    <td class="text-san-blue">'.$row['title'].'</td>
                    <td class="text-san-blue">'.$row['info'].'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label class="label_1">
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span >'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                        <input type="button" class="btn btn-sm del_1" value="刪除" >
                        <input type="button" class="btn btn-sm mdy_1" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_news_2
    case 'news_data_2':
        $sql="SELECT * FROM p_bg_news_2 WHERE 1  ORDER BY id DESC";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row['id'].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row['text'].'</td>
                    <td class="text-san-blue">'.$row['title'].'</td>
                    <td class="text-san-blue">'.$row['info'].'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label class="label_2">
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span >'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                        <input type="button" class="btn btn-sm del_2" value="刪除" >
                        <input type="button" class="btn btn-sm mdy_2" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_model
    case 'model_data':
        $sql="SELECT * FROM p_bg_model WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row['id'].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row["text"].'</td>
                    <td class="text-san-blue">'.$row['title'].'</td>
                    <td class="text-san-blue">'.$row['info'].'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label>
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span>'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                        <input type="button" class="btn btn-sm del" value="刪除" >
                        <input type="button" class="btn btn-sm mdy" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_member
    case 'member_data':
        $sql="SELECT * FROM p_bg_admin WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'</td>
                    <td class="text-san-blue">'.$row["acc"].'</td>
                    <td class="text-san-blue">'.$row["pwd"].'</td>
                    <td class="text-san-blue">'.$row["name"].'</td>
                    <td class="text-san-blue">'.(($row["gender"]==0)?"女":"男").'</td>
                    <td class="text-san-blue">'.$row["address"].'</td>
                    <td class="text-san-blue">
                    <input type="button" class="btn btn-sm del" value="刪除" >
                    <input type="button" class="btn btn-sm mdy" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_signin
    case 'signin_data':
        $sql="SELECT * FROM p_bg_signin WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            if($row["size"]==3){
                $size="大";
            }else if($row["size"]==2){
                $size="中";   
            }else $size="小";
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'</td>
                    <td class="text-san-blue"><img class="mr-3" src="upload/'.$row["text"].'" width="20%">'.$row["text"].'</td>
                    <td class="text-san-blue">'.$size.'</td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label>
                                <input type="checkbox" class="toggle_switch"'.(($row["dpy"]==1) ?"checked":"").'>
                                <span class="toggle"></span>
                                <span>'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>  
                    </td>
                    <td class="text-san-blue">
                    <input type="button" class="btn btn-sm del" value="刪除" >
                    <input type="button" class="btn btn-sm mdy" value="修改">
                    </td>
                </tr>
            ';
        }
        break;
        // bg_contact
    case 'contact_data':
        $sql="SELECT * FROM p_bg_contact WHERE 1";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'</td>
                    <td class="text-san-blue">'.$row["name"].'</td>
                    <td class="text-san-blue">'.$row["email"].'</td>
                    <td class="text-san-blue">'.$row["address"].'</td>
                    <td class="text-san-blue">'.$row["message"].'</td>
                    <td class="text-san-blue">'.$row["time"].'</td>
                    <td class="text-san-blue">
                    <input type="button" class="btn btn-sm del" value="刪除" >
                    <input type="button" class="btn btn-sm mdy" value="修改">
                    </td>
            </tr>
            ';
        }
        break;
        ///////////////////////////////////////////////////////////// home 修改 儲存 上傳
    case 'home_mdy':
        $sql="SELECT * FROM p_bg_home WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row["id"].'"></td>
                    <td class="text-san-blue">
                        <input type="file" name="img" id="img_mdy" >
                        <img id="img_mdy_prev" width="30%">
                    </td>
                    <td class="text-san-blue">
                        <div class="togglebutton">
                            <label>
                                <input type="hidden" name="dpy" value="0">
                                <input type="checkbox" name="dpy" id="checkbox" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                                <span class="toggle"></span>
                                <span id="onoff">'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                    <input type="reset" class="btn btn-sm cancel" value="取消" >
                    <input type="submit" class="btn btn-sm save" value="儲存">
                    </td>
                </tr>
            ';
        }
        break;

        // home 修改後儲存
    case 'home_save':
        if(!empty($_FILES['img']['name'])){
            print_r($_FILES);
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_home SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_home SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);
        }
        else {
            $sql="UPDATE p_bg_home SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql);
        }
        // 放在echo後面會有錯誤
        header("location:bg_background.php");
        break;
        ///////////////////////////////////////////////////////////// about1 修改 儲存 上傳
    case 'about_mdy_1':
        $sql="SELECT * FROM p_bg_about_1 WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue">
                    <input type="file" name="img" id="img_mdy_1">
                    <img id="img_mdy_prev_1" width="30%">
                </td>
                <td class="text-san-blue"><input type="text" name="title" value="'.$row['title'].'"></td>
                <td class="text-san-blue"><textarea name="info" cols="30" rows="10">'.$row['info'].'</textarea></td>
                <td class="text-san-blue">
                    <input type="radio" name="position" id="left" value="1" '.(($row["position"]==1)?"checked":"").'>左
                    <input type="radio" name="position" id="center" value="2" '.(($row["position"]==2)?"checked":"").'>中
                    <input type="radio" name="position" id="right" value="3" '.(($row["position"]==3)?"checked":"").'>右
                </td>
                <td class="text-san-blue">
                    <div class="togglebutton" >
                        <label class="label_1">
                            <input type="hidden" name="dpy" value="0">
                            <input type="checkbox" name="dpy" id="checkbox_1" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                            <span class="toggle"></span>
                            <span id="onoff_1">'.(($row["dpy"]==1) ?"on":"off").'</span>
                        </label>
                    </div>
                </td>
                <td class="text-san-blue">
                <input type="button" class="btn btn-sm cancel_1" value="取消" >
                <input type="submit" class="btn btn-sm save_1" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
        // about1 修改後儲存
    case 'about_save_1':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_about_1 SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_about_1 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_about_1 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_about_1 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);

            $sql_5="UPDATE p_bg_about_1 SET position='".$_POST['position']."' WHERE id=".$_POST['id'];
            $db->query($sql_5);
        }
        else {
            $sql_2="UPDATE p_bg_about_1 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_about_1 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_about_1 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);

            $sql_5="UPDATE p_bg_about_1 SET position='".$_POST['position']."' WHERE id=".$_POST['id'];
            $db->query($sql_5);
        }
        header("location:bg_background_about.php");
        break;
        ///////////////////////////////////////////////////////////// about2 修改 儲存 上傳
    case 'about_mdy_2':
        $sql="SELECT * FROM p_bg_about_2 WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
                <tr>
                    <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                    <td class="text-san-blue">
                        <input type="file" name="img" id="img_mdy_2" >
                        <img id="img_mdy_prev_2" width="30%">
                    </td>
                    <td class="text-san-blue"><input type="text" name="title" value="'.$row['title'].'"></td>
                    <td class="text-san-blue"><textarea name="info" cols="30" rows="10">'.$row['info'].'</textarea></td>
                    <td class="text-san-blue">
                        <input type="radio" name="position" id="left" value="1" '.(($row["position"]==1)?"checked":"").'>左
                        <input type="radio" name="position" id="center" value="2" '.(($row["position"]==2)?"checked":"").'>中
                        <input type="radio" name="position" id="right" value="3" '.(($row["position"]==3)?"checked":"").'>右
                    </td>
                    <td class="text-san-blue">
                        <div class="togglebutton" >
                            <label class="label_2">
                            <input type="hidden" name="dpy" value="0">
                            <input type="checkbox" name="dpy" id="checkbox_2" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                                <span class="toggle"></span>
                                <span id="onoff_2">'.(($row["dpy"]==1) ?"on":"off").'</span>
                            </label>
                        </div>
                    </td>
                    <td class="text-san-blue">
                    <input type="button" class="btn btn-sm cancel_2" value="取消" >
                    <input type="submit" class="btn btn-sm save_2" value="儲存">
                    </td>
                </tr>
            ';
        }
        break;
        // about2 修改後儲存
    case 'about_save_2':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_about_2 SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_about_2 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_about_2 SET position='".$_POST['position']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);
        }
        else {
            $sql="UPDATE p_bg_about_2 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_about_2 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_about_2 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_about_2 SET position='".$_POST['position']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        header("location:bg_background_about.php");
        break;
        ///////////////////////////////////////////////////////////// news1 修改 儲存 上傳
    case 'news_mdy_1':
        $sql="SELECT * FROM p_bg_news_1 WHERE id=".$_POST['id']." ORDER BY id DESC";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue">
                    <input type="file" name="img" id="img_mdy_1">
                    <img id="img_mdy_prev_1" width="30%">
                </td>
                <td class="text-san-blue"><input type="text" name="title" value="'.$row['title'].'"></td>
                <td class="text-san-blue"><textarea name="info" cols="30" rows="10">'.$row['info'].'</textarea></td>
                <td class="text-san-blue">
                    <div class="togglebutton" >
                        <label class="label_1">
                            <input type="hidden" name="dpy" value="0" '.(($row["dpy"]==1)?"checked":"").'>
                            <input type="checkbox" name="dpy" id="checkbox_1" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                            <span class="toggle"></span>
                            <span id="onoff_1">'.(($row["dpy"]==1) ?"on":"off").'</span>
                        </label>
                    </div>
                </td>
                <td class="text-san-blue">
                <input type="button" class="btn btn-sm cancel_1" value="取消" >
                <input type="submit" class="btn btn-sm save_1" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
        // news1 修改後儲存
    case 'news_save_1':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_news_1 SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_news_1 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_news_1 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_news_1 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        else {
            $sql_2="UPDATE p_bg_news_1 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_news_1 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_news_1 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        header("location:bg_background_news.php");
        break;
        ///////////////////////////////////////////////////////////// news2 修改 儲存 上傳
    case 'news_mdy_2':
        $sql="SELECT * FROM p_bg_news_2 WHERE id=".$_POST['id']." ORDER BY id DESC";
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue">
                    <input type="file" name="img" id="img_mdy_2">
                    <img id="img_mdy_prev_2" width="30%">
                </td>
                <td class="text-san-blue"><input type="text" name="title" value="'.$row['title'].'"></td>
                <td class="text-san-blue"><textarea name="info" cols="30" rows="10">'.$row['info'].'</textarea></td>
                <td class="text-san-blue">
                    <div class="togglebutton" >
                        <label class="label_2">
                            <input type="hidden" name="dpy" value="0">
                            <input type="checkbox" name="dpy" id="checkbox_2" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                            <span class="toggle"></span>
                            <span id="onoff_2">'.(($row["dpy"]==1) ?"on":"off").'</span>
                        </label>
                    </div>
                </td>
                <td class="text-san-blue">
                <input type="button" class="btn btn-sm cancel_2" value="取消" >
                <input type="submit" class="btn btn-sm save_2" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
        // news2 修改後儲存
    case 'news_save_2':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_news_2 SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_news_2 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_news_2 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_news_2 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        else {
            $sql_2="UPDATE p_bg_news_2 SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_news_2 SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_news_2 SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        header("location:bg_background_news.php");
        break;
        ///////////////////////////////////////////////////////////// model 修改 儲存 上傳
    case 'model_mdy':
        $sql="SELECT * FROM p_bg_model WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue">
                    <input type="file" name="img" id="img_mdy">
                    <img id="img_mdy_prev" width="30%">
                </td>
                <td class="text-san-blue"><input type="text" name="title" value="'.$row['title'].'"></td>
                <td class="text-san-blue"><textarea name="info" cols="30" rows="10">'.$row['info'].'</textarea></td>
                <td class="text-san-blue">
                    <div class="togglebutton">
                        <label>
                            <input type="hidden" name="dpy" value="0">
                            <input type="checkbox" name="dpy" id="checkbox" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                            <span class="toggle"></span>
                            <span id="onoff">'.(($row["dpy"]==1) ?"on":"off").'</span>
                        </label>
                    </div>
                </td>
                <td class="text-san-blue">
                <input type="button" class="btn btn-sm cancel" value="取消" >
                <input type="submit" class="btn btn-sm save" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
        // model 修改後儲存
    case 'model_save':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_model SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_model SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_model SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_model SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        else {
            $sql_2="UPDATE p_bg_model SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_model SET title='".$_POST['title']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);

            $sql_4="UPDATE p_bg_model SET info='".$_POST['info']."' WHERE id=".$_POST['id'];
            $db->query($sql_4);
        }
        header("location:bg_background_model.php");
        break;
        ///////////////////////////////////////////////////////////// member 修改 儲存 上傳
    case 'member_mdy':
        $sql="SELECT * FROM p_bg_admin WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue"><input type="text" name="acc" value="'.$row['acc'].'"></td>
                <td class="text-san-blue"><input type="text" name="pwd" value="'.$row['pwd'].'"></td>
                <td class="text-san-blue"><input type="text" name="name" value="'.$row['name'].'"></td>
                <td class="text-san-blue">
                    <input type="radio" name="gender" id="male" value="1" '.(($row["gender"]==1)?"checked":"").'>男
                    <input type="radio" name="gender" id="female" value="0" '.(($row["gender"]==0)?"checked":"").'>女
                </td>
                <td><textarea name="address" cols=30">'.$row['address'].'</textarea></td>
                <td class="text-san-blue">
                    <input type="button" class="btn btn-sm cancel" value="取消" >
                    <input type="submit" class="btn btn-sm save" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
     // member 修改後儲存
    case 'member_save':
        $sql="UPDATE p_bg_admin SET acc='".$_POST['acc']."' WHERE id=".$_POST['id'];
        $db->query($sql);

        $sql_2="UPDATE p_bg_admin SET pwd='".$_POST['pwd']."' WHERE id=".$_POST['id'];
        $db->query($sql_2);

        $sql_3="UPDATE p_bg_admin SET name='".$_POST['name']."' WHERE id=".$_POST['id'];
        $db->query($sql_3);

        $sql_4="UPDATE p_bg_admin SET gender='".$_POST['gender']."' WHERE id=".$_POST['id'];
        $db->query($sql_4);

        $sql_5="UPDATE p_bg_admin SET address='".$_POST['address']."' WHERE id=".$_POST['id'];
        $db->query($sql_5);
        header("location:bg_background_member.php");
        break;
        ///////////////////////////////////////////////////////////// signin 修改 儲存 上傳
    case 'signin_mdy':
        $sql="SELECT * FROM p_bg_signin WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
            <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
            <td class="text-san-blue">
                <input type="file" name="img" id="img_mdy">
                <img id="img_mdy_prev" width="30%">
            </td>
            <td class="text-san-blue">
                <input type="radio" name="size" id="large" value="3" '.(($row["size"]==3)?"checked":"").'>大
                <input type="radio" name="size" id="medium" value="2" '.(($row["size"]==2)?"checked":"").'>中
                <input type="radio" name="size" id="small" value="1" '.(($row["size"]==1)?"checked":"").'>小
            </td>
            <td class="text-san-blue">
                <div class="togglebutton" >
                    <label>
                        <input type="hidden" name="dpy" value="0">
                        <input type="checkbox" name="dpy" id="checkbox" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                        <span class="toggle"></span>
                        <span id="onoff">'.(($row["dpy"]==1) ?"on":"off").'</span>
                    </label>
                </div>
            </td>
            <td class="text-san-blue">
            <input type="button" class="btn btn-sm cancel" value="取消" >
            <input type="submit" class="btn btn-sm save" value="儲存">
            </td>
        </tr>
            ';
        }
        break;
        // signin 修改後儲存
    case 'signin_save':
        if(!empty($_FILES['img']['name'])){
            copy($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            $sql="UPDATE p_bg_signin SET text='".$_FILES['img']['name']."' WHERE id=".$_POST['id'];
            $db->query($sql);

            $sql_2="UPDATE p_bg_signin SET size='".$_POST['size']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_signin SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);
        }
        else {
            $sql_2="UPDATE p_bg_signin SET size='".$_POST['size']."' WHERE id=".$_POST['id'];
            $db->query($sql_2);

            $sql_3="UPDATE p_bg_signin SET dpy='".$_POST['dpy']."' WHERE id=".$_POST['id'];
            $db->query($sql_3);
        }
        header("location:bg_background_signin.php");
        break;
        ///////////////////////////////////////////////////////////// contact 修改 儲存 上傳   
    case 'contact_mdy':
        $sql="SELECT * FROM p_bg_contact WHERE id=".$_POST['id'];
        $rows=$db->query($sql)->fetchAll();
        foreach($rows as $row){
            echo '
            <tr>
                <td class="text-san-blue">'.$row["id"].'<input type="hidden" name="id" value="'.$row['id'].'"></td>
                <td class="text-san-blue"><input type="text" name="name" value="'.$row['name'].'"></td>
                <td class="text-san-blue"><input type="text" name="email" value="'.$row['email'].'"></td>
                <td class="text-san-blue"><input type="text" name="address" value="'.$row['address'].'"></td>
                <td class="text-san-blue"><input type="text" name="message" value="'.$row['message'].'"></td>
                <td class="text-san-blue">'.$row['time'].'</td>
                <td class="text-san-blue">
                    <input type="button" class="btn btn-sm cancel" value="取消" >
                    <input type="submit" class="btn btn-sm save" value="儲存">
                </td>
            </tr>
            ';
        }
        break;
        // contact 修改後儲存
    case 'contact_save':
        $time=time();
        $sql="UPDATE p_bg_contact SET name='".$_POST['name']."' WHERE id=".$_POST['id'];
        $db->query($sql);

        $sql_2="UPDATE p_bg_contact SET email='".$_POST['email']."' WHERE id=".$_POST['id'];
        $db->query($sql_2);

        $sql_3="UPDATE p_bg_contact SET address='".$_POST['address']."' WHERE id=".$_POST['id'];
        $db->query($sql_3);

        $sql_4="UPDATE p_bg_contact SET message='".$_POST['message']."' WHERE id=".$_POST['id'];
        $db->query($sql_4);

        header("location:bg_background_contact.php");
        break;
    }
