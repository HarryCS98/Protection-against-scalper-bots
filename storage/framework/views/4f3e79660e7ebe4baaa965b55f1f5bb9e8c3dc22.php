<?php $__env->startSection('content'); ?>


        <?php if (! empty(trim($__env->yieldContent('products')))): ?>

            <div class="container pt-5 pb-5 min-vh-100">


            <div class="row">


                <div class="col">

                    <div class="card-group">

                        <?php echo $__env->yieldContent('products'); ?>


                    </div>

                </div>


            </div>


            </div>

        <?php endif; ?>







    <?php if (empty(trim($__env->yieldContent('products')))): ?>

    <div class="container" style="height: 100vh">

        <div class="row">

            <div class="col text-center">

                <h1 class="font-weight-bold text-danger pt-5"> Sorry no products available in this category </h1>

                <a class="btn btn-danger" style="width: 20vw" href="<?php echo e(url()->previous()); ?>">Back</a>
            </div>

        </div>

    </div>

    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/layouts/Product_list.blade.php ENDPATH**/ ?>