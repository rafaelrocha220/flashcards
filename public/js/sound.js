
    var x = document.getElementById("audioResponse");

    // Run audio on load page
    $( "#playAudio" ).on( "click", function(){
        x.play();
    } );

    $( "#pauseAudio" ).on( "click", function(){
        x.pause();
    } );

    // Change play/pause
    $('#audioResponse').on('playing', function() {
        $(".play").toggle();
        // disable button/link
    });

    $('#audioResponse').on('pause', function() {
        $(".play").toggle();
        // disable button/link
    });