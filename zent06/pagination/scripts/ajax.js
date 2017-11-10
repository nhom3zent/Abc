function create_obj(){
    var browse = navigator.appName;    
    if(browse == "Microsoft Internrt Explorer"){ // Nếu là IE
        obj = new ActiveXObject("XMLHTTP");            
    }else{ // Các trình duyệt khác
        obj = new XMLHttpRequest();
    }            
    return obj; // trả về kết quả lấy được
}

var http = create_obj();

function singers(singerid){
	if(singerid == 0){
		document.getElementById("singers").innerHTML = "Please select a singer";
	}else{
	  	document.getElementById("albums").innerHTML = "";
	  	http.open("GET","process.php?type=singer&id="+singerid,true);
	  	http.onreadystatechange = processsinger;
	  	http.send(null);
	}
}

function processsinger(){
	if(http.readyState == 4 && http.status == 200){
		result = http.responseText;
		document.getElementById("singers").innerHTML = result;
	}
}

function albums(id){
	http.open("GET","process.php?type=album&id="+id,true);
	http.onreadystatechange = responsealbum;
	http.send(null);
}

function responsealbum(){
	if(http.readyState == 4 && http.status == 200){
		result = http.responseText;
		document.getElementById("albums").innerHTML = result;
	}
}
function playsong(id){
	http.open("GET","process.php?type=song&id="+id,true);
	http.onreadystatechange = responsesong;
	http.send(null);
}

function responsesong(){
	if(http.readyState == 4 && http.status == 200){
		result = http.responseText;
		document.getElementById("playsong").innerHTML = result;
	}
}