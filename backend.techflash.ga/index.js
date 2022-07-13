const fs = require('fs');
const http = require('http');
const https = require('https');
const express = require('express');
// const cors = require('cors');
const privKey = fs.readFileSync('/etc/httpd/ssl/priv.pem', 'utf8');
const pubKey = fs.readFileSync('/etc/httpd/ssl/pub.pem', 'utf8');

const keychain = {key: privKey, cert: pubKey,};

const app = express();
// app.use(cors());
const publicBackendPortHTTP = 8080;
const publicBackendPortHTTPS = 8443;
const backBackendPort = 3535;
const logLevels = {
	debug: 0,
	verbose: 1,
	info: 2,
	warn: 3,
	error: 4,
	fatal: 5
}
const currentDisplayLogLevel = logLevels.warn;
if (currentDisplayLogLevel < 0 || currentDisplayLogLevel > 5) {
	throw new Error("The logLevel is not valid.  Please chose a positive number from 0 to 4.");
}
else if (currentDisplayLogLevel == 5) {
	throw new Error("You cannot set the logLevel to only display fatal errors.  These will automatically be shown no matter what.");
}
const version = {
	major: 0,
	minor: 0,
	patch: 1
};
fs.writeFileSync("log.txt", '');
var logFileStream = fs.createWriteStream("log.txt", {flags:'a'});
function log(string, logLevel) {
	function __actualLog(string) {
		logFileStream.write(string);
	}
	// If the logLevel is error or warn then we log it no matter what the logLevel is currently set to.
	if (logLevel >= logLevels.error) {
		__actualLog(string);
	}
}
const httpServer = http.createServer(app);
const httpsServer = https.createServer(keychain, app);


app.get('/', (request, response) => {
	response.append('Access-Control-Allow-Origin', `*`);
	let orig=request.get('origin');
	if (orig == null && orig == undefined) {
		orig = "http://noOriginProvidedInRequest";
	}
	let m=orig.replace(RegExp("/.*$"), "").replace(":", "");
	orig=orig.replace(`${m}://`, '');
	let res = `Techflash.ga public backend version ${version.major}.${version.minor}.${version.patch}`
	/*          Local testing            Local Testing                    *.techflash.ga               techflash.ga */
	if (orig != "192.168.0.1" && orig != "192.168.0.3" && !orig.contains(".techflash.ga") && orig != "techflash.ga") {
		response.status(403);
		// Likely a bot, so send a standard httpd forbidden response
		let res = "\
<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n\
<html><head>\n\
<title>403 Forbidden</title>\n\
</head><body>\n\
<h1>Forbidden</h1>\n\
<p>You don't have permission to access this resource.</p>\n\
</body></html>";
}

	log(`====NEW REQUEST====\r\nFrom: ${orig}\r\nTo: /\r\nResponse: ${response}`);
	response.send(res);
});

httpServer.listen(publicBackendPortHTTP, () => {
	console.log(`Techflash.ga public backend (HTTP) listening on port ${publicBackendPortHTTP}`);
});

httpsServer.listen(publicBackendPortHTTPS, () => {
	console.log(`Techflash.ga public backend (HTTPS) listening on port ${publicBackendPortHTTPS}`);
});
