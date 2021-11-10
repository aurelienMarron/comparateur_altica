@extends('app')

@section('content')
    <div class="container">
        <div class="text-center" id="logo">
            <img src="img/altica.png">
        </div>
    <div class="text-center" id="textePresentation">
        <p>texte de présentation</p>
    </div>
    <div class="text-center" id="lienComparateur">
        <a href="{{route('comparateur')}}">Accéder au formulaire de création d'un devis</a>
    </div>
    </div>
@endsection
