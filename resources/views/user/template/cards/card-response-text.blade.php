
<link rel="stylesheet" href="{{asset('css/cards.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-4" style="width: 18rem;">
        
        <div class="card-body">

            <div class="card-head">
                
                <span class="card-items"><i class="far fa-star"></i></span>
                <span id="playAudio" class="play card-items"><i class="fas fa-play"></i></span>
                <span id="pauseAudio" class="play card-items" style="display:none"><i class="fas fa-pause"></i></span>

                <audio id="audioResponse">
                    <source src="{{asset('audio/hello_word.mp3')}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>    

            </div>

            <h5 class="card-body-title text-center">{{$card}}</h5>
            <h5 class="card-body-description text-center">"<b>Hello</b>, I'd like some information about flights to the US, please."</h5>
        </div>

    </div>
    <!-- End cards -->

    <!-- Responses cards -->
        <form id="card-response-form" action="{{route('app.reponsecard')}}" method="post">

            <input type="hidden" name="response-app" value="{{$card}}" >

            @csrf

            <ul id="card-responses-body" class="list-group col-md-4 offset-4">
                @foreach ($words as $key => $word)
                    <li class="card-responses-item list-group-item" onClick="selectResponse(this, '{{ $word->id }}' )" ><i class="fas fa-check-circle check-response"></i>{{ $word->description }}</li>
                    <input style="display:none" id="check-{{$word->id}}" type="radio" name="response-user" value="{{$word->word}}" id="">
                @endforeach
            </ul>

        </form>
    <!-- End Response cards -->

</div>

<script>
    // $('#header').after("<div class='progress progress-response'> <div data-percentage='0%' style='width: 50%;' class='progress-bar progress-bar-success' role='progressbar' aria-valuemin='0' aria-valuemax='100'></div> </div>")

    function selectResponse(obj,key){

        var form = $("#card-response-form");

        var response = $('#check-' + key);

        //Remove all checked true 
        $('input:radio[name=response-user]').each(function() 
        {
            $(this).removeAttr('checked');
        }); 

        // If not checked turn checked
        response.attr("checked", "checked");

        $( ".list-group-item" ).removeClass('card-response-selected');

        $(obj).addClass('card-response-selected');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: form.attr('action'),
            type: "POST",
            data: form.serialize(),
            success: function (response) {
                if(response['type'] == 'success'){
                    $(obj).addClass('response-checked-correct');
                    console.log(response['redirect'])
                    	
                    // window.location.href = response['redirect'];
                }else{
                    console.log('errada')
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

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

    $('#audioResponse').on('pause', function() {
        $(".play").toggle();
        // disable button/link
    });
    
</script>
