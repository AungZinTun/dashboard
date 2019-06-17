<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $event->id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $event->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $event->updated_at; ?></p>
</div>

<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $event->title; ?></p>
</div>

<!-- User Id Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $event->user_id; ?></p>
</div>

<!-- Start Field -->
<div class="form-group">
    <?php echo Form::label('start', 'Start:'); ?>

    <p><?php echo $event->start; ?></p>
</div>

<!-- End Field -->
<div class="form-group">
    <?php echo Form::label('end', 'End:'); ?>

    <p><?php echo $event->end; ?></p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    <?php echo Form::label('deleted_at', 'Deleted At:'); ?>

    <p><?php echo $event->deleted_at; ?></p>
</div>

