@extends('layouts.app')


@section('content')
 <!-- Form Start -->
 <br><br><br><br>
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-3"></div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Information Vehicule</h6>
                
                <form action="{{route('vehicules.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="marque" class="form-label">Marque</label>
                        <input type="text" class="form-control" id="marque"  aria-describedby="marque"  name="marque">
                    </div>
                    <div class="mb-3">
                        <label for="immatriculation" class="form-label">Immatriculation</label>
                        <input type="text" class="form-control" id="immatriculation" name="immatriculation">
                    </div> 
                    <div class="mb-3">
                        <label for="couleur" class="form-label">couleur</label>
                        <input type="text" class="form-control" id="couleur" name="couleur">
                    </div> 

                    <button type="submit" class="btn btn-primary">Création</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-3"></div>
    </div>
</div>
<!-- Form End -->
@endsection