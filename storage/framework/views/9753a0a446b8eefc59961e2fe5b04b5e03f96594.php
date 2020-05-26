
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
                            <li><a href="<?php echo e(URL_MESSAGES); ?>">Messages</a> </li>
                            <li class="active"> <?php echo e($title); ?> </li>
                        </ol>
                    </div>
                </div>
<!-- <h1>Create a new message</h1> -->
 <div class="row">
                    <div class="col-md-7 col-sm-12">
<div class="panel panel-custom">
                    <div class="panel-heading">
                        <h1><?php echo e($title); ?> </h1>
                    </div>
                    <div id="historybox" class="panel-body packages inbox-messages-replay">
                         
                        <div class="row library-items">

    <div class="col-md-12">
        <h1><?php echo e(ucfirst($thread->subject)); ?></h1>
        <?php $current_user = Auth::user()->id; ?>
        <?php $__currentLoopData = $thread->messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $class='message-sender';
        if($message->user_id == $current_user)
        {
            $class = 'message-receiver';
        }


        ?>
            <div class="<?php echo e($class); ?>">
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="<?php echo e(getProfilePath($message->user->image)); ?>" alt="<?php echo $message->user->name; ?>" class="img-circle">
                </a>
                <div class="media-body">
                    <h5 class="media-heading"><?php echo $message->user->name; ?></h5>
                    <p><?php echo $message->body; ?></p>
                    <div class="text-muted"><small>Posted <?php echo $message->created_at->diffForHumans(); ?></small></div>
                </div>
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
 
    </div>
    </div>
                </div>
             <div class="reply-block">
                    <div class="row">
            <?php echo Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']); ?>

            <div class="col-sm-10">
                <?php echo Form::textarea('message', null, ['class' => 'form-control']); ?>

            </div>
            <div class="col-sm-2">
                <?php echo Form::submit('Reply', ['class' => 'btn btn-primary btn-lg btn-width']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
            </div>
        
            
</div></div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<script>
 $('#historybox').scrollTop($('#historybox')[0].scrollHeight);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>