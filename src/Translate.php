<?php

namespace panlatent\craft\attribute;

#[\Attribute(\Attribute::TARGET_ALL)]
readonly class Translate
{
    public function __construct(public string $category = 'site')
    {
    }
}