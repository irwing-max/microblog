function show(str){

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readystate == 4 && this.status == 200){
			document.getElementById("show").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "/microblog/requestData.php?post="+str, true);
	xhttp.send();
}