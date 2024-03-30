<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmonClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * nota: esta ligado a facturacion electronica con las siguientes tablas:
     * actividades economicas (idacteco) - obligaciones (oblig) - tipo de impuesto (tipoimp) - codigo postal (postal)
     * se crean llaves foraneas despues.
     */
    public function up()
    {
        Schema::create('admon_clientes', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('no_identi',15)->unique();
            $table->string('tipo_iden',2);
            $table->string('direccion',70);
            $table->string('telefono',15)->nullable();
            $table->string('nomclien',60)->nullable();
            $table->unsignedBigInteger('idCiudad');
            $table->enum('zona',['Rural','Urbana'])->nullable();
            $table->string('e_mail',70)->nullable();
            $table->string('celular',24)->nullable();
            $table->decimal('internor',6,2)->nullable();
            $table->decimal('intermora',6,2)->nullable();
            $table->enum('tipoper',['Natural','Jurídica'])->nullable();
            $table->string('digiveri',1)->nullable();
            $table->enum('regimen',['Común','Simplificado','Especial'])->nullable();
            $table->boolean('autoret',1)->nullable();
            $table->boolean('reteiva',1)->nullable();
            $table->boolean('rtefte',1)->nullable();
            $table->string('no_ideant',15)->nullable();
            $table->boolean('cliente',1)->nullable();
            $table->boolean('provee',1)->nullable();
            $table->boolean('otro',1)->nullable();
            $table->boolean('eseps',1)->nullable();
            $table->string('usuario',191)->nullable();
            $table->string('nombre1',20)->nullable();
            $table->string('nombre2',20)->nullable();
            $table->string('apelli1',20)->nullable();
            $table->string('apelli2',20)->nullable();
            $table->integer('diascre')->nullable();
            $table->decimal('cupocxc',14,2)->nullable();
            $table->string('idacteco')->nullable();
            $table->boolean('escree',1)->nullable();
            $table->string('rutarut',150)->nullable();
            $table->string('porrte',2)->nullable();
            $table->string('nomcial',60)->nullable();
            $table->string('nomatri',10)->nullable();
            $table->string('idoblig')->nullable();
            $table->string('idtipoimp')->nullable();
            $table->enum('regitrib',['Ordinario','Simple'])->nullable();
            $table->string('idpostal')->nullable();
            $table->timestamps();
            $table->foreign('idCiudad')->references('id')->on('maestra_municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admon_clientes');
    }
}
