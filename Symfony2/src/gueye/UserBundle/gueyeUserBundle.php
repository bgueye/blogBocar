<?php

namespace gueye\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class gueyeUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
