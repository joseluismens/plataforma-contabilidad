<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="contanier mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Registro de empresa</h5>

                    <form action="<?=base_url()?>/index.php/empresa/add" method="post">
                        <div class="mb-3">
                            <?=csrf_field()?>
                            <label for="nombre">Nombre empresa</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la empresa" required>
                        </div>
                        <div class="mb-3">
                            <label for="razon_social">Razón Social</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingrese la razón social" required>
                        </div>

                        <button type="submit" class="btn btn-primary"> Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>

