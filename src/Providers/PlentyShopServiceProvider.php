<?php

namespace PlentyShop\Providers;

use Plenty\Modules\ShopBuilder\Contracts\ContentWidgetRepositoryContract;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;

/**
 * Class PlentyShopServiceProvider
 * @package PlentyShop\Providers
 */
class PlentyShopServiceProvider extends TemplateServiceProvider
{
    /**
     * Bootstrap any application services.
     * @param Twig $twig
     * @param Dispatcher $dispatcher
     */
    public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        // Override a twig template
        // $this->overrideTemplate("Ceres::PageDesign.PageDesign", "PlentyShop::PageDesign.PageDesign");

        // Add a script template to the markup
        /*$dispatcher->listen("IO.Resources.Import", function(ResourceContainer $container)
        {
            $container->addScriptTemplate("PlentyShop::PageDesign.Components.MobileNavigation");
        }, 0);*/

        // Register our own widgets
        /** @var ContentWidgetRepositoryContract $widgetRepository */
        $widgetRepository = pluginApp(ContentWidgetRepositoryContract::class);
        // $widgetRepository->registerWidget(Test::class);
    }
}
