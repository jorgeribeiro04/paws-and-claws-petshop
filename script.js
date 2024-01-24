function changeQuantity(n, m){
	switch(n){
		case 1:
		let a = parseInt(document.getElementById(m).value);
		a++;
		document.getElementById(m).value = a;
		break;
	case 2:
		let b = parseInt(document.getElementById(m).value);
		b--;
		if(b < 1){
			b = 1;
		}
		document.getElementById(m).value = b;
		break;
	}
	
}


let mybutton = document.getElementById("btn-back-to-top");


window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
	
	if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000	) {
			mybutton.style.display = "block";
			if((document.body.scrollTop > 2150 || document.documentElement.scrollTop > 2150)){
				mybutton.style.backgroundColor = "#fffbf7";
				if((document.body.scrollTop > 2530 || document.documentElement.scrollTop > 2530)){
					mybutton.style.backgroundColor = "#d8e4f2";
			}
			}
			else{
				mybutton.style.backgroundColor = "#d8e4f2";
			}
	} 
	else {
			mybutton.style.display = "none";
	}
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

$(document).ready(function(){
	var limit = 9;
	var offset = 9;
	
	$('#loadMore').on('click', function(){
		$.ajax({
			url: 'load_more.php',
			type: 'GET',
			data:{limit: limit, offset: offset},
			success: function(data){
				$('#products-div').append(data);
				offset += limit;
				
			}
		});
	});
		
});

function updateStars(){
	var sliderValue = document.getElementById("sliderValue").value;
	var starContainer = document.getElementById("starContainer");
	
	starContainer.innerHTML = '';
	
	for(var i = 0; i < sliderValue; i++){
		var star = document.createElement("i");
		star.className = "fa fa-star checked";
		starContainer.append(star);
	}
	
	for(var i = sliderValue; i < 5; i++){
		var star = document.createElement("i");
        star.className = "fa fa-star star-review";
        starContainer.appendChild(star);
	}
	
	updateStars();
	
}

function redirect(){
	window.location.href("cart.php");
}

function modalInfo(src, product, price){
	document.getElementById("modalh5").value = product;
	document.getElementById("main-image").src = src;
	document.getElementById("modalPrice").value = price;
}



