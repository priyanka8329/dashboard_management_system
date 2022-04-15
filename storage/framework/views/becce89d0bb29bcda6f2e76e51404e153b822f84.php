

<?php $__env->startSection('content'); ?>
<h1 class="py-4 text-primary ">create page</h1>
<form action="/createsubmit" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-2 py-1">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName1"  required >
    
  </div>
  <div class="mb-2 py-1">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required >
    
  </div>
  <div class="mb-2 py-1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1"  required >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hiii\Desktop\laravel\project\resources\views/create.blade.php ENDPATH**/ ?>