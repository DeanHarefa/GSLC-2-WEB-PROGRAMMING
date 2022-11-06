<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php $__currentLoopData = $Otomotif_Cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col row-eq-height">
                    <div class="card  text-bg-light mb-3 w-85">
                        <img class="card-img-top img-fluid" src="<?php echo e($car->URL_IMAGE); ?>" alt="<?php echo e($car->name . '-img'); ?>">
                        <div class="card-body">
                            <h5 class="card-title fs-3 text">
                                <?php echo e($car->name); ?>

                            </h5>
                            <p class="card-text"><?php echo e($car->Description); ?></p>
                            <div class="card-footer">
                                <small class="text-dark"><b>Brand: <?php echo e($car->Brand); ?></b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-dark"><b>Price: <?php echo e($car->Price); ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\File Kuliah\Punya stevanus\College-Web-Programming-main\2440045331_Dean Yankris Harefa\resources\views/home.blade.php ENDPATH**/ ?>