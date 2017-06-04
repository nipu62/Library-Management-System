<section id="portfolio" class="bg-light-gray">
	<div class="container">
	    <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                
            </div>
	    </div>
        <div class="row">
        <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="<?php echo e(route('places', $division->name)); ?>" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4><?php echo e($division->name); ?></h4>
                    <p class="text-muted"><?php echo e($division->description); ?></p>
                    <button>update</button>
                    <button>delete</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
	</div>
</section>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>