const form = document.querySelector(".login form");
const continueBtn = form.querySelector(".button input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
	e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = ()=>{
	//let's start Ajax
	let xhr = new XMLHttpRequest(); //creating a XML object
	xhr.open("POST", "php/login.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				console.log(data);
				if (data == "sucess") {

					location.href = "user.php";

				}else{
					errorText.textContent = data;
					errorText.style.display = "block";
				}
			}
		}
	}
	//we have to send the form data through ajax to php
	let formData = new FormData(form); //creating new formdata object
	xhr.send(formData); // sending the form data to php
}