        <div class="col-md-9 bg-white">
		<?php if ($this->input->get('q')) { ?>
          <h1 class="title">
            ' <?php echo $this->input->get('q'); ?> ' 검색 결과
          </h1>
		  <?php if ($query->num_rows() > 0) { ?>
		  <div class="list-group">
			  <?php foreach ($query->result() as $row) { ?>
			  <a href="/w/<?php echo urlencode($row->title); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
				  <h5 class="mb-1"><?php echo $row->title; ?></h5>
				</div>
				<p class="mb-1"><?php echo substr($row->text, 0, 50); ?></p>
			  </a>
			  <?php } ?>
			</div>
			<?php } else { ?>
			<p>검색 결과가 없습니다 :(</p>
			<p><a href="/edit/<?php echo urlencode($this->input->get('q')); ?>">새 문서를 생성하실 수도 있습니다.</a></p>
			<?php } ?>
		<?php } ?>
        </div>