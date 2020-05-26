
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>
   <META http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 

</head>

<body onload="printMe()">
   
      
      
   
   <div width="950px" id="printableArea">
         <img src="<?php echo e(getProfilePath($user->image)); ?>" alt="" style="width:120px;height:120px;margin:0 auto; float: right;">

      <h1 class="text-center"><?php echo e(getPhrase('resume')); ?></h1>
      <div>
         <p><?php echo e($user->name); ?></p>
         <p><?php echo e($user->qualification); ?></p>
         <p><?php echo e($user->department); ?></p>
         <p><?php echo e($user->inst_name); ?> &nbsp; <?php echo e($user->college_place); ?></p>
         <p><?php echo e($user->state); ?> &nbsp; <?php echo e($user->country); ?></p>
      </div>
      <br>
      <div>
         <p><strong><?php echo e(getPhrase('email')); ?>:</strong> <?php echo e($user->email); ?> </p>
         <p><strong><?php echo e(getPhrase('mobile')); ?>:</strong> <?php echo e($user->phone); ?> </p>
      </div>
      <hr>

      <h3><?php echo e(getPhrase('career_objective')); ?>:</h3>
      <p><?php echo $user->career_objective; ?></p>



       <?php if(isset($work_experience) && count($work_experience)): ?>
        <div>
           <h3><?php echo e(getPhrase('work_experience')); ?>:</h3>

           <ul>
               <?php $__currentLoopData = $work_experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($experience->work_experience); ?> from <?php echo e($experience->from_date); ?> to <?php echo e($experience->to_date); ?>  </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>

        </div>

      <?php endif; ?>





      <?php if(isset($projects) && count($projects)): ?>
      <h3><?php echo e(getPhrase('projects')); ?> &amp; <?php echo e(getPhrase('work_done')); ?>:</h3>

     
      <ol>
         <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($project->project_title); ?>


            <?php if($project->project_description): ?>
            <ul>
            <li><?php echo e($project->project_description); ?></li>
            </ul>
            <?php endif; ?>

          </li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </ol>


       

      <hr>
      <?php endif; ?>   

      <?php if(isset($academic_profiles) && count($academic_profiles)): ?>
      <h3><?php echo e(getPhrase('academic_profile')); ?>:</h3>
       <div class="table-responsive">
           <table class="table" cellspacing="0" cellpadding="10" border="1" width="100%">
         <tr>
            <th><?php echo e(getPhrase('examination_passed')); ?></th>
            <th><?php echo e(getPhrase('university')); ?>/<?php echo e(getPhrase('board')); ?></th>
            <th><?php echo e(getPhrase('year')); ?></th>
            <th>% <?php echo e(getPhrase('marks_obtained')); ?></th>
            <th><?php echo e(getPhrase('class')); ?></th>
         </tr>
         <?php $__currentLoopData = $academic_profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($academic->examination_passed); ?></td>
            <td><?php echo e($academic->university); ?></td>
            <td><?php echo e($academic->passed_out_year); ?></td>
            <td><?php echo e($academic->marks_obtained); ?></td>
            <td><?php echo e($academic->class); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
      </table>
   </div>
      <?php endif; ?>


      <?php if(isset($technical_skills) && count($technical_skills)): ?>
      <h3><?php echo e(getPhrase('technical_skills')); ?>:</h3>
      <?php $__currentLoopData = $technical_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p> <?php echo e($skill->skill_type); ?> : <?php echo e($skill->skills_known); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
     

      <?php if($user->field_of_interest): ?>
      <h3><?php echo e(getPhrase('field_of_interest')); ?>:</h3>
      <p><?php echo e($user->field_of_interest); ?>

      <p>
      <?php endif; ?>


      <?php if($user->subject_taught): ?>
      <h3><?php echo e(getPhrase('subject_taught')); ?>:</h3>
      <p><?php echo e($user->subject_taught); ?></p>
      <?php endif; ?>


      <?php if(isset($activities) && count($activities)): ?>
      <h3><?php echo e(getPhrase('extra_activities')); ?>:</h3>
      <ol>
      <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li>
            <?php echo e($activity->activity_description); ?>

         </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ol>
      <?php endif; ?>

    
      <h3><?php echo e(getPhrase('personal_profile')); ?>:</h3>
      <table class="table">
         <tr>
            <td><?php echo e(getPhrase('name')); ?>:</td>
            <td><?php echo e($user->name); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('gender')); ?>:</td>
            <td><?php echo e($user->gender); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('date_of_birth')); ?>:</td>
            <td><?php echo e($user->dob); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('marital_status')); ?>:</td>
            <td><?php echo e($user->marital_status); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('nationality')); ?>:</td>
            <td><?php echo e($user->nationality); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('father_name')); ?>:</td>
            <td><?php echo e($user->father_name); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('linguistic_ability')); ?>:</td>
            <td><?php echo e($user->linguistic_ability); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('passport_number')); ?>:</td>
            <td><?php echo e($user->passport_number); ?></td>
         </tr>
         <tr>
            <td><?php echo e(getPhrase('present_address')); ?>:</td>
            <td><?php echo e($user->present_address); ?>

            </td>
         </tr>
         <td><?php echo e(getPhrase('personal_strength')); ?>:</td>
         <td><?php echo e($user->personal_strength); ?></td>
         
      </table>
      </p><strong><?php echo e(getPhrase('declaration')); ?>:</strong> 
    <?php echo $user->declaration; ?></p>
      <br><br>
      <p><?php echo e($user->name); ?></p>
   </div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
   function printMe(){
      var printContents = document.getElementById('printableArea').innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              printContents + "</body>";;

     window.print();

     document.body.innerHTML = originalContents;
   };
</script> 

 </body>
 </html>