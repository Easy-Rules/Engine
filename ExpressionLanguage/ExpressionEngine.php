<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:17
 */

namespace EasyRules\Engine\ExpressionLanguage;


use EasyRules\Engine\Engine;
use EasyRules\Engine\Model\Logic\Rule\ActionInterface;
use EasyRules\Engine\Model\LogicInterface;

/**
 * Class ExpressionEngine
 *
 * @package EasyRules\Engine
 */
class ExpressionEngine implements Engine
{
    /**
     * @var \EasyRules\Engine\ExpressionLanguage\ExpressionLanguage
     */
    protected $language;

    /**
     * ExpressionEngine constructor.
     */
    public function __construct()
    {
        $this->language = new ExpressionLanguage();
    }

    /**
     * @param LogicInterface $logic
     * @param array          $parameters
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle(LogicInterface $logic, $parameters)
    {
        if (count($logic->getRules()) > 0) {
            foreach ($logic->getRules() as $rule) {
                $result = $this->language->evaluate(
                    $rule->getExpression(),
                    $parameters
                );
                foreach ($rule->getActions() as $action) {
                    if ($result == $action->getResult()) {
                        switch ($action->getType()) {
                            case ActionInterface::EXCEPTION:
                                throw new \Exception($action->getParameter());
                                break;
                            default:
                                throw new \Exception("Unkown type");
                                break;
                        }
                    }
                }
            }
        }
    }
}