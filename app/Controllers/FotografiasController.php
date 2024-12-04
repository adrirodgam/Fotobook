<?php

namespace App\Controllers;

use App\models\FotografiaModel;
class FotografiaController extends BaseController{

    protected $fotografiaModel;

    function __construct(){

        $this->fotografiaModel = new fotografiaModel();

    }

    //lista de usuarios VIEW
    public function index(){
        //crear, buscar, seleccionar, editar, eliminar usuarios
       

       $fotografia =  $this->fotografiaModel->findAll();
       
            $data = array(
                "fotografia" => $fotografia
            );

      return view ("fotografias/index",$data);
    }
    //informacion de usurario
    public function show($id){
        
       
        $fotografia = $this->fotografiaModel->find($id);
       

        $data = array("fotografia" => $fotografia);

        return view("fotografia/show", $data);
    }
    //formulario para crear usuario
    public function create(){
       


       return view("fotografia/create"); 
    }
    //codigo para guardar usuario en la db (redirect -> index) -> usuario creado 
    public function store(){
   
        $data = array(

            "evento_id" => $this->request ->getPost("evento_id"),
            "url" => $this->request ->getPost("url"),
            "seleccionada" => $this->request ->getPost("seleccionada")
           

        );

        $this->fotografiaModel->save($data);

        return redirect()->to("/fotografia");


    }
    //formulario para editar usuario
    public function edit($id){
        
        $fotografia = $this->fotografiaModel->find($id);
        
        $data = array(
            "fotografia" =>$fotografia
        );

        return view("fotografias/edit", $data);

         }
    //codigo para actualizar usuario
    public function update($id){
       

        $data = array(

           "evento_id" => $this->request ->getPost("evento_id"),
            "url" => $this->request ->getPost("url"),
            "seleccionada" => $this->request ->getPost("seleccionada")

        );

        $this->fotografiaModel->update($id,$data);

        return redirect()->to("/fotografia/$id");

    }

    //codigo para eliminar un usuario de la db (redirect -> index)
    public function delete($id){
        
        $this->fotografiaModel->delete($id);
        return redirect()->to("/fotografias");

    }

 }

    