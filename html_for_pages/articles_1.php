<?php

$featcont='';
$findmorecont='';

require_once 'articles/featured.php';
require_once 'articles/findMore.php';
?>

<DOCTYPE! html>

<head>
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\articles_1.css">
		<script src="Javascript\articles.js"></script>
		<script src="Javascript\hefo.js"></script>



</head>
<body>
<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php require_once 'Integral/header.php';?>
                
	</div>
<div id="content">
	<div id="section1">
		<div id = "featured">
			<h1 class="part">Featured</h1>
			<hr/>
			<!-- php -->
                        <?php echo $featcont; ?>
		</div>

		<div id = "find_more">
			<h1 class="part">Find More</h1>
			<hr/>
			<?php echo $findmorecont; ?>
		</div>
	</div>
	<div id = "morenews">
	<hr/>
		<div id="selector">
		<ul id = "news_tiles">
			<li>
			<div class= "arrow">
				<img src="ImgContent\articles\arrowleft.png" height="140">
			</div>
			</li>
			<li>
				<div class="article_tile" id="firsttile">
					<div class = "news_overlap">
						<a href ="http://www.theguardian.com/business/2016/feb/11/fyffes-accused-disrespecting-workers-rights">
							<div id="One">
								<p>Fyffes accused of disrespecting
									plantation workers' rights
								</p>

								<p>
									http://www.theguardian.com/business/2016/feb/11/fyffes-accused-disrespecting-workers-rights
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="ImgContent\articles\woman.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="http://www.foodispower.org/bananas/">
							<div id="Two">
								<p>Peeling Back the Truth on Bananas
								</p>

								<p>
									http://www.foodispower.org/bananas/
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="ImgContent\articles\plant.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="https://nacla.org/photo-essay/watching-fruit-fall/">
							<div id="Three">
								<p>Watching the Fruit Fall
								</p>

								<p>
									https://nacla.org/photo-essay/watching-fruit-fall
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="ImgContent\articles\tour.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="https://www.washingtonpost.com/news/wonk/wp/2015/12/04/the-worlds-most-popular-banana-could-go-extinct/">
							<div id="Four">
								<p>Bye, bye, bananas
								</p>

								<p>
									https://www.washingtonpost.com/news/wonk/wp/2015/12/04/the-worlds-most-popular-banana-could-go-extinct/
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
			<div class= "arrow">
				<img src="ImgContent\articles\arrowright.png" height="140">
			</div>
			</li>
		</ul>
		</div>
	</div>
</div>

	
<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php require_once 'Integral/footer.php';?>
	</div>
</body>
</html>
