<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';

require_once 'Integral/header.php';
require_once 'Integral/footer.php';

?>
    
<head>
	<title>Foundations</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\foundations.css">
	<script src="Javascript\foundations.js"></script>
	<script src="Javascript\hefo.js"></script>
        <link rel="icon" href="ImgContent\Default\favicon.ico">	
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>
        

<!-- Main -->

	<div class="main">
	<img src="ImgContent\foundations\womanblur.png"
						alt="Background"
						id="banner">
		<div id="BriefArticle">
			<p id = "Intro">Project Banana shows the main stakeholder groups of the banana
							sector. It includes representatives for farmer organizations,
							companies, research institutions, worker unions and other
							civil- society organizations.
			</p>
			<p id = "Desc">They all promote the adoption of good practices for sustainable
							production and trade by the banana industry worldwide. These
							groups jointly develop practical guidance in various areas such as
						reduction of pesticide use, occupational health and safety, gender
						equity, costs of sustainable production and distribution of value.
			</p>
		</div>

		<div class = "foundations">
			<ul id="companies">
				<li id = "first">
				<div class="picPlusDesc">
					<!-- Link to the WBF website -->

					<a href="http://www.fao.org/economic/worldbananaforum/wbf-aboutus/en/#.VtGfZPkrKHs">
					<img src="ImgContent\foundations\WBF.png"
						alt="WBF" style="width:220px;height:220px;">
					<a/>

					<div class="main_desc">
						<div id="Title">
						<h1>WORLD BANANA FORUM</h1>
						</div>
						<div id = "info_body">
							<div id="Title3">
							<h3>Overview:</h3>
						</div>
							<p>World Banana Forum is a permanent space of assembly
								for participants representing the global banana
								supply-chain to promote open dialogue on challenges
								facing the banana industry.
							</p>
							<!-- How to do this? -->
							<div  class="More" id="More1" >
							<h5 onclick="DisplayMore1()">More...</h5>
					</div>

						</div>
					</div>
				</div>
					<div class="extra_desc" id="ed1">
						<div id="WBFmore">
						<div>
						<p>The mission of the World Banana Forum is to:</p>

						<ul id = "mission">
							<li>Inspire collaboration between stakeholders
							that produces pragmatic outcomes for the betterment
							of the banana industry</li>
							<li>Achieve an industry-wide consensus of best practices
							regarding workplace issues, gender equity, environmental
							impact, sustainable production and economic issues</li>
						</ul>
						</div>
						<div>
						<p>This ground-breaking initiative brings together producers,
							their organizations, trade unions, cooperatives, exporter groups,
							fresh producing companies, retailers, traders, consumer associations,
							governments, research institutions, universities and civil society
							organizations.
						</p>
						</div>
						<h5 class = "less" onclick="HideMore1()" >Less</h5>
						</div>
					</div>
				</li>

				<li id = "second">
				<div class="picPlusDesc">
					<!-- Link to the WBF website -->
					<a href="http://www.fairtrade.net/">
					<img src="ImgContent\foundations\FairTrade.png"
						alt="FairTradeLogo" style="width:220px;height:220px;">
					<a/>
					<div class="main_desc">
						<div id="Title">
						<h1>FAIRTRADE INTERNATIONAL</h1>
						</div>
						<div id = "info_body">
							<div id="Title3">
							<h3>Overview:</h3>
						</div>
							<p>FairTrade International is an alternative approach to
								conventional trade based on a partnership between
								producers and traders, businesses and consumers.
								The international Fairtrade system - made up of
								Fairtrade International and its member organizations -
								represents the world's largest and most recognized
								fair trade system.
							</p>
							<!-- How to do this clickable thing? -->
							<div class="More" id="More2" onclick="DisplayMore2()">
							<h5>More...</h5>
							</div>
						</div>
					</div>
				</div>
					<div class="extra_desc" id="extra_FAIRTRADE">
						<div id="FTmore">
						<div id="FTtext">
						<p>When a product carries the FAIRTRADE Mark it means the producers and traders
							have met Fairtrade Standards. The Fairtrade Standards are designed to address the
							imbalance of power in trading relationships, unstable markets and the injustices
							of conventional trade.
						</p>

						</div>
						<div id="FTvidStuff">
						<div id="FTvideo_wrapper">
							<iframe src="https://player.vimeo.com/video/125036092" width="300" height="187" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<div id="FTvideodesc" >
						<ul id = "ft_video_desc">
							<li id="FTvidTit">"A visit with Fairtrade banana farmers in Peru"
								<br>Wednesday, April 15, 2015
								<br>from <a href="https://vimeo.com/fairtradeinternational">Fairtrade International</a> on <a href="https://vimeo.com">Vimeo</a>.

							</li>
							<li>
								Fairtrade Deutschland visits the banana farmers of ACPROBOQUEA, a Fairtrade
								certified cooperative in Peru. Featuring interviews with farmers and the story of
								how bananas get from the fields of Peru to your store shelves.
							</li>
						</ul>
						</div>
						</div>

						<h5 class = "less" onclick="HideMore2()">Less</h5>
						</div>
					</div>
				</li>

				<li id = "third">
				<div class="picPlusDesc">
					<!-- Link to the WBF website -->
					<a href="https://www.corbana.co.cr/">
					<img src="ImgContent\foundations\Corbana2.jpg"
						alt="CORBANA" style="width:220px;height:220px;">
					<a/>
					<div class="main_desc">
						<div id="Title">
						<h1>CORBANA</h1>
						</div>
						<div id = "info_body">
							<div id="Title3">
							<h5>Overview:</h5>
						</div>
							<p>Corporacion Bananera Nacional (CORBANA) is a
								non-governmental public institution, established in
								the year 1971 by the ratification of a law of the
								Republic of Costa Rica. Its major objective is the
								development of the banana industry in Costa Rica
								and to serve the banana producers.
							</p>
							<!-- How to do this clickable thing? -->
							<div class="More" id="More3" onclick="DisplayMore3()">
							<h5>More...</h5>
						</div>
					</div>
					</div>
				</div>
					<div class="extra_desc" id="ed3">
						<div class="extracontent" id="CorbExtraDes">
						<div id="map_embed">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.1219703859338!2d-84.05741968467741!3d9.923798777063285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e39c42b1e70d%3A0x67b14605fe052b1b!2sCorbana!5e0!3m2!1sen!2snl!4v1456582373097"
							 frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div id="corbextratext">
						<p>This institution develops research programs
						aimed at strengthening the quality of banana farming,
						provides state-of-the-art technology to producers,
						maintains lines of credit to facilitate the operation and
						recovery of the plantations struck by natural disasters in the
						Costa Rican Caribbean,
						among other commitments to improve the industry.
						</p>
						</div>
						</div>


						<h5 class = "less" onclick="HideMore3()">Less</h5>

					</div>
				</li>

				<li id = "fourth">
				<div class="picPlusDesc">
					<!-- Link to the WBF website -->
					<a href="http://www.bioversityinternational.org/">
					<img src="ImgContent\foundations\Bioversity.png"
						alt="BIOVERSITY INTERNATIONAL" style="width:220px;height:220px;">
					<a/>
					<div class="main_desc">
						<div id="Title">
						<h1>BIOVERSITY INTERNATIONAL</h1>
						</div>
						<div id = "info_body">
							<div id="Title3">
							<h3>Overview:</h3>
						</div>
							<p>Bioversity International is a global
								research-for-development organization. Bioversity
								International's vision is that agricultural biodiversity
								nourishes people and sustains the planet.
							</p>
							<!-- How to do this clickable thing? -->
							<div class="More" id="More4" onclick="DisplayMore4()">
							<h5>More...</h5>
						</div>
					</div>
					</div>
				</div>
					<div class="extra_desc" id="ed4">
					<div class="extracontent" id="BIcontent">
						<div class="intro" id="BIintrotext">
						<p>Bioversity International delivers scientific evidence,
						management practices and policy options to use and safeguard
						agricultural and tree biodiversity to attain sustainable global
						food and nutrition security.
						Bioversity works with partners in low-income countries in different regions
						where agricultural and tree biodiversity can contribute to
						improved nutrition, resilience, productivity and climate
						change adaptation.

						</p>

						</div>
						<div id = "BIlist">
						<p id ="publications_heading">Recent Publications:</p>
						<ul id = "publications">
							<li>
							<p><a href="http://www.bioversityinternational.org/e-library/publications/detail/provitamin-a-carotenoid-content-of-unripe-and-ripe-banana-cultivars-for-potential-adoption-in-eastern-africa/">
								"Provitamin A carotenoid content of unripe
								and ripe banana cultivars for potential adoption
								in eastern Africa"
								</a>
							</p>

								<p class="publ">Publication Year: 2015</p>
							</li>

							<li>
							<p>
								<a href="http://www.bioversityinternational.org/e-library/publications/detail/use-of-banana-diversity-for-nutritious-diets/">
								"Use of banana diversity for nutritious diets"
								</a>
							</p>

								<p class="publ">Publication Year: 2015</p>
							</li>
							</a>
						</ul>
						</div>
						<h5 class = "less" onclick="HideMore4()">Less</h5>
					</div>
					</div>
				</li>


				<li id = "fifth">
				<div class="picPlusDesc">
					<!-- Link to the WBF website -->
					<a href="http://www.bananalink.org.uk/sites/default/files/EUROBAN%20mission%20statement%202014.pdf">
					<img src="ImgContent\foundations\Euroban.jpg"
						alt="EUROBAN" style="width:220px;height:220px;">
					<a/>
					<div class="main_desc">
						<div id="Title">
						<h1>EUROBAN</h1>
						</div>
						<div id = "info_body">
							<div id="Title3">
							<h5>Overview</h5>
						</div>
							<p>Euroban is a network of European civil society
								organizations that work collaboratively with civil
								society organisations in other continents to help
								achieve socially just, economically viable and
								enviromentally sound tropical fruit industries.
							</p>
							<!-- How to do this clickable thing? -->
							<div class="More" id="More5" onclick="DisplayMore5()">
							<h5>More...</h5>

						</div>
					</div>
					</div>
				</div>
					<div class="extra_desc" id="ed5">
					<div class="extracontent">
						<div class="intro" id="EBvision">
						<p>The vision of Euroban is to work towards:
						</p>

						</div>
						<div id="EBmislist">
						<ul id = "EBmission">
							<li>Full respect for social, human and labour rights throughout tropical fruit supply chains;</li>
							<li>Full respect for women's rights throughout tropical fruit supply chains;</li>
							<li>Secure livelihoods for and female and male workers and female and male small- scale producers;</li>
							<li>Fair commercial conditions for producers in tropical fruit industries with an overall sustainable distribution of income along value chains;</li>
							<li>The elimination of enviromental damage caused by tropical fruit industries;</li>
							<li>Synergy with organizations that share our objectives, whether or not their core activities are in the same or other social, economic or geographical areas as EUROBAN.</li>
						</ul>
						<h5 class = "less" onclick="HideMore5()">Less</h5>
						</div>
					</div>
					</div>
				</li>

			</ul>
		</div>



	</div>



<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php echo $footercont;?>
	</div>
</body>
</html>