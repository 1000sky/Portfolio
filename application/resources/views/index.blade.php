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
          <div class=Chemical-formula>CaSO<span>4</span></div>
          <div class=circle></div>
        </div>   
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>
          

        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>SrSO<span>4</span></div> 
          <div class=circle></div>
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>BaSO<span>4</span></div> 
          <div class=circle></div>
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>PbSO<span>4</span></div>
          <div class=circle></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

       {{--  --}}
        <button id="point">
           <p id="point-button">POINT</p>
           <p id="point-text">硫酸の塩は本来,水に溶けやすいです。<br>アルカリ土類金属イオンやPb<span class=ion>2+</span>があると沈殿します。</p>
        </button>

        <button id="check">
          <p id="check-button">CHECK</p>
          <p id="check-text">アルカリ土類金属　Ca Sr Ba Ra  周期表の2属に属します。</p>          
        </button>
        
        <ul class="page">
          <li>Previous</li>
          <li class="this">1</li>
          <li><a href="/index2">2</a></li>
          <li><a href="/index3">3</a></li>
          <li><a href="/index2">Next</a></li>
         </ul>    
    </div>  
    
     <script language="JavaScript">
      function setTF(fObj,vType){
        fObj.style.visibility = vType;
      };
  
      /*document.getElementById("point").onclick = function() {
        document.getElementById("point-text").innerHTML = "硫酸の塩は本来,水に溶けやすいです。<br>アルカリ土類金属イオンやPb<span class=ion>2+</span>があると沈殿します。";
        
      };*/
      
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

      document.getElementById("check-text").style.visibility ="hidden";

      document.getElementById("check").onclick = function() {
        const check = document.getElementById("check-text");
        const check1 = document.getElementById("check-button");
        
         if(check.style.visibility=="visible"){
          
           check.style.visibility = "hidden";
           check1.style.visibility = "visible";
           
        }else{
           check.style.visibility = "visible";
           check1.style.visibility = "hidden";
        }

      }
           


      /*const btn = document.quenrySelector('.check');
      btn.addEventListener('click', function(){
        this.classList.add('check-text').innerHTML = "アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します";
      });
      */

      
      
      
      
    
      
      /*document.getElementById("check").onclick = function() {
        document.getElementById("check-text").classList.add("addClass");
        
      };*/



    

      /* document.getElementById("check").onclick = function() {
        document.getElementById("check-text").innerHTML = "アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します";
        
      ;

      document.getElementById("check").onclick = function() 
        document.getElementById("check").idList.remove("check-text");
      }
*/

      /* window.addEventListener('load', function(){
        document.getElementById("check").addEventListener('click', function(){
        alert("アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します");
       });
      });*/
       </script>   
</body>
</html>