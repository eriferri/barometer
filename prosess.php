<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 50" style="display:none;">
	<defs>
		<clipPath id="cut-off-bottom">
			<rect x="0" y="0" width="100" height="50" />
		</clipPath>
	</defs>
</svg>
<?php
	function gauge_svg($percent, $speed = .01){
		ob_start();
		?>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 54" width="100px" height="54px">
				<g>
					<title>Score gauge</title>
					<circle r="49" cx="50" cy="50" fill="transparent" stroke="#431297" stroke-width="1px" clip-path="url(#cut-off-bottom)"></circle>
					<circle r="2" cx="50" cy="50" fill="#431297"></circle>
					<line x1="7" y1="50" x2="50" y2="50" stroke="#431297" stroke-width="1px" transform="rotate(<?php print 180*$percent/100;?> 50 50)">
						<animateTransform attributeType="xml"
						                  attributeName="transform"
						                  type="rotate"
						                  from="0 50 50"
						                  begin="1s"
						                  to="<?php print 180*$percent/100;?> 50 50"
						                  dur="<?php print $speed * $percent?>s"
						                  />
					</line>
				</g>
			</svg>
		<?php
		return ob_get_clean();
	}
?>

<div class="row">
	<div class="col-sm-2">
		<?php print gauge_svg(50);?>
	</div>
	<div class="col-sm-10">
		<p>
			Andre aktører i samme bransje forventer en vekst på X% om to år, du forventer en vekst på X% for ditt selskap
		</p>
	</div>
</div>

<div class="row align-center">
	<div class="col-sm-2">
		<?php print gauge_svg(100);?>
	</div>
	<div class="col-sm-10">
		<p>
			Andre [ stilling] forventer en vekst på X% om to år (avhengig eller uavhengig av bransje), du forventer en vekst på X% for ditt selskap
		</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-2">
		<?php print gauge_svg(10);?>
	</div>
	<div class="col-sm-10">
		<p>
			X % av andre aktører i samme bransje mener at deres virksomhet ligger i forkant av den digitale utviklingen, [du mener at ditt selskap også ligger i forkant/ midt i/ ligger i etterkant].
		</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-2">
		<?php print gauge_svg(70);?>
	</div>
	<div class="col-sm-10">
		<p>
			X % mener at det bør gjøres mer i eget selskap, [det mener du også/du mener at det bør ligge på samme nivå].
		</p>
	</div>
</div>

</div>