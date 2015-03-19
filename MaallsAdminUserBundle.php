<?php

namespace Maalls\AdminUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MaallsAdminUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
