<?php
/**
 * Chronolabs REST API File
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         whois
 * @since           1.1.2
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: help.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Whois API Service REST
 */
	$pu = parse_url($_SERVER['REQUEST_URI']);
	$source = (isset($_SERVER['HTTPS'])?'https://':'http://').strtolower($_SERVER['HTTP_HOST']).$pu['path'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 	$servicename = "Internet Address Whois"; 
		$servicecode = "IAW"; ?>
	<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"]; ?>" />
	<meta property="og:site_name" content="<?php echo $servicename; ?> Open Services API's (With Source-code)"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="rating" content="general" />
	<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="copyright" content="Chronolabs Cooperative &copy; <?php echo date("Y")-1; ?>-<?php echo date("Y")+1; ?>" />
	<meta http-equiv="generator" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="apple-touch-icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<meta property="og:image" content="//labs.partnerconsole.net/execute2/external/reseller-logo"/>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/gradientee/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/shadowing/styleheet.css" type="text/css" />
	<title><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</title>
	<meta property="og:title" content="<?php echo $servicecode; ?> API"/>
	<meta property="og:type" content="<?php echo strtolower($servicecode); ?>-api"/>
	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'share' : {
		  'position' : 'right',
		  'numPreferredServices' : 6
		}, 
		'follow' : {
		  'services' : [
			{'service': 'twitter', 'id': 'ChronolabsCoop'},
			{'service': 'twitter', 'id': 'Cipherhouse'},
			{'service': 'twitter', 'id': 'OpenRend'},
			{'service': 'facebook', 'id': 'Chronolabs'},
			{'service': 'linkedin', 'id': 'founderandprinciple'},
			{'service': 'google_follow', 'id': '105256588269767640343'},
			{'service': 'google_follow', 'id': '116789643858806436996'}
		  ]
		},  
		'whatsnext' : {},  
		'recommended' : {
		  'title': 'Recommended for you:'
		} 
	  });
	</script>
	<!-- AddThis Smart Layers END -->
</head>
<body>
<div class="main">
    <h1><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</h1>
    <p>This is an API Service for conducting a whois on both IPv4, IPv6 and domain names. It provides a range of document standards for you to access the API inclusing JSON, XML, Serialisation, HTML and RAW outputs.</p>
    <p>You can access the API currently without a key or system it is an open api and was written in response to the many API Services that charge ridiculous amounts for querying such a simple base. The following instructions are how to access the api I hope you enjoy this api as I have writting it with the help of net registry.</p>
	<h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a href="<?php echo $source; ?>docs/" target="_blank"><?php echo $source; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <h2>RAW Document Output</h2>
    <p>This is done with the <em>raw.api</em> extension at the end of the url, you replace the example address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a domain of <em>'example.com'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/example.com/raw.api" target="_blank"><?php echo $source; ?>v1/example.com/raw.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv4 address of <em>'125.23.45.111'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/125.23.45.111/raw.api" target="_blank"><?php echo $source; ?>v1/125.23.45.111/raw.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv6 address of <em>'2001:0:9d38:953c:1052:39d8:8355:2880'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/raw.api" target="_blank"><?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/raw.api</a></strong></em><br /><br />
    </blockquote>
    <h2>HTML Document Output</h2>
    <p>This is done with the <em>html.api</em> extension at the end of the url, you replace the address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a domain of <em>'example.com'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/example.com/html.api" target="_blank"><?php echo $source; ?>v1/example.com/html.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv4 address of <em>'125.23.45.111'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/125.23.45.111/html.api" target="_blank"><?php echo $source; ?>v1/125.23.45.111/html.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv6 address of <em>'2001:0:9d38:953c:1052:39d8:8355:2880'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/html.api" target="_blank"><?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/html.api</a></strong></em><br /><br />
    </blockquote>
    <h2>Serialisation Document Output</h2>
    <p>This is done with the <em>serial.api</em> extension at the end of the url, you replace the address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a domain of <em>'example.com'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/example.com/serial.api" target="_blank"><?php echo $source; ?>v1/example.com/serial.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv4 address  of <em>'125.23.45.111'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/125.23.45.111/serial.api" target="_blank"><?php echo $source; ?>v1/125.23.45.111/serial.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv6 address of <em>'2001:0:9d38:953c:1052:39d8:8355:2880'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/serial.api" target="_blank"><?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/serial.api</a></strong></em><br /><br />
    </blockquote>
    <h2>JSON Document Output</h2>
    <p>This is done with the <em>json.api</em> extension at the end of the url, you replace the address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a domain of <em>'example.com'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/example.com/json.api" target="_blank"><?php echo $source; ?>v1/example.com/json.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv4 address  of <em>'125.23.45.111'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/125.23.45.111/json.api" target="_blank"><?php echo $source; ?>v1/125.23.45.111/json.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv6 address of <em>'2001:0:9d38:953c:1052:39d8:8355:2880'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/json.api" target="_blank"><?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/json.api</a></strong></em><br /><br />
    </blockquote>
    <h2>XML Document Output</h2>
    <p>This is done with the <em>xml.api</em> extension at the end of the url, you replace the address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a domain of <em>'example.com'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/example.com/xml.api" target="_blank"><?php echo $source; ?>v1/example.com/xml.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv4 address of <em>'125.23.45.111'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/125.23.45.111/xml.api" target="_blank"><?php echo $source; ?>v1/125.23.45.111/xml.api</a></strong></em><br /><br />
        <font color="#009900">This is for a IPv6 address of <em>'2001:0:9d38:953c:1052:39d8:8355:2880'</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/xml.api" target="_blank"><?php echo $source; ?>v1/2001:0:9d38:953c:1052:39d8:8355:2880/xml.api</a></strong></em><br /><br />
    </blockquote>
    <?php if (file_exists($fionf = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apis-labs.coop.html')) {
    	readfile($fionf);
    }?>	
    <?php if (!in_array(whitelistGetIP(true), whitelistGetIPAddy())) { ?>
    <h2>Limits</h2>
    <p>There is a limit of <?php echo MAXIMUM_QUERIES; ?> queries per hour. This will reset every hour and the response of a 404 document not found will be provided if you have exceeded your query limits.  You can add yourself to the whitelist by using the following form API <a href="https://whitelist.labs.coop/">Whitelisting form</a>. This is only so this service isn't abused!!</p>
    <?php } ?>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2012 and is part of the Chronolabs System and Xortify. if you need to contact simon you can do so at the following address <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
</div>
</html>
<?php 
