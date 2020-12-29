<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
           <nav class="navbar navbar-dark bg-dark">
               <?php foreach($pages as $page){ 
                if($page->alias_of != NULL) continue;?>
                    <div class="card" style="width: 70rem;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo e($page->title); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: <?php echo e($page->author); ?></h6>
                        <hr>
                        <p class="card-subtitle mb-2 text-muted">Cteated at: <?php echo e($page->created_at); ?></p>
                        <p class="card-subtitle mb-2 text-muted">Updated at: <?php echo e($page->updated_at); ?></p>
                        <?php if($page->key_teg == "author"): ?>
                        <a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-warning float-left">#<?php echo e($page->value_teg); ?></button></a>
                        <?php elseif($page->key_teg == "category"): ?>
                        <a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-info">#<?php echo e($page->value_teg); ?></button></a>
                        <?php endif; ?>

                        <a href="<?php echo e(url("$page->path")); ?>"><button type="button" class="btn btn-info">                              View page
                                        </button></a>
                      </div>
                                    </div>
                <?php } ?>
            </nav>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/sorry.blade.php ENDPATH**/ ?>