<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludHistocabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_histocabs', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->string('no_identi',15)->unique();
            $table->string('nombre1',20);
            $table->string('nombre2',20)->nullable();
            $table->string('apelli1',20);
            $table->string('apelli2',20)->nullable();
            $table->string('nomhisto',120)->nullable();
            $table->date('fechnac');
            $table->integer('edad')->nullable();            
            $table->enum('cod_edad',['Años','Meses','Dias'])->nullable();
            $table->enum('sexo',['Hombre','Mujer','Indeterminado']);
            $table->enum('estcivil',['Casado','Soltero','Viudo','Union Libre','Separado-Divorciado']);
            $table->string('tipo_iden',2);
            $table->bigInteger('idocupac')->nullable();
            $table->bigInteger('ideps')->nullable();
            $table->string('nomresp',40)->nullable();
            $table->string('parenresp',20)->nullable();
            $table->string('telresp',15)->nullable();
            $table->date('fechape')->nullable();
            $table->boolean('vivo',1)->nullable();
            $table->string('direccion',70);
            $table->string('telefono',15)->nullable();
            $table->string('celular',24)->nullable();
            $table->unsignedBigInteger('idciudad')->nullable();
            $table->string('nomacom',40)->nullable();
            $table->string('telacom',15)->nullable();
            $table->enum('zona',['Rural','Urbana'])->nullable();
            $table->bigInteger('idestrato')->nullable();
            $table->string('gae',2)->nullable();
            $table->string('usuario',191)->nullable();
            $table->string('no_idenant',15)->nullable();
            $table->enum('tipoafil',['Cotizante','Beneficiario','Adicional'])->nullable();
            $table->string('sangre',3)->nullable();
            $table->unsignedBigInteger('idciunac')->nullable();
            $table->string('escolar',2)->nullable();
            $table->string('foto',150)->nullable();
            $table->string('e_mail',70)->nullable();
            $table->foreign('idocupac')->references('id')->on('maestra_ocupacs');
            $table->foreign('ideps')->references('id')->on('maestra_eps');
            $table->foreign('idciudad')->references('id')->on('maestra_municipios');
            $table->foreign('idestrato')->references('id')->on('maestra_estratos');
            $table->foreign('idciunac')->references('id')->on('maestra_municipios');
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
        Schema::dropIfExists('salud_histocabs');
    }
}
