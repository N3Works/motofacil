@if ($tipo_proposta)
<p><b>Proposta:</b> {{ $tipo_proposta }}</p>
@endif
<h3>Dados do solicitante:</h3>
<p><b>Nome:</b> {{ $nome }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Fone ou Celular:</b> {{ $telefone }}</p>
<p><b>Mensagem:</b> {{ $mensagem }}</p>

<h3>Detalhes da Moto</h3>
<p><b>Modelo:</b> {{ $motoDetalhe['modelo'] }} </p>
<p><b>Marca:</b> {{ $motoDetalhe['marca'] }} </p>
<p><b>Ano:</b> {{ $motoDetalhe['ano'] }} </p>
<p><b>Estilo:</b> {{ $motoDetalhe['estilo'] }} </p>
<p><b>Cilindrada:</b> {{ $motoDetalhe['cilindrada'] }} </p>
<p><b>Potência:</b> {{ $motoDetalhe['potencia'] }} - CV </p>
<p><b>Tanque:</b> {{ $motoDetalhe['tanque'] }} - L </p>
<p><b>Peso Seco:</b> {{ $motoDetalhe['peso_seco'] }} - Kg</p>
<p><b>Transmissão:</b> {{ $motoDetalhe['trasmissao'] }} </p>
<p><b>Tipo Motor:</b> {{ $motoDetalhe['tipo_motor'] }} </p>
<p><b>Refrigeração:</b> {{ $motoDetalhe['refrigeracao'] }} </p>
<p><b>Categoria:</b> {{ $motoDetalhe['categoria'] }} </p>
