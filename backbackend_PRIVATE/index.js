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

const version = {
	major: 0,
	minor: 0,
	patch: 1
};

const httpServer = http.createServer(app);
const httpsServer = https.createServer(keychain, app);


app.get('/', (request, response) => {
	response.append('Access-Control-Allow-Origin', `*`);
	let orig=request.get('origin');
	if (orig == null && orig == undefined) {
		orig = "http://noOriginProvidedInRequest";
	}
	let m=orig.replace(RegExp("/.*$"), "").replace(":", "");
	console.log(m);
	orig=orig.replace(`${m}://`, '');
	console.log(orig);
	/*          Local testing            Local Testing                    *.techflash.ga               techflash.ga */
	if (orig != "192.168.0.1" && orig != "192.168.0.3" && !orig.contains(".techflash.ga") && orig != "techflash.ga") {
		response.status(403).send("\
<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n\
<html><head>\n\
<title>403 Forbidden</title>\n\
</head><body>\n\
<h1>Forbidden</h1>\n\
<p>You don't have permission to access this resource.</p>\n\
</body></html>");
		return;
	}

	response.send(`Techflash.ga admin-only backend.  Version ${version.major}.${version.minor}.${version.patch}  If you are not me, report this immediatly via GitHub or personally email me at officialTechflashYT@gmail.com`);
});

httpServer.listen(publicBackendPortHTTP, () => {
	console.log(`Techflash.ga admin only backend (HTTP) listening on port ${publicBackendPortHTTP}`);
});

httpsServer.listen(publicBackendPortHTTPS, () => {
	console.log(`Techflash.ga admin only backend (HTTPS) listening on port ${publicBackendPortHTTPS}`);
});
