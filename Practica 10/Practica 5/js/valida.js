/**
 * @author Manuel Alejandro Meza Olmedo
 */

	
function valida() {
	var cont = 0;
	
	valor = document.registro.nick.value;
	if(!/\w{4,20}/.test(valor) || valor == '') {
		document.getElementById("error_nick").style.visibility='visible';
	} else {
		document.getElementById("error_nick").style.visibility='hidden';
		cont++;
	}
	
	valor = document.registro.correo.value;
	if(!/[a-z_0-9.]+@[a-z_0-9]{4,}.[a-z]{2,4}$/.test(valor)) {
		document.getElementById("error_mail").style.visibility='visible';
	} else {
		document.getElementById("error_mail").style.visibility='hidden';
		cont++;
	}
	
	valor = document.registro.passwd.value;
	if(!/[A-Za-z0-9-_.,]+$/.test(valor)) {
		document.getElementById("error_passwd").style.visibility='visible';
	} else {
		document.getElementById("error_passwd").style.visibility='hidden';
		cont++;
	}
	
	valor = document.registro.passwd.value;
	if(valor != document.getElementById("repasswd").value) {
		document.getElementById("error_repasswd").style.visibility='visible';
		document.getElementById("repasswd").value = '';
	} else {
		document.getElementById("error_repasswd").style.visibility="hidden";
		cont++;
	}
	
	if(cont == 4) {
		document.registro.submit.click();
	}
}
