    <div class="form-group">
        <label for="RFC" class="control.label"> <?php echo e('RFC'); ?></label>
        <?php if(isset($cliente->rfc)): ?>
            <input disabled type="text" class="form-control  
            <?php echo e($errors->has('rfc')?'is-invalid':''); ?>" name="rfc" id="rfc" 
            value="<?php echo e(isset($cliente->rfc)?$cliente->rfc:old('rfc')); ?>">
        <?php else: ?>
        <input  type="text"  class="form-control <?php echo e($errors->has('rfc')?'is-invalid':''); ?>"  name="rfc" id="rfc" 
            value="<?php echo e(isset($cliente->rfc)?$cliente->rfc:old('rfc')); ?>">
        <?php endif; ?>
    </div>
    <!-- isset  si ? entonces     : de lo contrario -->
    <!-- <?php echo e($errors->has('rfc')?'is-invalid':''); ?> -->
    
    <div class="form-group">
        
        <label for="Nombre" class="control.label"> <?php echo e('Nombre'); ?></label>
        <input type="text" class="form-control <?php echo e($errors->has('nombre')?'is-invalid':''); ?>" name="nombre" id="nombre" 
        value="<?php echo e(isset($cliente->nombre)?$cliente->nombre:old('nombre')); ?>">
    </div>
    <div class="form-group">
        
        <label for="Edad" class="control.label"> <?php echo e('Edad'); ?></label>
        <input type="number" class="form-control <?php echo e($errors->has('edad')?'is-invalid':''); ?>" name="edad" id="edad" 
        value="<?php echo e(isset($cliente->edad)?$cliente->edad:old('edad')); ?>">
    </div>
    <div class="form-group">
        
        <label for="IdCiudad" class="control.label"> <?php echo e('Id Ciudad'); ?></label>
        <input type="number" class="form-control <?php echo e($errors->has('idciudad')?'is-invalid':''); ?>" name="idciudad" id="idciudad" 
        value="<?php echo e(isset($cliente->idciudad)?$cliente->idciudad:old('idciudad')); ?>">
    </div>
    
    <input type="submit" class="btn btn-success" value="<?php echo e($modo=='crear' ? 'Agregar datos': 'Modificar datos'); ?>">
    <a class="btn btn-dark" href="<?php echo e(url('cliente')); ?>">Regresar</a>

  <?php /**PATH C:\wamp64\www\crud\resources\views/cliente/form.blade.php ENDPATH**/ ?>