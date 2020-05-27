
<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div id="page-wrapper" ng-controller="payments_report">
            <div class="container-fluid">
                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
                            <?php if($payment_mode=='online'): ?>
                            <li><a href="<?php echo e(URL_ONLINE_PAYMENT_REPORTS); ?>"><?php echo e($payments_mode); ?></a> </li>
                            <?php else: ?>
                            <li><a href="<?php echo e(URL_OFFLINE_PAYMENT_REPORTS); ?>"><?php echo e($payments_mode); ?></a> </li>
                            <?php endif; ?>
                           
                            <li><?php echo e($title); ?></li>
                        </ol>
                    </div>
                </div>
                                
                <!-- /.row -->
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h1><?php echo e($title); ?></h1>
                    </div>
                    <div class="panel-body packages">
                        <div class="table-responsive"> 
                        <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?php echo e(getPhrase('image')); ?></th>
                                    <th><?php echo e(getPhrase('user_name')); ?></th>
                                    <th><?php echo e(getPhrase('item')); ?></th>
                                    <th><?php echo e(getPhrase('plan')); ?></th>
                                    <th><?php echo e(getPhrase('start_date')); ?></th>
                                    <th><?php echo e(getPhrase('end_date')); ?></th>
                                    <th><?php echo e(getPhrase('payment_gateway')); ?></th>
                                    <th><?php echo e(getPhrase('updated_at')); ?></th>
                                    <th><?php echo e(getPhrase('payment_status')); ?></th>
                                    
                                </tr>
                            </thead>
                             
                        </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<?php echo Form::open(array('url' => URL_PAYMENT_APPROVE_OFFLINE_PAYMENT, 'method' => 'POST', 'name'=>'formQuiz ',  )); ?>

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo e(getPhrase('offline_payment_details')); ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <p><strong><?php echo e(getPhrase('name')); ?></strong> : {{payment_record.item_name}}</p>
               <p><strong><?php echo e(getPhrase('cost')); ?></strong> : <?php echo e(getCurrencyCode().' '); ?> {{payment_record.cost}}</p>
               <p><strong><?php echo e(getPhrase('coupon_applied')); ?></strong> : {{coupon_applied}}</p>
               <p><strong> {{payment_record.other_details.coupon_applied}}</strong></p>
               <div ng-if="other_details.is_coupon_applied==1">
               <p><strong><?php echo e(getPhrase('discount')); ?></strong> : <?php echo e(getCurrencyCode().' '); ?>{{other_details.discount_availed}}</p>
               <p><strong><?php echo e(getPhrase('after_discount')); ?></strong> : <?php echo e(getCurrencyCode().' '); ?>{{other_details.after_discount}}</p>
               </div>
               <p><strong><?php echo e(getPhrase('plan_type')); ?></strong> : {{payment_record.plan_type}}</p>
               <p><strong><?php echo e(getPhrase('notes')); ?></strong> :  {{payment_record.notes}}</p>
               <p><strong><?php echo e(getPhrase('created_at')); ?></strong> : {{payment_record.created_at}}</p>
               <p><strong><?php echo e(getPhrase('updated_at')); ?></strong> : {{payment_record.updated_at}}</p>
               <p><strong><?php echo e(getPhrase('comments')); ?></strong> : <textarea class="form-control" name="admin_comment"></textarea></p>
               <input type="hidden" name="record_id" value="{{payment_record.id}}">
           </div>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-lg btn-success button" name="submit" value="approve" ><?php echo e(getPhrase('approve')); ?></button>
      <button class="btn btn-lg btn-danger button" name="submit" value="reject" ><?php echo e(getPhrase('reject')); ?></button>
        <button type="button" class="btn btn-lg btn-default button" data-dismiss="modal"><?php echo e(getPhrase('close')); ?></button>
      </div>
    </div>
<?php echo Form::close(); ?>

  </div>
</div>
        </div>

       



<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('footer_scripts'); ?>
  
 <?php echo $__env->make('common.datatables', array('route'=>$ajax_url, 'route_as_url' => TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('payments.scripts.js-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
 
<script>
function viewDetails(record_id)
{
    angular.element('#page-wrapper').scope().setDetails(record_id);
    angular.element('#page-wrapper').scope().$apply() 
 $('#myModal').modal('show');
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>