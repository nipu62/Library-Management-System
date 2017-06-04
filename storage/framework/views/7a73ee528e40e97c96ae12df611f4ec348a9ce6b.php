<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <a class="btn btn-success pull-right" href="<?php echo route('create'); ?>">Create</a>
                    <ol>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        <h4><?php echo $post->username; ?></h4>
                        <span><?php echo $post->created_at; ?></span>
                        <?php if($post->user_id == Auth::user()->_id): ?>
                            <a class="btn btn-xs btn-warning" href="<?php echo route('edit', $post->_id); ?>">Edit</a>

                            <a class="btn btn-xs btn-danger" href="<?php echo route('delete', $post->_id); ?>">Delete</a>

                        <?php endif; ?>
                        <p><?php echo $post->post; ?></p>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>