<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <style type="text/css">
      
      .div_deg
      {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;

      }

      h1
      {
        color: white;
      }

      label
      {
        display: inline-block;
        width: 200px;
        font-size: 17px!important;
        color: white!important;
      }

      input[type='text']
      {
        width: 350px;
        height: 50px;
      }

      textarea
      {
        width: 450px;
        height: 80px;
      }

      .input_deg
      {

        padding: 15px;
      }


    </style>
  </head>
  <body>
    
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>Add Product</h1>

            <div class="div_deg">
              
              <form action="<?php echo e(url('upload_product')); ?>" method="Post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                


                  <div class="input_deg">
                    <label>Product Title</label>
                    <input type="text" name="title" required>
                  </div>

                  <div class="input_deg">
                    <label>Deecription</label>
                    <textarea name="description" required></textarea>
                  </div>

                  <div class="input_deg">
                    <label>Price</label>
                    <input type="text" name="price">
                  </div>

                  <div class="input_deg">
                    <label>Quantity</label>
                    <input type="number" name="qty">
                  </div>

                  <div class="input_deg">
                    <label>Product category</label>

                    <select name="category" required>


                        <option>Select Option</option>

                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($category->category_name); ?>"><?php echo e($category->category_name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



           </select>
                  </div>

                  <div class="input_deg">
                    <label>Product Image</label>
                    <input type="file" name="image">
                  </div>

                  <div class="input_deg">
                   
                    <input class="btn btn-success" type="submit" value="Add Product">
                  </div>

              </form>



            </div>

    

           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo e(asset('/admincss/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/admincss/vendor/popper.js/umd/popper.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')); ?>"> </script>
    <script src="<?php echo e(asset('/admincss/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/admincss/js/charts-home.js')); ?>"></script>
    <script src="<?php echo e(asset('/admincss/js/front.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\Users\HP\Documents\PProjects\Laravel\ecommerce-project\resources\views/admin/add_product.blade.php ENDPATH**/ ?>