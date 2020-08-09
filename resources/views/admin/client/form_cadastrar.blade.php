<html>

<body>
    <h1>CLIENTE CADASTRO</h1>
    <form method="post" action="/admin/client/cadastrado">
        <!-- <input type="hidden" name="_token" value="$crsfToken" -->
        {!! csrf_field() !!}
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <br><br><br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>