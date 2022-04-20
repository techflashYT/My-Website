class settings {
    save(settingName: String, settingValue: any) {
        try {
            window.localStorage.setItem(settingName, settingValue);
        }
        catch (err) {
            // eval("alert('An error has occurred trying to save a setting (\' + settingName + \') with value \" + settingValue + '!  The error is ' + err + '\''");
            return 1;
        }
        return 0;
    }

    load(settingName: String) {
        return window.localStorage.getItem(settingName);
    }
}