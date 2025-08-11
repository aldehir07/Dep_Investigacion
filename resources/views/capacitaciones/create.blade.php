@extends('app')
@section('content')

<div class="card">
    <div class="card-header" style="background:#082140">
        <h2 class="card-tittle mb-0 text-white">Registrar Capacitacion</h2>
    </div>

    <div class="card-body">
        <form action="#" method="post">
            @csrf

            <div class="row">
                <!-- Columna Izquierda -->
                <div class="col-md-6">
                    <!--UNIDAD SOLICITANTE-->
                    <div class="mb-3">
                        <label class="form-label">Unidad Solicitante</label>
                        <select name="" id="" class="form-select">
                            <option value="" disabled>Seleccione</option>
                            <option value="">Uno</option>
                            <option value="">Dos</option>
                        </select>
                    </div>
                </div>

            </div>
        </form>
        
    </div>
</div>

@endsection