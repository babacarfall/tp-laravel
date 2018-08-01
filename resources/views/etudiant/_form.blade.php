 <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Ajouter Un Etudiant
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
@if(!isset($etudiant))
class="form-horizontal"(!! Form::model($etudiant, ['route' => ['updateEtudiant',$etudiant->id], 'methode' => 'put']) !!)
@else
{!! Form::open(['route' => 'addEtudiant']) !!}
@endif
{!! Form::label("{{ trans('etudiant.nom') }}",trans('Nom')) !!}
{!! Form::text('nom') !!}
{!! Form::label("{{ trans('etudiant.prenom') }}",'Prenom : ') !!}
{!! Form::text('prenom') !!}
<button type="submit" class="btn btn-primary">{{trans('Enregistrer') }}</button>