<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveContract\Resource;

interface MetaAttributeInterface
{
    public function getName(): string;

    public function getValue(): string;
}
