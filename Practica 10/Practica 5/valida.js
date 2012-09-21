/**
 * @author Manuel Alejandro Meza Olmedo
 */

	
function valida() {
	valor = document.getElementById("nick").value;
	if(!/^[A-Za-z_0-9]+$/.test(valor)) {
		alert("El nick contiene caracteres invalidos.");
		return false;
	} else {
		valor = document.getElementById("correo").value;
		if(!/[a-z_0-9.]+@[a-z_0-9]+.[a-z]{2,4}$/.test(valor)) {
			alert("El correo electronico se encuentra erroneo");
			return false;
		} else {
			valor = document.getElementById("passwd").value;
			if(!/[A-Za-z0-9-_.,]+$/.test(valor)) {
				alert("La contraseña cuenta con datos incorrectos");
				return false;
			} else {
				if(valor != document.getElementById("repasswd").value) {
					alert("No coinciden las contraseñas. Vuelva a ingresarlas");
					document.getElementById("passwd").value = '';
					document.getElementById("repasswd").value = '';
					return false;
				} else {
					return true;
				}
			}
		}
	}
}
