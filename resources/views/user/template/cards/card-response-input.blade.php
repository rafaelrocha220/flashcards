<link rel="stylesheet" href="{{asset('css/cards.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1" style="width: 18rem;">
        
        <div class="card-body">
            <span class="card-items"><i class="far fa-star"></i></span>

            <div class="card-head">
                
                <audio id="audioResponse">
                    <source src="{{asset('audio/hello_word')}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>    

            </div>

            <h5 class="card-body-title text-center">
                <span id="playAudio" class="play play_view text-center"><i class="fas fa-play"></i></span>
            </h5>

            <h5 class="card-body-title text-center">
                <span id="pauseAudio" class="play play_view" style="display:none"><i class="fas fa-pause"></i></span>
            </h5>

            <h5 class="card-body-description text-center">"{{$card->description}}"</h5>
        </div>

    </div>
    <!-- End cards -->

    <!-- Responses cards -->
    <form id="card-response-form" action="{{route('app.reponsecardinput')}}" method="post">

        <!-- <input type="hidden" name="response-app" value="{{$card->description}}" > -->

        @csrf

        <ul id="card-responses-body" class="list-group col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1">
            <h5 class='title-response'>Write what you understood...</h5>
            <h5 style="display:none" class='title-correct-response'>Correct response:</h5>
            <span style="display:none" class='correct-response-input'>{{ $card->description }}</span>
            <textarea class="form-control" rows="5" id="response-user"></textarea>
            
            
            <div style="margin-top: 10px;background-color: #3f4d71;" onClick='getResponse("{{ $card->description }}")' class="btn btn-primary btn-md float-right"><i class="fa fa-circle-o-notch fa-spin"></i>Reply now</div>
        </ul>


    </form>
    <!-- End Response cards -->

    

</div>

<script src="{{asset('js/alert_response.js')}}"></script>
<script src="{{asset('js/select_response.js')}}"></script>
<script src="{{asset('js/sound.js')}}"></script>