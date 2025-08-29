@extends('app')
@section('content')

<div class="container">

<dic class="card mt-4">
    <div class="card-header" style="background:#082140">
        <h4 class="card-tittle mb-0 text-white">Registro de Capacitaciones</h4>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('capacitaciones.create') }}"><button type="button"class="btn btn-info">Agregar Capacitacion</button></a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered" id="tabla">
                <thead >
                     <tr class="text-white" style="background:#082140">
                        <th>ID</th>
                        <th>U. Solicitante</th>
                        <th>SCAFID</th>
                        <th># Memo Solicitud</th>
                        <th>F. Solicitud ACG</th>
                        <th>Capacitacion</th>
                        <th>F. Inicio</th>
                        <th>F. Final</th>
                        <th>N/I</th>
                        <th>Proveedor</th>
                        <th>Tel. Proveedor</th>
                        <th>N. Contacto</th>
                        <th>T. de Pago</th>
                        <th>C. Participantes</th>
                        <th>Valor Unitario</th>
                        <th>Valor Total</th>
                        <th>F. Certificado</th>
                        <th># Evento</th>
                        <th>Analista</th>
                        <th>Analista</th>
                        <th># Solicitud INADEH</th>
                        <th>F. Solicitud INADEH</th>
                        <th>Observaciones</th>
                        <th># Memo DAF</th>
                        <th>F. Envio DAF</th>
                        <th>Estatus F.</th>
                    </tr>   
                </thead>
            </table>
        </div>

    </div>
</dic>

</div>

@endsection