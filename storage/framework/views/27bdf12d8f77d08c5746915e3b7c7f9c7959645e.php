<?php $__env->startSection('products'); ?>




    <?php $count = 0 ?>


    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <div class="card" style="max-width: 22rem">

            <img class="card-img-top" src="<?php if($product->Image != null): ?> <?php echo e(URL::asset('img/Product_images/'. $product->Image)); ?> <?php else: ?> <?php echo e(asset('img/Product_images/no_image.png')); ?> <?php endif; ?> ">

            <div class="card-body">

                <h4 class="card-title font-weight-bold text-capitalize"><?php echo e($product->Brand . " "); ?><a href="/category/CPU/<?php echo e($product->id); ?>"><?php echo e($product->Product_Name); ?></a></h4>

                <ul class="list-inline">
                    <li class="list-inline-item">&bull; <?php echo e($product->Clock_Speed); ?>Hz Clock Speed</li>
                    <li class="list-inline-item">&bull; <?php echo e($product->Cores); ?> Cores</li>
                    <li class="list-inline-item">&bull; <?php echo e($product->Threads); ?> Threads</li>
                    <li class="list-inline-item">&bull; <?php echo e($product->L3_Cache); ?>mb of L3 Cache</li>
                    <li class="list-inline-item">&bull; <?php echo e($product->Process_Node); ?>nm Process Node</li>
                </ul>

                <p class="card-text lead pt-md-3 mb-0 ">£<?php echo e($product->Price); ?></p>


                <hr class="mt-0 pl-3"/>

                <button class="btn btn-primary">ADD TO BASKET</button>

            </div>

        </div>

        

        <?php
        $count++;

        if($count % 3 == 0){
            echo '</div>';
            echo '<div class="card-group">';
        }

        ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Product_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/Products/CPU.blade.php ENDPATH**/ ?>