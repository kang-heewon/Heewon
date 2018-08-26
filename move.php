       <article class="col-md-9 bg-white">
          <h1 class="title">
            <?php echo $otitle; ?> <small>( 문서 이동 )</small>
            <div class="btn-group pull-right" role="group" aria-label="content-tools">
                  <a href="/w/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">돌아가기</a> 
            </div>
          </h1>
		  <?php if (isset($alert)) { ?>
		  <div class="alert alert-danger">
			<i class="fa fa-warning"></i> 테스트
		  </div>
		  <?php } ?>
		  <form method="post">
			  <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
			  <div class="py-1">
			  <label>문서 명 : </label>
			  <input type="text" name="move_title" class="form-control" placeholder="이동할 문서 명" value="<?php echo $otitle; ?>">
			  </div>
			  <div class="py-1">
			  <label>이동 이유 : </label>
			  <input type="text" name="move_desc" class="form-control" placeholder="문서를 이동하는 이유">
			  </div>
			  <div class="py-1">
			  <input type="checkbox" name="move_redirect" value='true' checked> 원래 있던 '<?php echo $otitle; ?>' 문서를 이동된 문서로 리다이렉트 합니다.
			  </div>
			  <button type="submit" class="btn btn-secondary btn-lg pull-right"><i class="fa fa-arrow-circle-right"></i> 이동하기</button>
		  </form>
        </article>