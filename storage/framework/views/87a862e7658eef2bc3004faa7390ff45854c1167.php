<section class="product spad">
        <div class="container">
            <div class="row">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="menuimage/<?php echo e($data->image); ?>">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                       
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo e($data->name); ?></a></h6>
                            <div class="product__item__price"><?php echo e($data->price); ?>$</div>
                            <div class="cart_add">
                                <a href="<?php echo e(url('wisslist')); ?>">Add to cart</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
        </div>
    </section><?php /**PATH E:\totorial\cake\resources\views/user/food.blade.php ENDPATH**/ ?>