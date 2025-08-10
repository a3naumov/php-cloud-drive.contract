<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveContract;

interface ResourceInterface
{
    public function getId(): ?string;

    public function getDriveId(): string;

    public function getParentId(): ?string;

    public function getName(): string;

    public function setName(string $name): static;
}
