<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <title>Ignite'12</title>
        <style type="text/css">
            .g{
                text-decoration: blink;
}
.r{
    color: pink,red,blue;
}
div.transbox
 {
 width:1088px;

 margin:0px 20px;
 background-color: black;
 border:1px solid black;
 /* for IE */
 filter:alpha(opacity=50);
 /* CSS3 standard */
 opacity:0.9;

 }
div.transbox p
{
 margin:0px 20px;
 font-weight:bold;
 color:white ;
}
        </style>
    </head>
    <body text="white">
         <?php include("header.php"); ?>
        <center>    <div class="transbox">
                <form action="">

                    
                    <h1>
                       <br>
                       <font color="red">   <a href="https://www.facebook.com/AmarjotkaurDhawan">  &nbsp; Amarjot Kaur</a><br></font>
                    Student Coordinator<br>
                    er.amarjotkaur91@gmail.com<br><br>
                    
                     &nbsp
                     <table><tr><td>
                     <a href="https://www.facebook.com/sunilskp24?fref=ts" >    <img src="fb.png"  height="34" width="30"/></a></td>
         <td>  <font color="red"> <a href="https://www.facebook.com/sunilskp24?fref=ts">&nbsp; Sunil Kumar </a><br></font></td></tr>                 </table>
                    Student CO-Coordinator<br>
                    +91-9592784722<br>
                    sunilskp24@gmail.com<br><br>
                    
        <a href="https://www.facebook.com/anjan.khurana?ref=ts&fref=ts" >&nbsp; Preet Anjan Singh</a><br>
                    Student CO-Coordinator<br>
                    +91-9888015185<br><br>
                    
            <table><tr><td colspan="5">        
       <font color="red"> <b>  <center> Website Developers: </center></b> </font><br /></td>
       <tr><td>
        <a href="https://www.facebook.com/alwar30" >    <img src="fb.png" height="34" width="30"/></a></td>
                <td>    <a href="http://www.facebook.com/alwar30" >&nbsp; Aditya Goyal &nbsp;</a><br />
             
                   
                    adityag286@gmail.com<br><br></td>
                    <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td>
                      <a href="http://www.facebook.com/mandy.kaur.311" >    <img src="fb.png"  height="34" width="30"/></a></td>
                <td>    <a href="http://www.facebook.com/mandy.kaur.311" >  &nbsp; Mandeep Kaur &nbsp;</a><br />
            
             
                   mandeep.kaur.jolly@gmail.com<br><br></td></tr></table>
                    </h1>

                </form>
                <br /><br /><br /><br /><br />
                
   </div></center>

<script type="text/javascript"  language="JavaScript1.2">

/*
Flying Butterfly script (By BGAudioDr@aol.com)
Modified slightly/ permission granted to Dynamic Drive to feature script in archive
For full source, visit http://www.dynamicdrive.com
*/

var Ymax=8;                                //MAX # OF PIXEL STEPS IN THE "X" DIRECTION
var Xmax=8;                                //MAX # OF PIXEL STEPS IN THE "Y" DIRECTION
var Tmax=10000;                        //MAX # OF MILLISECONDS BETWEEN PARAMETER CHANGES

//FLOATING IMAGE URLS FOR EACH IMAGE. ADD OR DELETE ENTRIES. KEEP ELEMENT NUMERICAL ORDER STARTING WITH "0" !!

var floatimages=new Array();
floatimages[0]='butterfly2.gif';
floatimages[1]='butterfly2.gif';

//*********DO NOT EDIT BELOW***********
var NS4 = (navigator.appName.indexOf("Netscape")>=0 && parseFloat(navigator.appVersion) >= 4 && parseFloat(navigator.appVersion) < 5)? true : false;
var IE4 = (document.all)? true : false;
var NS6 = (parseFloat(navigator.appVersion) >= 5 && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var wind_w, wind_h, t='', IDs=new Array();
for(i=0; i<floatimages.length; i++){
t+=(NS4)?'<layer name="pic'+i+'" visibility="hide" width="10" height="10"><a href="javascript:hidebutterfly()">' : '<div id="pic'+i+'" style="position:absolute; visibility:hidden;width:10px; height:10px"><a href="javascript:hidebutterfly()">';
t+='<img src="'+floatimages[i]+'" name="p'+i+'" border="0">';
t+=(NS4)? '</a></layer>':'</a></div>';
}
document.write(t);

function moveimage(num){
if(getidleft(num)+IDs[num].W+IDs[num].Xstep >= wind_w+getscrollx())IDs[num].Xdir=false;
if(getidleft(num)-IDs[num].Xstep<=getscrollx())IDs[num].Xdir=true;
if(getidtop(num)+IDs[num].H+IDs[num].Ystep >= wind_h+getscrolly())IDs[num].Ydir=false;
if(getidtop(num)-IDs[num].Ystep<=getscrolly())IDs[num].Ydir=true;
moveidby(num, (IDs[num].Xdir)? IDs[num].Xstep :  -IDs[num].Xstep , (IDs[num].Ydir)?  IDs[num].Ystep:  -IDs[num].Ystep);
}

function getnewprops(num){
IDs[num].Ydir=Math.floor(Math.random()*2)>0;
IDs[num].Xdir=Math.floor(Math.random()*2)>0;
IDs[num].Ystep=Math.ceil(Math.random()*Ymax);
IDs[num].Xstep=Math.ceil(Math.random()*Xmax)
setTimeout('getnewprops('+num+')', Math.floor(Math.random()*Tmax));
}

function getscrollx(){
if(NS4 || NS6)return window.pageXOffset;
if(IE4)return document.body.scrollLeft;
}

function getscrolly(){
if(NS4 || NS6)return window.pageYOffset;
if(IE4)return document.body.scrollTop;
}

function getid(name){
if(NS4)return document.layers[name];
if(IE4)return document.all[name];
if(NS6)return document.getElementById(name);
}

function moveidto(num,x,y){
if(NS4)IDs[num].moveTo(x,y);
if(IE4 || NS6){
IDs[num].style.left=x+'px';
IDs[num].style.top=y+'px';
}}

function getidleft(num){
if(NS4)return IDs[num].left;
if(IE4 || NS6)return parseInt(IDs[num].style.left);
}

function getidtop(num){
if(NS4)return IDs[num].top;
if(IE4 || NS6)return parseInt(IDs[num].style.top);
}

function moveidby(num,dx,dy){
if(NS4)IDs[num].moveBy(dx, dy);
if(IE4 || NS6){
IDs[num].style.left=(getidleft(num)+dx)+'px';
IDs[num].style.top=(getidtop(num)+dy)+'px';
}}

function getwindowwidth(){
if(NS4 || NS6)return window.innerWidth;
if(IE4)return document.body.clientWidth;
}

function getwindowheight(){
if(NS4 || NS6)return window.innerHeight;
if(IE4)return document.body.clientHeight;
}

function init(){
wind_w=getwindowwidth();
wind_h=getwindowheight();
for(i=0; i<floatimages.length; i++){
IDs[i]=getid('pic'+i);
if(NS4){
IDs[i].W=IDs[i].document.images["p"+i].width;
IDs[i].H=IDs[i].document.images["p"+i].height;
}
if(NS6 || IE4){
IDs[i].W=document.images["p"+i].width;
IDs[i].H=document.images["p"+i].height;
}
getnewprops(i);
moveidto(i , Math.floor(Math.random()*(wind_w-IDs[i].W)), Math.floor(Math.random()*(wind_h-IDs[i].H)));
if(NS4)IDs[i].visibility = "show";
if(IE4 || NS6)IDs[i].style.visibility = "visible";
startfly=setInterval('moveimage('+i+')',Math.floor(Math.random()*100)+100);
}}

function hidebutterfly(){
for(i=0; i<floatimages.length; i++){
if (IE4)
eval("document.all.pic"+i+".style.visibility='hidden'")
else if (NS6)
document.getElementById("pic"+i).style.visibility='hidden'
else if (NS4)
eval("document.pic"+i+".visibility='hide'")
clearInterval(startfly)
}
}

if (NS4||NS6||IE4){
window.onload=init;
window.onresize=function(){ wind_w=getwindowwidth(); wind_h=getwindowheight(); }
}

</script>
    </body>
</html>
