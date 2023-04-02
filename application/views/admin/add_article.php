<?php include('header.php'); ?>

<div class="container">
  <h1>Add Article</h1>
    



<?php echo form_open_multipart('admin/adduservalidtion'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('id')) ;    ?>

<?php echo form_hidden('image_path',date('Y-m-d H:i:s')); ?>

<div class="row">
  <div class="col-lg-6">
<div class="form-group">
  <label for="Article">Article Title :</label>
  
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'article_title','name'=>'article_title','value'=>set_value('article_title')]); ?>
</div>  
</div>
<div class="col-lg-6" style="margin-top: 40px">
  <?php  echo form_error('article_title'); ?>
</div>
</div>




<div class="row">
  <div class="col-lg-6" >
<div class="form-group">
  <label for="Article">Article Body :</label>
  
 <?php echo form_textarea(['class'=>'form-control','type'=>'article_boby', 'placeholder'=>'article_boby','name'=>'article_boby','value'=>set_value('article_boby')]); ?>

</div>
</div> 
<div class="col-lg-6" style="margin-top: 40px">
  <?php  echo form_error('article_boby'); ?>
</div>
</div>

<div class="row">
  <div class="col-lg-6" >
<div class="form-group">
  <label for="Article">Select Images</label>
    
<!--  <?php echo form_upload(['class'=>'form-control','name'=>'image_path']); ?>

</div>
</div> 
<div class="col-lg-6" style="margin-top: 40px">
  <?php if(isset($upload_error)) { echo $upload_error; } ?>
</div>
</div> -->





<?php  echo form_submit(['type'=>'Submit','class'=>'btn btn-success','value'=>'Submit']) ?>
<?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']) ?>



</div>



<?php include('footer.php'); ?>