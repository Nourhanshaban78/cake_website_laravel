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
    <table style="width:200 hight:200" bgcolor="">

<tr >
 <th style="padding:10px;"> Name</th>
 <th style="padding:10px;" >Price</th>
 <th style="padding:10px;">Image</th>
 <th style="padding:10px;">Update</th>
 <th style="padding:10px;">Delete</th>
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td style="padding:10px;"><?php echo e($data->name); ?></td>
  <td style="padding:10px;"><?php echo e($data->price); ?>$</td>
  <td style="padding:10px;"><img style="width:100px; hight:100px"; src="menuimage/<?php echo e($data->image); ?>"> </td>

  <td style="padding:10px;"><a class="btn btn-info" href="<?php echo e(url('/update_menu',$data->id)); ?>">Update</a></td>
  <td style="padding:10px;"><a class="btn btn-danger" href="<?php echo e(url('/deleted-menu',$data->id)); ?>"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
  
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>




</div>
   
      



    
   <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\cake\resources\views/admin/all_menu.blade.php ENDPATH**/ ?>