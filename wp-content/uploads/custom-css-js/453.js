/******* Do not edit this file *******
Simple Custom CSS and JS - by Silkypress.com
Saved: May 27 2022 | 11:04:44 */
if(document.body.contains(document.getElementById('field_qh4icy'))){
document.getElementById("field_qh4icy").onkeydown = myFunction_letters;
function myFunction_letters() {
	return /[ a-zA-Zء-ي]/i.test(event.key);
}
}

if(document.body.contains(document.getElementById('field_qyc3w'))){
document.getElementById("field_qyc3w").onkeydown = myFunction_phone;
function myFunction_phone() {
if (document.getElementById("field_qyc3w").value.substr(0, 2) == "07"){
document.getElementById("field_qyc3w").value = document.getElementById("field_qyc3w").value.slice(0, 10);
}
if (document.getElementById("field_qyc3w").value.substr(0, 4) == "9647"){
document.getElementById("field_qyc3w").value = document.getElementById("field_qyc3w").value.slice(0, 12);
}
if (document.getElementById("field_qyc3w").value.substr(0, 6) == "009647"){
document.getElementById("field_qyc3w").value = document.getElementById("field_qyc3w").value.slice(0, 14);
}
}
}