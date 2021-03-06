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
<div class="progress progress-response">
    <div data-percentage="0%" style="width:100%;display:none" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>

