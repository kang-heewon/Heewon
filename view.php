				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								<div class="jumbotron">
									알림
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h2 class="card-title"><?php echo $title; ?></h2>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> 수정</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> 토론</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> 역사</a>
													<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> 역링크</a>
													<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> 이동</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> 삭제</a>
											</div>
										</div>
										<?php if (isset($rev)) { ?><h6 class="card-subtitle mb-2 text-muted">( <?php echo $rev; ?>번째 판 )</h6><?php } ?>
										<div class="articles-container">
											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-10">
															<?php print_r ($text); ?>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block rc-card">
										<h3 class="card-title">최근 변경</h3>
										<ul class="timeline list-group list-group-flush recentchange rc-card-content">
										</ul>
									</div>
								</div>
							</div>
						</section>
					