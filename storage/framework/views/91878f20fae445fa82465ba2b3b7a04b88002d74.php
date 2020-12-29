

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="<?php echo e(route('category.create')); ?>">
                <button type="button" class="btn btn-success btn-lg">Add new category

                </button>
            </a>
            <div class="card">
                <div class="card-header"><?php echo e(__('Categories')); ?></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>

                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($category->id); ?></th>
                                    <td><?php echo e($category->title ?? ''); ?></td>
                                    <td class="text-right">

                                        <a href="<?php echo e(route('category.edit', $category)); ?>"><button type="button" class="btn btn-warning float-left">
                                            Edit
                                        </button></a>
                                        <form action="<?php echo e(route('category.destroy' , $category)); ?>" method="POST" class="float-left">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" class="btn btn-dark">
                                                Delete
                                            </button>

                                        </form>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\laravel\links\resources\views/category/index.blade.php ENDPATH**/ ?>