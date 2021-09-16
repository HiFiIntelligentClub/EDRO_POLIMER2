<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function strGetDomainZone()
	{
	$strLang		=strGetDomainLang();
	if($strLang=='RU')
	    {
	    $strDomain='ru';
	    }
	elseif($strLang=='EN')
	    {
	    $strDomain='com';
	    }
	else
	    {
	    $strDomain='com';
	    }
	return $strDomain;
	}
function strGetDomainLang()
	{
	if(strpos(strtolower($_SERVER['SERVER_NAME']), 'hifiintelligentclub.ru')!==FALSE)
	    {
	    $strLang='RU';
	    }
	elseif(strpos(strtolower($_SERVER['SERVER_NAME']), 'hifiintelligentclub.com')!==FALSE)
	    {
	    $strLang='EN';
	    }
	elseif(strpos(strtolower($_SERVER['SERVER_NAME']), '192.168.1.198')!==FALSE)
	    {
	    $strLang='EN';
	    }
	elseif(strpos(strtolower($_SERVER['SERVER_NAME']), 'ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion')!==FALSE)
	    {
	    $strLang='EN';
	    }
	else	
	    {
	    $strLang='EN';
	    фОшибка('strGetDomainName():'.$_SERVER['SERVER_NAME'].$strLang.' do not have RU or COM suffix and dont 192.168.1.198 or onion');
	    }
	return $strLang;
	}
function strGetFallBackLanguage()
	{
	$strZone	=strGetDomainLang();
	if($strZone=='ru')
	    {
	    $strFallBackLang='RU';
	    }
	elseif($strZone=='onion')
	    {
	    $strFallBackLang='EN';
	    }
	elseif($strZone=='com')
	    {
	    $strFallBackLang='EN';
	    }
	else
	    {
	    $strFallBackLang='EN';
	    }
	return $strFallBackLang;
	}
?>