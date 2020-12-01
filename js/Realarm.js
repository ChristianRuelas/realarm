
function encender(){
  
   
   song.play();
   document.getElementById('userr').style.backgroundColor='red';
   document.getElementById("estado").innerHTML="encendido";
   document.getElementById("edo").style.border="1px solid green";
}
function apagar(){
  
   
    document.getElementById('alarma').pause();
    document.getElementById('userr').style.backgroundColor='rgba(199, 185, 185, 0.712)';
    document.getElementById("estado").innerHTML="apagado";
    document.getElementById("edo").style.border="1px solid red";
}
 function direccionar(x){
    document.getElementById("txtoculto").value=x;
    document.forma.submit();
    
}
function Csesion(){
   var x=confirm("Seguro que decea cerrar la sesion");
   if(x){
   
      document.location="php/cerrarsesion.php";
   }
}
function eliminar(){
  var x = confirm("Se eliminara su cuenta y ya no podra entrar hasta que se cree otra cuenta\nPrecione aceptar solamente si esta seguro de eliminar la cuenta");
if (x){
   x=confirm("Seguro que decea eliminar permanentemente su cuenta");
   if(x){
      alert("Gracias por haber usado nuestro sistema de alertas");
      document.location="php/eliminarcuenta.php";
   }
}
}