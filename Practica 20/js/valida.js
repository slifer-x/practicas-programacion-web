/** * @author Manuel Alejandro Meza Olmedo
 */


/*
 * document.registro.radio1.checked && !document.registro.radio2.checked; PARA LOS RADIOS;
 *  
 * document.registro.lista.selectedIndex==0; SELECT
 * 
 * 
 * */

function validar() {
	var cont = 0;
	
	if(document.myform.inter.selectedIndex==-1) {
		document.getElementById("err_int").style.visibility="visible";
	} else {
		document.getElementById("err_int").style.visibility="hidden";
		cont++;
	}
		
	if(!document.myform.imagen.value) {
		document.getElementById("err_img").style.visibility="visible";
	} else {
		document.getElementById("err_img").style.visibility="hidden";
		var ext = new Array(".jpg", ".png", ".gif", ".jpeg");
		var image = document.getElementById("imagen").value;
		var extension = image.substring(image.lastIndexOf("."))
		var permitida = false;
		for(var i = 0; i < ext.length; i++) {
			if(ext[i] == extension) {
				permitida = true;
				break;
			}
		}
		if(!permitida) { 
			document.getElementById("err_img2").style.visibility="visible";
		} else {
			document.getElementById("err_img2").style.visibility="hidden";
			cont++;
		}		
	}
	
	if(document.getElementById("passwd").value == '' || document.getElementById("passwd").value.length < 8) {
		document.getElementById("err_psswd").style.visibility="visible";
	} else {
		document.getElementById("err_psswd").style.visibility="hidden";
		cont++;	
	}
	
	if(!/^[A-Za-z_ ]+$/.test(document.myform.nombre.value)) {
		document.getElementById("err_name").style.visibility="visible";
	} else {
		document.getElementById("err_name").style.visibility="hidden"
		cont++;
	}
	
	if(!/^[A-Za-z0-9\.\# ]+/.test(document.myform.direccion.value)) {
		document.getElementById("err_address").style.visibility="visible";
	} else {
		document.getElementById("err_address").style.visibility="hidden";
		cont++;
	}
	
	if(!/[0-9]{7,10}/.test(document.myform.telefono.value) || document.myform.telefono.value.length > 10) {
		document.getElementById("err_tel").style.visibility="visible";
	} else {
		document.getElementById("err_tel").style.visibility="hidden";
		cont++;
	}
	
	if(!fecha(document.myform.bd.value)) {
		document.getElementById("err_bd").style.visibility="visible";
	} else {
		document.getElementById("err_bd").style.visibility="hidden";
		cont++;
	}
	
	valor = document.getElementsByName("sexo");
	var chek = false;
	for(i = 0; i < valor.length; i++) {
		if(valor[i].checked) {
			chek = true;
			break;
		}				
	}
	
	if(!chek) {
		document.getElementById("err_sx").style.visibility="visible";
	} else {
		document.getElementById("err_sx").style.visibility="hidden";
		cont++;
	}
	
	if(cont == 8) {
		document.getElementById('passwd').value = md5(document.myform.passwd.value);
		document.myform.submit.click();
	}
}

function fecha(fech) {
	if(fech != '') {
		 fech = new String(fech);
		 var actualfech = new Date();
		 /*do {
		 	fech = fech.replace("/", "-");
		 }while(fech.indexOf("/") >= 0);*/
		 
		 var fechaa = fech.split("/");
		 var dia = new String(fechaa[0]);
		 var mes = new String(fechaa[1]);
		 var anio = fechaa[2];
		 
		 if(dia <= 9 && dia >= 1)
		 	dia = parseInt(dia.charAt(1));
		 else
		 	dia = parseInt(dia);
		 	
		 if(mes <= 9 && mes >= 1)
		 	mes = parseInt(mes.charAt(1));
		 else
		 	mes = parseInt(mes);

 		switch(mes) {
 			case 1: case 3: case 5: case 7: case 8: case 10: case 12:
 				if(!(dia >= 1 && dia <= 31))
 					return false;
 				break;
 			case 4: case 6: case 9: case 11:
 				if(!(dia >= 1 && dia <= 30))
 					return false;
 				break;
 			case 2:
 				if((anio % 4 == 0) && ((anio % 100 != 0) || (anio % 400 == 0))) {
 					if(!(dia >= 1 && dia <= 29))
 						return false;
 				} else {
 					if(!(dia >= 1 && dia <= 28))
	 					return false;
 				}
 				break;
 			default:
 				return false;
 		}
 		if(!(anio >= 1900 && anio <= 2012))
 			return false;						
	} else
		return false;
		
	return true;
}
