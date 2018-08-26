        <article class="col-md-9 bg-white">
          <h1 class="title">
<?php echo $title; ?> <?php if ($rev) { ?><small>( <?php echo $rev; ?>번째 판 )</small><?php } ?>
<div class="btn-group pull-right" role="group" aria-label="content-tools">
                  <a href="/w/<?php echo urlencode($otitle); ?>" class="btn btn-white tools-btn">돌아가기</a> 
                  <button type="button" class="btn btn-white tools-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">메뉴다 썅년들아</a>
                </div>
            </div>
          </h1>
		  <form method="post">
			  <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
			  <div class="py-1">
			  <label>되돌리기 이유 : </label>
			  <input type="text" name="desc" class="form-control">
			  </div>
			  <button type="submit" class="btn btn-secondary btn-lg pull-right"><i class="fa fa-thumbs-up"></i> 전송!</button>
		  </form>
        </article>