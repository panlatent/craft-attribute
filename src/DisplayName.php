<?php

namespace panlatent\craft\attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
readonly class DisplayName
{
    public function __construct(public string $name) {}
}