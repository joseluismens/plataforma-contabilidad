<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="contanier mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Registro Empleado <?=$empresa->nombre?></h5>
                    <?=!empty($errors)?>
                    <form action="<?=base_url()?>/index.php/empleado" method="post">
                        <?=csrf_field()?>
                        <div class="row">

                            <div class="col-xs-12 col-md-6">

                                <div class="row mb-3">

                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Empresa</label>
                                        <select name="id_empresa" readonly class="form-control">
                                            <option value="<?=$empresa->id?>"><?=$empresa->nombre?></option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="rut">Rut </label>
                                        <input type="text" class="form-control" id="rut" name="rut"
                                            placeholder="Ingrese el rut">
                                    </div>
                                
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <label for="paterno">Paterno</label>
                                        <input type="text" class="form-control" id="paterno" name="paterno"
                                            placeholder="Ingrese apellido materno " equired>

                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="materno">Materno</label>
                                        <input type="text" class="form-control" id="materno" name="materno"
                                            placeholder="Ingrese apellido paterno">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="nombre">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres"
                                            placeholder="Ingrese nombre">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="fecha_nacimiento">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_navimiento"
                                        name="fecha_navimiento">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="comuna">Comuna</label>
                                        <input type="text" class="form-control" id="comuna" name="comuna">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="comuna">Nacionalidad</label>
                                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <label for="telefono">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono">

                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="celular">Celular</label>
                                        <input type="text" class="form-control" id="celular" name="celular">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="email">E-Mail</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <label for="genero">Genero</label>
                                        <input type="text" class="form-control" id="genero" name="genero">
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <label for="esdtado_civil">Estado Civil</label>
                                        <input type="text" class="form-control" id="esdtado_civil" name="esdtado_civil">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="discapacidad">Discapacidad</label>
                                        <input type="text" class="form-control" id="discapacidad" name="discapacidad">
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12">
                                        <label for="">Subir foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="">Apv</label>
                                    <div class=" col-xs-12 col-md-3">

                                        <select name="institucion" id="" class="form-control">
                                            <option value="0" selected="">Seleccionar</option>
                                            <option value="100">ABN AMRO (CHILE) SEGUROS DE VIDA S.A.</option>
                                            <option value="136">ACE SEGUROS S.A.</option>
                                            <option value="218">ADMINISTRADORA GENERAL DE FONDOS SECURITY S.A.</option>
                                            <option value="33">AFP Capital</option>
                                            <option value="3">AFP Cuprum</option>
                                            <option value="5">AFP Habitat</option>
                                            <option value="34">AFP Modelo</option>
                                            <option value="29">AFP Planvital</option>
                                            <option value="8">AFP Provida</option>
                                            <option value="35">AFP UNO</option>
                                            <option value="101">AGF ALLIANZ CHILE COMPAÑIA DE SEGUROS VIDA S.A.</option>
                                            <option value="222">BANCHILE CORREDORES DE BOLSA S.A.</option>
                                            <option value="104">BANCHILE SEGUROS DE VIDA S.A.</option>
                                            <option value="303">Banco BBVA Bhif</option>
                                            <option value="319">BANCO RIPLEY</option>
                                            <option value="321">BANCO SANTANDER SANTIAGO</option>
                                            <option value="320">BANCO SCOTIABANK</option>
                                            <option value="229">BANCOESTADO S.A. ADMINISTRADORA GENERAL DE FONDOS
                                            </option>
                                            <option value="201">BANDESARROLLO ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="203">BBVA ASSET MANAGEMENT ADMINISTRADORA GENERAL DE FONDOS
                                                S.A.
                                            </option>
                                            <option value="105">BBVA SEGUROS DE VIDA S.A.</option>
                                            <option value="204">BCI ASSET MANAGEMENT ADMINISTRADORA GENERAL DE FONDOS
                                                S.A.
                                            </option>
                                            <option value="103">BCI SEGUROS VIDA S.A.</option>
                                            <option value="205">BICE INVERSIONES ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="232">BICE INVERSIONES CORREDORES DE BOLSA S.A.</option>
                                            <option value="106">BICE VIDA COMPAÑIA DE SEGUROS S.A.</option>
                                            <option value="208">BTG PACTUAL CHILE S.A. ADMINISTRADORA GENERAL DE FONDOS
                                            </option>
                                            <option value="400">CAJA DE COMPENSACION LOS ANDES</option>
                                            <option value="228">CELFIN CAPITAL S.A. CORREDORES DE BOLSA</option>
                                            <option value="107">CHILENA CONSOLIDADA SEGUROS DE VIDA S.A.</option>
                                            <option value="111">CIA DE SEG. DE VIDA CONSORCIO NACIONAL DE SEG S.A.
                                            </option>
                                            <option value="108">CIGNA COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
                                            <option value="109">CN LIFE, COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
                                            <option value="116">COMPAÑIA DE SEGUROS CONFUTURO S.A.</option>
                                            <option value="110">COMPAÑIA DE SEGUROS DE VIDA CARDIF S.A.</option>
                                            <option value="112">COMPAÑIA DE SEGUROS DE VIDA CRUZ DEL SUR S.A.</option>
                                            <option value="113">COMPAÑIA DE SEGUROS DE VIDA HUELEN S.A.</option>
                                            <option value="115">COMPAÑIA DE SEGUROS DE VIDA VITALIS S.A.</option>
                                            <option value="134">COMPAÑIA DE SEGUROS GENERALES PENTA-SECURITY S.A.
                                            </option>
                                            <option value="210">CORPBANCA ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
                                            <option value="227">CORREDORES DE BOLSA SURA S.A.</option>
                                            <option value="404">CRUZ DEL SUR ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="219">CRUZ DEL SUR CORREDORA DE BOLSA S.A.</option>
                                            <option value="600">EUROAMERICA ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="117">EUROAMERICA SEGUROS DE VIDA S.A.</option>
                                            <option value="237">FINTUAL ADMINISTRADORA GENERAL DE FONDOS S.A</option>
                                            <option value="225">ITAU CHILE ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="601">LARRAIN VIAL ADMINISTRADORA GENERAL DE FONDOS S.A.
                                            </option>
                                            <option value="213">LARRAIN VIAL S.A. CORREDORA DE BOLSA</option>
                                            <option value="123">MAPFRE COMPAÑIA DE SEGUROS DE VIDA DE CHILE S.A.
                                            </option>
                                            <option value="121">METLIFE CHILE SEGUROS DE VIDA S.A.</option>
                                            <option value="125">MUTUAL DE SEGUROS DE CHILE</option>
                                            <option value="126">MUTUALIDAD DE CARABINEROS</option>
                                            <option value="127">MUTUALIDAD DEL EJERCITO Y AVIACION</option>
                                            <option value="128">OHIO NATIONAL SEGUROS DE VIDA S.A.</option>
                                            <option value="226">PENTA ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
                                            <option value="135">PENTA VIDA COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
                                            <option value="214">PRINCIPAL ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
                                            <option value="129">PRINCIPAL COMPAÑIA DE SEGUROS DE VIDA CHILE S.A.
                                            </option>
                                            <option value="130">RENTA NACIONAL COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
                                            <option value="215">SANTANDER ASSET MANAGEMENT S.A. ADM. GENERAL DE FONDOS
                                            </option>
                                            <option value="102">SANTANDER SEGUROS DE VIDA S.A.</option>
                                            <option value="217">SCOTIA SUD AMERICANO ADMINISTRADORA DE FONDOS MUTUOS
                                                S.A.
                                            </option>
                                            <option value="231">SCOTIA SUD AMERICANO CORREDORES DE BOLSA S.A.</option>
                                            <option value="131">SEGUROS DE VIDA SECURITY PREVISION S.A.</option>
                                            <option value="118">SEGUROS DE VIDA SURA S.A.</option>
                                            <option value="224">ZURICH ADMINISTRADORA GENERAL DE FONDOS S.A.</option>

                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3 ">
                                        <select name="apv_tipo" id="apv_tipo" class="form-control">
                                            <option value="pesos">pesos</option>
                                            <option value="uf">UF</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <input type="number" name="apv_valor" id=" " class="form-control"
                                            placeholder="ingrese valor">
                                    </div>
                                    <div class="col-xs-12 col-md-3 form-check mt-2">
                                        <label class="form-check-label ml-1" for="">Tributable</label>
                                        <input type="checkbox" name="tributable" id="" class="form-check-input m-0 ml-1"
                                            style="transform:scale(2.5);margin-left:15px !important">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Metodo de pago</label>
                                        <select name="metodo" id="metdo" class="form-control">
                                            <option value="3">Abono Cuenta</option>
                                            <option value="2">Cheque</option>
                                            <option value="1" selected="">Efectivo</option>
                                            <option value="5">Servipag</option>
                                            <option value="4">Vale Vista</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Cuenta</label>
                                        <input type="numeric" name="cuenta" class="form-control"
                                            placeholder="Ingrese numero de cuenta">
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12 col-md-6">

                                <div class="row">
                                    <label for="afp"> Cuenta 2</label>
                                    <div class="col-xs-12 col-md-3 mb-1">
                                        <select name="afp" id="afp" class="form-control">
                                            <option value="capital">Capital</option>
                                            <option value="cuptrum">Cuprum</option>
                                            <option value="habitat">Habitat</option>
                                            <option value="planvital">PlanVital</option>
                                            <option value="Provida">Provida</option>
                                            <option value="modelo">Modelo</option>
                                            <option value="uno">Uno</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <select name="cuenta_2_tipo" id="cuenta_2_tipo" class="form-control">
                                            <option value="pesos">Pesos</option>
                                            <option value="uf">UF</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <input type="number" name="cuenta_2_tipo" id="cuenta_2_tipo"
                                            class="form-control" placeholder=" ingrese valor">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <select name="cuenta_2_afp" id="cuenta_2_afp" class="form-control">
                                            <option value="capital">Capital</option>
                                            <option value="cuptrum">Cuprum</option>
                                            <option value="habitat">Habitat</option>
                                            <option value="planvital">PlanVital</option>
                                            <option value="Provida">Provida</option>
                                            <option value="modelo">Modelo</option>
                                            <option value="solo_jubilados">Solo jubilados</option>

                                            <option value="uno">Uno</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Ex-caja</label>
                                        <select name="ex_caja" id="" class="form-control">
                                            <option value="0" selected="">0 - No pertenece al IPS</option>
                                            <option value="3">3 - Caja Prev. y Est. de los Empl. del Bco. de Chile
                                            </option>
                                            <option value="4">4 - Sección Prev. del Bco. Central de Chile</option>
                                            <option value="25">25 - Caja Prev. de la Defensa Nacional.</option>
                                            <option value="26">26 - Dirección de Prev. de Carabineros de Chile.
                                            </option>
                                            <option value="101">101 - Empart - Régimen 1</option>
                                            <option value="102">102 - Empart - Régimen 2</option>
                                            <option value="103">103 - Empart - Régimen 3</option>
                                            <option value="104">104 - Empart - Régimen 4</option>
                                            <option value="106">106 - Empart - Régimen 6</option>
                                            <option value="201">201 - Bancaria - Régimen 1</option>
                                            <option value="202">202 - Bancaria - Régimen 2</option>
                                            <option value="203">203 - Bancaria - Régimen 3</option>
                                            <option value="214">214 - Bancaria - Régimen 14</option>
                                            <option value="221">221 - Bancaria - Régimen 21</option>
                                            <option value="234">234 - Bancaria - Régimen 34</option>
                                            <option value="501">501 - Caprebech - Régimen 1</option>
                                            <option value="502">502 - Caprebech - Régimen 2</option>
                                            <option value="503">503 - Caprebech - Régimen 3</option>
                                            <option value="514">514 - Caprebech - Régimen 14</option>
                                            <option value="521">521 - Caprebech - Régimen 21</option>
                                            <option value="534">534 - Caprebech - Régimen 34</option>
                                            <option value="601">601 - Capremer - Régimen 1</option>
                                            <option value="602">602 - Capremer - Régimen 2</option>
                                            <option value="603">603 - Capremer - Régimen 3</option>
                                            <option value="604">604 - Capremer - Régimen 4</option>
                                            <option value="605">605 - Capremer - Régimen 5</option>
                                            <option value="606">606 - Capremer - Régimen 6</option>
                                            <option value="608">608 - Capremer - Régimen 8</option>
                                            <option value="701">701 - Triomar - Régimen 1</option>
                                            <option value="702">702 - Triomar - Régimen 2</option>
                                            <option value="703">703 - Triomar - Régimen 3</option>
                                            <option value="704">704 - Triomar - Régimen 4</option>
                                            <option value="801">801 - Hipica Nacional - Régimen 1</option>
                                            <option value="802">802 - Hipica Nacional - Régimen 2</option>
                                            <option value="803">803 - Hipica Nacional - Régimen 3</option>
                                            <option value="804">804 - Hipica Nacional - Régimen 4</option>
                                            <option value="901">901 - Servicios de Seguro Social - Régimen 1
                                            </option>
                                            <option value="902">902 - Servicios de Seguro Social - Régimen 2
                                            </option>
                                            <option value="1001">1001 - Empleados de Emos - Régimen 1</option>
                                            <option value="1101">1101 - Obreros de Emos - Régimen 1</option>
                                            <option value="1202">1202 - Caja Ferro - Régimen 2</option>
                                            <option value="1203">1203 - Caja Ferro - Régimen 3</option>
                                            <option value="1204">1204 - Caja Ferro - Régimen 4</option>
                                            <option value="1205">1205 - Caja Ferro - Régimen 5</option>
                                            <option value="1207">1207 - Caja Ferro - Régimen 7</option>
                                            <option value="1301">1301 - Canaempu: Publicos - Régimen 1</option>
                                            <option value="1302">1302 - Canaempu: Publicos - Régimen 2</option>
                                            <option value="1303">1303 - Canaempu: Publicos - Régimen 3</option>
                                            <option value="1305">1305 - Canaempu: Publicos - Régimen 5</option>
                                            <option value="1306">1306 - Canaempu: Publicos - Régimen 6</option>
                                            <option value="1308">1308 - Canaempu: Publicos - Régimen 8</option>
                                            <option value="1309">1309 - Canaempu: Publicos - Régimen 9</option>
                                            <option value="1310">1310 - Canaempu: Publicos - Régimen 10</option>
                                            <option value="1311">1311 - Canaempu: Publicos - Régimen 11</option>
                                            <option value="1312">1312 - Canaempu: Publicos - Régimen 12</option>
                                            <option value="1321">1321 - Canaempu: Publicos - Régimen 21</option>
                                            <option value="1322">1322 - Canaempu: Publicos - Régimen 22</option>
                                            <option value="1323">1323 - Canaempu: Publicos - Régimen 23</option>
                                            <option value="1325">1325 - Canaempu: Publicos - Régimen 25</option>
                                            <option value="1326">1326 - Canaempu: Publicos - Régimen 26</option>
                                            <option value="1328">1328 - Canaempu: Publicos - Régimen 28</option>
                                            <option value="1329">1329 - Canaempu: Publicos - Régimen 29</option>
                                            <option value="1330">1330 - Canaempu: Publicos - Régimen 30</option>
                                            <option value="1331">1331 - Canaempu: Publicos - Régimen 31</option>
                                            <option value="1332">1332 - Canaempu: Publicos - Régimen 32</option>
                                            <option value="1338">1338 - Canaempu: Publicos - Régimen 38</option>
                                            <option value="1401">1401 - Canaempu: Periodistas - Régimen 1</option>
                                            <option value="1402">1402 - Canaempu: Periodistas - Régimen 2</option>
                                            <option value="1403">1403 - Canaempu: Periodistas - Régimen 3</option>
                                            <option value="1404">1404 - Canaempu: Periodistas - Régimen 4</option>
                                            <option value="1405">1405 - Canaempu: Periodistas - Régimen 5</option>
                                            <option value="1406">1406 - Canaempu: Periodistas - Régimen 6</option>
                                            <option value="1407">1407 - Canaempu: Periodistas - Régimen 7</option>
                                            <option value="1408">1408 - Canaempu: Periodistas - Régimen 8</option>
                                            <option value="1411">1411 - Canaempu: Periodistas - Régimen 11</option>
                                            <option value="1412">1412 - Canaempu: Periodistas - Régimen 12</option>
                                            <option value="1413">1413 - Canaempu: Periodistas - Régimen 13</option>
                                            <option value="1414">1414 - Canaempu: Periodistas - Régimen 14</option>
                                            <option value="1415">1415 - Canaempu: Periodistas - Régimen 15</option>
                                            <option value="1416">1416 - Canaempu: Periodistas - Régimen 16</option>
                                            <option value="1417">1417 - Canaempu: Periodistas - Régimen 17</option>
                                            <option value="1418">1418 - Canaempu: Periodistas - Régimen 18</option>
                                            <option value="1421">1421 - Canaempu: Periodistas - Régimen 21</option>
                                            <option value="1422">1422 - Canaempu: Periodistas - Régimen 22</option>
                                            <option value="1423">1423 - Canaempu: Periodistas - Régimen 23</option>
                                            <option value="1424">1424 - Canaempu: Periodistas - Régimen 24</option>
                                            <option value="1425">1425 - Canaempu: Periodistas - Régimen 25</option>
                                            <option value="1426">1426 - Canaempu: Periodistas - Régimen 26</option>
                                            <option value="1431">1431 - Canaempu: Periodistas - Régimen 31</option>
                                            <option value="1432">1432 - Canaempu: Periodistas - Régimen 32</option>
                                            <option value="1433">1433 - Canaempu: Periodistas - Régimen 33</option>
                                            <option value="1434">1434 - Canaempu: Periodistas - Régimen 34</option>
                                            <option value="1501">1501 - Copremusa EE - Régimen 1</option>
                                            <option value="1502">1502 - Copremusa EE - Régimen 2</option>
                                            <option value="1503">1503 - Copremusa EE - Régimen 3</option>
                                            <option value="1601">1601 - Caja de Previsión Social de los EE - Régimen
                                                1</option>
                                            <option value="1602">1602 - Caja de Previsión Social de los EE - Régimen
                                                2</option>
                                            <option value="1701">1701 - EE Municipales de la Republica - Régimen 1
                                            </option>
                                            <option value="1702">1702 - EE Municipales de la Republica - Régimen 2
                                            </option>
                                            <option value="1703">1703 - EE Municipales de la Republica - Régimen 3
                                            </option>
                                            <option value="1704">1704 - EE Municipales de la Republica - Régimen 4
                                            </option>
                                            <option value="1801">1801 - OO Municipales de la Republica - Régimen 1
                                            </option>
                                            <option value="1802">1802 - OO Municipales de la Republica - Régimen 2
                                            </option>
                                            <option value="1803">1803 - OO Municipales de la Republica - Régimen 3
                                            </option>
                                            <option value="1901">1901 - Diomp - Régimen 1</option>
                                            <option value="2001">2001 - EE Salitre - Régimen 1</option>
                                            <option value="2002">2002 - EE Salitre - Régimen 2</option>
                                            <option value="2101">2101 - Sección Especial Previsión Empleados -
                                                Régimen 1</option>
                                            <option value="2102">2102 - Sección Especial Previsión Empleados -
                                                Régimen 2</option>
                                            <option value="2201">2201 - Caja de Previsión de Gildemeister - Régimen
                                                1</option>
                                            <option value="2202">2202 - Caja de Previsión de Gildemeister - Régimen
                                                2</option>
                                            <option value="2301">2301 - Mauricio, Hochschild - Régimen 1</option>
                                            <option value="2302">2302 - Mauricio, Hochschild - Régimen 2</option>
                                            <option value="2401">2401 - Secgasco - Régimen 1</option>
                                            <option value="2402">2402 - Secgasco - Régimen 2</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Cotización Ex-caja</label>
                                        <input type="number" step="any " name="cotizacion_ex_caja" class="form-control"
                                            placeholder="ingrese valor">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Isapre</label>
                                        <select name="isapre" id="" class="form-control">
                                            <option value="0">No Cotiza</option>
                                            <option value="1">Banmédica</option>
                                            <option value="9">Chuquicamata</option>
                                            <option value="4">Colmena</option>
                                            <option value="2">Consalud</option>
                                            <option value="5">Cruz Blanca</option>
                                            <option value="25">Cruz del Norte</option>
                                            <option value="28">Esencial</option>
                                            <option value="7" selected="">Fonasa</option>
                                            <option value="12">Fundación</option>
                                            <option value="11">Fusat</option>
                                            <option value="17">Mas Vida</option>
                                            <option value="10">Nueva Masvida</option>
                                            <option value="20">Río Blanco</option>
                                            <option value="21">San Lorenzo</option>
                                            <option value="3">Vida Tres</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Plan UF</label>
                                        <input type="number" step="any " name="isapre_plan_uf" class="form-control"
                                            placeholder="ingrese valor">
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Plan $</label>
                                        <input type="number" name="plan_isapre" class="form-control">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Plan %</label>
                                        <input type="number" step="any " name="plan_isapre_porcentaje"
                                            class="form-control" placeholder="ingrese valor">
                                    </div>

                                </div>
                                <div class="row mb-3 ">

                                    <div class="col-xs-12 col-md-3">
                                        <label for="">Tramo</label>
                                        <select name="tramo" id="" class="form-control">
                                            <option value="">Seleccione tramo</option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label for="cargas_simples">Cargas Simples<label>
                                                <input type="number" name="cargas_simples" class="form-control mt-2"
                                                    placeholder="ingrese valor">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label for="cargas_maternales">Cargas Maternales<label>
                                                <input type="number" name="cargas_maternales" class="form-control mt-2"
                                                    placeholder="ingrese valor">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label for="cargas_invalidez">Cargas Invalidez<label>
                                                <input type="number" name="cargas_invalidez" class="form-control mt-2"
                                                    placeholder="ingrese valor">
                                    </div>

                                </div>
                                <div class="row mb-3 ml-2 ms-4 mt-5 ">
                                    <div class="col-xs-12 col-md-2 ml-2 form-check mb-6">
                                        <input type="checkbox" name="jubilado" id="" class="form-check-input" style="transform:scale(2.5);>
                                        <label class=" form-check-label" for="" style="fontize:10px;">&nbsp;
                                        Jubilado</label>
                                    </div>
                                    <div class="col-xs-12 col-md-4 form-check ">
                                        <input type="checkbox" name="seguro_cesantia_2002" class="form-check-input"
                                            style="transform:scale(2.5);">
                                        <label for="" class="form-check-label" style="font-size:10px">&nbsp; Seg. C
                                            (contrato sea anterior al 02/10/2002).</label>
                                    </div>
                                    <div class="col-xs-12 col-md-3 form-check ">
                                        <input type="checkbox" name="seguro_cesantia_empresarial"
                                            class="form-check-input" style="transform:scale(2.5);">
                                        <label for="" class="form-check-label" style="font-size:10px">&nbsp; Seg. C
                                            (sueldo empresarial).</label>
                                    </div>
                                    <div class="col-xs-12 col-md-3 form-check ">
                                        <input type="checkbox" name="seguro_cesantia_fondo_solidario"
                                            class="form-check-input" style="transform:scale(2.5);">
                                        <label for="" class="form-check-label" style="font-size:10px">&nbsp; Seg. C
                                            (fondo solidario).</label>
                                    </div>
                                </div>
                                <div class="row mb-3 ms-4 mt-5">

                                    <div class="col-xs-12 col-md-3 form-check  ">
                                        <input type="checkbox" name="seguto_invalidez" id="" class="form-check-input"
                                            style="transform:scale(2.5)">
                                        <label class="form-check-label" style="font-size:10px" for="">&nbsp; S.I.S (no
                                            pagar > 65)</label>
                                    </div>

                                    <div class="col-xs-12 col-md-9  ">
                                        <div class="form-inline">
                                            <select name="seguro_centia afp" id="" class="form-control">
                                                <option value="">Seleccion opcion</option>
                                                <option value="capital">Capital</option>
                                                <option value="cuptrum">Cuprum</option>
                                                <option value="habitat">Habitat</option>
                                                <option value="planvital">PlanVital</option>
                                                <option value="Provida">Provida</option>
                                                <option value="modelo">Modelo</option>
                                                <option value="solo_jubilados">Solo jubilados</option>

                                            </select>
                                            <label for="" style="font-size:10px">&nbsp; Seg. C (jubilado invalidez
                                                parcial)</label>

                                        </div>
                                    </div>


                                </div>
                                <div class="row mb-2">

                                    <div class="label">Trabajo Pesado</div>

                                    <div class="col-xs-12 col-md-2  ">
                                        <select name="trabajo_pesado_porcentaje" id="" class="form-control">
                                            <option value="">%</option>
                                            <option value="0.02">2%</option>
                                            <option value="0.04">4%</option>
                                        </select>

                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <select name="trabajo_pesado" id="" class="form-control">
                                            <option value="0" selected="">Seleccionar</option>
                                            <option value="2">Buzo</option>
                                            <option value="8">Camarografo</option>
                                            <option value="7">Conductor</option>
                                            <option value="4">Electromecanico</option>
                                            <option value="6">Jefe Taller</option>
                                            <option value="1">Soldador</option>
                                            <option value="5">Supervisor en Terreno</option>
                                            <option value="3">Tornero</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <select name="mutual" id="" class="form-control">
                                            <option value="">Seleccione mutual</option>
                                            <option value="capital">Capital</option>
                                            <option value="cuptrum">Cuprum</option>
                                            <option value="habitat">Habitat</option>
                                            <option value="planvital">PlanVital</option>
                                            <option value="Provida">Provida</option>
                                            <option value="modelo">Modelo</option>
                                            <option value="solo_jubilados">Solo jubilados</option>

                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3 form-check mt-2">
                                        <input type="checkbox" name="socio_lre" id="" class="form-check-input"
                                            style="transform:scale(2.5);margin-left:15px !important">
                                        <label class="form-check-label" style="font-size:10px;margin-left:40px"
                                            for="">Socio(lre)</label>
                                    </div>


                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Banco</label>
                                        <select name="banco" id="" class="form-control">
                                            <option value="0" selected="">Seleccionar</option>
                                            <option value="46">ABN AMRO</option>
                                            <option value="504">BBVA</option>
                                            <option value="16">BCI</option>
                                            <option value="28">BICE</option>
                                            <option value="1">CHILE</option>
                                            <option value="33">CITIBANK, N.A.</option>
                                            <option value="734">CONOSUR</option>
                                            <option value="55">CONSORCIO</option>
                                            <option value="672">COOPEUCH</option>
                                            <option value="27">CORPBANCA</option>
                                            <option value="43">DE LA NACION ARGENTINA</option>
                                            <option value="507">DESARROLLO</option>
                                            <option value="52">DEUTSCHE BANK</option>
                                            <option value="17">DO BRASIL</option>
                                            <option value="29">EDWARDS</option>
                                            <option value="12">ESTADO</option>
                                            <option value="51">FALABELLA</option>
                                            <option value="54">HNS</option>
                                            <option value="31">HSBC BANK CHILE</option>
                                            <option value="9">INTERNACIONAL</option>
                                            <option value="39">ITAU</option>
                                            <option value="41">JP MORGAN CHASE BANK</option>
                                            <option value="57">PARIS</option>
                                            <option value="56">PENTA</option>
                                            <option value="53">RIPLEY</option>
                                            <option value="37">SANTANDER-CHILE</option>
                                            <option value="14">SCOTIABANK SUD AMERICANO</option>
                                            <option value="49">SECURITY</option>
                                            <option value="45">THE BANK OF TOKYO-MITSUBISHI UFJ, LTD.</option>

                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="">Tipo</label>
                                        <select name="tipo_pago" id="tipo_pago" class="form-control">
                                            <option value="4" selected="">Chequera Electrónica</option>
                                            <option value="1">Cuenta Corriente</option>
                                            <option value="3">Cuenta de Ahorro</option>
                                            <option value="5">Cuenta RUT</option>
                                            <option value="2">Cuenta Vista</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary float-end m-1"> Registrar</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection('content'); ?>