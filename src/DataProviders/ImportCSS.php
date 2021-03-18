<?php
namespace PlentyShop\DataProviders;

use Plenty\Plugin\Templates\Twig;

class ImportCSS
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function call(Twig $twig)
    {
        return $twig->render('PlentyShop::DataProvider.ImportCSS', []);
    }
}
