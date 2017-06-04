<section id="portfolio" class="bg-light-gray">
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book issue requests</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <ol>
                    <?php $__currentLoopData = $issueRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issueRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="<?php echo e(route('putAdminIssueBook', $issueRequest->_id)); ?>">Approve</a>

                            <a class="btn btn-xs btn-danger" href="<?php echo e(route('putIgnore', $issueRequest->_id)); ?>">Deny</a>
                            <h5>BookName: <?php echo $issueRequest->bookname; ?></h5>
                            <h5>UserName: <?php echo $issueRequest->username; ?></h5>
                            <h5>Writer: <?php echo $issueRequest->writer; ?></h5>

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