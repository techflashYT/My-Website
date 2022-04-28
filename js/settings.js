var settings = (function () {
    function settings() {
    }
    settings.prototype.save = function (settingName, settingValue) {
        try {
            window.localStorage.setItem(settingName, settingValue);
        }
        catch (err) {
            return 1;
        }
        return 0;
    };
    settings.prototype.load = function (settingName) {
        return window.localStorage.getItem(settingName);
    };
    return settings;
}());
