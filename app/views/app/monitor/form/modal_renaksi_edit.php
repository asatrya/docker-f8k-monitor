<script> 
    // wait for the DOM to be loaded 
    jQuery(document).ready(function() {
		
		$('#renaksi_edit').ajaxForm(function(data) {
			if(data == 'success') {
				location.reload();
				} else {
				var container = $('#myModal');
				container.html(data);
			}
		}); 
	}); 
</script>  
<?php 
	if ($renaksi->num_rows() > 0)
	{
		$renaksi_detil = $renaksi->row();
	}
	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3 class="modal-title"><b>Edit Output</b></h3>
		</div>
		<div class="modal-body">
			<?php 
				if(validation_errors()){
					echo "
					<div class='form-group'>
					<label class='control-label col-md-12'><div class='alert alert-danger'>
					<button class=close data-close='alert'></button>
					<div class='text-center'>Form harus diisi</div>
					</div></label>
					</div>";
				}
			?>
			<?=form_open('monitor/renaksi_edit', 'id="renaksi_edit"', array('class'=>'form-horizontal'));?>
			<div class="form-body">
				<div class="scroller" data-always-visible="1" data-rail-visible1="1">
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-icon right">
								<i class="fa"></i>
								<input type="text" class="form-control" name="renaksi" value="<?php echo set_value('renaksi',$renaksi_detil->name); ?>"/>
								<input type="hidden" name="renaksi_id" value="<?php echo set_value('renaksi_id',$this->encrypt->encode($renaksi_detil->id)); ?>"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<?=form_submit('ubah', 'Ubah', 'class="btn blue"'); ?>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>