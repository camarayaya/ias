@extends('layouts.app')


@section('content')
 <!-- Form Start -->
 <br><br><br><br>
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-3"></div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4"> 
                <div class="row">
                    <div class="col-md-6"><h6 class="mb-4" >INFORMATION CONDUCTEUR</h6></div>
                    <div class="col-md-6 text-end " ><a href="{{route('conducteurs.index')}}" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-home"></i></a> </div>
                </div>
                <form action="{{route('conducteurs.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom"  aria-describedby="nom"  name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenoms">
                    </div> 
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Contact personel</label>
                        <input type="text" class="form-control" id="contact_perso" name="contact_perso">
                    </div> 
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Nom parent</label>
                        <input type="text" class="form-control" id="nom_parent" name="nom_parent">
                    </div> 
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Contact parent</label>
                        <input type="text" class="form-control" id="contact_parent" name="contact_parent">
                    </div> 
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Numero permis</label>
                        <input type="text" class="form-control" id="permis_numero" name="permis_numero">
                    </div> 
                    <select class="form-select mb-3" aria-label="Default select example" name="vehicule_id">
                        <option selected>liste des vehicules</option>
                        @foreach ($vehicules as $vehicule)
                            <option value="{{$vehicule->id}}">{{$vehicule->marque}} {{$vehicule->immatriculation}} {{$vehicule->couleur}}</option> 
                        @endforeach 
                    </select>
                    <button type="submit" class="btn btn-primary">Création</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-3"></div>
    </div>
</div>
<!-- Form End -->
@endsection