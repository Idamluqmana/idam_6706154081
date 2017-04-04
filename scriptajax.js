var xmlHttp;
function showProduk(str){
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp == null){
		alert("Tidak support request");
		return;
	}
	var url = "get_produk.php";
	url = url+"?jenis="+str;
	xmlHttp.onreadystatechange = stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function stateChanged(){
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete"){
		document.getElementById("divProduk").innerHTML = xmlHttp.responseText;
	}
}
/* END OF OPTIONS*/



function GetXmlHttpObject(){
	var xmlHttp = null;
	try{
		xmlHttp = new XMLHttpRequest();
	}catch(e){
		try{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
