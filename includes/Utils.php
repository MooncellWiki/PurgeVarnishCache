<?php
namespace PurgeVarnishCache;

class Utils {
    
    public static function PurgeUrl( $url ) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PURGE");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('User-Agent: '. 'MediaWiki/' . MW_VERSION));
        curl_setopt( $curl , CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
    }
    
}