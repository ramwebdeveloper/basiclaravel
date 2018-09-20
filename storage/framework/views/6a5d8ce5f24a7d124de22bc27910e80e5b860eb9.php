<?php

?>
;

<?php $__env->startSection('content'); ?>
<h1>Contact</h1>

<?php echo Form::open(['url' => 'contact/submit']); ?>

    <div class="form-group">
    <?php echo e(Form::label('name', 'Name')); ?>

    <?php echo e(Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter name'])); ?>

    </div>
     <div class="form-group">
    <?php echo e(Form::label('email', 'Email')); ?>

   	<?php echo e(Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter email'])); ?>

    </div>
     <div class="form-group">
    <?php echo e(Form::label('message', 'Message')); ?>

    <?php echo e(Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter Message'])); ?>

    </div>
    <div class="form-group">
    <?php echo e(Form::submit('submit', ['class'=>'btn btn-primary'])); ?>

    </div>
    
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>