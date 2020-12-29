

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Create page')); ?></div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.pages.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                       <?php echo $__env->make('admin.pages._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/admin/pages/create.blade.php ENDPATH**/ ?>