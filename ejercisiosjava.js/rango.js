function Pedir_Numero(){

    let numero = document.getElementById("num").value;



    if(numero < 10){
    alert("Este numero tiene 1 digito");
}else if(numero < 100){
    alert("este numero tiene 2 cifras");
}else if(numero < 1000){
    alert("este numero tiene 3 cifras");
}else if(numero < 10000){
    alert("este numero tiene 4 cifras");
}else if(numero < 100000){
    alert("este numero tiene 5 cifras");
}else if (numero > 10000) 
alert("este numero esta fuera del rango");
}


