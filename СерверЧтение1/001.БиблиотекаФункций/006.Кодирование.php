<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function сКодировать($_сСтрокаДляКодирования, $_сДействие='к', $_сКлючь="HiFiIntelligentClub") //E or  /d
	{
	unset($_сКлючь); //Depricated 28.august.2020 Hfic.Samin
	$сДляКодирования	=(string)$_сСтрокаДляКодирования;
	               unset($_сСтрокаДляКодирования);
	$сКлючь			=сКлючь();
	$сДействие		=$_сДействие;
		   unset($_сДействие);
    
	$сПослеКодирования	='';
    
	switch($сДействие)
	    {
	    case 'к':
	    break;
	    case 'д':
		$сДляКодирования=base64_decode(сПреобразовать($сДляКодирования,'вСтроку'));
	    break;
	    }
	$чДлинаКлюча		=strlen($сКлючь);
	    
	$чДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
	$чТекущаяПозицияКлюча		=0;
	for($чШаг=0;$чШаг<$чДлинаСтрокиДляКодирования;$чШаг++)
	    {
	    //echo '$сДляКодирования[$чШаг]^$сКлючь[$чТекущаяПозицияКлюча]'.$сДляКодирования[$чШаг].'-'.$сКлючь[$чТекущаяПозицияКлюча]."\n";
	    $сПослеКодирования.=$сДляКодирования[$чШаг]^$сКлючь[$чТекущаяПозицияКлюча];
	    if($чТекущаяПозицияКлюча==$чДлинаКлюча-1)
		{
		$чТекущаяПозицияКлюча=0;
		}
	    else
		{
		$чТекущаяПозицияКлюча++;
		}
	    }
	switch($сДействие)
	    {
	    case 'к':
		$сПослеКодирования=сПреобразовать(base64_encode($сПослеКодирования), 'вКоманду');
	    break;
	    case 'д':
	    break;
	    }
	return $сПослеКодирования;
	}
function сЕХЕ($_сСтрокаДляКодирования)
	{
	$сДляКодирования		=(string)$_сСтрокаДляКодирования;
	$сКлючь				=(string)сКлючь();
	$ч1ДлинаКлюча			=strlen($сКлючь);
	$ч1ДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
	$ч0ТекущаяПозицияКлюча		=0;
	for($ч0Шаг=0;$ч0Шаг<$ч1ДлинаСтрокиДляКодирования;$ч0Шаг++)
	    {
	    //$сКод	.=($сДляКодирования[$ч0Шаг]^$сКлючь[$ч0ТекущаяПозицияКлюча]).$сКлючь[$ч0ТекущаяПозицияКлюча];
	    $сКод	.=$сДляКодирования[$ч0Шаг].$сКлючь[$ч0ТекущаяПозицияКлюча];
	    if($ч0ТекущаяПозицияКлюча==($ч1ДлинаСтрокиДляКодирования-1))
		{
		$ч0ТекущаяПозицияКлюча	=0;
		}
	    else
		{
		
		$ч0ТекущаяПозицияКлюча++;
		}
	    }
	return	base64_encode($сКод);
	}
function сЕХЕ2($_сСтрокаДляКодирования)
	{
	$сДляКодирования		=(string)base64_decode($_сСтрокаДляКодирования);
	//$сКлючь				=(string)сКлючь();
	$сДействие			=$_сДействие;
	$ч1ДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
	$сКод				='';
	$odd				=0;
	for($ч0Шаг=0;$ч0Шаг<$ч1ДлинаСтрокиДляКодирования;$ч0Шаг++)
	    {
	    if($odd==0)
		{
		//$сКод	.=$сДляКодирования[$ч0Шаг]^$сДляКодирования[($ч0Шаг+1)];
		$сКод	.=$сДляКодирования[$ч0Шаг];
		$odd++;
		}
	    else
		{
		$odd=0;
		}
	    }
	return	$сКод;
	}
function strEncode2($_str)
	{//Testing with JSON with pleasure. Is not used often, but I using it sometimes,
	//instead of Ruslan Mihailovich Pegov (strLength/3, 3 bytes, [UTF-16?]) rule.
	$str=base64_encode($_str);
	$str=str_replace('=','ravno_', $str);
	return $str;
	}
function strEncode($_strString, $_strKey, $_strAct='e') //E or  /d
	{ //Depricated 28.august 2020 Hfic Samin
    
	$strString	=(string)$_strString;
	               unset($_strString);
	$strKey		=(string)$_strKey;
	                   unset($_strKey);
	$strAct		=$_strAct;
	       unset($_strAct);
	
	switch($strAct)
	    {
	    case 'e':
	    break;
	    case 'd':
		$strString=base64_decode(urldecode($strString));
	    break;
	    }
    
	$intKeyLength		=strlen($strKey);
	
	$intSourceStringLength	=strlen($strString);
	$strStringEncoded	='';
	$intKeyStep		=0;
	for($intI=0;$intI<$intSourceStringLength;$intI++)
	    {
	    $strStringEncoded.=$strString[$intI]^$strKey[$intKeyStep];
	    if($intKeyStep==$intKeyLength-1)
		{
		$intKeyStep=0;
		}
	    else
		{
		$intKeyStep++;
		}
	    }
	switch($strAct)
	    {
	    case 'e':
		$strStringEncoded=urlencode(base64_encode($strStringEncoded));
	    break;
	    case 'd':
	    break;
	    }
	return $strStringEncoded;
	}
    //
    //	Js Formatter
    //
?>
