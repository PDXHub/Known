<?php

    /**
     * Administration page: PHP dependencies
     */

    namespace Idno\Pages\Admin {

        /**
         * Default class to serve the homepage
         */
        class Dependencies extends \Idno\Common\Page
        {

            function getContent()
            {
                $this->adminGatekeeper(); // Admins only
                $t        = \Idno\Core\Idno::site()->template();
                $t->body  = $t->draw('admin/dependencies');
                $t->title = \Idno\Core\Idno::site()->language()->_('Dependencies');
                $t->drawPage();

            }

        }

    }