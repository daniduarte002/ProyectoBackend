<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contact;

class ContactController extends Controller

{
    public function read(Request $request){

        $Usuario = new Contact();

         if ($request->query("id"))
        {
              $UsuarioC =$Usuario->find($request->query("id"));
        }else $UsuarioC=$Usuario->all();        

        return  response()->json($UsuarioC);
    }

    public function create(Request $request){

        $Usuario = new Contact();

        $Usuario->Nombres = $request->input("Nombres");
        $Usuario->Apellidos = $request->input("Apellidos");
        $Usuario->Tipo_Identificacion = $request->input("Tipo_Identificacion");
        $Usuario->Numero_Identificacion = $request->input("Numero_Identificacion");
        $Usuario->Telefono = $request->input("Telefono");
        $Usuario->Email = $request->input("Email");
        $Usuario->Profesion = $request->input("Profesion");
        $Usuario->Rol = $request->input("Rol");

        $Usuario->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }


    
    public function update(Request $request){

        $idUser = $request->query("id");

        $Usuario = new Contact();

        $UsuarioC =$Usuario->find($idUser);

        $UsuarioC->Nombres = $request->input("Nombres");
        $UsuarioC->Apellidos = $request->input("Apellidos");
        $UsuarioC->Tipo_Identificacion = $request->input("Tipo_Identificacion");
        $UsuarioC->Numero_Identificacion = $request->input("Numero_Identificacion");
        $UsuarioC->Telefono = $request->input("Telefono");
        $UsuarioC->Email = $request->input("Email");
        $UsuarioC->Profesion = $request->input("Profesion");
        $UsuarioC->Rol = $request->input("Rol");

        $UsuarioC->save();

        $message = [
            "status" => "success",
            "message" => "¡Actualización Exitosa!",
            "id" => $UsuarioC->id,
            "name" => $UsuarioC->Nombres . " " . $Usuario->Apellidos
        ];
    
        return $message;
    }
        

    public function delete(Request $request){

        $idUser = $request->query("id");

        $Usuario = new Contact();

        $UsuarioC =$Usuario->find($idUser);
        $UsuarioC->delete();

        $message=["message" => "Eiminacion Exitosa!!"];
        return response()->json($message,Response::HTTP_OK);
    }
}