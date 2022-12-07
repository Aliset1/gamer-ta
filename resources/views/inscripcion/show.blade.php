@extends('layouts.app')

@section('template_title')
    {{ $inscripcion->name ?? 'Show Inscripcion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inscripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscripcion.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $inscripcion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $inscripcion->celular }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
