<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inorganic_chemistry_application</title>
    <link rel="stylesheet" href="css/reset.css" >
    <link rel="stylesheet" href="css/index.css" />

</head>
<body>
    <div class=card>
        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>Ag<span>2</span>S</div>
          <div class=circle-black></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>PbS</div> 
          <div class=circle-black></div>  

        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>Zus</div> 
            <div class=circle></div>  
        </div>
        <form> 
            <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
            <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>
  
        <button id="point">
          <p id="point-button">POINT</p>
          <p id="point-text">S<span class=ion>2-</span>はイオン化傾向がAl以上の金属には溶けますが、<br>Zn以下とは沈殿を作るものがあります。</p>
        </button>

        <button id="check">
         <p id="check-button">CHECK</p>
         <p id="check-text-p6">金属の原子が水中で電子を放出して陽イオンになることをイオン化傾向と言います。<br>Li K Ca Na Mg Al Zn Fe Ni Sn Pb (H2<span class=h2></span>) Cu Hg Ag Pt Au</p>          
        </button>
       

        <ul class="page">
           <li><a href="/index5">Previous</a></li>
           <li><a href="/index5">5</a></li>
           <li class="this">6</li>
           <li><a href="/index7">7</a></li>
           <li><a href="/index7">Next</a></li>
        </ul>  


    </div>
    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };



        document.getElementById("point-text").style.visibility ="hidden";

        document.getElementById("point").onclick = function() {
        const point = document.getElementById("point-text");
        const point1 = document.getElementById("point-button");
  
       if(point.style.visibility=="visible"){
    
       point.style.visibility = "hidden";
       point1.style.visibility = "visible";
     
      }else{
       point.style.visibility = "visible";
       point1.style.visibility = "hidden";
      }

      }

      document.getElementById("check-text-p6").style.visibility ="hidden";

      document.getElementById("check").onclick = function() {
      const check = document.getElementById("check-text-p6");
      const check1 = document.getElementById("check-button");
  
      if(check.style.visibility=="visible"){
    
      check.style.visibility = "hidden";
      check1.style.visibility = "visible";
     
      }else{
      check.style.visibility = "visible";
      check1.style.visibility = "hidden";
     }

    }
    
        /*document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "S<span class=ion>2-</span>はイオン化傾向がAl以上の金属には溶けますが、<br>Zn以下とは沈殿を作るものがあります。";
          
        };
        window.addEventListener('load', function(){
        document.getElementById("check").addEventListener('click', function(){
        alert("金属の原子が水中で電子を放出して陽イオンになることをイオン化傾向と言います。　Li K Ca Na Mg Al Zn Fe Ni Sn Pb (H2<span class=h2></span>) Cu Hg Ag Pt Au");
       });
      });*/
    </script>   

</body>
