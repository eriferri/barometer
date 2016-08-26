<?php include( "inc/html-head.php"); ?>
<?php include( "inc/header13.php"); ?>

<section id="questionaire">
  <div class="row" id="question">
    <div class="questionnumber col-sm-1">1 <span class="lightquest">/11</span></div>
    <div class="questiontext col-sm-4">Er virksomheten organisert etter produktgrupper, eller etter 
salgsfunksjoner mot kunder uavhengig av 
produktgrupper?</div>
  </div>
  <div class="row col-sm-offset-1 input-group btn-group" id="answer">
    <form method="post">
      <ul>
        <li><input type="radio" aria-label="..." name="q9" value="a" id="q9a">
        <label for="q9a">Produktgrupper</label></li>
        <li><input type="radio" aria-label="..." name="q9" value="b" id="q9b">
        <label for="q9b">Salgsfunksjoner</label></li>
        <li><input type="radio" aria-label="..." name="q9" value="c" id="q9c">
        <label for="q9c">Annen organisering</label></li>
        <li><input type="radio" aria-label="..." name="q9" value="d" id="q9d">
        <label for="q9d">Vet ikke</label></li>
      </ul>
  </div>
  <div class="row" id="nav">
   <div class="btn forrige col-sm-1 ">Forrige</div>
   <div class="btn forrige col-sm-1 col-sm-offset-4 ">Neste</div>
  </div>
    <div class="push"></div>
</section>


<?php include( "inc/footer.php"); ?>
