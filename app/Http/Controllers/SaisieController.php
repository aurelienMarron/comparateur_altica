<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Langue as Langue;
use App\Models\Simulation as Simulation;

class SaisieController extends Controller
{
    public function create()
    {
        $langues = Langue::all();
        return view('pages/comparateur', compact('langues'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'rawtext' => 'bail|required',
            'langue_source' => 'bail|required',
            'langue_cible' => 'bail|required',
            'qualité' => 'bail|required|min:0|max:4',
        ]);

        $lang_source=Langue::where('langue',$validatedData["langue_source"])->value('idlang');
        //$lang_source = explode(" - ",$validatedData["langue_source"])[0];
        //$lang_cible = explode(" - ",$validatedData["langue_cible"])[0];
        $lang_cible=Langue::where('langue',$validatedData["langue_cible"])->value('idlang');

        if (isset($request['BAT'])) {
            $bat = 1;
        } else {
            $bat = 0;
        }

        $request = array(
            'nbmots' => str_word_count($validatedData["rawtext"]),
            'qualite' => $validatedData["qualité"],
            'bat' => $bat,
            'langue_source' => $lang_source,
            'langue_cible' => $lang_cible,
            'chemin' => 'Rien'
        );

        //Store data in database
        $req = Simulation::create($request);
        $last_id = $req['idsimulation'];

        SaisieController::put($last_id,$validatedData["rawtext"]);

        $simu = Simulation::where('idsimulation',$last_id)->first();
        $simu->chemin = $last_id.'.txt';
        $simu->save();

        //Redirection
        return redirect()->action(
            [ResultatController::class,'custom'], ['last_id' => $last_id]
        );
    }

    public function put($file_name,$content)
    {
        try {
            Storage::disk('local')->put($file_name.'.txt', $content);
        } catch (\Exception $e) {
            dd($e);
        }
    }

}
