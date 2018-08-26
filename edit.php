        <article class="col-md-9 bg-white">
          <h1 class="title">
            <?php echo $title; ?> <?php if ($s_type == 'new') { ?><small>( 새 문서 생성 )</small><?php } ?>
            <div class="btn-group pull-right" role="group" aria-label="content-tools">
                  <a href="/w/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">돌아가기</a> 
            </div>
          </h1>
		  <form method="post">
			  <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
			  <textarea class="wiki-edit-form form-control" name="wtext"<?php if ($s_type == 'new') { ?> placeholder="작성할 내용을 입력하세요!"<?php } ?>><?php if ($s_type != 'new') { echo $text; } ?></textarea>
			  <div class="py-1">
			  <label>편집 설명 : </label>
			  <input type="text" name="desc" class="form-control">
			  <input type="checkbox" class="my-3" name="iagree" id="iagree"> <label for="iagreee">문서 편집을 저장할 경우, <b>당신의 기여 내용이 <a href="<?php echo license_url ?>"><?php echo license;?></a> 으로 배포되는 것에 동의하는 것으로 간주합니다.</b></label>
			  </div>
			  <button type="submit" class="btn btn-secondary btn-lg pull-right"><i class="fa fa-thumbs-up"></i> 전송!</button>
		  </form>
        </article>