# **Web composants CASINO OUAIIIIS**

?> Je test !!! !!!

## **Pour les développeurs**

# Project setup


```
npm install !
```


Compiles and hot-reloads for development :


```
npm run serve
```


Compiles and minifies for production


```
npm run build
```


Run your tests :


```
npm run test
```


Lints and fixes files


```
npm run lint
```


Customize configuration

See [Configuration Reference]([https://cli.vuejs.org/config/](https://cli.vuejs.org/config/)).


# Intégration du SDK


```
 <script>

// Create casinoSdkOptions if not created yet
var casinoSdkOptions = window.casinoSdkOptions || {};

// Assign URL values
casinoSdkOptions.apiUrl          = "https://www-dev.geantcasino.fr/api/v2";
casinoSdkOptions.sdkUrl          = "../dist/sdk.min.js";
casinoSdkOptions.portalUrl       = "https://www-dev.geantcasino.fr/espace-client/";
casinoSdkOptions.createCardUrl   = "https://www-dev.geantcasino.fr/espace-client/ma-carte/";
casinoSdkOptions.activateCardUrl = "https://www-dev.geantcasino.fr/cartes-casino/jactive-ma-carte/";
casinoSdkOptions.chooseStoreUrl  = "https://test.magasins.geantcasino.fr";

// Assign custom styles
casinoSdkOptions.sticky = false;
casinoSdkOptions.stickyOffset = '95';
casinoSdkOptions.wrapperHeight = '95';
casinoSdkOptions.stickyWrapperHeight = '66';



(function(){
var a = document.createElement('script'); a.async = true; a.type = 'text/javascript'; a.src = casinoSdkOptions.sdkUrl;
var b = document.getElementsByTagName('script')[0]; b.parentNode.insertBefore(a, b);
})();
</script>
```



# Intégration des web composants


```
<casino-user-icon></casino-user-icon>
<casino-store-icon></casino-store-icon>
<casino-card-icon></casino-card-icon>
```



# Options des web composants


```
var casinoSdkOptions = window.casinoSdkOptions || {};
casinoSdkOptions.sticky = false; 
casinoSdkOptions.stickyOffset = '95';
casinoSdkOptions.wrapperHeight = '95';
casinoSdkOptions.stickyWrapperHeight = '66';
```



```
<casino-card-icon background-color="#134f33"></casino-card-icon>
```



## <span style="text-decoration:underline;">Global variables : assigned on window object with default value</span>

**sticky **:

false,_ // BOOL - Are you going to move the components inside a sticky header on scroll ? _

**stickyOffset** :

92,_ // INT - In pixel, offset after which components should shrink_

**wrapperHeight **:

 92, _// INT - In pixel, height of the icon's components wrapper_

**stickyWrapperHeight **:

 66, _// INT - In pixel, height of the icon's components wrapper_


## <span style="text-decoration:underline;">Component Props : assigned on component</span>

**<casino-card-icon>**

**backgroundColor**: #666, _// HEX - Background color of component_

**<casino-store-icon>**

**backgroundColor**: #666, _// HEX - Background color of sidebars buttons_
