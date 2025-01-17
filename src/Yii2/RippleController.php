<?php declare(strict_types=1);
/**
 * Copyright © 2024 cclilshy
 * Email: jingnigg@gmail.com
 *
 * This software is licensed under the MIT License.
 * For full license details, please visit: https://opensource.org/licenses/MIT
 *
 * By using this software, you agree to the terms of the license.
 * Contributions, suggestions, and feedback are always welcome!
 */

namespace Ripple\Driver\Yii2;

use Ripple\Worker\Manager;
use Throwable;
use yii\console\Controller;

class RippleController extends Controller
{
    /**
     * @return void
     * @throws Throwable
     */
    public function actionIndex(): void
    {
        $manager = new Manager();
        $worker  = new Worker();
        $manager->addWorker($worker);
        $manager->run();
    }
}
