<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('index') }}">{!! app('AppConfig')->getParam('CABECALHO_NOME_PROJETO') !!}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('buscar') }}">Buscar Moto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('solicitar') }}">Solicitar Proposta</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('quemSomos') }}">Quem Somos</a>
                </li>  -->
            </ul>
        </div>
    </div>
</nav>
