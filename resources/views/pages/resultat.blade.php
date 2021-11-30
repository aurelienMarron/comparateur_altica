@extends('app')

@section('content')

    <?php
    //var_dump($simulation);
    //var_dump($service);
    $arrayQualite = [];
    $arrayPrixMax = [];
    $arrayPrixMin = [];
    foreach ($service as $serv) {
        array_push($arrayQualite, $serv[0]->degrequalite);
        array_push($arrayPrixMax, strval($serv[0]->coutmax));
        array_push($arrayPrixMin, $serv[0]->coutmin);
    }
    $qualiteMax = max($arrayQualite);
    $prixMax = max($arrayPrixMax);
    $prixMin = strval(min($arrayPrixMax));
    $prixMinMin = min($arrayPrixMin);
    $counts = array_count_values($arrayQualite);
    $countsPrixMin = array_count_values($arrayPrixMax);
    $nombredefoisqualiteMax = $counts[$qualiteMax];
    $nombredefoisPrixMin = $countsPrixMin[$prixMin];

    ?>

    <div class="">
        <div class="container-fluid">
            <div class="d-flex flex-row justify-content-center">

                <?php
                if ($size <= 1) {
                    echo '<p class="text-center">' .
                        "Merci pour les informations fournies. <br>
                        Nous avons trouvé 1 option correspondant à votre demande. <br>
                        N'hésitez pas à nous contacter pour en savoir plus. <br>
                    </p>";
                } else {
                    echo '<p class="text-center">
                        Merci pour les informations fournies. <br>
                        Nous avons trouvé ' . $size . ' options correspondant à votre demande. <br>
                        Nous vous recommandons celle qui représente le meilleur rapport qualité/prix.<br>
                        Vous pouvez cependant choisir de prioriser plus votre budget ou bien plus la qualité. <br>
                    </p>';
                }
                ?>
            </div>

            <ul class="list-group d-flex flex-md-row justify-content-center align-items-stretch">
                @foreach ($service as $serv)
                    <form class="form" action="{{ route('validationResultat') }}" method="POST">
                        @csrf

                        <input type="hidden" name="idsimulation" value="{{ $simulation[0]->idsimulation }}">
                        <?php
                        if ($simulation[0]->qualite === 3 || $simulation[0]->qualite === 4) {
                            if ($nombredefoisqualiteMax == 1) {
                                if ($serv[0]->degrequalite === $qualiteMax) {
                                    echo '<div id="bestChoice"
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 flex-fill ">
                                <h5 id="conseil">Nous vous recommandons cette solution !</h5>';
                                } else {
                                    echo '<div
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 bg-white flex-fill">';
                                }
                            } elseif ($nombredefoisqualiteMax > 1) {
                                if ($serv[0]->degrequalite === $qualiteMax && $serv[0]->coutmax != $prixMax) {
                                    echo '<div id="bestChoice"
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 flex-fill ">
                                <h5 id="conseil">Notre recommandation !</h5>';
                                } else {
                                    echo '<div
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 bg-white flex-fill">';
                                }
                            }
                        } elseif ($simulation[0]->qualite === 1 || $simulation[0]->qualite === 2) {
                            if ($nombredefoisPrixMin == 1) {
                                if ($serv[0]->coutmax == $prixMin) {
                                    echo '<div id="bestChoice"
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 flex-fill ">
                                <h5 id="conseil">Notre recommandation !</h5>';
                                } else {
                                    echo '<div
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 bg-white flex-fill">';
                                }
                            } else {
                                if ($serv[0]->coutmax == $prixMin && $serv[0]->coutmin == $prixMinMin) {
                                    echo '<div id="bestChoice"
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 flex-fill ">
                                <h5 id="conseil">Notre recommandation !</h5>';
                                } else {
                                    echo '<div
                            class="d-flex justify-content-center flex-column list-group-item align-items-center border border-0 rounded-0 m-1 justify-content-center shadow p-4 mb-4 bg-white flex-fill">';
                                }
                            }
                        }
                        ?>
                        <div class="rounded-pill bg-primary m-3 p-5">
                            <h3 class="mb-2 mt-2 font-weight-bolder text-white text-center"">{{ $serv[0]->nomservice }}
                            : </h3>
                            <br>
                            <p class="font-weight-bolder text-white text-center"">{{ $serv[0]->detail }}</p>
                        </div>
                        <br>
                        <span class="small ">Tarif estimé :</span>
                        <h5 class="font-weight-bolder ">
                            <!--entre {{ $serv[0]->coutmin * $simulation[0]->nbmots }}
                            et {{ $serv[0]->coutmax * $simulation[0]->nbmots }}€ HT par mot</h5>-->
                                entre {{ $serv[0]->coutmin  }}
                                et {{ $serv[0]->coutmax  }}€ HT par mot</h5>
                        <br>
                        <span class="small ">Délai estimé de livraison :</span>
                        <?php
                        $delaimin = ceil($serv[0]->delaimin / 2000 * $simulation[0]->nbmots / 7);
                        $delaimax = ceil($serv[0]->delaimax / 2000 * $simulation[0]->nbmots / 7);

                        if ($delaimin == $delaimax) {
                            if ($delaimax == 1) {
                                echo '<h5 class="font-weight-bolder ">sous ' . $delaimax . ' jour</h5>';
                            } else {
                                echo '<h5 class="font-weight-bolder ">sous ' . $delaimax . ' jours</h5>';
                            }
                        } else {
                            echo '<h5 class="font-weight-bolder ">sous ' . $delaimin . ' à ' . $delaimax . ' jours</h5>';
                        }
                        ?>
                        <hr class="divider my-2 w-50 mx-auto">
                        <span class="small ">Qualité attendue en % (note sur 5) :</span>
                        <h5 class="font-weight-bolder mb-4">{{ $serv[0]->degrequalite }}%
                            ({{ $serv[0]->degrequalite*5/100 }}/5)</h5>
                        <button class="btn bg-warning border border-0 pl-4 pr-4 m-2 rounded-0">Choisir cette
                            option
                        </button>
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
