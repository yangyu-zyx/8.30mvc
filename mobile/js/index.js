$(function(){
    //菜单
    $(".zuo img").hammer().bind("tap",function(){
        $(".list").css("display","block")
        $(".zuo img").css("display","none");
    })
    $(".ex").hammer().bind("tap",function(){
        $(".list").css("display","none")
        $(".zuo img").css("display","block")
    })
})