<article class="result">
  <div class="row b1">     
    <div class="col-md-3 col-sm-4">
      <figure>
          <img class="baseline-img" src="ux-content/items/ansatte//<?php echo $item->id; ?>.jpg" alt="<?php echo $item->title; ?>">
      </figure>
    </div>
    <div class="col-md-9 col-sm-8">
      <h3 class="<?php echo $item->status; ?>">
        <a href="minprofil.php"><?php echo $item->name; ?> </a>
      </h3>
      <p class="-b1t italic"><?php echo $item->position; ?></p>
      <div class="row">
        <dl>
          <dt class="col-md-2 col-sm-2 col-xs-3">Tlf:</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><?php echo $item->phone; ?></dd>
          <dt class="col-md-2 col-sm-2 col-xs-3">Epost:</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><a href="mailto:<?php echo $item->email; ?>"><?php echo $item->email; ?></a></dd>
          <dt class="col-md-2 col-sm-2 col-xs-3">Mobil:</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><?php echo $item->mobile; ?></a></dd>
          <dt class="col-md-2 col-sm-2 col-xs-3">Kontor:</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><?php echo $item->office; ?></dd>
          <dt class="col-md-2 col-sm-2 col-xs-3">Divisjon:</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><?php echo $item->division; ?></dd>
          <dt class="col-md-2 col-sm-2 col-xs-3">Avdeling</dt>
          <dd class="col-md-4 col-sm-10 col-xs-9"><a href="#"><?php echo $item->department; ?></a> </dd>
          <dt class="col-md-12 col-sm-2 col-xs-3">Mine kompetanseområder</dt>
          <dd class="col-md-12 col-sm-10 col-xs-9"><a href="<?php echo $item->competency; ?>"><?php echo $item->competency; ?></a></dd>
        </dl>
      </div>
    </div>
    <!--div class="row">
                <div class="col-md-6">
                    <p>Kompetanse: <?php echo $item->competency; ?></p>
                </div>
            </div--> 
    
  </div>
</article>
