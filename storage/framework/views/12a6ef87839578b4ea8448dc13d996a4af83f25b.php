<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($categoryItem->id ?? ''); ?>"
        <?php if(isset($category->id)): ?>

            <?php if($category->parent_id == $categoryItem->id): ?>
                selected=""
            <?php endif; ?>

            <?php if($category->id == $categoryItem->id): ?>
                disabled=""
            <?php endif; ?>

        <?php endif; ?>
        >

        <?php echo e($delimiter ?? ''); ?> <?php echo e($categoryItem->title ?? ''); ?>

    </option>

     <?php if(isset($categoryItem->children)): ?>
         <?php echo $__env->make('category._categories', [
             'categories' => $categoryItem->children,
             'delimiter' => ' - '.$delimiter
         ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\php\laravel\links\resources\views/category/_categories.blade.php ENDPATH**/ ?>