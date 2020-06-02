$(document).on("change","#youSendCurrency, #recipientCurrency",function(){
    convertCurrency(this);
});

$(document).on("keyup","#youSend, #recipientGets",function(){
    convertCurrency(this);
});

$(document).on("submit","#form-send-money", function(){
   // alert();
});

function convertCurrency(instance){
    let currency1 = $("#youSendCurrency").val();
    let currency2 = $("#recipientCurrency").val();

    let youSendInstance = $("#youSend");
    let youSend = parseFloat($.trim(youSendInstance.val()));

    let recipientGetsInstance = $("#recipientGets");
    let recipientGets = parseFloat($.trim(recipientGetsInstance.val()));

    $("#from_error, #to_error").empty().closest(".form-group").find(".input-group>input").removeClass("err");

    let data = {
        "_token": csrf_token,
        "from": currency1,
        "to": currency2
    };

    if($(instance).attr("id") !== "recipientGets"){
        data.amount = youSend;
        if(youSend && youSend > 0){
            $.post(exchangeRoute, data, function(response){
                if(response.success){
                    populateResult(recipientGetsInstance, currency1, currency2, response.body);
                }
            });
        }else{
            $("#from_error").text("Sending amount must be greater than 0");
            $("#from_error").closest(".form-group").find(".input-group>input").addClass("err");
        }
    }else{
        data.amount = recipientGets;
        data.reverse = true;
        if(recipientGets && recipientGets > 0){
            $.post(exchangeRoute, data, function(response){
                if(response.success){
                    populateResult(youSendInstance, currency1, currency2, response.body);
                }
            });
        }else{
            $("#to_error").text("Receiving amount must be greater than 0");
            $("#to_error").closest(".form-group").find(".input-group>input").addClass("err");
        }
    }
}

function populateResult(targetInputInstance, currency1, currency2, exchangeResult){
    $(".sendCurr").text(currency1);
    $("#receiveCurr").text(currency2);
    $("#feeAmount").text(exchangeResult.feeAmount);
    $("#receiveRate").text(exchangeResult.rate);
    targetInputInstance.val(exchangeResult.result);
    $("#totalSent").text(exchangeResult.result);
}