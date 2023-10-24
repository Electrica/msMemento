msMemento.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'msmemento-panel-home',
            renderTo: 'msmemento-panel-home-div'
        }]
    });
    msMemento.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msMemento.page.Home, MODx.Component);
Ext.reg('msmemento-page-home', msMemento.page.Home);