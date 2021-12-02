<?php

use App\Models\Langue as Langue;
use App\Models\qualiteclient as Qualite;
use App\Models\service as Service;

$qualite=Qualite::find($simulation->qualite);
$service=Service::find($simulation->idservice);
$langue_source = Langue::find($simulation->langue_source);
$langue_cible= Langue::find($simulation->langue_cible);
?>

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Un utilisateur a fait une simulation sur le comparateur</title>

</head>
<body>
<h2>Un utilisateur a demandé un devis via le comparateur</h2>
<ul>
    <li><strong>Nom</strong> : {{$contact->nom}}</li>
    <li><strong>Prénom</strong> : {{$contact->prenom}}</li>
    <li><strong>Mail</strong> : {{$contact->mail}}</li>
    <li><strong>Téléphone</strong> : {{$contact->telephone}}</li>
</ul>
<h3>Info sur son devis</h3>
<ul>
    <li><strong>Identifiant de la simulation</strong> : {{$simulation->idsimulation}}</li>
    <li><strong>Nombre de mots à traduire</strong> : {{$simulation->nbmots}}</li>
    <li><strong>Qualité de traduction demandée au depart</strong> : {{$qualite->besoinclient}}</li>
    <li><strong>Relecture demandée au depart</strong> ? @if($simulation->bat===1) Oui
    @else Non</li>@endif
    <li><strong>Langue source</strong> : {{$langue_source->langue}}</li>
    <li><strong>Langue cible</strong> : {{$langue_cible->langue}}</li>
    <li><strong>Service choisi après proposition des solutions</strong> : {{$service->nomservice}} = {{$service->detail}}</li>
</ul>
</body>
</html>
