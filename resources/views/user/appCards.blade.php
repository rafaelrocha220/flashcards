<script src="https://kit.fontawesome.com/ddd76128b4.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<div class="row">

    <!-- Init cards -->
    <div class="card col-md-4 offset-4" style="width: 18rem;">
        
        <div class="card-body">
            <div class="card-items">
                <i class="far fa-star"></i>
                <i class="fas fa-headphones"></i>
            </div>
            
            <h5 class="card-title text-center">{{$card}}</h5>
        </div>

    </div>
    <!-- End cards -->

    <!-- Responses cards -->
    <ul id="response" class="list-group col-md-4 offset-4">
        @foreach ($words as $word)
            <li class="list-group-item "><i id="check-response" class="far fa-check-circle"></i>{{$word}}</li>
        @endforeach
    </ul>
    <!-- End Response cards -->
</div>


<style>
#response{
    margin-top:40px;
    width: 100%;
    padding: 0px;
    color:#525252;
    cursor: pointer;
}

#response > li:hover,#check-response:hover{ 
    background-color: #42b883;
    color: white;
    -webkit-transition: background-color 0.8s ease;
    -moz-transition: background-color 0.8s ease;
    -o-transition: background-color 0.8s ease;
    transition: background-color 0.8s ease;
}

#response > li {
    color:#35495e;
}

#check-response{
    padding: 0 5px 0 0;
    color: #35495e;
}

#response > li{
    margin: 0px 0px 10px 0px;
    border-color: #42b883;
    border-radius: 0.25rem;
}

.card{
    margin-top: 25px;
    font-family: 'Calistoga', cursive;
    border: 0.5px solid #35495e;
    color: #42b883;
}

.card-items{
    float: right;
    width: 100%;
}

.card-items > i{
    color:#35495e;
    font-size: 13px;
    padding: 0px 3px;
    float:right;
}

.card-title {
    color: #35495e;
    padding:20px;
}

</style>