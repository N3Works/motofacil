@extends('layoutWebPage.main')
@section('conteudo')

<!-- Intro Header -->
<div class="absolute-container">
    <div class="intro-body" style="text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="brand-heading">Levamos você à sua moto.</h1>
                    <p class="intro-text">Conquiste seus sonhos com a nossa ajuda</p>
                    <a href="{{ url('buscar') }}">
                        <button class="btn sbold btn-primary" > Comece Aqui
                            <i class="fa fa-search"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
