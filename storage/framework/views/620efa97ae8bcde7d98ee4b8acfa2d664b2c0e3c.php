<?php $__env->startSection('content'); ?>

<h2 align="center"> <b> List of Available Books </b> </h2> 
<?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <a class="btn btn-success pull-right" href="<?php echo route('create'); ?>">Add New Books</a>

<br>
<table>
  <tr>
    <th width="50%">Name of The Books Available</th>
    <th>Number of Books</th>
    <th>Edit Book Info</th>
    <th>Delete Entry</th>
  </tr>

     <ol>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
    <td max-width="1px"> <?php echo $post->post; ?></td>
    <td><?php echo $post->numberofbooks; ?></td>
    <td>
                            <a class="btn btn-xs btn-warning" href="<?php echo route('edit', $post->_id); ?>">Edit</a>


                        </td>
                         <td>
                            <a class="btn btn-xs btn-danger" href="<?php echo route('delete', $post->_id); ?>">Delete</a>


                        </td>

  </tr>
  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
 
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>