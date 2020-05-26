
<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
                            <li><?php echo e($title); ?></li>
                        </ol>
                    </div>
                </div>
                
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h1><?php echo e($title); ?></h1> </div>
                    <div class="panel-body">
                        <ul class="list-unstyled notification-list">
                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <li>
                                <a href="<?php echo e(URL_NOTIFICATIONS_VIEW.$notification->slug); ?>">
                                    <h4><?php echo e($notification->title); ?></h4>
                                    <p><?php echo e($notification->short_description); ?></p> <span class="posted-time"><?php echo e(getPhrase('posted_on')); ?> : <i class="fa fa-calendar"></i> <?php echo e($notification->updated_at); ?></span> </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>
                            <?php echo $notifications->links(); ?>

                       
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('footer_scripts'); ?>
  
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>