
<?php $__env->startSection('content'); ?><div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li class="active"><?php echo e($title); ?></li>
</ol>
</div>
</div>
<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- /.row -->

<div class="panel panel-custom col-lg-6  col-lg-offset-3">
<div class="panel-heading">
<h1><?php echo e($title); ?> </h1>
</div>


<div class="panel-body form-auth-style">
<small>send push notification to students</small>

<?php $button_name = getPhrase('send'); ?>

<?php echo Form::open(array('url' => URL_FCM_NOTIFICATION, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ')); ?>


<?php echo $__env->make('fcm.form_elements', array('button_name'=> $button_name), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Form::close(); ?>

</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>