<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:14
 */

namespace EasyRules\Engine;

use EasyRules\Engine\Model\LogicInterface;

interface Engine
{
    /**
     * @param \EasyRules\Engine\Model\LogicInterface $logic
     * @param array                                          $parameters
     *
     * @return mixed
     */
    public function handle(LogicInterface $logic, $parameters);
}