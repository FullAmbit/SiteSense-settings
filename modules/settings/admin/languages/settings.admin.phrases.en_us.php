<?php
	function languages_settings_admin_en_us(){
		return array(
			'core'                          => array(
				'settings'                   => 'Settings',
				'permission_settings_access' => 'Access Settings'
			),
			'labelSiteTitle'                => 'Site Title',
			'descriptionSiteTitle'          => 'Used to construct the TITLE tag and in most skins the content of the top level heading (H1).',
			'labelTheme'                    => 'Default Theme',
			'descriptionTheme'              => 'Determines which of your installed themes users will default to.',
			'labelDefaultTimeZone'          => 'Default Time Zone',
			'descriptionDefaultTimeZone'    => 'Sets the default time zone for all newly registered users.',
			'labelHomepage'                 => 'Homepage',
			'descriptionHomepage'           => 'What will users see first when they visit your site?',
			'labelHideContentGuests'        => 'Hide Content From Guests',
			'descriptionHideContentGuests'  => 'You can set the CMS to show either the login page or the registration page instead of the normal content to guests',
			'labelUseBBCode'                => 'Use BBCode',
			'labelJSEditor'                 => 'WYSIWYG Editor',
			'labelDefaultBlog'              => 'Default Blog',
			'labelShowPerPage'              => 'Blog Items Per Page',
			'descriptionShowPerPage'        => 'Determines how many blog posts are shown on a list page. This includes the number of news items to be shown on the home page.',
			'labelRawFooterContent'         => 'Footer Content',
			'descriptionRawFooterContent'   => 'This is what is displayed inside the <code>div#footer</code> on every page. Typically you would put the site disclaimer there.',
			'labelCharacterEncoding'        => 'Character Encoding',
			'descriptionCharacterEncoding'  => 'Not only sets up the <code>Content-Encoding</code> meta-tag, but is also used by PHP\'s "header" function to set the mime-type in the http response header.',
			'labelCompressionEnabled'       => 'Use Compression?',
			'descriptionCompressionEnabled' => 'Turns on and off server gzip/mod_deflate compression if available.',
			'labelCompressionLevel'         => 'Compression Level',
			'descriptionCompressionLevel'   => 'If compression is on and this is enabled, sets the amount of compression used. 1 for least compression and low CPU load, 9 for the most compression and high CPU use.',
			'labelUserSessionTimeOut'       => 'Default Session Timeout (seconds)',
			'descriptionUserSessionTimeOut' => 'This value is how long a user account is normally allowed to remain logged in without requesting any pages. Stated in seconds, so:',
			'minutes'                       => 'Minutes',
			'hour'                          => 'Hour',
			'labelUseModRewrite'            => 'Use modRewrite (.htaccess)?',
			'descriptionUseModRewrite'      => 'If enabled this will build all links to assume that the rewrite engine is in use and redirecting all calls to the system to index.php directly. If enabled your .htacces should include something like this:',
			
			'modRewriteExample'             => 'RewriteEngine On
			RewriteRule !\.(gif|jpg|png|css|js|swf|html|ico|zip|rar|pdf|xml|mp4|mpg|flv|mkv)$ index.php',
			'modRewriteNote'                => 'You will want to make sure any and all data types you do not want the CMS to handle have their file extensions listed above',
			'labelDefaultGroup'             => 'Default User Group',
			'descriptionDefaultGroup'       => 'Determines which of group to put registered users under.',
			'labelVerifyEmail'              => 'Verify EMail',
			'optionDoNotRequireVerifyEmail' => 'Do Not Requre E-Mail Verification',
			'optionRequireVerifyEmail'      => 'Require E-Mail Verification',
			'labelRequireActivation'        => 'Require User Activation?',
			'optionDoNotRequireActivation'  => 'Do Not Require Activation',
			'optionRequireActivation'       => 'Require Activation',
			'labelUseCDN'                   => 'Use CDN?',
			'labelCDNPlugin'                => 'CDN Plugin',
			'labelCDNBaseDir'               => 'CDN Base Directory',
			'descriptionCDNBaseDir'         => 'The base directory to upload to on your CDN server. Use trailing and base slashes.',
			'labelCDNLarge'                 => 'CDN Large',
			'descriptionCDNLarge'           => 'The URL of your larger CDN server where files are pulled from the disk.',
			'labelCDNSmall'                 => 'CDN Small',
			'descriptionCDNSmall'           => 'The URL of your smaller CDN server where files are pulled from the RAM.',
			'labelCDNFlash'                 => 'CDN Flash',
			'descriptionCDNFlash'           => 'The URL of your flash streaming CDN server where files are pulled from the RAM.',
			'groupCDN'                      => 'Content Delivery Network Settings',
			'groupRegistration'             => 'Registration Settings',
			'groupAdvanced'                 => 'Advanced Settings',
			'caption'                       => 'Global Settings',
			'submitButton'                  => 'Save Changes'
		);
	}
?>