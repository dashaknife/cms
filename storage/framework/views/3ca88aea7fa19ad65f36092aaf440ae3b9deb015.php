

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Edit category')); ?></div>
                <div class="card-body">
                    <form action="<?php echo e(route('category.update', $category)); ?>" method="POST">
                         <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                       <?php echo $__env->make('category._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/category/edit.blade.php ENDPATH**/ ?>