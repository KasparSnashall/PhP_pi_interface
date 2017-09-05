<html>
<head>
<script>
function TestMyPython(str) {
    if (str == "") {
        document.getElementById("Dropdown1").innerHTML = "<b> Select a test </b>";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Dropdown1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","TestMyPython.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</head>


<body>
<h1> 292 Design Raspberry Pi interface </h1>
<h2>Alpha version 0.2.5</h2>

<br>

<form>
<select name="DropDownTest" onchange="TestMyPython(this.value)">
  <option value="">Run a test:</option>
  <option value="Test1">Test1</option>
  <option value="Test2">Test2</option>
  </select>
</form>

<br>

<div id="Dropdown1"><b>Drop down test result will be displayed here</b></div> 

<!-- The above line is the result for a test result -->

</body>
</html>




