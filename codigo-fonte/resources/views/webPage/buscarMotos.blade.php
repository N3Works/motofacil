@extends('layoutWebPage.main')
@section('conteudo')

<div class="absolute-container">
    <section id="about" class="content-section text-center">
        <div class="container-buscarMotos">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Buscar Motos</h2>
                </div>
                <div class="col-lg-5 mx-auto">
                    <div class="portlet-body form form-text-open-sans" style="color: white;">
                        {{ Form::open(['id' => 'model_form', 'method' => 'post', 'url' => url('buscar'), 'class' => 'form-horizontal']) }}

                            <p>Informe primeiro a marca e depois o modelo e o ano na ordem que desejar.</p>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->first("marca", "has-error") }}">
                                        {{ Form::select('marca', $marcas, $model->marca, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control select2 marca-select', 'placeholder' => 'Digite ou selecione a Marca']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->first("modelo", "has-error") }}">
                                        {{ Form::select('modelo', $modelos, $model->modelo, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control select2 modelos-select', 'placeholder' => 'Digite ou selecione o Modelo']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->first("ano", "has-error") }}">
                                        {{ Form::select('ano', $anos, $model->ano, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control select2 anos-select', 'placeholder' => 'Digite ou selecione o Ano']) }}
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
                                            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                                                <img src="{{ asset('storage/'.str_replace('public', '', $moto->anexos->filename) ) }}" height="250" width="280" class="image-moto">
                                                <p class = "watermark">
                                                  Imagem ilustrativa<br>
                                                </p>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Marca</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->marca }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Ano</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->ano }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Estilo</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->estilo }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Cilindrada</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->cilindrada }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Potẽncia</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->potencia }} - CV</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Tanque</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->tanque }} - L</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;"></span>Peso Seco</div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->peso_seco }} - Kg</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Trasmissão</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->transmissao }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Tipo Motor</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->tipo_motor }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Refrigeração</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->refrigeracao }}</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">Categoria</span></div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 12px;">{{ $moto->categoria }}</span></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <a href="{{ url('show/'.$moto->id) }}" style="margin-top: 4px" class="btn btn-default">
                                                        <i class="fa fa-search"></i>
                                                        Visualizar Moto
                                                </a><br>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <a href="{{ url('solicitar?proposta='.$moto->id) }}" style="margin-top: 4px" class="btn btn-default">
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
