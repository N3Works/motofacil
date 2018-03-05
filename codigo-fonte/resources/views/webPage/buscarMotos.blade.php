@extends('layoutWebPage.main')
@section('conteudo')

<div class="absolute-container">
    <section id="about" class="content-section text-center">
        <div class="container-buscarMotos">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Buscar Motos</h2>
                </div>

                <div class="col-lg-8 mx-auto">
                    <div class="portlet-body form form-text-open-sans" style="color: white;">
                        {{ Form::open(['id' => 'model_form', 'method' => 'post', 'url' => url('buscar'), 'class' => 'form-horizontal']) }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first("modelo", "has-error") }}">
                                        <label class="control-label">{{ $model->labels['modelo'] }}</label>
                                        {{ Form::text('modelo', $model->modelo, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first("marca", "has-error") }}">
                                        <label class="control-label">{{ $model->labels['marca'] }}</label>
                                        {{ Form::text('marca', $model->marca, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first("data_ini", "has-error") }}">
                                        <label class="control-label">Ano Inicial</label>
                                        {{ Form::text('data_ini', $model->data_ini, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '4']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first("data_fim", "has-error") }}">
                                        <label class="control-label">Ano Final</label>
                                        {{ Form::text('data_fim', $model->data_fim, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '4']) }}
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::button('Buscar', ['type' => 'submit', 'class' => 'btn btn-success']) }}
                                <a class="btn btn-default" onclick="limparCampos('model_form');">Limpar Filtro</a>
                            </div>
                        </div>
                    {{ Form::close() }}

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <div class="container-branco">
                        @if ($motos->count())
                            <div class="row">
                            @foreach($motos as $moto)

                                <div class="col-md-6">
                                    <div class="border-gallery">
                                        
                                    
                                        <div class="row">
                                            <div class="col-md-12" title="Modelo">
                                                <h5 class="text-uppercase">{{ $moto->modelo }}</h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row div-painel">
                                            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12 text-center">
                                                <img src="{{ asset('storage/'.str_replace('public/', '', $moto->anexos->filename) ) }}" class="image-moto">
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                                                <h4><i class="fa fa-calendar" title="Ano"></i> {{ $moto->ano }}</h4><br>
                                                <h4><i class="fa fa-tag" title="Marca"></i> {{ $moto->marca }}</h4>
                                                <br>
                                                <a href="{{ url('show/'.$moto->id) }}" style="width: 100%; margin-top: 4px" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                    Visualizar Moto
                                                </a><br>
                                                <a href="{{ url('solicitar?proposta='.$moto->id) }}" style="width: 100%; margin-top: 4px" class="btn btn-default">
                                                    <i class="fa fa-send"></i>
                                                    Solicitar Proposta
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        @else
                            <p class="text-resultado">Não há motos com os filtros selecionados.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop