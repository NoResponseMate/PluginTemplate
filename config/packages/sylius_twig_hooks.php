<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->extension('sylius_twig_hooks', [
        'hooks' => [
            'sylius_admin.base#stylesheets' => [
                'styles' => [
                    'template' => '@:plugin_class/Admin/_styles.html.twig',
                    'priority' => 5,
                ],
            ],
            'sylius_admin.base#javascripts' => [
                'scripts' => [
                    'template' => '@:plugin_class/Admin/_scripts.html.twig',
                    'priority' => 5,
                ],
            ],
            'sylius_shop.base#stylesheets' => [
                'styles' => [
                    'template' => '@:plugin_class/Shop/_styles.html.twig',
                    'priority' => 5,
                ],
            ],
            'sylius_shop.base#javascripts' => [
                'scripts' => [
                    'template' => '@:plugin_class/Shop/_scripts.html.twig',
                    'priority' => 5,
                ],
            ],
        ]
    ]);
};
