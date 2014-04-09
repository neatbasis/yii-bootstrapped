<?php
class UrlHelper extends CComponent{
	public static function currentPage($lang){
		$parts = parse_url(Yii::app()->request->requestUri);
		$queryParams = array();
		$queryString = '';
		if(isset($parts['query'])){
			parse_str($parts['query'], $queryParams);
			unset($queryParams['lang']);
			$queryString = http_build_query($queryParams);
		}

		$url = $parts['path'] . '?' . $queryString.'&lang='.$lang;
		return $url;
	} 
	/**
    * Makes the given URL relative to the /image directory
    */
    public static function imageUrl($url) {
        return Yii::app()->baseUrl.'/images/'.$url;
    }
}