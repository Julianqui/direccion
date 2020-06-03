<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Correo de direccion";
        $for = "julian1986.producciones@gmail.com";
        Mail::send('email',$request->all(), function($mensaje) use($subject,$for){
            $mensaje->from("julian1986.producciones@gmail.com","Mensaje papa");
            $mensaje->subject($subject);
            $mensaje->to($for);
        });

        $subject = "Correo de direccion";
        $for2 = "julianquin8@gmail.com";
        Mail::send('email',$request->all(), function($mensaje) use($subject, $for2){
            $mensaje->from("julian1986.producciones@gmail.com","Mensaje papa");
            $mensaje->subject($subject);
            $mensaje->to($for2);
        });


        $subject2 = "Consulta";
        $for3 = $email = $request->input('mail');
        Mail::send('email',$request->all(), function($mensaje2) use($subject2,$for3){
            $mensaje2->from("julian1986.producciones@gmail.com","Mensaje de Larafotos");
            $mensaje2->subject($subject2);
            $mensaje2->to($for3);
        });


        return redirect()->back()->with([
            'message' => 'El mensaje ha sido enviado'
        ]);
    }
}

