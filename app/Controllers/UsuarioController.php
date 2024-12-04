<?php

namespace App\Controllers;

use App\models\UsuarioModel;
class UsuarioController extends BaseController{

    protected $usuarioModel;

    function __construct(){

        $this->usuarioModel = new usuarioModel();

    }

    //lista de usuarios VIEW
    public function index(){
        //crear, buscar, seleccionar, editar, eliminar usuarios
       

       $usuarios =  $this->usuarioModel->findAll();
       
            $data = array(
                "usuarios" => $usuarios
            );

      return view ("usuarios/index",$data);
    }
    //informacion de usurario
    public function show($id){
        
       
        $usuario = $this->usuarioModel->find($id);
       

        $data = array("usuario" => $usuario);

        return view("usuarios/show", $data);
    }
    //formulario para crear usuario
    public function create(){
       


       return view("usuarios/create"); 
    }
    //codigo para guardar usuario en la db (redirect -> index) -> usuario creado 
    public function store(){
   
        $data = array(

            "nombre" => $this->request ->getPost("nombre"),
            "telefono" => $this->request ->getPost("telefono"),
            "correo" => $this->request ->getPost("correo"),
            "password" => $this->request ->getPost("password")

        );

        $this->usuarioModel->save($data);

        return redirect()->to("/usuarios");


    }
    //formulario para editar usuario
    public function edit($id){
        
        $usuario = $this->usuarioModel->find($id);
        
        $data = array(
            "usuario" =>$usuario
        );

        return view("usuarios/edit", $data);

         }
    //codigo para actualizar usuario
    public function update($id){
       

        $data = array(

            "nombre" => $this->request ->getPost("nombre"),
            "telefono" => $this->request ->getPost("telefono"),
            "correo" => $this->request ->getPost("correo"),
            "password" => $this->request ->getPost("password")

        );

        $this->usuarioModel->update($id,$data);

        return redirect()->to("/usuarios/$id");

    }

    //codigo para eliminar un usuario de la db (redirect -> index)
    public function delete($id){
        
        $this->usuarioModel->delete($id);
        return redirect()->to("/usuarios");

    }


    public function login(){



        return view("usuarios/login");
    }



    public function validarLogin(){

       $correo = $this->request->getPOST("correo");
       $password = $this->request->getPOST("password");

       $usuario = $this->usuarioModel->where("correo",$correo)->where("password",$password)->first();

       if(!$usuario){
        return redirect()->to(base_url()."/login");

       }
       else{
        session()->set($usuario);


        return redirect()->to(base_url()."/usuarios");
       }

    }



    public function logout(){}




     }