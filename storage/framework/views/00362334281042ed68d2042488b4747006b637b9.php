<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <div class="container-fluid page-body-wrapper">
     
     <div style="padding-top:100px;" align="center">
        <form action="<?php echo e(url('addchef')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

   <div class="mb-3">
  <label  >Name of Chef</label>
  <input type="text" style="color:black"  name="name" placeholder="name of chef">
   </div>

<div class="mb-3">
  <label  >special of Cake</label>
  <input type="text" style="color:black"  name="special" placeholder="speciality">
</div>


<div class="mb-3">
  <label >Image of Chef</label>
  <input name="image" type="file" require>
</div>

<div>
<input type="submit" class="btn btn-success" value="Add Chef">
</div>

</form>
</div>

</div>
    

    
   <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\cake\resources\views/admin/chef.blade.php ENDPATH**/ ?>