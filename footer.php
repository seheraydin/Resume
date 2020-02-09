<!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">

  <p>Sosyal Medya Hesaplarım</p>
  <?php 
$sosyalmedya = $db->prepare("SELECT * FROM sosyalmedya");
$sosyalmedya->execute();
$smcek=$sosyalmedya->fetch(PDO::FETCH_ASSOC);
   ?>
  <a href="<?php echo $smcek["sm_facebook"]; ?>" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="<?php echo $smcek["sm_instagram"]; ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="<?php echo $smcek["sm_twitter"]; ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="<?php echo $smcek["sm_linkedin"]; ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>

 <a href="<?php echo $smcek["sm_youtube"]; ?>" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
  <a href="<?php echo $smcek["sm_github"]; ?>" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
  


  <p><?php echo $ayarcek["site_footer"]; ?><a href="<?php echo $ayarcek["site_url"]; ?>" target="_self">Seher Aydın</a></p>
</footer>

</body>
</html>