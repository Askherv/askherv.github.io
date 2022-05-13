var kullaniciadi = document.forms['form']['kullaniciadi'];
var sifre = document.forms['form']['sifre'];

var kullaniciadi_error = document.getElementById('kullaniciadi_error');
var sifre_error = document.getElementById('sifre_error');

kullaniciadi.addEventListener('textInput', kullaniciadi_Verify);
sifre.addEventListener('textInput', sifre_Verify);

function validated(){
	if (kullaniciadi.value.length < 9) {
		kullaniciadi.style.border = "1px solid red";
		kullaniciadi.focus();
		return false;
	}
	if (sifre.value.length < 6) {
		sifre.style.border = "1px solid red";
		sifre.focus();
		return false;
	}

}
function kullaniciadi_Verify(){
	if (kullaniciadi.value.length >= 8) {
		kullaniciadi.style.border = "1px transparent";
		kullaniciadi_error.style.display = "none";
		return true;
	}
}
function sifre_Verify(){
	if (sifre.value.length >= 5) {
		sifre.style.border = "1px transparent";
		sifre_error.style.display = "none";
		return true;
	}
}
