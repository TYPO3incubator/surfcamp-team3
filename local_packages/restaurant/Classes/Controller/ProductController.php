<?php

//declare(strict_types=1);

namespace Surfcamp\Restaurant\Controller;

use Psr\Http\Message\ResponseInterface;
use Surfcamp\Restaurant\Domain\Repository\ProductRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductController extends ActionController
{
//    private ProductRepository $productRepository;
    public function __construct(
        private readonly ProductRepository $productRepository,
        private readonly ConnectionPool $connectionPool
    ) {}

    public function listAction(): ResponseInterface
    {
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('tt_content');
        $result = $queryBuilder
            ->select('*')
            ->from('sys_category')
            ->executeQuery();

        $categories = [];
        while ($row = $result->fetchAssociative()) {
            $categories[] = $row;
        }

        $this->view->assignMultiple(
          [
              'products' => $this->productRepository->findAll(),
              'categories' => $categories
          ]
        );

        return $this->htmlResponse();
    }
}
