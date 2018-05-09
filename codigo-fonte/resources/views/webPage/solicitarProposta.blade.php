@extends('layoutWebPage.main')
@section('conteudo')


<div class="absolute-container">
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Solicitar Proposta</h2>
                </div>
                
                <div class="col-md-12"> 
                    <div class="row container-branco form-text-open-sans">


                        <div class="col-lg-8 mx-auto">
                            
                            @include('layout.erros')
                            
                            <div class="portlet-body form text-center">
                                {{ Form::open(['id' => 'solicitar_proposta', 'method' => 'post', 'url' => url('enviar'), 'class' => 'form-horizontal']) }}
                                    
                                    <input type="hidden" value="{{ $proposta ? $proposta['valor'] : '' }}" name="proposta" />
                                    
                                    @if ($proposta)
                                    <p> Proposta: {{ $proposta['titulo'] }}</p>
                                    @endif
                                    
                                
                                    <div class="form-group {{ $errors->first("nome", "has-error") }}">
                                        <label class="control-label">Nome <span class="request">*</span></label>
                                        {{ Form::text('nome', '', ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => 'Seu nome aqui']) }}
                                    </div>

                                    <div class="form-group {{ $errors->first("email", "has-error") }}">
                                        <label class="control-label">E-mail</label>
                                        {{ Form::text('email', '', ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => 'Seu e-mail aqui']) }}
                                    </div>
                                        
                                    <div class="form-group {{ $errors->first("telefone", "has-error") }}">
                                        <label class="control-label">Fone ou Celular <span class="request">*</span></label>
                                        {{ Form::text('telefone', '', ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control', 'placeholder' => 'DDD + Fone']) }}
                                    </div>

                                    <div class="form-group {{ $errors->first("data_fim", "has-error") }}">
                                        <label class="control-label">Mensagem <span class="request">*</span></label>
                                        {{ Form::textArea('mensagem', '', ['data-required' => 1,'aria-required' => 'true' ,'class' => 'form-control  ', 'placeholder' => '']) }}
                                    </div>

                                </div>

                                <hr>
                            </div>
                                <div class="row text-center" style=" display: flex; align-items: center; justify-content: center;>
                                    <div class="col-md-10">
                                        {{ Form::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-success enviarSolicitacao']) }}
                                    </div>
                                </div>
                                <hr>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
