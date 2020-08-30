$(function(){
    //添加
    $(".add").click(function (){
        var cid = $(this).attr("attr");
        var pid = $(this).attr("pid");
        $("input[type=hidden]").val(cid);
        $("<div class='mask'>").appendTo("body").css({
            width: "100%",
            height: "100%",
            opacity: .3,
            backgroundColor: "#000",
            position: "fixed",
            left: 0,
            top: 0
        })
        $(".addpanel").css("display", "block");
    })
    $(".addpanel .close").click(function (){
        $(".panel").css("display", "none");
        $(".mask").remove();
    })

    //点击修改
    var cid
    $(".edit").click(function (){
        cid = $(this).attr("attr");
        var pid = $(this).attr("pid");
        $("input[type=hidden]").val(cid);
        $("<div class='mask'>").appendTo("body").css({
            width: "100%",
            height: "100%",
            opacity: .3,
            backgroundColor: "#000",
            position: "fixed",
            left: 0,
            top: 0
        })
        $(".editpanel").css("display", "block");

        //显示信息
        $.ajax({
            url: "/htdocs/mvc/index.php/admin/category/show",
            dataType: "json",
            data:{
                cid
            },
            success: function (res) {
                console.log(res);
                $(".editpanel input[name=cname]").val(res.cname);
                if (res.isshow == 1) {
                    $("#isshow option:eq(0)").prop("selected", true)
                } else {
                    $("#isshow option:eq(1)").prop("selected", true)
                }
                $(".editpanel input[name=tpl_name]").val(res.tpl_name);
                $(".editpanel textarea").val(res.info);
            }
        })
        $.ajax({
            url: "/htdocs/mvc/index.php/admin/category/getOption",
            dataType: "json",
            success: function (res){
                three(res, 1, cid, pid);
                $("#opts").html(str);
                str = "<option value='0'>一级栏目</option>";
            }
        })
        function str_repeat(str, num) {
            var result = "";
            for (var i = 0; i < num; i++) {
                 result+=str;
            }
            return result;
        }
        var str = "<option value='0'>一级栏目</option>";
        function three(data, $i, cid, pid) {
            for (var i = 0; i < data.length; i++) {
                    if (data[i].child) {
                        if (data[i].cid !== cid) {
                            //当前循环的cid等于child里的pid
                            if (data[i].cid === pid){
                                str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                            }else {
                                str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                            }
                        }
                        three(data[i].child, $i+1, cid, pid);
                    }
               else {
                   if (data[i].cid !== cid) {
                       if (data[i].cid === pid){
                           str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                       }else {
                           str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                       }
                   }
                }
            }
        }
        //点击修改按钮
        $(".editpanel input[type=button]").click(function (){
            var data = ($(".editpanel form").serialize()+"&cid="+cid);
            $.ajax({
                url: "/htdocs/mvc/index.php/admin/category/update",
                data:data,
                success: function (res){
                    // alert(res);
                    if ($.trim(res) === "ok") {
                        // location.href="/htdocs/mvc/index.php/admin/category";
                        location.reload();
                    }
                }
            })
        })
    })
    $(".editpanel .close").click(function (){
        $(".panel").css("display", "none");
        $(".mask").remove();
    })

})