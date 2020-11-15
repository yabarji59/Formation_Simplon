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
    $msg = "<p id='msg-confirme'>Votre message a bien été envoyé! </p>";
  }
  else{
      $msg = "<p id='msg-error'>Tous les champs doivent être complétés!</p>";
  }
}
?>

<div class="contact">

  <section class="info-contact">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center">            
        
                <div class="text">
            
                </div>
                    <a href="https://goo.gl/maps/CFH2WLhh9h7xn9hZ8" target="_blank"><button class="btn-primary">Géolocaliser<br><i class="fas fa-location-arrow"></i></button></a>  
                    <span>    
                    <br><br>12, Place Servois<br>62240 BRUNEMBERT<br>
                    Accès PMR | Parking
                  </span>     
                </div>
        
             </div>	 
             
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="box-part text-center">
     
                 <div class="text">
               
                 </div>  
                 <a href="tel:+3321323187"><button class="btn-primary"> Appeler <br>  <i class="fas fa-phone-square-alt"></i></button></a>  
                   
                 <span>   <br><br>
                 (+33) 03 21 32 31 87 </span>      
                </div>
    
             </div>	 
             
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="box-part text-center">                        
                
                 <div class="text">
         
                 </div>
                 <a href="mailto:mairie.brunembert@wanadoo.fr?subject=VISITEUR SITE"><button class="btn-primary">Envoyer <br> <i class="fas fa-share"></i></button></a>      
                 <span>   <br><br>mairie.brunembert@wanadoo.fr</span> 
                </div>
          
             </div>	 



  <form action="" class="" method="post" style="text-align:center;">
  <h1>Formulaire de contact</h1>
 
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
        <input type="text" class="message" id="comment" name="message" placeholder=" Tapez votre message ici...">
            <?php if(isset($_POST['message'])) { echo $_POST['message']; }?>
        </input>
        <br>
        <input type="submit" name="mailform" value="Envoyer mon message" class="send"></input>
      </div>   

  </form>

  <?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>

  </div>