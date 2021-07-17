<?php

namespace DataMat\CdChecker;

/**
 * Data.
 */
final class DependencyList
{
    /**
     * @var Dependency[]
     */
    private $dependencies = [];

    /**
     * @param Dependency $dependency Dependency
     */
    public function add(Dependency $dependency): void
    {
        $this->dependencies[] = $dependency;
    }

    /**
     * @return Dependency[] The dependencies
     */
    public function all(): array
    {
        return $this->dependencies;
    }
}
