<?php

namespace PlentyShopBoilerplate\Providers;

use Plenty\Modules\ShopBuilder\Contracts\ContentWidgetRepositoryContract;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use PlentyShop\Widgets\HelloWorldWidget;
use PlentyShop\Widgets\WhoToGreetWidget;

/*
 * The service provider is the plugins entry point.
 * We can use the boot and register functions to bootstrap our plugin.
 * Please refer to https://laravel.com/docs/8.x/providers for more information.
 */
class PlentyShopBoilerplateServiceProvider extends TemplateServiceProvider
{
    /*
     * Register our widgets.
     */
    public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        // Register our own widgets
        /** @var ContentWidgetRepositoryContract $widgetRepository */
        $widgetRepository = pluginApp(ContentWidgetRepositoryContract::class);
        $widgetRepository->registerWidget(HelloWorldWidget::class);
        $widgetRepository->registerWidget(WhoToGreetWidget::class);
    }
}
