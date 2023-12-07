let input = document.querySelector('.templatemo-input-icon-container input.form-control.pass');
		let showBtn = document.querySelector('i.fa.fa-eye.word');
		showBtn.onclick = function(){
			if(input.type === "password"){
				input.type = "text";
				showBtn.classList.add('active');			}
			else{
				input.type = "password";
				showBtn.classList.remove('active'); 
			}
		} 