@extends('layouts.app')


@section('content')
 <!-- Form Start -->
 
 <div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Marque</th>
                        <th scope="col">Immatriculation</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1?>
                    @foreach ($vehicules as $vehicule) 
                            
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$vehicule->marque}}</td>
                            <td>{{$vehicule->immatriculation}}</td>
                            <td>{{$vehicule->couleur}}</td>
                            <td>
                                <a href="" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-home"></i></a> 
                                <a href="" class="btn btn-square btn-outline-success m-2"><i class="fa fa-home"></i></a> 
                                <a href="" class="btn btn-square btn-outline-success m-2"><i class="fa fa-home"></i></a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection