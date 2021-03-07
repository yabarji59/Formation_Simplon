<?php
if(isset($_POST['mailform']))
{
  if(!empty(htmlspecialchars($_POST['name'])) AND !empty(htmlspecialchars($_POST['email'])) AND !empty(htmlspecialchars($_POST['phone'])) AND !empty(htmlspecialchars($_POST['message'])))
  {
    $header="Message d'un internaute depuis votre site internet brunembert.fr";
    
    $message='
                Nom de l\'expéditeur : '.$_POST['name'].'
      
                Mail de l\'expéditeur : '.$_POST['email'].'
           
                Téléphone de l\'expéditeur : '.$_POST['phone'].'
          
                Le message de l\'expéditeur: '.nl2br($_POST['message']).'
    ';
    
    mail("mairie.brunembert@wanadoo.fr", $header, $message);
    $msg = "<p id='msg-confirme'>Votre message a bien été envoyé! </p>";
  }
  else{
      $msg = "<p id='msg-error'>Tous les champs doivent être complétés!</p>";
  }
}
?>


  <section class="info-contact">

      <li>
        <a href="https://goo.gl/maps/CFH2WLhh9h7xn9hZ8" target="_blank"><button class="btn-primary">Géolocaliser<br><i class="fas fa-location-arrow"></i></button></a>  
      </li>
      <li>
            <a href="tel:+3321323187"><button class="btn-primary"> Appeler <br>  <i class="fas fa-phone-square-alt"></i></button></a>  
      </li>
      <li>
        <a href="mailto:mairie.brunembert@wanadoo.fr?subject=VISITEUR SITE BRUNEMBERT.FR"><button class="btn-primary">Envoyer <br> <i class="fas fa-envelope"></i></button></a>    
      </li>  

  </section>	 



  <form action="" class="form" method="post" style="text-align:center;">
  <h1>Formulaire de contact</h1>
 
      <div class="">
        <input type="text" id="name" name="name" placeholder="Nom" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; }?>">
      </div>
  
      <div class="">
        <input type="email" " id="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }?>">
      </div>

      <div class="">
          <input type="text" id="phone" name="phone" placeholder="Téléphone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; }?>">
      </div>
      <div class="">
      <textarea type="text" class="message" id="comment" name="message" placeholder=" Tapez votre message ici..." rows="5"></textarea>
            <?php if(isset($_POST['message'])) { echo $_POST['message']; }?>

        <input id="send" type="submit" name="mailform" value="Envoyer mon message" class="send"></input>

      </div>   

  </form>

  <?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>

  </div>