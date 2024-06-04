const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
chatBox = document.querySelector(".chat-box"),
sendBtn = form.querySelector("button");

form.onsubmit = (e) =>{
	e.preventDefault(); //preventing form from submitting
}

sendBtn.onclick = ()=>{
    //let's start Ajax
	let xhr = new XMLHttpRequest(); //creating a XML object
	xhr.open("POST", "php/insert_grupo.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
                inputField.value = ""; //once message inserted into database then leave blank the input field
			}
		}
	}
	//we have to send the form data through ajax to php
	let formData = new FormData(form); //creating new formdata object
	xhr.send(formData); // sending the form data to php
}

setInterval(()=>{
    //let's start Ajax
        let xhr = new XMLHttpRequest(); //creating a XML object
        xhr.open("POST", "php/get-grupo.php", true);
        xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    //console.log(data);
                    chatBox.innerHTML = data;
                    scrolToBottom();

                }
            }
        }
        //we have to send the form data through ajax to php
	    let formData = new FormData(form); //creating new formdata object
	    xhr.send(formData); // sending the form data to php
}, 500); // this function will run frequently after 500ms

function scrolToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}
