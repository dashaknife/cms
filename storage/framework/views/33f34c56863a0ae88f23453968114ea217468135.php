

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <a href="<?php echo e(route('admin.pages.create')); ?>">
                <button type="button" class="btn btn-success btn-lg">Add new page
                </button>
            </a>
            <div class="card">
                <div class="card-header"><?php echo e(__('Pages')); ?></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Path</th>
                                <th scope="col">Title</th>
                                <th scope="col">Text</th>
                                <th scope="col">Author</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($page->id); ?></th>
                                    <td><?php echo e($page->path); ?></td>
                                    <td><?php echo e($page->title); ?></td>
                                    <td><?php echo e($page->main_content); ?></td>
                                    <td><?php echo e($page->author); ?></td>
                                    <td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-pages')): ?>
                                        <a href="<?php echo e(route('admin.pages.edit', $page->id)); ?>"><button type="button" class="btn btn-primary float-left">

                                        </button></a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-pages')): ?>
                                        <form action="<?php echo e(route('admin.pages.destroy' , $page)); ?>" method="POST" class="float-left">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" class="btn btn-danger">

                                            </button>

                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/admin/users/index.blade.php ENDPATH**/ ?>