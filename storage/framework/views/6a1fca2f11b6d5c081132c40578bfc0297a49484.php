

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="<?php echo e(route('admin.pages.create')); ?>">
                <button type="button" class="btn btn-success btn-lg">Add new page
                </button>
                <a href="<?php echo e(url('admin/pages/defl')); ?>" style="margin-left:49%"><button type="submit" class="btn btn-outline-dark">                         Default </button></a>
                    <a href="<?php echo e(url('admin/pages/sorted')); ?>"><button type="submit" class="btn btn-outline-dark">                         Sorted </button></a>
                    <a href="<?php echo e(url('admin/pages/created')); ?>"><button type="submit" class="btn btn-outline-dark">                         Created </button></a>
                    <a href="<?php echo e(url('admin/pages/updated')); ?>"><button type="submit" class="btn btn-outline-dark">                         Updated </button></a>
            </a>
            <div class="card">
                <div class="card-header"><?php echo e(__('Pages')); ?></div>
                <div class="card-body">
                               <?php
                            $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY id");
                            if(str_contains(url()->current(), "sorted")){
                               $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY title");
                            }
                            if(str_contains(url()->current(), "defl")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY id");
                            }
                            if(str_contains(url()->current(), "created")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY created_at");
                            }
                            if(str_contains(url()->current(), "updated")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY updated_at");
                            }
                        while($rowe = mysqli_fetch_assoc($query)) {
                        $page=App\Models\Page::find($rowe['id']);?>

                    <div class="card" style="width: 55rem;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo e($page->title); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: <?php echo e($page->author); ?></h6>
                        <p class="card-text"><?php echo e($page->main_content); ?></p>
                        <hr>
                        <p class="card-subtitle mb-2 text-muted">Created at: <?php echo e($page->created_at); ?></p>
                        <p class="card-subtitle mb-2 text-muted">Updated at: <?php echo e($page->updated_at); ?></p>
                        <div class="card-body" style="height: 5rem;">
                        <?php if($page->key_teg == "author"): ?>
                        <a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-warning float-left">#<?php echo e($page->value_teg); ?></button></a>
                        <?php elseif($page->key_teg == "category"): ?>
                        <a href="<?php echo e(url("admin/pages/search/$page->value_teg")); ?>"><button type="button" class="btn btn-info">#<?php echo e($page->value_teg); ?></button></a>
                        <?php endif; ?>
                        </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-pages')): ?>
                                        <a href="<?php echo e(route('admin.pages.edit', $page->id)); ?>"><button type="button" class="btn btn-warning float-left">
                                            Edit page
                                        </button></a>
                                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-pages')): ?>
                                        <form action="<?php echo e(route('admin.pages.destroy' , $page)); ?>" method="POST" class="float-left">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" class="btn btn-danger">
                                                Delete page
                                            </button>
                                        </form>
                                        <?php endif; ?>
                                        <a href="<?php echo e(url("$page->path")); ?>"><button type="button" class="btn btn-info">
                                            View page
                                        </button></a>
                      </div>
                                    </div>
                                     <?php } ?>






            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/admin/pages/index.blade.php ENDPATH**/ ?>