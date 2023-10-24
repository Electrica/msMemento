<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/msMemento/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/msmemento')) {
            $cache->deleteTree(
                $dev . 'assets/components/msmemento/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/msmemento/', $dev . 'assets/components/msmemento');
        }
        if (!is_link($dev . 'core/components/msmemento')) {
            $cache->deleteTree(
                $dev . 'core/components/msmemento/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/msmemento/', $dev . 'core/components/msmemento');
        }
    }
}

return true;