<?php
namespace PlentyShopBoilerplate\DataProviders;

use Plenty\Plugin\Templates\Twig;

class ImportJS
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function call(Twig $twig)
    {
        return $twig->render('PlentyShopBoilerplate::DataProvider.ImportJS', []);
    }
}
