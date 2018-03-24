@if ($tipo_proposta)
<p><b>Proposta:</b> {{ $tipo_proposta }}</p>
@endif
<h2>Dados do solicitante:</h2>
<p><b>Nome:</b> {{ $nome }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Fone ou Celular:</b> {{ $telefone }}</p>
<p><b>Mensagem:</b> {{ $mensagem }}</p>
<br>
<hr>

@if (isset($motoDetalhe))
  <h2>Detalhes da Moto</h2>
  <p><b>Modelo:</b> {{ $motoDetalhe['modelo'] }} </p>
  <p><b>Marca:</b> {{ $motoDetalhe['marca'] }} </p>
  <p><b>Ano:</b> {{ $motoDetalhe['ano'] }} </p>

  @if (!empty($motoDetalhe['estilo']))
    <p><b>Estilo:</b> {{ $motoDetalhe['estilo'] }} </p>
  @endif


  @if (!empty($motoDetalhe['cilindrada']))
      <p><b>Cilindrada:</b> {{ $motoDetalhe['cilindrada'] }} </p>
  @endif

  @if (!empty($motoDetalhe['potencia']))
      <p><b>Potência:</b> {{ $motoDetalhe['potencia'] }} - CV </p>
  @endif

  @if (!empty($motoDetalhe['tanque']))
      <p><b>Tanque:</b> {{ $motoDetalhe['tanque'] }} - L </p>
  @endif

  @if (!empty($motoDetalhe['peso_seco']))
      <p><b>Peso Seco:</b> {{ $motoDetalhe['peso_seco'] }} - Kg</p>
  @endif

  @if (!empty($motoDetalhe['trasmissao']))
      <p><b>Transmissão:</b> {{ $motoDetalhe['trasmissao'] }} </p>
  @endif

  @if (!empty($motoDetalhe['tipo_motor']))
      <p><b>Tipo Motor:</b> {{ $motoDetalhe['tipo_motor'] }} </p>
  @endif
  @if (!empty($motoDetalhe['refrigeracao']))
      <p><b>Refrigeração:</b> {{ $motoDetalhe['refrigeracao'] }} </p>
  @endif

  @if (!empty($motoDetalhe['categoria']))
      <p><b>Categoria:</b> {{ $motoDetalhe['categoria'] }} </p>
  @endif

@else
<h3>Proposta sem moto selecionada</h3>
<br>
<p><b>Esta proposta foi enviada sem que o usuário selecionasse uma moto de interesse.</b> </p>
@endif
