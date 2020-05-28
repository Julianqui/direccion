<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Asunto del correo";
        $for = "julianquin8@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("julian1986.producciones@gmail.com","Mensaje papa");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}

producto
organismo
nombre
mail
mensaje
