/**
 * @author Manuel Alejandro Meza Olmedo
 */

function validar() {
	var op = document.getElementById("inte").selectedIndex;
	if(op == -1) {
		alert("No haz elegido un interes");
		return false;
	} else {
		if(!document.getElementById("imagen").value) {
			alert("No hay imagen seleccionada");
			return false;
		} else {
			var ext = new Array(".jpg", ".png", ".gif");
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
				alert("Extensión no permitida");
				return false;
			} else {
				if(document.getElementById("passwd").value == '') {
					alert("No ha ingresado ninguna contraseña");
					return false;
				} else {
					valor = document.getElementById("nombre").value;
					if(!/^[A-Za-z_\' \']+$/.test(valor)) {
						alert("El nombre contiene caracteres invalidos.");
						return false;
					} else {
						valor = document.getElementById("direccion").value;
						if(!/^[A-Za-z0-1\.\#\' \']+/.test(valor)) {
							alert("La direccion es incorrecta");
							return false;
						} else {
							valor = document.getElementById("telefono").value;
							if(!/[0-9]{7,10}/.test(valor) || valor.length > 10) {
								alert("El numero contiene caracteres invalidos o la longitus no es la indicada")
								return false;
							} else {
								valor = document.getElementById("bd").value;
								if(!fecha(valor)) {
									alert("La fecha es incorrecta");
									return false;
								} else {
									valor = document.getElementsByName("sexo");
									var chek = false;
									for(i = 0; i < valor.length; i++) {
										if(valor[i].checked) {
											chek = true;
											break;
										}				
									}
									if(!chek) {
										alert("No ha seleccionado el sexo");
										return false;
									} else {
										return true;
									}
								}
							}
						}
					}
				}
			}	
		}
	}
}

function fecha(fech) {
	if(fech != '') {
		 fech = new String(fech);
		 var actualfech = new Date();
		 do {
		 	fech = fech.replace("/", "-");
		 }while(fech.indexOf("/") >= 0);
		 
		 var fechaa = fech.split("-");
		 var dia = new String(fechaa[2]);
		 var mes = new String(fechaa[1]);
		 var anio = fechaa[0];
		 
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
