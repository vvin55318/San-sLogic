// 第一次進入，載入資料
$.get("api.php?do=contact_data",function(re){
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
      let name=re.target.parentNode.parentNode.children[1].textContent;
      let email=re.target.parentNode.parentNode.children[2].textContent;
      const chkData={
        id:id,
        name:name,
        email:email
      };
      $.post("api.php?do=contact_del", chkData ,function(re){
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
    $.post("api.php?do=contact_mdy",{id},function(re){  
      event.target.parentNode.parentNode.innerHTML=re
        $("#add").attr("style","display:none")

// 取消修改事件
      $(".cancel").click(function(){
        location.reload();
      })

// 儲存變更事件
      $(".save").click(function(result){
        $.get("api.php?do=contact_save",function(re){
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



// 關閉新增視窗
$("#close").click(function(){
  $("#cover").fadeOut("fast",function(){
    $("#cover").css("display","none")
    $("#cover").removeClass("d-flex");
  });
})
