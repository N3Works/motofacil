@extends('layoutWebPage.main')
@section('conteudo')

<div class="absolute-container">
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="container-branco">

                        <div class="row">
                            <div class="col-md-12" title="Modelo">
                                <h5 class="text-uppercase">{{ $moto->modelo }}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="{{ asset('storage/'.str_replace('public', '', $moto->anexos->filename) ) }}" class="image-moto">
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Marca</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->marca }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Ano</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->ano }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Estilo</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->estilo }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Cilindrada</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->cilindrada }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Potẽncia</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->potencia }} - CV</span></div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Tanque</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->tanque }} - L</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;"></span>Peso Seco</div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->peso_seco }} - Kg</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Trasmissão</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->transmissao }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Tipo Motor</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->tipo_motor }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Refrigeração</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->refrigeracao }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 16px;">Categoria</span></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><span style="font-size: 14px;">{{ $moto->categoria }}</span></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="{{ url('buscar') }}" style="margin-top: 4px" class="btn btn-default">
                                <i class="fa fa-reply"></i>
                                Voltar
                            </a>
                            <a href="{{ url('solicitar?proposta='.$moto->id) }}" style="margin-top: 4px" class="btn btn-success">
                                <i class="fa fa-send"></i>
                                Solicitar Proposta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop