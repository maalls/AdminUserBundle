<?php

namespace Maalls\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MaallsUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
