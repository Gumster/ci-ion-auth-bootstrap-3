# Codeigniter 2.14 with Ion Auth and Bootstrap 3.0

This is a CI starter app with Ion Auth already added, with views using Bootstrap 3.0 layout and assets. There are some other additions too:
* expanded MIME types in config/mimes.php
* MY_Controller to enforce Ion Auth (use regular CI_Controller for non-restricted areas)
* ENVIRONMENT constant set in index.php is used to determine some config settings (db connection, log level, profiler)
* .htaccess file

SQL is as per Ion Auth under /application folder. The environment constant value is set by ternary test on strrpos(__FILE__, 'wamp'), so you will probably want to change that to suit your environment.
--