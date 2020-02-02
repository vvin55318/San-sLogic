// 第一次進入，載入資料1
$.get("api.php?do=about_data_1",function(re){
$("#data_1").html(re)



// 禁用顯示開關
var switch_nmb=document.getElementsByClassName("toggle_switch").length
for(i=0;i<switch_nmb;i++){
  document.getElementsByClassName("toggle_switch")[i].disabled=true;
  $(".toggle_switch").next().attr("style","opacity:0.5")
}

// 刪除功能1
  $(".del_1").click(function(re){
    if(confirm("確定要刪除嗎?")){
      let id=re.target.parentNode.parentNode.children[0].textContent;
      let text=re.target.parentNode.parentNode.children[1].textContent;
      let title=re.target.parentNode.parentNode.children[2].textContent;
      const chkData={
        id:id,
        text:text,
        title:title
      };
      $.post("api.php?do=about_del_1", chkData ,function(re){
        location.reload();
        alert(re);
      })
    console.log(id);
    }
  })

// 修改事件1
  $(".mdy_1").click(function(event){
    const id=event.target.parentNode.parentNode.children[0].textContent
    event.target.parentNode.parentNode.style.background="#ddd"
    $(".mdy_1,.del_1,.mdy_2,.del_2").attr("style","display:none")
    $.post("api.php?do=about_mdy_1",{id},function(re){  
      event.target.parentNode.parentNode.innerHTML=re
        $("#add_1").attr("style","display:none")
        $("#add_2").attr("style","display:none")

// 上傳圖片，及時瀏覽
      $("#img_mdy_1").change(function() {
        let file = $("#img_mdy_1")[0].files[0];
        let reader = new FileReader;
        reader.onload = function(e) {
          $("#img_mdy_prev_1").attr("src", e.target.result);
        };
        reader.readAsDataURL(file)
      })

// 取消修改事件1
      $(".cancel_1").click(function(){
        location.reload();
      })


// toggle 開關1
  var label_1_len=document.getElementsByClassName("label_1").length
for(i=0;i<label_1_len;i++){
  var ttt=document.getElementsByClassName("label_1")[i];
  ttt.addEventListener("click",function(){
    if(document.getElementById("checkbox_1").checked){
      document.getElementById("onoff_1").textContent="on";
    }
    else {
      document.getElementById("onoff_1").textContent="off";
    }
  })
}



// 儲存變更事件1
      $(".save_1").click(function(result){
        $.get("api.php?do=about_save_1",function(re){
          $("#data_1").html(re)
        })
      })
    })
  })
})



// 第一次進入，新增資料2
$.get("api.php?do=about_data_2",function(re){
  $("#data_2").html(re)

// 禁用顯示開關
  var switch_nmb=document.getElementsByClassName("toggle_switch").length
  for(i=0;i<switch_nmb;i++){
    document.getElementsByClassName("toggle_switch")[i].disabled=true;
    $(".toggle_switch").next().attr("style","opacity:0.5")
  }

// 刪除事件2
$(".del_2").click(function(re){
  if(confirm("確定要刪除嗎?")){
    let id=re.target.parentNode.parentNode.children[0].textContent;
    let text=re.target.parentNode.parentNode.children[1].textContent;
    let title=re.target.parentNode.parentNode.children[2].textContent;
    const chkData={
      id:id,
      text:text,
      title:title
    };
    $.post("api.php?do=about_del_2", chkData ,function(re){
      location.reload();
      alert(re);
    })
  console.log(id);
  }
})

// 修改事件2
  $(".mdy_2").click(function(event){
    const id=event.target.parentNode.parentNode.children[0].textContent
    event.target.parentNode.parentNode.style.background="#ddd"
    $(".mdy_1,.del_1,.mdy_2,.del_2").attr("style","display:none")
    $.post("api.php?do=about_mdy_2",{id},function(re){  
      event.target.parentNode.parentNode.innerHTML=re
        $("#add_1").attr("style","display:none")
        $("#add_2").attr("style","display:none")

// 上傳圖片，及時瀏覽
      $("#img_mdy_2").change(function(){
        let file = $("#img_mdy_2")[0].files[0];
        let reader = new FileReader;
        reader.onload = function(e) {
          $("#img_mdy_prev_2").attr("src", e.target.result);
        };
        reader.readAsDataURL(file)
      })

// 取消修改事件2
      $(".cancel_2").click(function(){
        location.reload();
      })


// toggle 開關2
var label_1_len=document.getElementsByClassName("label_2").length
for(i=0;i<label_1_len;i++){
var ttt=document.getElementsByClassName("label_2")[i];
ttt.addEventListener("click",function(){
  if(document.getElementById("checkbox_2").checked){
    document.getElementById("onoff_2").textContent="on";
  }
  else {
    document.getElementById("onoff_2").textContent="off";
  }
})
}



// 儲存變更事件2
      $(".save_2").click(function(){
        $.get("api.php?do=about_save_2",function(re){
          $("#data_1").html(re)
        })
      })
    })
  })
})



// 帳號登出事件
$("#logout").click(function(){
  $.post("api.php?do=logout",function(re){
    location.href=re;
  })
})



// 顯示新增事件1
$("#add_1").click(function(){
  $("#cover").fadeIn();
  $("#cover").css("display","block")
  $("#cover").addClass("d-flex")
  $("#cvr").html(`
  <form action="api.php?do=about_add_1" method="post" class="d-flex flex-column justify-content-center" enctype="multipart/form-data">
          <p class="mt-4">新增關於我們</p>
          <p>圖片:<input type="file" name="img" id="imgload"></p>
          <p><img id="putimg" width="40%"></p>
          <p>標題:<input type="text" name="title"></p>
          <p>內容:<input type="text" name="info"></p>
          <p>位置:
              <input type="radio" name="position" id="left" value="1" '.(($row["position"]==1)?"checked":"").'>左
              <input type="radio" name="position" id="center" value="2" '.(($row["position"]==2)?"checked":"").'>中
              <input type="radio" name="position" id="right" value="3" '.(($row["position"]==3)?"checked":"").'>右
          </p>
          <p>顯示:
            <div class="togglebutton">
              <label>
                <input type="hidden" name="dpy" value="0">
                <input type="checkbox" name="dpy" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                    <span class="toggle"></span>
              </label>
            </div>
          </pp>
          <p>
              <input type="submit" class="btn" value="新增">
              <input type="reset" class="btn" id="reset_btn" value="重置">
          </p>
  </form>
  `)

// 上傳圖片，及時預覽1
  $("#imgload").change(function() {
    let file = $("#imgload")[0].files[0];
    let reader = new FileReader;
    reader.onload = function(e) {
    $("#putimg").attr("src", e.target.result);
    };
    reader.readAsDataURL(file)

    $("#reset_btn").click(function(){
    $("#putimg").attr("src","");
    })
  }); 
})



// 顯示新增事件2
$("#add_2").click(function(){
  $("#cover").fadeIn();
  $("#cover").css("display","block")
  $("#cover").addClass("d-flex")
  $("#cvr").html(`
  <form action="api.php?do=about_add_2" method="post" class="d-flex flex-column justify-content-center" enctype="multipart/form-data">
          <p class="mt-4">新增故事</p>
          <p>圖片:<input type="file" name="img" id="imgload"></p>
          <p><img id="putimg" width="40%"></p>
          <p>標題:<input type="text" name="title"></p>
          <p>內容:<input type="text" name="info"></p>
          <p>位置:
              <input type="radio" name="position" id="left" value="1" '.(($row["position"]==1)?"checked":"").'>左
              <input type="radio" name="position" id="center" value="2" '.(($row["position"]==2)?"checked":"").'>中
              <input type="radio" name="position" id="right" value="3" '.(($row["position"]==3)?"checked":"").'>右
          </p>
          <p>顯示:
            <div class="togglebutton">
              <label>
                <input type="hidden" name="dpy" value="0">
                <input type="checkbox" name="dpy" value="1" '.(($row["dpy"]==1)?"checked":"").'>
                    <span class="toggle"></span>
              </label>
            </div>
          </p>
          <p>
              <input type="submit" class="btn" value="新增">
              <input type="reset" class="btn" id="reset_btn" value="重置">
          </p>
  </form>
  `)

// 上傳圖片，及時預覽2
  $("#imgload").change(function() {
    let file = $("#imgload")[0].files[0];
    let reader = new FileReader;
    reader.onload = function(e) {
    $("#putimg").attr("src", e.target.result);
    };
    reader.readAsDataURL(file)

    $("#reset_btn").click(function(){
    $("#putimg").attr("src","");
    })
  }); 
})



// 關閉新增視窗
$("#close").click(function(){
  $("#cover").fadeOut("fast",function(){
    $("#cover").css("display","none")
    $("#cover").removeClass("d-flex");
  });
})
