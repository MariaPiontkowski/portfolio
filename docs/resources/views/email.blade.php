<p>Você recebeu um novo contato:</p>
<br/>
<p><b>Nome</b> {{$nome}}</p>
<p><b>E-mail</b> {{$email}}</p>
@if($telefone)<p><b>Telefone</b> {{$telefone}}</p>@endif
@if($assunto)<p><b>Assunto</b> {{$assunto}}</p>@endif
<p><b>Mensagem</b></p>
<p>{!! str_replace("\n", '<br/>',  $mensagem) !!}</p>
