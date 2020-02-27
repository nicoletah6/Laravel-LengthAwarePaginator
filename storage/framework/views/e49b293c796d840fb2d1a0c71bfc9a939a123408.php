<?php $__env->startSection('content'); ?>

<div class="main">
    <section class="products-page">
        <div class="centered-section">
        <form class="search-container" method="get" action="<?php echo e(action('HomeController@search')); ?>">
            <input type='text' name="string">
            <div class="header-right-icon">
                <button type="submit" class="searchButton"><img src="images/icon-search-green.png" alt="icon search"></button>
            </div>
        </form>
            <div class="product-list-container">

            <?php echo $__env->make('parts.products_sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="products-pagination-container">
                <div class="produse-container three-on-row">
                    <?php $__currentLoopData = $paginator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="produc-item-container">
                    <div class="product-image-container">
                        <a href="">
                        <?php echo e($product['name']); ?>

                        </a>
                    </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php echo e($paginator->links()); ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\project-pagination\resources\views/index.blade.php ENDPATH**/ ?>