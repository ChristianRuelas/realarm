
function des(){
    document.getElementById("uno").style.opacity="0";
    document.getElementById("dos").style.opacity="0";
    document.getElementById("tres").style.opacity="0";
    document.getElementById("cuatro").style.opacity="0";
    document.getElementById("descargas").style.visibility='visible';
}
function recup(){
    document.getElementById("uno").style.opacity="1";
    document.getElementById("dos").style.opacity="1";
    document.getElementById("tres").style.opacity="1";
    document.getElementById("cuatro").style.opacity="1";
    document.getElementById("descargas").style.visibility='hidden';
}
function regprin(){
    var mensaje = confirm("Esta seguro que quiere salir del registro");
    if (mensaje) {
        window.location="indexphp";
    }
}
function vercon(){
    
  
    if (document.form1.txtAp.value==""||document.form1.txtName.value==""||document.form1.txtTel.value==""||document.form1.txtSerie.value==""||document.form1.txtPass.value==""||document.form1.txtPass2.value=="") {
        alert("faltan datos en el formulario");
        if(document.form1.txtUser.value==""){
            document.form1.txtUser.style.border="1px solid tomato"; 
        }else{
            document.form1.txtUser.style.border="0"; 
        }
        if(document.form1.txtTel.value==""){
            document.form1.txtTel.style.border="1px solid tomato"; 
        }else{
            document.form1.txtTel.style.border="0"; 
        }
        if(document.form1.txtSerie.value==""){
            document.form1.txtSerie.style.border="1px solid tomato"; 
        }else{
            document.form1.txtSerie.style.border="0"; 
        }
        if(document.form1.txtPass.value==""){
            document.form1.txtPass.style.border="1px solid tomato"; 
        }else{
            document.form1.txtPass.style.border="0"; 
        }
        if(document.form1.txtPass2.value==""){
            document.form1.txtPass2.style.border="1px solid tomato"; 
        }else{
            document.form1.txtPass2.style.border="0"; 
        }
        
    }else{
        if(document.form1.txtPass.value!=document.form1.txtPass2.value){
            alert("contraseñas no son iguales");
        }
        else{
            document.form1.submit();
        }
    }
   
}
function ireg(){
    var resp=confirm("Quiere crear una cuenta?");
    if (resp) {
        document.location='registro.php';
    }
   
}
function regresar(){
    var mensaje= confirm("Desea Cancelar la compra");
    if (mensaje) {
        window.location="index.php";
    }
}
function regresar2(){
    var mensaje= confirm("Gracias por preferir Realarm");
    if (mensaje) {
        window.location="index.php";
    }
}
function cancelar_cambio(){
    var mensaje= confirm("Cancelar cambio de contraseña");
    if (mensaje) {
        window.location="Realarm.php";
    }
}

