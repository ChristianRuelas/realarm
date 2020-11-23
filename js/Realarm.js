function encender(){
  
   
   document.getElementById('alarma').play();
   document.getElementById('userr').style.backgroundColor='red';
}
function apagar(){
  
   
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
   
      document.location="php/cerrarsesion.php";
   }
}