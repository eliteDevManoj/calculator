$(function() {
    
    let outputString = $("#output-string")

    let operatorApplied =  $("#operator")

    let operandOne = $("#operand-one")
    let operandTwo = $("#operand-two")

    $('#clear-display').on('click', function() {

        operatorApplied.val("");
        operandOne.val("");
        operandTwo.val("");
        outputString.val("");
        $('.calculator__output').html("0")
    })

    $(".calculator__key--operator").on('click', function() {

        if(!operatorApplied.val()) {

            operatorApplied.val(this.value)
            let newOutputString = outputString.val() + this.value
            
            outputString.val(newOutputString)
    
            $('.calculator__output').html($("#output-string").val())
        }
    })


    $(".operand").on("click", function() {

        if(!operatorApplied.val()) {
            
            let newOperandValue = operandOne.val() + this.value
        
            operandOne.val(newOperandValue)
        }
        else {

            let newOperandValue = operandTwo.val() + this.value
        
            operandTwo.val(newOperandValue)
        }

        let newOutputString = outputString.val() + this.value
        
        outputString.val(newOutputString)

        $('.calculator__output').html(outputString.val())
    })

    $("form").submit(function(e){
        e.preventDefault();

        var form = $(this);
        var actionUrl = form.attr('action');
        var method = form.attr('method');

        $.ajax({
            url : actionUrl,
            method : method,
            data: form.serialize(),
            success : function(data) {              
                
               if(data.data.error) {
                alert(data.data.message)
               }
               else if(data.data.result) {

                operatorApplied.val("");
                operandOne.val("");
                operandTwo.val("");
                outputString.val("");
                $('.calculator__output').html(data.data.result)
               }
            },
            error : function(request,error)
            {
                alert("Request: "+JSON.stringify(request));
            }
        });
    });
});