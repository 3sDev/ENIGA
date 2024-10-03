@extends('adminlayoutscolarite.layout')
@section('title', 'Modifier Réclamation')
@section('contentPage')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Gestion de réclamation</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('reclamations') }}">Liste des réclamations</a></li>
            <li class="breadcrumb-item active">Traiter la réclamation</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@inject('uploads', 'App\Libs\Urlupload')
@foreach($uploads->getLinks() as $upload)
@endforeach

{{-- <link rel="stylesheet" href="{{ URL::asset('css/components.css') }}" /> --}}
<style>
.titreDemande{
    background-color: rgb(235, 235, 235);
    padding: 10px 22px;
    border-radius: 12px;
}
.profile-img img {
    width: 180px !important;
    height: 180px !important;
    margin-left: 10%;
    margin-top: 7%;
}
.rotation {
    animation: zoom-in-zoom-out 3s ease infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}
</style>
    <div class="row">
        <div class="col-md-12">

            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Traiter la réclamation
                        <a href="{{ url('reclamations') }}" class="btn btn-danger float-right">Retour</a>
                    </h4>
                </div>

                <div class="card-body">

                    @foreach ($reclamationstudent as $reclam)

                        <form action="{{ url('update-reclamation/'.$reclam->idReclamation) }}" onsubmit="return confirm('Êtes-vous sûr de modifier cette donnée?')" enctype="multipart/form-data">

                        @csrf
                        {{-- @method('PUT') --}}

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="profile-img">
                                        <img src={{ asset($upload.'/students/'.$reclam->photoStudent) }} style="width:170px !important; height: 160px;" class="profile-user-img img-fluid img-circle imgPhoto"" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="titreDemande">Etudiant </h5>
                                    <div class="profile-head">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>CIN </label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>{{ $reclam->cinStudent }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nom et prénom </label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>{{ $reclam->fullNameStudent }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Classe</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>{{ $reclam->classeStudent }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Numéro Tél </label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>{{ $reclam->telStudent }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="border-left: 1px solid #ccc">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <h5 class="titreDemande">Reclamation : 
                                                @if ($reclam->fileReclamation)
                                                <a href="{{ asset($upload.'/reclamations/'.$reclam->fileReclamation) }}" target="_blank">
                                                    <img class="rotation" src="{{ asset('dist/img/fichier.png') }}" width="30px" height="30px" alt="" style="float: right; margin-top: -.5%;">
                                                </a>
                                                @endif
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Description :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>{{ $reclam->descriptionReclamation }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Date Création</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>{{ date('Y-m-d H:i', strtotime($reclam->dateCreationReclamation)) }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Date Exécution</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>{{ date('Y-m-d H:i', strtotime($reclam->dateCreationReclamation)) }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Réponse :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="reponse" value="{{ $reclam->reponseReclamation }}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:2.5%;">
                                                <div class="col-md-3">
                                                    <label>Statut :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="statut" data-style="btn btn-primary btn-round" class="form-control" required>

                                                            @if ($reclam->statutReclamation=='En cours')
                                                                <option value="{{ $reclam->statutReclamation }}">{{ $reclam->statutReclamation }}</option>
                                                                <option value="Traitée">Traitée</option>
                                                            @endif
                                                            @if ($reclam->statutReclamation=='Traitée')
                                                                <option value="{{ $reclam->statutReclamation }}">{{ $reclam->statutReclamation }}</option>
                                                                <option value="En cours">En cours</option>
                                                            @endif

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success float-right">Modifier</button>
                            </div>
                        </form>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

    
@endsection