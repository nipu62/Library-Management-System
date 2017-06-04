<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book List</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::open([
                        'route' => 'search',
                        'method' => 'post'
                      ]); ?>

                    <br>
                    <label>Search For a Writer and Book</label>
                    <?php echo Form::text('searchWriter', null, [
                        'class' => 'form-control',                           
                        'required']
                        ); ?>

                    
                    <?php echo Form::submit('Search', ['width' => '20%','class'=>'form-control btn-success pull-center']); ?>


                    <?php echo Form::close(); ?>

                </div>
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Book Name</th>
                        <th>Writer</th>
                        <th>Number of Books</th>
                      </tr>

                    <ol>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td max-width="1px"> <?php echo $book->bookname; ?></td>
                        <td> <?php echo $book->writer; ?></td>
                        <td><?php echo $book->numberofbooks; ?></td>

                    </tr>
                  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
 
            </table>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>