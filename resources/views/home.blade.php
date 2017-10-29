@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    {{ html()->a(route('trainings.index'), 'Trainings List')->class('btn btn-default')}}
                    {{ html()->a(route('training.add.form'), 'Add training')->class('btn btn-default')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
