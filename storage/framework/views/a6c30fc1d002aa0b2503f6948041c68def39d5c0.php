<div class="form-group">
   <input type="text" class="form-control" name="title" value="<?php echo e($page->title ?? ''); ?>" placeholder="Title">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="path" value="<?php echo e($page->path ?? ''); ?>" placeholder="Path">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="main_content" value="<?php echo e($page->main_content ?? ''); ?>" placeholder="Text">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="author" value="<?php echo e($page->author ?? ''); ?>" placeholder="Author">
</div>
<div class="form-group">
   <input type="integer" class="form-control" name="categorry_id" value="<?php echo e($page->categorry_id ?? ''); ?>" placeholder="Category">
</div>
<div class="form-group">
    <select name="categories[]" multiple="" class="form-control">
        <?php echo $__env->make('admin.pages._categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </select>
</div>

<h4>Custom fields:</h4>
<div class="form-group">
      <input type="text" class="form-control" name="key_teg" value="<?php echo e($page->key_teg ?? ''); ?>" placeholder="key">
      <input type="text" class="form-control" name="value_teg" value="<?php echo e($page->value_teg ?? ''); ?>" placeholder="value">
</div>
<hr>

<button type="submit" class="btn btn-primary">Save</button>
<?php /**PATH C:\xampp\php\laravel\links\resources\views/admin/pages/_form.blade.php ENDPATH**/ ?>