function U(u){if("techflash.ga"==u)return"Main";throw new Error("The site is unknown: (".concat(u,") please report this error to the developer."))}var S=function(){function S(){}return S.prototype.save=function(n,v){if(null==n)throw new Error("The name field for the setting attempted to be saved was blank.  Aborting.");if(null==v)throw new Error("The value field for the setting attempted to be saved was blank.  Aborting.");n="settings".concat(U(document.URL.replace("https://","").replace(RegExp("/.*$"),"")),"_").concat(n);try{window.localStorage.setItem(n,v)}catch(e){throw new Error("An error has occured trying to save a setting:'".concat(n,"' with value: ").concat(v,".  The error is: '").concat(e,"'  Please report this to the developer."))}return 0},S.prototype.load=function(n){if(null==n)throw new Error("The name field for the setting attempted to be loaded was blank.  Aborting.");return n="settings".concat(U(document.URL.replace("https://","").replace(RegExp("/.*$"),"")),"_").concat(n),window.localStorage.getItem(n)},S}(),settings=new S;