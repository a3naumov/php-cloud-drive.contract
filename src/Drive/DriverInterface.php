<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveContract\Drive;

use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveContract\Resource\MetaAttributeInterface;
use A3Naumov\CloudDriveContract\ResourceInterface;

interface DriverInterface
{
    public function getCode(): string;

    /**
     * @return MetaAttributeInterface[]
     */
    public function addResource(DriveInterface $drive, ResourceInterface $resource): array;
}
