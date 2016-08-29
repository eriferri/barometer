<?php include( "inc/html-head.php"); ?>
<?php include( "inc/header5.php"); ?>

<section id="questionaire">
  <div class="row" id="question">
    <div class="questionnumber col-sm-1">1 <span class="lightquest">/11</span></div>
    <div class="questiontext col-sm-4"><p>I hvilken grad har ansatte nedover i organisasjonen mulighet til å påvirke denne utviklingen?</p>
      <p>Angi på en skala fra 1 til 5, der 1 er i ingen grad overhode og 5 er i svært stor grad + vet ikke på følgende:
</p></div>
  </div>
  <div class="row col-sm-offset-1 input-group btn-group" id="answer"> 
    <form method="post">
      <div class="row input-group btn-group"> 
        <div class="col-sm-1">1</div> 
        <div class="col-sm-1">2</div> 
        <div class="col-sm-1">3</div> 
        <div class="col-sm-1">4</div> 
        <div class="col-sm-1">5</div> 
        <div class="col-sm-1">Vet ikke</div> 
      </div>



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
   <div class="btn forrige col-sm-1 "<a href="index.php">Forrige</a></div>
   <div class="btn forrige col-sm-1 col-sm-offset-4 "><a href="q2.php">Neste</a></div>
  </div>
    <div class="push"></div>
</section>


<?php include( "inc/footer.php"); ?>
