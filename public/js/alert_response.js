function responseAction(type,redirect){
    if(type == 'success'){
        $('.progress-bar').css('background-color', '#55ae95');
    }else{
        $('.progress-bar').css('background-color', '#ff5454');
    }

    $('.progress-bar').css('display', 'block');
    $('.progress-bar').css('transition', '3s');
    $('.progress-bar').css('width', '-100%');

    setTimeout(() => {
        window.location.replace(redirect);
    }, 3500);
}

function reponseActionInput(type){
    var text = $('.title-response');

    var textResponseInput = $('.title-correct-response');
    var correctResponseInput = $('.correct-response-input');

    text.css('display','none');

    textResponseInput.css('display','block');
    correctResponseInput.css('display','block');

    var responseUser = $('#response-user');

    responseUser.css('border-color','#ff5454');
    responseUser.css('color','#ff5454');
    responseUser.attr('disabled','disabled');

}