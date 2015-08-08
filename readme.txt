=== news ticker benaceur ===
Contributors: Benaceur 
Tags: news ticker, latest post, latest posts, news post, latest comments, Last posts bar, Last news ticker, Latest news, bar
Requires at least: 3.0
Tested up to: 4.2.4
Stable tag: 2.2.2
License: GPLv2 or later

This plugin allow you to display the latest posts or latest comments or news in a bar with six beautiful animations...

== Description ==

This plugin allows you to view the latest posts or latest comments or latest news generally speaking in a bar with six beautiful animations, 
you can control and adjust the style of the bar from the admin panel, 
you also the possibility to appear the bar to the particular group or member ...

= and here is all plugin characteristics: =

* Six styles with beautiful animations
* Complete control over the plugin, color properties, font, height, width, etc ... through the Control Panel
* enable/disable the plugin from the control panel
* Control the direction of the news ticker RTL / LTR
* Adding a link a sub or a major to the plugin settings page in admin bar
* The possibility to appear the bar to the particular group or member ...
* Include the posts from certain categories only, or conversely, exclude a category or categories
* Include the comments from certain posts only, or conversely, exclude a post or posts
* The possibility to control the maximum number of letters of the title of the article or comment
* The possibility to control speed,timeout ... of animation
* The ability to remove all settings and data from the database when the plugin is disabled or not to remove, is optional
* The ability to customize an appropriate style for the control panel, what you can set and adjust the colors of the options page.

* The plugin, God willing, is open to development ...

= TRANSLATED IN FOLLOWING LANGUAGES: =
* Arabic
* English

Link to preview <a href="http://benaceur-php.com/" target="_blank">Demo</a> 

== Installation ==

1. Upload news ticker benaceur to the "/wp-content/plugins/"
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Activate the plugin again in the control panel (the plugin page)
4. Put the following line in the place (in template) where you bar to appear:
 &lt;?php if (has_action('wp_news_ticker_benaceur')) wp_news_ticker_benaceur_(); ?>
 or put this short code (in post or page):
 [wp_news_ticker_benaceur_short_code]
5. Adjust your settings in Admin Panel.

== Screenshots ==

1. Options page admin panel-1
2. Options page admin panel-2
3. Options page admin panel-3
4. Options page admin panel-4

== Changelog ==

= 2.2.2 =
* Remove latest admin notice. 
= 2.2.1 =
* Tested with WordPress 4.2. 
* Some change in the programming of the plugin.
* Adding reset all setting.
* Adding border of title and line-height.
* Some adjustments.
= 2.2.0 =
* Tested with WordPress 4.2. 
* Some change in the programming of the plugin.
* Adding reset all setting.
* Adding border of title and line-height.
* Some adjustments.
= 2.1.6 =
* Correction in in the default (values) style.
* Some adjustment in Translation.
= 2.1.5 =
* Adding two new animations.
* Adding pulsate animation for the title.
* Adding: Width of title background.
* Some adjustments and corrections.
= 2.1.4 =
* Adding custom theme for settings page in Backend.
* Adding the possibility to Remove all settings and data of the plugin from database when the plugin is disabled.
* Adding the possibility to Hide the plugin rating icon.
= 2.1.3 =
* Adding the possibility to control the number of letters of the title of the article.
* Adding the possibility to control the number of letters of the comments.
* Adding a new style in Backend.
* Some adjustment in Translation.
= 2.1.2 =
* Adding a link to the comments.
= 2.1.1 =
* Correction in the font: DroidKufi.
= 2.1.0 =
* adding the ability to choose between the modified style and standart style options page in the Admin Panel.
= 2.0 =
* Note in the options page in the administration panel.
= 1.1.9 =
* Fixed a compatibility problem with some browsers.
* Adding hover color and height in the option page in admin panel.
= 1.1.8 =
* Adding "Latest comments" and the ability to include or exclude cat id/post id.
= 1.1.7 =
* Adding a link to a live preview of plugin.
= 1.1.6 =
* Significant corrections in the default style.
= 1.1.5 =
* Some adjustment in Translation.
= 1.1.4 =
* Some adjustment.
= 1.1.3 =
* Addition timeout and speed of animation and the ability to disable the title.
= 1.1.2 =
* Some adjustments on the base and adding the number of posts.
= 1.1.1 =
* Edit the title.
= 1.1 =
* A simple correction in style.
= 1.0 =
* First released version.
