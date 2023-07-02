<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
          
   
  <div style="padding-top:100px;" >
    <table class="table table-success table-striped">

<tr >
 <th style="padding:10px;">Frist Name</th>
 <th style="padding:10px;">Last Name</th>
 <th style="padding:10px;">Country</th>
 <th style="padding:10px;">Address</th>
 <th style="padding:10px;">Apartment</th>
 <th style="padding:10px;">city</th>
 <th style="padding:10px;">state</th>
 <th style="padding:10px;">ZIP</th>
 <th style="padding:10px;">phone</th>
 <th style="padding:10px;">Product</th>
 <th style="padding:10px;">Price</th>
 <th style="padding:10px;">Payment</th>

 
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td style="padding:10px;"><?php echo e($data->fname); ?></td>
  <td style="padding:10px;"><?php echo e($data->lname); ?></td>
  <td style="padding:10px;"><?php echo e($data->country); ?></td>
  <td style="padding:10px;"><?php echo e($data->saddress); ?></td>
  <td style="padding:10px;"><?php echo e($data->apartment); ?></td>
  <td style="padding:10px;"><?php echo e($data->city); ?></td>
  <td style="padding:10px;"><?php echo e($data->state); ?></td>
  <td style="padding:10px;"><?php echo e($data->code); ?></td>
  <td style="padding:10px;"><?php echo e($data->phone); ?></td>
  <td style="padding:10px;"><?php echo e($data->order_name); ?></td>
  <td style="padding:10px;"><?php echo e($data->order_price); ?></td>
  <td style="padding:10px;"><?php echo e($data->payment); ?></td>
  
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>




</div>















    
   <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\cake\resources\views/admin/get_check.blade.php ENDPATH**/ ?>