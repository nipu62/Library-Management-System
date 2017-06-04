<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Book Entry</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::open([
                        'route' => 'store',
                        'method' => 'post'
                      ]); ?>

                    <br>
                    <label>Book Name</label>
                    <?php echo Form::text('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write The Name of the book', 
                        'required']
                        ); ?>

                    <br>
                    <label>Number Of Books</label>
                         <?php echo Form::number('numberofbooks', null, [
                        'class' => 'form-control',  
                        'required']
                        ); ?>

                    <br>

                    <?php echo Form::submit('Submit', ['class'=>'form-control btn-success']); ?>


                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>