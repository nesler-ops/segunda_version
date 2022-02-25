<?php
 
namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view ('vBienvenida');
    }
    public function curriculum()
    {
        return view ('vCurriculum');
    }
    public function registro()   
    {
        return view ('vRegistros');
    }
    public function insertarForm()
    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo =[
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "telefono" => $_POST['telefono'],
            "empresa" => $_POST['empresa'],
            "usuario" => $_POST['email'],
            "password" => $_POST['password']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->
        db->insertID();
 
        return view("vSuccess", $datoId);
    }

}