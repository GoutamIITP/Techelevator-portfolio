<div class="widget-items mb-40">
	<?php
	$city = "India";
	$keyw = array(
		"Web development services $city",
		"Mobile app development $city",
		"SEO services near me $city",
		"Digital marketing $city",
		"CRM solutions $city",
		"ERP systems in $city",
		"Lead generation services $city",
		"Website design $city",
		"E-commerce development $city",
		"Custom software development $city",
		"$city best IT companies",
		"Web developers $city",
		"App developers $city",
		"Digital solutions near $city",
		"IT consulting $city",
		"Software development companies in $city",
		"Professional web design in $city",
		"Mobile app developers near $city",
		"Affordable web development $city",
		"Best digital marketing in $city",
		"IT services $city",
		"Cloud hosting services from $city",
		"Domain registration companies in $city"
	);
	?>
	<h6>Relevant IT Keywords in <?= $city ?></h6>
	<ul class="inline">
		<?php
		shuffle($keyw);
		foreach ($keyw as $k) { ?>
			<li class="badge badge-secondary"><?= $k ?></li>
		<?php } ?>
	</ul>
</div>