$("#click-eyepw").click(function () { 
    $("#click-eyepw").toggleClass("fa-eye-slash");
    var input_pass = $("#password");
    if (input_pass.attr("type") === "password") {
        input_pass.attr("type","text");
    }else{
        input_pass.attr("type","password");
    }
 });
$("#click-eyepw1").click(function () { 
    $("#click-eyepw1").toggleClass("fa-eye-slash");
    var input_pass = $("#password1");
    if (input_pass.attr("type") === "password") {
        input_pass.attr("type","text");
    }else{
        input_pass.attr("type","password");
    }
 });
$("#click-eyepw2").click(function () { 
    $("#click-eyepw2").toggleClass("fa-eye-slash");
    var input_pass = $("#password2");
    if (input_pass.attr("type") === "password") {
        input_pass.attr("type","text");
    }else{
        input_pass.attr("type","password");
    }
 });