

<?php $__env->startSection('content'); ?>
<h1>list page</h1>


<div>
    <ul>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><span><?php echo e($u->id); ?></span> <span><?php echo e($u->name); ?></span> <span><?php echo e($u->email); ?></span></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hiii\Desktop\laravel\project\resources\views/userlist.blade.php ENDPATH**/ ?>