# SFTP Details (DO NOT USE)

# CODE IS NOT SECURE! DO NOT INSTALL!

Displays a small Dashboard widget to remind logged-in Admin users of their server SFTP login information for easy reference (uses defined constants).

* [Plugin Homepage (LittleBizzy.com)](https://www.littlebizzy.com/plugins/sftp-details)
* [Free Facebook Group](https://www.facebook.com/groups/littlebizzy/)

### Defined Constants

    /** Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);
    
    /** SFTP Details Functions */
    define('SFTP_DETAILS', true); // default = true
    define('SFTP_DETAILS_SERVER', '123.123.123.123'); // (automatically detected if not defined)
    define('SFTP_DETAILS_USER', 'username'); // *must be unique*
    define('SFTP_DETAILS_PASSWORD', 'password'); // *must be unique*
    define('SFTP_DETAILS_PORT', '6969'); // *must be unique* (SlickStack = 6969)
    define('SFTP_DETAILS_ROOT_DIR', '/var/www'); // (SlickStack = /var/www ...automatically detected if not defined)
    define('SFTP_DETAILS_PUBLIC_DIR', '/var/www/html'); // (SlickStack = /var/www/html ...automatically detected if not defined)

### Compatibility

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only — for both performance and usability reasons, we strongly recommend avoiding WordPress Multisite for the vast majority of your projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins (meaning that they load first, and cannot be deactivated) by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

### Support Issues

Please do not submit Pull Requests. Instead, kindly create a new Issue with relevant information if you are an experienced developer, otherwise you may become a [**LittleBizzy.com Member**](https://www.littlebizzy.com/members) if your company requires official support.
