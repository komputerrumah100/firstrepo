const express = require('express');
const bodyParser = require('body-parser');
const app = express();

// parse application / json
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

// panggil routes
let routes = require('./router');
routes(app);

const port = 3000
app.listen(port, () => {
    console.log(`Server started on port ` + port);
});