$(function (){
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlength: 2,
                remote: {
                    url: "http://localhost:8888/htdocs/mvc/index.php/admin/reg/checkName",
                    type: "post",
                    data: {
                        uname: function () {
                            return  $("input[name=uname]").val();
                        }
                    }
                }
            },
            pwd: {
                required: true,
                rangelength: [3, 6],
                equalTo: "#pwd1"
            },
            pwd1: {
                required: true,
                rangelength: [3, 6],
                equalTo: "#pwd"
            }
        },
        messages: {
            uname: {
                required: "用户名没有填写",
                minlength: "用户名在两位以上",
                remote: "用户名已存在"
            },
            pwd: {
                required: "密码没有填写",
                rangelength: "密码在3-6位之间",
                equalTo: "两次输入密码保持一致"
            },
            pwd1: {
                required: "确认密码没有填写",
                rangelength: "密码在3-6位之间",
                equalTo: "两次输入密码保持一致"
            }
        }
    })
})