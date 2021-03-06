<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['cache.app'])) {
        yield 'cache.app' => ($this->services['cache.app'] ?? null);
    }
    if (isset($this->services['cache.system'])) {
        yield 'cache.system' => ($this->services['cache.system'] ?? null);
    }
    if (false) {
        yield 'cache.validator' => null;
    }
    if (false) {
        yield 'cache.serializer' => null;
    }
    if (isset($this->privates['cache.annotations'])) {
        yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
    }
    if (false) {
        yield 'cache.property_info' => null;
    }
    if (false) {
        yield 'cache.messenger.restart_workers_signal' => null;
    }
    if (isset($this->privates['monolog.handler.main'])) {
        yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
    }
    if (isset($this->privates['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
    }
    if (isset($this->privates['webpack_encore.tag_renderer'])) {
        yield 'webpack_encore.tag_renderer' => ($this->privates['webpack_encore.tag_renderer'] ?? null);
    }
    if (isset($this->privates['cache.webpack_encore'])) {
        yield 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? null);
    }
    if (isset($this->privates['webpack_encore.entrypoint_lookup[_default]'])) {
        yield 'webpack_encore.entrypoint_lookup[_default]' => ($this->privates['webpack_encore.entrypoint_lookup[_default]'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($this->privates['cache.annotations'])) + (int) (false) + (int) (false) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['webpack_encore.tag_renderer'])) + (int) (isset($this->privates['cache.webpack_encore'])) + (int) (isset($this->privates['webpack_encore.entrypoint_lookup[_default]']));
}), ['cache.app' => 'reset', 'cache.system' => 'reset', 'cache.validator' => 'reset', 'cache.serializer' => 'reset', 'cache.annotations' => 'reset', 'cache.property_info' => 'reset', 'cache.messenger.restart_workers_signal' => 'reset', 'monolog.handler.main' => 'reset', 'monolog.handler.console' => 'reset', 'webpack_encore.tag_renderer' => 'reset', 'cache.webpack_encore' => 'reset', 'webpack_encore.entrypoint_lookup[_default]' => 'reset']);
