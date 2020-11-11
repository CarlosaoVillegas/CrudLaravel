<H3>EDITAR CLIENTE</H3>


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
<form action="<?php echo e(url('/cliente/'.$cliente->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>

    <?php echo $__env->make('cliente.form',['modo'=>'editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\crud\resources\views/cliente/edit.blade.php ENDPATH**/ ?>