<?php
if(isset($_POST['mailform']))
{
  if(!empty(htmlspecialchars($_POST['name'])) AND !empty(htmlspecialchars($_POST['email'])) AND !empty(htmlspecialchars($_POST['phone'])) AND !empty(htmlspecialchars($_POST['message'])))
  {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"gmail.com"<lemairejustine01@gmail.com>';
    $header.='Content-Type:text/html; charset="utf-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    
    $message='
    <html>
        <body>
            <div align="center">
                  <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'
                <br>
                <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'
                <br>
                <u>Téléphone de l\'expéditeur :</u>'.$_POST['phone'].'
                <br>
                  '.nl2br($_POST['message']).'
                  <br>
            </div>
        </body>
    </html>
    ';
    
    mail("lemairejustine01@gmail.com", $message, $header);
    $msg = "<p style='color:white; background:linear-gradient(rgb(4, 63, 65),#aabce2); padding:10px; width:100%; text-align:center; position:absolute; top:0;; z-index:1000;'>Votre message a bien été envoyé! </p>";
  }
  else{
      $msg = "<p style='color:rgb(255, 193, 193); background:linear-gradient(rgb(65, 4, 27),#a0535f); width:100%; padding:10px; text-align:center; position:absolute; top:0; z-index:1000;'>Tous les champs doivent être complétés!</p>";
  }
}
?>

<div class="contact">

  <section class="info-contact">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">							
        <div class="icon">
          <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">ADRESSE</h3>
              <p>
              12, Place Servois<br>62240 BRUNEMBERT<br>
               Accès PMR | Parking
            </p> 
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>		

    
      <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">							
        <div class="icon">
          <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CONTACT</h3>
              <p>
                <a href="tel:+3321323187"> (+33) 03 21 32 31 87</a>
              <br>
              <br>
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
          

    
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="box">							
          <div class="icon">
            <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <div class="info">
              <h3 class="title">MAIL</h3>
              <p>
                <a href="mailto:mairie.brunembert@wanadoo.fr?subject=VISITEUR SITE">
                mairie.brunembert@wanadoo.fr
                </a>
                <br>
                <br>
                <h3 class="title">WEBSITE</h3>
                <a href="index.php" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.brunembert.fr</a>
              </p>
            
            </div>
          </div>
          <div class="space"></div>
        </div> 
      </div>
  </section><!-- /section infos contact -->

  

  <form action="" class="" method="post" style="text-align:center;">
  <h1>Formulaire de contact</h1>
        <div id="img-mairie-pour-contact">
        <p>Merci de ne pas diffuser d'information relative à votre situation personnelle par le biais de ce formulaire, de ne pas transmettre d'information
            bancaire, auquel cas nous vous remercions
            par avance de prendre contact avec la mairie
        en appelant le numéro ci-dessus.</p>
          <img src="./img/signees/mairie.jpg" alt="mairie" style="height:400px; width:600px;">  
        </div>


      <div class="">
        <input type="text" id="name" name="name" placeholder="Nom" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; }?>">
      </div>
  
  
      <div class="">
        <input type="email" " id="email" name="email" placeholder="Email requis pour vous recontacter" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }?>">
      </div>
  
    <div class="">
        <input type="text" id="phone" name="phone" placeholder="Mobile No." value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; }?>">
    </div>

    <div class="">
        <textarea class="message" id="comment" name="message" placeholder="Tapez votre message ici...">
            <?php if(isset($_POST['message'])) { echo $_POST['message']; }?>
        </textarea>
        <br>

      <input type="submit" name="mailform" value="Envoyer!" class="send"></input>
    </div>   

  </form>

  <?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>

  </div>