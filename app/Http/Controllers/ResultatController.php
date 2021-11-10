<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Simulation as Simulation;
use App\Models\Recommandation as Recommandation;
use App\Models\Service as Service;

class ResultatController extends Controller
{
    public function custom(Request $request)
    {
        $simulation = Simulation::where('idsimulation',$request->last_id)->get();

        $idqualite = $simulation[0]->qualite;
        $services = Recommandation::where('idqualite',$idqualite)->get();
        //$services = DB::table('recommandations')->where('idqualite',$idqualite)->value('idservice');
        $service = array();

        foreach ($services as $val) {
            array_push($service,
                DB::table('services')->where('idservice',$val->idservice)->get());
        }

        $size = sizeof($service);

        return view('pages/resultat',
        ['simulation' => $simulation,'service' => $service,'size' => $size]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idsimulation' => 'bail|required',
            'idservice' => 'bail|required'
        ]);

        $simulation = $validatedData["idsimulation"];
        $service = $validatedData["idservice"];

        $serv = Service::where('idservice',$service)->get();

        $simu = Simulation::where('idsimulation',$simulation)->first();
        $nbmots = $simu->nbmots;

        $simu->idservice = $validatedData["idservice"];
        $simu->coutmin = $serv[0]->coutmin*$nbmots;
        $simu->coutmax = $serv[0]->coutmax*$nbmots;
        $simu->delaimin = ceil($serv[0]->delaimin/2000 *$nbmots/7);
        $simu->delaimax = ceil($serv[0]->delaimax/2000 *$nbmots/7);

        $simu->save();

       /* return view('pages/confirmation',
        ['simulation' => $simulation, 'service' => $service]);*/

        return view('pages/inscription');
    }
}
