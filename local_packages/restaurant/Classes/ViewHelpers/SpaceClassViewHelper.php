<?php
namespace Surfcamp\Restaurant\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class SpaceClassViewHelper extends AbstractViewHelper
{
    /**
     * Initialize arguments.
     */
    public function initializeArguments()
    {
        $this->registerArgument('spaceBefore', 'string', 'Class modifier for space before.', false, 'defaultspace');
        $this->registerArgument('spaceAfter', 'string', 'Class modifier for space after.', false, 'defaultspace');
    }

    /**
     * Render method returns the string of margin classes.
     *
     * @return string
     */
    public function render(): string
    {
        $spaceBefore = $this->arguments['spaceBefore'];
        $spaceAfter = $this->arguments['spaceAfter'];

        $spaceBeforeClass = $this->getMarginClass('mt-', $spaceBefore);
        $spaceAfterClass = $this->getMarginClass('mb-', $spaceAfter);
        return trim($spaceBeforeClass . ' ' . $spaceAfterClass);
    }

    /**
     * Helper function to get the correct margin class.
     *
     * @param string $prefix
     * @param string $type
     * @return string
     */
    private function getMarginClass(string $prefix, string $type): string
    {
        switch ($type) {
            case 'nospace':
                return $prefix . '0';
            case 'defaultspace':
            default:
                return $prefix . '5';
        }
    }
}