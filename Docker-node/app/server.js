const express = require('express');
const app = express();

app.get('/', (req, res) => {
	res.json({
		"messaje" : "This is a 200 OK response, hello world"
	})
})

app.listen(8080, () => {
	console.log("server running");
})
