@extends('app')

@section('style')



@endsection

@section('content')

    @if($errors->any())
        <div class="" alert alert-danger>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="panel panel-info">
                <div class="card">
                    <div class="panel-heading">
                        <h3 class="text-center">Comparateur</h3>
                    </div>

                    <div class="panel-body container">
                        <form class="form" action="{{ route('validation') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="rawtext">Texte à traduire</label>
                                <textarea class="form-control @error('rawtext') is-invalid @enderror" name="rawtext"
                                          id="rawtext" rows="10"
                                          placeholder="Je saisis mon texte à traduire" required></textarea>

                                @error('rawtext')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <div class="">
                                        <label for="langue_source">Depuis (langue source)</label>

                                        <input name="langue_source" id="langue_source" type=text list=langue
                                               class="form-control @error('langue_source') is-invalid @enderror"
                                               placeholder="Je sélectionne une langue source" required>
                                        <datalist id=langue>

                                            @foreach ($langues as $langue)
                                                <option value="{{ $langue->langue }}">
                                            @endforeach
                                        </datalist>

                                        @error('langue_source')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group col">
                                    <div class="">
                                        <label for="langue_cible">Vers (langue cible)</label>
                                        <input name="langue_cible" id="langue_cible" type=text list=langue
                                               class="form-control @error('langue_cible') is-invalid @enderror"
                                               placeholder="Je sélectionne une langue cible" required>

                                        @error('langue_cible')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-2 ">
                                <label for="customRange2" class="form-label">Choisissez la qualité de traduction souhaitée en déplaçant le curseur : </label>
                                    <div class="container">
                                        <div class="d-flex flex-column flex-sm-row">
                                            <input type="range" class="col-9" min="1" max="4" name="qualité"
                                                   list="tickmarcks" id="rangeQualite"
                                                   oninput="displayValue(this.value)">
                                            <input type="text" id="sliderQualite" class="col-3"
                                                   value="Diffusion externe">
                                            <datalist id="tickmarcks">
                                                <option value="1" label="Sens général du texte"></option>
                                                <option value="2" label="Usage interne"></option>
                                                <option value="3" label="Diffusion externe"></option>
                                                <option value="4" label="Publication/image société"></option>
                                            </datalist>
                                        </div>
                                    </div>

                            <!--
                            <div class="form-group d-flex col flex-column m-3 align-items-start">
                                <div>
                                    <input type="radio" id="Sens général du texte" name="qualité" value="1">
                                    <label for="Sens général du texte">Sens général du texte</label>
                                </div>

                                <div>
                                    <input type="radio" id="Usage interne" name="qualité" value="2" checked>
                                    <label for="Usage interne">Usage interne</label>
                                </div>

                                <div>
                                    <input type="radio" id="Diffusion externe" name="qualité" value="3">
                                    <label for="Diffusion externe">Diffusion externe</label>
                                </div>

                                <div>
                                    <input type="radio" id="Publication/image société" name="qualité" value="4">
                                    <label for="Publication/image société">Publication/image société</label>
                                </div>-->

                                @error('qualité')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group m-2">
                                <h4>Options</h4>
                                <input type="checkbox" name="BAT" id="BAT">
                                <label for="BAT">J'ai besoin d'une vérification après mise en page*</label>
                            </div>

                            <div class="m-3">
                                <p>
                                    *Il s'agit de faire vérifier par un linguiste que le travail de mise en page n'a pas
                                    altéré le texte traduit et respecte bien les règles en vigueur dans le pays de
                                    destination. <br>
                                    Attention : ce service annexe est payant et fourni dans un second temps.
                                </p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Comparer les propositions</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function displayValue(val) {
            if (val === "1") {
                document.getElementById('sliderQualite').value = 'Sens général du texte';
            } else if (val === "2") {
                document.getElementById('sliderQualite').value = 'Usage interne';
            } else if (val === "3") {
                document.getElementById('sliderQualite').value = 'Diffusion externe';
            } else if (val === "4") {
                document.getElementById('sliderQualite').value = 'Publication/image société';
            }
        }
    </script>
@endsection
