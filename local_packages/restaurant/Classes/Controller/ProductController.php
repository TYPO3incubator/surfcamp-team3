<?php

//declare(strict_types=1);

namespace Surfcamp\Restaurant\Controller;

use Psr\Http\Message\ResponseInterface;
use Surfcamp\Restaurant\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductController extends ActionController
{
//    private ProductRepository $productRepository;
    public function __construct(
        private readonly ProductRepository $productRepository,
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->view->assign(
            'products',
            $this->productRepository->findAll()
        );

        return $this->htmlResponse();
    }
}
