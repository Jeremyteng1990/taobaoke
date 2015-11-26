<html>
<head>
<title>���Դ���</title>
<style type="text/css">
* {margin:0;padding:0;}
body {margin:5px auto;background:#f0f0f0;}
img {margin:0;border:0;padding:0;}
#jsF {position:relative;margin:0;width:970px;height:300px;overflow:hidden;}
#jsF ul {position:absolute;top:0;left:0;list-style-type:none;z-index:1;}
#jsF li {display:block;position:absolute;top:0;margin:0;padding:0;overflow:hidden;}
</style>
</head>
<body>
<div id="jsF"   onclick=window.open('http://xunren.baidu.com','_blank')></div>
<div id="debug"></div>
<script>
//<[CDATA[
var jsF = document.getElementById('jsF');
var speed1 = 50, speed2 = 2000;
var iA = 0, iB = 0, iC = 0;
var bD = [];
var aImg = ['http://www.babseat.com/wp-content/themes/i-taoke/images/xunren1.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren2.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren3.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren4.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren5.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren6.jpg','http://www.babseat.com/wp-content/themes/i-taoke/images/xunren7.jpg'];
var aLink = ['#','#','#','#','#','#','#'];
var iImgWidth = 250, iImgHeight = 250;
var iDivWidth = iImgWidth/10;
jsF.style.width = iImgWidth + 'px';
jsF.style.height = iImgHeight + 'px';
var oImg = [];
oImg[0] = new Image();
oImg[0].src = aImg[0];
oImg[1] = new Image();
oImg[1].src = aImg[1];
window.onload = function() {
 jsF_create();
 onclick();
}
function  onclick(){
onclick="window.top.location='http://www.baidu.com'";
}
function jsF_create() {
 if (aImg[iA+2] && !bD[iA+2]){
  oImg[iA+2] = new Image();
  oImg[iA+2].src = aImg[iA+2];
 }
 if (!bD[iA]) {
  var oUl = document.createElement('ul');
  /*oUl.style.position = 'absolute';
  oUl.style.top = '0';
  oUl.style.left = '0';*/
  oUl.style.width = iImgWidth + 'px';
  oUl.style.height = iImgHeight + 'px';
  var oUlLi = document.createElement('li');
  oUlLi.style.right = '0';
  oUlLi.style.width = iDivWidth +'px';
  oUlLi.style.height = iImgHeight + 'px';
  var oLiA = document.createElement('a');
  oLiA.href = aLink[iA];
  var oLiImg = document.createElement('img');
  oLiImg.src = oImg[iA].src;
  oLiImg.style.marginLeft = -9*iDivWidth + 'px';
  oLiA.appendChild(oLiImg);
  oUlLi.appendChild(oLiA);
  oUl.appendChild(oUlLi);
  for (var i=0; i<10; i++) {
   oUlLi = document.createElement('li');
   oUlLi.style.right = i*iDivWidth + 'px';
   oUlLi.style.width = 1.5*iDivWidth +'px';
   oUlLi.style.height = iImgHeight + 'px';
   //oUlLi.style.background = color[i];
   oLiA = document.createElement('a');
   oLiA.href = aLink[iA];
   oLiImg = document.createElement('img');
   oLiImg.src = oImg[iA].src;
   oLiImg.style.marginLeft = -9*iDivWidth + 'px';
   oLiA.appendChild(oLiImg);
   oUlLi.appendChild(oLiA);
   //oUlLi.appendChild(document.createTextNode(i));
   oUl.appendChild(oUlLi);
  }
  jsF.appendChild(oUl);
  bD[iA] = !bD[iA];
 }
 jsF_show();
 //document.getElementById('debug').innerText = jsF.innerHTML;
}
// http://www.codefans.net
function jsF_show(){
 var oUl = jsF.getElementsByTagName('ul');
 var oLi = oUl[iA].getElementsByTagName('li');
 var oImgs = oUl[iA].getElementsByTagName('img');
 oUl[iA].style.zIndex = ++iC;
 for (var i=1; i<11; i++){
  oImgs[i].style.marginLeft = -9*iDivWidth + 'px';
  oImgs[i].style.visibility = 'hidden';
 }
 jsF_move();
}
function jsF_move(){
 var oUl = jsF.getElementsByTagName('ul');
 var oLi = oUl[iA].getElementsByTagName('li');
 var oImgs = oUl[iA].getElementsByTagName('img');
 if (iB++<10)
  oImgs[iB].style.visibility = 'visible';
 for (var i=1; i<oImgs.length; i++) {
  var iBgpx = parseInt(oImgs[i].style.marginLeft);
  if (iBgpx<(i+0.5)*iDivWidth-iImgWidth) {
   var iMovePx = Math.floor((iImgWidth-(i+0.5)*iDivWidth+iBgpx)/15);
   oImgs[i].style.marginLeft = iBgpx - iMovePx + 'px';
  } else {
   oImgs[i].style.marginLeft = ((i+0.5)*iDivWidth-iImgWidth) + 'px';
  }
 }
 //document.getElementById('debug').innerText = jsF.innerHTML;
 if (parseInt(oImgs[10].style.marginLeft)<0.5*iDivWidth) {
  setTimeout('jsF_move()',speed1);
 } else {
  iB = 0;
  //document.getElementById('debug').innerText = oUl[iA].style.display;
  iA = ++iA==aImg.length ? 0 : iA;
  if (bD[iA]) {
   setTimeout('jsF_show()',speed2);
  } else {
   setTimeout('jsF_create()',speed2);
  }
 }
}
//]]>
</script>
</body>
</html>