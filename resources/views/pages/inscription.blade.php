@extends('app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="text-center" id="explication_inscritpion">
                <h5>Pour que votre demande soit effectivement traitée merci de renseigner ces quelques champs.
                    Merci de votre compréhension.</h5>
            </div>
            <div class="panel-body container" id="formulaireInscription">
                <form class="form" action="{{ route('inscriptionContact') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label for="contact_prenom">Prénom</label>
                            <input type="text" class="form-control" name="contact_prenom" id="contact_prenom">
                        </div>
                        <div class="form-group col">
                            <label for="contact_nom">Nom</label>
                            <input type="text" class="form-control" name="contact_nom" id="contact_nom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="contact_telephone" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" name="contact_telephone" id="contact_telephone">
                        </div>
                        <div class="form-group col">
                            <label for="contact_email" class="form-label required">Adresse email</label>
                            <input type="email" class="form-control" name="contact_email" id="contact_email" aria-describedby="emailHelp"
                                   required>
                        </div>
                    </div>
                    <input type="hidden" name="simulation_id" value="{{$simulation}}">
                    <button type="submit" class="btn btn-warning" id="buttonInscription">Envoyer</button>
                </form>
            </div>
        </div>
    </div>




@endsection
