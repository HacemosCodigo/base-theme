// If Wordpress already defined jQuery
if (typeof jQuery === 'function') {
  define('jquery', function () { return jQuery; });
}
requirejs.config({
    baseUrl: themepath+'/js/scripts',
    paths: {
        'jquery': 'vendor/jquery/dist/jquery',
        'jquery-ui': 'vendor/jquery-ui/ui/jquery-ui',
        'imagesloaded': 'vendor/imagesloaded/imagesloaded',
        'eventie/eventie': 'vendor/eventie/eventie',
        'index': 'index'
    },
    shim: {
        
    }
    
});
