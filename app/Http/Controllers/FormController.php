<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeProgram;
use App\Models\Platforma;
use App\Models\frequency;
use App\Models\User;
use App\Models\Answers;
use App\Http\Requests\MensajeFormRequest;

class FormController extends Controller
{
    public function index() {
        $type_programan = typeProgram::all();
        $platforms = Platforma::all();
        $frequencys = frequency::all();
        return view('formulario.formIndex',compact('type_programan','platforms','frequencys'));
    }

    public function save(MensajeFormRequest $request) {
   
        $data_user = new User;
        $data_user->name = $request->name;
        $data_user->email = $request->email;
        $data_user->edad = $request->edad;
        $data_user->save();

        $answers = new Answers;
        $answers->frecuencia_program = $request->frequency;
        $answers->streaming_favorito = $request->program;
        $answers->television_favorito = $request->tipo_programa;
        $answers->pelicula = $request->movie_favorite;
        $answers->elenco = $request->program_favorite;
        $answers->save();


       // return back()->with('success', 'Se ha enviado correctamente, gracias');
        return redirect('/formulario')->with('success', 'Se ha enviado correctamente, gracias');
    }
}
