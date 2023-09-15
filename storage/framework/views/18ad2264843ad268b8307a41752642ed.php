<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('plugins/datatables/datatables.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

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
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Articulos</h3>
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
                            <div class="card-body">
                                <table id="tb_bodegas" class="table table-hover shadow" style="width:100%">
                                    <thead>
                                        <tr class="bg-success">
                                            <th>ARTICULO</th>
                                            <th>TAG</th>
                                            <th>OEM</th>
                                            <th>EAN</th>
                                            <th>ORIGEN</th>
                                            <th>PRECIO</th>
                                            <th>WEB</th>
                                            <th>ESTADO</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr ondblclick="vbode(<?php echo e($articulo->id); ?>);">
                                                <td><?php echo e($articulo->descripcion); ?> <br> MARCA: <?php echo e($articulo->marca); ?></td>
                                                <td><?php echo e($articulo->tag); ?></td>
                                                <td><?php echo e($articulo->oem); ?></td>
                                                <td><?php echo e($articulo->ean); ?></td>
                                                <td><?php echo e($articulo->origen); ?></td>
                                                <td><?php echo e(number_format($articulo->precio, 0, ',', '.')); ?></td>
                                                <td><?php echo e($articulo->web); ?></td>
                                                <td>
                                                    <?php if($articulo->estado === '1'): ?>
                                                        Activo
                                                    <?php else: ?>
                                                        Inactivo
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->startSection('js'); ?>
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo e(asset('plugins/datatables/datatables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/tableExport.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/jquery.base64.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/html2canvas.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/jspdf/libs/sprintf.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/jspdf/jspdf.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/tableexport/jspdf/libs/base64.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/kallfu.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gerardo Mercier\Desktop\Kallfu-new\resources\views/bodegas/articulos/list.blade.php ENDPATH**/ ?>