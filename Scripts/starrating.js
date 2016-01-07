$("#star1").hover(
function(){
if(hover==true) $("#star1").attr("src","../../Images/star2.png");
},
function(){
if(hover==true) $("#star1").attr("src","../../Images/star.png");
}
);

$("#star2").hover(
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star2.png");
$("#star2").attr("src","../../Images/star2.png");
}
},
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star.png");
$("#star2").attr("src","../../Images/star.png");
}
}
);


$("#star3").hover(
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star2.png");
$("#star2").attr("src","../../Images/star2.png");
$("#star3").attr("src","../../Images/star2.png");
}
},
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star.png");
$("#star2").attr("src","../../Images/star.png");
$("#star3").attr("src","../../Images/star.png");
}
}
);



$("#star4").hover(
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star2.png");
$("#star2").attr("src","../../Images/star2.png");
$("#star3").attr("src","../../Images/star2.png");
$("#star4").attr("src","../../Images/star2.png");
}
},
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star.png");
$("#star2").attr("src","../../Images/star.png");
$("#star3").attr("src","../../Images/star.png");
$("#star4").attr("src","../../Images/star.png");
}
}
);



$("#star5").hover(
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star2.png");
$("#star2").attr("src","../../Images/star2.png");
$("#star3").attr("src","../../Images/star2.png");
$("#star4").attr("src","../../Images/star2.png");
$("#star5").attr("src","../../Images/star2.png");
}
},
function(){
if(hover==true){
$("#star1").attr("src","../../Images/star.png");
$("#star2").attr("src","../../Images/star.png");
$("#star3").attr("src","../../Images/star.png");
$("#star4").attr("src","../../Images/star.png");
$("#star5").attr("src","../../Images/star.png");
}
}
);



$('#star1').click(function()
{
if(hover==true) $.get("../../sendrating.php", {rate:'1'} , function(){});
hover=false;
});

$('#star2').click(function()
{
if(hover==true) $.get("../../sendrating.php", {rate:'2'} , function(){});
hover=false;
});

$('#star3').click(function()
{
if(hover==true) $.get("../../sendrating.php", {rate:'3'} , function(){});
hover=false;
});

$('#star4').click(function()
{
if(hover==true) $.get("../../sendrating.php", {rate:'4'} , function(){});
hover=false;
});

$('#star5').click(function()
{
if(hover==true) $.get("../../sendrating.php", {rate:'5'} , function(){});
hover=false;
});
