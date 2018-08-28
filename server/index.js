const express = require('express');
const app = express();

app.get ("/homeAutomation2", function(req, res) {
	res.send(" WELCOME TO homeAutomation2");
});


app.listen(3000, function(){
	console.log("Server for Home Appliances listening on port 3000");
});

