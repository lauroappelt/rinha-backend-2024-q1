<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\Logger\LoggerFactory;

class IndexController extends AbstractController
{   
    private $logger;

    public function __construct(LoggerFactory $loggerFactory)
    {
        // The first parameter corresponds to the name of the log, and the second parameter corresponds to the key in config/autoload/logger.php
        $this->logger = $loggerFactory->get('log', 'default');
    }


    public function index()
    {   
        $this->logger->info('teste');
        
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}. teste",
        ];
    }
}
