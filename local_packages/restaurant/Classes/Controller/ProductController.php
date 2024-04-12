<?php

//declare(strict_types=1);

namespace Surfcamp\Restaurant\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductController extends ActionController
{
    public function __construct() {

    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign(
            'test',
            'test',
        );
        return $this->htmlResponse();
    }
}
