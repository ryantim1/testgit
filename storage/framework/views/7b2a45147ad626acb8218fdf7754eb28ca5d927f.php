<?php $__env->startSection('content'); ?>
<div ng-controller="prepareResumeData" ng-init="initFunctions()">





<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>

<li class="active"><?php echo e($title); ?></li>

</ol>
</div>
</div>
<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- /.row -->

<div class="panel panel-custom col-lg-12">
<div class="panel-heading">
<h1><?php echo e($title); ?>  

  <?php if(isset($resume_templates)): ?>
  <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#resumetemplatesModal"> <?php echo e(getPhrase('preview_resume')); ?> </a>
  <?php endif; ?>
  
</h1>





</div>

<div class="panel-body form-auth-style">
<?php $button_name = getPhrase('update'); ?>
<?php if($record): ?>
<?php echo e(Form::model($record, 
array('url' => URL_USER_BUILD_RESUME.$record->slug, 
'method'=>'patch','novalidate'=>'','name'=>'formUsers', 'files'=>'true' ))); ?>

<?php endif; ?>

<?php echo $__env->make('student.resume.form_elements', array('button_name'=> $button_name, 'record' => $record), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Form::close(); ?>

</div>
</div>
</div>
<!-- /.container-fluid -->





<!--experience modal-->
<div class="modal fade" id="resumetemplatesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('resume_templates')); ?> </h4>
      </div>

      <div class="modal-body">
    <?php 
     $resume_templates = \App\ResumeTemplate::where('status','=','1')
                            ->where('image','!=','')
                            ->get();
        $user = \Auth::user();
    ?>
       
         <?php if(isset($resume_templates)): ?>
         
           <div class="row">
            <?php $__currentLoopData = $resume_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 resume-popup">
              
              <a href="<?php echo e(URL_GET_RESUME_TEMPLATE.$user->slug.'/'.$template->slug); ?>"  target="_blank"><img class="img-responsive" src="<?php echo e(getResumeTemplateImg($template->image)); ?>" alt="<?php echo e($template->title); ?>"></a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
          
          <?php endif; ?>

      </div>

    </div>
  </div>
</div>
<!--experience modal-->


<!--experience modal-->
<div class="modal fade" id="expModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('work_experience_details')); ?> </h4>
      </div>

       

        <div class="modal-body">

          <div class="row">

            
              <div class="col-md-8">
                    <fieldset class="form-group">
                      <textarea class="form-control" ng-model="work_experience" placeholder="Work Experience"></textarea>
                   </fieldset>
              </div>


               <div class="col-md-12">

                    <div class="row ">
                    <div class="input-daterange" id="dp">

                    <div class="form-group col-md-3">
                      <input type="text" class="input-sm form-control" id="work_from_date" ng-model="from_date" placeholder="From Date">
                    </div>


                    <div class="form-group col-md-3">
                      <input type="text" class="input-sm form-control" id="work_to_date" ng-model="to_date" placeholder="To Date">
                    </div>

                   </div>

                  
                    <div class="form-group col-md-3">
                      <label class="checkbox-inline">
                        <input type="checkbox" 
                            data-toggle="toggle" 
                            data-onstyle="success" 
                            data-offstyle="default"
                            id="toggle-present"
      
                            > Present
                      </label>
                    </div>


                  <div class="form-group col-md-3">
                   <button type="button" class="btn btn-primary " ng-click="addExperience()"><?php echo e(getPhrase('add')); ?></button>
                   </div>
                   </div>
                 
               </div>

               


             </div>


            <br>
            
            <table class="table table-striped table-bordered datatable">

              <tr ng-repeat="experience in popup_work_exp_data">

                <td><textarea class="form-control" placeholder="Work Experience">{{experience.popup_work_experience}}  from {{experience.popup_from_date}} to {{experience.popup_to_date}}  </textarea>
                </td>


                <td>
                <button type="button" class="btn btn-danger" ng-click="removeExperience(experience.popup_work_experience)"><i class="fa fa-trash"></i>
                </button>
                </td>

              </tr>

        </table>

          </div>

     


      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="saveExperience()">OK</button>
      </div>
    </div>
  </div>
</div>
<!--experience modal-->







<!--projects done modal-->
<div class="modal fade" id="projectsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('projects_details')); ?> </h4>
      </div>

      <div class="modal-body">

      	      
            <button type="button" class="btn btn-primary pull-right" ng-click="addProject()"><?php echo e(getPhrase('add')); ?></button>


         
             <table class="table table-striped table-bordered datatable">

              <tr ng-repeat="project in popup_projects_data">

              	<td> 
                <textarea class="form-control" ng-model="project.popup_project_title" placeholder="Project Title"></textarea>
                </td>

                <td> 
                <textarea class="form-control" ng-model="project.popup_project_description" placeholder="Project Description"></textarea>
                </td>

                <td>
                <button type="button" class="btn btn-danger" ng-click="removeProject(project.popup_project_title)"><i class="fa fa-trash"></i>
                </button>
                </td>

              </tr>

        </table>

        

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="saveProject()">OK</button>
      </div>
    </div>
  </div>
</div>
<!--projects modal-->







<!--technicla skills modal-->
<div class="modal fade" id="skillsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('technical_skills_details')); ?> </h4>
      </div>

      <div class="modal-body">

      	<button type="button" class="btn btn-primary" ng-click="addSkill()"><?php echo e(getPhrase('add')); ?></button>

          <div class="form-group">
            
            <table class="table" border="0">

              <tr ng-repeat="skill in popup_skills_data">

              	<td> 
                <textarea class="form-control" ng-model="skill.popup_skill_type" placeholder="Programming languages"></textarea>
                </td>

                <td> 
                <textarea class="form-control" ng-model="skill.popup_skills_known" placeholder=" C, C++, MFC, VC++, VB.Net, JAVA"></textarea>
                </td>

                <td>
                <button type="button" class="btn btn-danger" ng-click="removeSkill(skill.popup_skill_type)"><i class="fa fa-trash"></i>
                </button>
                </td>

              </tr>

        </table>

          </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="saveSkill()">OK</button>
      </div>
    </div>
  </div>
</div>
<!--technicla skills modal-->





<!--extra curricular activities modal-->
<div class="modal fade" id="activitiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('extra_curricular_activities_details')); ?> </h4>
      </div>

      <div class="modal-body">

      	<button type="button" class="btn btn-primary" ng-click="addActivity()"><?php echo e(getPhrase('add')); ?></button>

          <div class="form-group">
            
            <table class="table" border="0">

              <tr ng-repeat="activity in popup_activities_data">

                <td> 
                <textarea class="form-control" ng-model="activity.popup_activity_description" placeholder="Description"></textarea>
                </td>

                <td>
                <button type="button" class="btn btn-danger" ng-click="removeActivity(activity.popup_activity_description)"><i class="fa fa-trash"></i>
                </button>
                </td>

              </tr>

        </table>

          </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="saveActivity()">OK</button>
      </div>
    </div>
  </div>
</div>
<!--extra curricular activities modal-->







<!--academic profile modal-->
<div class="modal fade" id="academicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo e(getPhrase('academic_profile_details')); ?> </h4>
      </div>

      <div class="modal-body">

      	<button type="button" class="btn btn-primary" ng-click="addAcademicProfile()"><?php echo e(getPhrase('add')); ?></button>

          <div class="form-group">
            
            <table class="table" border="0">

            <thead>
            	<tr>
            		<th>Examination Passed</th>
            		<th>University/Board</th>
            		<th>Year</th>
            		<th>% Marks Obtained</th>
            		<th>Class</th>
            	</tr>
            </thead>

            <tbody>

              <tr ng-repeat="academic in popup_academic_data">

                <td> 
                <input type="text" class="form-control" ng-model="academic.popup_examination_passed" placeholder="B.Sc(Mathematics"/>
                </td>

                <td> 
                <input type="text" class="form-control" ng-model="academic.popup_university" placeholder="Calicut University"/>
                </td>

                <td> 
                <input type="text" class="form-control" ng-model="academic.popup_passed_out_year" placeholder="1997"/>
                </td>

                <td> 
                <input type="text" class="form-control" ng-model="academic.popup_marks_obtained" placeholder="89.8"/>
                </td>


                <td> 
                <input type="text" class="form-control" ng-model="academic.popup_class" placeholder="First with Distinction"/>
                </td>

                <td>
                <button type="button" class="btn btn-danger" ng-click="removeAcademicProfile(academic.popup_examination_passed)"><i class="fa fa-trash"></i>
                </button>
                </td>

              </tr>
          </tbody>


        </table>

          </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="saveAcademicProfile()">OK</button>
      </div>
    </div>
  </div>
</div>
<!--academic profile modal-->











</div>
<!-- /#page-wrapper -->



 </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations',array('load_module'=> TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('student.resume.script.resume-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>

<script src="<?php echo e(JS); ?>datepicker.min.js"></script>

<script>
$('.datepicker').datepicker({
        autoclose: true,
        endDate: "0d",
        format: 'yyyy-mm-dd',
    });



    $('.input-daterange').datepicker({
        autoclose: true,
        // startDate: "0d",
        endDate: "0d",
        format: 'yyyy-mm-dd',
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>