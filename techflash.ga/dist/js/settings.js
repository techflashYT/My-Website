function URLToSiteStr(url) {
    if (url == "techflash.ga") {
        return "Main";
    }
    else {
        throw new Error("The site is unknown: (".concat(url, ") please report this error to the developer."));
    }
}
var Settings = (function () {
    function Settings() {
    }
    Settings.prototype.save = function (settingName, settingValue) {
        if (settingName === null || settingName === undefined) {
            throw new Error("The name field for the setting attempted to be saved was blank.  Aborting.");
        }
        if (settingValue === null || settingValue === undefined) {
            throw new Error("The name field for the setting attempted to be saved was blank.  Aborting.");
        }
        settingName = "settings".concat(URLToSiteStr(document.URL.replace("https://", "").replace(RegExp("/.*$"), "")), "_").concat(settingName);
        try {
            window.localStorage.setItem(settingName, settingValue);
        }
        catch (err) {
            throw new Error("An error has occured trying to save a setting:'".concat(settingName, "' with value: ").concat(settingValue, ".  The error is: '").concat(err, "'  Please report this to the developer."));
        }
        return 0;
    };
    Settings.prototype.load = function (settingName) {
        if (settingName === null || settingName === undefined) {
            throw new Error("The name field for the setting attempted to be loaded was blank.  Aborting.");
        }
        settingName = "settings".concat(URLToSiteStr(document.URL.replace("https://", "").replace(RegExp("/.*$"), "")), "_").concat(settingName);
        return window.localStorage.getItem(settingName);
    };
    return Settings;
}());
var settings = new Settings();
