<div class="popover_choice" style="padding-bottom:5px;">
	<div class="legend">Delegate the publishing of the Event to another organisation</div>
	<p class="white" style="background:red;">Warning: You are about to request another organisation to take ownership of this event.</p>
	<div class="popover_choice_main overlay_spacing bottomGap" id ="popover_choice_main">
		<?php
			echo $this->Form->create('EventDelegation', array('style' => 'margin:0px;', 'id' => 'PromptForm'));
			echo $this->Form->input('org_id', array(
					'label' => 'Target Organisation',
					'options' => array($org),
					'empty' => 'Select organisation',
					'div' => 'clear'
			));
			echo $this->Form->input('distribution', array(
					'options' => $distributionOptions,
					'label' => 'Desired Distribution',
			));
			?>
			<div id="sgid" class="hidden">
				<?php
					echo $this->Form->input('sharing_group_id', array(
							'options' => $sgOptions,
							'label' => 'Desired Sharing Group',
							'div' => false
					));
				?>
			</div>
			<?php
			echo $this->Form->input('message', array(
					'label' => false,
					'div' => false,
					'type' => 'textarea',
					'style' => 'width:665px;',
					'placeholder' => 'Message to the recipient organisation'
			));
			echo $this->Form->submit('Yes', array('div' => false, 'class' => 'btn btn-primary'));
		?>
		<span class="btn btn-inverse" id="PromptNoButton" onClick="cancelPopoverForm();" style="float:right;">No</span>
		<?php
			echo $this->Form->end();
		?>
	</div>
	<?php
	?>
</div>
<script type="text/javascript">

$(document).ready(function() {
	$('#EventDelegationDistribution').change(function() {
		if ($('#EventDelegationDistribution').val() == 4) $('#sgid').show();
		else $('#sgid').hide();
	});
});

</script>
<?php echo $this->Js->writeBuffer();
