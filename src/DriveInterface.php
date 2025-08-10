<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveContract;

use A3Naumov\CloudDriveContract\Drive\DriverInterface;
use A3Naumov\CloudDriveContract\Exception\Resource\ResourceNotFoundExceptionInterface;

interface DriveInterface
{
    public function getId(): ?string;

    public function getDriver(): DriverInterface;

    public function getName(): string;

    public function setName(string $name): static;

    /**
     * @throws ResourceNotFoundExceptionInterface
     */
    public function addResource(ResourceInterface $resource): static;
}
