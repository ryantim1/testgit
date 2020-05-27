
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
			<div class="container-fluid">
			<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							 
							<li><i class="fa fa-home"></i> <?php echo e($title); ?></li>
						</ol>
					</div>
				</div>

				 <div class="row">
					<div class="col-md-3">
						<div class="card card-blue text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\User::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('users')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_USERS); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-black text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\QuizCategory::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('quiz_categories')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_QUIZ_CATEGORIES); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card card-yellow text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\Quiz::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('quizzes')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_QUIZZES); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card card-green text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\Subject::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('subjects')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_SUBJECTS); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-yellow text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\Topic::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('topics')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_TOPICS); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-green text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\QuestionBank::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('questions')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_QUIZ_QUESTIONBANK); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>		

						<div class="col-md-3">
						<div class="card card-blue text-xs-center">
							<div class="card-block">
								<h4 class="card-title"><?php echo e(App\SiteTheme::get()->count()); ?></h4>
								<p class="card-text"><?php echo e(getPhrase('themes')); ?></p>
							</div>
							<a class="card-footer text-muted" href="<?php echo e(URL_THEMES_LIST); ?>">
								<?php echo e(getPhrase('view_all')); ?>

							</a>
						</div>
					</div>

				</div>
		 
			<!-- /.container-fluid -->
 <div class="row">
				<div class="col-md-6">
  				  <div class="panel panel-primary dsPanel">
				    <div class="panel-heading"><i class="fa fa-bar-chart-o"></i> <?php echo e(getPhrase('payment_statistics')); ?></div>
				    <div class="panel-body" >
				    	<canvas id="payments_chart" width="100" height="60"></canvas>
				    </div>
				  </div>
				</div>

				<div class="col-md-6">
  				  <div class="panel panel-primary dsPanel">
				    <div class="panel-heading"><i class="fa  fa-line-chart"></i> <?php echo e(getPhrase('payment_monthly_statistics')); ?></div>
				    <div class="panel-body" >
				    	<canvas id="payments_monthly_chart" width="100" height="60"></canvas>
				    </div>
				  </div>
				</div>

				
 

 
				<div class="col-md-6">
  				  <div class="panel panel-primary dsPanel">
				    <div class="panel-heading"><i class="fa fa-pie-chart"></i> <?php echo e(getPhrase('quizzes_usage')); ?></div>
				    <div class="panel-body" >
				    	<canvas id="demanding_quizzes" width="100" height="60"></canvas>
				    </div>
				  </div>
				</div>
				
				
				<div class="col-md-6">
  				  <div class="panel panel-primary dsPanel">
				    <div class="panel-heading"><i class="fa fa-pie-chart"></i> <?php echo e(getPhrase('paid_quizzes_usage')); ?></div>
				    <div class="panel-body" >
				    	<canvas id="demanding_paid_quizzes" width="100" height="60"></canvas>
				    </div>
				  </div>
				</div>
	</div>
</div>
		<!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
 
 <?php echo $__env->make('common.chart', array($chart_data,'ids' =>$ids), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('common.chart', array('chart_data'=>$payments_chart_data,'ids' =>array('payments_chart'), 'scale'=>TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('common.chart', array('chart_data'=>$payments_monthly_data,'ids' =>array('payments_monthly_chart'), 'scale'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('common.chart', array('chart_data'=>$demanding_quizzes,'ids' =>array('demanding_quizzes')), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('common.chart', array('chart_data'=>$demanding_paid_quizzes,'ids' =>array('demanding_paid_quizzes')), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>