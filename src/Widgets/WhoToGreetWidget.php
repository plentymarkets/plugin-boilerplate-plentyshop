<?php

namespace PlentyShopBoilerplate\Widgets;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\Settings\AppearanceSettingFactory;
use Ceres\Widgets\Helper\Factories\Settings\CustomClassSettingFactory;
use Ceres\Widgets\Helper\Factories\Settings\SpacingSettingFactory;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\WidgetTypes;
use Plenty\Modules\ShopBuilder\Factories\Settings\TextSettingFactory;
use Plenty\Modules\ShopBuilder\Factories\WidgetSettingsFactory;

/*
 * A widget class is used to define metadata and settings for a widget.
 * This class can be registered in the ServiceProvider via the ContentWidgetRepositoryContract
 * to enable use in the shop builder.
 */
class WhoToGreetWidget extends BaseWidget
{
    /*
     * The template variable links to the twig template.
     */
    protected $template = "PlentyShop::Widgets.WhoToGreetWidget";

    /*
     * Use this function to define data about the widget itself.
     */
    public function getData()
    {
        return WidgetDataFactory::make("PlentyShop::HelloWorldWidget")
            ->withLabel("Widget.HelloWorldLabel")
            ->withPreviewImageUrl("/images/hello-world.svg")
            ->withType(WidgetTypes::DEFAULT)
            ->withCategory(WidgetCategories::TEXT)
            ->withPosition(200)
            ->toArray();
    }

    /*
     * Use this function to set settings for a widget.
     * Take a look at following url to learn more about different setting factories:
     * https://developers.plentymarkets.com/en-gb/interface/stable7/ShopBuilder.html#shopbuilder_factories
     * This function is optional.
     */
    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);
        $settings->createSetting('customClass', CustomClassSettingFactory::class);
        $settings->createSetting('appearance', AppearanceSettingFactory::class, [
            'optional' => false
        ]);
        $settings->createSetting('spacing', SpacingSettingFactory::class, [
            'usePadding' => true,
            'useMargin' => true
        ]);

        return $settings->toArray();
    }
}
