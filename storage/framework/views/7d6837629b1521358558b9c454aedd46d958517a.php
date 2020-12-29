<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="jumbotron">
                <h3 class="display-4"><?php echo e($page->title); ?></h3>
                <p class="lead"><?php use App\Models\Parse;
                echo Parse::parse ($page->main_content ?? "")?></p>
                <hr class="my-4">
                <h3 class="lead">Author: <?php echo e($page->author); ?></h3>
                <p>Created at: <?php echo e($page->created_at); ?>

                Updated at: <?php echo e($page->updated_at); ?></p>
                
                <?php if($page->key_teg == "author"): ?>
                    <p><a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-warning float-left">#<?php echo e($page->value_teg); ?></button></a></p>
                <?php elseif($page->key_teg == "category"): ?>
                    <p><a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-info">#<?php echo e($page->value_teg); ?></button></a></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/home.blade.php ENDPATH**/ ?>