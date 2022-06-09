
<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="contanier mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center"> Empleados de  <?=$empresa->nombre?></h5>
                    
                    <a href="<?=base_url()?>/index.php/nuevoEmpleado/<?=$empresa->id?>" class="btn btn-info float-end mb-3">Nuevo Empleado</a>
                    <table class="table  table-condensed table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Rut</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($empleados)>0){foreach($empleados as $key=>$value){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$value->nombres?> <?=$value->paterno?> <?=$value->materno?></td>
                                <td><?=$value->rut?></td>
                                <td><?=$value->email?></td>
                                <td><?=$value->telefono?></td>
                                <td>
                                    <a href="<?=base_url()?>/empleado/<?=$value->id?>" class="btn btn-sm btn-secondary"><i class="fa fa-info"></i> </a>
                                    <a href="<?=base_url()?>/empleado/eliminar/<?=$value->id?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>

                                </td>

                            </tr> 
                            <?php }}?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>

