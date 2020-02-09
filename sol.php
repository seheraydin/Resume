<?php 
$bilgilerim = $db->prepare("SELECT * FROM bilgilerim");
$bilgilerim->execute();
$bilgicek=$bilgilerim->fetch(PDO::FETCH_ASSOC);
 ?>



<div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo $bilgicek["bilgi_fotograf"]; ?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">

          </div>
        </div>
        <div class="w3-container">
          <h2 ><?php echo $bilgicek["bilgi_isim"]; ?></h2>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_meslek"]; ?></p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_meslek2"]; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_ikamet"]; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_mail"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_telefon"]; ?></p>
          <p><i class="fa fa-github fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bilgicek["bilgi_github"]; ?></p>


          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Becerilerim</b></p>

          <?php 

          $becerilerim = $db->prepare("SELECT *FROM becerilerim");
          $becerilerim->execute();
          $becericek = $becerilerim->fetchALL(PDO::FETCH_ASSOC);
          foreach ($becericek as $row) {
            ?>
            <p><?php echo $row["beceri_adi"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
             <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row["beceri_yuzde"]; ?>%"><?php echo $row["beceri_yuzde"]; ?></div>
          </div>
            <?php


          }


           ?>

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>
    </div>