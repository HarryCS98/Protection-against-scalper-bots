<?php $__env->startSection('content'); ?>

    <mousemovementlogging></mousemovementlogging>
    <?php if($product != null): ?>

    <div class="container pt-4" style="background-color: white;">

        <div class="row">

            <div class="col-6">

                <img class="card-img-top" src="<?php if($product->Image != null): ?> <?php echo e(URL::asset('img/Product_images/'. $product->Image)); ?> <?php else: ?> <?php echo e(asset('img/Product_images/no_image.png')); ?> <?php endif; ?> ">

            </div>


            <div class="col-6">


                <div class="row">


                    <div class="col-12 mt-4">

                        <h3><?php echo e($product->Brand); ?></h3>

                    </div>

                    <div class="col-12 mt-2">


                        <h4><?php echo e($product->Product_Name); ?></h4>

                    </div>

                    <hr/>

                    <div class="col-12">

                        <ul class="list-inline">
                            <li class="list-inline-item">&bull; <?php echo e($product->Generation); ?> Generation</li>
                            <li class="list-inline-item">&bull; <?php echo e($product->Size); ?> Size</li>
                            <li class="list-inline-item">&bull; <?php echo e($product->Speed); ?> MHz RAM Speed</li>
                            <li class="list-inline-item">&bull; C<?php echo e($product->Timings); ?> Timings</li>
                        </ul>

                    </div>


                    <div class="col-12 mt-5 text-center pt-4 align-middle" style="background-color: #7a7979">
                        <form method="post" action="" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <ul class="list-inline">

                            <li class="list-inline-item align-middle pr-4">

                                <h3 class="mb-0">£<?php echo e($product->Price); ?></h3>
                                <input type="hidden" name="Product_id" value="<?php echo e($product->id); ?>">
                            </li>

                            <li class="list-inline-item pr-4">

                                <div class="dropdown">
                                    <div class="number-input md-number-input">
                                        <input class="quantity width-reduce border-0" min="0" name="quantity" value="1" type="number">
                                    </div>
                                </div>

                            </li>


                            <li class="list-inline-item">

                                <button  type="submit" class="btn btn-primary">Add to Basket</button>

                            </li>


                        </ul>

                            </form>
                    </div>



                    <div class="col-12 text-center mt-3">


                        <ul class="list-inline">

                            <li class="list-inline-item"><img class="img-fluid" src="<?php echo e(asset('img/Paypal.png')); ?>"> </li>
                            <li class="list-inline-item"><img class="img-fluid" src="<?php echo e(asset('img/Visa.png')); ?>"> </li>
                            <li class="list-inline-item"><img class="img-fluid" src="<?php echo e(asset('img/MasterCard.png')); ?>"> </li>



                        </ul>



                    </div>



                </div>


            </div>


        </div>

        <hr/>

        <div class="row pb-3">

            <div class="col-12 text-center">
                <h1 class="font-weight-bold">Other Products like this</h1>
            </div>

            <div class="col-4 border-right">
                <img class="img-fluid" src="https://via.placeholder.com/400">
            </div>

            <div class="col-4 border-right">
                <img class="img-fluid" src="https://via.placeholder.com/400">
            </div>


            <div class="col-4">
                <img class="img-fluid" src="https://via.placeholder.com/400">
            </div>

        </div>

    </div>

    <?php else: ?>

        <div class="container" style="height: 100vh">

            <div class="row">

                <div class="col text-center">

                    <h1 class="font-weight-bold text-danger pt-5"> Sorry this product does not exist </h1>

                    <a class="btn btn-danger" style="width: 20vw" href="<?php echo e(route('home')); ?>">Home</a>
                </div>

            </div>

        </div>

    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/Products/RAM_item.blade.php ENDPATH**/ ?>