
    function selectResponse(obj,key){

        var form = $("#card-response-form");

        // Input
        var response = $('#check-' + key);

        // If not checked turn checked
        response.attr("checked", "checked");


        // Remove effect hover
        $( ".list-group-item" ).removeClass('item');

        // Disable onclick event
        $( ".list-group-item" ).prop("onclick", null).off("click");

        // $(obj).addClass('card-response-selected');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: form.attr('action'),
            type: "POST",
            data: form.serialize(),
            success: function (response) {
                $(obj).find( ".check-response" ).css('color','white');

                var listCorrect = $("input[name=correct-response]").val();
                console.log(listCorrect);

                if(response['type'] == 'success'){
                    
                    $(obj).addClass('response-checked-correct');
                    responseAction('success',response['redirect'])	

                }else{

                    $(obj).addClass('response-checked-wrong');
                    responseAction('wrong',response['redirect'])
                    
                    setTimeout(() => {
                        $('.' + listCorrect).find( ".check-response" ).css('color','white');
                        $('.' + listCorrect).addClass('response-checked-correct') 
                    }, 3000);

                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

    }