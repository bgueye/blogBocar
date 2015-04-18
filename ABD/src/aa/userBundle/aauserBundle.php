<?php

namespace aa\userBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class aauserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
