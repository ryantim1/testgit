 
<div class="row">



<div class="col-lg-6">


					 <fieldset class="form-group">

					 	<?php 
						$val = old('name');
						if($record)
						$val = $record->name;

						?>

						<?php echo e(Form::label('name', getphrase('name'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Jack',

							'ng-model'=>'name',

							'required'=> 'true', 

							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '20',

							'ng-init'=> 'name="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.name.$touched && formUsers.name.$invalid}',



						))); ?>


						<div class="validation-error" ng-messages="formUsers.name.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>


					<fieldset class="form-group">

						<?php 
						$val = old('department');
						if($record)
						$val = $record->department;

						?>

						<?php echo e(Form::label('department', getphrase('department'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('department', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						getPhrase('Department of Computer Science'),

							'ng-model'=>'department',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'department="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.department.$touched && formUsers.department.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.department.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>




					<fieldset class="form-group">

						<?php 
						$val = old('college_place');
						if($record)
						$val = $record->college_place;

						?>

						<?php echo e(Form::label('college_place', getphrase('college_place'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('college_place', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'KANPUR',

							'ng-model'=>'college_place',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'college_place="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.college_place.$touched && formUsers.college_place.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.college_place.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						<?php 
						$val = old('country');
						if($record)
						$val = $record->country;

						?>

						<?php echo e(Form::label('country', getphrase('country'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('country', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'INDIA',

							'ng-model'=>'country',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '50',

							'ng-init'=> 'country="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.country.$touched && formUsers.country.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.country.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						
						<?php 
						$val = old('phone');
						if($record)
						$val = $record->phone;

						?>


						<?php echo e(Form::label('phone', getphrase('phone'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('phone', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						getPhrase('please_enter_10-15_digit_mobile_number'),

							'ng-model'=>'phone',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("phone"),

							'ng-init'=> 'phone="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.phone.$touched && formUsers.phone.$invalid}',


						))); ?>


						 

						<div class="validation-error" ng-messages="formUsers.phone.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('phone'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group"> 

						<?php 
						$val = old('dob');
						if($record)
						$val = $record->dob;

						?>

           
				      <?php echo e(Form::label('dob', getphrase('date_of_birth'))); ?> <span class="text-red">*</span>
                      
                      <?php echo e(Form::text('dob', $value = null , $attributes = array('class'=>'form-control datepicker', 'placeholder' => 'Date of Birth',

				              'ng-model'=>'dob',

				              'required'=> 'true', 

				              'ng-init'=> 'dob="'.$val.'"',

				              'ng-class'=>'{"has-error": formUsers.dob.$touched && formUsers.dob.$invalid}',

				            ))); ?>



				            <div class="validation-error" ng-messages="formUsers.dob.$error">

				                <?php echo getValidationMessage(); ?>



				            </div>

            	</fieldset>


            	<fieldset class="form-group">

            			<?php 
						$val = old('nationality');
						if($record)
						$val = $record->nationality;

						?>

						<?php echo e(Form::label('nationality', getphrase('nationality'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('nationality', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'INDIAN',

							'ng-model'=>'nationality',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'nationality="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.nationality.$touched && formUsers.nationality.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.nationality.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						<?php 
						$val = old('linguistic_ability');
						if($record)
						$val = $record->linguistic_ability;

						?>

						<?php echo e(Form::label('linguistic_ability',getPhrase('linguistic_ability'))); ?>


						<?php echo e(Form::textarea('linguistic_ability', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Languages Known',

						'ng-model'=>'linguistic_ability',

						'rows'=>2,

						'ng-maxlength' => '100',

						'ng-init'=> 'linguistic_ability="'.$val.'"',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.linguistic_ability.$error" >


	    					<?php echo getValidationMessage('maxlength'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						<?php 
						$val = old('present_address');
						if($record)
						$val = $record->present_address;

						?>

						<?php echo e(Form::label('present_address',getPhrase('present_address'))); ?>


						<?php echo e(Form::textarea('present_address', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Present Address',

						'ng-model'=>'present_address',

						'rows'=>2,

						'ng-maxlength' => '100',

						'ng-init'=> 'present_address="'.$val.'"',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.present_address.$error" >


	    					<?php echo getValidationMessage('maxlength'); ?>


	    				

						</div>

					</fieldset>



				</div>




				<div class="col-lg-6">


					<fieldset class="form-group">

						<?php 
						$val = old('qualification');
						if($record)
						$val = $record->qualification;

						?>

						<?php echo e(Form::label('qualification', getphrase('qualification'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('qualification', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						getPhrase('PhD student'),

							'ng-model'=>'qualification',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'qualification="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.qualification.$touched && formUsers.qualification.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.qualification.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>




					<fieldset class="form-group">

						<?php 
						$val = old('inst_name');
						if($record)
						$val = $record->inst_name;

						?>

						<?php echo e(Form::label('inst_name', getphrase('inst_name'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('inst_name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'IIT',

							'ng-model'=>'inst_name',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'inst_name="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.inst_name.$touched && formUsers.inst_name.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.inst_name.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						<?php 
						$val = old('state');
						if($record)
						$val = $record->state;

						?>

						<?php echo e(Form::label('state', getphrase('state'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('state', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'UP',

							'ng-model'=>'state',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'state="'.$val.'"',

							'ng-class'=>'{"has-error": formUsers.state.$touched && formUsers.state.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.state.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						
						<?php 
						$readonly = 'readonly="true"';
						$val = old('email');
						if($record)
						$val = $record->email;

						?>

						<?php echo e(Form::label('email', getphrase('email'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::email('email', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'jack@jarvis.com',

							'ng-model'=>'email',

							'required'=> 'true',

							'ng-init'=> 'email="'.$val.'"', 

							'ng-class'=>'{"has-error": formUsers.email.$touched && formUsers.email.$invalid}',

						 $readonly))); ?>


						 <div class="validation-error" ng-messages="formUsers.email.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('email'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">

						<?php 
						  $gender_options = array('Male'=>'Male',
                                  'Female'=>'Female');

						  $val=null;
						  if($record)
              				$val = $record->gender;

						?>


						<?php echo e(Form::label('gender', getphrase('gender'))); ?>


						<span class="text-red">*</span>

						 <?php echo e(Form::select('gender', $gender_options, null, ['placeholder' => getPhrase('select_gender'),'class'=>'form-control',

			              'ng-model'=>'gender',

			              'required'=> 'true',

			              'ng-init'=> 'gender="'.$val.'"', 

			              'ng-class'=>'{"has-error": formUsers.gender.$touched && formUsers.gender.$invalid}'

			             ])); ?>


						 <div class="validation-error" ng-messages="formUsers.gender.$error" >

	    					<?php echo getValidationMessage(); ?>


	    				

						</div>

					</fieldset>




					<fieldset class="form-group">

						<?php 
						  $marital_options = array('Married'=>'Married',
                                  'Unmarried'=>'Unmarried');

						  $val=null;
						  if($record)
              				$val = $record->marital_status;

						?>


						<?php echo e(Form::label('marital_status', getphrase('marital_status'))); ?>


						<span class="text-red">*</span>

						 <?php echo e(Form::select('marital_status', $marital_options,null, ['placeholder' => getPhrase('select_marital_status'),'class'=>'form-control',

			              'ng-model'=>'marital_status',

			              'required'=> 'true',

			               'ng-init'=> 'marital_status="'.$val.'"', 

			              'ng-class'=>'{"has-error": formUsers.marital_status.$touched && formUsers.marital_status.$invalid}'

			             ])); ?>


						 <div class="validation-error" ng-messages="formUsers.marital_status.$error" >

	    					<?php echo getValidationMessage(); ?>


	    				

						</div>

					</fieldset>





					<fieldset class="form-group">


						<?php 
						
						$val = old('father_name');
						if($record)
						$val = $record->father_name;

						?>


						<?php echo e(Form::label('father_name', getphrase('father_name'))); ?>


						<span class="text-red">*</span>

						<?php echo e(Form::text('father_name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'Father Name',

							'ng-model'=>'father_name',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '100',

							'ng-init'=> 'father_name="'.$val.'"', 

							'ng-class'=>'{"has-error": formUsers.father_name.$touched && formUsers.father_name.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.father_name.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


						</div>

					</fieldset>




					<fieldset class="form-group">

						<?php 
						
						$val = old('passport_number');
						if($record)
						$val = $record->passport_number;

						?>

						<?php echo e(Form::label('passport_number', getphrase('passport_number'))); ?>


						
						<?php echo e(Form::text('passport_number', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
						'Passport Number',

							'ng-model'=>'passport_number',

							'ng-maxlength' => '100',

							'ng-init'=> 'passport_number="'.$val.'"', 

							'ng-class'=>'{"has-error": formUsers.passport_number.$touched && formUsers.passport_number.$invalid}',

						))); ?>



						<div class="validation-error" ng-messages="formUsers.passport_number.$error" >

	    					<?php echo getValidationMessage('maxlength'); ?>


						</div>

					</fieldset>



					<fieldset class="form-group">


						<?php 
						
						$val = old('personal_strength');
						if($record)
						$val = $record->personal_strength;

						?>

						<?php echo e(Form::label('personal_strength',getPhrase('personal_strength'))); ?>


						<?php echo e(Form::textarea('personal_strength', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Personal Strengths',

						'ng-model'=>'personal_strength',

						'rows'=>2,
						
						'ng-maxlength' => '100',

						'ng-init'=> 'personal_strength="'.$val.'"', 

						))); ?>



						<div class="validation-error" ng-messages="formUsers.personal_strength.$error" >


	    					<?php echo getValidationMessage('maxlength'); ?>



						</div>

					</fieldset>


					
					

			</div>


		
				

		<div class="col-lg-12">

		<fieldset class="form-group">
			

			<?php echo e(Form::label('work_experience', getphrase('work_experience'))); ?>


			<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#expModal"><?php echo e(getPhrase('manage')); ?></a>


			  <ul ng-repeat="(key,value) in work_exp_data">
			  	<input type="hidden" value="{{value}}" name="workexperiencesave[{{key}}]">
			  	<li>{{value.work_experience}}  from {{value.from_date}} to {{value.to_date}}</li>
			  </ul>




		</fieldset>

		</div>







		<div class="col-lg-12">
		<fieldset class="form-group">

		

			<?php echo e(Form::label('projects_works_done', getphrase('projects_&_works_done'))); ?>


			<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#projectsModal"><?php echo e(getPhrase('manage')); ?></a>

			
			 <ol start="{{key+1}}" ng-repeat="(key,value) in projects_data">
			  	<input type="hidden" name="projects_save[{{key}}]" value="{{value}}">

			  	<li>{{value.project_title}}
			  		<ul ng-show="value.project_description.length">
			  		<li>{{value.project_description}}</li>
			  		</ul>
			  	</li>
			 </ol>

		</fieldset>
		</div>



		<div class="col-lg-12">
		<fieldset class="form-group">

	


			<?php echo e(Form::label('academic_profile', getphrase('academic_profile'))); ?>


			<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#academicModal"><?php echo e(getPhrase('manage')); ?></a>


		
			<table class="table table-striped table-bordered datatable" ng-show="academic_data.length" cellspacing="0" width="100%">


			    <thead>
			      <tr>
			        <th>Examination Passed</th>
			        <th>University/Board</th>
			        <th>Year</th>
			        <th>Marks Obtained</th>
			        <th>Class</th>
			      </tr>
			    </thead>

			    <tbody>

			      <tr ng-repeat="(key,value) in academic_data">
			      	<input type="hidden" name="academic_data[{{key}}]" value="{{value}}">
			        <td>{{value.examination_passed}}</td>
			        <td>{{value.university}}</td>
			        <td>{{value.passed_out_year}}</td>
			        <td>{{value.marks_obtained}}</td>
			        <td>{{value.class}}</td>
			      </tr>
			      
			    </tbody>

			  </table>


		</fieldset>
		</div>





		<div class="col-lg-12">

		<fieldset class="form-group">

			<input type="text" name="skill_type_save" ng-model="skill_type_save" ng-hide="true"/>
			<input type="text" name="skills_known_save" ng-model="skills_known_save" ng-hide="true"/>



			<?php echo e(Form::label('technical_skills', getphrase('technical_skills'))); ?>


			<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#skillsModal"><?php echo e(getPhrase('manage')); ?></a>

				
			<ul class="list" ng-repeat="(key,value) in skills_data">
				<input type="hidden" name="technical_skills_save[{{key}}]" value="{{value}}">
				<li class="list-group-item">
					{{value.skill_type}} : {{value.skills_known}}
				</li>

			</ul>

		</fieldset>


		<fieldset class="form-group">

			<?php 
						
				$val = old('career_objective');
				if($record)
				$val = $record->career_objective;

			?>

			<?php echo e(Form::label('career_objective',getPhrase('career_objective'))); ?>


			<?php echo e(Form::textarea('career_objective', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Career Objective',

			'ng-model'=>'career_objective',

			'ng-init'=> 'career_objective="'.$val.'"',

			'rows'=>5

			))); ?>



		</fieldset>


		<fieldset class="form-group">

			<?php 
						
				$val = old('field_of_interest');
				if($record)
				$val = $record->field_of_interest;

			?>

			<?php echo e(Form::label('field_of_interest',getPhrase('field_of_interest'))); ?>


			<?php echo e(Form::textarea('field_of_interest', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Field of Interest',

			'ng-model'=>'field_of_interest',

			'ng-init'=> 'field_of_interest="'.$val.'"',

			'rows'=>5

			))); ?>



		</fieldset>


		<fieldset class="form-group">

			<?php 
						
				$val = old('subject_taught');
				if($record)
				$val = $record->subject_taught;

			?>

			<?php echo e(Form::label('subject_taught',getPhrase('subject_taught'))); ?>


			<?php echo e(Form::textarea('subject_taught', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Subject Taught',

			'ng-model'=>'subject_taught',

			'ng-init'=> 'subject_taught="'.$val.'"', 

			'rows'=>5

			))); ?>



		</fieldset>

		</div>







		<div class="col-lg-12">
		<fieldset class="form-group">

			
			<?php echo e(Form::label('extra_co_curricular_activities', getphrase('extra_co_curricular_activities'))); ?>


			<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#activitiesModal"><?php echo e(getPhrase('manage')); ?></a>

			<ul ng-repeat="(key,value) in activities_data">
				<input type="hidden" name="activities_data_save[{{key}}]" value="{{value}}">
				<li>{{value.activity_description}}</li>
			</ul>

		</fieldset>
		</div>





		<div class="col-lg-12">
			
			<fieldset class="form-group">

			<?php 
						
				$val = old('declaration');
				if($record)
				$val = $record->declaration;

			?>

			<?php echo e(Form::label('declaration',getPhrase('declaration'))); ?>


			<?php echo e(Form::textarea('declaration', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'Declaration',

			'ng-model'=>'declaration',

			'ng-init'=> 'declaration="'.$val.'"',

			'rows'=>5

			))); ?>



			</fieldset>

		</div>




		<div class="col-lg-12">
			<div class="buttons text-center">
					<button class="btn btn-lg btn-success button" 
					><?php echo e($button_name); ?></button>
			</div>
		</div>





		</div>





		