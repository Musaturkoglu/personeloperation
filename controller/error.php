<style>* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
/*===== VARIABLES CSS =====*/
:root{
  --first-color: #ff005a;
  --second-color: #8400ff;
  --third-color:#000; 
  --body-font: 'Montserrat', sans-serif;
}
body{
  margin: 0;
  font-family: var(--body-font); 
  background-color: var(--third-color);
}
#notfound{
  position:relative;
  height:100vh;
}
#notfound .notfound{
  position:absolute;
  left:50%;
  top:50%;
  -webkit-transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  max-width:767px;
  width:100%;
  line-height: 1.4;
  text-align: center;
}
.notfound .notfound-404{
  position:relative;
  height:180px;
  margin-bottom:20px;
  z-index: -1;
} 
.notfound .notfound-404 h1{
  position:absolute;
  left:50%;
  top:50%;
  -webkit-transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  font-size:224px;
  font-weight: 900;
  margin:0 0 0 -12px;
  color:var(--third-color);
  text-transform: uppercase;
  text-shadow: -1px -1px 0px var(--second-color), 1px 1px 0px var(--first-color);
  letter-spacing:-20px;
}
.notfound .notfound-404 h2{
  position:absolute;
  left:0;
  top:110px;
  right:0;
  font-size:42px;
  font-weight: 700;
  color:#fff;
  text-transform: uppercase;
  text-shadow: -1px -1px 0px var(--first-color);
  letter-spacing:13px;
  margin:0;
}
.notfound a{
  display: inline-block;
  text-transform: uppercase;
  color:var(--first-color);
  text-decoration: none;
  border:2px solid;
  background:transparent;
  padding:10px 40px;
  font-size: 14px;
  font-weight: 700;
  margin:15px;
  -webkit-transition:0.2s all;
  -ms-transition:0.2s all;
  transition:0.2s all;
}
.notfound a:hover{
  color:var(--second-color);
}
@media (max-width:767px){
  .notfound .notfound-404 h2{
    font-size: 24px;
  }
}
@media (max-width:480px){
  .notfound .notfound-404 h1{
    font-size: 182px;
  }
}

</style>
<!DOCTYPE html>
<html>
<head>
    <title>Sayfa Bulunamadı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div id="notfound">
     <div class="notfound">
       <div class="notfound-404">
         <h1>404</h1>
         <h2>Sayfa Bulunamadı</h2>
       </div>
     </div>
   </div>
</body>
</html>
<style> * { margin: 0; padding: 0; } body { background: radial-gradient( circle, #342c2c, #2b2527, #221f20, #191819, #111111 ); color: #20e3a2; font-size: 30px; min-height: 100vh; user-select: none; overflow: hidden; } bubles { border-radius: 100%; position: absolute; pointer-events: none; border: 1px solid #00ffff; box-shadow: 0px 0px 15px 0px #00ffff inset; transform: translate(-50%, -50%); animation: colorgen 8s infinite, float 2s infinite; } @keyframes colorgen { 0% { opacity: 1; transform: translatey(0px); } 100% { opacity: 0; transform: translatey(-1000px); } } @keyframes float { 0% { margin-left: -30px; } 50% { margin-left: 30px; } 100% { margin-left: -30px; } } :root { --speed: 10s; --coloring: #20e3a2; --direction: 2000; } @function multiple-box-shadow($n) { $value: "#{random(2000)}px #{random(2000)}px var(--coloring)"; @for $i from 2 through $n { $value: "#{$value} , #{random(2000)}px #{random(2000)}px var(--coloring)"; } @return unquote($value); } $shadows-small: multiple-box-shadow(300); $shadows-medium: multiple-box-shadow(200); $shadows-big: multiple-box-shadow(200); html { height: 100%; background: radial-gradient(ellipse at bottom, #20e3a2 0%, #ba55d3 100%); overflow: hidden; } #bubbles { width: 4px; height: 4px; background: transparent; box-shadow: $shadows-small; animation: animStar linear infinite; animation-duration: calc(var(--speed) * 6); border-radius: 100%; &:after { content: " "; position: absolute; top: -2000px; width: 2px; height: 2px; background: transparent; box-shadow: $shadows-small; border-radius: 100%; } } #bubbles2 { width: 4px; height: 4px; background: transparent; box-shadow: $shadows-medium; animation: animStar linear infinite; animation-duration: calc(var(--speed) * 4); border-radius: 100%; &:after { content: " "; position: absolute; top: 2000px; width: 4px; height: 4px; background: transparent; box-shadow: $shadows-medium; border-radius: 100%; } } #bubbles3 { width: 6px; height: 6px; background: transparent; box-shadow: $shadows-big; animation: animStar linear infinite; animation-duration: calc(var(--speed) * 5); border-radius: 100%; &:after { content: " "; position: absolute; top: -2000px; width: 6px; height: 6px; background: transparent; box-shadow: $shadows-big; border-radius: 100%; } } @keyframes animStar { from { transform: translateY(-200px); } to { transform: translateY(-2000px); } } </style>
<div id="bubbles"></div> <div id="bubbles2"></div> <div id="bubbles3"></div><script>let bubleArr = []; document.addEventListener("mousemove", (e) => { let bubles = document.createElement("bubles"); let x = e.pageX; let y = e.pageY; let size = Math.random() * 60; bubles.style.width = 1 + size + "px"; bubles.style.height = 1 + size + "px"; bubles.style.left = x - size / 2 + "px"; bubles.style.top = y - size / 2 + "px"; document.body.appendChild(bubles); setTimeout(function () { bubles.remove(); console.log("tu sam"); }, 5000); }); </script>

