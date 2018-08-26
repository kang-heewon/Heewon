        <article class="col-md-9 bg-white">
          <h1 class="title">
            <?php echo $title; ?>
            <div class="btn-group pull-right" role="group" aria-label="content-tools">
                  <a href="/edit/<?php echo $otitle; ?>" class="btn btn-white tools-btn">편집</a>
            </div>
          </h1>
		  <form method="get" action="/diff/<?php echo $otitle; ?>" class="ddark-diff">
			<div class="input-group">
			  <input type="number" class="form-control" name="old" min="1" placeholder="이전" required>
			  <input type="number" class="form-control" name="rev" min="1" placeholder="다음" required>
			  <div class="input-group-append">
				<button class="btn btn-secondary" type="submit">비교</button>
			  </div>
			</div>
		  </form>
          <table class="table">
			  <thead>
				<tr>
				  <th scope="col">버전</th>
				  <th scope="col">날짜</th>
				  <th scope="col">변경점</th>
				  <th scope="col">사유</th>
				  <th scope="col">기여자</th>
				  <th scope="col">기능</th>
				</tr>
			  </thead>
			  <tbody>
				<?php foreach ($query->result() as $row) { ?>
				<tr>
				  <th scope="row">r<?php echo $row->r_num; ?></th>
				  <td><?php echo $row->date ?></td>
				  <td>
				  <?php if (substr($row->change_int, 0, 1) == '+') {?>
						<span class="p-1 bg-success text-white"><?php echo $row->change_int ?></span>
					<?php } else if (substr($row->change_int, 0, 1) == '-') { ?>
						<span class="p-1 bg-danger text-white"><?php echo $row->change_int ?></span>
					<?php } else if ($row->change_int == 0) { ?>
						<span class="p-1 bg-warning text-white"><?php echo $row->change_int ?></span>
					<?php } ?>
				  </td>
				  <td><?php echo $row->r_desc ?></td>
				  <td><?php echo $row->user ?></td>
				  <td>
					<a href="/w/<?php echo $otitle; ?>/<?php echo $row->r_num; ?>" class="btn btn-xs btn-white" title="해당 리비전의 내용을 봅니다.">보기</a>
					<a href="/raw/<?php echo $otitle; ?>/<?php echo $row->r_num; ?>" class="btn btn-xs btn-white" title="해당 리비전의 raw 를 봅니다.">RAW</a>
					<a href="/revert/<?php echo $otitle."/".$row->r_num;?>" class="btn btn-xs btn-white" title="현재 문서를 해당 리비전으로 되돌립니다.">되돌리기</a>
				  </td>
				</tr>
				<?php } ?>
			  </tbody>
			</table>
        </article>