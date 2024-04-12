<?php

declare(strict_types=1);

namespace Surfcamp\Restaurant\EventListener;

use TYPO3\CMS\Backend\View\Event\IsContentUsedOnPageLayoutEvent;

class ContentUsedOnPageListener
{
    public function __invoke(IsContentUsedOnPageLayoutEvent $event): void
    {
        // Get the current record from the event.
        $record = $event->getRecord();

        // This code will be your domain logic to indicate if content
        // should be hidden in the page module.
        if ((int)$record['colPos'] === 999) {
            // Flag the current element as not used. Set it to true, if you
            // want to flag it as used and hide it from the page module.
            $event->setUsed(true);
        }
    }
}
