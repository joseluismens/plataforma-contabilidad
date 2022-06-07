<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Listado de Empresas
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-condensed table-striped datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Razon social</th>
                                <th>Rut</th>
                                <th>Representante Legal</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  if (count($empresas)>0) { foreach ($empresas as $key => $value) {?>
                                <tr>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['nombre']?></td>
                                    <td><?=$value['razon_social']?></td>
                                    <td><?=$value['rut']?></td>
                                    <td><?=$value['rep_legal']?></td>
                                    <td><a href="<?=base_url()?>/empresa/modificar/<?=$value['id']?>" class="btn btn-sm btn-secondary"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?=base_url()?>/empleados/<?=$value['id']?>" class="btn btn-sm btn-info"><i class="fa fa-users"></i></a></td>


                                </tr>
                            <?php } }?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>
