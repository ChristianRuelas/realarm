function encender(){
   alert("asi sonara cuando cambie a 1 en base de datos");
   document.getElementById("estado").innerHTML="encendido";
   document.getElementById("edo").style.border="1px solid green";
   document.getElementById('alarma').play();
   document.getElementById('userr').style.backgroundColor='red';
}
function apagar(){
    document.getElementById("estado").innerHTML="apagado";
    document.getElementById("edo").style.border="1px solid red";
    document.getElementById('alarma').pause();
    document.getElementById('userr').style.backgroundColor='rgba(199, 185, 185, 0.712)';
 }
 function direccionar(x){
    document.getElementById("txtoculto").value=x;
    document.forma.submit();
    
}
function Csesion(){
   var x=confirm("Seguro que decea cerrar la sesion");
   if(x){
      document.location="index.php";
   }
}