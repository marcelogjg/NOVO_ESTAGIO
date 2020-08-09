
<!-- <?php
    $crsfToken = csrf_token();
?> -->

<html>
        <body>
         <h1>CLIENTE</h1>
            <form method="post" action="/cliente/cadastro">
            <input type="hidden" name="_token" value="$crsfToken"> 
             <label for="name">Nome:</label>
             <input type="text" name="name" id="name"></input>
            <button type="submit"> Enviar</button>
            </form>
        </body>
</html>




