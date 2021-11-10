@extends('app')

@section('content')

<?php
    /*var_dump($simulation);
    var_dump($service);*/
?>

<div class="">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-center">

            <?php
                if ($size <= 1) {
                    echo '<p class="text-center">'.
                        "Merci pour les informations fournies. <br>
                        Nous avons trouvé 1 option correspondant à votre demande. <br>
                        N'hésitez pas à nous contacter pour en savoir plus. <br>
                    </p>";
                } else {
                    echo '<p class="text-center">
                        Merci pour les informations fournies. <br>
                        Nous avons trouvé '.$size.' options correspondant à votre demande. <br>
                        Nous vous en recommandons une. <br>
                        Vous pouvez cependant choisir de prioriser votre budget ou bien la qualité. <br>
                    </p>';
                }
            ?>
        </div>

        <ul class="list-group d-flex flex-row justify-content-center align-items-stretch">
            @foreach ($service as $serv)
                <form class="form" action="{{ route('validationResultat') }}" method="POST">
                    @csrf

                    <input type="hidden" name="idsimulation" value="{{ $simulation[0]->idsimulation }}">
                    <div class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 bg-white flex-fill">
                        <h3 class="mb-2 mt-2">{{ $serv[0]->nomservice }} : </h3>
                        <br>
                        <p>{{ $serv[0]->detail }}</p>
                        <br>
                        <div class="block d-flex justify-content-center">
                            <div class="rounded-pill bg-primary m-3 p-5">
                                <h4 class="font-weight-bolder text-white text-center">Tarif estimé :</h4>
                                <h4 class="font-weight-bolder text-white text-center">entre {{ $serv[0]->coutmin * $simulation[0]->nbmots }} et {{ $serv[0]->coutmax * $simulation[0]->nbmots }}€ HT</h4>
                            </div>
                        </div>
                        <br>
                        <span class="small text-dark">Délai estimé de livraison :</span>
                            <?php
                                $delaimin = ceil($serv[0]->delaimin/2000 * $simulation[0]->nbmots/7);
                                $delaimax = ceil($serv[0]->delaimax/2000 * $simulation[0]->nbmots/7);

                                if ($delaimin == $delaimax) {
                                    if ($delaimax == 1) {
                                        echo '<h5 class="font-weight-bolder text-dark">sous '.$delaimax.' jour</h5>';
                                    } else {
                                        echo '<h5 class="font-weight-bolder text-dark">sous '.$delaimax.' jours</h5>';
                                    }
                                } else {
                                    echo '<h5 class="font-weight-bolder text-dark">sous '.$delaimin.' à '.$delaimax.' jours</h5>';
                                }
                            ?>
                        <hr class="divider my-2 w-50 mx-auto">
                        <span class="small text-dark">Qualité attendue en % (note sur 5) :</span>
                        <h5 class="font-weight-bolder text-dark mb-4">{{ $serv[0]->degrequalite }}% ({{ $serv[0]->degrequalite*5/100 }}/5)</h5>
                        <button class="btn bg-warning border border-0 pl-4 pr-4 m-2 rounded-0">Choisir cette option</button>
                        <input type="hidden" name="idservice" value="{{ $serv[0]->idservice }}">
                    </div>
                </form>
            @endforeach

           <!-- <button class="list-group-item btn border border-0 active rounded-0 m-1 justify-content-center shadow p-4 mb-4 flex-fill">
                <p>Résultat 2</p>
            </button>-->

        </ul>

        <p class="d-flex justify-content-center text-secondary">
            N.B. : à titre indicatif, un traducteur traduit en moyenne 2 000 mots par jours <br>
            * relecture par un second linguiste, il est en effet difficile de détecter ses propres erreurs <br>
        </p>

    </div>
</div>

@endsection
