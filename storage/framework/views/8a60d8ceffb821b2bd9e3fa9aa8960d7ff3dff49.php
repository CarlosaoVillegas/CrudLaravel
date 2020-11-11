

<?php $__env->startSection('content'); ?>


<?php if(Session::has('Mensaje')): ?>
    <div class="alert alert-success" role="aler">
    <?php echo e(Session::get('Mensaje')); ?>

    </div>
<?php endif; ?>

<br>
<!-- ---------------------------------- -->
<nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <input name="Search" class="form-control mr-sm-2" type="search" placeholder="Buscar por RFC" aria-label="Search">

       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav> 
<br>
<a href="<?php echo e(url('cliente/create')); ?>" class="btn btn-primary">Agregar Cliente</a>
<br>
<!-- ----------------------------------------- -->

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
    <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($clientet->rfc); ?></td>
                <td><?php echo e($clientet->nombre); ?></td>
                <td><?php echo e($clientet->edad); ?></td> 
                <td><?php echo e($clientet->idciudad); ?></td>
                <td>
                     <a class="btn btn-secondary" href="<?php echo e(url('/cliente/'.$clientet->rfc.'/edit')); ?>">
                     Editar
                    <!-- <button>Editar</button>  -->
                    </a>
                    
                
                    <form method="post" action="<?php echo e(url('/cliente/'.$clientet->rfc)); ?>" style="display:inline;">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <button class="btn btn-danger"  type="submit" onclick="return confirm('¿Desea borrar?');" > Borrar</button>
                    </form>
                </td>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($cliente->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyectolaravel2\resources\views/cliente/index.blade.php ENDPATH**/ ?>