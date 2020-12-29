<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
           <nav class="navbar navbar-dark bg-dark">
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM `pages` WHERE `value_teg` LIKE '$value' ORDER BY `id` ASC");
                    while($rowe = mysqli_fetch_assoc($query)) {
                        $page=App\Models\Page::find($rowe['id']);
                    if($page->alias_of != NULL) continue;?>
                    <div class="card" style="width: 70rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($page->title); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Author: <?php echo e($page->author); ?></h6>
                            <hr>
                            <p class="card-subtitle mb-2 text-muted">Created at: <?php echo e($page->created_at); ?></p>
                            <p class="card-subtitle mb-2 text-muted">Updated at: <?php echo e($page->updated_at); ?></p>
                            <a href="<?php echo e(url("$page->path")); ?>"><button type="button" class="btn btn-info">View page</button></a>
                        </div>
                    </div>
                <?php } ?>
            </nav>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/search.blade.php ENDPATH**/ ?>