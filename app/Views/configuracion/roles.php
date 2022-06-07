<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class=" col-xs-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Nuevo Rol</h5>

                </div>
                <?php if(isset($validation)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                </div>
                <?php } ?>
                <form action="<?=base_url()?>/index.php/configuracion/nuevoRol" method="POST">
                    <?= csrf_field() ?>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre">Nombre <span style="color:red">*</span></label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class=" col-xs-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Listado de Roles</h3>
                </div>
                <div class="card-body">

                    <table  class="table table-condensed table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th>Tipo</th>
                                <th>Acción</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php foreach ($roles as $rol) {?>
                                <tr>
                                    <td><?=$rol['nombre']?></td>
                                    <td><?=$rol['is_system'] == 1 ? 'Sistema' : 'Personalizado' ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-pencil-square-o"></i></button>
                                        <a href="<?=base_url()?>/index.php/configuracion/permisos/<?=$rol['id']?>" class="btn btn-sm btn-primary"> <i class="fa fa-ticket"></i></a>

                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection('content'); ?>