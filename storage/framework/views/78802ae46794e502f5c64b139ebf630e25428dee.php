<section class="class spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="class__form">
                        <div class="section-title">
                            <span>Class cakes</span>
                            <h2>Made from your <br />own hands</h2>
                        </div>
                        <form action="<?php echo e(url('addrequirement')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="text" placeholder="Name" name="name">
                            <input type="text" placeholder="Phone" name="phone">
                            <select name="study">
                                <option value="Studying Class">Studying Class</option>
                                <option value="Writting Class">Writting Class</option>
                                <option value="Reading Class">Reading Class</option>
                            </select>
                            <input type="text" placeholder="Type your requirements" name="requirement">
                            <button type="submit" class="site-btn">registration</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="class__video set-bg" data-setbg="img/class-video.jpg">
                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </section>
    <!-- Class Section End --><?php /**PATH E:\totorial\cake\resources\views/user/class_section.blade.php ENDPATH**/ ?>