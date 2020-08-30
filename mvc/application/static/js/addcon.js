$(function() {

    $.ajax({
        url: "/htdocs/mvc/index.php/admin/category/getOption",
        dataType: "json",
        success: function (res){
            var cid = $("#cid").attr("cid");
            three(res, 1, cid);
            $("#cid").html(str);
            str = "";
        }
    })
    function str_repeat(str, num) {
        var result = "";
        for (var i = 0; i < num; i++) {
            result+=str;
        }
        return result;
    }
    var str = "";
    function three(data, $i, cid) {
        for (var i = 0; i < data.length; i++) {
            if (data[i].child) {
                if (cid!==undefined) {
                    if (cid === data[i].cid) {
                        str += "<option selected value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                    }else {
                        str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                    }
                }else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
                three(data[i].child, $i+1, cid);
            }
            else {
                if (cid!==undefined) {
                    if (cid === data[i].cid) {
                        str += "<option selected value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                    }else {
                        str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                    }
                }else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }            }
        }
    }

})