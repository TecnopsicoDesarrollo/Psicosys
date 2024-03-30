<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('codigo') }}
                {{ Form::text('codigo', $admonConcecont->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('concepto') }}
                {{ Form::text('concepto', $admonConcecont->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'concepto']) }}
                {!! $errors->first('concepto', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Tipo Movimiento') }}
                {{ Form::text('tipo_mov', $admonConcecont->tipo_mov, ['class' => 'form-control' . ($errors->has('tipo_mov') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Mov']) }}
                {!! $errors->first('tipo_mov', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Cuenta Debito Cartera') }}
                    {{ Form::text('cta_debe', $admonConcecont->cta_debe, ['class' => 'form-control' . ($errors->has('cta_debe') ? ' is-invalid' : ''), 'placeholder' => 'Cta Debe']) }}
                    {!! $errors->first('cta_debe', '<div class="invalid-feedback">:message</p>') !!}
                    <h6>Hace interfase con los registros de cartera pendiente</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Cuenta Credito CXP') }}
                    {{ Form::text('cta_haber', $admonConcecont->cta_haber, ['class' => 'form-control' . ($errors->has('cta_haber') ? ' is-invalid' : ''), 'placeholder' => 'Cta Haber']) }}
                    {!! $errors->first('cta_haber', '<div class="invalid-feedback">:message</p>') !!}
                    <h6>Hace interfase con los registros de CxP</h6>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                {{ Form::label('Cuenta Entrada - Salida Almacen') }}
                {{ Form::text('cta_almac', $admonConcecont->cta_almac, ['class' => 'form-control' . ($errors->has('cta_almac') ? ' is-invalid' : ''), 'placeholder' => 'Cta Almac']) }}
                {!! $errors->first('cta_almac', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Hace interfase del movimiento de mercancia en Almacén</h6>
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Cuenta I.V.A. Compras') }}
                {{ Form::text('ivalmac', $admonConcecont->ivalmac, ['class' => 'form-control' . ($errors->has('ivalmac') ? ' is-invalid' : ''), 'placeholder' => 'Ivalmac']) }}
                {!! $errors->first('ivalmac', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Cuenta del IVA por compra si se requiere</h6>
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('Cuenta RETEIVA') }}
                {{ Form::text('cta_riva', $admonConcecont->cta_riva, ['class' => 'form-control' . ($errors->has('cta_riva') ? ' is-invalid' : ''), 'placeholder' => 'Cta Riva']) }}
                {!! $errors->first('cta_riva', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Cuenta del RTEIVA si se requiere</h6>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('Cuenta Ingreso por Venta') }}
                {{ Form::text('cta_inven', $admonConcecont->cta_inven, ['class' => 'form-control' . ($errors->has('cta_inven') ? ' is-invalid' : ''), 'placeholder' => 'Cta Inven']) }}
                {!! $errors->first('cta_inven', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Hace interfase de las ventas de Inventarios o Servicios</h6>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Cuenta I.V.A. en Ventas') }}
                {{ Form::text('cta_iva', $admonConcecont->cta_iva, ['class' => 'form-control' . ($errors->has('cta_iva') ? ' is-invalid' : ''), 'placeholder' => 'Cta Iva']) }}
                {!! $errors->first('cta_iva', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Cuenta del IVA por venta si se requiere</h6>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Cuenta Descuento') }}
                {{ Form::text('cta_dscto', $admonConcecont->cta_dscto, ['class' => 'form-control' . ($errors->has('cta_dscto') ? ' is-invalid' : ''), 'placeholder' => 'Cta Dscto']) }}
                {!! $errors->first('cta_dscto', '<div class="invalid-feedback">:message</p>') !!}
                <h6>Cuenta de Descuento si se requiere</h6>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Cuenta de Costos') }}
                {{ Form::text('cta_costo', $admonConcecont->cta_costo, ['class' => 'form-control' . ($errors->has('cta_costo') ? ' is-invalid' : ''), 'placeholder' => 'Cta Costo']) }}
                {!! $errors->first('cta_costo', '<div class="invalid-feedback">:message</p>') !!}
                <h6 class="bg-info text-white">Hace interfase del costo por venta de Inventarios</h6>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('proyec') }}
            {{ Form::text('proyec', $admonConcecont->proyec, ['class' => 'form-control' . ($errors->has('proyec') ? ' is-invalid' : ''), 'placeholder' => 'Proyec']) }}
            {!! $errors->first('proyec', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('admon-concecont.index') }}"> Regresar</a>
    </div>
</div>
