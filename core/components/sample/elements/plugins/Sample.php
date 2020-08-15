<?php
$corePath = $modx->getOption('sample.core_path', null, $modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/sample/');
$component = $modx->getService(
    'sample',
    'Sample',
    $corePath . 'model/sample/',
    array(
        'core_path' => $corePath
    )
);

if (!($component instanceof Sample)) return '';

$className = "\\Sample\\Events\\{$modx->event->name}";
if (class_exists($className)) {
    /** @var \Sample\Events\Event $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;