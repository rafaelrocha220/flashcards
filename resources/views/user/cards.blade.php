@extends('user.layout.index')

@section('titulo', 'Flashcards')

@section('contents')
<link rel="stylesheet" href="{{asset('css/cards.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-4" style="width: 18rem;">
        
        <div class="card-body">
            <div class="card-items">
                <i class="far fa-star"></i>
                <i class="fas fa-headphones"></i>
            </div>

            <div class="col-md-12 audio_wrapper">
                <audio id="audioResponse">
                    <source src="{{asset('audio/hello_word.mp3')}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>

                <div id="playAudio" class="play"><i class="fas fa-play"></i></div>
                <div id="pauseAudio" class="play" style="display:none"><i class="fas fa-pause"></i></div>

            </div>
            <h5 class="card-description text-center">"Used when meeting or greeting someone"</h5>
        </div>

    </div>
    <!-- End cards -->

    <!-- Responses cards -->
    <div class="col-md-12">
        <form action="" method="post">

            <ul id="response" class="list-group col-md-4 offset-4">
                @foreach ($words as $key => $word)
                    <li class="list-group-item" onClick="selectResponse(this, '{{ $key }}' )" ><i id="check-response" class="far fa-check-circle"></i>{{ $key }}</li>
                    <input style="display:none" id="check-{{$key}}" type="checkbox" name="" id="">
                @endforeach
            </ul>

        </form>
    </div>
    <!-- End Response cards -->
</div>


<script>

    function selectResponse(obj,key){
        var response = $('#check-' + key);

        response.attr("checked", !response.attr("checked"));


        if(response.attr("checked")){
            console.log('ok')
        }else{
            console.log('nao')
        }
    }

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
    $('#audioResponse').on('ended', function() {
        $(".play").toggle();
        // enable button/link
    });

</script>

@endsection('contents')