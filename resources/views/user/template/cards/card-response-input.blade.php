<link rel="stylesheet" href="{{asset('css/cards.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-4" style="width: 18rem;">
        
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
    <form id="card-response-form" action="{{route('app.reponsecard')}}" method="post">

        <input type="hidden" name="response-app" value="{{$card->word_key}}" >

        @csrf

        <ul id="card-responses-body" class="list-group col-md-4 offset-4">
            <h5>Write what you understood...</h5>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            
            
            <button style="margin-top: 10px;background-color: #3f4d71;" class="btn btn-primary btn-md float-right"><i class="fa fa-circle-o-notch fa-spin"></i>Reply now</button>
        </ul>


    </form>
    <!-- End Response cards -->

    

</div>

<script src="{{asset('js/alert_response.js')}}"></script>
<script src="{{asset('js/select_response.js')}}"></script>
<script src="{{asset('js/sound.js')}}"></script>