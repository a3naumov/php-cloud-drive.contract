<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveContract\Resource;

interface PathInterface
{
    public function getName(): string;

    public function getChildren(): ?PathInterface;
}
