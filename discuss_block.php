<?php foreach ($query->result() as $row) { ?>
<div class="card mt-2 mb-2">
	<div class="card-header" style="padding:.30rem 1rem;">
		<span id="ds-2" class="dwe-line">#<?php echo $row->v_id; ?></span> <?php echo $row->user; ?>
		<span class="pull-right"><?php echo $row->date; ?></span>
	 </div>
	<div class="card-body p-3">
		<?php echo $row->text; ?>
	</div>
</div>
<?php } ?>