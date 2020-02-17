<html>
<head>

<script type="text/javascript">

function insert()
{
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();

    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status == 200){
            document.getElementById("output").innerHTML=xmlhttp.responseText;
        }
    }

    parameter = 'text='+document.getElementById('text').value;

    xmlhttp.open("POST","update.inc.php",true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send(parameter);


   //text_value = document.getElementById('text').value;
   //alert(text_value);

}
</script>
</head>
<body>

Insert: <input type ="text" id="text"><input type="button" value="submit" onclick="insert();">
<div id="output"></div>

</body>
</html>