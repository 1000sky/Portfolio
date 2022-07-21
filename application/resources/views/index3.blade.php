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
          <div class=Chemical-formula>Cu(OH)<span>2</span> </div>
          <div class=circle-CuOH></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>Fe(OH)<span>2</span> </div> 
          <div class=circle-FeOH2></div>  
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>Fe(OH)<span>3</span> </div> 
            <div class=circle-reddish-brown></div> 
        </div>
          <form> 
            <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
            <input type="text" name="text1" style="visibility:hidden"><br>
          </form> 
          <br>
          <br>
     
     
          <button id="point">
            <p id="point-button">POINT</p>
            <p id="point-text">Cu(OH)<span class=kasuu>2</span> は青白色<br>Fe(OH)<span class=kasuu>2</span>は緑白色<br>Fe(OH)<span class=kasuu>3</span>は赤褐色<br>の沈殿を作ります。</p>
          </button>



       <ul class="page">
          <li><a href="/index2">Previous</a></li>
          <li class="this">3</li>
          <li><a href="/index4">4</a></li>
          <li><a href="/index5">5</a></li>
          <li><a href="/index4">Next</a></li>
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
          document.getElementById("point-text").innerHTML = "Cu(OH)<span class=kasuu>2</span> は青白色<br>Fe(OH)<span class=kasuu>2</span>は緑白色<br>Fe(OH)<span class=kasuu>3</span>は赤褐色<br>の沈殿を作ります。";
          
        };*/
    </script>   

</body>