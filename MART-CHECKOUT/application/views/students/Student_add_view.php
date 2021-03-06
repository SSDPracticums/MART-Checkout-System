<div class="container">
    <div class="row pl-2 pr-2">
		<div class="col-sm-6 col-lg-6 ml-auto mr-auto mt-5">
			
			<h1>Add New Student</h1>
			
			<br>
			<?php 
			
			$active_options = array(
                'inactive' => 'Inactive',
                'active' => 'Active'
                );
			$eligible_options = array(
                'ineligible' => 'Ineligible',
                'eligible' => 'Eligible'
                );
				
			echo form_open('students/add');
			
			?>
			
            <!-- banner id -->
            <div class="form-group">
				<label for="banner_id" class="control-label">Banner ID</label>
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text">@</span>
				  </div>
				  
				  <?php 
				  echo form_input(array('id'=>'banner_id','name'=>'banner_id', 'value' => set_value('banner_id'), 'class' => 'form-control')); 
				  ?>
				  
				</div>
				<span class="text-danger"><?php echo form_error('banner_id'); ?></span>
            </div>
			
			
            <!-- name -->
            <?php
			echo form_label('Name'); 
            echo form_input(array('id'=>'`name`','name'=>'name', 'value' => set_value('name'), 'class' => 'form-control')); 
			?>
			<span class="text-danger"><?php echo form_error('name');?></span>
			<br>
            
            <?php
            echo form_label('Email'); 
            echo form_input(array('id'=>'email','name'=>'email','value' => set_value('email'), 'class' => 'form-control')); 			?>
			<span class="text-danger"><?php echo form_error('email');?></span>
			<br>
			
			<?php
            echo form_label('Phone'); 
            echo form_input(array('id'=>'phone','name'=>'phone', 'value' => set_value('phone'), 'class' => 'form-control'));
			?>
			<span class = "text-danger"><?php echo form_error('phone');?></span>
			<br>
			
			<?php
            echo form_label('Clearance Level'); 
            echo form_input(array('id'=>'clearance_level','name'=>'clearance_level', 'value' => set_value('clearance_level'), 'class' => 'form-control'));
			?>
			<br>
			<?php
       
            echo form_label('Amount Owed'); 
            echo form_input(array('id'=>'amount_owed','name'=>'amount_owed', 'value' => set_value('amount_owed'), 'class' => 'form-control')); 
			?>
			<span class="text-danger"><?php echo form_error('amount_owed');?></span>
			<br>
			
            <div class="form-group">
			<?php
            echo form_label('Enrollment Status'); 
            echo form_dropdown('active', $active_options, set_value('active')); 
          	?>
			</div>
            <div class="form-group">
			<?php
            echo form_label('Eligibility Status'); 
            echo form_dropdown('eligible', $eligible_options, set_value('eligible')); 
            ?>
			</div>
			
			<?php
            echo form_input(array('type'=>'submit','value'=>'Add', 'class'=> 'btn btn-primary')); 
            echo form_close(); 
			?> 
	 </div>
   </div>
</div>