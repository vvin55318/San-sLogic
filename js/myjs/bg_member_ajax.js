// 第一次進入，載入資料
$.get("api.php?do=member_data",function(re){
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
      let acc=re.target.parentNode.parentNode.children[1].textContent;
      let pwd=re.target.parentNode.parentNode.children[2].textContent;
      const chkData={
        id:id,
        acc:acc,
        pwd:pwd
      };
      $.post("api.php?do=member_del", chkData ,function(re){
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
    $.post("api.php?do=member_mdy",{id},function(re){  
      event.target.parentNode.parentNode.innerHTML=re
        $("#add").attr("style","display:none")

// 取消修改事件
      $(".cancel").click(function(){
        location.reload();
      })

// 儲存變更事件
      $(".save").click(function(result){
        $.get("api.php?do=member_save",function(re){
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
  <form action="api.php?do=member_add" method="post" class="d-flex flex-column justify-content-center" enctype="multipart/form-data">
          <p class="mt-4">新增會員</p>
          <p>帳號:<input type="text" name="acc"></p>
          <p>密碼:<input type="text" name="pwd"></p>
          <p>姓名:<input type="text" name="name"></p>
          <p>性別:
            <input type="radio" name="gender" id="male" value="1" '.(($row["gender"]==1)?"checked":"").'>男
            <input type="radio" name="gender" id="female" value="0" '.(($row["gender"]==0)?"checked":"").'>女
          </p>
          <p>地址:<input type="text" name="address"></p>
          <p>
              <input type="submit" class="btn" value="新增">
              <input type="reset" class="btn" id="reset_btn" value="重置">
          </pp>
  </form>
  `)
})


// 關閉新增視窗
$("#close").click(function(){
  $("#cover").fadeOut("fast",function(){
    $("#cover").css("display","none")
    $("#cover").removeClass("d-flex");
  });
})
