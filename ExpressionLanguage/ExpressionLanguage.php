<?php
/**
 * Created by PhpStorm.
 * User: AJanssen
 * Date: 10-02-16
 * Time: 12:11
 */

namespace EasyRules\Engine\ExpressionLanguage;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage as BaseExpressionLanguage;

/**
 * Class ExpressionLanguage
 *
 * @package EasyRules\Engine\ExpressionLanguage
 */
class ExpressionLanguage extends BaseExpressionLanguage
{
    protected function registerFunctions()
    {
        // Registering our 'date' function
        $this->register('date', function ($date) {
            return sprintf('(new \DateTime(%s))', $date);
        }, function (array $values, $date) {
            return new \DateTime($date);
        });

        // Registering our 'date_modify' function
        $this->register('date_modify', function ($date, $modify) {
            return sprintf('%s->modify(%s)', $date, $modify);
        }, function (array $values, $date, $modify) {
            if (!$date instanceof \DateTime) {
                throw new \RuntimeException('date_modify() expects parameter 1 to be a DateTime');
            }
            return $date->modify($modify);
        });
    }
}