function URLToSiteStr(url: string): string {
	if (url == "techflash.ga") {
		return "Main"
	}
	// TODO: Other sites here
	else {
		throw new Error(`The site is unknown: (${url}) please report this error to the developer.`)
	}
}
class Settings {
	// TODO: Make this go into a specific object:
	// window.localStorage.settings.(main for techflash.ga, or something else for any subdomains).(settingname)
	// For now, just use settings(site)(settingName)
	save(settingName: string, settingValue: any) {
		if (settingName === null || settingName === undefined) {
			throw new Error("The name field for the setting attempted to be saved was blank.  Aborting.")
		}
		if (settingValue === null || settingValue === undefined) {
			throw new Error("The name field for the setting attempted to be saved was blank.  Aborting.")
		}
		settingName = `settings${URLToSiteStr(document.URL.replace("https://", "").replace(RegExp("/.*$"), ""))}_${settingName}`
		try {
			window.localStorage.setItem(settingName, settingValue);
		}
		catch (err) {
			throw new Error(`An error has occured trying to save a setting:\'${settingName}\' with value: ${settingValue}.  The error is: \'${err}\'  Please report this to the developer.`)
		}
		return 0;
	}
	
	load(settingName: string) {
		if (settingName === null || settingName === undefined) {
			throw new Error("The name field for the setting attempted to be loaded was blank.  Aborting.")
		}
		settingName = `settings${URLToSiteStr(document.URL.replace("https://", "").replace(RegExp("/.*$"), ""))}_${settingName}`
		return window.localStorage.getItem(settingName);
	}
}
const settings = new Settings();