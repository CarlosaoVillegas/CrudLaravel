<H3>REGISTRAR CLIENTE</H3>


<?php $__env->startSection('content'); ?>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
     <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li> <?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    
</div>
<?php endif; ?>

<form action="<?php echo e(url('/cliente')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <!-- para seguridad de los datos -->
    <?php echo $__env->make('cliente.form',['modo'=>'crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\crudla\resources\views/cliente/crear.blade.php ENDPATH**/ ?>