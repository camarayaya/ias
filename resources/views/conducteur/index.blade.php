@extends('layouts.app')


@section('content')
 <!-- Form Start --> 
 <div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="row">
            <div class="col-md-6"><h6 class="mb-4">CONDUCTEUR</h6></div>
            <div class="col-md-6 text-end " ><a href="{{route('conducteurs.create')}}" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-home"></i></a> </div>
        </div>
        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Contact personel</th>
                        <th scope="col">Nom parent</th>
                        <th scope="col">Contact parent</th>
                        <th scope="col">Numero permis</th> 
                        <th scope="col">Vehicule</th> 
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1?>
                    @foreach ($conducteurs as $conducteur) 
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$conducteur->nom}}</td>
                            <td>{{$conducteur->prenoms}}</td>
                            <td>{{$conducteur->contact_perso}}</td>
                            <td>{{$conducteur->nom_parent}}</td> 
                            <td>{{$conducteur->contact_parent}}</td>
                            <td>{{$conducteur->permis_numero}}</td>
                            <td>{{$conducteur->vehicule->marque}} {{$conducteur->vehicule->immatriculation}}</td>
                            <td>
                                <a href="" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-home"></i></a> 
                                <a href="" class="btn btn-square btn-outline-success m-2"><i class="fa fa-home"></i></a> 
                                <a href="" class="btn btn-square btn-outline-success m-2"><i class="fa fa-home"></i></a> 
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection