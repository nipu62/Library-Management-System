<?php if($success = Session::get('success')): ?>
<div class="alert alert-success alert-dismissable fade in">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
        ×
    </button>
    <?php echo $success; ?>

</div>
<?php endif; ?>

<?php if($error = Session::get('error')): ?>
<div class="alert alert-danger alert-dismissable fade in">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
        ×
    </button>
    <?php echo $error; ?>

</div>
<?php endif; ?>

<?php if($warning = Session::get('warning')): ?>
<div class="alert alert-warning alert-dismissable fade in">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
        ×
    </button>
    <?php echo $warning; ?>

</div>
<?php endif; ?>

<?php if($info = Session::get('info')): ?>
<div class="alert alert-info alert-dismissable fade in">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
        ×
    </button>
    <?php echo $info; ?>

</div>
<?php endif; ?>

<?php if(!$errors->isEmpty()): ?>
<div class="alert alert-danger alert-dismissable fade in">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
        ×
    </button>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<?php echo $error; ?>

    <br/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
