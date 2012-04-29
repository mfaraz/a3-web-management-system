<?extend('template/user.template.php')?>

<?php startblock('cleaner_h40a'); ?>
<h2>News and Announcement</h2>

<?if($news->num_rows() == 0):?>
	<p>No news or announcement has been created</p>
<?else:?>

	<?foreach($news->result() as $newss):?>
		<hr />
		<p><b><?=ucwords($newss->Subject)?></b></p>
		<p><?=date_my($newss->Date)?></p>
		<?=$newss->HTML?>
		<p>Regards<br /><b><font color="#008080"><?=ucwords($newss->Author)?></font></b></p>
		<hr />
		
		<?$r = $this->a3web_comment->reply($newss->Bil)?>
		
		<?if($r->num_rows() < 1):?>
			<p>No reply yet</p>
		<?else:?>
				<?foreach ($r->result() as $reply):?>
					<hr />
					<?foreach($char->result() as $y):?>
						<?if($y->c_id == $reply->author):?>
							<p><?=anchor('user/reply/'.$reply->bil, 'Edit', array('title' => 'Edit Post '.$reply->bil))?></p>
						<?endif?>
					<?endforeach?>
					<?if($this->session->userdata('group') == 'GM'):?>
					<p><?=anchor('user/reply/'.$reply->bil, 'GM Edit', array('title' => 'GM Edit Post '.$reply->bil))?>&nbsp;<?=anchor('user/replyr/'.$reply->bil, 'GM Remove', array('title' => 'GM Remove Post '.$reply->bil))?></p>
					<?endif?>
					<p>Reply from <font color="#008080"><?=ucwords($reply->author)?></font> on <?=date_my($reply->date)?></p>
					<?=$reply->html?>
					<hr />
				<?endforeach?>
		<?endif?>
	<?endforeach?>
	
<?endif?>
<?php endblock(); ?>

<?php startblock('cleaner_h40b'); ?>
<h2>Reply</h2>
<?=form_open('', '', array('bil_post' => $newss->Bil))?>
<p>
<?=ckeditor('news_reply', '', $this->session->userdata('group'))?>&nbsp;<?=form_error('news_reply')?>
</p>
<p>Author</p>
<?foreach($char->result() as $y):?>
<p><?=form_radio('character', $y->c_id, set_select('character', $y->c_id, TRUE))?>&nbsp;&nbsp;<font color='#0000FF'><?=$y->c_id?></font>&nbsp;<?=form_error('character')?></p>
<?endforeach?>
<p><?=form_submit('rely_news', 'Reply News')?></p>
<?=form_close()?>




<?php endblock(); ?>

<?end_extend()?>