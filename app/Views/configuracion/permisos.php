<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="container mt-4">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Asignar Permiso (<?=$rol['nombre']?>)</h3>
                </div>
                <div class="card-body">
                    <form action="POST">
                        <?= csrf_field() ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Módulo</td>
                                    <td>Caracterísitca</td>
                                    <td>Vista</td>
                                    <td>Añadir</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                            </thead>
                        </table>

                        <buttton class="btn btn-primary float-end ">Actualizar</buttton>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>