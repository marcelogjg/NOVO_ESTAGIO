<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{

    public function listar()
    {
        $clients = Client::all();
        return view('admin.client.list')
        -> with ('clients', $clients);
    }

    public function form_cadastrar(){
        return view('admin.client.form_cadastrar');
    }

    public function cadastro(Request $request){
        $client = new Client();
        $client->name = $request->nome;
        $client->email = $request->email; 
        $client-> save();

        return redirect()-> to ('/admin/client/listar');
    }

    public function form_editar($id) {
        $client = \App\Client::find($id);
        return view('admin.client.form-editar') -> with ('client', $client);
    }

    public function editar(Request $request, $id) {
        $client = Client::find($id);
        $client->name = $request->nome;
        $client->email = $request->email; 
        $client->save();

        return redirect()-> to ('/admin/client/listar');
    }

    public function delete ($id){

        $client = Client::find($id);
        $client-> delete();

        return redirect()-> to ('/admin/client/listar');
    }

    /*
    public function a(){
    //crsf-token//
    $crsfToken = csrf_token();

    $html = <<<HTML
<html>
        <body>
         <h1>CLIENTE</h1>
            <form method="post" action="/cliente/cadastro">
            <input type="hidden" name="_token" value="$crsfToken">
            <input type="text" name="name">
            <button type="submit"> Enviar</button>
            </form>
        </body>
</html>
HTML;
    return $html;
    }     */
}
