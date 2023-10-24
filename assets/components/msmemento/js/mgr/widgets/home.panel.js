msMemento.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'msmemento-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('msmemento') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('msmemento_items'),
                layout: 'anchor',
                items: [{
                    html: _('msmemento_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msmemento-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msMemento.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msMemento.panel.Home, MODx.Panel);
Ext.reg('msmemento-panel-home', msMemento.panel.Home);
