<?php

declare(strict_types=1);

namespace App\Component;

use App\Service\FooService;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PostMount;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\UX\TwigComponent\EventListener\PreRenderEvent;

#[AsTwigComponent('alert')]
final class AlertComponent
{
    public string $type;

    public string $message;
}
