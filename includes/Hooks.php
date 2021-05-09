<?php
namespace PurgeVarnishCache;

use Title;

class Hooks {
	
	public static function onTitleSquidURLs( Title $title, array &$urls ) {
	    foreach( $urls as $url ) {
	        Utils::PurgeUrl($url);
	    }
	}
	
}