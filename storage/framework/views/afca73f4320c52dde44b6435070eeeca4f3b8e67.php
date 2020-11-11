<form action="<?php echo e(url('/cliente')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <!-- para seguridad de los datos -->
   
    <label for="RFC"> <?php echo e('RFC'); ?></label>
    <input type="text" name="rfc" id="rfc" value="">
    <br/>

    <label for="Nombre"> <?php echo e('Nombre'); ?></label>
    <input type="text" name="nombre" id="nombre" value="">
    <br/>

    <label for="Edad"> <?php echo e('Edad'); ?></label>
    <input type="number" name="edad" id="edad" value="">
    <br/>
    
    <label for="IdCiudad"> <?php echo e('Id Ciudad'); ?></label>
    <input type="number" name="idciudad" id="idciudad" value="">
    <br/>

    <input type="submit" value="Agregar">


</form>
<?php /**PATH C:\wamp64\www\crud\resources\views/cliente/datos.blade.php ENDPATH**/ ?>