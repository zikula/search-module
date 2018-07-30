<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - https://ziku.la/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SearchModule\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Zikula\Core\Controller\AbstractController;

/**
 * Class AdminController
 * @Route("/admin")
 * @deprecated remove at Core-2.0
 */
class AdminController extends AbstractController
{
    /**
     * @Route("")
     *
     * The main administration function.
     *
     * @return RedirectResponse
     */
    public function indexAction()
    {
        @trigger_error('The zikulasearchmodule_admin_index route is deprecated. please use zikulasearchmodule_config_config instead.', E_USER_DEPRECATED);

        return $this->redirectToRoute('zikulasearchmodule_config_config');
    }
}
