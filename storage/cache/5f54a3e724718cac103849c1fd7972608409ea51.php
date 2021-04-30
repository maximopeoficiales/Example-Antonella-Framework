<?php echo e($dato); ?>



<?php $__env->startSection('title',"Algun titulo :D"); ?>
<?php $__env->startSection('content'); ?>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam commodi autem ratione impedit harum, eveniet similique sit, laborum ut rerum, tenetur nulla modi ullam consectetur vel. Sapiente explicabo quis accusamus?</p>
    <?php echo $__env->make('helpers.saludo',["nombre"=>"Chicho proyectos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
        echo "<br>esto es php puro";
    ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/plugins/mi-custom-post-type-computers/resources/views/index.blade.php ENDPATH**/ ?>