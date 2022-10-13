<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>programme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    <style>
    .navbar {
    display: flex;
    background-color: #98dbdb;
    color: #3d3dd1;
    font-size: 3vw;
    justify-content: space-between;
    text-align: center;
}

#ul1 , #ul2,  #ul3  ,#ul11 , #ul22,  #ul33{
    display: none;
}

.navimag {
    width: 181%;
    height: 100%;
}

.imagcontent{
    width: 21%;
}


button{
    height: 50px;
    width: 200px;
    background-color: #3fa180;
    margin-bottom: 3px;
    border-radius: 30px;
    transition: 0.3s;
    cursor: pointer;
    color: white;
    font-size: 20px;
    border: 0;
    margin: 10px;

}

button:hover{
    background-color: #3de5ac;
}


.divcontent{
    display: flex;
    flex-direction: column;
   
}

.lesjour {
    border-bottom: 2px solid;
    margin-bottom: 10px;
}

ul{
    list-style: none;
}

ul li{
    font-size: 2vw;
    margin: 10px;
    transition: 0.5s;
    cursor: pointer;
    font-family: cursive;
}

ul li:hover{

    color: #69a739;
    font-size: 2.5vw;
    
}

footer{
    background-color: black;
    color: white;
    text-align: center;
    padding: 25px
}

.mtapre{
    margin-left: 25px;
    background-color: #204e3f;
    margin-left: 25%;
  
}

body::-webkit-scrollbar  ,.allcomments::-webkit-scrollbar {
        width: 12px;               
        }

        body::-webkit-scrollbar-track , .allcomments::-webkit-scrollbar-track{
        background: orange;     
        }

        body::-webkit-scrollbar-thumb , .allcomments::-webkit-scrollbar-thumb{
        background-color: rgb(0, 0, 0);    
        border-radius: 10px;       
        border: 3px solid orange;  
        }

li span{
    color: #3d3dd1;
}
    </style>
    
<nav class="navbar">
   <div class="imagcontent">
    <img class="navimag" src={{asset("images/brand.png")}} alt="" srcset="">
   </div>

   <div>
    <p>الجمعية المغربية ألمراض الجلد 
        <br/> Société Marocaine de Dermatologie</p>
   </div>

</nav>


<section style="background-color: beige;padding: 20px;">
    <div class="divcontent">
        <button id="jour1">Jeudi 20 Octobre</button>    
        <div id="subjour1" class="lesjour">
            <button id="matin1" class="mtapre">Matin</button> 
            <ul id="ul1">
                <li><span>08h30-09h00</span> :Accueil-inscriptions</li>
                <li><span>09h00-10h30</span> : Forum des résidents (première session)</li>
                <li><span>10h30-11h00</span> : Pause - café</li>
                <li><span>11h00-12h00</span> : Forum des résidents (deuxième session)</li>
                <li><span>12h00-13h00</span> : workshop Vitiligo Pr Benzekri Leila, Dr Ahmed Alissa Royaume Arabie Saoudite</li>
                <li><span>13h00-14h00</span> :Déjeûner</li>       
            </ul>
        </div>

        <div class="lesjour">
           <div>
            <button id="apre1" class="mtapre">Après-midi </button> 
            <ul id="ul11">
                <li><span>14h:30-15h:30</span> : Stress and skin disorders Pr M. Jafferany Michigan USA</li>
                <li><span>15h30-16h </span>: Conférence d'inauguration sur l'éthique médicale, Dr. Mohammadin Boubekri : Président du CNOM</li>
                <li><span>16h-17h </span>: Symposium Eucerin : les troubles pigmentaires</li>   
               <li><span>17h-17h30</span> : Pause- Café</li>
               <li><span>17h30- 18h30 </span>: Session IMCAS</li>
               <li> <span>17h 30 -18h</span> : Cernes sous toutes ces formes, que peut proposer le dermatologue ? Dr Huges CartierFrance</li>
            <li><span>18h- 18h15</span> Place des lasers dans la prise en charge des cernes Pr Zouhair K</li>
            <li><span>18h15- 18hh30:</span> Place de L’acide hyaluronique dans la prise en charge des cernes, Pr Belgnaoui FZ</li>
           <li><span>18h30- 19h 30</span> : Symposium johnson</li>
        </ul>
           </div>
        </div>

    </div>





    <div class="divcontent"><button id="jour2">Vendredi 21 Octobre</button>  
   
        <div id="subjour2" class="lesjour">
           <div>
            <button id="matin2" class="mtapre">Matin</button> 
            <ul id="ul2">
              <li><span>08h30-10h00</span> : Table ronde : prurit</li> 
              <li><span>08h30 - 8h50</span> Actualités physiopathologiques et thérapeutiques Pr K Senouci</li>    
              <li><span>08hh50- 9h45</span> Prurit psychogène et parasitophobie :Pr M. Jafferany Michigan USA</li> 
              <li><span>0 9 h45- 10h</span> : Discussion</li>  
              <li><span>10h00-11h00</span> : Symposium laboratoires : BAILLEUL- BIORGA - I P H A D E R M :Dr Bruno Matard France <br/>
                - Actualités de prise en charge des maladies du cuir chevelu
                -Rôle de la cystine dans le traitement curatif de la chute des cheveux</li> 
              <li><span>11h00-11h30</span> : Pause- Café</li>  
              <li><span>11h30-11h45</span> : Tumeurs unguéales Pr S.Chiheb</li>
              <li><span>11h45-12h00</span> : les autres tumeurs acrales Pr M Ait Ourhroui</li>
              <li><span>12h00-13h00</span> : Symposium Novartis Pr FZ Mernissi
                « Anti IL 17 dans la pratique du dermatologue »</li>
                <li>13h00-14h30 : Déjeûner</li>
            </ul>
           </div>
        </div>

        <div id="subjour2" class="lesjour">
           
            <div>
                <button id="apre2" class="mtapre">Après-midi </button> 
                <ul id="ul22">
                   <li><span>14h30-15h30</span> mn : Actualités en dermatologie <br/>
                    -Virus Varicelle ZONA et vitiligo segmentaire Quelles implications ? Pr L Benzekri
                   -Canabinoides en dermatologie Pr S Dikhaye S -- 
                   - Actualités en dermoscopie Pr FZ Mernissi</li>
                   <li><span>15h30-16h30</span>: Symposium « Cynosure » Pr K Zouhair</li>
                   <li><span>16h30-17h </span>: LASERS :<br/> -Cas cliniques marocains de Laser pigmentaire Pr K Zouhair ( 10min)
                    - Pigmented Laser tips in dark skin Pr A Alissa (20min)</li>
                   <li><span>17h – 17h30h</span> : Pause–café</li>
                   <li><span>17h30-18h30 </span>: Symposium ISIS pharma</li>
                   <li><span>18h30– 19h30</span> : Workshops : <br/>
                    -« Euromedic » Pr FZ Belgnaoui, Dr Belhaouri Lakhdar France
                    - Fotona
                    -Neoderma</li>
                 
                
                </ul>
            </div>
        </div>

    </div>

    <div class="divcontent"><button id="jour3">Samedi 22 Octobre</button>  
   
        <div class="lesjour">
           <div>
            <button id="matin3" class="mtapre">Matin</button> 
            <ul id="ul3">
             <li><span>08h30-10h00 </span>:FMC première session</li>
             <li><span>10h00-10h30 </span>:Pause café</li>
             <li><span>10h30-12h00</span> :FMC deuxième session</li>
             <li><span>12h00-13h00</span> : Arrêt sur image: coordinatrice Pr H Benchikhi</li>
             <li><span>13h00-14h00</span> : Assemblée générale</li>
            </ul>
           </div>
        </div>

        
    </div>

   
</section>



<footer>
    <p>Adresse : Société Marocaine de Dermatologie BP :7642. <br/> An-narjiss-Fès  <br/>
        E-mail : smd.secretariat@gmail.comGSM : <br/> 06-
        61-36-11-00</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
$("#matin1").click(function(){
  
 $("#ul1").toggle(400);
})



$("#matin2").click(function(){
    $("#ul2").toggle(400);

})

$("#matin3").click(function(){
    $("#ul3").toggle(400);

})




$("#apre1").click(function(){
    $("#ul11").toggle(400);

})

$("#apre2").click(function(){
  
    $("#ul22").toggle(400);
})


</script>

</body>
</html>