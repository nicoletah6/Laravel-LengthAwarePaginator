<div class="products-navigation-container">
  <div class="title">Title</div>
  <ul>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($category !== null &&( $category->id == $categ->id) ): ?>
        <li class="products-selected-menu-item">
          <a href="list/<?php echo e($categ->id); ?>">
            <img src="images/icon-arrow-right-green.png" alt="icon arrow right"> <?php echo e($categ->name); ?>(<?php echo e($categ->products_count); ?>)
          </a>
        </li>
      <?php else: ?>
        <li><a href="list/<?php echo e($categ->id); ?>"><?php echo e($categ->name); ?>(<?php echo e($categ->products_count); ?>)</a></li>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div><?php /**PATH C:\xampp\project-pagination\resources\views/parts/products_sidenav.blade.php ENDPATH**/ ?>