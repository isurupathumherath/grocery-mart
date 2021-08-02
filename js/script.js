
//Password Show Functions
function GMshowPSWD() {
	var x = document.getElementById("pswd");
	if (x.type === "password") {
	x.type = "text";
	} else {
	x.type = "password";
		}
	}
	
function GMshowCMPSWD() {
	var x = document.getElementById("cmpswd");
	if (x.type === "password") {
	x.type = "text";
	} else {
	x.type = "password";
		}
	}
	
//File Preview
function previewFile() {
			  var preview = document.querySelector('img');
			  var file = document.querySelector('input[type=file]').files[0];
			  var reader = new FileReader();
			  reader.addEventListener("load", function() {
			    console.log('before preview');
			    preview.src = reader.result;
			    console.log('after preview');
			  }, false);
			  if (file) {
			    console.log('inside if');
			    reader.readAsDataURL(file);
			  } else {
			    console.log('inside else');
			  }
			}
		
//Slide Bar in Search page 
var slider = document.getElementById("GMrange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}

function pswdValidateGm() {
		var myInput = document.getElementById("pswd");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
		  document.getElementById("validateGM").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
		  document.getElementById("validateGM").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
		  // Validate lowercase letters
		  var lowerCaseLetters = /[a-z]/g;
		  if(myInput.value.match(lowerCaseLetters)) {  
			letter.classList.remove("invalid");
			letter.classList.add("valid");
		  } else {
			letter.classList.remove("valid");
			letter.classList.add("invalid");
		  }
		  
		  // Validate capital letters
		  var upperCaseLetters = /[A-Z]/g;
		  if(myInput.value.match(upperCaseLetters)) {  
			capital.classList.remove("invalid");
			capital.classList.add("valid");
		  } else {
			capital.classList.remove("valid");
			capital.classList.add("invalid");
		  }

		  // Validate numbers
		  var numbers = /[0-9]/g;
		  if(myInput.value.match(numbers)) {  
			number.classList.remove("invalid");
			number.classList.add("valid");
		  } else {
			number.classList.remove("valid");
			number.classList.add("invalid");
		  }
		  
		  // Validate length
		  if(myInput.value.length >= 8) {
			length.classList.remove("invalid");
			length.classList.add("valid");
		  } else {
			length.classList.remove("valid");
			length.classList.add("invalid");
		  }
		}
	}
	
	