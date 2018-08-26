        <article class="col-md-9 bg-white">
		  <script>var id = '<?php echo $oid; ?> ';</script>
          <h1 class="title"><?php echo $dis_title; ?> <small>(<?php echo $otitle; ?> 문서 토론)</small>
			<section class="ddark-btn">
				<div class="btn-group pull-right" role="group" aria-label="content-tools">
					  <a href="/w/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">문서</a>
					  <a href="/discuss/d/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">토론 목록</a>
				</div>
			</section>
		  </h1>
		  <h3>열린 토론 목록</h3>
		  <section class="dwe-discuss">
			  <?php foreach ($query->result() as $row) { ?>
				<div class="card mt-2 mb-2">
					<div class="card-header" style="padding:.30rem 1rem;">
						<span id="ds-2" class="dwe-line">#<?php echo $row->id; ?></span> <?php echo $row->user; ?>
						<span class="pull-right"><?php echo $row->date; ?></span>
					 </div>
					<div class="card-body p-3">
						<?php echo $row->text; ?>
					</div>
				</div>
				<?php } ?>
		  </section>
		  <h3 class="border-0 mt-3">새로운 토론 생성</h3>
		  <form method="post">
			  <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
			  <div class="py-1">
			  <label>내용 : </label>
			  <textarea name="text" class="form-control" placeholder="토론 내용" rows="4"></textarea>
			  </div>
			  <button type="submit" class="btn btn-secondary btn-lg pull-right">등록</button>
		  </form>
        </article>
