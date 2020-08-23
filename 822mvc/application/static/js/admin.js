$(function (){
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlength: 2
            },
            pwd: {
                required: true
            }
        },
        messages: {
            uname: {
                required: "用户名没有填写",
                minlength: "要符合用户名规则"
            },
            pwd: {
                required: "密码没有填写"
            }
        }
    })
})