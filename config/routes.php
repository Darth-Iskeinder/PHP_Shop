<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', //actionView ProductController
    
    'catalog' => 'catalog/index', //actionIndex CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory CatalogController
    
    '' => 'site/index', //actionIndex SiteController
    


);

