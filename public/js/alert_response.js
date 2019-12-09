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