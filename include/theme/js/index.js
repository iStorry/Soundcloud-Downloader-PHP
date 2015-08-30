console.log("true");
var a = document.forms[0];
document.getElementById("form-button").addEventListener("click", function(evt) {
setTimeout(function() {
	var q = a.elements["form-url"].value;
	var load = new XMLHttpRequest();
  var path = document.location.pathname;
        var c = "./.." + path + "include/class.autoload.php";
        var v = "q=" + q;
		 load.open("POST", c, true);
        load.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    	load.onreadystatechange = function() {
              if (load.readyState == 4 && load.status == 200) {
                document.getElementById('network').innerHTML = load.responseText;
				console.log(load.responseText);
		}
        }
       load.send(v);
    }, 1000);
});
