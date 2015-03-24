<?php include "header.php"; ?>
  <div class="container">
    <div class="middle">    
      <div class="row">
        <div class="col-xs-8 col-md-4  col-md-offset-1">

          <a href="http://e-haaletus.azurewebsites.net/kandidaadid.php" class="wide blue"><img src="picid/people-icon-oige.png" alt="kandidaadid" class="pilt">KANDIDAADID</a>
        </div>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/statistika.php" class="wide blue"><img src="picid/statistics.png" alt="statistika" class="pilt2">STATISTIKA</a>
        </div>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/tulemused.php" class="wide blue"><img src="picid/tulemused.png" alt="tulemused" class="pilt">TULEMUSED</a>
        </div>
          <?php if ($_SESSION['FBID']): ?>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/kandideerimine.php" id="kandideerimine" class="wide blue"><img src="picid/people-icon-oige.png" alt="kandideeri" class="pilt">KANDIDEERI</a>
        </div>
        <?php else: ?>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/kandideerimine.php" style="visibility:hidden" id="kandideerimine" class="wide blue"><img src="picid/people-icon-oige.png" alt="kandideeri" class="pilt">KANDIDEERI</a>
        </div>
      <?php endif ?>
      </div>
    </div>
  </div>
<?php include "footer.php"; ?>