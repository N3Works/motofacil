@extends('layout.master')
@section('conteudo')

{!! LayoutBuilder::gerarBreadCrumb([
    'Início' => url('default/index'),
    'Lista de Motos' => url('motos/index'),
    'Cadastrar Moto',
]) !!}

@section('javascript')
{!! Html::script('resources/assets/js/motos/form.js') !!}
@stop

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        
        @include('layout.erros')
        
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-sharp bold uppercase">{{ $model->id ? 'Atualizar': 'Cadastrar' }} Moto</span>
                </div>
            </div>
            <div class="portlet-body form">
                    {{ Form::open(['id' => 'model_form', 'method' => 'post', 'url' => url('motos/save'), 'class' => 'form-horizontal']) }}
                    <div class="form-body">
                        
                        <input type="hidden" name="id" class="model_id" value="{{ $model->id }}">
                        
                        <div class="col-md-12">
                            <fieldset>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("modelo", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['modelo'] }}  <span class="request">*</span>:</label>
                                            {{ Form::text('modelo', $model->modelo, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("marca", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['marca'] }}  <span class="request">*</span>:</label>
                                            {{ Form::text('marca', $model->marca, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("ano", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['ano'] }}  <span class="request">*</span>:</label>
                                            {{ Form::number('ano', $model->ano, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => '', 'maxlength' => '4']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("estilo", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['estilo'] }}  :</label>
                                            {{ Form::text('estilo', $model->estilo, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("cilindrada", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['cilindrada'] }}  :</label>
                                            {{ Form::number('cilindrada', $model->cilindrada, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => '', 'maxlength' => '10']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("potencia", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['potencia'] }}  :</label>
                                            {{ Form::number('potencia', $model->potencia, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => '', 'maxlength' => '10']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("tanque", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['tanque'] }}  :</label>
                                            {{ Form::number('tanque', $model->tanque, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => '', 'maxlength' => '10']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("peso_seco", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['peso_seco'] }}  :</label>
                                            {{ Form::number('peso_seco', $model->peso_seco, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => '', 'maxlength' => '10']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("trasmissao", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['trasmissao'] }}  :</label>
                                            {{ Form::text('trasmissao', $model->trasmissao, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("tipo_motor", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['tipo_motor'] }}  :</label>
                                            {{ Form::text('tipo_motor', $model->tipo_motor, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("refrigeracao", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['refrigeracao'] }}  :</label>
                                            {{ Form::text('refrigeracao', $model->refrigeracao, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("categoria", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['categoria'] }}  :</label>
                                            {{ Form::text('categoria', $model->categoria, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '', 'maxlength' => '100']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body {{ $errors->first("anexo_id", "has-error") }}">
                                            <label class="control-label">{{ $model->labels['anexo_id'] }}  <span class="request">*</span>:</label>
                                            {{ Form::select('anexo_id', \App\Models\Anexos::getModel()->consultar()->pluck('nome_fantasia', 'id')->prepend('Selecione', '')->toArray(), $model->anexo_id, ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control select2']) }}
                                        </div>
                                    </div>
                                       
                            </fieldset>    
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::button('Salvar', ['type' => 'submit', 'class' => 'btn blue salvarForm']) }}
                            <a href="{{ url('motos/index') }}"><button type="button" class="btn btn-default">Cancelar</button></a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection

