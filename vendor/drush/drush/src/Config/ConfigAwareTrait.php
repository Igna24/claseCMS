<?php

declare(strict_types=1);

namespace Drush\Config;

trait ConfigAwareTrait
{
    use \Robo\Common\ConfigAwareTrait {
        \Robo\Common\ConfigAwareTrait::getConfig as parentGetConfig;
    }

    /**
     * Replaces same method in ConfigAwareTrait in order to provide a
     * DrushConfig as return type. Helps with IDE completion.
     *
     * @see https://stackoverflow.com/a/37687295.
     *
     * @return DrushConfig
     */
    public function getConfig()
    {
        return $this->parentGetConfig();
    }
}
