<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('sie_contab') }}
            {{ Form::text('sie_contab', $sieparam->sie_contab, ['class' => 'form-control' . ($errors->has('sie_contab') ? ' is-invalid' : ''), 'placeholder' => 'Sie Contab']) }}
            {!! $errors->first('sie_contab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('licen') }}
            {{ Form::text('licen', $sieparam->licen, ['class' => 'form-control' . ($errors->has('licen') ? ' is-invalid' : ''), 'placeholder' => 'Licen']) }}
            {!! $errors->first('licen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numemp') }}
            {{ Form::text('numemp', $sieparam->numemp, ['class' => 'form-control' . ($errors->has('numemp') ? ' is-invalid' : ''), 'placeholder' => 'Numemp']) }}
            {!! $errors->first('numemp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serialdd') }}
            {{ Form::text('serialdd', $sieparam->serialdd, ['class' => 'form-control' . ($errors->has('serialdd') ? ' is-invalid' : ''), 'placeholder' => 'Serialdd']) }}
            {!! $errors->first('serialdd', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('logo', $sieparam->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codpres') }}
            {{ Form::text('codpres', $sieparam->codpres, ['class' => 'form-control' . ($errors->has('codpres') ? ' is-invalid' : ''), 'placeholder' => 'Codpres']) }}
            {!! $errors->first('codpres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $sieparam->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctacopa') }}
            {{ Form::text('ctacopa', $sieparam->ctacopa, ['class' => 'form-control' . ($errors->has('ctacopa') ? ' is-invalid' : ''), 'placeholder' => 'Ctacopa']) }}
            {!! $errors->first('ctacopa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctacopcxc') }}
            {{ Form::text('ctacopcxc', $sieparam->ctacopcxc, ['class' => 'form-control' . ($errors->has('ctacopcxc') ? ' is-invalid' : ''), 'placeholder' => 'Ctacopcxc']) }}
            {!! $errors->first('ctacopcxc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horatemp') }}
            {{ Form::text('horatemp', $sieparam->horatemp, ['class' => 'form-control' . ($errors->has('horatemp') ? ' is-invalid' : ''), 'placeholder' => 'Horatemp']) }}
            {!! $errors->first('horatemp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horinidis') }}
            {{ Form::text('horinidis', $sieparam->horinidis, ['class' => 'form-control' . ($errors->has('horinidis') ? ' is-invalid' : ''), 'placeholder' => 'Horinidis']) }}
            {!! $errors->first('horinidis', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horfindis') }}
            {{ Form::text('horfindis', $sieparam->horfindis, ['class' => 'form-control' . ($errors->has('horfindis') ? ' is-invalid' : ''), 'placeholder' => 'Horfindis']) }}
            {!! $errors->first('horfindis', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctacxcglo') }}
            {{ Form::text('ctacxcglo', $sieparam->ctacxcglo, ['class' => 'form-control' . ($errors->has('ctacxcglo') ? ' is-invalid' : ''), 'placeholder' => 'Ctacxcglo']) }}
            {!! $errors->first('ctacxcglo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctagasglo') }}
            {{ Form::text('ctagasglo', $sieparam->ctagasglo, ['class' => 'form-control' . ($errors->has('ctagasglo') ? ' is-invalid' : ''), 'placeholder' => 'Ctagasglo']) }}
            {!! $errors->first('ctagasglo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctacopgas') }}
            {{ Form::text('ctacopgas', $sieparam->ctacopgas, ['class' => 'form-control' . ($errors->has('ctacopgas') ? ' is-invalid' : ''), 'placeholder' => 'Ctacopgas']) }}
            {!! $errors->first('ctacopgas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contproy') }}
            {{ Form::text('contproy', $sieparam->contproy, ['class' => 'form-control' . ($errors->has('contproy') ? ' is-invalid' : ''), 'placeholder' => 'Contproy']) }}
            {!! $errors->first('contproy', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveefac') }}
            {{ Form::text('proveefac', $sieparam->proveefac, ['class' => 'form-control' . ($errors->has('proveefac') ? ' is-invalid' : ''), 'placeholder' => 'Proveefac']) }}
            {!! $errors->first('proveefac', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('redondea') }}
            {{ Form::text('redondea', $sieparam->redondea, ['class' => 'form-control' . ($errors->has('redondea') ? ' is-invalid' : ''), 'placeholder' => 'Redondea']) }}
            {!! $errors->first('redondea', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fotodef') }}
            {{ Form::text('fotodef', $sieparam->fotodef, ['class' => 'form-control' . ($errors->has('fotodef') ? ' is-invalid' : ''), 'placeholder' => 'Fotodef']) }}
            {!! $errors->first('fotodef', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisocup') }}
            {{ Form::text('hisocup', $sieparam->hisocup, ['class' => 'form-control' . ($errors->has('hisocup') ? ' is-invalid' : ''), 'placeholder' => 'Hisocup']) }}
            {!! $errors->first('hisocup', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('histera') }}
            {{ Form::text('histera', $sieparam->histera, ['class' => 'form-control' . ($errors->has('histera') ? ' is-invalid' : ''), 'placeholder' => 'Histera']) }}
            {!! $errors->first('histera', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hispsic') }}
            {{ Form::text('hispsic', $sieparam->hispsic, ['class' => 'form-control' . ($errors->has('hispsic') ? ' is-invalid' : ''), 'placeholder' => 'Hispsic']) }}
            {!! $errors->first('hispsic', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hiscons') }}
            {{ Form::text('hiscons', $sieparam->hiscons, ['class' => 'form-control' . ($errors->has('hiscons') ? ' is-invalid' : ''), 'placeholder' => 'Hiscons']) }}
            {!! $errors->first('hiscons', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisimag') }}
            {{ Form::text('hisimag', $sieparam->hisimag, ['class' => 'form-control' . ($errors->has('hisimag') ? ' is-invalid' : ''), 'placeholder' => 'Hisimag']) }}
            {!! $errors->first('hisimag', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisaudi') }}
            {{ Form::text('hisaudi', $sieparam->hisaudi, ['class' => 'form-control' . ($errors->has('hisaudi') ? ' is-invalid' : ''), 'placeholder' => 'Hisaudi']) }}
            {!! $errors->first('hisaudi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisespi') }}
            {{ Form::text('hisespi', $sieparam->hisespi, ['class' => 'form-control' . ($errors->has('hisespi') ? ' is-invalid' : ''), 'placeholder' => 'Hisespi']) }}
            {!! $errors->first('hisespi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisopto') }}
            {{ Form::text('hisopto', $sieparam->hisopto, ['class' => 'form-control' . ($errors->has('hisopto') ? ' is-invalid' : ''), 'placeholder' => 'Hisopto']) }}
            {!! $errors->first('hisopto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sicree') }}
            {{ Form::text('sicree', $sieparam->sicree, ['class' => 'form-control' . ($errors->has('sicree') ? ' is-invalid' : ''), 'placeholder' => 'Sicree']) }}
            {!! $errors->first('sicree', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porcree') }}
            {{ Form::text('porcree', $sieparam->porcree, ['class' => 'form-control' . ($errors->has('porcree') ? ' is-invalid' : ''), 'placeholder' => 'Porcree']) }}
            {!! $errors->first('porcree', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debecree') }}
            {{ Form::text('debecree', $sieparam->debecree, ['class' => 'form-control' . ($errors->has('debecree') ? ' is-invalid' : ''), 'placeholder' => 'Debecree']) }}
            {!! $errors->first('debecree', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habecree') }}
            {{ Form::text('habecree', $sieparam->habecree, ['class' => 'form-control' . ($errors->has('habecree') ? ' is-invalid' : ''), 'placeholder' => 'Habecree']) }}
            {!! $errors->first('habecree', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cboespe') }}
            {{ Form::text('cboespe', $sieparam->cboespe, ['class' => 'form-control' . ($errors->has('cboespe') ? ' is-invalid' : ''), 'placeholder' => 'Cboespe']) }}
            {!! $errors->first('cboespe', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctamod') }}
            {{ Form::text('ctamod', $sieparam->ctamod, ['class' => 'form-control' . ($errors->has('ctamod') ? ' is-invalid' : ''), 'placeholder' => 'Ctamod']) }}
            {!! $errors->first('ctamod', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('copaest') }}
            {{ Form::text('copaest', $sieparam->copaest, ['class' => 'form-control' . ($errors->has('copaest') ? ' is-invalid' : ''), 'placeholder' => 'Copaest']) }}
            {!! $errors->first('copaest', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bloqcon') }}
            {{ Form::text('bloqcon', $sieparam->bloqcon, ['class' => 'form-control' . ($errors->has('bloqcon') ? ' is-invalid' : ''), 'placeholder' => 'Bloqcon']) }}
            {!! $errors->first('bloqcon', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costodet') }}
            {{ Form::text('costodet', $sieparam->costodet, ['class' => 'form-control' . ($errors->has('costodet') ? ' is-invalid' : ''), 'placeholder' => 'Costodet']) }}
            {!! $errors->first('costodet', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hisocup1') }}
            {{ Form::text('hisocup1', $sieparam->hisocup1, ['class' => 'form-control' . ($errors->has('hisocup1') ? ' is-invalid' : ''), 'placeholder' => 'Hisocup1']) }}
            {!! $errors->first('hisocup1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hislabo') }}
            {{ Form::text('hislabo', $sieparam->hislabo, ['class' => 'form-control' . ($errors->has('hislabo') ? ' is-invalid' : ''), 'placeholder' => 'Hislabo']) }}
            {!! $errors->first('hislabo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('siica') }}
            {{ Form::text('siica', $sieparam->siica, ['class' => 'form-control' . ($errors->has('siica') ? ' is-invalid' : ''), 'placeholder' => 'Siica']) }}
            {!! $errors->first('siica', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tasaica') }}
            {{ Form::text('tasaica', $sieparam->tasaica, ['class' => 'form-control' . ($errors->has('tasaica') ? ' is-invalid' : ''), 'placeholder' => 'Tasaica']) }}
            {!! $errors->first('tasaica', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debeica') }}
            {{ Form::text('debeica', $sieparam->debeica, ['class' => 'form-control' . ($errors->has('debeica') ? ' is-invalid' : ''), 'placeholder' => 'Debeica']) }}
            {!! $errors->first('debeica', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habeica') }}
            {{ Form::text('habeica', $sieparam->habeica, ['class' => 'form-control' . ($errors->has('habeica') ? ' is-invalid' : ''), 'placeholder' => 'Habeica']) }}
            {!! $errors->first('habeica', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sibom') }}
            {{ Form::text('sibom', $sieparam->sibom, ['class' => 'form-control' . ($errors->has('sibom') ? ' is-invalid' : ''), 'placeholder' => 'Sibom']) }}
            {!! $errors->first('sibom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porcbom') }}
            {{ Form::text('porcbom', $sieparam->porcbom, ['class' => 'form-control' . ($errors->has('porcbom') ? ' is-invalid' : ''), 'placeholder' => 'Porcbom']) }}
            {!! $errors->first('porcbom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debebom') }}
            {{ Form::text('debebom', $sieparam->debebom, ['class' => 'form-control' . ($errors->has('debebom') ? ' is-invalid' : ''), 'placeholder' => 'Debebom']) }}
            {!! $errors->first('debebom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habebom') }}
            {{ Form::text('habebom', $sieparam->habebom, ['class' => 'form-control' . ($errors->has('habebom') ? ' is-invalid' : ''), 'placeholder' => 'Habebom']) }}
            {!! $errors->first('habebom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sirtefte') }}
            {{ Form::text('sirtefte', $sieparam->sirtefte, ['class' => 'form-control' . ($errors->has('sirtefte') ? ' is-invalid' : ''), 'placeholder' => 'Sirtefte']) }}
            {!! $errors->first('sirtefte', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porrte') }}
            {{ Form::text('porrte', $sieparam->porrte, ['class' => 'form-control' . ($errors->has('porrte') ? ' is-invalid' : ''), 'placeholder' => 'Porrte']) }}
            {!! $errors->first('porrte', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deberte') }}
            {{ Form::text('deberte', $sieparam->deberte, ['class' => 'form-control' . ($errors->has('deberte') ? ' is-invalid' : ''), 'placeholder' => 'Deberte']) }}
            {!! $errors->first('deberte', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costinv') }}
            {{ Form::text('costinv', $sieparam->costinv, ['class' => 'form-control' . ($errors->has('costinv') ? ' is-invalid' : ''), 'placeholder' => 'Costinv']) }}
            {!! $errors->first('costinv', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutagem') }}
            {{ Form::text('rutagem', $sieparam->rutagem, ['class' => 'form-control' . ($errors->has('rutagem') ? ' is-invalid' : ''), 'placeholder' => 'Rutagem']) }}
            {!! $errors->first('rutagem', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sikit') }}
            {{ Form::text('sikit', $sieparam->sikit, ['class' => 'form-control' . ($errors->has('sikit') ? ' is-invalid' : ''), 'placeholder' => 'Sikit']) }}
            {!! $errors->first('sikit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoliq') }}
            {{ Form::text('tipoliq', $sieparam->tipoliq, ['class' => 'form-control' . ($errors->has('tipoliq') ? ' is-invalid' : ''), 'placeholder' => 'Tipoliq']) }}
            {!! $errors->first('tipoliq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regimen') }}
            {{ Form::text('regimen', $sieparam->regimen, ['class' => 'form-control' . ($errors->has('regimen') ? ' is-invalid' : ''), 'placeholder' => 'Regimen']) }}
            {!! $errors->first('regimen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hispeq') }}
            {{ Form::text('hispeq', $sieparam->hispeq, ['class' => 'form-control' . ($errors->has('hispeq') ? ' is-invalid' : ''), 'placeholder' => 'Hispeq']) }}
            {!! $errors->first('hispeq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('covid19') }}
            {{ Form::text('covid19', $sieparam->covid19, ['class' => 'form-control' . ($errors->has('covid19') ? ' is-invalid' : ''), 'placeholder' => 'Covid19']) }}
            {!! $errors->first('covid19', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ushispol') }}
            {{ Form::text('ushispol', $sieparam->ushispol, ['class' => 'form-control' . ($errors->has('ushispol') ? ' is-invalid' : ''), 'placeholder' => 'Ushispol']) }}
            {!! $errors->first('ushispol', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ushisoxi') }}
            {{ Form::text('ushisoxi', $sieparam->ushisoxi, ['class' => 'form-control' . ($errors->has('ushisoxi') ? ' is-invalid' : ''), 'placeholder' => 'Ushisoxi']) }}
            {!! $errors->first('ushisoxi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ushispre') }}
            {{ Form::text('ushispre', $sieparam->ushispre, ['class' => 'form-control' . ($errors->has('ushispre') ? ' is-invalid' : ''), 'placeholder' => 'Ushispre']) }}
            {!! $errors->first('ushispre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usbod') }}
            {{ Form::text('usbod', $sieparam->usbod, ['class' => 'form-control' . ($errors->has('usbod') ? ' is-invalid' : ''), 'placeholder' => 'Usbod']) }}
            {!! $errors->first('usbod', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usprovee') }}
            {{ Form::text('usprovee', $sieparam->usprovee, ['class' => 'form-control' . ($errors->has('usprovee') ? ' is-invalid' : ''), 'placeholder' => 'Usprovee']) }}
            {!! $errors->first('usprovee', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        <a class="btn btn-secondary" href="{{ route('sieparam.index') }}"> Regresar</a>
    </div>
</div>
