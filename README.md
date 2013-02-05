Symfony-Wordpress Sandbox
=========================
This is a simple sandbox of Symfony Standard Edition integrated with a Wordpress installation using the [WordpressBundle](https://github.com/kayue/WordpressBundle)

1) Checking your Wordpress Configuration
-------------------------------------
Access the `wp-config.php` script from a browser:

    http://localhost/path/to/symfony/app/web/wordpress


2) Checking your Symfony Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

Access the `config.php` script from a browser:

    http://localhost/path/to/symfony/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.

3) Browsing the Demo Application
--------------------------------

Congratulations! You're now ready to use Symfony with Wordpress integration.

From the `config.php` page, click the "Bypass configuration and go to the
Welcome page" link to load up your first Symfony page.

You can also use a web-based configurator by clicking on the "Configure your
Symfony Application online" link of the `config.php` page.

To see a real-live Symfony-Wordpress page in action, access the following page:

    web/app_dev.php/demo/post/hello-world

    or if your wp is german:

    web/app_dev.php/demo/post/hallo-welt