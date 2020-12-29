

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Create page')); ?></div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.pages.store')); ?>" method="POST">
                       <div class="form-group">
                            <label for="inputPath">Path</label>
                            <input type="text" name="path" class="form-control" id="inputPath" required minlength="5">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" required minlength="5">
                        </div>
                        <div class="form-group">
                            <label for="inputContent">Text</label>
                            <textarea class="form-control" name="main_content" id="inputContent" rows="3" required minlength="20"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAuthor">Author</label>
                            <input type="text" class="form-control" name="author" id="inputAuthor" required minlength="5">
                        </div>

                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('POST')); ?>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/admin/users/create.blade.php ENDPATH**/ ?>