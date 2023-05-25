<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Paiement extends \App\Entity\Paiement implements \Doctrine\Persistence\Proxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'date_paiement' => [parent::class, 'date_paiement', null],
        "\0".parent::class."\0".'entreeSortie' => [parent::class, 'entreeSortie', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'mode_paiement' => [parent::class, 'mode_paiement', null],
        "\0".parent::class."\0".'montant_paye' => [parent::class, 'montant_paye', null],
        "\0".parent::class."\0".'reservation' => [parent::class, 'reservation', null],
        'date_paiement' => [parent::class, 'date_paiement', null],
        'entreeSortie' => [parent::class, 'entreeSortie', null],
        'id' => [parent::class, 'id', null],
        'mode_paiement' => [parent::class, 'mode_paiement', null],
        'montant_paye' => [parent::class, 'montant_paye', null],
        'reservation' => [parent::class, 'reservation', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
