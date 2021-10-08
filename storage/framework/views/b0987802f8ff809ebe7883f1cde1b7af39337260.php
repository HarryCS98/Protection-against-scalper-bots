<?php $__env->startSection('content'); ?>


    <mousemovementlogging></mousemovementlogging>

    
    <?php $count = 0; ?>



    <div class="container" style="background-color: white; height: 100vh">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>

                    </tr>
                    </thead>
                    <tbody>


                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <img class="media-object mr-3"
                                         src="<?php if($product->associatedModel->Image != null): ?> <?php echo e(URL::asset('img/Product_images/'. $product->associatedModel->Image)); ?> <?php else: ?> <?php echo e(asset('img/Product_images/no_image.png')); ?> <?php endif; ?>"
                                         style="width: 72px; height: 72px;">
                                    <div class="media-body">
                                        <h4 class="media-heading"> <?php echo e($product->associatedModel->Brand); ?> </h4>
                                        <h5 class="media-heading"> <?php echo e($product->name); ?></h5>
                                    </div>
                                </div>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo e($product->quantity); ?></strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>£<?php echo e($product->price); ?></strong></td>
                            <?php $count = $count + $product->price ?>
                            <td>  </td>

                            <td class="col-sm-1 col-md-1">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="Product_id" value="<?php echo e($product->id); ?>">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>£<?php echo e($count); ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Estimated shipping</h5></td>
                        
                        <td class="text-right"><h5><strong>£7.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>£<?php echo e($count + 7); ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(route('Checkout')); ?>">Checkout</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/basket.blade.php ENDPATH**/ ?>