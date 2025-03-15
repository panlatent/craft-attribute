<?php

namespace panlatent\craft\attribute;

use Craft;
use panlatent\craft\attribute\reflector\Reflector;

trait HasDisplayName
{
    public static function displayName(): string
    {
        $reflector = new Reflector(static::class);

        $displayName = $reflector->getAttribute(DisplayName::class);
        if (!$displayName) {
            return parent::displayName();
        }

        $translate = $reflector->getAttribute(Translate::class);
        if (!$translate) {
            return $displayName->name;
        }

        return Craft::t($translate->category, $displayName->name);
    }
}