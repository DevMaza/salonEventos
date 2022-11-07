@extends('layouts.app')

@section('template_title')
    {{ $serivicio->name ?? 'Show Serivicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Serivicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('serivicios.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $serivicio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $serivicio->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
