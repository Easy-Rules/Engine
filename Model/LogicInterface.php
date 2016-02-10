<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:17
 */

namespace EasyRules\Engine\Model;

use EasyRules\Engine\Model\Logic\RuleInterface;

/**
 * Interface LogicInterface
 *
 * @package EasyRules\Model
 */
interface LogicInterface
{
    /**
     * @return RuleInterface[]
     */
    public function getRules();
}