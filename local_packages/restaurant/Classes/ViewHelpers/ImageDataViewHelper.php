<?php


namespace Surfcamp\Restaurant\ViewHelpers;

use TYPO3\CMS\Core\Imaging\ImageManipulation\CropVariantCollection;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Service\ImageService;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class ImageDataViewHelper extends AbstractViewHelper
{
    /**
     * @var \TYPO3\CMS\Extbase\Service\ImageService
     */
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('image', 'object', 'Data of current record', true);
        $this->registerArgument('cropVariant', 'string', 'Data of current record');
        $this->registerArgument('cropString', 'string', 'Data of current record');
        $this->registerArgument('width', 'bool', 'Data of current record', false, true);
    }

    /**
     * @return bool
     */
    public function render()
    {
        $image = $this->arguments['image'];

        if ($image instanceof FileReference) {
            $image = $image->getOriginalResource();
        }

        $cropString = (string)$this->arguments['cropString'] ?: $image->getReferenceProperty('crop');

        $cropVariantCollection = CropVariantCollection::create($cropString);
        $cropVariant = $this->arguments['cropVariant'] ?: 'default';
        $cropArea = $cropVariantCollection->getCropArea($cropVariant);
        $processingInstructions = [
            'crop' => $cropArea->isEmpty() ? null : $cropArea->makeAbsoluteBasedOnFile($image),
        ];

        $processedImage = $this->imageService->applyProcessingInstructions($image, $processingInstructions);

        if ($this->arguments['width']) {
            return $processedImage->getProperty('width');
        }

        return $processedImage->getProperty('height');
    }
}
