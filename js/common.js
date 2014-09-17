function checkNumber(textBox)
{
	while (textBox.value.length > 0 && isNaN(textBox.value)) {
		textBox.value = textBox.value.substring(0, textBox.value.length - 1)
	}
	
	textBox.value = trim(textBox.value);
/*	if (textBox.value.length == 0) {
		textBox.value = 0;		
	} else {
		textBox.value = parseInt(textBox.value);
	}*/
}


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

