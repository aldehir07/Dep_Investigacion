@extends('app')
@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header" style="background:#082140">
                <h2 class="card-tittle mb-0 text-white">Registrar Capacitacion</h2>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    @csrf

                    <div class="row">
                        <!-- Columna Izquierda -->
                        <div class="col-md-6">
                            <!-- Unidad Solicitante -->
                            <div class="mb-3">
                                <label class="form-label">Unidad Solicitante</label>
                                <select name="unidad_id" id="unidad_id" class="form-select" required>
                                    <option value="" disabled>Seleccione</option>
                                    <option value="Prueba">Prueba1</option>
                                    <option value="Prueba">Prueba2</option>
                                </select>
                            </div>

                            <!-- SCAFID -->
                            <div class="mb-3">
                                <label for="" class="form-label">SCAFID</label>
                                <input type="number" name="scafid" class="form-input">
                            </div>

                            <!-- N° Memo Solicitud -->
                            <div class="mb-3">
                                <label for="" class="form-label">N° Memo Solicitado</label>
                                <input type="number" name="memo" class="form-input">
                            </div>

                            <!-- Fecha SolicitudACG  -->
                            <div class="mb-3">
                                <label class="form-label">Fecha Solicitud ACG</label>
                                <input type="date" name="fecha_solicitud" class="fomr-input">
                            </div>

                            <!-- Capacitacion -->
                            <div class="mb-3">
                                <label class="form-label">Capacitacion</label>
                                <input type="text" name="Capacitacion" class="form-input">
                            </div>

                            <!-- fecha de inicio -->
                            <div class="mb-3">
                                <label class="form-label">Fecha de Inicio</label>
                                <input type="date" name="fecha_inicio" class="form-input">
                            </div>

                            <!-- Fecha Final -->
                            <div class="mb-3">
                                <label class="form-label">Fecha Final</label>
                                <input type="date" name="fecha_final" class="form-label">
                            </div>

                            <!-- Nacional/Internacional -->
                            <div class="mb-3">
                                <label class="form-label">Nacional/Internacional</label>
                                <select name="N_I" id="N_I" class="form-select">
                                    <option value="" disabled>Seleccione</option>
                                    <option value="">Prueba 1</option>
                                    <option value="">Prueba 2</option>
                                </select>
                            </div>

                            <!-- Nombre de contacto -->
                            <div class="mb-3">
                                <label class="form-label">Nombre de Contacto</label>
                                <input type="text" name="nombre_contacto">
                            </div>

                            <!-- Proveedor -->
                            <div class="mb-3">
                                <label class="form-label">Proveedor</label>
                                <input type="text" name="proveedor_id" id="proveedor_id">
                            </div>

                            <!-- Tel: proveedor contaco -->
                            <div class="mb-3">
                                <label class="form-label">Tel: Contanto Proveedor</label>
                                <input type="number" name="" class="form-input">
                            </div>

                            <!--Nombre del Contacto  -->
                            <div class="mb-3">
                                <label class="form-label">Nombre del Contacto</label>
                                <input type="text" name="nombre_contacto" class="form-input">
                            </div>

                            <!-- Tipo de pago -->
                            <div class="mb-3">
                                <label class="form-label">Tipo de Pago</label>
                                <select name="tipo_pago" id="tipo_pago" class="form-select">
                                    <option value="" disabled>Seleccione</option>
                                    <option value="">Prueba 1</option>
                                    <option value="">Prueba 2</option>
                                </select>
                            </div>

                            <!-- Cantidad Participantes -->
                            <div class="mb-3">
                                <label for="" class="form-label">Cantidad de Participantes</label>
                                <input type="number" name="cant_participantes" class="form-input">
                            </div>

                            <!-- Valor Unitario -->
                            <div class="mb-3">
                                <label class="form-label">Valor Unitario</label>
                                <input type="number" id="valor_unitario" class="form-input">
                            </div>

                            <!-- Valor Total -->
                            <div class="mb-3">
                                <label class="form-label">Valor Total</label>
                                <input type="number" id="valor_total" class="form-input">
                            </div>

                            <!-- Fondo certificado -->
                            <div class="mb-3">
                                <label class="form-label">Fondo Certificado</label>
                                <input type="text" id="fondo_certificado" class="form-input">
                            </div>

                            <!-- Evento -->
                            <div class="mb-3">
                                <label class="form-label">Evento</label>
                                <input type="number" id="">
                            </div>

                            <!-- Analista -->
                            <div class="mb-3">
                                <label class="form-label">Analista</label>
                                <select name="analista_id" id="analista_id" class="form-select">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>

                            <!-- N° Solicitud INADEH  -->
                            <div class="mb-3">
                                <label class="form-label">N° Solicitud INADEH</label>
                                <input type="number" name="sol_inadeh" id="sol_inadeh" class="form-input">
                            </div>

                            <!-- Fecha solicitud INADEHJ -->
                            <div class="mb-3">
                                <label class="form-label">Fecha Solicitud INADEH</label>
                                <input type="date" name="fecha_solicitud_inadeh" class="form-input">
                            </div>

                            <!-- Estatus preliminar Observaciones -->
                            <div class="mb-3">
                                <label class="form-label">Fecha Solicitud INADEH</label>
                                <input type="date" name="observaciones">
                            </div>

                        </div>
                </form>
            </div>
        </div>

    </div>

@endsection