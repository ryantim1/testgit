<?php 



  $answers = json_decode($question->answers);



    // dd($answers);

 ?>



 <style>

       .para-left-panel,.para-right-panel{position: relative;}

       .para-left-panel::after{position: absolute;content: "";width: 1px;height: 100%;background: #e6e6e6;top: 0;right:  0;

       }

       .para-right-panel::after{position: absolute;content: "";width: 1px;height: 100%;background: #e6e6e6;top: 0;left: -1px;

       }

       .para-main-question{min-height: 100px;max-height: 600px;overflow-y: auto;padding-left: 12px;}

       .c-right{float: right;}

       .border-gray{border:5px solid #e6e6e6;padding: 10px;margin-bottom: 30px;}

       .bg-gray-btn{       background: #f6f6f6;

    padding: 10px 10px 0px 10px;

    border-top: 1px solid #e6e6e6;

    bottom: -10px;

    position: relative;

    margin: 0 5px;}

    .bg-gray-btn .btn-sm{font-size: 12px;

    padding: 8px 7px;}
.para-main-content{
    border-right: 0px solid #006caa;
    box-shadow: 4px 0px 0px 0px #006caa;
    padding: 20px;
    height: calc(100vh - 110px);
}
    hr{display: none}
    .questions-paralist{font-size: 20px;
    padding: 23px !important;    padding-left: 37px !important;
    padding-top: 12px !important;}

  /* .border-gray input[type="radio"] + label span.fa-stack, .border-gray input[type="checkbox"] + label span.fa-stack{margin-top: 12px;}*/

    /*.choice-img{display: inline-block;}*/
/*@media(max-width:768px) {
    .para-main-content{    height: calc(100vh - 400px) !important;}
  }*/
</style>



<div class="border-gray grey-border" style="border:none !important;">



<div class="row">



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 para-left-panel para-main-content">



            <div class="para-main-question questions questions-paralist">  



               <span class="language_l1" style="color: black;"> <?php echo $question->question; ?>  </span>



                       <?php if($question->question_l2): ?> 

                         <?php if($question->question_type == 'radio' || $question->question_type == 'checkbox' || $question->question_type == 'blanks' || $question->question_type == 'match'): ?>

                         

                       <span class="language_l2" style="display: none; color: black;"> <?php echo $question->question_l2; ?>   </span>

                       <?php else: ?>

                       <span class="language_l2" style="display: none;color: black;"> <?php echo $question->question; ?>   </span>

                         <?php endif; ?>

                       <?php else: ?>

                       <span class="language_l2" style="display: none;color: black;"> <?php echo $question->question; ?>   </span>

                       <?php endif; ?>

                         <div class="row">

                                <div class="col-md-8 text-center">
                                                        
                                          <?php if($question->question_file): ?>

                                              <img class="image img-responsive" src="<?php echo e($image_path.$question->question_file); ?>" >

                                              <?php endif; ?>
                                                             
                                  </div>


                                <div class="col-md-4">
                                                                  
                                </div>


                           </div>



            </div>



    </div>

  

 



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 para-right-panel panel-right para-ques-get questions-paralist">



        <ul class="questions-container">



             <div id="para_questions_<?php echo e($total_para_ques); ?>" class="para-vis">



            <?php $i=0; $q=1;?>

            <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php

              

             $options    = (array)$answer->options; 

             $option_img = isset($answer->options_images)? (array)$answer->options_images: 0 ; 


             // dd($answers);



              $optionsl2 = null;

             

            



             ?>

             



       



            <div class="question_para"  style="display:none;" >







                <div class="question">

                    <p>

                        <span class="language_l1" style="color: black;"><?php echo $answer->question; ?></span>

                       

                        <span class="language_l2" style="display: none;color: black;"><?php echo $answer->question; ?></span>



                       <?php if(isset($answer->has_file)): ?>



                        <?php if($answer->has_file==1 && $answer->file_name !=''): ?>



                        <img src="<?php echo e($image_path.$answer->file_name); ?>"  style="margin-top: 10px;">



                        <?php endif; ?>

                        

                      <?php endif; ?>



                      

                        

                    </p>

                </div>

                <div class="select-answer">



                    <div class="row ">

                        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            

                        <?php $index = 1; ?>

                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $value1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    

                        <div class="col-md-12">

                            <input id="<?php echo e($question->id.'_'.$i.'_'.$index); ?>" value="<?php echo e($index); ?>" name="<?php echo e($question->id); ?>[<?php echo e($i); ?>]" type="radio"/>

                            <label for="<?php echo e($question->id.'_'.$i.'_'.$index); ?>">

                                <span class="fa-stack radio-button button-radio">

                                    <i class="mdi mdi-check active">

                                    </i>

                                </span>

                                <span class="language_l1" style="margin-top: 15px;color: black;"><?php echo $value1; ?></span>



                            <?php if( $option_img ): ?>

                                 <?php if( count($option_img) ): ?>

                                   

                                 <?php

                                  $temp1   = 0;
                                  $temp2   = 0;
                                  
                                  foreach ( $option_img as $o_key => $o_value ) {

                                   $temp1  = (array)$o_value;

                                  }

                                  if($temp1){
                                      
                                      $temp2  = isset($temp1[$key1])? (array)$temp1[$key1]:0; 

                                  }
                                
                                 ?>

                                  
                                   <?php if( $temp2 ): ?>
                                       
                                       <img src="<?php echo e($image_path.$temp2['file_name']); ?>" class="choice-img" style="margin-top: 10px;" >


                                    <?php endif; ?>



                                 <?php endif; ?>


                            <?php endif; ?>





                                <?php if($optionsl2): ?>

                                <span class="language_l2" style="display: none;color: black;"><?php echo $value1; ?></span>



                                <?php else: ?>

                                <span class="language_l2" style="display: none;color: black;"><?php echo $value1; ?></span>

                                

                                <?php endif; ?>

                            </label>



                            





                        </div>

                         <?php $index++; ?> 

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                        

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php $i++; ?>

                    </div>

                  

                 

                </div>



            </div>



       



            





          



                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                 </div>



            

        </ul>

        </div>

        <div class="clearfix">
          
        </div>

        <div class="bg-gray-btn">

         <div class="row parashow">
                        
                        <div class="col-md-12">
                                



                              



                                </div>




                        </div>

        </div>

    





                  





</div>

</div>