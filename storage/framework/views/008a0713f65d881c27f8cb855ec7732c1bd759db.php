<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6 hidden">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::number('user_id',  Auth::user()->id  , ['class' => 'form-control']); ?>

</div>

<!-- Start Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('start', 'Start:'); ?>

    <?php echo Form::date('start', null, ['class' => 'form-control']); ?>

</div>

<!-- End Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('end', 'End:'); ?>

    <?php echo Form::date('end', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('events.index'); ?>" class="btn btn-default">Cancel</a>
</div>
