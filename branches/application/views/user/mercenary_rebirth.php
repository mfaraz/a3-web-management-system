<?extend('template/user.template.php')?>

<?php startblock('cleaner_h40a'); ?>
<h2>Mercenary Rebirth</h2>

<p><font color="#FF0000"><blink><?=@$info?></blink></font></p>

	<script src="<?=base_url()?>js/ui/jquery.ui.core.js"></script>
	<script src="<?=base_url()?>js/ui/jquery.ui.widget.js"></script>
	<script src="<?=base_url()?>js/ui/jquery.ui.accordion.js"></script>

	<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	</script>

<p>Here is how you should do to rebirth your mercenary. Click on ur hero then click on your mercenary corresponded to your character. Thats it.<br>Have fun tanking medusa with your mercenary!!</p>
		<table border="0" width="100%" style="border-collapse: collapse">
		<tr>
		<td align="center"><b>Rebirth</b></td>
		<td align="center"><b>Mercenary Level</b></td>
		<td align="center"><b>Wz Needed</b></td>
		</tr>															
		<?php
		for ($i = $this->config->item('merclvlrb'); $i <= 300; $i=$i+10)
			{
				$rbirthmerc = ($i - $this->config->item('merclvlrb')) / 10 ;
				$rbirthwz = $this->config->item('mercwzrb') * ($rbirthmerc);
				echo "<tr>";
				echo "<td align='center'>$rbirthmerc</td>";
				echo "<td align='center'>$i</td>";
				echo "<td align='center'>$rbirthwz wz</td>";
				echo "</tr>";
			};
		?>															
		</table>

<?=form_open('', array('id' => 'search'))?>
<div id="accordion">
	<?if($query->num_rows() == 0):?>
		<p>You did not yet created any character</p>
	<?else:?>
		<?foreach ($query->result() as $char):?>
			<?$heroes1 = $char->c_id?>

				<h3><a href="#"><?=$char->c_id?></a></h3>
				<div>

					<table border="0" width="100%" style="border-collapse: collapse">
					<?if($this->hstable->hstable_merc($heroes1)->num_rows() == 0):?>
							<tr>
							<td colspan="2">You do not have any mercenary for <?=$heroes1?></td>
							</tr>
					<?else:?>
							<?foreach($this->hstable->hstable_merc($heroes1)->result() as $merc):?>
									<?$merc1 = $merc->HSName?>
									<tr>
										<td>Hero</td>
										<td>Mercenary</td>
									</tr>
									<tr>
										<td><?=form_radio('character', $heroes1)?>&nbsp;<font color='#0000FF'><?=$heroes1?></font>&nbsp;&nbsp;<?=form_error('character')?></td>
										<td><?=form_radio('merc', $merc->HSID)?>&nbsp;<font color='#0000FF'><?=$merc1?></font>&nbsp;&nbsp;<?=form_error('merc')?></td>
									</tr>
						<?endforeach?>
					<?endif?>
					</table>
				</div>
		<?endforeach?>
	<?endif?>

</div>
<p><?=form_submit('merc_rebirth', 'Mercenary Rebirth')?></p>
<?=form_close()?>
<?php endblock(); ?>

<?php startblock('cleaner_h40b'); ?>
<p>&nbsp;</p>
<p>&nbsp;</p> 
<?php endblock(); ?>

<?end_extend()?>