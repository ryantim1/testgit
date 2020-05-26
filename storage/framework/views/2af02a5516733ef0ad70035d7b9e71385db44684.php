
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
  <div class="container-fluid">
 <div class="row">
                   <div class="col-lg-12">
                       <ol class="breadcrumb">
                           <li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
                           <li><a href="<?php echo e(URL_MESSAGES); ?>">Messages</a> </li>

                       </ol>
                   </div>
               </div>
               <div class="panel panel-custom">
                   <div class="panel-heading">
                       <div class="pull-right messages-buttons">
                           <a class="btn btn-lg btn-primary button" href="<?php echo e(URL_MESSAGES); ?>"> <?php echo e(getPhrase('inbox').'('.$count = Auth::user()->newThreadsCount().')'); ?> </a>
                           <a class="btn btn-lg btn-danger button" href="<?php echo e(URL_MESSAGES_CREATE); ?>"> 
                           <?php echo e(getPhrase('compose')); ?></a>

                
                       </div>
                       <h1><?php echo e(getPhrase('inbox')); ?></h1>
                   </div>
                   <?php $currentUserId = Auth::user()->id;?>
                   <div class="panel-body packages">
                       <div class="row">
                           
                           <div class="col-md-12">
                             
                               <ul class="inbox-message-list inbox-message-nocheckbox">

                             



                                     <?php if(count($threads)>0): ?>
                                     
                                       <?php $__currentLoopData = $threads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                       <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
                                      <?php $sender = getUserRecord($thread->latestMessage->user_id); ?>
                                   <li class="unread-message <?php echo $class; ?>">
                                   <?php
                                   $image_path ='';
                                   if(isset($sender->image))
                                       $image_path = getProfilePath($sender->image);
                                   else
                                       $image_path = IMAGE_PATH_PROFILE_THUMBNAIL_DEFAULT;
                                   ?>
                                       <img class="sender" src="<?php echo e($image_path); ?>" alt="">
                                        <a href="<?php echo e(URL_MESSAGES_SHOW.$thread->id); ?>" class="message-suject">
                                           <h3><?php echo e(ucfirst($thread->subject)); ?></h3>
                                           <p><?php echo $thread->latestMessage->body; ?></p>
                                       </a>
                                       <span class="receive-time"><i class="mdi mdi-clock"></i> <?php echo e($thread->latestMessage->updated_at->diffForHumans()); ?></span>
                                   </li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   <?php else: ?>
                                       <p>Sorry, no messages.</p>
                                   <?php endif; ?>
                           



                               </ul>
                             
                                 <div class="custom-pagination pull-right">
                                  <?php echo $threads->links(); ?>

                               </div>  
                           </div>
                       </div>





                   </div>
               </div>
           </div>
           <!-- /.container-fluid -->
       </div>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>