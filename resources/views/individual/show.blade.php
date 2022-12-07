@extends('layouts.app')

@section('template_title')
    {{ $individual->name ?? 'Show Individual' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Individual</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('individuals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $individual->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Game Id:</strong>
                            {{ $individual->game_id }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $individual->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $individual->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
