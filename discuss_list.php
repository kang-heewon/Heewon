        <article class="col-md-9 bg-white">
          <h1 class="title"><?php echo $otitle; ?> <small>(토론)</small>
			<section class="ddark-btn">
				<div class="btn-group pull-right" role="group" aria-label="content-tools">
					  <a href="/w/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">돌아가기</a>
				</div>
			</section>
		  </h1>
		  <h3>열린 토론 목록</h3>
		  <ul>

		  <?php $count = 0;
			  foreach ($query_active->result() as $row) {
				  $count++;?>
			<li><a href="/discuss/v/<?php echo $count; ?>"><?php echo $count; ?>. <?php echo $row->title; ?></a></li>
		  <?php } ?>
		  </ul>
		  <h3>닫힌 토론 목록</h3>
		  <?php if ($query_close->num_rows() > 0) { ?>
		  <ul>
			 <?php $count = 0;
			  foreach ($query_close->result() as $row) {
				  $count++;?>
			<li><a href="/discuss/v/<?php echo $count; ?>"><?php echo $count; ?>. <?php echo $row->title; ?></a></li>
		  <?php } ?>
		  </ul>
			<?php } else { ?>
			목록이 없습니다.
			<?php } ?>
		  <hr>
		  <h3 class="border-0">새로운 토론 생성</h3>
		  <form method="post">
			  <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
			  <div class="py-1">
			  <label>제목 : </label>
			  <input type="text" name="title" class="form-control" placeholder="토론 제목">
			  </div>
			  <div class="py-1">
			  <label>내용 : </label>
			  <textarea name="text" class="form-control" placeholder="토론 내용" rows="4"></textarea>
			  </div>
			  <button type="submit" class="btn btn-secondary btn-lg pull-right">생성</button>
		  </form>
        </article>