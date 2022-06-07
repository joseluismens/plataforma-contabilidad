<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-9 col-xs-12">
            <form action="<?=base_url()?>/empresa/update" method="post">
                <?=csrf_field()?>
                <input type="hidden" name="id" id="id" value="<?php echo $empresa->id; ?>">

                <div class="mb-4">
                    <label for="empresa"> Empresa</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$empresa->nombre;?>">

                </div>
                <div class="mb-4">
                    <label for="rut">Rut</label>
                    <input type="text" class="form-control" name="rut" id="rut" value="<?=$empresa->rut;?>">
                </div>


                <div class="mb-4">
                    <label for="razon_social">Razón social</label>
                    <input type="text" class="form-control" name="razon_social" id="razon_social" required
                        value="<?=$empresa->razon_social;?>" placeholder="Ingrese razón social">
                </div>
                <div class="mb-4 row ">

                    <div class="col-xs-12 col-md-12">
                        <label for="giro">Giro</label>
                        <input type="text" class="form-control" name="giro" id="giro" placeholder="Ingrese giro"
                            value="<?=$empresa->giro;?>" required>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required
                            value="<?=$empresa->email;?>" placeholder="Ingrese email" required>

                    </div>
                </div>
                <div class="mb-4 row ">
                    <div class="col-xs-12 col-md-6">
                        <label for="rep_legal">Represemtante Legal</label>
                        <input type="text" class="form-control" name="rep_legal" id="rep_legal"
                            value="<?=$empresa->rep_legal;?>" placeholder="Ingrese representante legal" required>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="rut_rep_legal">Rut</label>
                        <input type="text" class="form-control" name="rut_rep_legal" id="rut_rep_legal"
                            value="<?=$empresa->rut_rep_legal;?>" placeholder="Ingrese rut de  representante legal"
                            required>
                    </div>

                </div>
                <div class="mb-4 row">
                    <div class="col-xs-12 col-md-6">
                        <label for="rep_legal2">Represemtante Legal</label>
                        <input type="text" class="form-control" name="rep_legal2" id="rep_legal2"
                            value="<?=$empresa->rep_legal2;?>" placeholder="Ingrese representante legal">
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <label for="rut_rep_legal2">Rut </label>
                        <input type="text" class="form-control" name="rut_rep_legal2" id="rut_rep_legal2"
                            value="<?=$empresa->rut_rep_legal2;?>" placeholder="Ingrese rut de  representante legal">
                    </div>
                </div>

                <div class="mb-4 row">
                    <div class="col-xs-12 col-md-6">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion"
                            value="<?=$empresa->direccion;?>" placeholder="Ingrese direccion" required>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="comuna">Comuna</label>
                        <input type="text" class="form-control" name="comuna" id="comuna" placeholder="Ingrese comuna"
                            value="<?=$empresa->comuna;?>" required>
                    </div>

                </div>

                <div class="mb-4 row">
                    <div class="col-xs-12 col-md-6">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingrese ciudad"
                            value="<?=$empresa->ciudad;?>" required>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono"
                            value="<?=$empresa->telefono;?>" placeholder="Ingrese telefono ej:987654321" required>
                    </div>

                </div>
                <div class="mb-4 row ">
                    <div class=" col-xs-12 col-md-6">
                        <label for="mutual">Mutual</label>
                        <select class="form-control" name="mutual" id="mutual" required value="<?=$empresa->mutual;?>">
                            <option value="">SIN MUTUAL (ISL)</option>
                            <option value="1">ASOCIACION CHILENA DE SEGURIDAD</option>
                            <option value="2">MUTUAL DE SEGURIDAD </option>
                            <option value="3">INSTITUTO DE SEGUIRDAD DEL TRABAJO</option>
                        </select>
                    </div>
                    <div class=" col-xs-12 col-md-6">
                        <label for="caja">Factor Mutual</label>
                        <input type="number" class="form-control" name="factor_mutual" id="factor_mutual"
                            value="<?=$empresa->factor_mutual;?>" placeholder="Ingrese fasctor mutual" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="caja_compensacion">Caja de compensación</label>
                    <select name="caja_compensacion" id="caja_compensacion" class="form-control"
                        value="<?=$empresa->caja_compensacion;?>">
                        <option value="">SIN CCAF</option>
                        <option value="1">LOS ANDES</option>
                        <option value="2">LA ARAUCANA</option>
                        <option value="3">LOS HEROES</option>
                        <option value="4">GABRIELA MISTRAL</option>
                        <option value="5">18 DE SEPTIEMBRE</option>



                    </select>
                </div>
                <div class="mb-4">
                    <label for="">Logo</label>
                    <input type="file" src="" alt="" class="form-control" name="logo" value="<?=$empresa->logo;?>">
                </div>
                <button class="btn btn-primary btn-block">Actualizar </button>
            </form>

        </div>
        <div class="col-md-1"></div>
        <div class="col md-2 my-auto">
            <img src="<?=base_url()?>/assets/images/photos/no-image.png" width="100%" alt="">
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>