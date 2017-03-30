function event(category, action, label, value) {
	/*
	$.post("https://www.google-analytics.com/collect?v=1&tid=UA-96477511-1&cid=110037044258747808257&t=" + event + "&ec=" + category + "&ea=" + action + "&el=" + label + "&ev=" + value, function(data, status) {
		console.log(data);
		console.log(status);
	});*/
	var url = "https://www.google-analytics.com/collect?v=1&tid=UA-96477511-1&cid=110037044258747808257&t=event&ec=" + category + "&ea=" + action + "&el=" + label + "&ev=" + value;
	var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", url, false ); // false for synchronous request
    xmlHttp.send( null );
    console.log(xmlHttp.responseText);
}