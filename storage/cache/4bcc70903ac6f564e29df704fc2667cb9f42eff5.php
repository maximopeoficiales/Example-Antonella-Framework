<?php
    $urlimagen= asset("img/imagen.jpg");
    echo $urlimagen;
    echo "<br>";
    echo path();
?>

<div class="">
    <img src="<?php echo e($urlimagen); ?>" alt="" srcset="" width="400px">
</div>

<form method="post">
    <div class="form-group">
      <label for="cambiar_fuente">Ingrese su respuesta</label>
      <input type="text"
        class="form-control" name="cambiar_fuente" id="cambiar_fuente" aria-describedby="helpId" placeholder="" value="<?php echo e($cambiar_fuente); ?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
</form><?php /**PATH /var/www/html/wp-content/plugins/mi-custom-post-type-computers/resources/views/form-admin.blade.php ENDPATH**/ ?>