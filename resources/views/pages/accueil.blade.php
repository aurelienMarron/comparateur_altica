@extends('app')

@section('content')
    <div class="container">
        <div class="text-center" id="logo">
            <img src="img/altica.png" alt="">
        </div>
    <div class="text-center" id="textePresentation">
        <p>texte de présentation</p>
    </div>
    <div class="text-center" id="lienComparateur">
        <a href="{{route('comparateur')}}" id="lien"><i class="bi bi-calculator">Je teste le formulaire de création d'un devis</i></a>
    </div>
    </div>
@endsection
