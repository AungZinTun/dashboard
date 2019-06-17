<table class="table table-responsive" id="events-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>User Id</th>
        <th>Start</th>
        <th>End</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $event->title; ?></td>
            <td><?php echo $event->user_id; ?></td>
            <td><?php echo $event->start; ?></td>
            <td><?php echo $event->end; ?></td>
            <td>
                <?php echo Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('events.show', [$event->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('events.edit', [$event->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>