<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSieparamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieparams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empresa',40)->nullable(false)->change();
            $table->string('direccion',30)->nullable(false)->change();
            $table->string('telefono',16)->nullable(false)->change();
            $table->string('rut',15)->nullable(false)->change();
            $table->string('ciudad',20)->nullable(false)->change();
            $table->boolean('sie_contab',1);
            $table->string('licen',20);
            $table->decimal('numemp',3,0);
            $table->string('serialdd',20);
            $table->string('logo',100);
            $table->string('codpres',12);
            $table->decimal('iva',3,2);
            $table->string('ctacopa',14);
            $table->string('ctacopcxc',14);
            $table->string('horatemp',5);
            $table->string('horinidis',5);
            $table->string('horfindis',5);
            $table->string('ctacxcglo',14);
            $table->string('ctagasglo',14);
            $table->string('ctacopgas',14);
            $table->string('tipoemp',1)->nullable(false)->change();
            $table->boolean('contproy',1);
            $table->boolean('proveefac',1);
            $table->boolean('redondea',1);
            $table->string('fotodef',100);
            $table->boolean('hisocup',1);
            $table->boolean('histera',1);
            $table->boolean('hispsic',1);
            $table->boolean('hiscons',1);
            $table->boolean('hisimag',1);
            $table->boolean('hisaudi',1);
            $table->boolean('hisespi',1);
            $table->boolean('hisopto',1);
            $table->boolean('sicree',1);
            $table->decimal('porcree',3,2);
            $table->string('debecree',14);
            $table->string('habecree',14);
            $table->boolean('cboespe',1);
            $table->string('ctamod',14);
            $table->boolean('copaest',1);
            $table->boolean('bloqcon',1);
            $table->boolean('costodet',1);
            $table->boolean('hisocup1',1);
            $table->boolean('hislabo',1);
            $table->boolean('siica',1);
            $table->decimal('tasaica',4,2);
            $table->string('debeica',14);
            $table->string('habeica',14);
            $table->boolean('sibom',1);
            $table->decimal('porcbom',4,2);
            $table->string('debebom',14);
            $table->string('habebom',14);
            $table->boolean('sirtefte',1);
            $table->decimal('porrte',3,2);
            $table->string('deberte',14);
            $table->string('costinv',1);
            $table->string('rutagem',100);
            $table->boolean('sikit',1);
            $table->string('tipoliq',1);
            $table->string('regimen',1);
            $table->string('hispeq',1);
            $table->boolean('covid19',1);
            $table->string('ushispol',10);
            $table->string('ushisoxi',10);
            $table->string('ushispre',10);
            $table->string('usbod',3);
            $table->string('usprovee',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sieparams');
    }
}
