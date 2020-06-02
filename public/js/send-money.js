$("#youSendCurrency").val(curr1);
$("#recipientCurrency").val(curr2);

$(function(){
    $("#youSend").val(initSendVal).trigger("keyup");
    $("#form-send-money").validate({
        ignore: ':hidden'
    });
});

//go prev
$("#form-send-money .btn-back").click(function () {
    let target = $(this).closest(".step").prev(".step").attr("id");
    setActive("#"+target);
});

//validate and go next
$("#form-send-money .btn-continue").click(function () {
    if(isValidActiveBlock()){
        let target = "#"+$(this).closest(".step").addClass("valid").next(".step").attr("id");
        setActive(target);
    }
});

//open valid step
$(".secondary-nav .nav-link").click(function(e){
    e.preventDefault();
    const target = $(this).attr("href");
    if($(target).hasClass("valid") || $(target).prev(".step").hasClass("valid")){
        setActive(target);
    }
});

$("#form-send-money .btn-reset").click(function(){
    const form = $(this).closest("form");
    form.trigger("reset");
    $(".step", form).removeClass("valid");
    setActive("#amount");
});

function isValidActiveBlock(){
    isValid = false;
    if($("#form-send-money").valid()){
        let youSendVal = $.trim($("#youSend").val());
        if(youSendVal !== "" && youSendVal >0 ){
            isValid = true;
        }else{
            $("#youSend").addClass("err");
            $("#from_error").text("Sending amount must be greater than 0");
        }
    }
    return isValid;
}

function setActive(target){
    console.log(target);
    $(".step").hide();
    $(".secondary-nav a").removeClass("active");

    $(target).show().addClass("animate__fadeIn");
    $(".secondary-nav a[href='"+target+"']").addClass("active");
    $(window).scrollTop(0);
}