@extends('layouts.app')

@section('template_title')
    {{ $paquete->name ?? 'Show Paquete' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Paquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paquetes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paquete->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $paquete->servicio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $paquete->costo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
