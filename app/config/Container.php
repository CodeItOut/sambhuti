<?php
/**
 * Sambhuti
 * Copyright (C) 2012-2013 Piyush
 *
 * License:
 * This file is part of Sambhuti (http://sambhuti.org)
 *
 * Sambhuti is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Sambhuti is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Sambhuti.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   Sambhuti
 * @author    Piyush <piyush@cio.bz>
 * @license   http://www.gnu.org/licenses/gpl.html
 * @copyright 2012 Piyush
 */

namespace sambhuti\config;

use sambhuti\core;
use sambhuti\loader;

/**
 * config Container
 *
 * All config files are loaded and stored by this class
 *
 *
 * @package    Sambhuti
 * @subpackage config
 * @author     Piyush <piyush@cio.bz>
 * @license    http://www.gnu.org/licenses/gpl.html
 * @copyright  2012 Piyush
 */
class Container extends core\ReplaceableContainer implements IContainer
{

    /**
     * Dependencies
     *
     * @static
     * @var array Array of dependency strings
     */
    public static $dependencies = ['loader'];

    /**
     * Loader instance
     *
     * @var null|\sambhuti\loader\IContainer
     */
    protected $loader = null;


    /**
     * Constructor
     *
     * @param loader\IContainer $loader
     *
     * @throws \Exception
     */
    public function __construct(loader\IContainer $loader)
    {
        $this->loader = $loader;
        if (!($adapter = $loader->fetch('config\\' . SAMBHUTI_CONFIG_ADAPTER))) {
            throw new \Exception("Config Adapter " . SAMBHUTI_CONFIG_ADAPTER . " not found");
        }
        $this->instance = new $adapter($loader);
    }

}
