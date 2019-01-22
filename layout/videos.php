<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Videos</h2>
						</div>
					</div>
						<?php
						if($categories!=null && sizeof($categories)>0)
							foreach ($catDate as $post){
						?>
							<!-- post -->
							<div class="col-md-4">
								<div class="post">
									<a class="post-img" target="_blank" href="<?=$post["url"]?>"><img src="<?=$post["img"]?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-1" target="_blank" href="<?=$post["url"]?>"><?=$post["name"]?></a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a  target="_blank" href="<?=$post["url"]?>"><?=substr($post["caption"],0,170)?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
						<?php }
						?>
					
				</div>
				<!-- /row -->

					<nav aria-label="Page navigation example">
						  <ul class="pagination">
							
							<?php 
								if($current==1){
							?>
							<li class="page-item"><a  class="page-link" >First</a></li>
							<li class="page-item"><a  class="page-link" >Previous</a></li>
							<?php
								}else{
							?>
							<li class="page-item"><a class="page-link" href="index.php?cat_id=<?=$cat_id?>&page=1">First</a></li>
							<li class="page-item"><a class="page-link" href="index.php?cat_id=<?=$cat_id?>&page=<?=$prev?>">Previous</a></li>
							<?php
								}
							?>
							
							<?php
								if($current==$last){
							?>
							<li class="page-item"><a  class="page-link">Next</a></li>
							<li class="page-item"><a  class="page-link" >Last</a></li>
							<?php
								}else{
							?>
							<li class="page-item"><a  class="page-link" href="index.php?cat_id=<?=$cat_id?>&page=<?=$next?>">Next</a></li>
							<li class="page-item"><a class="page-link" href="index.php?cat_id=<?=$cat_id?>&page=<?=$last?>">Last</a></li>
							<?php
								}
							?>
							
							
						  </ul>
						</nav>
				
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		