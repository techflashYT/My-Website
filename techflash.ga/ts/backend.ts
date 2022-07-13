class Backend {
	GET(url: string) {
		const a=new XMLHttpRequest();
		const method=document.URL.replace(RegExp("/.*$"), "").replace(":", "");
		a.open('GET',`${method}://${document.URL.replace(`${method}://`,"").replace(RegExp("/.*$"),"")}:8${method=="https"?"443":"080"}/${url}`);
		a.send();
		return a.responseText;
	}
}
const backend = new Backend();