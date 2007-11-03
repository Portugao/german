<?php 

define('_THUMBNAIL_TITLE_PREFERENCES',		'Thumbnail Moduleinstellungen');
define('_THUMBNAIL_PREFERENCES_SIZE',		'Standard Thumbnailgröße');
define('_THUMBNAIL_PREFERENCES_OVERRIDE',	'Allow invoking module to override standard size');

define('_THUMBNAIL_TITLE_CHECKSETTINGS',	'Überprüfe Einstellungen');

define('_THUMBNAIL_SETTINGS',			'Einstellungen');
define('_THUMBNAIL_SETTING',			'Einstellung');
define('_THUMBNAIL_MASTERVALUE',			'Master Value');
define('_THUMBNAIL_LOCALVALUE',			'Local Value');
define('_THUMBNAIL_COMMENTS',			'Comments');
define('_THUMBNAIL_VALUE',			'Value');
define('_THUMBNAIL_FEATURES',			'Features');
define('_THUMBNAIL_FUNCTIONS',			'Functions');
define('_THUMBNAIL_FUNCTION_EXISTS',			'function_exists:');
define('_THUMBNAIL_SCALE',			'&lt;-- bad . . . . . good --&gt;');

/* Check settingts */
define('_THUMBNAIL_CHECKSETTINGS_DESC',			'This demo analyzes your settings (phpThumb.config.php and server/PHP) for <a href="http://phpthumb.sourceforge.net"><strong>phpThumb()</strong></a>');


/* phpThum Stuff */
define('_THUMBNAIL_TITLE_PHPTHUMB_SETTINGS',			'phpThumb Settings');

/* Settings */

//Cache directory
define('_THUMBNAIL_CACHE_DIR_DESC',			'Note this directory must be writable (usually chmod 777 is neccesary) for caching to work.
        If the directory is not writable no error will be generated but caching will be disabled.');
define('_THUMBNAIL_CACHE_DIR_CONF',			'Cache directory configuration');
define('_THUMBNAIL_CACHE_DIR',			'Cache Directory');
define('_THUMBNAIL_SET_CACHE_DIR',			'set the cache directory');
define('_THUMBNAIL_CACHE_DIR_WARNING_OFF',			'Cache Disable Warning');
define('_THUMBNAIL_CACHE_DIR_WARNING_DESC',			'If [<em>Cache Directory</em>] is non-existant or not writable, and [Cache Disable Warning] is disabled, an error image will be generated warning to either set the cache directory or disable the warning (to avoid people not knowing about the cache)');

//Cache culling
define('_THUMBNAIL_CACHE_CULLING',			'Cache culling');
define('_THUMBNAIL_CACHE_CULLING_DESC',			'phpThumb can automatically limit the contents of the cache directory
        based on last-access date and/or number of files and/or total filesize.');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE',			'Cache Max Age');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE_DESC',			'EMPTY] never delete cached thumbnails based on last-access time
                delete cached thumbnails that haven\'t been accessed in more than [Cache Max Adge] days (value is maximum time since last access in days to avoid deletion).');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE',			'Cache Max Size');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE_DESC',			'[EMPTY] never delete cached thumbnails based on byte size of cache directory
                delete least-recently-accessed cached thumbnails when more than [Cache Max Size]MB of cached files are present (value is maximum bytesize of all cached files).');  
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES',			'Cache Max Files');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES_DESC',			'EMPTY] never delete cached thumbnails based on number of cached files
                delete least-recently-accessed cached thumbnails when more than [Cache Max Files] cached files are present (value is maximum number of cached files to keep).');    
                
//Source image cache configuration
define('_THUMBNAIL_SOURCE_IMG_CACHE_CONF',			'Source image cache configuration');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED',			'Cache Source Enabled');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED_DESC',			'if true, source images obtained via HTTP are cached to [Cache Source Directory].');
            
define('_THUMBNAIL_CACHE_SOURCE_DIR',			'Cache Source Directory');
define('_THUMBNAIL_CACHE_SOURCE_DIR_DESC',			'set the cache directory for unprocessed source images');

//cache source modification date configuration
define('_THUMBNAIL_CACHE_SOURCE_MOD_DATE_CONF',			'cache source modification date configuration');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL',			'Cache Source Filemtime Ignore Local');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL_DESC',			'if true, local source images will not be checked for modification date and cached image will be used if available, even if source image is changed or removed.');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE',			'Cache Source Filemtime Ignore Remote');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE_DESC',			'if true, remote source images will not be checked for modification date and cached image will be used if available, even if source image is changed or removed. 
                <strong>WARNING</strong> cached performance MUCH slower if this is set to false.');
                
//Simplified cache filename configuration
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF',			'Simplified cache filename configuration');
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF_DESC',			'Instead of creating unique cache filenames for all parameter combinations, create "simple" cache files (e.g.: "pic_thumb.jpg")<br />
        If cache_default_only_suffix is non-empty, GETstring parameters (except \'src\') are ignored and only $PHPTHUMB_DEFAULTS
        parameters (set at the bottom of phpThumb.config.php) are used for processing.<br />
        The \'*\' character MUST be used to represent the source image name.');
        
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX',			'Cache Default Only Suffix');
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX_DESC',			'[EMPTY] cached in normal phpThumb manner<br />
            \'*_thumb\'  cache \'pic.jpg\' becomes \'pic_thumb.jpg\' (or \'pic_thumb.png\' if PNG output is selected, etc)<br />
            \'small-*\'  cache \'pic.jpg\' becomes \'small-pic.jpg\' (or \'small-pic.png\' if PNG output is selected, etc).');
            
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU',			'Cache Force Passthru');
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU_DESC',			'if true, cached image data will always be passed to browser; if false, HTTP redirect will be used instead.');

//Temp directory configuration
define('_THUMBNAIL_TEMP_DIR_CONF',			'Temp directory configuration');   
define('_THUMBNAIL_TEMP_DIR_CONF_DESC',			'phpThumb() may need to create temp files. Usually the system temp dir is writable and can be used.
        Leave this value as NULL in most cases. If you get errors about "failed to open &lt;filename&gt; for writing"
        you should change this to a full pathname to a directory you do have write access to.');
define('_THUMBNAIL_TEMP_DIR',			'Temp Directory');

//Max pixels in source img
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD',			'maximum number of pixels in source image to attempt to process entire image');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD_DESC',			'If this is zero then no limit on source image dimensions.
        If this is nonzero then this is the maximum number of pixels the source image
        can have to be processed normally, otherwise the embedded EXIF thumbnail will
        be used (if available) or an "image too large" notice will be displayed.
        This is to be used for large source images (> 1600x1200) and low PHP memory
        limits. If PHP runs out of memory the script will usually just die with no output.
        To calculate this number, multiply the dimensions of the largest image
        you can process with your memory limitation (e.g. 1600 * 1200 = 1920000)
        As a general guideline, this number will be about 20% of your PHP memory
        configuration, so 8M = 1,677,722; 16M = 3,355,443; 32M = 6,710,886; etc.');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG',			'Max Source Pixels');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_DESC',			'        <ul>
            <li>0 no memory limit</li>
            <li>1920000 allow 1600x1200 images (2Mpx), no larger (about 10MB memory required)</li>
            <li>3355443 16MB memory limit</li>
            <li>3871488 allow 2272x1704 images (4Mpx), no larger (about 16MB memory required)</li>
        </ul>');    
  
//ImageMagick configuration
define('_THUMBNAIL_IMG_MAGIC_CONF',			'ImageMagick configuration');
define('_THUMBNAIL_IMG_MAGIC_CONF_DESC',			'If source image is larger than available memory limits as defined above in
        \'max_source_pixels\' AND ImageMagick\'s "convert" program is available, phpThumb()
        will call ImageMagick to perform the thumbnailing of the source image to bypass
        the memory limitation. Leaving the value as NULL will cause phpThumb() to
        attempt to detect ImageMagick\'s presence with `which`.');
define('_THUMBNAIL_IMG_MAGIC_PAHT',			'Imagemagick Path');
define('_THUMBNAIL_IMG_MAGIC_PAHT_DESC',			'Windows: set absolute pathname or empty for no use of Image Magic<br />
                *nix: set absolute pathname to "convert", or leave as null if "convert" is in the path');
                
//Default output configuration
define('_THUMBNAIL_DEFAULT_OUTPUT_CONF',			'Default output configuration');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT',			'Output Format');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT_DESC',			'default output format (\'jpeg\', \'png\' or \'gif\') - thumbnail will be output in this format (if available in your version of GD).');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH',			'Output Maxwidth');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH_DESC',			'default maximum thumbnail width.  If this is zero then default width  is the width  of the source image.');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT',			'Output Maxheigh');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT_DESC',			'default maximum thumbnail height. If this is zero then default height is the height of the source image.');        
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE',			'Output Interlace');
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE_DESC',			'if true interlaced output for GIF/PNG, progressive output for JPEG; if false non-interlaced for GIF/PNG, baseline for JPEG.');

//Error message configuration
define('_THUMBNAIL_ERR_MSG_CONF',			'Error message configuration');
define('_THUMBNAIL_ERR_IMG_WIDTH',			'Error Image Width');
define('_THUMBNAIL_ERR_IMG_WIDTH_DESC',			'default width for error images');
define('_THUMBNAIL_ERR_IMG_HEIGHT',			'Error Image Height');
define('_THUMBNAIL_ERR_IMG_HEIGHT_DESC',			'default height for error images');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT',			'Error Message Image Default');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT_DESC',			'Set this to the name of a generic error image (e.g. \'/images/error.png\') that you want displayed in place of any error message that may occur. This setting is overridden by the \'err\' parameter, which does the same thing.');

define('_THUMBNAIL_ERR_IMG_BGCOLOR',			'Error Bgcolor');
define('_THUMBNAIL_ERR_IMG_BGCOLOR_DESC',			'background color of error message images.');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR',			'Error Textcolor');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR_DESC',			'color of text in error messages.');
define('_THUMBNAIL_ERR_IMG_FONTSIZE',			'Error Fontsize');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_SAMALLEST',			'(smallest)');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_LARGEST',			'(largest))');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_DESC',			'size of text in error messages, from 1 (smallest) to 5 (largest)');
define('_THUMBNAIL_ERR_DIE_MSG',			'die on error');
define('_THUMBNAIL_ERR_DIE_MSG_DESC',			'die with error message on any fatal error (recommended with standalone phpThumb.php).');
define('_THUMBNAIL_ERR_SILENT_DIE',			'Silent die on error');
define('_THUMBNAIL_ERR_SILENT_DIE_DESC',			'simply die with no output of any kind on fatal errors (not recommended)');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL',			'Die on source failure');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL_DESC',			'die with error message if source image cannot be processed by phpThumb() (usually because source image is corrupt in some way).
            If false the source image will be passed through unprocessed, if true (default) an error message will be displayed.');



//Off-server Thumbnailing Configuration
define('_THUMBNAIL_OFF_SRV_TMBN_CONF',			'Off-server Thumbnailing Configuration');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED',			'Enabled');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED_DESC',			'If false will allow thumbnailing from any source domain');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS',			'Valid Domains');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS_DESC',			'This is the list of domains for which thumbnails are allowed to be created.
                The default value of the current domain should be fine in most cases, but if neccesary you can add more domains in here, in the format www.example.com; www.example1.com.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG',			'Erase Image');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG_DESC',			'if true thumbnail is covered up with $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] before text is applied, if false text is written over top of thumbnail.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT',			'Text Message');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT_DESC',			'Text of error message.');

//Off-server Linking Configuration
define('_THUMBNAIL_OFF_SRV_LINKING_CONF',			'Off-server Linking Configuration');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED',			'Enabled');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED_DESC',			'If false will allow thumbnails to be linked to from any domain, if true only domains listed below in \'nooffsitelink_valid_domains\' will be allowed.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS',			'Valid Domains');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS_DESC',			'This is the list of domains for which thumbnails are allowed to be created.
                The default value of the current domain should be fine in most cases, but if neccesary you can add more domains in here, in the format www.example.com; www.example1.com.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER',			'Require Referer');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER_DESC',			'If false will allow standalone calls to phpThumb(). If true then only requests with a $_SERVER[\'HTTP_REFERER\'] value in \'nooffsitelink_valid_domains\' are allowed.');

define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG',			'Erase Image');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG_DESC',			'if true thumbnail is covered up with $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] before text is applied, if false text is written over top of thumbnail.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT',			'Text Message');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT_DESC',			'Text of error message. Your Host Name will be appanded to this text'); 
 
//Border &amp; Background default colors
define('_THUMBNAIL_BORDER_BACKGROUND_CONF',			'Border &amp; Background default colors'); 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR',			'Border Hexcolor');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR_DESC',			'Default border color - usual HTML-style hex color notation.');                
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR',			'Background Hexcolor');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR_DESC',			'Default background color when thumbnail aspect ratio does not match fixed-dimension box - usual HTML-style hex color notation'); 

//Watermark configuration
define('_THUMBNAIL_WATERMARK_CONF',			'Watermark configuration');                
define('_THUMBNAIL_WATERMARK_TTF_DIR',			'TTF Directory');
define('_THUMBNAIL_WATERMARK_TTF_DIR_DESC',			'Base directory for TTF font files');


//MySQL configuration
define('_THUMBNAIL_MYSQL_CONF',			'MySQL configuration');   
define('_THUMBNAIL_MYSQL_CONF_DESC',			'You may want to pull data from a database rather than a physical file
        If so, modify the $PHPTHUMB_CONFIG[\'mysql_query\'] line to suit your database structure
        Note: the data retrieved must be the actual binary data of the image, not a URL or filename
        see http://www.billy-corgan.com/blog/archive/000143.php for a brief tutorial on this section.
        <strong>Because of security reasen this settings can only be changed in the config File.</strong>');   

//Security configuration
define('_THUMBNAIL_SECURITY_CONF',			'Security configuration');
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED',			'High Security Enabled');   
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED_DESC',			'if enabled, requires \'high_security_password\' set to at least 5 characters, and requires the use of phpThumbURL() function (at the bottom of phpThumb.config.php) to generate hashed URLs.'); 
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW',			'High Security Password');  
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW_DESC',			'required if \'high_security_enabled\' is true, must be at least 5 characters long');  
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG',			'Disable Debug');
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG_DESC',			'prevent phpThumb from displaying any information about your system. If true, phpThumbDebug and error messages will be disabled.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT',			'Allow SRC above DOCROOT');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT_DESC',			'if true, allow src to be anywhere in filesystem; if false (default) only allow src within document_root.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB',			'Allow SRC above phpThumb');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB_DESC',			'if true (default), allow src to be anywhere in filesystem; if false only allow src within sub-directory of phpThumb installation.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE',			'Allow Parameter File');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE_DESC',			'if true, allow use of \'file\' parameter; if false (default) the \'file\' parameter is disabled/ignored.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO',			'Allow Parameter Goto');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO_DESC',			'if true, allow use of \'goto\' parameter; if false (default) the \'goto\' parameter is disabled/ignored.');

//Compatability settings

define('_THUMBNAIL_COMPATIBILITY_SETTINGS',			'Compatability settings');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS',			'Disable Pathinfo Parsing');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS_DESC',			'if true, $_SERVER[PATH_INFO] is not parsed. May be needed on some server configurations to allow normal behavior');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED',			'Disable Imagecopyresampled');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED_DESC',			'if true, ImageCopyResampled is replaced with ImageCopyResampleBicubic. May be needed for buggy versions of PHP-GD.');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU',			'Disable onlycreateable passthru');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU_DESC',			'if true, any image that can be parsed by GetImageSize() can be passed through; if false, only images that can be converted to GD by ImageCreateFrom(JPEG|GIF|PNG) functions are allowed.');

//Speed optimizations configuration
define('_THUMBNAIL_SPEED_CONFIG',			'Speed optimizations configuration');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK',			'Prefer Imagemagick');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK_DESC',			'If true, use ImageMagick to resize thumbnails if possible, since it is usually faster than GD functions; if false only use ImageMagick if PHP memory limit is too low.');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL',			'use exif thumbnail for speed');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL_DESC',			'IIf true, and EXIF thumbnail is available, and is larger or equal to output image dimensions, use EXIF thumbnail rather than actual source image for generating thumbnail. Benefit is only speed, avoiding resizing large image.');                  

//Set parameters
define('_THUMBNAIL_SET_PARAM',			'If any parameters are constant across ALL images, you can set them here');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE',			'phpThumb Defaults GetString Override');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE_DESC',			'if true, any parameters in the URL will override the defaults set here; if false, any parameters set here cannot be overridden in the URL.');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS',			'phpThumb Defaults Disable GetParams');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS_DESC',			'if true, GETstring parameters will be ignored (except for  \'src\') and only below default parameters will be used; if false, both default and GETstring parameters will be used (depending on $PHPTHUMB_DEFAULTS_GETSTRINGOVERRIDE). Will be auto-set true if !empty($PHPTHUMB_CONFIG[\'cache_default_only_suffix\']).');