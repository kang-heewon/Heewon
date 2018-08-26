        <article class="col-md-9 bg-white">
          <h1 class="title">
            <?php echo $title; ?>
          </h1>
          <table class="table">
			  <thead>
				<tr>
				  <th scope="col">판</th>
				  <th scope="col">문서</th>
				  <th scope="col">변경점</th>
				  <th scope="col">기여자</th>
				  <th scope="col">날짜</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php foreach ($query->result() as $row) { ?>
				<tr>
				  <td class="b">r<?php echo $row->r_num ?></td>
				  <td>
				    <a href="/w/<?php echo urlencode($row->text) ?>" class="text-black"><?php echo $row->text ?></a>
					<a href="/history/<?php echo urlencode($row->text) ?>" class="btn btn-xs btn-white" title="해당 문서의 역사를 봅니다.">역사</a>
					<a href="/discuss/d/<?php echo urlencode($row->text) ?>" class="btn btn-xs btn-white" title="해당 문서의 토론을 봅니다.">토론</a>
				  </td>
				  <td>
				  <?php if (substr($row->change_int, 0, 1) == '+') {?>
						<span class="p-1 bg-success text-white"><?php echo $row->change_int ?></span>
					<?php } else if (substr($row->change_int, 0, 1) == '-') { ?>
						<span class="p-1 bg-danger text-white"><?php echo $row->change_int ?></span>
					<?php } else if ($row->change_int == 0) { ?>
						<span class="p-1 bg-warning text-white"><?php echo $row->change_int ?></span>
					<?php } ?>
				  </td>
				  <td><?php echo $row->user ?></td>
				  <td><?php echo $row->date ?></td>
				</tr>
				<?php } ?>
			  </tbody>
			</table>
        </article>