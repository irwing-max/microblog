function show(str){

	var xhttp = new XMLHttpRequest();

	xhttp.open("GET", "/micro/requestData.php?post="+str, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if (this.readystate == 4 && this.status == 200){
			document.getElementById("show").innerHTML = this.responseText;
		}
	};

}
