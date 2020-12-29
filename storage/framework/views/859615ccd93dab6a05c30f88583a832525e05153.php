<?php if(str_contains(url()->current(), "home")): ?>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($category->children->count()): ?>
      <li class="nav-item dropdown" style="margin-left:65px">
      <div><?php echo e($category->title ?? ''); ?></div>
      <div>
            <?php if(isset($category->children)): ?>
             <?php echo $__env->make('layouts._menu', [
             'categories' => $category->children,
             'is_child' => ""
         ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php endif; ?>

        <?php else: ?>
          <?php if(isset($is_child)): ?>

              <a class="nav-link dropdown-item" style="margin-left:5px" href="<?php echo e(url("category/categor/$category->id")); ?>">-<?php echo e($category->title ?? ''); ?></a>
              <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($people->categorry_id == $category->id): ?>
                    <a class="nav-link dropdown-item" style="margin-left:32px" href="<?php echo e(url("$people->path")); ?>"><?php echo e($people->title); ?></a>
                
                <?php if($people->alias_of != NULL): ?>
                <?php 
                  $newpage=App\Models\Page::find($people->alias_of);
                  ?>
                  <a class="nav-link dropdown-item" style="margin-left:32px" href="<?php echo e(url("$people->path")); ?>">
                  <?php echo e($newpage->title); ?>

                  </a>
                <?php endif; ?>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <p>
              <?php continue; ?>

          <?php endif; ?>

          </div>
      </li>

    <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php /**PATH C:\xampp\php\laravel\links\resources\views/layouts/_menu.blade.php ENDPATH**/ ?>