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
          <div class=Chemical-formula>Fe<span>2</span>O<span>3</span></div>
          <div class=circle-reddish-brown></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>CuO</div> 
          <div class=circle-black></div>  

        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

        <button id="point">
          <p id="point-button">POINT</p>
          <p id="point-text">Fe<span class=kasuu>2</span>O<span class=kasuu>3</span>は赤褐色<br>CuOは赤褐色<br>の沈殿を作ります。</p>
        </button>
 
        

     <ul class="page">
       <li><a href="/index3">Previous</a></li>
       <li class="this">4</li>
       <li><a href="/index5">5</a></li>
       <li><a href="/index6">6</a></li>
       <li><a href="/index5">Next</a></li>
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

    
        /*document.getElementById("point").onclick = function() {
        document.getElementById("point-text").innerHTML = "Fe<span class=kasuu>2</span>O<span class=kasuu>3</span>は赤褐色　CuOは赤褐色　の沈殿を作ります。";
          
        };*/
    </script>  

</body>