<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Simulation as Simulation;
use App\Models\Recommandation as Recommandation;
use App\Models\Service as Service;
use App\Models\contact as Contact;
use App\Mail\NewUser as NewUser;

class ResultatController extends Controller
{
    public function custom(Request $request)
    {
        $simulation = Simulation::where('idsimulation', $request->last_id)->get();

        $idqualite = $simulation[0]->qualite;
        $services = Recommandation::where('idqualite', $idqualite)->get();
        $service = array();

        foreach ($services as $val) {
            array_push($service,
                DB::table('services')->where('idservice', $val->idservice)->get());
        }

        $size = sizeof($service);

        return view('pages/resultat',
            ['simulation' => $simulation, 'service' => $service, 'size' => $size]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idsimulation' => 'bail|required',
            'idservice' => 'bail|required'
        ]);

        $simulation = $validatedData["idsimulation"];
        $service = $validatedData["idservice"];

        $serv = Service::where('idservice', $service)->get();

        $simu = Simulation::where('idsimulation', $simulation)->first();
        $nbmots = $simu->nbmots;

        $simu->idservice = $validatedData["idservice"];
        $simu->coutmin = $serv[0]->coutmin * $nbmots;
        $simu->coutmax = $serv[0]->coutmax * $nbmots;
        $simu->delaimin = ceil($serv[0]->delaimin / 2000 * $nbmots / 7);
        $simu->delaimax = ceil($serv[0]->delaimax / 2000 * $nbmots / 7);

        $simu->save();

        /* return view('pages/confirmation',
         ['simulation' => $simulation, 'service' => $service]);*/

        return view('pages/inscription', ['simulation' => $simulation]);
    }

    public function addContact(Request $request)
    {
        $validatedData = $request->validate([
            'contact_email' => 'bail|required|email',
        ]);

        $contact = Contact::create(
            [
                'nom' =>$request->input('contact_nom'),
                'prenom'=>$request->input('contact_prenom'),
                'mail' => $validatedData['contact_email'],
                'telephone'=>$request->input('contact_telephone')
            ]);


        Simulation::where('idsimulation', $request->input('simulation_id'))->update(array('contact' => $contact->idcontact));

        $simulation = Simulation::find($request->input('simulation_id'));

        Mail::to('aurelien.marron@le-campus-numerique.fr')
            ->send(new NewUser($contact, $simulation));

        return view('pages/confirmation');
    }
}
