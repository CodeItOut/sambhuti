<?php
namespace app\controller;
if ( ! defined('SB_ENGINE_PATH')) exit('No direct script access allowed');
/**
 * Sambhuti
 * Copyright (C) 2010-2011  Piyush Mishra
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
 * @package Sambhuti
 * @author Piyush Mishra <me[at]piyushmishra[dot]com>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2010-2011 Piyush Mishra
 */

class welcome extends \sb\controller\base
{
    function execute(\sb\model\request $request)
    {
        global $time1;
        //$user = $this->load('dao','user');
        //$user->create("Piyush","Mishra","mymail".rand(1,10000)."@piyush.com","slug".rand(1,10000),"pass","wtf".rand(1,10000)."key");
        //$userobj = $user->getbyid(1);
        //$view = $this->load('view','login');
        //echo $view->render(array("user" => $userobj, "time" => microtime(true) - $time1));
        echo microtime(true) - $time1;
    }
}

/**
 * End of file Welcome
 */
