var y = 0;

var images2 = ["nsbm.jpg","nsbm3.jpg","nsbm4.jpg","nsbm5.jpg","nsbm6.jpg","nsbm7.jpg","nsbm1.jpg","nsbm8.jpg","nsbm2.jpg","nsbm1.jpg","nsbm8.jpg","nsbm2.jpg",];
//var images2 = new Array("nsbm1.jpg","nsbm.jpg");
var myVar2 = setInterval(changepic2, 800);

function changepic2(){
y++;
if(y == images2.length)
y = 0;
image2 = document.getElementById("nsbm");
image2.src = images2[y];
}


