<?php $__env->startSection('content'); ?>


<ul>


<?php $__currentLoopData = $ips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li><a href="/test/<?php echo e($ip); ?>"><?php echo e($ip); ?></a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/Admin/data.blade.php ENDPATH**/ ?>