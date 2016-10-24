var y = 0;
var images2 = ["nsbm1.jpg","nsbm.jpg"];
//var images2 = new Array("nsbm1.jpg","nsbm.jpg");
var myVar2 = setInterval(changepic2, 1000);

function changepic2(){
y++;
if(y == images2.length)
y=0;
image2 = document.getElementById("nsbm");
image2.src = images2[y];

} 