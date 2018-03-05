@extends('layout.master')
@section('conteudo')
@include('layout.erros')

{!! LayoutBuilder::gerarBreadCrumb([
    'Início' => url('default/index'),
    'Lista de Motos' => url('motos/index'),
    'Visualizar Moto'
]) !!}

@section('javascript')
{!! Html::script('resources/assets/js/motos/show.js') !!}
@stop

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        
        @include('layout.erros')
        
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-sharp bold uppercase">Visualizar Moto</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="col-md-12">
                    <fieldset>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['modelo'] }}</label>
        <div class="form-control">{{ $model->modelo }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['marca'] }}</label>
        <div class="form-control">{{ $model->marca }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['ano'] }}</label>
        <div class="form-control">{{ $model->ano }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['estilo'] }}</label>
        <div class="form-control">{{ $model->estilo }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['cilindrada'] }}</label>
        <div class="form-control">{{ $model->cilindrada }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['potencia'] }}</label>
        <div class="form-control">{{ $model->potencia }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['tanque'] }}</label>
        <div class="form-control">{{ $model->tanque }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['peso_seco'] }}</label>
        <div class="form-control">{{ $model->peso_seco }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['trasmissao'] }}</label>
        <div class="form-control">{{ $model->trasmissao }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['tipo_motor'] }}</label>
        <div class="form-control">{{ $model->tipo_motor }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['refrigeracao'] }}</label>
        <div class="form-control">{{ $model->refrigeracao }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['categoria'] }}</label>
        <div class="form-control">{{ $model->categoria }}</div>
                                
                            </div>
                        </div>
      
                        <div class="col-sm-6">
                            <div class="form-body">
                                <label class="control-label">{{ $model->labels['anexo_id'] }}</label>
        <div class="form-control">{{ $model->anexo_id }}</div>
                                
                            </div>
                        </div>

                    </fieldset>    
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('motos/index') }}"><button type="button" class="btn btn-default">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
