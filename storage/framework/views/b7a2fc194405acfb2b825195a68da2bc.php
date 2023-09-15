<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Bodegas</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form class="form-horizontal" action="<?php echo e(route('bodega.mod')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <?php $__currentLoopData = $bodega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bodega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="bodega" class="col-sm-2 col-form-label">Bodega</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="bodega" name="bodega"
                                                        value="<?php echo e($bodega->bodega); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="estado" id="estado">
                                                        <?php if($bodega->estado === 1): ?>
                                                            <option value="1">Activa</option>
                                                            <option value="2">Inactiva</option>
                                                        <?php else: ?>
                                                            <option value="2">Inactiva</option>
                                                            <option value="1">Activa</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" id="id" name="id"
                                            value="<?php echo e($bodega->id); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="card-footer pull-right">
                                    <button type="button" class="btn btn-default"
                                        onclick="location.href='/bodegas'">Cerrar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gerardo Mercier\Desktop\Kallfu-new\resources\views/bodegas/bodegas/edit.blade.php ENDPATH**/ ?>