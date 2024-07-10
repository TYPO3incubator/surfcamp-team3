<?php

namespace Surfcamp\Restaurant\Utility;

class FilterCtype
{
    public function itemsProcFunc(&$params): void
    {
        $params['items'] = $params['config']['allowed_items'];
    }
}
