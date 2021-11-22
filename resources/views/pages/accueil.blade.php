@extends('app')

@section('content')
    <div class="container">
        <div class="text-center" id="logo">
            <img src="https://images.freeimages.com/images/large-previews/542/balance-1172786.jpg" alt="" height="200">
        </div>
        <div class="text-center" id="lienComparateur">
            <a href="{{route('comparateur')}}">
                <button type="button" id="lien">Je teste le comparateur!
                </button>
            </a>
        </div>
        <div class="text-center" id="textePresentation">
            <p>Vous êtes-vous déjà demandé si les traductions étaient de la même qualité partout
                ou <strong>pourquoi les prix variaient autant?</strong>
                <br><br>
                Ce comparateur vous permet de comprendre <strong>quel est le lien entre niveau de qualité et le
                    prix!</strong>
                <br><br>
                <strong>Testez-le gratuitement</strong> pour connaitre instantanément le <strong>budget requis</strong> pour une <strong>traduction selon vos
                    critères!</strong> </p>
        </div>
    </div>
@endsection
