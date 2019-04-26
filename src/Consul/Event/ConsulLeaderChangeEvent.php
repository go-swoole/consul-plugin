<?php
/**
 * Created by PhpStorm.
 * User: administrato
 * Date: 2019/4/26
 * Time: 15:42
 */

namespace GoSwoole\Plugins\Consul\Event;


use GoSwoole\BaseServer\Plugins\Event\Event;

class ConsulLeaderChangeEvent extends Event
{
    const ConsulLeaderChangeEvent = "ConsulLeaderChangeEvent";

    public function __construct(string $type, bool $isLeader)
    {
        parent::__construct($type, $isLeader);
    }

    public function isLeader(): bool
    {
        return $this->getData();
    }
}