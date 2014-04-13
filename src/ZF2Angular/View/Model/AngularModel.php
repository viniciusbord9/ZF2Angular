<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZF2Angular\View\Model;

use \Zend\View\Model\ViewModel;

class AngularModel extends ViewModel
{

    public function __construct($variables = null, $options = null)
    {
        $view= new ViewModel($variables, $options);
        $this->setTemplate('angular/scripts');
        parent::__construct($variables, $options);
    }
}
