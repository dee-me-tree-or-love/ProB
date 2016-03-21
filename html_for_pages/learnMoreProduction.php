<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';

require_once 'Integral/header.php';
require_once 'Integral/footer.php';

?>
    
    
    
<head>
	<title>Production</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
		<link rel="stylesheet" type="text/css" href="css\learnMoreTempl.css">
		<link rel="stylesheet" type="text/css" href="css\learnMoreProd.css">
			<script src="Javascript\hefo.js"></script>
                        <?php echo $pageicon;?>    
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>

<!-- Main -->
<div id="content">
<div id= "page_subject">
	<h1>Production</h1>
</div>

	<div id="content_env">
		<div class="section">
			<h1>Growth</h1>
			<div id="imfi">
				<img src="ImgContent\learnmore\fieldwork.jpg" alt="working in the field" width="500">
			</div>
			<div id="producing">
				<p>
				The banana is a perennial plant that replaces itself. 
				Bananas do not grow from a seed but from a bulb or rhizome. 
				The time between planting a banana plant and the harvest of the banana bunch 
				is from 9 to 12 months. The flower appears in the sixth or 
				seventh month. Bananas are available throughout the year - 
				they do not have a growing 'season'.
				</p>
				<p>
				Bananas are grown in tropical regions. They require moist soil with 
				good drainage. In fact, most bananas exported are grown within 30 
				degrees either side of the equator
				</p>
				<p>
				Plantations are predominant in Latin America and they require huge investment in 
				infrastructure and technology for transport, 
				irrigation, drainage and packing facilities.
				</p>
			</div>
		</div>
		<div class="section">
		<h1>Harvesting and ripening</h1>
			<div id="imso">
				<img src="ImgContent\learnmore\sorting.jpg" alt="sorting" width="500">
			</div>
			<div id="harv">
				<p>
				After nine months, the bananas are harvested while still green.
				At the packhouse they are inspected and sorted for export. 
				Buyers of fruit in the UK want unbruised bananas and so very high 
				standards are set. If 
				the bananas do not meet these standards they are usually sold locally 
				at a much lower price.
				</p>
				<p>
				They are then transported to ports to be packed in refrigerated 
				ships called reefers (bananas take between six and twelve days to 
				get to the UK/Europe).
				</p>
				<p>
				Humidity, ventilation and temperature conditions are carefully 
				monitored in order to maintain quality. <br/>When the bananas arrive 
				at their destination port they are first sent to ripening rooms 
				(aprocess involving ethylene gas) and then sent to the shops. 
				</p>
				<p>
				Dessert banana production for export (around 15 million tonnes per year) 
				is of huge economic importance for many countries in the South. It relies on 
				intensive monocultures, which are sustained by using massive quantities of 
				toxic chemicals which are hazardous to both workers and the environment. This 
				industrial-scale production also results in problematic waste management issues.
				</p>
			</div>
		</div>
		
		<div class="section" id="three">
			<h1>Where Bananas are grown</h1>
		<div id="loc">
		<p>
		Bananas are grown in countries of the tropics - Africa, 
		Latin America, Caribbean, Pacific etc. Many countries produce 
		bananas as a staple food and only around 20% of all bananas that 
		are produced are actually exported. 
		</p>
		<p>
		Most bananas sold on the British market are exported from Latin 
		America, and increasingly West Africa, as companies relocate in 
		search of ever 'cheaper' fruit, pursuing a 'Race to the Bottom' 
		in terms of social and environmental standards
		</p>
		<p>
		Humidity, ventilation and temperature conditions are carefully 
		monitored in order to maintain quality. <br/>When the bananas arrive 
		at their destination port they are first sent to ripening rooms 
		(aprocess involving ethylene gas) and then sent to the shops. 
		</p>
		<p>
		Dessert banana production for export (around 15 million tonnes per year) 
		is of huge economic importance for many countries in the South. It relies on 
		intensive monocultures, which are sustained by using massive quantities of 
		toxic chemicals which are hazardous to both workers and the environment. This 
		industrial-scale production also results in problematic waste management issues.
		</p>
		</div>
		<div id="map">
			<iframe src="https://www.google.com/maps/d/embed?mid=zzIhm6B1xmxU.kjCzjGFLWklQ" width="640" height="480"></iframe>
		</div>
		</div>
	</div>
	
	<div id="subjlink">
	<div id = "left">
		<a href = "learnmoreYellowFruit.php">
		<h1>Yellow Fruit</h1>
		</a>
	</div>
	<div id ="right">
		<a href = "learnmoreProblems.php">
		<h1>Problems</h1>
		</a>
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