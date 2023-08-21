<h1>Nova Dúvida</h1>

<form action="{{route('suporte.store')}}" method="POST">    
    @csrf()
    <input type="text" placeholder="Assunto" name="ds_assunto">
    <br>
    <textarea name="ds_texto" cols="30" rows="5" placeholder="Informe uma desc."></textarea>
    <button type="submit">Enviar</button>
</form>    
