function numValid(number){
	num = number.value;
	var numericExpression = /^[0-9]+$/;
	if ((num.length == 14) && (num.charAt(0) == "(") && (num.charAt(4)== ")") && 
		(num.substring(6,9).match(numericExpression)) && (num.charAt(9) == "-") &&
		(num.substring(10).match(numericExpression))) {
			return true;
		}
	else {
		alert("The phone number entered is invalid! Please enter with the following format: (area-code) xxx-xxxx")
		number.focus();
		return false;
	}
}

function transformNum(number){
	number = number.value;
	areaCode = number.substring(1,4);
	exchangeNum = number.substring(6,14)
	finalNum = areaCode + "-" + exchangeNum;
	return finalNum;
}

function displayUser(name, address, number){
	if (numValid(number)) {
		number = transformNum(number);
		document.getElementById("prob1Ans").style.backgroundColor = "powderblue";
		document.getElementById("prob1Ans").style.border = "solid 2px black";
		for (let i=0; i < 3; i++) {
			const element = document.getElementById("user" + i);
			element.style.color = "#ffffff";
			element.style.fontSize = "25px";
			element.style.fontFamily = "Papyrus";	
			if (i == 0) {
				element.innerHTML = '<span style="color:red">Name:</span> ' + name.value;
			}
			else if (i == 1) {
				element.innerHTML = '<span style="color:red">Address:</span> ' + address.value;
			}
			else if (i == 2) {
				element.innerHTML = '<span style="color:red">Phone Number:</span> ' + number;
			}
		}
	}
}
