function showSorting(str) {
    if (str == "") {
        document.getElementById("row").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
        } else {
           
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("row").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","menprice1.php?q="+str,true);
        xmlhttp.send();
    }
}



