

<?php $__env->startSection('content'); ?>


<?php if(Session::has('Mensaje')): ?>
    <div class="alert alert-success" role="aler">
    <?php echo e(Session::get('Mensaje')); ?>

    </div>
<?php endif; ?>

<br>

<a href="<?php echo e(url('cliente/create')); ?>" class="btn btn-primary">Agregar Cliente</a>
<br>
<br>

<table class="table table-light table-hover" >
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RFC</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>IdCiudad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    <?php $__currentLoopData = $clientest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($cliente->rfc); ?></td>
                <td><?php echo e($cliente->nombre); ?></td>
                <td><?php echo e($cliente->edad); ?></td> 
                <td><?php echo e($cliente->idciudad); ?></td>
                <td>
                     <a class="btn btn-secondary" href="<?php echo e(url('/cliente/'.$cliente->id.'/edit')); ?>">
                     Editar
                    <!-- <button>Editar</button>  -->
                    </a>
                    
                
                    <form method="post" action="<?php echo e(url('/cliente/'.$cliente->id)); ?>" style="display:inline;">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <button class="btn btn-danger"  type="submit" onclick="return confirm('¿Desea borrar?');" > Borrar</button>
                    </form>
                </td>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($clientest->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\crudla\resources\views/cliente/index.blade.php ENDPATH**/ ?>