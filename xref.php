        <article class="col-md-9 bg-white">
          <h1 class="title"><?php echo $otitle; ?> <small>(역링크)</small></h1>
		  <ul>
          <?php foreach ($query1->result() as $row) { ?>
			<li><a href="/w/<?php echo urlencode($row->title); ?>"><?php echo $row->title; ?></a></li>
		  <?php } ?>
		  <?php foreach ($query2->result() as $row) { ?>
			<li><a href="/w/<?php echo urlencode($row->title); ?>"><?php echo $row->title; ?></a></li>
		  <?php } ?>
		  </ul>
        </article>