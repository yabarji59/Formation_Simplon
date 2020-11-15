<div class="content-faq" id="faq">

<select name="select" id="select">
            <option select="selected" value="merci de sélectionner votre question">Cliquez ici pour découvrir les réponses aux questions fréquentes</option>

            <option value="<iframe width='300' height='315' src='https://www.youtube.com/embed/LhE7dKIGoNo' frameborder='0' 
                  allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
                </iframe>">
                Quels sont les symptômes du Coronavirus?
            </option>
      

            <option value="Le maire est tenu de remettre certains documents uniquement si la loi rend leur délivrance obligatoire et que la demande est formulée dans les règles.">
              Une mairie peut-elle refuser de délivrer un document administratif ?
            </option>
     
  
            <option value="Vous pouvez consulter les sites suivants sur lesquels des onglets spécifiques à consulter,  vous expliquent comment faire soit
              <nav class='listing-sites-demarchesAdministratives'>
                  <ul>
                    <a href='https://www.hautsdefrance.fr/' target='_blank'> <li> Site internet des Hauts-de-France </li></a>
                    <a href='https://www.cc-desvressamer.fr/' target='_blank'> <li> Site internet de la communauté des communes de Desvres-Samer </li></a>
                    <a href='https://www.demarches.interieur.gouv.fr' target='_blank'><li>www.demarches.interieur.gouv.fr</li></a> 
                    <a href='https://www.pasdecalais.fr/' target='_blank'><li> www.pas-de-calais.gouv.fr</li></a>
                    <a href='https://www.service-public.fr' target='_blank'><li> www.service-public.fr</li></a> 
                  </ul>
              </nav>">
              Question sur une démarche administrative
            </option>
       
        </select>
      <img class="banniere" src="./img/bannieres/banniere-faq.png" style="width:100%; height:100%;" alt="banniere-faq">
        <h1>Retrouvez les réponses aux questions fréquentes que vous vous posez</h1>


        <div id="div-answer">
          <p id="q">Sélectionnez votre question</p>
          <p id="r">Pour obtenir votre réponse</p>
        </div>




        
</div><!-- fin div content -->
<script>var selectElem = document.getElementById('select');
var pElem = document.getElementById('q');
var pElem2 = document.getElementById('r');

// Quand une nouvelle <option> est selectionnée
selectElem.addEventListener('change', function() {
  // var index = selectElem.selectedIndex;
  var textselectionne = selectElem.options[selectElem.selectedIndex].text;
  var valeurselectionnee = selectElem.options[selectElem.selectedIndex].value;

  // Rapporter cette donnée au <p>
  pElem.innerHTML =  textselectionne;
  pElem2.innerHTML = valeurselectionnee;
})</script>