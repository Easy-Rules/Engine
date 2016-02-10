<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:40
 */

namespace EasyRules\Engine\Model\Logic\Rule;
/**
 * Interface ActionInterface
 *
 * @package EasyRules\Engine\Model\Logic\Rule
 */
interface ActionInterface
{
    const EXCEPTION = 'exception';
    const COMMAND = 'command';
    const EVENT = 'event';

    /**
     * @return string
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getParameter();

    /**
     * @return mixed
     */
    public function getResult();

    /**
     * @return integer
     */
    public function getWeight();
}