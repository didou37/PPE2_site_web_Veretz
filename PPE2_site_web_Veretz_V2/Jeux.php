<?php include"header.php" ?>
<head>
<link rel="stylesheet" href="Jeux.css" >
<script language="javascript">

function calcul()
{
   nombreDeQuestion=10;
   nom=new Array();
   nomLength=new Array();
   point=0;
   for(n=0;n<=(nombreDeQuestion-1);n++)
   {
      nom[n]=document.getElementsByName("choix_rep_"+n);
      nomLength[n]=nom[n].length;
      for(q=0;q<=(nomLength[n]-1);q++)
      {
        if(nom[n][q].checked==true)
        {point=point+eval(nom[n][q].value);} 
        else
        {point=point;}

      }       
   }
   document.form_qz.txtNb.value=point;
}

</script>
</head>

<body>



 <section class="boutique">
    <p>
      <button class="btn " id="btn_1" data-onglet="1" > QCM </button>
      <button class="btn " id="btn_2" data-onglet="2" > Jeux2 </button>
    </p>       
    
    <div class="div_onglets">
    <div id="onglet_1" class="onglet">
      <p>
       <form name="form_qz">
<p>Qui a écrit Les Misérables ?
<br><input type="radio" name="choix_rep_0" value="0"> Emile Zola

<br><input type="radio" name="choix_rep_0" value="1">Victor Hugo

<br><input type="radio" name="choix_rep_0" value="0">Stendhal
</p>

<p> Dans quelle pièce de Molière le personnage d'Harpagon apparaît-il ?

<br><input type="radio" name="choix_rep_1" value="0">Dom Juan

<br><input type="radio" name="choix_rep_1" value="1">L'Avare

<br><input type="radio" name="choix_rep_1" value="0">Le Medecin malgré lui
</p>

<p>Quel est le véritable nom de Molière ?


<br><input type="radio" name="choix_rep_2" value="1">Jean-Baptiste Poquelin

<br><input type="radio" name="choix_rep_2" value="0">Henri Beyle

<br><input type="radio" name="choix_rep_2" value="0">François-Marie Arouet


</p>

<p>A quel siècle Molière a-t-il vécu ?

<br><input type="radio" name="choix_rep_3" value="0">XVIII°s

<br><input type="radio" name="choix_rep_3" value="1">XVII°s

<br><input type="radio" name="choix_rep_3" value="0">XVI°s
</p>

<p>Dans quel roman de Balzac un père est-il abandonné par ses filles qu'il adore?

<br><input type="radio" name="choix_rep_4" value="1">La fille aux yeux d'or

<br><input type="radio" name="choix_rep_4" value="0">Les Illusions perdues

<br><input type="radio" name="choix_rep_4" value="1">Le Père Goriot


</p>

<p>Quel personnage de tragédie grecque va mourir pour avoir voulu enterrer son frère ?
<br><input type="radio" name="choix_rep_5" value="0"> Electre

<br><input type="radio" name="choix_rep_5" value="1">Antigone

<br><input type="radio" name="choix_rep_5" value="0">Phèdre


</p>

<p>Quel est l'auteur du roman Le Rouge et le Noir ?


<br><input type="radio" name="choix_rep_6" value="0">Victor Hugo

<br><input type="radio" name="choix_rep_6" value="0"> Maupassant

<br><input type="radio" name="choix_rep_6" value="1"> Stendhal


</p>

<p>Qui a écrit La guerre de Troie n'aura pas lieu ?


<br><input type="radio" name="choix_rep_7" value="0">Beaumarchais

<br><input type="radio" name="choix_rep_7" value="1">Jean Giraudoux

<br><input type="radio" name="choix_rep_7" value="0"> Jean Anouilh

</p>

<p>Quel était le point faible du héros grec Achille?


<br><input type="radio" name="choix_rep_8" value="1">son talon

<br><input type="radio" name="choix_rep_8" value="0">son oreille droite

<br><input type="radio" name="choix_rep_8" value="0">sa cheville

</p>

<p>Combien y avait-il de mousquetaires selon un titre de roman d'Alexandre Dumas ?


<br><input type="radio" name="choix_rep_9" value="0">quatre

<br><input type="radio" name="choix_rep_9" value="1">trois


</p>
<p>le nombre de réponses correctes est :
<input type="button" name="btnAfficher" value="afficher le reslultat" onclick="calcul();">
<br><input type="text" name="txtNb" id="resultat">
</p>

</form>
      </p>
    </div>
    
     <div id="onglet_2" class="onglet">
      <p>
      
      </p>
    </div>    
    </div>

  </section>
 <script type="text/javascript">

  function hideAllElementByClassNam(clName){ 
    var onglets = document.getElementsByClassName("onglet");
    //on masque tous les onglets
    for (var i = 0; i < onglets.length; i++) {
      onglets[i].style.display = 'none';
    }
  }
  
  function ShowElementById(idElm){
    document.getElementById(idElm).style.display = "inline-block";
  }
  
  function addClassActiveElm(idElm){
    var cl_btn_active = document.getElementsByClassName("active");
    //on retire la class Active de tous les onglets
    for (var i = 0; i < cl_btn_active.length; i++) {
      removeClass(cl_btn_active[i],"active") ;
    }  
    //on met la class active au bouton cliqué
    document.getElementById(idElm).className = "btn";
    
  }
  
  function removeClass(e,c) {
    e.className = e.className.replace( new RegExp('(?:^|\\s)'+c+'(?!\\S)') ,'');
  }
  
  var DisplayHideOnglets = function() {
      //on masque tous les onglets
      hideAllElementByClassNam('onglet');
      
      //numero de l'onglet à afficher
     var NumOnglet = this.getAttribute("data-onglet");  
      
      //on affiche l'onglet
      if(typeof(NumOnglet) !="undefined" && NumOnglet!=null){
        ShowElementById("onglet_"+NumOnglet);
        addClassActiveElm("btn_"+NumOnglet);
      }
      
    
  };
  
  function initListener(){
    //on ajoute le listener
    var cl_btnmateriel = document.getElementsByClassName("btn");
    for (var i = 0; i < cl_btnmateriel.length; i++) {
      cl_btnmateriel[i].addEventListener('click', DisplayHideOnglets, false);
    }
  }
  
  //Initialisation
  initListener();
  
  //par défaut.. on affiche le premier onglet
  
    
 </script>





</body>
</html>