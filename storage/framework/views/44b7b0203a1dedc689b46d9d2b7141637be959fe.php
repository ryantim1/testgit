
<?php $answers = json_decode($question->answers); 
 
$path= EXAM_UPLOADS.$question->question_file;

?>
 <?php if($question->question_type=='audio'): ?>
    <div class="row">
    <div class="col-lg-12 text-center">
        <audio controls class="audio-controls">
          <source src="<?php echo e($path); ?>" type="audio/ogg">
          <source src="<?php echo e($path); ?>" type="audio/mpeg">
        </audio>
        </div>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-12">
        <ul class="questions-container">
            <div id="para_questions">

            <?php $i=0; $q=1; ?>
            <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
            $options = (array) $answer->options; 
            $option_img = isset($answer->options_images)? (array)$answer->options_images: null ; 
             $optionsl2 = null;
            
            ?>
            <div class="question_para" style="display: none;">
                <div class="question">
                    <h3>
                         Q<?php echo e($q++); ?>) <span class="language_l1"><?php echo $answer->question; ?></span>
                       
                        <span class="language_l2" style="display: none;"><?php echo $answer->question; ?></span>
                        
                      <?php if(isset($answer->has_file)): ?>

                        <?php if($answer->has_file==1 && $answer->file_name !=''): ?>

                        <img src="<?php echo e($image_path.$answer->file_name); ?>" >

                        <?php endif; ?>
                        
                      <?php endif; ?>


                    </h3>
                </div>
                <div class="select-answer">
                    <ul class="row">
                          <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $index = 1; ?>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $value1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <li class="col-md-6">
                            <input id="<?php echo e($question->id.'_'.$i.'_'.$index); ?>" value="<?php echo e($index); ?>" name="<?php echo e($question->id); ?>[<?php echo e($i); ?>]" type="radio"/>
                            <label for="<?php echo e($question->id.'_'.$i.'_'.$index); ?>">
                                <span class="fa-stack radio-button">
                                    <i class="mdi mdi-check active">
                                    </i>
                                </span>
                                 <span class="language_l1"><?php echo $value1; ?></span>

                                   <?php if( count($option_img) ): ?>

                                 <?php

                                  $t1  = isset($option_img[$key])? (array)$option_img[$key]: null;
                                  
                                  $t2  = null;

                                  if($t1){

                                  $t2  = isset($t1[$key1])? (array)$t1[$key1]: null; 
                                }


                                 ?>

                                   <?php if( count($t1) && count((array)$t2) ): ?>

                                     <?php if( isset($t2['has_file']) && $t2['has_file'] == 1  ): ?>

                                  
                                        <img src="<?php echo e($image_path.$t2['file_name']); ?>" >

                                      <?php endif; ?>

                                    <?php endif; ?>

                                 <?php endif; ?>
                                    
                                <?php if($optionsl2): ?>
                                <span class="language_l2" style="display: none;"><?php echo $value1; ?></span>
                                <?php else: ?>
                                <span class="language_l2" style="display: none;"><?php echo $value1; ?></span>
                                <?php endif; ?>
                            </label>
                        </li>
                         <?php $index++; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                    </ul>
                </div>
            </div>
          
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
           
        </ul>
    </div>
</div>
