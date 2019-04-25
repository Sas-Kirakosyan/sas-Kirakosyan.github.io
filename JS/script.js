//   var x = document.getElementById("myDIV");
//   x.addEventListener("click", function(e){
// 	   if(e.target.tagName ==="button"){
// 		 x.innerHTML ="barlus";
	
// 	      }
// 	  }, false); 



// mobile menu.onclick
var menu = document.getElementById('mMenu');
var linkMenu = document.getElementById('linkMenu');

linkMenu.addEventListener('click', function(e){
    menu.classList.toggle('m-menu_active');	
}); 


//  accordion
 var acc = document.getElementsByClassName('accordion');
 var i;
 for(i=0; i<acc.length; i++){
	acc[i].addEventListener('click', function(){
		this.classList.toggle('active');
		var panel = this.nextElementSibling;
		if(panel.style.display === "block"){
			panel.style.display  = "none";
		}
			else{
				panel.style.display  = "block";
		}
	})
 }
  
	  
// $(function(){
// 	var linkMenu = $('.menu-link');
// 	var menu = $('.m-menu');
// 	linkMenu.on('click',function(event){
// 		event.preventDefault();
// 	menu.toggleClass('m-menu_active')
//     });
// });


let signupbtn = document.getElementById('mytraining-btn');
let modal = document.getElementById('mylogin-form');
signupbtn.onclick = function(){
 modal.style.display = "block";
 }
 let canselbtn = document.querySelector('.cancelbtn');
 canselbtn.onclick = function(){
	modal.style.display = "none";
 }

 





 
  

  