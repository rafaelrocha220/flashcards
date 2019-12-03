<nav id="#header" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('app.home')}}">LearnEnglish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item <?= request()->routeIs('app.home') ? 'active' : '' ?>">
                <a class="nav-link" href="{{route('app.home')}}">Home</a>
            </li>
            
            <li class="nav-item <?= request()->routeIs('app.cards') ? 'active' : '' ?>">
                <a class="nav-link" href="{{route('app.cards')}}">Cards</a>
            </li>
            
        </ul>

        <!-- Search -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>

<!-- Progress alert -->
<div class='response-info'>
    <div class="progress progress-response">
        <div data-percentage="0%" style="width:100%;" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="alert-message alert-message-success">
        <h4><strong>Correct!</strong></h4>
        
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
        <a href="#" class="btn btn-xs btn-success pull-right">do an action</a>
    </div>
</div>


<style>
.response-info{
    height: 0px;
    opacity:0;
}

.alert-message
{
    margin: 0px;
    padding: 10px;
    text-align: center;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}
.alert-message-success
{
    background-color: #F4FDF0;
    border-color: #3C763D;
}
.alert-message-success h4,
.alert-message-success p
{
    color: #3C763D;
}
</style>
