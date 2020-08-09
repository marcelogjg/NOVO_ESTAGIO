<html>

<head>
    <style>
        table {
            border: 1px solid #dddddd;
            border-spacing: 0px;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            border: 1px solid #dddddd;
            padding: 10px;
        }

        td {
            border: 1px solid #dddddd;
            padding: 10px;
        }

        h1{
            text-align: center;
            font-size: 15pt;
        }

    </style>
</head>

<body>
<a href="/admin/client/form-cadastrar">CADASTRAR</a>

<h1>LISTA<h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <td>
                    {{$client->id}}
                </td>    <td>{{$client->name}}</td>
                        <td>  {{$client->email}}
                </td>
                <td><a href="{{ "/admin/client/{$client->id}/form-editar" }}">Editar</td>

                <td><a href="{{ "/admin/client/{$client->id}/delete" }}">Excluir</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>