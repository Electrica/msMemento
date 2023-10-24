Ext.onReady(function () {
    msMemento.config.connector_url = OfficeConfig.actionUrl;

    var grid = new msMemento.panel.Home();
    grid.render('office-msmemento-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});