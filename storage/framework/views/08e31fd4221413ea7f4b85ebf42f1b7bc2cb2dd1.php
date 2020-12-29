<div class="form-group">
   <input type="text" class="form-control" name="title" value="<?php echo e($category->title ?? ''); ?>" placeholder="Title">
</div>
<div class="form-group">
    <select name="parent_id" class="form-control">
        <option value="0">-- without parent --</option>
        <?php echo $__env->make('category._categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </select>
</div>

<hr>

<button type="submit" class="btn btn-primary">Save</button>
<?php /**PATH C:\xampp\php\laravel\links\resources\views/category/_form.blade.php ENDPATH**/ ?>