<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msMemento $msMemento */
$msMemento = $modx->getService('msMemento', 'msMemento', MODX_CORE_PATH . 'components/msmemento/model/');
$modx->lexicon->load('msmemento:default');

// handle request
$corePath = $modx->getOption('msmemento_core_path', null, $modx->getOption('core_path') . 'components/msmemento/');
$path = $modx->getOption('processorsPath', $msMemento->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);