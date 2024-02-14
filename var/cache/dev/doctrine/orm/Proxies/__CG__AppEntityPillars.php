<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pillars extends \App\Entity\Pillars implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'content' => [parent::class, 'content', null],
        "\0".parent::class."\0".'event' => [parent::class, 'event', null],
        "\0".parent::class."\0".'icon' => [parent::class, 'icon', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'startDate' => [parent::class, 'startDate', null],
        "\0".parent::class."\0".'text' => [parent::class, 'text', null],
        'content' => [parent::class, 'content', null],
        'event' => [parent::class, 'event', null],
        'icon' => [parent::class, 'icon', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'startDate' => [parent::class, 'startDate', null],
        'text' => [parent::class, 'text', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}