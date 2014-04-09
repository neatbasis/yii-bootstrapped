<?php
class DateHelper extends CComponent{
	public static function formatDate($date, $lang='fi'){
		$locales = array('fi'=>'fi_FI','en'=>'en_GB','sv'=>'sv_SE');
		if(isset($locales[$lang]))
			setlocale(LC_TIME, $locales[$lang]);
		$format = 'Y-m-d H:i:s';
		$date = DateTime::createFromFormat($format, $date);
		$timestamp = $date->getTimestamp();

		return ucfirst(strftime(Yii::t('calendar',"c"),$timestamp));
	} 

}
