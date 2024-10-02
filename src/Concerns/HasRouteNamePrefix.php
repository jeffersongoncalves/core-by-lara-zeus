<?php

namespace LaraZeus\Core\Concerns;

trait HasRouteNamePrefix
{
    protected Closure | string | null $routeNamePrefix = null;

    public function routeNamePrefix(Closure | string | null $prefix): static
    {
        $this->routeNamePrefix = $prefix;

        return $this;
    }

    public function getRouteNamePrefix(): Closure | string | null
    {
        return $this->evaluate($this->routeNamePrefix);
    }
}
