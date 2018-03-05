@if ($tipo_proposta)
<p><b>Proposta:</b> {{ $tipo_proposta }}</p>
@endif
<h3>Dados do solicitante:</h3>
<p><b>Nome:</b> {{ $nome }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Fone ou Celular:</b> {{ $telefone }}</p>
<p><b>Mensagem:</b> {{ $mensagem }}</p>