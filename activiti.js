var y = 0;
var images2 = ["activiti1.jpg","activiti2.jpg","activiti3.jpg","activiti4.jpg","activiti5.jpg"];

var myVar2 = setInterval(changepic2, 1000);

function changepic2(){
y++;
if(y == images2.length)
y=0;
image2 = document.getElementById("ac");
image2.src = images2[y];

} 