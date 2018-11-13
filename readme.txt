=== SFTP Details ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: sftp, ftp, ssh, login, details
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.0.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: SFTPDT

Displays a small Dashboard widget to remind logged-in Admin users of their server SFTP login information for easy reference (uses defined constants).

== Description ==

Displays a small Dashboard widget to remind logged-in Admin users of their server SFTP login information for easy reference (uses defined constants).

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/sftp-details-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/sftp-details)
* [Plugin GitHub](https://github.com/littlebizzy/sftp-details)

#### Current Features ####

* Dashboard widget displays SFTP login details to Admin-level users only
* The entire widget can be disabled (hidden) if status = `false`
* Widget data is generated based on defined constants
* `Root dir` and `public dir` variables are auto-generated if not defined
* `Root dir` and `public dir` variables can also be disabled

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);

    /* SFTP Details Functions */
    define('SFTP_DETAILS', true);
    define('SFTP_DETAILS_SERVER', '123.123.123.123');
    define('SFTP_DETAILS_USER', 'username');
    define('SFTP_DETAILS_PASSWORD', 'password');
    define('SFTP_DETAILS_PORT', '22');
    define('SFTP_DETAILS_ROOT_DIR', true);
    define('SFTP_DETAILS_PUBLIC_DIR', true);

#### Technical Details ####

* Parent Plugin: N/A
* Disable Nag Notices: N/A
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: No
  * Transients: No
  * WP Options Table: No
  * Other Tables: No
  * Creates New Tables: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

#### Our Philosophy ####

> "Everything should be made as simple as possible, but no simpler." -- Albert Einstein

> "Write programs that do one thing and do it well... write programs to work together." -- Doug McIlroy

> "The innovation that this industry talks about so much is bullshit. Anybody can innovate... 99% of it is 'Get the work done.' The real work is in the details." -- Linus Torvalds

#### Search Keywords ####

n/a

== Installation ==

1. Upload to `/wp-content/plugins/sftp-details-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working:

After activating the plugin, a new widget should appear under the WP Admin Dashboard area called *SFTP Details*. The data displayed in based solely on the defined constants explained in this readme.

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is no settings page. To enable/disable a certain function (sub-plugin) use the defined constants only.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Join our Facebook group instead.

== Changelog ==

= 1.0.1 =
* changed widget title from sFTP to SFTP
* commented out the `host` (domain) line for now

= 1.0.0 =
* initial release
* tested with PHP 7.0
* tested with PHP 7.1
* tested with PHP 7.2
* added warning to Multisite installations
* plugin uses PHP namespaces
* object-oriented codebase
* disabled recommended plugins notice
* disabled rating request notice
