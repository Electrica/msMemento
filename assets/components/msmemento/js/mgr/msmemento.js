var msMemento = function (config) {
    config = config || {};
    msMemento.superclass.constructor.call(this, config);
};
Ext.extend(msMemento, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('msmemento', msMemento);

msMemento = new msMemento();