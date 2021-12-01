@extends('app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel-body container">
        <div class="row">
            <div class="text-center" id="explication_inscritpion">
                <h5>Pour que votre demande soit effectivement traitée merci de renseigner ces quelques champs. <br>
                    Merci de votre compréhension.</h5>
            </div>
            <div class="panel-body container" id="formulaireInscription">
                <form class="form" action="{{ route('inscriptionContact') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label for="contact_prenom">Prénom</label>
                            <input type="text" class="form-control @error('contact_prenom') is-invalid @enderror"
                                   name="contact_prenom" id="contact_prenom" value="{{ old('contact_prenom') }}">
                        </div>
                        <div class="form-group col">
                            <label for="contact_nom">Nom</label>
                            <input type="text" class="form-control @error('contact_nom') is-invalid @enderror"
                                   name="contact_nom" id="contact_nom" value="{{ old('contact_nom') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="contact_telephone" class="form-label ">Téléphone</label>
                            <input type="text" class="form-control @error('contact_telephone') is-invalid @enderror"
                                   name="contact_telephone" id="contact_telephone" value="{{ old('contact_telephone') }}">
                        </div>
                        <div class="form-group col">
                            <label for="contact_email" class="form-label required ">Adresse email</label>
                            <input type="email" class="form-control @error('contact_email') is-invalid @enderror"
                                   name="contact_email" id="contact_email" value="{{ old('contact_email') }}"
                                   aria-describedby="emailHelp"
                                   required>
                        </div>
                    </div>
                    <input type="hidden" name="simulation_id" value="{{$simulation}}">
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" id="buttonInscription">Envoyer</button>
                    </div>
                </form>
                <p class="d-flex text-secondary">
                    <span style="color:red">*</span> Champs obligatoire
                </p>
            </div>
        </div>
    </div>




@endsection
