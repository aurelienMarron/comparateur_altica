@extends('app')

@section('style')

    

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="card">
                <div class="panel-heading">
                    <h3>Comparateur</h3>
                </div>

                <div class="panel-body container">
                    <form class="form" action="{{ route('validation') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="rawtext">Texte à traduire</label>
                            <textarea class="form-control @error('rawtext') is-invalid @enderror" name="rawtext" id="rawtext" rows="10"
                            placeholder="Veuillez entrer votre texte à traduire" required></textarea>
                        
                            @error('rawtext')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <div class="">
                                    <label for="langue_source">Depuis (langue source)</label>

                                    <input name="langue_source" id="langue_source" type=text list=langue class="form-control @error('langue_source') is-invalid @enderror" placeholder="Selectionné une langue source" required >
                                    <datalist id=langue >
                                        
                                        @foreach ($langues as $langue)
                                            <option value="{{ $langue->idlang }} - {{ $langue->langue }} - {{ $langue->codelang }}" > {{ $langue->langue }} - {{ $langue->codelang }} 
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
                                    <input name="langue_cible" id="langue_cible" type=text list=langue class="form-control @error('langue_cible') is-invalid @enderror" placeholder="Selectionné une langue cible" required >

                                    @error('langue_cible')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!--

                        <div class="form-group">
                            <label for="qualité">Qualité de traduction souhaitée</label>
                            <input name="qualité" type="range" min="1" max="4" step="1" value="2" list="qualite" id="qualité" class="form-control @error('qualité') is-invalid @enderror" required>
                            <datalist>
                                <option value="1" label="Sens général du texte">Sens général du texte</option>
                                <option value="2" label="Usage interne">Usage interne</option>
                                <option value="3" label="Diffusion externe">Diffusion externe</option>
                                <option value="4" label="Publication/image société">Publication/image société</option>
                            </datalist>

                            @error('qualité')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        -->

                        <div class="form-group m-2 ">
                            <p>Qualité de traduction souhaitée : </p>
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
                                </div>

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
                                *Il s'agit de faire vérifier par un linguiste que le travail de mise en page n'a pas altéré le texte traduit et respecte bien les règles en vigueur dans le pays de destination. <br>
                                Attention : ce service annexe est payant et fourni dans un second temps.
                            </p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary">Comparer les propositions</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection