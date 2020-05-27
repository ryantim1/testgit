

<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
							<?php if(checkRole(getUserGrade(2))): ?>
							<li><a href="<?php echo e(URL_USERS); ?>"><?php echo e(getPhrase('users')); ?></a> </li>
							<li class="active"><?php echo e(isset($title) ? $title : ''); ?></li>
							<?php else: ?>
							<li class="active"><?php echo e($title); ?></li>
							<?php endif; ?>
						</ol>
					</div>
				</div>
					<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<!-- /.row -->
				
	<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
					<?php if(checkRole(getUserGrade(2))): ?> 
						<div class="pull-right messages-buttons">
							 
							<a href="<?php echo e(URL_USERS); ?>" class="btn  btn-primary button" ><?php echo e(getPhrase('list')); ?></a>
							 
						</div>
						<?php endif; ?>
					<h1><?php echo e($title); ?>  </h1>
					</div>

					<div class="panel-body text-center">
					
					<a href="<?php echo e(DOWNLOAD_LINK_USERS_IMPORT_EXCEL); ?>" class="btn btn-info"><?php echo e(getPhrase('download_template')); ?>

					</a>
					
					<?php $button_name = getPhrase('upload'); ?>
					
						<?php echo Form::open(array('url' => URL_USERS_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')); ?>

					

	 
				 
					<fieldset >
					<label class="margintop30">Upload Excel</label>
						
						 
						
					<?php echo Form::file('excel', array('class'=>'form-control','id'=>'excel_input', 'accept'=>'.xls,.xlsx', 'required'=>'true')); ?>

							 
							 
					 
					</fieldset>
	 
					
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formUsers.$valid'><?php echo e($button_name); ?></button>
						</div>

					 
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
 <script>
 	var file = document.getElementById('excel_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'xls':
        case 'xlsx':
     
            break;
        default:
              alertify.error("<?php echo e(getPhrase('file_type_not_allowed')); ?>");
            this.value='';
    }
};
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>