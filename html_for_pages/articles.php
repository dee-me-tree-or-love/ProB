<?php
$headercont = '';
$footercont = '';
require_once 'Integral/header.php';
require_once 'Integral/footer.php';
?>

<DOCTYPE! html>

<head>
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\articles.css">
		<script src="Javascript\articles.js"></script>
		<script src="Javascript\hefo.js"></script>



</head>
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>
<!-- Main -->
<div id="content">
	<div id="section1">
		<div id = "featured">
			<h1 class="part">Featured</h1>
			<hr/>
			<div class="video" id = "video_wrapper" onclick="CloseImage()">
				<img id="thumb" src="ImgContent\articles\TheRealPrice.png" width="300" height="200">

				<iframe id="yv" width="300" height="200" src="https://www.youtube.com/embed/o9-KQepO3t8"
					frameborder="0" allowfullscreen></iframe>
			</div>
			<div id = "video_desc">
				<div id="vidtit">
				<h1>The Real Price Of Bananas</h1>
				</div>
				<hr/>
				<div id="viddet">
				<table id="video_info">
					<tr>
						<td class = "ltd">Short Documentary</td>
						<td class = "rtd">Sep 6, 2014</td>
					</tr>
					<tr>
						<td>By</td>
					</tr>
					<tr>
						<td class = "ltd">Jose Daniel Lopez</td>
						<td class = "rtd">
						<a href="https://www.youtube.com/watch?v=o9-KQepO3t8">
							<div id = "youtube_ref">
								<p><b>YouTube</b></p>
							</div>
						</a>
						</td>
					</tr>
				</table>
				</div>
				<div id="vidtext">
				<p id="video_anotation">
					"The banana production in Ecuador
					represents a big business for local
					corporations and a big headache for small
					local producers. This documentary
					investigates the economic and social
					problems caused by agrochemical companies
					in the banana plantations of Ecuador."
				</p>
				</div>
			</div>
		</div>

		<div id = "find_more">
			<h1 class="part">Find More</h1>
			<hr/>
			<ul id = "portals">
				<li>
					<a href="http://www.agra.org/">
					<img src="ImgContent\articles\agra.png">
					</a>
				</li>
				<li>
					<a href="http://qz.com/">
					<img src="ImgContent\articles\quartz.png" >
					</a>
				</li>
				<li>
					<a href="http://www.theguardian.com/uk/environment">
					<img src="ImgContent\articles\theguardian.png" >
					</a>
				</li>
				<li>
					<a href="http://www.freshfruitportal.com/">
					<img src="ImgContent\articles\freshfruit.png" >
					</a>
				</li>
				<li>
					<a href="https://nacla.org/">
					<img src="ImgContent\articles\naclarep.png" >
					</a>
				</li>
			</ul>
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
				<div class="article_tile">
					<div class="newim">
					<img src="ImgContent\articles\tote.jpg" width="140" height="140">
					</div>
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
                <?php echo $footercont;?>
	</div>


</body>
</html>
