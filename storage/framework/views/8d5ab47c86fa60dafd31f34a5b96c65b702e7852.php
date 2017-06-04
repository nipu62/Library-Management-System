<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::model($place,[
                        'route' => ['putUserUpdatePlace',$place->_id],
                        'method' => 'put'
                      ]); ?>


                    <?php echo Form::text('title', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Title', 
                        'required']
                        ); ?>

<br>
                    <?php echo Form::text('division_name', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Location'
                        ]
                        ); ?>

<br>

                    <?php echo Form::text('time', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Time to reach from main city'
                        ]
                        ); ?>

<br>

                    <?php echo Form::text('cost', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Cost to visit from main city'
                        ]
                        ); ?>

<br>
                    <?php echo Form::textarea('description', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Inspire people to visit the place']
                        ); ?>

<br>
                    <?php echo Form::submit('Submit', ['class'=>'form-control btn-success']); ?>


                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
</section>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>