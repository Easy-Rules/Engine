<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:39
 */

namespace EasyRules\Engine\Model\Logic;

use EasyRules\Engine\Model\Logic\Rule\ActionInterface;

/**
 * Interface RuleInterface
 *
 * @package EasyRules\Model\Logic
 */
interface RuleInterface
{
    /**
     * @return ActionInterface[]
     */
    public function getActions();

    /**
     * @return integer
     */
    public function getWeight();
}