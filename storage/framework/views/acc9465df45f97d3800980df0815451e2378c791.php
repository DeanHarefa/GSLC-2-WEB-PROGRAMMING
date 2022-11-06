<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <section class="mt-5 container">
        <?php if(count($Otomotif_Cars) < 1): ?>
            <h1>No Data Car</h1>
        <?php else: ?>
            <div class="row p-md-6 ">
                <?php $__currentLoopData = $Otomotif_Cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 350px;">
                        <div class="d-flex justify-content-center p-4">
                            <img class="card-img-top" src="<?php echo e($car->URL_IMAGE); ?>" alt="car-img" style="width: 300px; height: 180px; border-radius: 5px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text"><?php echo e($car->Brand); ?></h2>
                            <div class="pivot">
                                <p class="card-text"><?php echo e($car->Description); ?></p>
                            </div>
                            <p class="card-text btn btn-danger"><?php echo e($car->Price); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>





    </section>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\File Kuliah\Semester 5\Web Programming\LEC\GSLC\GSLC 1 WEB PROG 2440045331\2440045331_Dean Yankris Harefa\resources\views/home.blade.php ENDPATH**/ ?>