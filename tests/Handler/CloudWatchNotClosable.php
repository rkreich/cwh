<?php

namespace Maxbanton\Cwh\Test\Handler;

use Maxbanton\Cwh\Handler\CloudWatch;

class CloudWatchNotClosable extends CloudWatch
{
    public function close()
    {
        // do nothing, this method is called on handler destruct
    }
}
