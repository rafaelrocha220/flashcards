<link rel="stylesheet" href="{{asset('css/cards.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1" style="width: 18rem;">
        
        <div class="card-body">

            <div class="card-head">
                
                <span class="card-items"><i class="far fa-star"></i></span>
                <span id="playAudio" class="play card-items"><i class="fas fa-play"></i></span>
                <span id="pauseAudio" class="play card-items" style="display:none"><i class="fas fa-pause"></i></span>

                <audio id="audioResponse">
                    <source src="{{asset('audio/hello_word')}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>    

            </div>

            <h5 class="card-body-title text-center">{{$card->word_key}}</h5>
            <h5 class="card-body-description text-center">{{$card->description}}</h5>
        </div>

    </div>
    <!-- End cards -->

    <!-- Responses cards -->
    <form id="card-response-form" action="{{route('app.reponsecard')}}" method="post">

        <input type="hidden" name="response-app" value="{{$card->word_key}}" >

        @csrf

        <ul id="card-responses-body" class="list-group col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1">
            @foreach ($words as $key => $word)

                @if($word->word == $card->word_key)
                    <input type="hidden" name="correct-response" value="list-{{$word->id}}" >
                @endif

                <li class="list-{{$word->id}} item card-responses-item list-group-item" onClick="selectResponse(this, '{{ $word->id }}' )" ><i class="fas fa-check-circle check-response"></i>{{ $word->description }}</li>
                <input style="display:none" id="check-{{$word->id}}" type="radio" name="response-user" value="{{$word->word}}" id="">
            @endforeach
        </ul>

    </form>
    <!-- End Response cards -->

</div>

<script src="{{asset('js/alert_response.js')}}"></script>
<script src="{{asset('js/select_response.js')}}"></script>
<script src="{{asset('js/sound.js')}}"></script>