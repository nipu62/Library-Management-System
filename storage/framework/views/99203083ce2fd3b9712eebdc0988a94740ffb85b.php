<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Suggest a New Book</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::open([
                        'route' => 'postSuggest',
                        'method' => 'post'
                      ]); ?>


                    <label>Book Name</label>
                    <?php echo Form::text('bookname', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write The Name of the book', 
                        'required']
                        ); ?>

                    <br>

                    <label>Writers Name</label>
                         <?php echo Form::text('writer', null, [
                        'class' => 'form-control',  
                        'placeholder' => 'Book Writer']
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