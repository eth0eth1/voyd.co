<html>
<head>
<script type="text/javascript" language="javascript">
  function myIP() {
    if (window.XMLHttpRequest) 
   xmlhttp = new XMLHttpRequest();
    else 
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.open("GET","http://jsonip.appspot.com/",false);
    xmlhttp.send();

    hostipInfo = xmlhttp.responseText;
    obj = JSON.parse(hostipInfo);
    document.getElementById("IP").value=obj.ip;
    document.getElementById("ADDRESS").value=obj.address;
}
</script>
</head>
<body onload="myIP()">
IP :<input type="text" id="IP" name="IP" />
ADDRESS :<input type="text" id="ADDRESS" name="ADDRESS" />

</body>
</html>