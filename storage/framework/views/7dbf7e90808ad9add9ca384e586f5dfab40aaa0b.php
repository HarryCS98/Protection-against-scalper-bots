<?php $__env->startSection('content'); ?>



    <div class="container" style="background-color: white">

        <div class="row" >

            <div class="col-4 text-center pt-5">

                <img src="https://via.placeholder.com/250">

            </div>


            <div class="col-8">

                <div class="row mt-4">

                    
                    <div class="col-12 text-center mb-2">
                        <h2>Title of the Product</h2>

                    </div>


                    <hr/>

                    <div class="col-12 text-center mt-2 mb-2">

                        <p class="text-justify ml-lg-5 mr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae blanditiis, doloremque
                            esse explicabo facilis incidunt ipsam ipsum minima molestiae nulla odit optio quae reiciendis
                            saepe sed suscipit, ullam voluptatem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae blanditiis, doloremque
                            esse explicabo facilis incidunt ipsam ipsum minima molestiae nulla odit optio quae reiciendis
                            saepe sed suscipit, ullam voluptatem.</p>

                    </div>

                    <hr/>



                    <div class="col-12 text-center mt-2 mb-2">

                        <ul class="list-inline">

                            <li class="list-inline-item">
                                <p class="font-weight-bold">Options:</p>
                            </li>

                            <li class="list-inline-item">
                                <div class="btn btn-primary">250GB</div>
                            </li>

                            <li class="list-inline-item">
                                <div class="btn btn-primary">500GB</div>
                            </li>

                            <li class="list-inline-item">
                                <div class="btn btn-primary">1TB</div>
                            </li>

                            <li class="list-inline-item">
                                <div class="btn btn-primary">2TB</div>
                            </li>



                        </ul>

                    </div>

                    <hr/>

                    <div class="col-12 text-center mt-2">

                        <ul class="list-inline">

                            <li class="list-inline-item">
                                <p>£100</p>
                            </li>

                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <div class="number-input md-number-input">
                                        <button class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                                        <input class="quantity width-reduce border-0" min="0" name="quantity" value="1" type="number">
                                        <button class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item">
                                <div class="btn btn-primary">Add to Basket</div>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>


        </div>

        <div class="row">

        <div class="col-12 mt-4 text-center">
            <h3 class="font-weight-bold">Specification</h3>
        </div>

            <hr/>

         <div class="col-12">

             <div class="row">


                 <div class="col-6">

                     <div class="row">

                         <div class="col-12 text-center">
                             <p class="font-weight-bold">Spec 1 :</p>
                         </div>

                         <div class="col-12 text-center">
                             <p class="font-weight-bold">Spec 1 :</p>
                         </div>

                         <div class="col-12 text-center">
                             <p class="font-weight-bold">Spec 1 :</p>
                         </div>

                         <div class="col-12 text-center">
                             <p class="font-weight-bold">Spec 1 :</p>
                         </div>

                     </div>

                 </div>


                 <div class="col-6">


                     <div class="row">

                         <div class="col-12">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error incidunt laborum modi, nam pariatur quasi</p>
                         </div>

                         <div class="col-12">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error incidunt laborum modi, nam pariatur quasi</p>
                         </div>

                         <div class="col-12">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error incidunt laborum modi, nam pariatur quasi</p>
                         </div>
                     </div>


                 </div>

             </div>

         </div>


        </div>

        <div class="row mt-4">


            <div class="col">
                <img src="https://via.placeholder.com/150">
            </div>

            <div class="col">
                <img src="https://via.placeholder.com/150">
            </div>

            <div class="col">
                <img src="https://via.placeholder.com/150">
            </div>

            <div class="col">
                <img src="https://via.placeholder.com/150">
            </div>

            <div class="col">
                <img src="https://via.placeholder.com/150">
            </div>

        </div>


    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dissertation\resources\views/product.blade.php ENDPATH**/ ?>