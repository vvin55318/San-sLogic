// 第一次進入，載入資料
$.get("api.php?do=model_data",function(re){
$("#data").html(re)



// 禁用顯示開關
var switch_nmb=document.getElementsByClassName("toggle_switch").length
for(i=0;i<switch_nmb;i++){
  document.getElementsByClassName("toggle_switch")[i].disabled=true;
  $(".toggle_switch").next().attr("style","opacity:0.5")
}

// 刪除功能
  $(".del").click(function(re){
    if(confirm("確定要刪除嗎?")){
      let id=re.target.parentNode.parentNode.children[0].textContent;
      let text=re.target.parentNode.parentNode.children[1].textContent;
      let title=re.target.parentNode.parentNode.children[2].textContent;
      const chkData={
        id:id,
        text:text,
        title:title
      };
      $.post("api.php?do=model_del", chkData ,function(re){
        location.reload();
        alert(re);
      })
    console.log(id);
    }
  })

// 修改事件
  $(".mdy").click(function(event){
    const id=event.target.parentNode.parentNode.children[0].textContent
    event.target.parentNode.parentNode.style.background="#ddd"
    $(".mdy,.del").attr("style","display:none")
    $.post("api.php?do=model_mdy",{id},function(re){  
      event.target.parentNode.parentNode.innerHTML=re
        $("#add").attr("style","display:none")

// 上傳圖片，及時瀏覽
      $("#img_mdy").change(function() {
        let file = $("#img_mdy")[0].files[0];
        let reader = new FileReader;
        reader.onload = function(e) {
          $("#img_mdy_prev").attr("src", e.target.result);
        };
        reader.readAsDataURL(file)
      })

// 取消修改事件
      $(".cancel").click(function(){
        location.reload();
      })


// toggle 開關
  for(i=0;i<switch_nmb;i++){
    var ttt=document.getElementsByTagName("label")[i];
    ttt.addEventListener("click",function(){
      if(document.getElementById("checkbox").checked){
        document.getElementById("onoff").textContent="on";
      }
      else {
        document.getElementById("onoff").textContent="off";
      }
    })
  }



// 儲存變更事件
      $(".save").click(function(result){
        $.get("api.php?do=model_save",function(re){
          $("#data").html(re)
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



// // 顯示新增事件2
$("#add").click(function(){
  $("#cover").fadeIn();
  $("#cover").css("display","block")
  $("#cover").addClass("d-flex")
  $("#cvr").html(`
  <form action="api.php?do=model_add" method="post" class="d-flex flex-column justify-content-center" enctype="multipart/form-data">
          <p class="mt-4">新增作品模型</p>
          <p>圖片:<input type="file" name="img" id="imgload"></p>
          <p><img id="putimg" width="40%"></p>
          <p>標題:<input type="text" name="title"></p>
          <p>內容:<input type="text" name="info"></p>
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