<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card-header">
        <h1>
            Edit Work Plan/Event
        </h1>
   </div>
   <div class="card-body">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'patch']); ?>

                   
                        <?php echo $__env->make('events.fields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
             
                    <?php echo Form::close(); ?>


               </div>
           </div>
  

                <?php echo Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
              
                    <?php echo Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>


       </div>
   </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>