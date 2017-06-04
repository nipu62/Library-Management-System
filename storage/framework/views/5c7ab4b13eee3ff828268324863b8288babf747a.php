<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Place Suggestions</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <ol>
                    <?php $__currentLoopData = $createRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $createRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="<?php echo e(route('putSuggestion', $createRequest->_id)); ?>">Add</a>

                            <a class="btn btn-xs btn-danger" href="<?php echo e(route('putIgnore', $createRequest->_id)); ?>">Ignore</a>
                            <h5>Name: <?php echo $createRequest->title; ?></h5>
                            <h5>Location: <?php echo $createRequest->division_name; ?></h5>
                            <?php if(!empty($createRequest->time)): ?>
                            <h5>Time: <?php echo $createRequest->time; ?></h5>
                            <?php endif; ?>
                            <?php if(!empty($createRequest->cost)): ?>
                            <h5>Cost: <?php echo $createRequest->cost; ?></h5>
                            <?php endif; ?>
                            
                            <?php if(!empty($createRequest->description)): ?>
                            <h5>Why should you go?</h5>
                            <p><?php echo $createRequest->description; ?></p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update requests</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <ol>
                    <?php $__currentLoopData = $updateRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $updateRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="<?php echo e(route('putApprove', $updateRequest->_id)); ?>">Approve</a>

                            <a class="btn btn-xs btn-danger" href="<?php echo e(route('putIgnore', $updateRequest->_id)); ?>">Deny</a>
                            <h5>Name: <?php echo $updateRequest->title; ?></h5>
                            <h5>Location: <?php echo $updateRequest->division_name; ?></h5>
                            <?php if(!empty($updateRequest->time)): ?>
                            <h5>Time: <?php echo $updateRequest->time; ?></h5>
                            <?php endif; ?>
                            <?php if(!empty($updateRequest->cost)): ?>
                            <h5>Cost: <?php echo $updateRequest->cost; ?></h5>
                            <?php endif; ?>
                            
                            <?php if(!empty($updateRequest->description)): ?>
                            <h5>Why should you go?</h5>
                            <p><?php echo $updateRequest->description; ?></p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>