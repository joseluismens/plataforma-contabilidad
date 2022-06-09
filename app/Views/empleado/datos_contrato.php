<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="contanier mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-md-6">
                            <div class="row mb-3">
                                <div class="col-xs-12 col-md-6">
                                    <label for="">Empresa</label>
                                    <input type="text" name="empresa" class="form-control" value="<?=$empresa->nombre?>" readonly>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <label for="">Rut</label>
                                    <input type="text" name="rut" class="form-control" value="<?=$empresa->rut?>" >
                                </div>
                                
                            <form action="<?=base_url()?>/index.php/empleado/contrato/<?=$id_empleado?>" method="post">
                                <?=csrf_field()?>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6 ">
                                        <label for="">Suc. / CC</label>
                                        <select name="suc" id="" class="form-control" value="<?=$contrato[0]->suc?>">
                                            <option value="">seleccione una</option>
                                            <option value="administracion"  >Administración</option>
                                            <option value="remuneracion"  >Remuneración</option>
                                            <option value="contabilidad" >contabilidad</option>
                                            <option value="infromatica">Infomatica</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Cargo</label>
                                        <select name="cargo" id="" class="form-control" value="<?=$contrato[0]->cargo?>">
                                            <option value="">Seleccione</option>
                                            <otion>Ejecutiva</otion>
                                            <otion>Contador</otion>
                                            <otion>Gerente</otion>
                                            <otion>Tecnico</otion>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Horario</label>
                                        <select name="horario" id="" class="form-control" value="<?=$contrato[0]->horario?>" >
                                            <option value="11">Articulo 22</option>
                                            <option value="8">Lun a Vier de 08:30 a 17:30 (almuerzo incluido)</option>
                                            <option value="4">Lun-Mier 8:30 a 17:30;Mart 9:00 a 14:00; J y V 14:
                                            </option>
                                            <option value="1" selected="">Lun-Vie 8:30-18:30 (Almuerzo 60 min.)</option>
                                            <option value="2">Lunes a Domingo desde 10:30 a 19:00</option>
                                            <option value="10">Lunes a Viernes 08:30 a 13:00 y de 14:00 a 18:00</option>
                                            <option value="7">Lunes a Viernes de 07:00 hrs a 16:45 </option>
                                            <option value="9">Lunes a Viernes de 09:00 a 19:00</option>
                                            <option value="5">Lunes a Viernes de 8:00 a 15:00</option>
                                            <option value="3">Lunes a Viernes desde 08:00 AM a 15:00 hrs</option>
                                            <option value="6">Lunes, Martes y Miércoles de 08:30 a 15;30</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label for="">Renta</label>
                                        <select name="renta_tipo" id="" class="form-control"value="<?=$contrato[0]->renta_tipo?>">
                                            <option value="pesos">Pesos</option>
                                            <option value="uf">UF</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label for="">&nbsp;</label>
                                        <input type="number" class="form-control" name="renta" value="<?=$contrato[0]->renta?>"
                                            placeholder="ingrese monto">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Meses Cotizados</label>
                                        <input type="number" name="meses_cotizados" class="form-control" value="<?=$contrato[0]->meses_cotizados?>">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Zona extrema</label>
                                        <input type="number" step="any" class="form-control" name="zona_extrema" value="<?=$contrato[0]->zona_extrema?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-12">
                                        <label for="">Domicilio Laboral</label>
                                        <input type="text" name="domicilio_laboral" class="form-control" value="<?=$contrato[0]->domicilio_laboral?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-12">
                                        <label for="">Tipo Contrato</label>
                                        <select name="tipo_contrato" id="" class="form-control" value="<?=$contrato[0]->tipo_contrato?>">
                                            <option value="indefinido">Indefinido</option>
                                            <option value="plazo fijo">Plazo Fijo</option>
                                            <option value="por obra">Por Obra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Desde</label>
                                        <input type="date" name="desde" class="form-control" value="<?=$contrato[0]->desde?>">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Hasta</label>
                                        <input type="date" name="hasta" class="form-control" value="<?=$contrato[0]->hasta?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Gratificación</label>
                                        <select name="gratificacion" id="" class="form-control" value="<?=$contrato[0]->gratificacion?>">
                                            ><option value="1">25% Imp. (Tope 4,75imm/12)</option>
                                            <option value="3">Gratificación Legal</option>
                                            <option value="2" selected="">Sin Gratificación</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Factor H.E</label>
                                        <input type="number" name="factor_he" class="form-control" value="<?=$contrato[0]->factor_he?>"
                                            placeholder="Horas extras">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Colación</label>
                                        <input type="number" name="colacion" class="form-control" value="<?=$contrato[0]->colacion?>">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Movilización</label>
                                        <input type="number" name="movilizacion" class="form-control" value="<?=$contrato[0]->movilizacion?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-12">
                                        <label for="">Dias Vacaciones/Año</label>
                                        <input type="number" name="dias_vacaciones" class="form-control" value="<?=$contrato[0]->dias_vacaciones?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xs-12">
                                <label for="">Causa</label>
                                <select name="finiquito" id="" class="form-control" value="<?=$contrato[0]->finiquito_causa?>">
                                    ><option value="20" selected="">Art. 159, N° 1 - Mutuo acuerdo de las partes.
                                    </option>
                                    <option value="10">Art. 159, N° 2 - Renuncia del trabajador.</option>
                                    <option value="100">Art. 159, N° 3 - Muerte del trabajador.</option>
                                    <option value="30">Art. 159, N° 4 - Vencimiento del plazo convenido en el contrato.
                                    </option>
                                    <option value="40">Art. 159, N° 5 - Conclusión del trabajo o servicio que dio origen
                                        al contrato.</option>
                                    <option value="110">Art. 159, N° 6 - Caso fortuito o fuerza mayor.</option>
                                    <option value="90">Art. 160, N° 1, Letra a - Falta de probidad del trabajador en el
                                        desempeño de sus funciones.</option>
                                    <option value="120">Art. 160, N° 1, Letra b - Conductas de acoso sexual.</option>
                                    <option value="130">Art. 160, N° 1, Letra c - Vías de hecho ejercidas por el
                                        trabajador en contra del empleador o de cualquier trabajador.</option>
                                    <option value="140">Art. 160, N° 1, Letra d - Injurias proferidas por el trabajador
                                        al empleador.</option>
                                    <option value="150">Art. 160, N° 1, Letra e - Conducta inmoral del trabajador que
                                        afecte a la empresa donde se desempeña.</option>
                                    <option value="210">Art. 160, N° 1, Letra f - Conductas de acoso laboral.</option>
                                    <option value="160">Art. 160, N° 2 - Negociaciones que ejecute el trabajador dentro
                                        del giro del negocio prohibidas en el contrato.</option>
                                    <option value="60">Art. 160, N° 3 - No concurrencia del trabajador a sus labores sin
                                        causa justificada.</option>
                                    <option value="80">Art. 160, N° 4, Letra a - Abandono del trabajo por parte del
                                        trabajador. Salida intempestiva e injustificada.</option>
                                    <option value="170">Art. 160, N° 4, Letra b - Abandono del trabajo por parte del
                                        trabajador. Negativa a trabajar.</option>
                                    <option value="180">Art. 160, N° 5 - Actos, omisiones o imprudencias temerarias.
                                    </option>
                                    <option value="190">Art. 160, N° 6 - El perjuicio material causado intencionalmente
                                        en las instalaciones.</option>
                                    <option value="70">Art. 160, N° 7 - Incumplimiento grave de las obligaciones que
                                        impone el contrato.</option>
                                    <option value="50">Art. 161, Inciso 1 - Necesidades de la empresa.</option>
                                    <option value="200">Art. 161, Inciso 2 - Necesidades de la empresa, gerentes y
                                        cargos de confianza.</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xs-12 col-md-6">
                                <label for="">Fecha del Finiquito</label>
                                <input type="date" name="fecha_finiquito" class="form-control" value="<?=$contrato[0]->fecha_finiquito?>">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="">Monto Aviso</label>
                                <input type="number" name="monto_aviso" class="form-control" placeholder="ingrese monto " value="<?=$contrato[0]->monto_aviso?>">
                            </div>
                           
                        </div>
                        <div class="row mb-3">
                            <div class="col-xs-12 col-md-6">
                                <label for="">Monto Indemnización</label>
                                <input type="number" class="form-control" name="monto_indemnizacion" placeholder="ingrese indemnizacion" value="<?=$contrato[0]->monto_indemnizacion?>">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="">Monto Vacaciones</label>
                                <input type="text" name="monto_vacaciones" class="form-control" placeholder="Ingrese monto" value="<?=$contrato[0]->monto_vacaciones?>">
                            </div>
                        </div>
                <button class="btn btn-secondary float-end" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection('content'); ?>