<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $place->title; ?></div>

                <div class="panel-body">
                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('userUpdatePlace', $place->id)); ?>">Edit</a>
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <h5>Location: <?php echo $place->division_name; ?></h5>
                        <h5>Time: <?php echo $place->time; ?></h5>
                        <h5>Cost: <?php echo $place->cost; ?></h5>
                        <?php if(!empty($place->description)): ?>
                        <h5>Why should you go?</h5>
                        <p><?php echo $place->description; ?></p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>