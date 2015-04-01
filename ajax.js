 function objetoAjax(){
    var xmlhttp=false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
        return xmlhttp;
}

var conexion2; 


function verifica_table(categoria){


  var button  = categoria;
  var content =  document.getElementById("content");


  var url = "view_filter.php?button="+button;
  
  conexion2=objetoAjax();
  conexion2.open("GET", url, false);
  conexion2.send(null);  
  conexion2.onreadystatechange = muestratable(content);
   
}

function show_hotel(categoria){


  var button  = categoria;
  var content =  document.getElementById("content");


  var url = "peticion_tuorism.php?button="+button;
  
  conexion2=objetoAjax();
  conexion2.open("GET", url, false);
  conexion2.send(null);  
  conexion2.onreadystatechange = muestratable(content);
   
}
function show_turis(categoria){


  var button  = categoria;
  var content =  document.getElementById("content");


  var url = "peticion_tuorism.php?button="+button;
  
  conexion2=objetoAjax();
  conexion2.open("GET", url, false);
  conexion2.send(null);  
  conexion2.onreadystatechange = muestratable(content);
   
}
function show_library(categoria){


  var button  = categoria;
  var content =  document.getElementById("content");


  var url = "peticion_library.php?button="+button;
  
  conexion2=objetoAjax();
  conexion2.open("GET", url, false);
  conexion2.send(null);  
  conexion2.onreadystatechange = muestratable(content);
   
}


function registro(){


  var button  =  document.getElementById("button").value;
  var content =  document.getElementById("content");


  var url = "validar_registro.php?button="+button;
  
  conexion2=objetoAjax();
  conexion2.open("GET", url, false);
  conexion2.send(null);  
  conexion2.onreadystatechange = muestratable(content);
   
}

function muestratable(content)
{

  if(conexion2.readyState == 4)
  {
    content.innerHTML = conexion2.responseText;

  } 
  else 
  {
    content.innerHTML = 'Cargando...';
  }
}

