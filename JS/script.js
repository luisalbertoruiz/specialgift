var cons = 1;
function slide_show(){
	var elemento = document.getElementById('galeria').getElementsByTagName('li');	
	for(var n=cons; n <= elemento.length; n++){		
 		elemento[n].className = 'selected';
 		for(var i = 0; i<elemento.length; i++){
  			if(i!=cons){
   				elemento[i].className = 'noselected';
  			}		
 		}
  		cons++;							
  		break;
 	}	
 	if(cons >= elemento.length){
  		cons = 0;		
 	}
 	return false;
}
window.onload = function(){
setInterval(slide_show, 4000);
}

var p1 = 0;
var p2 = 0;
var p3 = 0;
var p4 = 0;
var p5 = 0;
var p6 = 0;
var p7 = 0;
var p8 = 0;
var p9 = 0;
var p10 = 180;
var tt = 0;
function desayuno(valor){
	var arreglo=new Array(
        new Array("Yogurt","Yogurt","$ 35.00",35),
        new Array("Ensalada","Ensalada","$ 30.00",30),
        new Array("Chapata","Chapata","$ 50.00",50),
        new Array("Crossaint","Crossaint","$ 50.00",50),
        new Array("Sincronizadas","Sincronizadas","$ 50.00",50),
        new Array("Empanadas","Empanadas","$ 50.00",50),
        new Array("Carnes Frias","Carnes Frias","$ 100.00",100),
        new Array("Kit Cereal","Kit Cereal","$ 35.00",35)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("dyno").value=arreglo[i][2];
           p1 = arreglo[i][3];
           p2 = 0;
           p5 = 0;
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           document.getElementById("comida").options[0].selected=true;
           document.getElementById("cmda").value=""; 
           document.getElementById("pastel").options[0].selected=true;
           document.getElementById("pstl").value="";  
           break;  
        } 
        else
        {
        	document.getElementById("dyno").value="";
        	p1 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function comidas(valor){
	var arreglo=new Array(
        new Array("Sushi","Sushi","$ 50.00",50),
        new Array("Pizza","Pizza","$ 50.00",50),
        new Array("Salmón","Salmón","$ 70.00",70)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("cmda").value=arreglo[i][2];
           p2 = arreglo[i][3];
           p1 = 0;
           p5 = 0;
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           document.getElementById("desa").options[0].selected=true;
           document.getElementById("dyno").value=""; 
           document.getElementById("pastel").options[0].selected=true;
           document.getElementById("pstl").value="";  
           break;  
        } 
        else
        {
        	document.getElementById("cmda").value="";
        	p2 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function coffes(valor){
	var arreglo=new Array(
        new Array("Capuccino","Capuccino","$ 55.00",55),
        new Array("Makiato","Makiato","$ 50.00",50),
        new Array("Hershey","Hershey","$ 25.00",25),
        new Array("Jugo","Jugo","$ 30.00",30)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("cff").value=arreglo[i][2];
           p3 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("cff").value="";
        	p3 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function vinos(valor){
	var arreglo=new Array(
        new Array("Botella 1L.","Botella 1L.","$ 300.00",300),
        new Array("Botella Ind","Botella Ind","$ 50.00",50),
        new Array("Accesorios p/Vino","Accesorios p/Vino","$ 270.00",270),
        new Array("Copas 2","Copas 2","$ 80.00",80)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("vns").value=arreglo[i][2];
           p4 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("vns").value="";
        	p4 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function pasteles(valor){
	var arreglo=new Array(
        new Array("Chocolate 10","Chocolate 10","$ 200.00",200),
        new Array("Chocolate 2","Chocolate 2","$ 50.00",50),
        new Array("Limon 10","Limon 10","$ 200.00",200),
        new Array("Limon 2","Limon 2","$ 50.00",50),
        new Array("Fresas 10","Fresas 10","$ 200.00",200),
        new Array("Fresas 2","Fresas 2","$ 50.00",50),
        new Array("Duraznos 10","Duraznos 10","$ 200.00",200),
        new Array("Duraznos 2","Duraznos 2","$ 50.00",50),
        new Array("Moca 10","Moca 10","$ 200.00",200),
        new Array("Moca 2","Moca 2","$ 50.00",50),
        new Array("Copa Chocolate","Copa Chocolate","$ 60.00",60)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("pstl").value=arreglo[i][2];
           p5 = arreglo[i][3];
           p1 = 0;
           p2 = 0;
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           document.getElementById("comida").options[0].selected=true;
           document.getElementById("cmda").value=""; 
           document.getElementById("desa").options[0].selected=true;
           document.getElementById("dyno").value="";  
           break;  
        } 
        else
        {
        	document.getElementById("pstl").value="";
        	p5 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function flores(valor){
	var arreglo=new Array(
        new Array("Rosas 6","Rosas 6","$ 100.00",100),
        new Array("Rosa","Rosa","$ 20.00",20),
        new Array("Osito","Osito","$ 200.00",200),
        new Array("Rana","Rana","$ 200.00",200),
        new Array("Conejo","Conejo","$ 200.00",200),
        new Array("Tradicional","Tradicional","$ 180.00",180)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("flrs").value=arreglo[i][2];
           p6 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("flrs").value="";
        	p6 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function tasas(valor){
	var arreglo=new Array(
        new Array("Love","Love","$ 45.00",45),
        new Array("Natural","Natural","$ 45.00",45),
        new Array("Psyco","Psyco","$ 45.00",45),
        new Array("Mini","Mini","$ 45.00",45)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("ts").value=arreglo[i][2];
           p7 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("ts").value="";
        	p7 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function manteles(valor){
	var arreglo=new Array(
        new Array("Corazones","Corazones","$ 30.00",30),
        new Array("Psicodélico","Psicodélico","$ 30.00",30),
        new Array("Verde","Verde","$ 30.00",30),
        new Array("Azul","Azul","$ 30.00",30),
        new Array("Rosa","Rosa","$ 30.00",30),
        new Array("Amarillo","Amarillo","$ 30.00",30),
        new Array("Aniversario","Aniversario","$ 30.00",30),
        new Array("Felicidades","Felicidades","$ 30.00",30)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("mntl").value=arreglo[i][2];
           p8 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("mntl").value="";
        	p8 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

function adss(valor){
	var arreglo=new Array(
        new Array("Portarretratos","Portarretratos","$ 35.00",35),
        new Array("Copa de Dulces","Copa de Dulces","$ 30.00",35),
        new Array("Muñeco Peluche","Muñeco Peluche","$ 30.00",35),
        new Array("Florero","Florero","$ 30.00",35),
        new Array("Velas aromáticas","Velas aromáticas","$ 30.00",35),
        new Array("Termo","Termo","$ 30.00",35),
        new Array("Juego de Té","Juego de Té","$ 50.00",35)
    );
    for(i=0; i<arreglo.length; i++)
    {
        if(arreglo[i][0]==valor)
        {
           document.getElementById("ads").value=arreglo[i][2];
           p9 = arreglo[i][3];
           tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
           document.getElementById("tot").value="$ "+tt+".00";
           break;  
        } 
        else
        {
        	document.getElementById("ads").value="";
        	p9 = 0;
            tt = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
            document.getElementById("tot").value="$ "+tt+".00";
        } 
    } 
}

