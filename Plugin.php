<?php namespace Responsiv\Zephyr;

use System\Classes\PluginBase;

/**
 * Zephyr Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Zephyr',
            'description' => 'No description provided yet...',
            'author'      => 'Responsiv',
            'icon'        => 'icon-leaf'
        ];
    }

}
