function cek(krt) {
	karakter = /^[A-Za-z]{1,}$/;<!--nama harus berupa huruf,--!>
	return karakter.test(krt);
}

function otent() 
{
	var usr = document.getElementById("Username").value; 
	var psw  = document.getElementById("Password").value; 
if(usr == "" || psw == "") 
{
	alert("Maaf, field harus diisi!");
	Username.focus(); 
	return false;
}
else if (!cek(usr) === true || !cek(psw)===true)
{
	alert("Maaf, field harus diisi dengan huruf saja!");
	Username.focus();
	return false;
}else{
return true;}
}
