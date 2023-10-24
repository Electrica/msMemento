<?php

/**
 * The home manager controller for msMemento.
 *
 */
class msMementoHomeManagerController extends modExtraManagerController
{
    /** @var msMemento $msMemento */
    public $msMemento;


    /**
     *
     */
    public function initialize()
    {
        $this->msMemento = $this->modx->getService('msMemento', 'msMemento', MODX_CORE_PATH . 'components/msmemento/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['msmemento:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('msmemento');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->msMemento->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/msmemento.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->msMemento->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        msMemento.config = ' . json_encode($this->msMemento->config) . ';
        msMemento.config.connector_url = "' . $this->msMemento->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "msmemento-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="msmemento-panel-home-div"></div>';

        return '';
    }
}