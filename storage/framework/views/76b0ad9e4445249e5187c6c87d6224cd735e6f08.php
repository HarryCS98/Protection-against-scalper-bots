<?php $__env->startSection('content'); ?>



<div class="page-wrap d-flex flex-row align-items-center pt-5">
    <div class="container vh-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">Error 403</span>
                <div class="mb-4 lead"><h1>You have been caught using a scalper bot</h1> <br /><h2>Your ip  has been banned if you think this is a mistake contact us at support@ushop.com <br /> <br /> <b>DEBUG ONLY FOR DEMO Reason why the user was banned "<?php echo e($reason); ?>"</b></h2> </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/AntiBot/BannedErrorPage.blade.php ENDPATH**/ ?>