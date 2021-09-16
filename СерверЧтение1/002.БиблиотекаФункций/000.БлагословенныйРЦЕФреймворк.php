<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function strParType($_strParName)
	{
	$strParName	=$_strParName;
	       unset($_strParName);
	$strParType	=substr($strParName,0, 3);
	switch($strParType)
	    { //EN
	    case 'str': //String
		$strParType='str';
	    break;
	    case 'int': //Integer
		$strParType='int';
	    break;
	    case 'flo': //FLoat
		$strParType='flo';
	    break;
	    case 'arr': //Array
		$strParType='arr';
	    break;
	    case 'bIz': //Boolean
		$strParType='bIz';
	    break;
	    case 'obj': //Object
		$strParType='obj';
	    break;
	    case 'tmt': //Type my type
		$strParType='tmt';
	    break;
	    //RU
	    case 'с': //String
		$strParType='str';
	    break;
	    case 'ч0': //Integer
		$strParType='int';
	    break;
	    case 'ч1': //Integer
		$strParType='int';
	    break;
	    case 'д': //FLoat
		$strParType='flo';
	    break;
	    case 'м': //Array
		$strParType='arr';
	    break;
	    case 'ф': //Boolean
		$strParType='bIz';
	    break;
	    case 'о': //Object
		$strParType='obj';
	    break;
	    case 'тмт': //Type my type
		$strParType='tmt';
	    break;
	    //FR 
	    //case 'с': //String
	//	$strParType='str';
	//    break;
	//    case 'ч0': //Integer
	//	$strParType='int';
	//    break;
	//    case 'ч1': //Integer
	//	$strParType='int';
	//    break;
	//    case 'д': //FLoat
	//	$strParType='flo';
	//    break;
	//    case 'м': //Array
	//	$strParType='arr';
	//    break;
	//    case 'ф': //Boolean
	//	$strParType='bIz';
	//    break;
	//    case 'о': //Object
	//	$strParType='obj';
	//    break;
	//    case 'тмт': //Type my type
	//	$strParType='tmt';
	//    break;
	    }
	return $strParType;
	}
?>