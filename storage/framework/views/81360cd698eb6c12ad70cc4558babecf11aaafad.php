<?php $__env->startSection('content'); ?>

  
       
      
  <div class="container-fluid">
  
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  
      
        <div class="card">
          <div class="card-header">
          <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('events.create'); ?>">Add New</a>
          </div>

        </div>
            
   <?php echo $__env->make('events.calendar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
  
  </div>

<?php $__env->stopSection(); ?>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>