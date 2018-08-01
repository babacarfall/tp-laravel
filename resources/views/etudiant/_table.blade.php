<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<div class="panel-body">
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Liste Etudiants
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <div class="table-responsive">
                <table class="table table-bordered width100" id="table">
	<tr>
		<th >
			{{trans('etudiant.nom')}}
		</th>
		<th>
			{{trans('etudiant.prenom')}}
		</th>
		<th>Action</th>
	</tr>
	@foreach ($etudiant as $etudiant)
	<tr>
		<th>
			{{$etudiant->nom}}
		</th>
		<th>
			{{$etudiant->prenom}}
		</th>
		<th>
			<a href="{{route('showEtudiant', $etudiant->id) }}" >{{trans('commun.details')}}</a>
		</th>
		<th>
			<a href="{{route('editEtudiant', $etudiant->id) }}" >{{trans('commun.modifier')}}</a>
		</th>
	</tr>
	@endforeach

