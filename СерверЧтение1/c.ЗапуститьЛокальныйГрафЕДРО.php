#!/usr/bin/php
<?php
///Сервер сеть
define('сКлючь'								, '4aPrIsAForaPr'						);

define('strProto'							, 'tcp'								);

//define('strAddr'							, '192.168.1.198'						);
define('strAddr'							, '127.0.0.1'							);
define('intPort'							, '60'								);
//define('strPort'							, '8080'							);
define('intReadBlockSize'						,  512								);
//vvv Протестировать
define('дТаймаут'							, -1								);

//Загрузчик

//define('сРасположениеБазовойСистемыЗагрузчик'				, '/home/EDRO.SetOfTools/1.Система/2.Loader/0.loader.php'	);

///define('сРасположениеБазовойСистемыЗагрузчикEDRO'			, '/home/EDRO.SetOfTools/1.Система/2.Loader/0.loader.php'	);

//define('сРасположениеРесурсы'						, '/home/EDRO.SetOfTools/2.Ресурсы'				);

//КИМ

//define('сРасположениеБазовойСистемыКириллИМефодий'			, '/home/EDRO.SetOfTools/1.Система/1.КиМ/0.КиМ.php'		);

//define('сРасположениеБазовойСистемыОповещенияАдминистратора'		, '/home/EDRO.SetOfTools/1.Система/0.ErrorReporter/0.Report.php');


//Журналы

//define('сШагЗаписьВЖурнал'						, '/home/EDRO.SetOfTools/4.Reports/Operations_report.txt'	);

//define('сШагЗаписьВЖурналОшибок'					, '/home/EDRO.SetOfTools/4.Reports/Error_report.txt'		);


//Журналы//Счётчики вход

define('сРасположениеБазовойСистемыСчётчикВход'				, '/home/EDRO.SetOfTools/3.Reports/0.CountUp/Вход.plmr'		);

define('сРасположениеБазовойСистемыСчётчикВходИстор'			, '/home/EDRO.SetOfTools/3.Reports/1.CountUpHistory/Вход.plmr'	);

//БазаДанных/о2о

//define('сРасположениеО2о'						, '/home/1.ЕДРО:ПОЛИМЕР2/СерверЧтение2/о2о.БазаДанных'		);
define('сРасположениеО2оDB'						, '/home/1.ЕДРО:ПОЛИМЕР2/СерверЧтение2/о2о.БазаДанных'		);
define('сНазваниеО2оDB'							, '/HiFiIntelligentClub'				);
define('cЗаписьО2о'							, '/0.О20'							);



//define('сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->'	, '/Roles'				);

//define('сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)'	, '/Listeners'				);
//define('сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)'	, '/Listeners'				);



/*сРасположение(о2о) 	= сРасп();
Наименование		= сНаимен();
ШтатнаяЕдиница		= ШтатЕд;
На Языке		= сНаЯз();
Число По Порядку	= чПоП();
строка 
() на ()		= например:cСтран('Малайзия' на Языке('Русский')) = 'Малайзия';




с(о2о)		   = '/home/ЕДРО:ПОЛИМЕР/о2о';

.---------------------------------------------------------------------------------------------------------------------------------------.
о2о ->сРасп('/home/о2о', cНаЯз('Русский'))
    ->cШтатЕд('Слушатель', cНаЯз('Русский'))
    ->сЯзык('Малазийский', cНаЯз('Русский'))
    ->сСтрана('Малайзия', cНаЯз('Русский'))
    ->чПоП(++);

|------------------		:----------------------------.------------------.--------------------.----------------------------------|
|       :  .                  .                    .                                  |
|                  		:Наименование('/Слушатель', )  .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|		                :                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |                  :                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |                  :                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  		:                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
|                  :                            .                  .                    .                                  |
сРасположение(о2о):Наименование(ШтатнаяЕдиница)
сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->
сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->
сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->
сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->
сРасположение(о2о):Наименование(ШтатнаяЕдиница).Наименование(Язык).Наименование(Страна).ПорядкНомер(РабочаяПапкаСлушателя)->
*/

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com
function э($_с)
	{
	print_r($_с);
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com
function эEDRO($arrE, $arrD, $arrR, $arrO)
	{
	echo"\n";
	echo'----E-------------------------------'."\n";
	foreach($arrE as $с1 => $с12)
		{
		if(is_array($с12))
			{
			foreach($с12 as $с121 => $с122)
				{
				echo strNDigit(40, $с1).strNDigit(30, $с121, 'fromEnd').strNDigit(40, $с122, 'fromEnd')."\n";
				}
			}
		else
			{
			echo strNDigit(40, $с1).strNDigit(40, $с12, 'fromEnd')."\n";
			}
		}
	echo'----D-------------------------------'."\n";
	foreach($arrD as $с2 => $с22)
		{
		echo strNDigit(40, $с2).strNDigit(40, $с22, 'fromEnd')."\n";
		}
	echo'----R-------------------------------'."\n";
	foreach($arrR as $с3 => $с32)
		{
		if(is_array($с32))
			{
			foreach($с32 as $с321 => $с322)
				{
				echo strNDigit(20, $с3).strNDigit(40, $с321, 'fromEnd').strNDigit(20, $с322, 'fromEnd')."\n";
				}
			}
		else
			{
			echo strNDigit(40, $с3).strNDigit(40, $с32, 'fromEnd')."\n";
			}
		}
	echo'----O-------------------------------'."\n";
	foreach($arrO as $с4 => $с42)
		{
		echo strNDigit(40, $с4)."\n";
		}
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com
function эСкорость($_НеизвестТипДанных)
	{
	print_r($_НеизвестТипДанных);
	}

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
class ОповещениеОшибка
	{
	private $E	= array(
			
			);
	private $D	= array(
			
			);
	private $R	= array(
			
			);
	public  $O	= array(
			
			);
	public function __construct($о=array())
		{
		///print_r($м);
		}
	public function _PushError($о)
		{
		э( __CLASS__);
		э($о);
		}
	}
function фОшибка($str)
	{
	echo $str."\n";
	return TRUE;
	}

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
class ОповещениеСостояние
	{
	private $E	= array(
			
			);
	private $D	= array(
			
			);
	private $R	= array(
			'strFunction' 		=> '',
			'strClass'		=> '',
			'strConditionName'	=> '',
			);
	public  $O	= array(
			'оСекундомер',
			);
	private function _VoidAuthorAndSystemName()
		{
		//system('clear');
		э('-------------------------------------------------------------------------------------------------------------------------------------------');
		э('----------=ЕДРО:ПОЛИМЕР II (Только чтение) © A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, hfic.samin@vk.com 2021=----------------');
		э('-------------------------------------------------------------------------------------------------------------------------------------------');
		э("\n");
		э("\n");
		}

	public function __construct($_strClass, $_strFunction, $о=array())
		{
		$this->R['strClass']		= $_strClass;
					    unset($_strClass);
		$this->R['strFunction']		= $_strFunction;
					    unset($_strFunction);

		$this->O['оСекундомер'] 	= new Секундомер($this->R['strClass'], $this->R['strFunction']);
		//print_r($о);
		}
	public function  _PushCondition($strConditionName)
		{
		$this->R['strConditionName']	= $strConditionName;

		$this->_VoidAuthorAndSystemName();
		э('-E--------------------------------------------------------------------D--------------------------------------------------------------------');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                 On aiR Only                                         ');
		э('                   Hello                                             -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                         Ori                                         -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('-R--------------------------------------------------------------------O--------------------------------------------------------------------');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -          1Mix.co.uk                                                 ');
		э('                                                                     -          https://www.facebook.com/oriuplift                         ');
		э('                                                                     -  Near|   https://HiFiIntelligentClub.com/Ori                        ');
		э('                                                                     -      |   https://HiFiIntelligentClub.com/OriUplift                  ');
		э('                 1Mix.co.uk                                          -  start   https://HiFiIntelligentClub.ru/Ori                         ');
		э('                                                                     -      |   https://HiFiIntelligentClub.com/OriUplift                  ');
		э('                                                                     -      |   https://Ori.HiFiIntelligentClub.com                        ');
		э('                                                                     -      |   https://OriUplift.HiFiIntelligentClub.com                  ');
		э('                                                                     -      v   ...HIC.com    after collecting some money                  ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('                                                                     -                                                                     ');
		э('-------------------------------------------------------------------------------------------------------------------------------------------');

		//эEDRO __CLASS__);<
		//print_r($о->O['оСекундомер']);
		эСкорость('Текущ: '.$this->O['оСекундомер']->sClass.'/'.$this->O['оСекундомер']->sFuncion.': '.$this->O['оСекундомер']->д4Итого);
		if(is_array($this->O['оСекундомер']->мОценка))
			{
			foreach($this->O['оСекундомер']->мОценка as $ч0 => $м)
				{
				if(is_array($м))
					{
					эСкорость('Превыш: '.$м['сМетод'].': '.$м['д4Итого']);
					}
				}
			}
		}
	}
function фОтчёт($str)
	{
	return TRUE;
	}

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

class OS
	{
	public function __construct()
		{
		}
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function нольЧИлиС($_сИмя, $_сДанные)
	{
	switch(strParType($_сИмя))
	    {
	    case 'int':
		if($_сДанные=='')
		    {
		    $сВыход		=0;
		    }
		else
		    {
		    $сВыход		=$_сДанные;
		    }
	    break;
	    case 'str':
		if($_сДанные=='')
		    {
		    $сВыход		="''";
		    }
		else
		    {
		    $сВыход		="'".str_replace("'","\'",$_сДанные)."'";
		    }
	    break;
	    }
	return $сВыход;
	}
function intRoundUp($_float)
	{
	$float	=$_float;
	   unset($_float);
	$intRoundedUp=FALSE;
	$intDotPos		=strpos($float,'.');
	if($intDotPos!==FALSE)
	    {
	    $float		=substr($float, 0, $intDotPos);
	    $float++;
	    $intRoundedUp	=$float;
	    }
	else
	    {
	    $intRoundedUp	=$float;
	    //$intPages
	    }
	return $intRoundedUp;
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function CheckMaSubstr($_сВход ,$int0Left, $int0Right)   //4 PHP brothers, it's very important to me, to use it with str_replace in common style. Thx. PHP is the best language. CheckMa CPU;
	{
	$_сВход		= substr($_сВход, $int0Left, $int0Right);
	return $_сВход;
	}
function rmLb($_str)
	{
	return str_replace($_str, array("\r","\n"), '');
	}
function фУникальный($мОбработанныеСвойства, $_сТекущееСвойство)
	{
	$ф=TRUE;
	if(empty($мОбработанныеСвойства))
	    {
	    return TRUE;
	    }
	$сТекущееСвойство	=$_сТекущееСвойство;
			   unset($_сТекущееСвойство);
	foreach($мОбработанныеСвойства as $сОбработанноеСвойство)
	    {
	    if(mb_strtolower(trim($сОбработанноеСвойство))==mb_strtolower(trim($сТекущееСвойство)))
		{
		return FALSE;
		}
	    else
		{
		$ф=TRUE;
		}
	    }
	return $ф;
	}
function сКодировка($с_Вход)
	{
	$чВыход		= FALSE;
	$ч1Длинна	= strlen($с_Вход);
	$сКодировка	= empty(substr($с_Вход, $ч1Длинна))?'Однобайтная':'Не однобайтная';
	if($сКодировка=='Не однобайтная')
	    {//Мы любим счастливых и уставших от прогулок грибников,
	    ///фОшибка($с_Вход.''.'Не однобайтная');
	    ///exit;
	    }
	return $сКодировка;
	}

function сНачОтСимвола($_сВход, $_сОт='?', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=1) // Слово  SAME FUNCTIONS 2
	{
	if(empty($_сВход)){return FALSE;}
	$сВход		= substr($_сВход, $_nu1BeginOffset);
	$сВход		= (string)$сВход;
	
	$фСимволНайден	= false;
	//echo $с_Символ."\n";
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$сСлово		= FALSE;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    //echo $сВход[$ч0Шаг]."\n";
	    if($сВход[$ч0Шаг]==$_сОт)
		{
		$фСимволНайден	=true;
		}
	    if($фСимволНайден)
		{
		$сСлово		.=$сВход[$ч0Шаг];
		}
	    }
	$сСлово	=substr($сСлово, $_nu1сОтPlusOffset);
	return $сСлово;
	}
function сНачДоСимвола($_сВход, $_сДо='?', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=0) // Слово  SAME FUNCTIONS
	{
	//if(empty($_сВход)||(strpos($_сВход, $_сДо)===FALSE)){return FALSE;}
	if(empty($_сВход)){return FALSE;}
	$сВход		= substr($_сВход, $_nu1сОтPlusOffset);
	$сВход		= (string)$сВход;
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$сСлово		= FALSE;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    $сСлово.=$сВход[$ч0Шаг];
	    if($ч0Шаг!=0&&($сВход[$ч0Шаг]==$_сДо))
		{
		$сСлово		=substr($сСлово,0,-1);
		return $сСлово;
		}
	    else
		{
		}
	    }
	return $сСлово;
	}
function сНачДоСлова($_сВход, $_сДо='da', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=0) // Слово  SAME FUNCTIONS
	{
	}

function сНачОтДоСимвола($_сВход, $_сОт, $_сДо, $_nu1BeginOffset=0, $_nu1сОтPlusOffset=1)
	{
	if(empty($_сВход)){return FALSE;}
	$сВход			= (string)$_сВход;
	$сОтДо			= FALSE;
	$сОт			= $_сОт;
	$сДо			= $_сДо;
	if($_nu1BeginOffset>0)
		{
		$nu1BeginOffset		= $_nu1BeginOffset;
		$сПослеСмещ		= substr($сВход, $nu1BeginOffset);
		}
	else
		{
		$сПослеСмещ		= $сВход;
		}
	if(strpos($сПослеСмещ, $сДо)===FALSE)
		{
		$сОтДо		= FALSE;
		}
	else
		{
		$сКонецСтр	= сНачОтСимвола($сПослеСмещ, $сОт);
		$сОтДо		= substr($сОтДо, $_nu1сОтPlusOffset);
		}
	return $сОтДо;
	}
function сРеверс($_сВход)
	{
	if(empty($_сВход)){return '';}
	$сВход		= (string)$_сВход;
	$сРеверс	= '';
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$ч0Позиция	= $ч0Длинна;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    $сРеверс	.=$сВход[$ч0Позиция];
	    $ч0Позиция--;
	    }
	return $сРеверс;
	}
function сКонцДоСимвола($_сВход, $_сДо)
	{
	if(strpos($_сВход, $_сДо)===FALSE){return FALSE;}
	$сВход	= сРеверс($_сВход);
	$сВход	= сНачДоСимвола($сВход, $_сДо);
	$сВход	= сРеверс($сВход);
	return 	$сВход;
	}
function сКонцОтДоСимвола($_сВход, $_сОт, $_сДо, $_nu1BeginOffset=1)
	{
	$сВход	= сРеверс($_сВход);
	$сВход	= сНачОтДоСимвола($сВход, $_сОт, $_сДо, $_nu1BeginOffset);
	$сВход	= сРеверс($сВход);
	return 	$сВход;
	}
function сНомерОбъекта($_сВход)
	{
	$сИмяДоТочки    	= сНачДоСимвола($_сВход, '.');
	$сИмяПослеТочки		= сНачОтСимвола($_сВход, '.');
	if(strpos($_сВход, ').')===FALSE)
		{
		return $сИмяДоТочки.' (0).'.$сИмяПослеТочки;
		}
	else
		{
		$ч0 = сКонцОтДоСимвола($сИмяДоТочки, '(', ')');
		if(is_int($ч0))
			{
			return str_replace(' ('.$ч0.')', ' ('.$ч0++.')', $сИмяДоТочки).'.'.$сИмяПослеТочки;
			}
		else
			{
			return $сИмяДоТочки.' (0).'.$сИмяПослеТочки;
			}
		}
	
	}
//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

// п - Полимер = комплексное число ((Сталь, Address),(Сталь, Адресс), (Варенье, Адресс), (Ситец, Адресс))
class CheckMaBrowser
	{
	public function __construct($пКИМСигнал)
		{

		}
	private function _ПолучитьКИМСигнал($п)
		{
		$strFile=file_get_contents('http://HiFiIntelligentClub.COM');
		}
	private function _ЗаписатьПросмматриваемуюСтраницу()
		{
		file_put_contents('/home/chekmarev/CheckMaBrowser/CheckMaView.html' ,$strFile);
		}
	}



//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function мУрлРазобратьПоток($_сВход) 	//Разобрать стрим. Сергею Корякину и его коллеге в Ролексе Вадим Раскумандрину
	{				//и Люсьене Гусевой из Лапси привет.:)
			//Алексу Соловьёву тоже привет и всем девчёнкам. Если я ещё раз у вас появлюсь,
			//скорее всего потому, что решил жениться на одной из вас, а может и на самой великой Люсьене, 
			//но мне кажется, она уже занята.  :)
			//Лучшие коляски, прошедшие краштест и дополнительный краштест в СПБ - это Lapsi.ru
			//Игорю Борисовичу тоже привет. Чекмарёв конкурентам не сдастся. Это все знают.
			//Согластно философии WhiteHat, если я зашёл на сайт и увидел ошибку, 
			//обязательно должен написать об этом.
			//Стараюсь на сайты вобще не ходить, но надо.
			//Хорошего дня.
	$м['strLinkAfter2Dot']	= сНачОтСимвола($_сВход, '/', 2);
	$м['strAddress']	= сНачОтДоСимвола($_сВход, '/', ':', 2);
	$м['intPort']		= сНачОтДоСимвола($м['strLinkAfter2Dot'], ';', '/', 1);
	if(strlen($м['intPort'])>6)
	    {
	    $м['intPort']	=FALSE;
	    }
	
	$м['strGet']		= сНачОтСимвола($_сВход, '/', 1);
	return $м;
	}
function фCreateListen_lnSock($_сВход)
	{
	э($_сВход);
	$ф			= FALSE;
	$мУрлПоток		= мУрлРазобратьПоток($_сВход);
	$intUDP			= 1;
	$strAddress		=$мУрлПоток['strAddress'];
	$intPort		=$мУрлПоток['intPort'];
	$strGet			=$мУрлПоток['strGet'];
	$intSockListen		= 3;
	$nu0			= 0;
    
	$lnSOCK	=socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	//echo 'http://'.$strAddress.':'.$intPort.'/'.$strGet."\n";
	if($intPort===FALSE)
	    {
	    if(fopen('http://'.$strAddress, "r")===FALSE)
		{
		//echo "fopen FALSE"."\n";
		$ф			= FALSE;
		//return FALSE;
		}
	    else
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    }
	else
	    {
	    $bIzSocket=socket_connect($lnSOCK, $strAddress, $intPort);
	    if($lnSOCK)
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    else
		{
		$ф			= FALSE;
		//echo "fopen FALSE"."\n";
		//return FALSE;
		}
	    if($bIzSocket)
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    else
		{
		$ф			= FALSE;
		//echo "fopen FALSE"."\n";
		//return FALSE;
		}
	    }
	if($ф)
	    {
	    э('Result TRUE');
	    }
	else
	    {
	    э('Result FALSE');
	    }
	return $ф;
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru


function arrAllEventIncomeParametrsFallBack()
	{
	$arrO	=  //[arrAction]['arrDesign']['strEvent']
	array(
	'arrReality'=>array(
		'strName'		=>array('int0FallBack'	=>'','int0MaxLength'	=>100,),//
		'strHiFiType'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
	//	'strStyle'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
		'strGenre'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
	//	'intBitrate'		=>array('int0FallBack'	=>'','int0MaxLength'	=>4,),
	//	'strCodec'		=>array('int0FallBack'	=>'','int0MaxLength'	=>16,),
		'int0Page'		=>array('int0FallBack'	=>0, 'int0MaxLength'	=>6,),
		'int1OnPage'		=>array('int0FallBack'	=>1, 'int0MaxLength'	=>3, 'int0MaxValue'	=>140,),
		'int1PlayingStationNum'	=>array('int0FallBack'	=>0, 'int0MaxLength'	=>10,),
		'strPlayingStationStyle'=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),
		'strPlayingStationId'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),
		'strListenerDate'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),),
        'arrObjects'		=>array(
		'arrEventData'		=>array('arrEN'		
							=>array('strAlias'	=>false, 'strTitle'	=>'Title',),
						'arrRU'			
							=>array('strAlias'	=>false, 'strTitle'	=>'Заголовок',),),
		'arrEventTestConditions'=>array('arrEventName'	
							=>array('int0MaxLength'	=>28,),
		'arrEventPage'		=>array('strFindTextToMarkExist' 	=>'HIC',),),
		'arrEventsOnErrors'	=>array('arrEventName'	
							=>array('strReport'		=>'Event name is too long.',
									'strPriority'		=>'Urgent',
									'сУмолч'		=>'/',),
		'arrEventPage'		=>array('strReport'		=>'Can not open event page: arrEventName',
						'strPriority'		=>'Urgent',
						'сУмолч'		=>'/',),),),
		);
	return $arrO;
	}

//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function фЖанрОтСлушателя($мВозможныеЖанры, $_сЖанрОтСлушателя)
	{
	$ф=TRUE;
	if(empty($мВозможныеЖанры))
	    {
	    return TRUE;
	    }
	//print_r($мОбработанныеСвойства);
	$сЖанрОтСлушателя	=$_сЖанрОтСлушателя;
		   unset($_сЖанрОтСлушателя);
	foreach($мВозможныеЖанры as $сВозможныйЖанр)
	    {
	    if($сВозможныйЖанр==$сЖанрОтСлушателя)
		{
		//echo'$сОбработанноеСвойство:';
		//echo$сОбработанноеСвойство."\n";
		//echo'$сТекущееСвойство:';
		//echo$сТекущееСвойство."\n"."\n";
		//echo $сОбработанноеСвойство."\n";
		//echo $сТекущееСвойство."\n"."\n";
		return FALSE;
		}
	    else
		{
		$ф=TRUE;
		}
	    }
	return $ф;
	}
function мЖанр_мЯзык_мТранскрипция($сВход) //inspired by Ferry Corsten and Armin van Buuren
	{// Function is in progress. Will be connected to ЕДРО:ПОЛИМЕР, to became complete solution.
	$сВозврат	=$сВход;
	$мСтильТрансЯз=
		array(
		'trance'=>array('транс', 'екфтсу', 'nhfyc', 'tranc', 'екфтс'),
		'techno'=>array('техно', 'nt[yj', 'еусртщ', 'tehno', 'еуртщ'),
		);
	foreach($мСтильТрансЯз as $сСтиль=>$мТрансЯз)
		{
		//$мСтильТрансЯз
		if(фУникальный($мТрансЯз, $сСтиль)===FALSE)
			{
			$сВозврат	=$сСтиль;
			}
		}
	return $сВозврат;
	}
function мФразы($_сФраза) // Could be inputed by anyone and after that used in pfrase. Inspired by Armin van Buuren programm, I have heard in record of hour programm on Trance.kG
	{
	//
	//$ч1Длинна	=strlen($_сФраза);
    
	///for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	//    {
	//    $сСлово		.=$_сВход[$ч0Шаг];
	//    echo $сСлово;
	//    }
	//$arrFreeSearchInputCharExpression=
	
	//foreach();
	//	{
	//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$2$3$4','Д');
	//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$3$4','р');
	//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$4','а');
	//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$3','м');
	//	}
	//$м[1]['Drum']['International']['arrPossible']	=array('D','Drum');
	//$м[1]['Drum']['International']['strMisstake']	=array('D?r?{u|a}?m?');
	//$м[1]['Drum']['EN']['arrPossible']		=array('D','Drum');
	//$м[1]['Drum']['EN']['strMisstake']		=array('D?r?{u|a}?m?');
	//$м[1]['Drum']['RU']['arrPossible']		=array('Д','Драм');
	//$м[1]['Drum']['RU']['strMisstake']		=array('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/','$1');
    
	//$м[1]['and']['EN']['arrPossible']		=array('&', "'&'");
	//$м[1]['and']['EN']['strMisstake']		=
	//$м[1]['and']['RU']['arrPossible']		=array('&', "'&'");
	//$м[1]['and']['RU']['strMisstake']		=
    
	//$м[1]['Bass']['EN']['strPossible']		=
	//$м[1]['Bass']['EN']['strMisstake']		=
	//$м[1]['Bass']['RU']['strPossible']		=
	//$м[1]['Bass']['RU']['strMisstake']		=
    
    
	//	=>'arrPossible'	=>array('Drum & Bass','D&B'),
	//		=>'strMisstake'	=>array('Drum & Base')
	//	);
	//$м[]=array('Top','100');
	//return $м;
	}
function cФразыЖанр_ИсправитьНаписание($_сВход) //Для предворительной обработки или пользовательского ввода, не для вывода в реальном времени кешированного каталога!
	{
	$мИсправить	=
	//Исправить	Исправлено
	array(
	    '&amp;'			=>'&', 
	    'hip hop'		=>'Hip-Hop', 
	    'drum and base'		=>'Drum and Bass',
	    "d'n'b"			=>'Drum and Bass',
	    "dnb"			=>'Drum and Bass',
	    "d&b"			=>'Drum and Bass',
	    'drum and bas'		=>'Drum and Bass',
	    'r@b'			=>'R&B',
	    "r'nb"			=>"R'n'B",
	    '70-80-90'		=>'70x 80x 90x',
	    '60-70-80-90-20хх'	=>'60x 70x 80x 90x 20хх',
	    '2000-x'		=>'2000x',
	    '.'			=>'',
	    '&#39;'			=>"'",
	    "90'S"			=>"90's",
	    "80's-90's-00's"	=>"80's 90's 00's"
	    );
	foreach($мИсправить as $сИсправить=>$сИсправлено)
	    {
	    if(strpos(mb_strtolower($_сВход), mb_strtolower($сИсправить))!==FALSE)
		{
		$_сВход		=str_replace($сИсправить, $сИсправлено, mb_strtolower($_сВход));
		}
	    }
	return $_сВход;
	}
function мФразы_ИзвлечьИзвестную($_сВход)
	{
	$мФраза['сЧист']	=$_сВход;
	$мФраза['мФразы']	=array();
	$мИзвестные	=
	array(
	    'Club House',
	    'Classics 60s',
	    'Classic Country',
	    'Classical Guitar',
	    'Hard Rock Classic',
	    'Rock Classic',
	    'Hard Rock',
	    'Classic Cello',
	    'Classic Hits',
	    'Classic Rock',
	    'Classic Punk',
	    'Classic Metal',
	    'Classic Christian',
	    'Easy Listening',
	    'Dance classics',
	    'Rap/Hip Hop',
	    'Reggae and Dancehall',
	    'Blues and Rock',
	    'Talk and Show',
	    'Trap and House', 
	    'Classic hits from the 70s',
	    'Classic Hits',
	    'Soul and Jazz', 
	    'Jungle and Bass',
	    'Rock and Roll' ,
	    'Rhythm and Blues', 
	    'Worship and Praise' ,
	    'Enlightement and truth', 
	    'B and R', 
	    'Drum & Bass',
	    'Drum And Bass', 
	    'Top 10', 
	    'Top 40', 
	    'Top 100', 
	    'O S T', 
	    'Progressive trance', 
	    'Progressive house',
	    'Музыка для души',
	    'Все и не только о чтении',
	    'Лучшая музыка и всех направлений'
	    );
	foreach($мИзвестные as $сИзвестная)
	    {
	    if(strpos(mb_strtolower($_сВход), mb_strtolower($сИзвестная))!==FALSE)
		{
		$_сВход			=str_replace($сИзвестная, '', $_сВход);
		$мФраза['сЧист']	=$_сВход;
		$мФраза['мФразы'][]	=$сИзвестная;
		}
	    }
	if(strpos(mb_strtolower($мФраза['сЧист']), 'and')!==FALSE)
	    {
	    фОшибка('And^ '.$мФраза['сЧист']);
	    //$мФраза['сЧист']	=str_replace(array('and','And','AND'), '', $мФраза['сЧист']);
	    }
	return $мФраза;
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru

function bIzCheckMaPhone($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if(strpos($strUserAgent, 'edro:polimer')!==false)
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzAndroid($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if(strpos($strUserAgent, 'android')!==false)
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzApple($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if((strpos($strUserAgent, 'ipad')!==false)||(strpos($strUserAgent, 'iphone')!==false)||(strpos($strUserAgent, 'ipod')!==false))
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzDesktop($мPlatform)
	{
	$bIz	=false;
	if(	!$мPlatform['bIzCheckMaTEl']&&
		!$мPlatform['bIzAndroid']&&
		!$мPlatform['bIzAppleMobile']&&
		!$мPlatform['bIzDesktop']&&
		!$мPlatform['bIzOther']
			)
		{
		$bIz	= true;
		}
	return $bIz;
	}
function arrUserAgent2Platform($_strHTTP_USER_AGENT)
	{
	$мPlatform	=
		array(
		'bIzCheckMaTEl'	=> FALSE,
		'bIzAndroid'		=> FALSE,
		'bIzAppleMobile'	=> FALSE,
		'bIzDesktop'		=> FALSE,
		'bIzOther'		=> FALSE,
		);
	if(bIzCheckMaPhone($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzCheckMaTEl']	= true;
		}
	elseif(bIzAndroid($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzAndroid']	= true;
		}
	elseif(bIzApple($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzAppleMobile']	= true;
		}
	elseif(bIzDesktop($мPlatform))
		{
		$мPlatform['bIzDesktop']	= true;
		}
	else
		{
		фОшибка('Unknown platform: '.$_strHTTP_USER_AGENT);
		$мPlatform['bIzOther']		= true;
		}
	return $мPlatform;
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function сПреобразовать($_сСтрока, $_сНаправление="вСтроку") //:вСтроку/вКоманду
	{
	$сСтрока		=$_сСтрока;
    
	if($_сНаправление=='вСтроку'||$_сНаправление=='вКоманду')
	    {
	    $сНаправление	=$_сНаправление;
		   unset($_сНаправление);
	    }
	$мПравилаПреобразования	=
		array(
		    "о18о"=> "http://",
		    "о19о"=> "https://",
		    "о20о"=> "<" ,
		    "о21о"=> ">" ,
		    "о60о"=> "«",
		    "о61о"=> "»", 
		    "о22о"=> "\"",
		    "о28о"=> "/" ,
		    "о29о"=> "\\",
		    "о24о"=> "?" ,
		    "о25о"=> "&" ,
		    "о26о"=> "=" ,
		    "о27о"=> " " ,
		    "о23о"=> "'" ,
		    "о40о"=> ",",  //
		    "о42о"=> "-",  //
		    "о43о"=> ".",  //
		    "о44о"=> "`",  //
		    "о55о"=> "´",
		    "о56о"=> "-",
		    "о57о"=> "~",
		    "о58о"=> ".",
		    "о59о"=> "’",
		    "о30о"=> ";",
		    "о32о"=> ":",
		    "о31о"=> "%",
		    "о33о"=> "[",  //To integrate
		    "о34о"=> "]",  //
		    "о35о"=> "(",  //To integrate
		    "о36о"=> ")",  //
		    "о62о"=> "{", 
		    "о63о"=> "}", 
		    "о37о"=> "?",  //To integrate
		    "о38о"=> "!",  //
		    "о39о"=> "*",  //
		    "о41о"=> "|",  //
		    "о45о"=> "~",  //
		    "о46о"=> "$",  //
		    "о47о"=> "#",  //
		    "о48о"=> "@",  //
		    "о49о"=> "+",  //
		    "о51о"=> "^",  //
		    "о52о"=> "%",  //
		    "о53о"=> "%",  //
		    "о54о"=> "№",  //63
		);
	foreach($мПравилаПреобразования as $сПреобразованноВКоманду=>$сПодлежитПреобразованиюВКоманду)
	    {
	    switch($сНаправление)
		{
		case 'вСтроку':
		    $сСтрока	=str_replace($сПреобразованноВКоманду, $сПодлежитПреобразованиюВКоманду, $сСтрока);
		break;
		case 'вКоманду':
		    $сСтрока	=str_replace($сПодлежитПреобразованиюВКоманду, $сПреобразованноВКоманду, $сСтрока);
		break;
		}
	    }
	return $сСтрока;
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
function strArrayRec2JS($_arrReality, $_strLayerName='', $bIzFormat=false, $strFormatLR='')
	{
	$bIzFormat	=bIzFormat();
	$strFormatLR	='<br/>';
	$strLayerName	=$_strLayerName;
	       unset($_strLayerName);
	$arrReality	=$_arrReality;
	       unset($_arrReality);
	$strType	='str';
	$strArray	='';
	if(!empty($strLayerName))
	    {
	    $arrReality	=$arrReality[$strLayerName];
	    }
	else
	    {
	    //$arrReality	=$arrReality;
	    }
	foreach($arrReality as $strName=>$tmtData)
	    {
	    $tmtData	=нольЧИлиС($strName, $tmtData);
	    $strType	=strParType($strName);
	    if($strType=='arr')
		{
		//print_r($arrReality);
		$strArray	.=$strName.'=';
		$strArray	.='{';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		$strArray	.=strArrayRec2JS($arrReality, $strName, $bIzFormat, $strFormatLR);
		$strArray	.='}';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		}
	    else
		{
		if($tmtData==='')
		    {
		    $tmtData="''";
		    }
		$strArray	.="'".$strName."'".':'.$tmtData.',';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		}
	    }
	$strArray	=substr($strArray, 0, -1);
	return $strArray;
	}
function strArray2JS($_arrReality, $_strArrName='')
	{
	//$bIzFormat	=false;
	$bIzFormat	=true;
	$strFormatLR	="\n".'<br/>';
	$strArrName	=$_strArrName;
	       unset($_strArrName);
    
	$str	.=$bIzFormat?$strFormatLR:'';
	$str	.=strArrayRec2JS($_arrReality, '', $bIzFormat, $strFormatLR);
	$str	.=$bIzFormat?$strFormatLR:'';
    
	$str	=str_replace(','.$strFormatLR.'}', $strFormatLR.'}', $str);
	return $str;
	}

//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

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

function strNDigit($_intN, $_str, $strPos="fromBegin", $_strNULLSymbol='_') //suffix/prefix
	{
	$intN		=$_intN;
	       unset($_intN);
	$str		=$_str;
	       unset($_str);
	$strNULLSymbol	=$_strNULLSymbol;
	       unset($_strNULLSymbol);
	$strAdd='';
	$strOverflowAlert		=':';
	if(strlen($str)>$intN)
	    {
	    $strOverflowAlert='*';
	    }
    
	for($intI=0;$intI<$intN;$intI++)
	    {
	    if(!isset($str[$intI]))
		{
		$strAdd.=$strNULLSymbol;
		}
	    }
	switch($strPos)
	    {
	    case 'fromBegin':
		$str=$strOverflowAlert.$strAdd.$str;
	    break;
	    case 'fromEnd':
		$str=$strOverflowAlert.$str.$strAdd;
	    break;
	    }
	return $str;
	}
function strNDigitVisible($_intN, $_str, $_strShowFrom='fromEnd')  //fromEnd/FromBegin
	{
	$intN		=$_intN;
	       unset($_intN);
	$str		=$_str;
	       unset($_str);
	$strShowFrom	=$_strShowFrom;
	       unset($_strShowFrom);
	switch($strShowFrom)
	    {
	    case 'fromBegin':
		$str=substr($str, 0, $intN);
	    break;
	    case 'fromEnd':
		$str=substr($str, -$intN);
	    break;
	    }
	return $str;
	}
function strNDigitMainTrace($_float)
	{
	$float=$_float;
	 unset($_float);
	$int=floor($float);
                 unset($float);
	$strNDigit=strNDigit(2, $int, 'fromBegin','0');
	if($int>5)
	    {
	    $strAlertPrefix='??:';
	    }
	elseif($int>=1)
	    {
	    $strAlertPrefix='_?:';
	    }
	else
	    {
	    $strAlertPrefix='__:';
	    }
	$str=$strAlertPrefix.$strNDigit;
	return $str;
	}
function strNDigitMicroTrace($_int)
	{
	$int=$_int;
           unset($_int);
	$strNDigit=strNDigit(3, $int, 'fromBegin','0');
	if($int>500)
	    {
	    $strAlertPrefix='??:';
	    }
	elseif($int>100)
	    {
	    $strAlertPrefix='_?:';
	    }
	else
	    {
	    $strAlertPrefix='__:';
	    }
	$str=$strAlertPrefix.$strNDigit;
	return $str;
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function чРосХэш($_сВход) // 
	{
	$мСлово		=array();
	$сСлово		='';
	if($_сВход==='')
	    {
	    return 0;
	    }
    
	$ч1Длинна	=strlen($_сВход);
	$ч0Длинна	=($ч1Длинна-1);
	$чСумма		=0;
	
	for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	    {
	    $чСумма		=($чСумма+ord($_сВход[$ч0Шаг]));
	
	    if(($ч0Шаг!=0&&$_сВход[$ч0Шаг]==" ")||($ч0Шаг==$ч0Длинна))
		{
		$чХэш		.=$чСумма.'Ф';
		$чСумма		=0;
		}
	    }
	return $чХэш;
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function мСобратьO2o($_сВход) // Слово
	{
	$мСлово		=array();
	$сСлово		='';
	if(empty($_сВход))
	    {
	    $мСлово[]='';
	    return $мСлово;
	    }
	
	$ч1Длинна	=strlen($_сВход);
	$ч0Длинна	=($ч1Длинна-1);
	
	for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	    {
	    $сСлово.=$_сВход[$ч0Шаг];
	    //echo $ч0Шаг;
	    //echo '<br>';
	    if(
	    $ч0Шаг!=0&&
		(
		$_сВход[$ч0Шаг]=="_"||
		$_сВход[$ч0Шаг]=="."
		)
	    )
		{
		$сСлово		=substr($сСлово,0,-1);
		$мСлово[]	=$сСлово;
		$сСлово		='';
		//echo $ч0Шаг;
		//echo '<br>';
		}
	    if($ч0Шаг==$ч0Длинна)
		{
		$мСлово[]	=$сСлово;
		}
	    }
	if(!isset($мСлово[1]))
	    {
	    фОшибка($_сВход.'не даёт второго значения О2О');
	    }
	return $мСлово;
	}


//http://hifiintelligentclub.com/strArtistName
//    ?strName			=
//    &strStyle			=
//    &strGenre			=trance
//    &strHiFiType		=/HiFi%20beginner
//    &intBitrate		=0
//    &strCodec			=
//    &int0Page			=38
//    &int1OnPage		=1
//    &int0PlayingStationNum	=
//    &strPlayingStationStyle	=
//    &strPlayingStationId	=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о
//    &strStationId		=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о

//$arrr = arrRestrictAndReportActionAndParametrs($_arrIncome=array());
//print_r($arrr);
function arrEventParams2Array($_strQuery)
	{
	$arrResult	=array();
	$strQuery	=$_strQuery;
		   unset($_strQuery);

	$arrQuery=arrPrepare($strQuery);
	               unset($strQuery);

	foreach($arrQuery as $strQuery)
		{
		$arrBeforeValidate		= arrPrepare2($strQuery);
		$strParamName			= $arrBeforeValidate[0];
		$strParamValue			= $arrBeforeValidate[1];
		$arrResult[$strParamName]	= urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
		}
	$arrResult	= arrRestrictAndReportEventsAndParametrs($arrResult);
	return $arrResult;
	}
function arrPrepare($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	
	if(strpos($strQuery, '&'))
		{
		$arrQuery	= explode('&', $strQuery);
		}
	elseif(strpos($strQuery, '='))
		{
		$arrQuery[0]	= $strQuery;
		//$arrQuery=explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
function arrPrepare2($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	if(strpos($strQuery, '='))
		{
		$arrQuery	= explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
function arrRestrictAndReportEventsAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		= '';
	$arrResult['arrReality']	= array();
	$arrFallBack			= arrAllEventIncomeParametrsFallBack();
	//$arrFallBack['arrFallBack']

	if(is_array($_arrIncome))
		{
		$arrIncome['arrReality']	= $_arrIncome;
				   unset($_arrIncome);
		}
	else
		{
		$arrIncome		= array();
		}
	$strReplaceName			= $_strReplaceName;
				    unset($_strReplaceName);
	$strReplaceValue		= $_strReplaceValue;
				    unset($_strReplaceValue);
	foreach($arrFallBack['arrReality'] as $strFallBackName=>$arrFallBackParams)
		{
		$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['int0FallBack']; //attach strFaallBack(defaults)

		foreach($arrIncome['arrReality'] as $strIncomeName=>$strIncomeValue)
			{
			if($strFallBackName==$strIncomeName)
				{
				if(isset($arrFallBackParams['int0MaxValue'])&&($strIncomeValue>$arrFallBackParams['int0MaxValue']))
					{
												фОшибка($strIncomeName.'>'.$arrFallBackParams['int0MaxValue'].': '.$strIncomeValue);
					$strIncomeValue						= $arrFallBackParams['int0MaxValue'];
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
	    				}
				if(isset($arrFallBackParams['int0MaxLength'])&&(strlen($strIncomeValue)>$arrFallBackParams['int0MaxLength']))
					{
												фОшибка($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBackParams['int0MaxLength']);
					$strIncomeValue						= substr($arrIncome['arrReality'][$strIncomeName],0, $arrFallBackParams['int0MaxLength']);
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				else
					{
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				}
			}
		}
	//print_r($arrResult);
	//exit;
	return $arrResult['arrReality'];
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021

function arrEventLink($_arrReality, $_strGroove, $_strGrooveData='', $_bIzClearName=false, $strPage=0)
	{
	$str;
	
	if(is_array($_arrReality))
	    {
	    $arrLinks	=$_arrReality;
		   unset($_arrReality);
	    }
	else
	    {
	    $arrLinks	=array();
	    }
	$strGrooveData		=$_strGrooveData;
	$strGrooveDataCmd	=сПреобразовать($_strGrooveData, "вКоманду");
			  unset($_strGrooveData);
	$strEventLink		='';
	$strEventParams		='objEvent.arrReality={';
	$strSearchParams	='';
    
	foreach($arrLinks as $strName=>$strData)
	    {
	    $strDataCmd	=сПреобразовать($strData, "вКоманду");
	    
	    if($strName==$_strGroove)
		{
		$strEventLink	.='&'.$strName.'='.$strGrooveDataCmd;
		$strEventParams	.=$strName.':'.нольЧИлиС($strName, $strGrooveData).',';
		}
	    else
		{
		if($strName=='int0Page')
		    {
		    $strData=0;
		    }
		$strEventLink	.='&'.$strName.'='.$strDataCmd;
		$strEventParams	.=$strName.':'.нольЧИлиС($strName, $strData).',';
		}
	    }
	    $strEventParams	=substr($strEventParams, 0, -1);
	    $strEventParams	.='};';
	    //$strEventParams	.='this.className	+=" loading"';
	    $strEventParams	.='objEvent._ActualizeSearch();';
	    $strEventParams	.='objEvent._UpdateURLDyn(true, this);';
	    
	    $strEventParams	.='return false;';
	    $arr['strHref']		=' href="/search?'.substr($strEventLink, 1).'" ';
	    $arr['strOnClick']	=' onClick="'.$strEventParams.'" ';
    
	    //$arr['strHref']
	    //$arr['strOnClick']
	    // 'onClick="'.$strEventParams.'";';
	    //echo $arr['onClick'];
	return $arr;
	}
function strEventLink($arr)
	{
	return ' '.$arr['strHref'].' '.$arr['strOnClick'].' ';
	}
    //
    //	Управляющий сигнал
    //
function strQuery($_strEvent, $_strRequest)
	{
	$strEvent=$_strEvent;
	    unset($_strEvent);
	//$strEvent=substr($_strEvent,1);
	
	$intEventLen=strlen($strEvent);
	$strQurey=substr($_strRequest,$intEventLen);
	return substr($strQurey,1);
	}

function strCheckEvent($strEvent)
	{
	if(is_file(сРасположениеО2оDB.'/'.strDataBase.'/Events/'.сПреобразовать($strEvent, "вКоманду").'/run.php'))
		{
		$strEvent		= $strEvent;
		}
	else
		{
		фОшибка('Событие не сществует в реальности!: '.$strEvent);
		$strEvent		= '/';
		}
	return $strEvent;
	}

//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function фДубль($_м_мСтанция, $_мСтанция, $_strGenre) // ifDoubles - will compare all genres of station and station name. 
	{//If equal - will be listed as different bitrate of the parent station. FallBack is higher bitrate.
	// Если название и жанры у станций одинаковы, значит станции одинаковы и будут отображаться, 
	//как разные битрейты станции с таким-же названием.
	$ф=FALSE;
	foreach($_м_мСтанция as $мСтанция)
	    {
	    if( 
		($мСтанция['id']	==	$_мСтанция['id'])	&&
		($мСтанция['genre']	==	$_strGenre)		&&
		($мСтанция['name']	==	$_мСтанция['server_name'])
	    )
		{
		$ф=TRUE;
		фОшибка("Найден дубль: ".$_мСтанция['id'].":/".$мСтанция['server_name'].'/'.$_strGenre);
		break;
		}
	    else
		{
		//$ф=FALSE;
		}
	    }
	return $ф;
	}
function сДляСравнения($сВход)
	{
	//радостно слушающих музыку, по всему миру.
		//Что бы не случилось. Хорошая Музыка выручит душу из любых передряг, 
		//может даже вернёт в этот мир......
		//Mr Hfic Samin after "Groove Jet" trip:
		//Jog dial was funny. Small Krz* LCD display was very, very big!!!
		//	noughty blue, right behinde my face, and the JOG DIAL itself, imagination 
		//	flash..where some where in my hand........ooogh! ..... but......
		//	all music were so silly cool, that i was laoghting all day long. Like!:))
		//	Where were no silences or pauses. Every touch works perfect.
		//	Only positive memories. Good emotions for me and my friends.
	
		//Mr Hfic Samin after "No f*cking developers maked their job right, b*t!" 
		//trip:
		//	Music stops. I can't start it again. Than, can't stop.....
		//	Carpets were like in the stomach of a monster......
		//	Bad day! Bad emotions! But.... Carpets and mobile is in a trashcan....
		//	Negative balance.
		//My figure prefere the first one.  Hfic.Samin. 2020
	$сВход	=str_replace($сВход, array( '.', ';', '@', ' '), '');
	return strtolower($сВход);
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021

function мСобратьФразы($_сВход, $_сБолМал='НеТрог') //'Бол'/'Мал'/'НеТрог'/'МалДиректор'
	{
	//echo $_сВход;
	//exit;
	$мСлово		=array();
	$мФраза		=array();
	$сСлово		='';
	if(empty($_сВход))
	    {
	    return $мФраза;
	    }
	$//_сВход		=cФразыСтиль_ИсправитьНаписание($_сВход);
	$_сВход		=cФразыЖанр_ИсправитьНаписание($_сВход);
	$мВход		=мФразы_ИзвлечьИзвестную($_сВход);
		    	   unset($_сВход);
	$сВход		=$мВход['сЧист'];
	
	//$сВход		=$сВход.' ';
	$мФраза		=$мВход['мФразы'];
		   unset($мВход);
	$ч1Длинна	=strlen($сВход);
	$ч0Длинна	=($ч1Длинна-1);
	
	for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	    {
	    $сСлово		.=$сВход[$ч0Шаг];
	    if(
	    ($ч0Шаг!=0)&&
		(	
		($сВход[$ч0Шаг]==" ")||
		($сВход[$ч0Шаг]==".")||
		($ч0Шаг==$ч0Длинна)
		)
		    )
		{
		$сСлово		=substr($сСлово,0,-1);
		if(фУникальный($мСлово, $сСлово)!==TRUE)
		    {
		    фОшибка('Дубль: '.$сВход.' -> '.$сСлово);
		    }
		else
		    {
		    switch($_сБолМал)
			{
			case 'Бол':
			    $мСлово[]	=mb_strtoupper($сСлово);
			break;
			case 'Мал':
			    $мСлово[]	=mb_strtolower($сСлово);
			break;
			case 'НеТрог':
			    $мСлово[]	=$сСлово;
			break;
			case 'МалДиректор':
			    $мСлово[]	=сПреобразовать(mb_strtolower($сСлово), "вКоманду");
			break;
			}
		    }
		    $сСлово		='';
		}
	    }
	    /*echo'<pre>';
	    print_r($мСлово);
	    echo'</pre>';*/
	$мФраза		=$мСлово;
	    //28 august 2020 Hfic Samin simplified solution. Will be beter next time. 
	    //I doo my fast, as fast as possible. Extra fast. Extra thrust. 
	    //Trust no one. Dj will save my soul today for vacancies. I hope it will....  :) 
	    //Today is the last day. So it will not end without update packege. 
	    //Make it good. We too.
	return $мФраза;
	}
//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

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

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
		    //$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
//function сПреобразовать($_str)
//	{
//	str_replace('"','',$_str);
//	return $str;
//	}
//echo  $strJSON	=MyJSON::str(array(
//			'arrJSON'=>
//			array(
//				'a'=>'asdasd', 
//				'asd'=>
//				array(
//					'a'=>
//					array(
//					'a'=>'aaa'
//					)
//				)
//			)
//		));

class MyJSON
	{
	public $str	='';
	public $arr	=array();
	public function __construct(
		$_arrData=
		array(
			'arrJSON'=>array(),
			'strJSON'=>''
			)
		)
		{
		
		if(!empty($_arrData['arrJSON'])&&is_array($_arrData['arrJSON']))
			{
			$this->str	=$this->strMyJSONRec(($_arrData['arrJSON']));
			}
		}
	private function strMyJSONRec($_arrJSON)
		{
		if(is_array($_arrJSON))
			{
			$str	='{';
			foreach($_arrJSON as $srtName=>$_Value)
				{
				if(!is_int($srtName))
					{
					$str	.='"'.сПреобразовать($srtName, "вКоманду").'":';
					}
				if(is_array($_Value))
					{
					$str	.=$this->strMyJSONRec($_arrJSON[$srtName]);
					}
				else
    					{
					$str	.='"'.сПреобразовать($_Value, "вКоманду").'", ';
					}
				}
			$str	=substr($str,0,-2);
			$str	.='}, ';
			}
		return $str;
		}
	public static function str($_arrJSON)
		{
		$objMyJSON	=new MyJSON($_arrJSON);
		return substr($objMyJSON->str,0,-2);
		}
	public static function arr()
		{
		}
	}
function strMyJsonRec($_arrJson)
	{
	if(is_array($_arrJson))
	    {
	    $str	='{';
	    foreach($_arrJson as $srtName=>$_Value)
		{
		if(!is_int($srtName))
		    {
		    $str	.='"'.сПреобразовать($srtName, "вКоманду").'":';
		    }
		if(is_array($_Value))
		    {
		    $str	.=strMyJsonRec($_arrJson[$srtName]);
		    }
		else
		    {
		    $str	.='"'.сПреобразовать($_Value, "вКоманду").'", ';
		    }
		}
	    $str	=substr($str,0,-2);
	    $str	.='}, ';
	    }
	return $str;
	}
function strMyJson($_arrJson)
	{
	return substr(strMyJsonRec($_arrJson),0,-2);
	}

		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
		    //$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
class MyXML
	{
	private $bTagIn		=false;
	private $int0TagOpen	=0;
	private $int0TagClose	=0;
	private	$strInTag	='';
	private	$strTagOpen	='';
	public $arrTag		=array();
	public function __construct($strXML, $strTagOpen)
		{

		$strXML			=(string)$strXML;
		$arrOpen['str']		=(string)'<'.$strTagOpen.'>';
		$arrOpen['len']		=strlen($arrOpen['str']);
		$arrClose['str']	=(string)'</'.$strTagOpen.'>';
		$arrClose['len']	=strlen($arrClose['str']);
		$strIn			='';
		$int1Length=strlen($strXML);
		$bTagIn		=false;
		$bTagOut	=false;
		$intTag		=0;
		$arrTag		=array();
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			//echo $intI;
			if($strXML[$int0I]==$arrOpen['str'][$this->int0TagOpen])
				{
				$this->int0TagOpen++;
				}
			else
				{
				$this->int0TagOpen=0;
				}
			if($strXML[$int0I]==$arrClose['str'][$this->int0TagClose])
				{
				$this->int0TagClose++;
				}
			else
				{
				$this->int0TagClose=0;
				}
			if($this->int0TagOpen==$arrOpen['len'])
				{
				$this->int0TagOpen	=0;
				$bTagIn			=true;
				$bTagOut		=false;
				}
			if($this->int0TagClose==$arrClose['len'])
				{
				$strTagString					=substr($strIn,1,(-$arrClose['len']+1));
				if($strTagOpen=='entry')
					{
					}
				else
					{
					$arrTag[$strTagOpen]['str']			=$strTagString;
					}
				//$arrTag[$strTagOpen]['str']			=substr($strIn,1,(-$arrClose['len']+1));
				$arrTags					=$this->arrTagName($strTagString);
				if(!empty($arrTags))
					{
					foreach($arrTags as $strTag)
						{
						$arrTag[$strTagOpen][$strTag]	=MyXML::arr($strTagString, $strTag)[0]['str'];
						}
					}
				//$arrTag[$strTagOpen]['server_name']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_name');
				//$arrTag[$strTagOpen]['server_type']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_type');
				//$arrTag[$strTagOpen][$intTag]['bitrate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'bitrate');
				//$arrTag[$strTagOpen][$intTag]['samplerate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'samplerate');
				//$arrTag[$strTagOpen][$intTag]['channels']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'channels');
				//$arrTag[$strTagOpen][$intTag]['listen_url']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'listen_url');
				//$arrTag[$strTagOpen][$intTag]['current_song']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'current_song');
				//$arrTag[$strTagOpen][$intTag]['genre']		=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'genre');
				$this->arrTag[]					=$arrTag[$strTagOpen];
				$intTag++;
				$strIn			='';
				$this->int0TagClose	=0;
				$bTagIn			=false;
				$bTagOut		=true;
				}
			if($bTagIn)
				{
				$strIn	.=$strXML[$int0I];
				}
			else
				{
				}
			//echo $strIn;
			}
		}
	private function arrTagName($strXML)
		{
		$arr			=array();
		$strArrType		='';
		$int0Arr		=0;
		$int0ArrLength		=0;
		$strArr			='';
		$strXML			=(string)$strXML;
		$int1Length		=strlen($strXML);
		$bTagIn			=false;
		$bTagOut		=false;
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			if($strXML[$int0I]=='<')
				{
				$bTagIn		=true;
				}
			if(($strXML[$int0I]=='>'||$strXML[$int0I]==' '||$strXML[$int0I]=="\n")&&$bTagIn)
				{
				if($strArr[1]=='/')
					{
					}
				else
					{
					$arr[$int0Arr]	=substr($strArr,1,$int0ArrLength);
					}
				$strArr		='';
				$int0ArrLength	=0;
				$int0Arr++;
				$bTagIn		=false;
				}
			if($bTagIn)
				{
				//if($strXML[$int0I]=='/')
				//	{
				//	$strArrType	='Open';
				//	}
				$strArr		.=$strXML[$int0I];
				$int0ArrLength++;
				}
			}
		return 		$arr;
		}
	public static function arr($strXML, $strTagOpen)
		{
		$objTag	= new MyXML($strXML, $strTagOpen);
		return $objTag->arrTag;
		}
	}

//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
function сВЗаголовок($_с)
	{
	$с	= сРазделитьПередЗаглавной(substr($_с, 3, strlen($_с)));
	
	return $с;
	}
function сРазделитьПередЗаглавной($_сВход, $_сРазделить='-', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=0) // Слово  SAME FUNCTIONS
	{
	//if(empty($_сВход)||(strpos($_сВход, $_сДо)===FALSE)){return FALSE;}
	if(empty($_сВход)){return FALSE;}
	$сВход		= substr($_сВход, $_nu1сОтPlusOffset);
	$сВход		= (string)$сВход;
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$сСлово		= FALSE;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    $сСлово.=$сВход[$ч0Шаг];
	    if($ч0Шаг!=0 && ctype_upper(сВход[$ч0Шаг]))
		{
		$сСлово		= substr($сСлово,0,-1).$_сРазделить.сВход[$ч0Шаг];
		}
	    else
		{
		}
	    }
	return $сСлово;
	}
 
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com
function д4Время()
	{
	return round(microtime(true), 4);
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
//$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
//					$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
//					$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
class Секундомер
	{
	private  $м		= array();
	private  $д4Старт	= 0.00;
	private  $д4Стоп	= 0.00;
	public   $д4Итого 	= 0.00;
	public  $sClass		= '';
	public  $sFuncion	= '';
	public   $мОценка	= array();											// o20
	public function __construct($sClass, $sFuncion)                                            		//	><	//  .  .      //////// /
		{       
		$this->sClass	= $sClass;                                                      		//	Роскосмос . >< .
		$this->sFuncion = $sFuncion;
		//switch($сЕсли, $сОценкаДля= ОблакоРегРу480рВМес)                                          /////   ......    //     ////
		//	{                                                              		 //////////    / .      .  /         /
			                                                               		////////....../ .        . /////   / 
		$this->м[$sClass]['д4Вкл']	= д4Время();                                        //                       .      .
			        					//	              //           ....
		}											/////////
	public function _Старт($sClass, $sFuncion)							//
		{											// new Скорость
		$this->м[$sClass][$sFuncion]['д4Старт']	= д4Время();
		$д4Старт				= $this->м[$sClass]['д4Вкл'];
		$д4Стоп					= $this->м[$sClass][$sFuncion]['д4Старт'];
		$this->д4Итого				= round($д4Стоп	 - $д4Старт, 4);
							$this->_Оценка();
		}
	public function _Стоп($sClass, $sFuncion)
		{
		$this->м[$sClass][$sFuncion]['д4Стоп']	= д4Время();
		$д4Старт				= $this->м[$sClass][$sFuncion]['д4Старт'];
		$д4Стоп					= $this->м[$sClass][$sFuncion]['д4Стоп'];
		$this->д4Итого				= round($д4Стоп - $д4Старт, 4);
							$this->_Оценка();
		///print_r($this);
		}
	private function _Оценка()
		{
		if($this->д4Итого>0.01)
			{
			$this->мОценка[]		= array(
							'сМетод'	=> $this->sClass.'/'.$this->sFuncion,
							'д4Итого'	=> $this->д4Итого
							);
			}
		}
	}

//
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//
$str='
<style>
	/*EDRO father*/
	body		{font-family:sans-serif;}'.
	'/*Vertical*/
	.V100		{top	: 0px;}
	.V99		{top	: 20px;}
	.V98		{top	: 40px;}
	.V97		{top	: 60px;}
	.V96		{top	: 80px;}
	.V95		{top	: 100px;}
	.V94		{top	: 120px;}

	.V50pc 		{bottom	: 50%;}

	.V8 		{bottom	: 160px;}
	.V7 		{bottom	: 140px;}
	.V6 		{bottom	: 120px;}
	.V5 		{bottom	: 100px;}
	.V4 		{bottom	: 80px;}
	.V3 		{bottom	: 60px;}
	.V2 		{bottom	: 50px;}
	.V1 		{bottom	: 10px;}
	.V0 		{bottom	: 0px;}


	/*Horizontal*/
	.HL0		{left	: 0px;}
	.H035pc		{left	: 35%;}
	.HR0		{right	: 0px;}

	/*//EDRO page elements*/
	.halfLine,		.L0	{height:10px;line-height:10px;font-size:xx-small;}
	.line	, 		.L1	{height:20px;line-height:19px;font-size:x-small	;}
	.doubleLine,		.Lx2	{height:40px;line-height:18px;font-size:large	;}
	.doubleLineLargeText,	.Lx2t2	{height:40px;line-height:36px;font-size:xx-large;}
	.tripleLine,		.Lx3	{height:60px;line-height:18px;font-size:large	;}
	.line,			.L1	{height:20px;line-height:19px;font-size:x-small	;}
	.doubleLine,		.L2	{height:40px;line-height:18px;font-size:large	;}
	.doubleLineLargeText,	.L3	{height:40px;line-height:36px;font-size:xx-large;}
	//Dhort long etc...

	/*//EDRO line elements*/
	.halfLineButton		{height:10px;line-height:10px;font-size:xx-small;}
	.lineButton		{height:20px;line-height:18px;font-size:small	;}
	.doubleLineLargeButton	{height:39px;line-height:36px;font-size:x-large	;}

	//Dhort long etc...

	/*//EDRO matrix*/

	/*/ Margins /*/
	.ML		{margin-left	: 4px;}
	.ML1		{margin-left	: 4px;}
	.MR		{margin-right	: 4px;}
	.MR1		{margin-right	: 4px;}
	/*/ Margins /*/


	/*EDRO base*/
	window 		{} /*Not configured yet. Will be in a future.*/
	.block,.brick	{display:block; overflow:hidden;}
	.inline		{display:inline-block;overflow:hidden;}
	.hidden		{display:none!important;}
	.transparent	{opacity:0;}
	.rel		{display:block; position:relative;}
	.abs		{display:block; position:absolute;}
	.fix		{display:block; position:fixed;}
	.fixed		{display:block; position:fixed;}
	.left		{float:left;}
	.right		{float:right;}
	.cursor		{cursor:pointer;}
	.hide		{display:none!important;}
	.scrollerY	{overflow-x:hidden;overflow-y:scroll;}
	.scrollerX	{overflow-y:hidden;overflow-x:scroll;}
	scrollerY	{overflow-x:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch;}
	scrollerX	{overflow-y:hidden;overflow-x:scroll;-webkit-overflow-scrolling:touch;}
	.scrollerGlide	{-webkit-overflow-scrolling:touch;}
	.border,	.BO	{border:	1px solid #1a1a1a4a;}
	.border-bottom,	.BBV	{border-bottom: 1px solid #1a1a1a4a;}
	.border-top,	.BTA	{border-top: 	1px solid #1a1a1a4a;}
	.border-left,	.BLL	{border-left:	1px solid #e2e2e2;}
	.border-right,	.BRJ	{border-right:	1px solid #e2e2e2;}
	.BRJ2			{border-right:	1px solid #868686;}
	.BLL2			{border-left:	1px solid #868686;}
	.loading		{background-color:grey;color:white}
	paragraph	{display:block;float:left;width:40px;height:10px;}
	.RTL_LTR	{text-align: center;}
	/*//EDRO touch*/
	sensor.small{width:60px;height:60px;user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	.sensor{cursor:pointer;user-select:none;-webkit-user-select:none;-ms-user-select:none;};
	.touch-active:hover{border-color:green!important;}
	.touch-active:active{border-color:red!important;}
	.no-select{user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	/*//EDRO touch*/

	.groundLand	{background-color:rgba(255,255,255,0);}
	.groundFly	{background-color:rgba(255,255,255,0.7);}

					
	.PlayTC1	{color			:#000;}
	.PlayBC1	{background-color	:#FFF;}

	.PlayTC2	{color			:#000;}
	.PlayBC2	{background-color	:yellow;}

	.PlayTC3	{color			:#000;}
	.PlayBC3	{background-color	:#2d90f5;}

	.PlayTC4	{color			:#000;}
	.PlayBC4	{background-color	:#FFF;}

	.BC0	{background-color	:#FFF;}
	.TC1	{color			:#000;}
	.BC1	{background-color	:#F4F4F4;}

	.TC2	{color			:#FFF;}
	.BC2	{background-color	:#575757;}

	.TC3	{color			:#FFF;}
	.BC3	{background-color	:#000;}

	.tcenter	{text-align:center;}
	.tleft		{text-align:right;}
	.tright		{text-align:left;}

	 /*//EDRO base*/

	/*Overlay*/
	.loading overlay{display:block;}
	.loaded overlay {opacity:0!important;visibility:hidden!important;transition: visibility 0s linear 0.9s, opacity 0.9s ease-in-out;}
	/*Overlay*/

	 /*//EDRO sensor*/
	a.sensor				{text-decoration:none;}
	sensorHorizontalRotate 			{overflow-y:hidden;overflow-x:scroll!important;-webkit-overflow-scrolling:touch;user-select:none;-webkit-user-select:none;-ms-user-select:none;cursor:pointer;}
	sensorButton, .sensorButton		{cursor:pointer;}
	sensorHorisontalDisplay			{font-weight:lighter;}
	sensorHorisontalDisplay .selected	{font-weight:normal;color:#000;padding-left:3px;padding-right:3px;}
	 /*//EDRO sensor*/
	/*

	/*EDRO Language*/
	© A.A.CheckMaRev tubmulur@yandex.ru 2020

	MasterMoodSetter: EDRO Language selector. 
	1.Master flag is a mood setter. 
	2.Followers nodes are started with "if" prefix
		after setting Master mood flag,
		followers will form as Master mood setter flag desires.  
	
	Example:
		1. If we set master mood setter flag to EN:
			set MasterMoodSetter="EN";
		   We will get all followers showing only ifEN blocks.
			set MasterMoodSetter=EN,RU
		   We will get all followers showing only ifEN and ifRU blocks forever.
	*//*
	Система расчёта темплейта для 7 языков. Аист.
      ifEN,ifRU,ifFR,ifIT,ifGE,ifBY,ifUA            x7+7
	--------------------------------
	EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN  ifEN,
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN   ifRU
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN    ifFR
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN     ifIT
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN      ifGE
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN       ifBY
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN        ifUA
	-------------------------------- 
				    	*/
	body.EN ifEN{display:block;}
	body.EN ifRU{display:none;}
	body.EN ifFR{display:none;}
	body.EN ifIT{display:none;}
	body.EN ifGE{display:none;}
	body.EN ifBY{display:none;}
	body.EN ifUA{display:none;}

	body.RU ifEN{display:none;}
	body.RU ifRU{display:block;}
	body.RU ifFR{display:none;}
	body.RU ifIT{display:none;}
	body.RU ifGE{display:none;}
	body.RU ifBY{display:none;}
	body.RU ifUA{display:none;}

	body.FR ifEN{display:none;}
	body.FR ifRU{display:none;}
	body.FR ifFR{display:block;}
	body.FR ifIT{display:none;}
	body.FR ifGE{display:none;}
	body.FR ifBY{display:none;}
	body.FR ifUA{display:none;}

	body.BY ifEN{display:none;}
	body.BY ifRU{display:none;}
	body.BY ifFR{display:none;}
	body.BY ifIT{display:block;}
	body.BY ifGE{display:none;}
	body.BY ifBY{display:none;}
	body.BY ifUA{display:none;}

	body.IT ifEN{display:none;}
	body.IT ifRU{display:none;}
	body.IT ifFR{display:none;}
	body.IT ifIT{display:none;}
	body.IT ifGE{display:block;}
	body.IT ifBY{display:none;}
	body.IT ifUA{display:none;}

	body.GE ifEN{display:none;}
	body.GE ifRU{display:none;}
	body.GE ifFR{display:none;}
	body.GE ifIT{display:none;}
	body.GE ifGE{display:none;}
	body.GE ifBY{display:block;}
	body.GE ifUA{display:none;}

	body.UA ifEN{display:none;}
	body.UA ifRU{display:none;}
	body.UA ifFR{display:none;}
	body.UA ifIT{display:none;}
	body.UA ifGE{display:none;}
	body.UA ifBY{display:none;}
	body.UA ifUA{display:block;}

	/*© A.A.CheckMaRev tubmulur@yandex.ru*/
	/*EDRO Language*/

	/*EDRO layers*/
	.layer_1,	LVL1,	layer_10	{z-index:1;}
	.layer_1_1,	LVLV11,	layer_11	{z-index:2;}
	.layer_1_2,	LVL12,	layer_12	{z-index:3;}
	.layer_1_3,	LVL13,	layer_13	{z-index:4;}
	.layer_1_4,	LVL14,	layer_14	{z-index:5;}

	.layer_2,	LVL2,	layer_20	{z-index:20;}
	.layer_2_1,	LVL21,	layer_21	{z-index:21;}
	.layer_2_2,	LVL22,	layer_22	{z-index:22;}
	.layer_2_3,	LVL23,	layer_23	{z-index:23;}
	.layer_2_4,	LVL24,	layer_24	{z-index:24;}

	.layer_3,	LVL3,	layer_31	{z-index:30;}
	.layer_3_1,	LVL31,	layer_32	{z-index:31;}
	.layer_3_2,	LVL32,	layer_33	{z-index:32;}
	.layer_3_3,	LVL33,	layer_34	{z-index:33;}
	.layer_3_4,	LVL34,	layer_35	{z-index:34;}

	.layer_4,	LVL4,	layer_40	{z-index:40;}
	.layer_4_1,	LVL41,	layer_41	{z-index:41;}
	.layer_4_2,	LVL42,	layer_42	{z-index:42;}
	.layer_4_3,	LVL43,	layer_43	{z-index:43;}
	.layer_4_4,	LVL44,	layer_44	{z-index:44;}

	.layer_5,	LVL5,	layer_50	{z-index:50;}
	.layer_5_Membrane,LVL51,layer_51	{z-index:51;}
	.layer_5_Overlay,LVL52,	layer_52	{z-index:52;}
	.layer_5_Debug,	LVL53,	layer_53	{z-index:53;}
	.layer_5_Nav,	LVL54,	layer_54	{z-index:54;}

	.layer_6_LoginReg,LVL6,	layer_60	{z-index:60;}
	.layer_6,	LVL61,	layer_61	{z-index:61;}
	.layer_6_1,	LVL62,	layer_62	{z-index:62;}
	.layer_6_2,	LVL63,	layer_63	{z-index:63;}

	.layer_Membrane	{z-index:71;}
	.layer_Overlay		{z-index:72;}
	.layer_Debug		{z-index:73;}
	.layer_Nav		{z-index:74;}
	.layer_Indicator	{z-index:75;}


	/*//EDRO layers*/

	/*/ EDRO Station FollowingDj*/
	HiFi.NoFollowingDj 	ifNoFollowingDj		{display:block;}
	HiFi.FollowingDj 	ifFollowingDj		{display:none;}
	HiFi.FollowingDj 	ifNoFollowingDj		{display:none;}
	HiFi.NoFollowingDj 	ifFollowingDj		{display:none;}
	/*/ EDRO Station FollowingDj*/

	/*/ Master mood setter HficMenu setup definitions [EDRO]. 
            Setted master mood acronim: "SMM". 
	    Master Object: "MO".
	    Example: Setted master mood="CutDown", so SMM->CutDown
	    Sensitive folowers: "F"*/
	/*MO----. SMM->-. .----F*/
	/*	V	V V	*/
	HficSearch.CutDown ifCutDown,  HficSearch.default ifCutDown	/*Default  is CutDown*/
						{width:20px;display:block;}

	HficSearch.CutDown ifExpanded,  HficSearch.default ifExpanded	/*Default  is CutDown*/
						{display	: none;!important;width:100%;}

	HficSearch.Expanded ifExpanded		{display	: block;}

	HficSearch.Expanded ifCutDown		{display	: none;}

	/*/ EDRO Station Search expanded*/

	 /*/ EDRO Station  */
	/*station:hover {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:actve {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:focus {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	\ */            /*/
	/*/ EDRO Station*/

	/*EDRO player*/
	/*/EDRO.Author.table*/
	/*/EDRO.Author.table*/
	audioTrack 		{border-top		: 1px solid #aaa;border-bottom: 1px solid #aaa;}
	audioTrack:hover 	{background-color	: #ccc;}
	/*EDRO player*/

	/*EDRO station switch*/
	station player:hover
		{
		color			: #000!important;
		background-color	: #ccc;
		}

	station.playing 				ifReady,
	station.loadingAudio 				ifReady,
	station.errorAudio 				ifReady
		{
		display				: none!important;
		}

	playerControlAlwaysVisible.playing 		ifPlaying,
	station.playing 				ifPlaying,
	station.loadingAudio 				ifLoadingAudio,
	playerControlAlwaysVisible.loadingAudio 	ifLoadingAudio
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.stopped 		ifStopped
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.overload 		ifOverload,
	station.overload ifOverload
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.errorAudio 		ifNoConnection,
	station.errorAudio ifNoConnection
		{
		display				: block!important;
		}
	/*EDRO station switch*/

	/*EDRO station switch colors*/
	playerControlAlwaysVisible.playing,
	station.playing
		{
		/*border			: 1px solid #6fff6f!important;*/
		/*background-color		: #1e3d5d!important;*/
		/*background			: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;*/
		}
	playerControlAlwaysVisible.loadingAudio,
	station.loadingAudio
		{
		/*border			: 1px solid yellow!important;*/
		/*background-color		: yellow!important;*/
		}
	station.WaitingAudio	recordLabel
		{
		background-color		: #2d90f5!important;
		color				: white!important;
		}
	playerControlAlwaysVisible.errorAudio,
	station.errorAudio
		{
		/*border			: 1px solid #ecc1be!important;*/
		background-color		: #ecc1be!important;
		}
	/*EDRO station switch colors*/

	/*EDRO station switch header colors*/
	station.playing 	strScrolling
		{
		background-color		: white;
		}
	station.playing					.PlayHighLightTop
		{
		border-bottom				: 1px solid #2d90f5!important;
		}
	station.playing					.PlayHighLightBottom
		{
		border-top				: 1px solid #2d90f5!important;
		}

	station.loadingAudio 	strScrolling
		{
		color				: white;
		background-color		: #2d90f5!important;
		}
	station.loadingAudio				.PlayHighLightTop
		{
		border-bottom				: 1px solid #2d90f5!important;
		}
	station.loadingAudio				.PlayHighLightBottom
		{
		border-top				: 1px solid #2d90f5!important;
		}

	station.errorAudio 	h2
		{
		color				: red!important;
		}
	/*EDRO station switch header colors*/

	/*EDRO station switch event indicator*/
	station.playing		h2
		{
		color				: #062b88;
		}
	station.playing 			whiteblock
		{
		background-color		: #6fb6ff!important;
		animation-name			: Blink-play;
		animation-duration		: 1s;
		/* animation-timing-function	: easy; */
		animation-delay			: 0s;
		animation-iteration-count	: infinite;
		animation-direction		: normal;
		animation-fill-mode		: none;
		animation-play-state		: running;
		}
	station.loadingAudio 			whiteblock
		{
		background-color		: #2d90f5!important;
		animation-name			: Blink1;
		animation-duration		: 1s;
		/* animation-timing-function: easy; */
		animation-delay			: 0s;
		animation-iteration-count	: infinite;
		animation-direction		: normal;
		animation-fill-mode		: none;
		animation-play-state		: running;
		}
	station.errorAudio 			whiteblock
		{
		background-color		: #ecc1be!important;
		}
	/*EDRO station switch event indicator*/
	/*//EDRO station*/

	/*// EDRO.Objects */
	article{padding				: 0 0 0 0;}
	/*// EDRO.Objects */

	/*// EDRO.Mobile compatibility */
	@media screen and (max-width:1200px)
		{
		dynablock a
			{
			width		: 48%;
			height		: 100px;
			margin		: 1px;
			}
		dynablock overlay
			{
			line-height	:100px;
			}
		}
	@media screen and (min-width:1200px)
		{
		dynablock a
			{
			width		: 24%;
			height		: 200px;
			margin		: 3px;
			}
		dynablock overlay
			{
			line-height	: 200px;
			}
		}
	/*// EDRO.Mobile compatibility */

	/*// EDRO.Animation */
	.blink
		{
		animation-name		: Blink1;
		animation-duration	: 4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast
		{
		animation-name		: Blink-fast;
		animation-duration	: 1s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast1
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.6s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.3s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast2
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.6s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast3
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.3s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.8s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast4
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.2s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.1s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast5
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.1s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}

	.blink-fast6
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.5s;
		/*animation-timing-function: easy;*/
		animation-delay		: 1.2s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	playerControlAlwaysVisible.WaitingAudio ifLoadingAudio#objLoadingAudioTopSmall, 
	playerControlAlwaysVisible.WaitingAudio ifPlaying#objPlayingAudioTopSmall, 
	.blink-medium
		{
		animation-name		: Blink-medium;
		animation-duration	: 2s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	playerControlAlwaysVisible.WaitingAudio ifLoadingAudio PlayerLoadingButton, 
	playerControlAlwaysVisible.WaitingAudio ifPlaying PlayerPlayingButton, 
	station.WaitingAudio.LoadingAudio	recordLabel,
	station.WaitingAudio	recordLabel,
	.blink-slow
		{
		animation-name		: Blink-slow;
		animation-duration	: 4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	@keyframes Blink1
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	@keyframes Blink-slow
		{
		0% {
		    opacity:0;
		    }
		33% {
		    opacity:1;
		    }
		
		66% {
		    opacity:1;
		    }
		
		100% {
		    opacity:1;
		    }
		}
	@keyframes Blink-medium
		{
		0% {
		    opacity:0;
		    }
		4% {
		    opacity:1;
		    }
		
		66% {
		    opacity:1;
		    }
		
		100% {
		    opacity:1;
		    }
		}
	@keyframes Blink-fast
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:0;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:0;
		    }
		80% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes Blink-play
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:1;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:1;
		    }
		99% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes hideElement
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	/*// EDRO.Animation */

	/*// EDRO.Adaptive */
	/*@media (orientation: landscape)
		{
		body
			{
			overflow	: hidden;
			height		: 72vh!important;
			}
		}*/
	/*// EDRO.Adaptive */

</style>
';
//$this->ч0ВыполненоЧастей++;
//$this->_Кон();

// © A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
set_time_limit(0);
class СерверЧтенияЛокальный
	{
	private	$E	= array(//ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			);
	private	$D	= array(//НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			///'strAddr'			=> '127.0.0.1', //Setup in server start 
			///'intPort'			=> 75,
			///'дТаймаут'			=> -1
			);
	public $R	= array(//Состояние операционной среды Реальность ([R]eality)
			'сСостояние'			=> '',
			'рПриёмник'			=> '',
			'сОшибка'			=> '',
			'ч0Ошибка'			=> '',
			);
	private	$O	= array(//Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'			=> '',
			'оСостояние'			=> '',
		//	'оEDRO'				=> '',
			);
	function __construct($мНастройки)
		{
		$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->E				= $мНастройки;
		//$this->O['оСостояние'] 		= new ОповещениеСостояние(__CLASS__,__FUNCTION__);
		//$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->R['рПриёмник']			= $this->рСпозиционироватьДляЗагрузкиОткрытуюКоробкуДляДанных();
		}
	private function рСпозиционироватьДляЗагрузкиОткрытуюКоробкуДляДанных()
		{
		$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		//					$this->O['оСостояние']->_PushCondition($this);
		$рПриёмник				= FALSE;
		if($this->R['рПриёмник'])
			{
			$рПриёмник				= $this->R['рПриёмник'];
			}
		else
			{
			//$this->O['оСостояние']->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
			$рПриёмник			= stream_socket_server($this->E['strProto'].'://'.$this->E['strAddr'].':'.$this->E['intPort'], $this->R['ч0Ошибка'], $this->R['сОшибка']);
			if($this->R['ч0Ошибка'])
				{
				$this->R['сОшибка']		= $this->R['ч0Ошибка'].': '.$this->R['сОшибка'];
								фОшибка($this->R['сОшибка']);
				//$this->O['оОшибка']->_PushError($this);
				}
			else
				{
				if($рПриёмник===FALSE)
					{
					$this->R['сОшибка']		= 'Невозможно запустить передачу рПриёмник';
									фОшибка($this->R['сОшибка']);
					}
				else
					{
					$this->R['сОшибка']		= '';
					//				$this->O['оСостояние']->_PushCondition($this);
					}
				//$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
				}
			}
		return $рПриёмник;
		}
	private function ifManyReconnects()
		{
		}
	public function ifWaitForListenerAccess()
		{
		$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		//$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		//					$this->O['оСостояние']->_PushCondition($this);
		if($this->R['рПриёмник'])
			{
			$рПередача 		= stream_socket_accept($this->R['рПриёмник'], $this->E['дТаймаут']);
			if($рПередача===FALSE)
				{
				$this->R['сОшибка']	= 'Невозможно запустить передачу рПередача';
								фОшибка($this->R['сОшибка']);
				//				$this->O['оСостояние']->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
				//				$this->O['оОшибка']->_PushError($this);
								$this->рСпозиционироватьДляЗагрузкиОткрытуюКоробкуДляДанных();
				}
			else
				{
				$this->R['сОшибка']		= '';
				//				$this->O['оСостояние']->_PushCondition($this);
				}
			}
		else
			{
			echo $this->R['сОшибка']	= 'Невозможно запустить передачу рПриёмник';
							фОшибка($this->R['сОшибка']);
			//				$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
			//				$this->O['оОшибка']->_PushError($this);
							$this->рСпозиционироватьДляЗагрузкиОткрытуюКоробкуДляДанных();
			}
		//$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		//$this->O['оСостояние']->_PushCondition($this);
		return $рПередача;
		}
	}

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
class EDRO
	{
	public $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			//	'мВходящиеНастройки'	=> array(), 
			//			From Listener
			'strName'		=> '', // /
			'strExt'		=> '', // .cvb
			'arrEventParams'		=> array(),
			'arrAcceptContent'	=> array(),
			'bIzDynamic'		=> FALSE,
			);
	public $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes
			//	'мНастройкиЭлемента'	=> array 
			//	    		To Listener
			'strServerName'		=> 'ЕДРО:ПОЛИМЕР',
			'strLanguage'		=> '',
			'strContentType'	=> '',
			'strEncoding'		=> '',
			'strAllowedAccess'	=> '',
			);
	public $R	= array( //Состояние операционной среды Реальность ([R]eality)
			//			Listener
			'strAction'		=> '', //GET 
			'strProto'		=> '', //HTTP/x.x
			'strTo'			=> '', //Host
			'strFrom'		=> '',
			'strAcceptLanguage'	=> '',
			'strAcceptEncoding'	=> '',
			'bIzDynamic'		=> FALSE,
			'ч1Слушатель'		=> 0,
			'сДоступ'		=> '/Listener',
			'arrPlatform' 		=> array(),
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'		=> '',
			'оСостояние'		=> '',
			//	'оКИМ'			=> '',
			//	'оЖурнал'		=> '',
			);
	public function __construct($_сЗаголовки)
		{
		//$this->O['оСостояние'] 	= new ОповещениеСостояние(__CLASS__, __FUNCTION__);
		//$this->O['оОшибка'] 		= new ОповещениеОшибка();

		///				$this->O['оСостояние']->O['оСекундомер']->_Старт();
		$сЗаголовки			= $this->strSafeUsers($_сЗаголовки);
								unset($_сЗаголовки);

		$мЗаголовки			= explode("\n", $сЗаголовки);

		$oEvent				= new Event($мЗаголовки);
		$this->E			= $oEvent->E;

		$oDesign			= new Design($this->E);
		$this->D			= $oDesign->D;

		$oReality			= new Reality($this->E);
		$this->R			= $oReality->R;

		$oObjects			= new Objects($this);
		print_r($this);
		exit;
		//				$this->O['оСостояние']->O['оСекундомер']->_Стоп();
		//$this->E			= $oEvent->E;

		//$this->R			= $oEvent->R;
		///			    unset($oEvent);
		//$oDesign			= new Design($this->E);
		//$this->D			= $oDesign->D;
					    unset($oDesign);
		//$oReality			= new Reality($this->E, $this->D, $this->R);
		//$oObjects			= new Objects($this->E, $this->D, $this->R);

						//эEDRO($this->E, $this->D, $this->R, $this->O);
		//				exit;


		/*if($this->R['bizReadedBlock']===TRUE)
			{
			$мЗаголовки			= explode("\n", $this->R['strReadedBlock']);
			foreach($мЗаголовки as $сЗапрос)
				{
				if(strpos($сЗапрос, ': ')!==FALSE)
					{
					$this->R['мЗаголовки'][сНачДоСимвола($сЗапрос, ':')]	= сНачОтСимвола($сЗапрос, ' ');
					}
				}
			if(isset($this->R['мЗаголовки']['ч1Слушатель']))
				{
				$this->R['ч1Слушатель']			= $this->R['мЗаголовки']['ч1Слушатель'];
				if(is_file($this->E['сСлушатель'] 	= сРасположениеО2о.$this->R['сДоступ'].'/'.$this->R['ч1Слушатель'].cЗаписьО2о))
					{
					$this->E['strListenerBlock']		= file_get_contents($this->E['сСлушатель']);
					}
				else
					{
					$this->R['сОшибка']			= 'fread(рПередача empty.';
										$this->O['оОшибка']->_PushError($this);
					}
				}
			}
		else
			{
			$this->R['мЗаголовки']			= array();
			}*/
		}
		private function strSafeUsers($_strRequest)
			{
			return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
			}
	}

                     /*_____
© Andrey Chekmaryov 2021
Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Email:    Hfic.Samin@vk.com
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|         ЕДРО:ПОЛИМЕР
 ////// 2021                   /////  /  
//        /\                  // /      
//      <  **>               /// /     
 //////   jl                ///// /   
./././././././*/
//

class Event
	{
	public $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			//	'дбг_сВходящиеНастройки' => '',
			//	'мВходящиеНастройки'	=> array(),
			'strName'			=> '', // /
			'strExt'			=> '', // .cvb
			'strType'			=> '', 
			'bIzDynamic'			=> FALSE,
			'arrEventParams'		=> array(),
			'arrAcceptContent'		=> array(),

			);
	public $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			///	'дбг_сНастройкиЭлемента'=> '',
			//	'мНастройкиЭлемента'	=> array(),
			'strLanguage'			=> '',
			'strContentType'		=> '',
			'strEncoding'			=> '',
			'arrAllowedAccess'		=> array(),
			// 'strAllowedConnection'		=> array(),
			
			);
	public $R	= array( //Состояние операционной среды Реальность ([R]eality)
			'strAction'		=> '', //GET
			'strProto'		=> '', //HTTP/x.x
			'strTo'			=> '', //Host
			'strFrom'		=> '',
			'strAcceptLanguage'	=> '',
			'strAcceptEncoding'	=> '',
			// 'ч1Слушатель'		=> 0,
			// 'сДоступ'		=> '/Listener',
			'arrPlatform' 		=> array(),
			// 'strUserAgent']	=> '',
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'		=> '',
			'оСостояние'		=> '',
			'оСекундомер'		=> '',
			);
	
	public function __construct($мЗаголовки)
		{
		$this->O['оСостояние'] 			= new ОповещениеСостояние(__CLASS__,__FUNCTION__);
		$this->O['оОшибка'] 			= new ОповещениеОшибка();



		//$arrEvent['O']['oEDRO'];
		///$arrEvent['O']['oEDRO']->Content-Type	= 'text/html';
		///$arrEvent['O']['oEvent']->Server-name	= 'EDRO:POLIMER';

		foreach($мЗаголовки as $strListenerReality)
			{
			if(($strListenerRealityName=сНачДоСимвола($strListenerReality, ' '))!==FALSE)
				{
				$strListenerRealityName		= str_replace(':' ,'' ,$strListenerRealityName);
				if($strListenerRealityName=="GET"||$strListenerRealityName=="POST"||$strListenerRealityName=="HEAD"||$strListenerRealityName=="PUT")//||$strListenerRealityName=="PUT"
					{
					$this->E['strAction']			= сНачДоСимвола($strListenerReality, ' ');
					$this->E['strProto']			= сКонцДоСимвола($strListenerReality, ' ');
					$strEvent				= trim(CheckMaSubstr($strListenerReality , strlen($strListenerRealityName),  -strlen($this->R['strProto'])));
					if(empty($strEvent))
						{
						$strEvent		= '/';
						}
					$this->E['strName']			= сНачДоСимвола($strEvent, "?");
					$strEventParams				= сНачОтСимвола($strEvent, "?", 0, 1);
					$this->E['arrEventParams']		= arrEventParams2Array($strEventParams);
					$this->E['strExt']			= сКонцДоСимвола($this->E['strName'], '.');
					$this->E['bIzDynamic']			= $this->bIzDynamic($strEventParams);
					}
				elseif($strListenerRealityName=='Referer')
					{
					$this->E['strFrom'] 			= trim(сНачОтСимвола($strListenerReality, ":", 0, 1));
					}
				elseif($strListenerRealityName=='Host')
					{
					$this->E['strTo']			= trim(сНачОтСимвола($strListenerReality, ":", 0, 1));
					}
				elseif($strListenerRealityName=='Connection')
					{
					$this->E['strConnection'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Accept')
					{
					$arr=explode(',' ,trim(сНачОтСимвола($strListenerReality, ":", 0, 1)));
					if(is_array($arr))
						{
						}
					else
						{
						$arr	=array();
						}
					$this->E['arrAcceptContent']		= $arr;
					}
				elseif($strListenerRealityName=='DNT')
					{
					$this->E['bIzDNT'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Accept-Language')
					{
					$this->E['strAcceptLanguage'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Accept-Encoding')
					{
					$this->E['strAcceptEncoding']		= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='User-Agent')
					{
					$strUserAgent				= сНачОтСимвола($strListenerReality, ":", 0, 1);
					$this->E['arrPlatform'] 		= arrUserAgent2Platform($strUserAgent);
					}
				elseif($strListenerRealityName=='Cache-Control')
					{
					//$this->R['strCacheControl'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Pragma')
					{
					//$this->R['strPragma'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Upgrade-Insecure-Requests')
					{
					//$this->R['strUpgradeInsecureRequests']= сНачОтСимвола($strListenerReality, ":", 0, 1);
					}
				elseif($strListenerRealityName=='Sec-Fetch-Site')
					{
					}
				elseif($strListenerRealityName=='Sec-Fetch-Mode')
					{
					}
				elseif($strListenerRealityName=='Sec-Fetch-User')
					{
					}
				elseif($strListenerRealityName=='Sec-Fetch-Dest')
					{
					}
				elseif($strListenerRealityName=='Sec-Fetch-D')
					{
					}
				else
					{
					$this->E[$strListenerRealityName]	= сНачОтСимвола($strListenerReality, ":", 0, 1);
					фОтчёт('Unusall position of Event string $arrEvent[arrListener][strEvent]: '.$strListenerRealityName.'/'.сНачОтСимвола($strListenerReality, ":", 0, 1));
					}
				}
			else
				{
				}
			}

		//file_put_contents('/home/1.ЕДРО:ПОЛИМЕР2/журнал.txt', $сЗаголовки."\r\n\r\n", FILE_APPEND);
		//$сЗаголовки		= $this->strSafeUsers($_сЗаголовки);
		//$this->arrEvent		= arrRequest2IndexArray(explode("\n", $сЗаголовки));
		/*

		$this->arrEvent['arrListener']['strConnection']['strObject']	= '/';
		$this->arrEvent['arrListener']['strConnection']['strObjectType']	= 'audio/wav';
		*/

		/*$this->arrEvent				= arrGetEventSetter($мЗаголовки);
							print_r($this->arrEvent);
		$this->arrEvent['bIzDynamic']		= $this->bIzDynamic();
		$this->arrEvent['strArrReality']	= '';
		
		if($this->arrEvent['bIzDynamic'])
			{
			
			}
		else
			{
			$this->arrEvent['strObjectReality']	= 'objEvent.arrReality={'.strArrayRec2JS($this->arrEvent, 'arrReality').'};';
			}*/

		/*$arrAllParams	=
		array(
			'strAppTitle'			=>'',
			'strAppMembrane'		=>'',
			'strAppCRCS'			=>'',
			'intAppETime'			=>0,

			'strPageTitle'			=>'',
			'strPageMembrane'		=>'',
			'strPageCRCS'			=>'',
			'intPageOTime'			=>0,

			'strListenerPlayingStaionId'	=>'',
			'strListenerSearchStaionName'	=>'',
			'strListenerStyle'		=>'',
			'intListenerBitrate'		=>0,
			'intListenerPage'		=>0,
			'intListenerOnPage'		=>0,

			'strEventURL'			=>'',
			'strEventURLD'			=>'',
			'strEventEDRO_URL'		=>'',
			);*/
		}
	private function bIzDynamic($strEvenParams)
		{
		$bIzDynamic	= FALSE;
		if(strpos($strEvenParams, '&d=')!==FALSE)
			{
			$bIzDynamic	= TRUE;
			}
		return $bIzDynamic;
		}

	public function strRealityInit()
		{
		/*
		$str='<script>';
			//$str.='alert(\'x\');';
			$str.='console.log(\'[V]EDRO.Event: strParamsInit()\');';
			$str.=rmlb($this->arrEvent['strObjectReality']);
			$str.='objEvent._Search();';
			$str.='console.log(\'[.]EDRO.Event: strParamsInit()\');';
		$str.='</script>';
		*/
		return $str;
		}
	public static function strOConstruct($_strClassName)
		{
		$strClassName	=$_strClassName;
			   unset($_strClassName);
		$strObjName	='obj'.$strClassName;
		$str="
		<script>
			console.log('[V]EDRO.Objects.".$strObjName.": Init ".$strClassName."');

			var ".$strObjName."=new ".$strClassName."();
			console.log('[.]EDRO.Objects.".$strObjName.": Init ".$strClassName."');
		</script>
		<script>
			if(typeof(".$strObjName.")!='object')
				{
				objKIIM.parentNode.classList.remove('hidden');
				objKIIM.innerHTML+='".$strObjName.".construct() error.<br/>';
				}
		</script>";
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Declare');
			var bizHiFiNavigationInputSelect	=false;
			class Event
				{
				constructor()
					{
					console.log('[Vv]EDRO.Event: Constructor');
					//this.strURL		='';
					this.strEvent 		='';
					this.objXHR		=new XMLHttpRequest();
					this.strURL		='';
					this.strURLDyn		='';
					this.arrReality		=[];
					this.arrRealityPair	=[];
					this.arrRealityTemp	=[];
					/*this.arrReality={
						'strPlayingStationId'	:'',
						'strName'		:'',
						'strStyle'		:'',
						'intBitrate'		:'',
						'strCodec'		:'',
						'int0Page'		:0,
						'int1OnPage'		:3,
						'int0PlayingStationNum'	:0,
						};*/
					this.strParams		='';
					//console.log(this.arrReality);
					this.objNav		={'HFIC':'ICQR'};
					this._SetLanguageMood();
					this._SetRoleSignal();
					document.onkeydown=function(e)
						{
						console.log(e.keyCode);
						switch(e.keyCode)
							{
							case 9: //TAB

							break;
							case 32: //SpaceBar space fun :)

							break;
							case 27: //ESC
								    
							break;
							case 37: //<-
								objHiFiNavigation	=new HiFiNavigation();
								if(objHiFiNavigation.objLeft.href)  //f&objHiFiNavigation.objRight.int0Page<=objHiFiNavigation.objRight.href.int0PageMaximum
									{
									var arrReality		=objHiFiNavigation.objLeft.href.split('?');
									objEvent._GoToUrl(arrReality[1]);
									}
							break;
							case 39: //->
								objHiFiNavigation	=new HiFiNavigation();
								if(objHiFiNavigation.objRight.href)//&&objHiFiNavigation.objRight.int0Page<=objHiFiNavigation.objRight.href.int0PageMaximu
									{
									var arrReality		=objHiFiNavigation.objRight.href.split('?');
									objEvent._GoToUrl(arrReality[1]);
									}
							break;
							}
						}
					window.onpopstate=function(event)
						{
						console.log('[Vvv]EDRO.Event: onpopstate');
						objEvent._GoBack(event.target.location);
						console.log('[...]EDRO.Event: onpopstate');
						}
					this.objXHR.onload	=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onload');
						if(objEvent.objXHR.status==200)
							{	
							if(objReality.bIzPlayer)
								{
								//console.log(objObjects.objXHR.response);
								var strAudio 		= objEvent.objXHR.response;
								//strAudio
								objPlayer.objAudio.src		=strAudio;
								objPlayer.objAudio.volume	=1;
								objPlayer.objAudio.play();
								//objPlayer.objAudio.load();
								objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
								objReality.bIzPlayer		=false;
								objReality.bIzLoading		=false;
								//alert('ok');
								}
							/*if(objReality.bIzDynaScreen)
								{
								objDynaScreen.objHTML.innerHTML	=objEvent.objXHR.response;
								objReality.bIzHistory		=false;
								objReality.bIzDynaScreen	=false;
								objReality.bIzLoading		=false;
								}*/
							if(objReality.bIzCheckMaNet)
								{
								objReality.bIzCheckMaNet	=false;
								}
							objReality.bIzPlayer		=false;
							//objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							//objReality.bIzDynaScreen	=false;
							objReality.bIzCheckMaNet	=false;
							objPlayer.updateOnReload();
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						else
							{
							objReality.bIzPlayer		=false;
							//objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							objReality.bIzCheckMaNet	=false;
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						console.log('[...]EDRO.Objects: objXHR.onload');
						}
					this.objXHR.onProgress		=function(event)
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onProgress');
						if(event.lengthComputable)
							{
							//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
							}
	    					else
							{
							//console.log('Получено'+event.loaded+'байт');
								}
						console.log('[...]EDRO.Objects: objXHR.onProgress');
						}
					this.objXHR.onError=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onError');
						objReality.bIzLoading		=false;
						objReality.bIzPlayer		=false;
						objReality.bIzDynaScreen	=false;
						objReality.bIzCheckMaNet	=false;
						objReality.bIzError		=true;
						
						objDynaScreenEventIndicator.objHTML.style.display="none";
						console.log('[...]EDRO.Objects: objXHR.onError');
						}
						console.log('[..]EDRO.Event: Constructor');
					}
				_PlayStation(strPlayerId)
					{
					console.log('[Vv]EDRO.Objects: _PlayStation(strPlayerId)');
					objReality.bIzPlayer			=true;
					objEvent.arrReality.strListenerDate	=new Date();
					objEvent.strEvent			='/getStation';
					objEvent.arrReality.strStationId		=strPlayerId;
					objEvent._RequestURLDyn();
					console.log('[..]EDRO.Objects: _PlayStation(strPlayerId)');
					}
				_Search()
					{
    					console.log('[Vv]EDRO.Objects: _Search()');
					objReality.bIzDynaScreen		=true;
					objEvent.strEvent			='/Search';
					objEvent.arrReality.page			=0;
					if(objDynaScreenEventIndicator.objHTML!=null)
						{
						objDynaScreenEventIndicator.objHTML.style.display="block";
						}
					//objEvent.PushEvent; ////// ++
					this._RequestURLDyn() //objObjects->objEvent
					console.log('[..]EDRO.Objects: _Search()');
					}
				_CheckMaNet()
					{
					console.log('[Vv]EDRO.Objects: _CheckMaNet()');
					objReality.bIzHistory			=false; //objObjects->objReality
					objEvent.strEvent			='/checkMaNet';
					objEvent._CreateURL();			//objObjects->objEvent
					objEvent._Request();			//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CheckMaNet()');
					}
				_GoBack(obj)
					{
					console.log('[Vv]EDRO.Objects: _CreateParamsArr(obj)');
					objReality.bIzHistory		=false;
					objReality.bIzLoading		=true;
					objReality.bIzDynaScreen	=true;
					objReality.intLoadingTime	=0;
					objEvent.strParams		=obj.search.substr(1);
					//console.log(objEvent.strParams);
					objEvent.arrRealityPair		=objEvent.strParams.split("&");
					
					//console.log(objEvent.arrRealityPair);
					Object.keys(objEvent.arrRealityPair).forEach(function(strKey)
						{
						objEvent.arrRealityTemp	=objEvent.arrRealityPair[strKey].split('=');
						objEvent.arrReality[objEvent.arrRealityTemp[0]]	=decodeURIComponent(objEvent.arrRealityTemp[1]);
						});

					objSearch.objValueInputstrName.value		=objEvent.arrReality.strName;
					objSearch.objValueInputstrGenre.value		=objEvent.arrReality.strGenre;
					//objSearch.objValueInputintBitrate.value		=objEvent.arrReality.intBitrate;
					//objSearch.objValueInputstrCodec.value		=objEvent.arrReality.strCodec;

					console.log(objSearch.objValueInputstrName.value);
					objEvent.strURL			=obj.pathname+'?'+objEvent.strParams;
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					console.log('[..]EDRO.Objects: _CreateParamsArr(obj)');
					}
				_GoToUrl(strParams)
					{
					console.log('[Vv]EDRO.Objects: _GoToUrl(strParams)');
					objReality.bIzHistory		=false;
					objReality.bIzLoading		=true;
					objReality.bIzDynaScreen	=true;
					objReality.intLoadingTime	=0;
					objEvent.strParams		=strParams;
					console.log(objEvent.strParams);
					objEvent.arrRealityPair		=objEvent.strParams.split("&");
					
					//console.log(objEvent.arrRealityPair);
					Object.keys(objEvent.arrRealityPair).forEach(function(strKey)
						{
						objEvent.arrRealityTemp	=objEvent.arrRealityPair[strKey].split('=');
						objEvent.arrReality[objEvent.arrRealityTemp[0]]	=decodeURIComponent(objEvent.arrRealityTemp[1]);
						});

					objSearch.objValueInputstrName.value		=objEvent.arrReality.strName;
					objSearch.objValueInputstrGenre.value		=objEvent.arrReality.strGenre;


					//console.log(objSearch.objValueInputstrName.value);
					objEvent.strURL			='/?'+objEvent.strParams;
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					console.log('[..]EDRO.Objects: _GoToUrl(strParams)');
					}
				_CreateParamsStr()
					{
					console.log('[Vv]EDRO.Reality: _CreateParamsStr()');
					//console.log(this.arrParam);
					objEvent.strParams		='';
					Object.keys(objEvent.arrReality).forEach(function(strKey)
						{
						objEvent.arrReality[strKey]	=objEvent.arrReality[strKey];
						//alert(objEvent.arrReality[strKey]);
						objEvent.strParams	+='&'+strKey+'='+objEvent.arrReality[strKey];
						});
					objEvent.strParams		=objEvent.strParams.substr(1);
					//alert(objEvent.strParams);
					console.log('[..]EDRO.Reality: _CreateParamsStr()');
					}
				_CreateURLDyn()
					{
					console.log('[Vv]EDRO.Objects: _CreateUrl()');
					objEvent._CreateParamsStr();
					objEvent.strURL			=objEvent.strEvent+'?'+objEvent.strParams; //objReality->objObjects
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CreateURL()');
					}
				_RequestURLDyn() //objObjects->objEvent
					{
					console.log('[Vv]EDRO.Objects: _Request()');//objObjects->objEvent
					objReality.bIzHistory					=true;
					objReality.bIzLoading					=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					objEvent.objXHR.open('POST', objEvent.strURLDyn);
					objEvent.objXHR.send();
					if(objReality.bIzHistory)
						{
						objEvent.strEvent	='/';
						objEvent._CreateURLDyn();
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					console.log('[..]EDRO.Objects: _Request()');//objObjects->objEvent
					}
				_UpdateURLDyn(bIzHistory=true, objProcessing='') //objObjects->objEvent 
					{//(CAUTION!!!:Inside of updating object must be information of EDRO DESIGN MATRIX position!!)
					//    //  ///  Don't create functions with declareddestination of the request!! 06.08.2020 ChekMaNet
					console.log('[Vv]EDRO.Objects: objDynaScreen objXHR.send()'+objEvent.strURL);//objObjects->objEvent
					
					objReality.bIzHistory					=bIzHistory;
					objReality.bIzLoading					=true;
					objReality.bIzDynaScreen				=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					if(objReality.bIzHistory)
						{
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					if(objProcessing)
						{
						objProcessing.classList.remove('loading');
						}
					console.log('[..]EDRO.Objects: objDynaScreen objXHR.send()'+objEvent.strURL);//objObjects->objEvent4
					}
				_ActualizeSearch()
					{
					objSearch.objValueInputstrName.value	=decodeURIComponent(this.arrReality['strName']);
					objSearch.objValueInputstrGenre.value	=decodeURIComponent(this.arrReality['strGenre']);
					//objSearch.objValueInputintBitrate.value	=this.arrReality['intBitrate'];
					//objSearch.objValueInputstrCodec.value	=this.arrReality['strCodec'];
					}
				_SetLanguageMood() //objEDRO->strReality['strLangSignal'];
					{
					/*console.log('[Vv]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					document.body.className		+=' '+strSignalLang;
					console.log('[..]EDRO.Reality: Master Mood SET  _SetLanguageMood');*/
					}
				_SetRoleSignal()//Visual placement of the role fact in objEDRO->strReality['strRoleSignal'];
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					//this.objRoleSignal		=document.getElementById('SignalRole');		//temp
					//this.objRoleSignal.innerHTML	=strSignalRole;					//temp
					console.log('[..]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					}

				/*_Send()
					{
					console.log('[Vv]EDRO.Event: _Send.');
					if(objReality.bIzHistory)
						{
						console.log('[Vv]EDRO.Event: Push history'+this.strURL);
						//this.objNav.strSearchName		=objSearch.strValueInputName;
						//this.objNav.strSearchStyle		=objSearch.strValueInputStyle;
						//this.objNav.strSearchBitrate		=objSearch.strValueInputBitrate;
						//this.objNav.strSearchCodec		=objSearch.strValueInputCodec;
						history.pushState(this.objNav, 'Search', this.strURL);
						console.log('[..]EDRO.Event: Push history');
						}
					}
				_CheckNetwork()
					{
					
					}*/
				}
			console.log('[.]EDRO.Event: Declare');
		</script>
oо2оo;
		return $str;
		}
	public static function _V($rRadio)
		{
		return new Event($rRadio);
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('Event');
		}
	}

                     /*_____
© Andrey Chekmaryov 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Email:    Hfic.Samin@vk.com
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Design
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			//	'дбг_сВходящиеНастройки' => '',
			//	'мВходящиеНастройки'	=> array(),
			);
	public $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			//	'дбг_сНастройкиЭлемента'=> '',
			//	'мНастройкиЭлемента'	=> array(),
			// 'arrHaveLanguage'		=> array(),
			// 'arrHaveContentType'		=> array(),
			// 'arrHaveEncoding'		=> array(),
			// 'arrAllowedAccess'		=> array(),
			// 'strAllowedConnection'		=> array(),
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
			//	'сЗаголовки'		=> '',
			//	'ч1Слушатель'		=> 0,
			//	'сДоступ'		=> '/Listener',
				
			);
	private $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'		=> '',
			'оСостояние'		=> '',
			'оСекундомер'		=> '',
			);
	public function __construct($arrE)
		{
		//print_r($arrE);
		//print_r($o);
		//$this->O['оСостояние'] 			= new ОповещениеСостояние(__CLASS__,__FUNCTION__);
		//$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->D['strTemplate']			= сРасположениеО2оDB.сНазваниеО2оDB.'/Events/'.сПреобразовать($arrE['strName'], "вКоманду");
		
		//print_r($this);
		//exit;
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('Design');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO.Design: Declare');
			class Design
				{
				constructor()
					{
					console.log('[Vv]EDRO.Design: Construct');
					this.objStationsOnPage;
					//objEvent._CreateParamsArr();
					//this._UpdateDimensions();
					//objSearch.onPage		=this.intTotalElements;
					//objSearch.strEvent		='';
					//objSearch._CreateUrl();
					//alert(objSearch.strURL);
					//objDynaScreen.strURL		=objSearch.strURL;
					//objEvent.strURL			=objSearch.strURL;
					//objDynaScreen._Update();
					console.log('[..]EDRO.Design: Construct');
					}
				_UpdateDimensions()
					{
					objDynaScreen._GetDimensions();
					
					this.objElement		=document.getElementsByTagName('station')[0];
					if(typeof(this.objElement)=='object')
						{
						if(typeof(this.objElement)=='object')
							{
							this.intElementHeight	=this.objElement.offsetHeight+10;
							this.intElementWidth	=this.objElement.offsetWidth+10;
							}
						else
							{
							this.intElementHeight	=90;
							this.intElementWidth	=410;
							}
						this.intScreenWidth	=objDynaScreen.intWidth;
						this.intScreenHeight	=(objDynaScreen.intHeight-180);
						this.intWidthElements	=Math.floor(this.intScreenWidth/this.intElementWidth);
						if(this.intWidthElements<1)
							{
						//	console.log('[Vvv]EDRO.Design: intWidthElements<=1');
							this.intWidthElements=1;
						//	console.log('[...]EDRO.Design: intWidthElements<=1');
							}
						this.intHeightElements	=Math.floor(this.intScreenHeight/100);
						if(this.intHeightElements<1)
							{
							this.intHeightElements=1;
							}
						this.intTotalElements	=this.intWidthElements*this.intHeightElements;
						if(this.intTotalElements<1)
							{
						//	console.log('[Vvv]EDRO.Design: intTotalElements<=1');
							this.intTotalElements		=1;
						//	console.log('[...]EDRO.Design: intTotalElements<=1');
							}
						//objIndicatorDimensions.objStr.innerHTML	=this.intScreenWidth+'x'+this.intScreenHeight+'<br/>V'+this.intWidthElements+':H'+this.intHeightElements+':T'+this.intTotalElements;
						if(objEvent.arrReality.int1OnPage!=this.intTotalElements)
							{
							//objEvent.arrReality.strName=objPlayer.strStationName; objEvent.arrReality.strStyle=\'\';objEvent.arrReality.intBitrate=\'\';objEvent.arrReality.strCodec=\'\';objEvent._UpdateURLDyn(true);
							//Event::strOConstruct('Search');
							objSearch				=new Search();
							objEvent.arrReality.strName		=objSearch.strValueInputstrName;
							objEvent.arrReality.strGenre		=objSearch.strValueInputstrGenre;
							//objEvent.arrReality.intBitrate	=objSearch.strValueInputintBitrate;
							//objEvent.arrReality.strCodec		=objSearch.strValueInputstrCodec;
							objEvent.arrReality.int1OnPage		=this.intTotalElements;
							//console.log(objEvent.arrReality.int1OnPage);
							objEvent._UpdateURLDyn(false);
							objIndicatorDimensions.objStr.style.backgroundColor	='red';
							objIndicatorDimensions.objStr.style.color		='#FFF';
							}
						else
							{
							objIndicatorDimensions.objStr.style.backgroundColor	='';
							objIndicatorDimensions.objStr.style.color		='';
							}
						}
					}
				_CheckElements()
					{
					//console.log('[Vvv]EDRO.Design: checkElements');
					objDesign.objStationsOnPage	=document.getElementsByTagName('station');
					if(objDesign.objStationsOnPage['length']==0)
						{
						}
					//console.log(objDesign.objStationsOnPage['length']);
					//console.log('[...]EDRO.Design: checkElements');
					}
				}
			console.log('[.]EDRO.Design: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
                /*_____
© Andrey Chekmaryov 2020 Hfic.Samin@vk.com 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
////////////////////// /2021
////////  /\ ///////// /
/////// <  **> /////// /
///////   jl ///////// /
./././././././*/
class RealityIndicatorIsDNT
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<'.__CLASS__.'
				class	="fix block layer__1"
				style	="
					line-height	: 9px;
					margin-right	: 1px;
					"
				>
				<NetSrvSuspend
					id	="NetSrvReady"
					class	="block left  BLL"
					style	="	
						left		: 20px;
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Stream network avaliability status"
						class		="no-select"
						>
						N
					</ifRU>
					<ifEN
						title		="Статус доступности аудиопотока сети"
						class		="no-select"
						>
						H
					</ifEN>
				</NetSrvSuspend>
			</'.__CLASS__.'>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorSuspend: Declare.');
			class IndicatorSuspend
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorSuspend: construct.');
					this.objStrSrvReady			=document.getElementById('NetSrvReady');
					this.objStrSrvPortsReady		=document.getElementById('NetSrvPortsReady');
					console.log('[..]EDRO IndicatorSuspend: construct.');
					}
				}
			console.log('[.]EDRO IndicatorSuspend: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorSuspend');
		}
	public function strHTML()
		{
		$objIndicatorSuspend		=new IndicatorSuspend();
		return $objIndicatorSuspend->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Email:    Hfic.Samin@vk.com
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// Энергия                /////  / 
//  2020  /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Reality
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			//	'мВходящиеНастройки'	=> array(), 
			//	From Listener
			);
	private $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			//	'мНастройкиЭлемента'	=> array(),
			//	To Listener
			);
	public $R	= array( //Состояние операционной среды Реальность ([R]eality)
			//	Listener
			'bIzDNT'		=> FALSE, //Add event indicator to the top!!!!!!!!!!!!!
			'strTo'			=> '',
			'arrPlatform'		=> array(),
			'strConnection'		=> '',
			'strHiFiType'		=> '',
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'		=> '',
			'оСостояние'		=> '',
			'оСекундомер'		=> '',
			);
	public function __construct($arrE)
		{
		///////////////////////////////////////////////////////////////////////////////////////////////////////////
		//$this->E	= $arrE;
		//$this->D	= $arrD;
		//$this->R	= $arrR;
		$this->R['bIzDNT']		= $arrE['bIzDNT'];
		$this->R['strConnection']	= $arrE['strConnection'];
		$this->R['strTo']		= $arrE['strTo'];
		$this->R['arrPlatform']		= $arrE['arrPlatform'];

	/*+1+*/	$this->_IsDNT();
	/*+2+*/	$this->_isConsole();
		
		
		//$this->arrReality['мЗаголовкиСлушателя']	= $this->мЗаголовкиВПеременные($мЗапросИзБраузераСлушателя);
		//$this->arrReality['мЗаголовки']		= $this->мЗаголовкиЗапроса($this->arrReality['мЗаголовкиСлушателя']);
		//$this->arrReality['сРасширение']		= mb_strtolower(сКонцДоСимвола($this->arrReality['мЗаголовки'][1], '.'));

		///////////////////////////////////////////!!!!
		
		//$this->arrReality['сРасположениеКорень']	= '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase;
		///$this->arrReality['strRoleSignal']		= 'Listener';
		///$this->arrReality['strListnersPath']		= '/home/EDRO.o2o/'.$this->arrReality['strRoleSignal'];
		//$this->arrReality['strListenerId']		= СоздатьСеанс::с($this->arrReality['strRoleSignal'], $this);
		//print_r($this);
		//exit;
		//`$this->arrReality['arrCurrentListeners']	= ПрочитатьСлушателей::м($this->arrReality['strListnersPath']);

		/////////////////////////////////////////////////////////////////////////////////////////////////////////

		//+$this->arrReality['strRoleLangSignal']		= rmLb(FileRead::str($this->strBasePath.'/3.Reality/User/'.$this->arrReality['strRoleSignal'].'/.strLang.php'));
		//$this->arrReality['strLangSignal']		= strGetDomainLang();

		
		//print_r($this->arrReality);
		//print_r($_SESSION);
		//exit(0);

		}
	/*function мЗаголовкиЗапроса($_мЗаголовки)
		{
		$мЗаголовки	=array();
		if(isset($_мЗаголовки[0]))
			{
			$мЗаголовки	=explode(" ", $_мЗаголовки[0]);
					        unset($_мЗаголовки);
			}

		if(isset($мЗаголовки[0]))
			{
			$мЗапрос[$мЗаголовки[0]]	=$мЗаголовки[0];
			}
		else
			{
			$мЗапрос[$мЗаголовки[0]]	=0;
			}
		if(isset($мЗаголовки[1]))
			{
			$мЗаголовки[1]		=$мЗаголовки[1];
			}
		else
			{
			$мЗапрос[$мЗаголовки[1]]	=0;
			}
		return $мЗаголовки;
		}*/
	private function _isConsole()
		{
		$this->arrReality['bIzConsole']=false;
		if(php_sapi_name()=='cli')
			{
			$this->arrReality['bIzConsole']=true;
			}
		else
			{
			}
		}
	private function _isDNT()
		{
		//if($this->R['bDNT']==TRUE) // DNT
		//	{
		//	$str	= FileRead::strGetDesignHTML('/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/_isDnt.php', $this);
		//		_Report('Listener is using DO NO TRACK sett to on');
		//	return $str;
		//	}
		}
	public static function strObjectInit()
		{	
		$str	=Event::strOConstruct('Reality');
		$str	.="
			<script>
				console.log('[.++.+.*.*.++.+.+]EDRO.objReality.O: Init event stream graph circle.');
				objReality._CircleControllerGraph	=setInterval(objReality.funControllerGraph, 1000);
				console.log('[......*.*.......]EDRO.objReality.O: Init event stream graph circle.');
			</script>
			";
		return $str;
		}

	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Reality: Declare');
			class Reality
				{
				constructor()
					{
					console.log('[Vv]EDRO.Reality: Construct');
					//this.objDebugString		=document.getElementById('strPlayerPlayEventsDebugString');
					this.strLanguage		='';
					this.intStep			=0;
					this.intVector			=0;
					this.intStep2News		=0;

					this.arrPlayer			=[];
					this.arrPlayer.bIzLoading	=false;
					this.arrPlayer.bIzPlaying	=false;
					//this.arrParamG0.
					//this.strParams		='';
					this.intLoadingTime		=0;
					this.intMaxLoadingTime		=0;
					this.bIzError			=false;
					this.bIzLoading			=false;
					//this.bIzWaiting		=false;
					//this.bIzPlaying		=false;
					this.bIzHistory			=false;
					this.bIzPlayer			=false;
					this.bIzDynaScreen		=false;
					this.bIzCheckMaNet		=false;
					this.deviceType			=navigator.userAgent.toLowerCase();
					//alert(this.deviceType);
					this.bIzAndroid			=this.bIzAndroid();
					this.bIzApple			=this.bIzApple();
					this.bIzDesktop			=this.bIzDesktop();
					console.log('[..]EDRO.Reality: Construct');
					}
				bIzApple()
					{
					if((this.deviceType.indexOf("iphone")>-1) || (this.deviceType.indexOf("ipad")>-1)|| (this.deviceType.indexOf("ipod")>-1))
						{
						return true;
						}
					return false;
					}
				bIzAndroid()
					{
					if(this.deviceType.indexOf("android")>-1)
						{
						return true;
						}
					return false;
					}
				bIzDesktop()
					{/*и=* или=+    а*(и+с+в)    аи+ас+ав                  */
					/*		1  1 1 1=1 десктоп    					*/
					/*		0  0 0 0						*/
					/*									*/
					if(
					(this.deviceType.indexOf("android")==-1)&&
					(this.deviceType.indexOf("iphone")==-1 || 
					this.deviceType.indexOf("ipad")==-1|| 
					this.deviceType.indexOf("ipod")==-1)
					)
						{
						//this.objDebugString.innerHTML='Hfic.Samin+!!Desktop test!! all is ok';  //temp
						return true;
						}
					return false;
					}
				funControllerGraph()
					{
					console.log('[Vv]EDRO.O: Declare');
					var objDate	=new Date();
					if(objPlayer.bIzPlaying) //!!!    objReality.bIzPlayerPlaying!!!
						{
						document.title	=objPlayer.strStationName+' at HiFiIntelligentClub.com';
						//objPlayer.objVisibleControlsPlayingDuration.innerHTML=objPlayer.intPlayingDuration;
						//objPlayer.objVisibleControlsPlayingDuration.innerHtml	=objPlayer.intPlayingDuration;
						objPlayer.intPlayingDuration++;
						}
					if(objReality.arrPlayer.bIzLoading||objReality.arrPlayer.bIzPlaying)
						{
					//	console.log(objPlayer.objAudio.textTracks);
						if(objPlayer.objAudio.networkState==1)
							{
							objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='yellow';
							objIndicatorNetwork.objStrSrvReady.style.color			='black';
							}
						else if(objPlayer.objAudio.networkState==2)
							{
							objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='green';
							objIndicatorNetwork.objStrSrvReady.style.color			='white';
							}
						else
							{
							objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='red';
							objIndicatorNetwork.objStrSrvReady.style.color			='white';
							}

						if(objPlayer.objAudio.readyState==0)
							{
							objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='red';
							objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
							}
						else if(objPlayer.objAudio.readyState==1)
							{
							objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='yellow';
							objIndicatorNetwork.objStrSrvPortsReady.style.color		='black';
							}
						else if(objPlayer.objAudio.readyState==2)
							{
							objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='blue';
							objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
							}
						else if(objPlayer.objAudio.readyState==3)
							{
							objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='green';
							objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
							}
						else
							{
							objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='white';
							objIndicatorNetwork.objStrSrvPortsReady.style.color		='black';
							}
						objPlayer.intPlayingDuration++;
						}
					if(objReality.arrPlayer.bIzLoading)
						{
						//objPlayer.objVisibleControlsLoadingDuration.innerHTML=objPlayer.intLoadingDuration;
						if(objPlayer.intPlayerLoadingAnim==3)
							{
							objPlayer.intPlayerLoadingAnim				=0;
							objPlayer.strPlayerLoadingAnim				='';
							}
						objPlayer.intPlayerLoadingAnim++;
						objPlayer.strPlayerLoadingAnim				+='.';
						document.title						=objPlayer.strPlayerLoadingAnim+decodeURIComponent(objPlayer.strStationName)+'on HiFiIntelligentClub.com';
						objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime+'/'+objPlayer.intLoadingDuration;
						if(!objPlayer.bIzNeedToBeStoppedEvent)
							{
							//objPlayer.objAudio.load();
							}
						objPlayer.intLoadingDuration++;
						//objPlayer.bIzLoading=false;
						}
					else
						{
						objPlayer.strPlayerLoadingAnim	='';
						document.title	=objPlayer.strPlayerLoadingAnim+decodeURIComponent(objPlayer.strStationName)+'|HiFiIntelligentClub.com';
						}
					if(objReality.bIzLoading)
						{
						objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime;
						if(objReality.intLoadingTime>=objReality.intMaxLoadingTime)
							{
							objReality.intMaxLoadingTime		=objReality.intLoadingTime;
							}
						objReality.intLoadingTime++;
						}
					//if(objPlayer.bIzError)
					//	{
				
					//	}
					if(objReality.arrPlayer.bIzWaiting)
						{
					
						}
					if(objReality.intVector==2)
						{
						objReality.intVector	=0;
						if(bizHiFiNavigationInputSelect) //In Dynascreen input focus, no template transitions, wait for human input
							{
							}
						else
							{
							//objIndicatorLang._UpdateIndicator();
							objDesign._UpdateDimensions();
							objDesign._CheckElements();
							}
						}
					if(objReality.intStep2News==60)
						{
						objReality.intStep2News	=0;
						}
					objIndicatorMasterClock.objStr.innerHTML	=objReality.intStep++;
					objReality.intVector++;
					objReality.intStep2News++;
					objEDRO._CircleControllerGraph;
					console.log('[..]EDRO.O: Declare');
					return 0;
					}
				}
		console.log('[.]EDRO.Reality: Declare');
		</script>
oo2oo;
		return $str;
		}
	}

                     /*_____
© Andrey Chekmaryov 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Email:    Hfic.Samin@vk.com
Phone:    +7(911)7874457
Whatsapp: +7(911)7874457
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international :  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international :  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
.---------------------------------------------------------------,
|E		|D		|R		|O		|
|Event		|Design		|Reality	|Objects	|
|ЕСЛИ 		|ЕСЛИ 		|ЕСЛИ 		|ЕСЛИ 		|
|ДЕЙСТВИЕ	|ДЕЙСТВИЕ	|ДЕЙСТВИЕ	|ДЕЙСТВИЕ	|
|РЕАЛЬНОСТЬ	|РЕАЛЬНОСТЬ	|РЕАЛЬНОСТЬ	|РЕАЛЬНОСТЬ	|
|ОБЪЕКТ		|ОБЪЕКТ		|ОБЪЕКТ		|ОБЪЕКТ		|
'---------------------------------------------------------------'
 ////
//        /\
//      <  **>
 //////   jl
./././././././*/

class Objects
	{
	//public $arrObjects;
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			//	'мВходящиеНастройки'	=> array(), 
			//	From Listener
			);
	private $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			//	'мНастройкиЭлемента'	=> array(),
			//	To Listener
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
			//	Listener
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'		=> '',
			'оСостояние'		=> '',
			'оСекундомер'		=> '',
			);
	public function __construct($o)
		{
		///////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->E	= $o->E;
		$this->D	= $o->D;
		$this->R	= $o->R;
		//$this->arrReality['сРасположениеКорень']	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub'; //moved to REALITY
		$strPlatformPrefix	= '';
		$strHiFiType		= сПреобразовать($this->E['arrReality']['strHiFiType'], 'вСтроку');
		//$strHiFiType		= '/HiFi beginner';

		$arrHiFi['Low quality']		='Low';   //NoHiFi
		$arrHiFi['HiFi beginner']	='beginner'; //HiFi
		$arrHiFi['HiFi casual']		='casual'; //HiFi
		$arrHiFi['HiFi often']		='often';  //HiFi
		$arrHiFi['HiFi mustbe']		='mustbe'; //HiFi
		$arrHiFi['HiFi modern']		='HiFi 2.1'; //2.1
		$arrHiFi['HiFi modern_casual']	='HiFi 5.1'; //5.1
		$arrHiFi['HiFi modern_casual+']	='HiFi 7.1'; //7.1
		//print_r($this->arrEvent['arrReality']['strStationID']);
		//exit();
	/*	
		foreach($arrHiFi as $strHiFiTypeName =>$strHiFiShortName)

			{
			if(strpos($strHiFiType, $strHiFiShortName)!==FALSE)
				{
				$strHiFiType	=$strHiFiTypeName;
				}
			}
		if($strHiFiType=='')
			{
			$strHiFiType		='/HiFi beginner';
			}
		else
			{
			$strHiFiType		='/'.$strHiFiType;
			}
		$this->arrEvent['arrReality']['strHiFiType']	=$strHiFiType;
		if($this->arrReality['bIzAndroid'])
			{
			$strPlatformPrefix	='/Android';
			}
		if($this->arrReality['bIzApple'])
			{
			echo $strPlatformPrefix	='/Apple';
			}
		//$сРасположениеКорень	=$сРасположениеКорень;

		$strSearchName		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strName']),'вКоманду');
		if(strlen($strSearchName)<3)
			{
			$strSearchName	='';
			}
		$strSearchGenre		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strGenre']),'вКоманду');
		$strSearch		=мЖанр_мЯзык_мТранскрипция($strSearchGenre);

		$strSearchType   	=empty($strSearchName)? '/unordered/':'/search/';
		//echo $сРасположениеКорень.'/Stations/strICQRTypeF.php';
		include($this->arrReality['сРасположениеКорень'].'/Stations/strICQRTypeF.php');

		$strSearchPath		='/Stations/'.$strICQRTypeF.'/'.$strHiFiType.$strPlatformPrefix;
		if($strSearchGenre=='')
			{
			$strSearchPath	.=$strSearchType;
			}
		else
			{
			$strSearchPath	.='/Genres/search/'.$strSearchGenre.$strSearchType;
			}
		$strSearchPath;
		if($this->arrEvent['arrReality']['strPlayingStationId']!='')
			{
			}
		else
			{
			}

		$this->arrObjects['сРасположение']		=$this->arrReality['сРасположениеКорень'].$strSearchPath;
		if($strSearchName=='')
			{
			$objTotal	=FileRead::objJSON($this->arrObjects['сРасположение'].'/total.plmr');

			$this->arrObjects['ч0РасположениеTotal']	= ($objTotal->int1Total-1);
			if($this->arrObjects['ч0РасположениеTotal']=='')
				{
				echo 'No data';
				}
		//exit;
			$this->arrObjects['мРасположение']		=Pagination::arr($this);

			for($int0I=$this->arrObjects['мРасположение']['int0Start'];$int0I<=$this->arrObjects['мРасположение']['int0Untill'];$int0I++)
				{
				$this->arrObjects['мТаблица'][]	=$this->arrObjects['сРасположение'].'/'.$int0I.'.plmr';
				}
			}
		else
			{
			
			$this->arrObjects['сРасположение']	=$this->arrObjects['сРасположение'];
			$strSearch		=$this->arrObjects['сРасположение'];
			$strPattern		='ls -R -1 "'.$strSearch.'"'.'*'.$strSearchName.'*';
			
			$arrSearch		=exec($strPattern, $arrSearchPaths, $arrSearchPaths2);
			//print_r($arrSearchPaths);
			$strPath		='';
			$ч1РасположениеTotal	=0;
			$мРасположение		=array();
			if(is_array($arrSearchPaths))
				{
				//print_r($arrSearchPaths);
				//exit;
				foreach($arrSearchPaths as $intPosition=>$strRecord)
					{
					if(preg_match('/^[0-9]+\.plmr$/', $strRecord, $arrMatches)===1)
						{
						if(substr($strRecord,0,1)==0)
							{
							$strPath =substr($arrSearchPaths[($intPosition-1)],0 ,-1);
							}
						$мРасположение[]	=$strPath.'/'.$strRecord;
						$ч1РасположениеTotal++;
						}
					}
				}
			if($ч1РасположениеTotal>1)
				{
				$ч0РасположениеTotal			=($ч1РасположениеTotal-1);
				}
			else
				{
				$ч0РасположениеTotal			=0;
				}
			$this->arrObjects['ч0РасположениеTotal']	=$ч0РасположениеTotal;
			$this->arrObjects['мРасположение']		=Pagination::arr($this);

			for($int0I=$this->arrObjects['мРасположение']['int0Start'];$int0I<=$this->arrObjects['мРасположение']['int0Untill'];$int0I++)
				{
				$this->arrObjects['мТаблица'][]		=$мРасположение[$int0I];
				}
			//echo '<pre>';
			//print_r($мРасположение);
			//echo '</pre>';
			}
	*/
		/*if($this->arrReality['bIzAndroid'])
			{
			echo '<pre>';
			print_r($this->arrEvent['arrReality']['strHiFiType']);
			echo '</pre>';
			exit;
			}*/
		//echo '<pre>';
		//print_r($this);
		//echo '</pre>';
		//exit;
		}
	public static function strObjectInit()
		{
		$str='';
		return $str;
		}
	public static function strCopyrightDeclare()
		{
		$str='
		<copyright
			id="PageCopyrightTag"
			class="BC3 TC3 layer_5_Nav no-select halfLine"
			style="
				text-align	:center;
				position	:fixed;
				bottom		:0;
				left		:0;
				width		:100%;
				"
			>
			<font 
				style="font-size:xx-small"
				>HiFiIntelligentClub. © tubmulur@yandex.ru 2021 
				<ifRU
					>
					На облаке Reg.Ru.
				</ifRU>
				<ifEN
					>
					On Reg.Ru cloud.
				</ifEN>
			</font>
		</copyright>
		<script>
			var oEl=document.getElementById("PageCopyrightTag");
		</script>';
		return $str;
		}
	public static function strAudioDeclare()
		{
		/*$str='
		<shader
			class	="fix brick layer_5"
			style	="
				top		:20px;
				right		:80px;
				height		:40px;
				width		:40px;
				overflow	:hidden;
				"
			>
			<audio 
				id		="objHiFiIntelligentClubAudio"
				class		="block right"
				
				controls	=""
				name		="media"
				>
				<source 
					src		="" 
					type		="audio/mpeg"
					/>
			</audio>
		</shader>
		';*/
		//return $str;
		}
	public static function strObjectDeclare()
		{
		$str='';
		return $str;
		}
	}





		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
		    //$_arrData=array('strDir'=>'dir', 'strFile'=>'file');








class FileRead
	{
	public $str;
	public function __construct($_strSetupFile)
		{
		$strSetupFile=$_strSetupFile;
		        unset($_strSetupFile);
		if(is_file($strSetupFile))
			{
			}
		else
			{
			фОшибка($strSetupFile.' is not a file, or no permissions.');
			}

		$intSetupFileSize=filesize($strSetupFile);

		if($intSetupFileSize===FALSE)
			{
			фОшибка($strSetupFile.' can not read file size.');
			}

		$linkFile	=fopen($strSetupFile, 'r');

		if($linkFile===FALSE)
			{
			фОшибка($strSetupFile.' can not open.');
			}

		$this->str	=fread($linkFile, $intSetupFileSize);

		if($this->str===FALSE)
			{
			фОшибка($strSetupFile.' can not read.');
			}

		$bIsClosed	=fclose($linkFile);
		
		if($bIsClosed===FALSE)
			{
			фОшибка($strSetupFile.' can not close.');
			}
		}
	public static function arrJSON($_strDataFile)
		{
		$objRead=new FileRead($_strDataFile);
		$arr =json_decode($objRead->str, true);
		unset($objRead);
		if($arr===NULL)
			{
			фОшибка($_strDataFile.' is not a JSON.');
			}
		return $arr;
		}
	public static function objJSON($_strDataFile)
		{
		$objRead=new FileRead($_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			фОшибка($_strDataFile.' is not a JSON.');
			}
		return $obj;
		}
	public static function objО2О($_strDataFile)
		{
		$objRead	=new FileRead($_strDataFile);
		$obj 		=json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			фОшибка($_strDataFile.' is not a JSON.');
			}
		return $obj;
		}
	public static function objJSON_l($_strDataFile)
		{
		фОшибка('File::Read()::objJSON _l '.$_strDataFile);
		$objRead=new FileRead($_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			фОшибка($_strDataFile.' is not a JSON.');
			}
		return $obj;
		}
	public static function objXML($_strDataFile)
		{
		$obj=simplexml_load_file($_strDataFile);

		if($obj===FALSE)
			{
			фОшибка('load_simple_xml_load is not an XML or file_access_error .');
			}
		return $obj;
		}
	public static function str($_strDataFile)
		{
		$objRead	=new FileRead($_strDataFile);
		$str		=$objRead->str;
		unset($objRead);

		$objDesignPosition_centerList='';

		if(empty($str))
			{
			фОшибка($_strDataFile.' is empty.');
			}
		return $str;
		}
	public static function strGetDesignHTML($_strDataFile, $objEDRO) //_GetDesignHtml
		{
		$str		='';
		$strDataFile	=$_strDataFile;
			   unset($_strDataFile);
		if(is_file($strDataFile))
			{
			require$strDataFile;
			return $str;
			}
		else
			{
			фОшибка($strDataFile.' Нет файла.');
			return '';
			}
		
		return $str;
		}
	}

$str ='
<questions
class="block TC1 BC1 scrollerY"
	>
	<question class="block TC1 BC1">
		Are you robot?
	</question>
	<question class="block TC1 BC1">
		Are you assm programmer or coder?
	</question>
	<question class="block TC1 BC1">
		Are you Igor S Zirinskiy, our partner and entity participating in the profit of 51%?;
	</question>
	<question class="block TC1 BC1">
		Are you Kate Y Shapovalova, our partner and entity participating in the profit of 9%?;
	</question>
	<question class="block TC1 BC1">
		Are you Michael Teselkin, person entitled to buy 1% of shares?;
	</question>
	<question class="block TC1 BC1">
		Are you scientist?
	</question>
	<question class="block TC1 BC1">
		Are you dancer?
	</question>
	<question class="block TC1 BC1">
		Are you poet?
	</question>
	<question class="block TC1 BC1">
		Are you singer?
	</question>
	<question class="block TC1 BC1">
		Are you radioDj?
	</question>
	<question class="block TC1 BC1">
		Are you hardcore filarmonia virtuose?
	</question>
	<question class="block TC1 BC1">
		Are you hardcore conservatoria composer?
	</question>
	<question class="block TC1 BC1">
		Are you a DjFeel?
	</question>
	<question class="block TC1 BC1">
		Are you a Julia Pugo?
	</question>
	<question class="block TC1 BC1">
		Are you a Dj Миша Пуго?
	</question>
	<question class="block TC1 BC1">
		Are you a Paul Oakenfold?
	</question>
	<question class="block TC1 BC1">
		Are you Armin van Buuren?
	</question>
	<question class="block TC1 BC1">
		Are you Ferry Corsten?
	</question>
	<question class="block TC1 BC1">
		Are you Dj Михаил Тумблер?
	</question>
	<question class="block TC1 BC1">
		Are you Dj Мозг?
	</question>

	<question class="block TC1 BC1">
		Are you music shop getway Yaroslav Pomogaykin?
	</question>
	<question class="block TC1 BC1">
		Are you music shop getway2.0 Bogdanova Tatiana?
	</question>
	<question class="block TC1 BC1">
		Are you hockey player Ginger Red?
	</question>
	<question class="block TC1 BC1">
		Are you guitar virtuoz Alexey Popov?
	</question>
	<question class="block TC1 BC1">
		Are you Dj store underground Talhin Tagir?
	</question>
	<question class="block TC1 BC1">
		Are you Yamaha dealler Юрий Фоминенко?
	</question>
	<question class="block TC1 BC1">
		Are you trance composer Roman Messer?
	</question>
	<question class="block TC1 BC1">
		Are you trance composer Alex Byrka?
	</question>
	<question class="block TC1 BC1">
		Are you trance composer Ruslan Device?
	</question>
	<question class="block TC1 BC1">
		Are you drum`n`bass composer and Dj Konstatin Gvozd?
	</question>
	<question class="block TC1 BC1">
		Are you house Dj Harisov?
	</question>
	<question class="block TC1 BC1">
		Are you opera singer Anastasia Makimova?
	</question>
	<question class="block TC1 BC1">
		Are you studio owner I. Zirinskiy?
	</question>
	<question class="block TC1 BC1">
		Are you chanson music composer Н.Мясников?
	</question>
	<question class="block TC1 BC1">
		Are you electro live player Dj Пришелец?
	</question>
	<question class="block TC1 BC1">
		Are you trance cmposer Alex Shevchenko?
	</question>
	<question class="block TC1 BC1">
		Are you from Trance.kG/Radio?
	</question>
	<question class="block TC1 BC1">
		Are you Artem Dmitriev, great and talanted product presentator?
	</question>
	<question class="block TC1 BC1">
		Are you from any radio station listed?
	</question>
	<question class="block TC1 BC1">
		Are you dark longhair person?
	</question>
	<question class="block TC1 BC1">
		Dou you want to see gay stations?
	</question>
	<question class="block TC1 BC1">
		Dou you want to see getero stations?
	</question>
	<question class="block TC1 BC1">
		Are you grass smoker?
	</question>
	<question class="block TC1 BC1">
		FM Mode.
	</question>
	<question class="block TC1 BC1">
		Save your setup.
	</question>
	<question class="block TC1 BC1">
		Hfic selection.
	</question>
	<question class="block TC1 BC1">
		DjMode Experimental (+vl)
	</question>
	<question class="block TC1 BC1">
		Receiver mode
	</question>
	<question class="block TC1 BC1">
		Black Mode
	</question>
	<question class="block TC1 BC1">
		Are you John Mcraven from pleasure beats?
	</question>
	<ifRU class="block left" > 
		<Notice class="block" style="font-size:60px">Альбомная ориентация</Notice>
		<WeDeclareOurPowerVectorDirection style="font-size:small">
		ХайФайИнтеллиджентКлаб.<br/> 
		Для безопасного использования.<br/> 
		Чтобы не исчезнуть, внезапно, мы стартовали наше приложение в сети onion. http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion<br/><br/>
		Тестируем периодически уже сейчас. Скоро запустим в стабильную работу.<br/><br/>
		Там мы будем доступны в любом случае. Сейчас по этому адресу, тестируемая мной версия следующего релиза.<br/><br/>
		 Onion сервер - это более защищённая версия сайта и приложения, <br/><br/>
		Доступ к ресурсу возможен только через ТОР браузер. https://www.torproject.org/.<br/>
		<br/>
		Сегодня 19.сентября.2020, мы полностью отказались от использования сервиса "Музыка в Контакте",
		тк. прграммисты, вк не справились с задачей, и  весь раздел музыка, работает из рук вон плохо, а самый главный
		минус, отвратительный, очень плохой звук. Я загружаю свой трек в ВК, и меня от него начинает тошнить!
		<br/><br/>
		Мы попробовали помочь сервису измениться, потратили на бескорыстную помощь около 3х месяцев, за свой счёт.
		Взаимопонимания достичь не удалось. К сожалению. Мы продолжаем развивать нашу систему хранения музыки.
		Система автономного хранения СОТА, позволит музыканту самостоятельно хранить свои музыкальные файлы, в качестве, которое он выбирает сам,
		Мы же предоставляем ему только доступ к кеширующему сокету, который делает доступным материал музыканта, по всему миру, без задержек, тормозов и сбоев.
		<br/><br/>
		Единственное, чего мы хотели добиться - не терять возможность забрать свои треки с ресурса, по своему желанию, без труда и унижения.<br/><br/>
		Возможность контролировать и отвечать за свой звук САМОСТОЯТЕЛЬНО. Своими ушами, своей репутацией, своим умом.<br/><br/>
		Мы не хотели противостоять гигантам монополистам и целый год терпели отвратительный звук, 
		а три месяца терпели ответы из поддержки: "Переустановите браузер и приложение".<br/><br/>
		Мы утратили все наши музыкальные треки, написанные в течении 16 лет, на студии, распроданной 10 лет назад. <br/><br/>
		Мы попросили возможность забрать наши треки, хотя-бы не пережатые 3 раза из ВК.
		Нам отказали. Наши 16 лет жизни -незначительная проблема для гигантов.(Assminog & ZzzuzzZ)<br/>
		<br/>
		Терпеть это унижение больше нет сил. Иван встал c печи и намерен идти до конца.<br/><br/>
		Наши мечты подкреплены математическим диффиренциальным рассчётом, позволившим нам сделать этот первый диффиренциальный скачёк.<br/><br/>
		Каждый следующий скачёк, будет увеличивать нашу производительность в несколько раз.<br/><br/>
		Да здравствует диффиренциальное исчисление, интегральное исчисление, матрицы, определители, факторинг, теория графов, ООП и замкнутый граф kG.<br/><br/>
		<br/>
		Хорошего дня, всем кто, как и мы, любит хороший звук и не готов мириться с его порчей невнимательными разработчиками, засевшими в глобальных ресурсах-монополистах. Hfic.Samin <br/>
	`	</WeDeclareOurPowerVectorDirection>


🚅    [RU] Всем привет!<br/><br/>
 🚃Сетевой аудио плеер HiFiIntelligentClub - самый высококачественный и производительный плеер в мире. 🚃<br/><br/>

Подходит для использования в автомобиле, мобильном телефоне, планшете, автомагнитоле, стационарном компьютере. 🚣<br/><br/>

Плеер сделан используя технологии, написанных нами с нуля. <br/><br/>

(🚲Мы пошли по этому пути, благодаря не решенной до сих пор проблеме, известной во всём мире как проблема "Нет денег 2000" и 
"Плати и владей 2020". <br/><br/>

🚃В деньги мы не упёрлись, всё сделали сами. ☕Спасибо университету ИТМО, за то что, когда я  был студентом, 
нас драли как сидровых коз. Толк в этом есть. И знания языка Ассемблер помогли в том числе, экономить миллоны рублей ежегодно. <br/><br/>

🚃Для нас миллион рублей - было не преодолимым препятствием для старта, а Ассемблер, взял и сэкономил этот миллион. И всё получилось). <br/><br/>
💡Вот наши технологии: <br/>
"Семафор[Сёма4]" (Сёма4 выбран за основу, тк в интернете очень много если и бардака, стандартов несколько а в 
процессе багрепортинга можно сильно загрустить, а у поездов семафор - это Бог, поэтому цвета плеера как у семофоров: 
Белый, жёлтый, голубой, красный. <br/>
🚃 Дебаггер "Вектор КИМа" (Философия: Отладь или умри, вне зависимости от того, сыт ты и есть ли у тебя 
хотя бы рубль в кармане) и <br/>
🚢 технологии синтеза исходного кода "ЕДРО" (Если Действие Реальность Объект). <br/><br/>
🚑Мы немного задерживаемся с 
апдейтом универсального интерфейса (Поиск, сервер баз данных итд.), очень много технических нюансов. <br/><br/>
🚃Ресурс в настоящий момент работает и возможно отвечает не всегда корректно на поисковые запросы  🚃. <br/><br/>
Дождитесь пожалуйста обновления, оно исправит положение дел. 
Спасибо что выбрали нас. Мы стараемся быть качественными. <br/><br/>
🚃Мы хотим быть качественными и прилагаем для этого все имеющиеся силы. <br/><br/>
🚑Исходные коды технологий проекта
(Обновляются не всегда вовремя, приношу извинения, но разработчик всего один. Это я. Исходники со временем будут все.): 
https://github.com/tubmulur	<br/><br/>
Разработчик приложения, реквизиты:<br/>
Индивидульный Предприниматель Чекмарёв А.А.<br/>
 19005, Россия, Санкт-Петербург, Троицкий пр. 16/22;<br/>
 ОГРНИП:309784721100325;<br/>
 ИНН: 782608611060<br/>
 Р/с:  40802810501006100214<br/>
 Филиал "Петровский" ОАО Банк "ОТКРЫТИЕ" г. Санкт-Петербурге<br/>
 К/с: 30101810400000000766<br/>
 БИК: 044030766<br/>

 
[Метро Технологический институт, Адмиралтейский р-н, "Адмиралтейский Пэрэдайз Дистрикт" (Что-то вроде силиконовой долины)] ]; 
</ifRU>
							<ifEN class="block left"                                > 
🚅    [EN] Hello everyboody! <br/><br/>
🚃You are on the HiFiIntelligentClub network audio player page. <br/><br/>
For today, HiFiIntelligentClub player is most universal and stable player of audiostream in the world. <br/><br/>
🚃It supports stable playing in the background and on top, in carsaudio, mobile devices, laptops. <br/><br/>
🚣Player was created using technologies, created by ourself (🚲Because of not solved yet "No money 2000" problem).<br/><br/>
 💡Here they are: Semafor[Sema4](Its train based filosophy, wnen semaphor signal is the God of the movement logics, so our colors are: 
Red, Blue, Yellow and white), <br/><br/>
debugger: VectorKIIM (Radical Javascript debugger. Debug or die filosophy), <br/><br/>
and 🚢code syntesis technology EDRO. <br/><br/>
🚃Player is working, but we are on high difficulty update of enduser interface, database server and search engine. <br/><br/>
🚃Sorry, that we 
cant fix any finded misstakes right now. <br/><br/>
🚑Project has only one developer at all. <br/><br/>
Sorry for the navigation misstakes, guess we fix it. <br/><br/>
Please wait for update. <br/><br/>
 Source codes https://github.com/tubmulur: <br/><br/>
App developer: <br/>
Individual Entrepreneur: Checkmarev A.A. <br/>
Registration certificate of Individual Entrepreneur: 309784721100325<br/>
Individual Taxpayer Number: 782608611060<br/>
Bank account: 40802810501006100214<br/>
BIC: 044030766<br/>
Address: 19005, Russia, Saint-Petersbourg, Troitskiy pr. 16/22,  <br/>
Metro Institute of Technology, Admiralteyskiy dc, <br/>
"Admiralteyskiy Paradise District" some kind of the high tech area
]; 
</ifEN>';

$str='
<HficNews 
	class="fix block TC1 BC1 V97 HR0 layer_2" 
	style="
		height		:20px;
		font-size	:small;
		line-height	:9px;
		">
	<HIC_PRESIDENT_MESSAGE
		class	="block" 
		style		="
				height		:100%;
				"
		>

		<on-air 
			title	="Active"
			class	="abs block" 
			style	="
				top			:0;
				right			:0;
				width			:4px;
				height			:4px;
				background-color	:green;
				"
			>
		</on-air>

			<HficSamin title="Assembling please wait for result little more.. Hfic Samin" style="color:green;font-size:xx-small;height:20px;" class="brick left BC3 TC3"  mail-me-gmail="tubmulur@yandex.ru" message-me-telegram="https://t.me/hficsamin" message-me-whatsapp="+79117874457" view-oficial-group-main="https://vk.com/HiFiIntelligentClub" view-oficial-group-shine="https://facebook.com/HiFiIntelligentClub" title="https://t.me/hficsamin,whatsapp +79117874457,tubmulur@yandex.ru,https://vk.com/HiFiIntelligentClub,https://facebook.com/HiFiIntelligentClub">
				<marquee 
					class="abs brick right" 
					style="right:0px;width:10px;height:20px;color:blue;font-size: x-large;margin-top:1px; background-color:transparent;" 
					scrollamount="5"
					>
					`\'\'\'\'---...._______________________________..._______....\'\'\'\'`
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:0px;width:10px;height:20px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					``\'\'\'\'-....______________________________....______....\'\'\'\'``
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:0px;width:10px;height:20px;color:white;font-size: x-large;margin-top:-1px; background-color:transparent;" 
					scrollamount="5"
					>
					`\'\'\'\'---....______________________________________________....\'\'\'\'`
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:10px;width:10px;height:20px;color:blue;font-size: x-large;margin-top:1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---....._......................____________________________....\'\'\'\'``
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:10px;width:10px;height:30px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---...._________________________________________.._____....\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:10px;width:10px;height:30px;color:white;font-size: x-large;margin-top:-1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---......._________________________________________....\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:20px;width:10px;height:30px;color:blue;font-size: x-large;margin-top:1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'--....________________________________....\'\'\'\'`
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:20px;width:10px;height:20px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					``\'\'\'\'---...__________________________________---_-_....\'\'\'\'``
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:20px;width:10px;height:20px;color:white;font-size: x-large;margin-top:-1px;background-color:transparent" 
					scrollamount="5"
					>
					``\'\'\'\'-_-_-_---_-_._..__-_______________________-_-_-_-_-_-_....\'\'\'\'``
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:30px;width:10px;height:20px;color:blue;font-size: x-large;margin-top:1px;background-color:transparent" 
					scrollamount="5"
					>
					````\'\'_\'\'--_-...________....________________\'\'\'___________\'_`_`
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:30px;width:10px;height:30px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---....________....._________....\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:30px;width:10px;height:30px;color:white;font-size: x-large;margin-top:-1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---...._____________._____________________......\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:40px;width:10px;height:20px;color:blue;font-size: x-large;margin-top:1px; background-color:transparent;" 
					scrollamount="5"
					>
					`\'\'\'\'---...____________.______________.___________.________....\'\'\'\'`
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:40px;width:10px;height:20px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					``\'\'\'\'-...._____________.__________________....\'\'\'\'``
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:40px;width:10px;height:20px;color:white;font-size: x-large;margin-top:-1px; background-color:transparent;" 
					scrollamount="5"
					>
					`\'\'\'\'---....________________________________________________________________....\'\'\'\'`
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:50px;width:10px;height:20px;color:blue;font-size: x-large;margin-top:1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---...._________________________________________________....\'\'\'\'``
				</marquee> 
				<marquee 
					class="abs brick right" 
					style="right:50px;width:10px;height:30px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---....____________________________________________....\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:50px;width:10px;height:30px;color:white;font-size: x-large;margin-top:-1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'---.......________________________....\'\'\'\'
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:60px;width:10px;height:30px;color:blue;font-size: x-large;margin-top:1px;background-color:transparent" 
					scrollamount="5"
					>
					`\'\'\'\'--...._________________________________....\'\'\'\'`
				</marquee>
				<marquee 
					class="abs brick right" 
					style="right:60px;width:10px;height:20px;color:red;font-size: x-large;margin-top:3px;background-color:transparent" 
					scrollamount="5"
					>
					``\'\'\'\'---..._______________________________....\'\'\'\'``
				</marquee> 
				<line class="block TC2 BC2-L scrollerY" >
					<ifRU> <marquee scrollamount="1"> Движемся 98% успеха+ 30 января 2021. <?=(19-date(\'d\'))?> VK.COM Сделал звук таким, что я слышу артефакты компрессии только на уровне различия голосов в шуме стадиона, попавшего в микрофон к вокалисту. Возоможности звука VK.MUSIC впечатляют. Экономия за счёт качества звука, отменена в VK.MUSIC, Россия продолжает оставаться одной из богатейших стран планеты. А что же HiFiIntelligentClub? Что может быть лучше хорошего Dj сета от профи? Ничего. Каждый кто хоть раз слышал вас, обязательно вернётся. Так же как в своё время я. Hfic.Samin федеративный канслер HiFiIntelligentCLub\'а.</marquee></ifRU>
					<ifEN><marquee scrollamount="1"> Moving 98% success+ 30 january 2021. <?=(19-date(\'d\'))?> The sound in VK.COM now as good as it can be played from the compressed source. I hear it only at stadium applause, where I cant count the people that making noise at the distance more than 14meters from microphone. Also the color of them is approximated and smooth. This could means, no traffic economy applied to VK.MUSIC and it sounds great. Russia stay reach country. Don\'t be affraid about any concurrency. HiFiIntelligentClub\'s Dj\'s are sounds unique, because they are strong enougth to play not only the music with a great sound, satisfying the visitors by their Dj skills. Any man who listen your, will return. Like me some times ago. Hfic.Samin the federative kanzler of HiFiIntelligentClub. </marquee></ifEN>
				</line>
				<line class="block TC3 BC3 line scrollerY" >
					<ifRU> <marquee scrollamount="1"> Движемся 98% успеха+ 30 января 2021. <?=(19-date(\'d\'))?> VK.COM Сделал звук таким, что я слышу артефакты компрессии только на шуме стадиона. Возоможности звука VK.MUSIC впечатляют.</marquee></ifRU>
					<ifEN><marquee scrollamount="1"> Moving 98% success+ 30 janury 2021. <?=(19-date(\'d\'))?> The sound in VK.COM now as good as it can be compressed sound. I hear it only at stadium applause, Cant count the people that  making noise at the distance more than 14meters from microphone. Also the color of them is approximated and smooth. This could means, no traffic economy appplied to VK.MUSIC and it sounds better than enhansed by Opera mp3 enhanser sound of iTunes :). </marquee></ifEN>
				</line>
				<line class="block TC3 BC3 line" >
					<ifRU>Готовим сборку 95% успеха 29 января 2021. <?=(19-date(\'d\'))?> дней задержка выхода версии.</ifRU>
					<ifEN>Prepearing build 95% complete 29 janury 2021. <?=(19-date(\'d\'))?> days delay of version publishing.</ifEN>
				</line>
				<line class="block TC3 BC3 line" >
					<ifRU>Строим индексы 90% успеха 29 января 2021. <?=(19-date(\'d\'))?> дней задержка выхода версии.</ifRU>
					<ifEN>Building indexes 90% complete 29 janury 2021. <?=(19-date(\'d\'))?> days delay of version publishing.</ifEN>
				</line>
				<line class="block TC3 BC3 line" >
					<ifRU>Оптимизируем элементы 75% успеха 23 января 2021. <?=(19-date(\'d\'))?> дней задержка выхода версии.</ifRU>
					<ifEN>Optimizing elements 75% complete 23 janury 2021. <?=(19-date(\'d\'))?> days delay of version publishing.</ifEN>
				</line>
				<line class="block TC3 BC3 line" >
					<ifRU>Увеличиваем скорость отклика интегруя сервер Абхазия 15 января 2021. <?=(19-date(\'d\'))?> дней осталось.</ifRU>
					<ifEN>We are on integrating super fast Abhasia server 15 janury 2021. <?=(19-date(\'d\'))?> days left.</ifEN>
				</line>
				<line class="block TC1 BC1" style="color:red;height:20px;margin-left:40px;">
					<ifEN>2020dec29[16:28:41]GMT+3 We use COOKIE to save your search and navigation position, and return you to the page of radiostation you find before, for comfort use HiFiIntelligentClub..[Edits:2]</ifEN>
					<ifRU>2020dec29[16:28:41]GMT+3 Мы используем КУКИ, чтобы сохранить вашу позицию при навигации, и вернуть вас обратно, когда вы вернётесь, к любимой радиостанции. [Изменений:1]</ifRU>
				</line>
				<line class="block TC1 BC1" style="color:red;height:20px;margin-left:40px;">
					<ifEN>2020dec29[08:25:04]GMT+3 Updateing DATABASE. Please wait. Search and stations show wil work little later. Temporary only manual updates of news and tags.[Изменений:3]</ifEN>
					<ifRU>2020dec29[08:25:04]GMT+3 Updateing DATABASE. Please wait. Search and stations show wil work little later. Temporary only manual updates of news and tags.[Изменений:3]</ifRU>
				</line>
				<line class="block TC3 BC3" style="height:20px;margin-left:40px;">
					<ifEN>2020dec29[07:49:04]GMT+3Version 2 is under update within 12 hours. Update your page and see what s new.[Изменений:1]</ifEN>
					<ifRU>2020ДЕК29[07:49:04]GMT+3Плавно загружаем версию 2. Загружена основа, сейчас добавляем модули. Обновите страницу, чтобы увидеть изменения. Скоро будет всё. Новогоднй релиз! Hfic.Samin[Изменений:1]</ifRU>
				</line>
				<!--line class="block" style="background-color:red;color:white;height:20px;margin-left:40px;">
					<ifEN>2020dec28[18:24:04]GMT+3.Unstable development version. For stable version please visit <a href="http://HiFiIntelligentClub.com"> HiFiIntelligentClub.com</a>. Sorry for wrong version invitation.[edits:1]</ifEN>
					<ifRU>2020ДЕК27[18:24:04]GMT+3 Весрсия в разработке. Стабильная HiFiIntelligentClub.com[Изменений:1]</ifRU>
				</line-->
				<line class="block TC3 BC3" style="height:20px;margin-left:40px;">
					<ifEN>2020dec27[04:05:04]GMT+3Do anyone wants to exchange? Lisetener get you like, you get a track name to listener? We could mark a stations in action.[Изменений:1]</ifEN>
					<ifRU>2020ДЕК27[04:05:04]GMT+3Может быть кто-то хочет поменяться, слушатель вам лайк, вы ему имя трека, который играет? Мы можем промаркировать станции участвующие в акции.[Изменений:1]</ifRU>
				</line>
				<line class="block TC3 BC3" style="height:20px;margin-left:40px;">
					<ifEN>2020dec23[04:33:21]Intelligence, start your radioStations! We are starting to gather public stations to build current data strukture basement. The first stone of EDRO:POLIMER IV. Stations will be checked within 5 hours till 10:00 GMT+3</ifEN>
					<ifRU>2020dec23[04:33:21]Радио интеллигенция, запускайте ваши радиоСтанции. Начинаем строить основной индекс, основываясь на публично доступных радиостанциях в ближайшие 5 часов.</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:20px;margin-left:40px;">
					<ifEN>2020dec23[04:11:22]Building database catalog index</ifEN>
					<ifRu>2020dec23[22:11:22]Анализируем индекс, раскладываем данные для предиката</ifRU>
				</line>

				<line class="block TC3 BC3" style="height:20px;margin-left:40px;">
					<ifEN>2020dec22 [22:19:25] HiFi DJ Assminog filed a complaint with the copyright service VK.COM/DMCA
					 demanding to remove all content uploaded by his authorship to VK.COM and VKONTAKTE.RU between 2009 
					and 2020, because VK The .KOM platform significantly distorts the original sound of the listenable 
					content and delivers content to the end user that is technically distorted by the VK.COM playback 
					system, undermining the reputation of Assminog as an engineer who worked at the Russian Shanson 
					satellite studio, and was trained by the best sound engineers in Russia on the equipment of the 
					"Dobrolet" studios of the central television 5th channel "House of Radio", film studio "Lenfilm" 
					and the Digidesign Pro Tools laboratory in 2006.</ifEN>
					<ifRu>2020dec22 [22:19:25]HiFi DJ Assminog подал жалобу в службу авторских прав VK.COM/DMCA с 
					требованием удалить весь контент, загруженный его авторством на VK.COM и VKONTAKTE.RU в период с 
					2009 по 2020 год, потому что платформа VK.COM существенно искажает исходное звучание загружаемого 
					контента и доставляет конечному пользователю музыку, технически искаженную системой воспроизведения 
					VK.COM, подрывая репутацию Ассминог как инженера, работавшего на студии сателите Русский Шансон, 
					проходившего обучение у лучших звукоинженеров России на оборудовании cтудий "Добролёт" центральное 
					телевидения 5й канал "Дом радио", киностудии "Ленфильм" и лабаратории Digidesign Pro Tools в 
					2001-2006м году..</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:20px;">
					<ifEN>2021jan08[15:02:48]Updating please wait <- -></ifEN>
					<ifRu>2021янв08[15:02:48]Обновляемся. Пожалуйста подождите.- -> </ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:20px;">
					<ifEN>2020dec21[22:18:48]Little pre update bonus. You can navigate with keyboard arrows <- -></ifEN>
					<ifRu>2020dec21[22:18:48]Маленький бонус от готовящегося апдейта. Странички можно листать с клавиатуры <- -> </ifRU>
				</line>
				
				<line class="block TC1 BC1 " style="height:20px;">
					<ifEN>2020dec21[11:16:59]Under processing update classes, for completion look of the station.</ifEN>
					<ifRu>2020dec21[11:16:59]Прописываем все необходимые свойства в классы, для полного отображения станции</ifRU>
				</line>
				<line class="block T31 BC3 " style="height:20px;">
					<ifEN>2020dec21[03:57:05]Station list will be updated later. Sorry.</ifEN>
					<ifRu>2020dec21[03:57:05]Список станций будет обновлён чуть позже. Не успеваем..</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:20px;">
					<ifEN>2020dec21[03:57:05]We remember our promises, and trying to implement them all.</ifEN>
					<ifRu>2020dec21[03:57:05]Мы помним наши обещания, стараемся внедрить все.</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;">
					<ifEN>2020dec21[03:53:59]One more difficult step behind.Yeah!</ifEN>
					<ifRu>2020dec21[03:53:59]Ещё один сложный шаг позади.Да!</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;">
					<ifEN>2020dec20[22:04:57]Pre testing on onion site new stuff</ifEN>
					<ifRu>2020dec20[22:04:57]Тестирую на onion</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px; ">
					<ifEN>2020dec17[07:41:30]Test on onion</ifEN>
					<ifRu>2020dec17[07:41:30]Тестирую на onion</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px">
					<ifEN>2020dec17[07:38:00]Hfic 75% cmplt;</ifEN>
					<ifRu>2020dec17[07:38:00]Hfic 75% готово</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;top:20px;">
					<ifEN>2020dec12.06:25:00 Hfic return to update. Thnk you. Great Work!</ifEN>
					<ifRu>2020dec12.06:25:00 Hfic возвращаюсь к апдейту. Great Work!</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;top:30px;">
					<ifEN>2020dec12.06:15:00 Hfic listening Wave Anime Radio!</ifEN>
					<ifRu>2020дек12.06:15:00 Hfic слушает Wave Anime Radio!</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;top:40px;">
					<ifEN>Finished listening Dance Wave!</ifEN>
					<ifRu>Закончил слушать Dance Wave!</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10p;top:50px;">
					<ifEN>Finished listening TRANCE.one</ifEN>
					<ifRu>Закончил слушать Dance Wave!</ifRU>
				</line>
				<line class="block TC3 BC3 " style="height:10px;top:60px;">
					<ifEN>finished PulsRadio TRANCE</ifEN>
					<ifRu>Закончил слушать PulsRadio TRANCE</ifRU>
				</line>
				<line class="brick TC3 BC3 " style="height:10px;top:70px;">
					<ifEN>Finished Pleasure Beats by John Macraven</ifEN>
					<ifRu>Закончил слушать Pleasure Beats by John Macraven</ifRU>
				</line>
	    		</HficSamin>
	</HIC_PRESIDENT_MESSAGE>
</HficNews>';

      /*© A.A.CheckMaRev assminog@gmail.com*/
////// 				//
   //   /\ RCe			/////////
  //  <  **> 				//
 //     Jl   				//
//////				/////////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');

class ПрочитатьСлушателей
	{
	public	$м020;
	public function __construct($_сРасполож)
		{

		$сРасполож	=$_сРасполож;
			   unset($_сРасполож);

		//$this->м020;
		//$м020['сСтиль']	=
		$чНомерокВремя		='';
		$чНомерокНомер		='';

		$чТекущВремяСекунд	=floor(microtime(true));

		$мВсеСлушатели		=scandir($сРасполож);
		
		
		$чДеньСекунд		=(60*60*24);

		$мСлушателиЗаПятьМинут	=array();
		$чСлушателиЗаПятьМинут	=0;

		$чСлушателиЗа24Часа	=0;

		$чСлушателиВсегоЗаписей =0;

		foreach($мВсеСлушатели as $сСлушательФайл)
			{
			if($сСлушательФайл!='..'&&$сСлушательФайл!='.'&&is_file($сСлушательФайл))
				{
				$мНомерок		=мСобратьO2o($сСлушательФайл);
				$чНомерокНомер		=$мНомерок[0];
				$чНомерокВремя		=$мНомерок[1];
				if(($чТекущВремяСекунд-$чДеньСекунд)<$чНомерокВремя)
					{
					$чСлушателиЗа24Часа++;
					}
				if(($чТекущВремяСекунд-300)<$чНомерокВремя)
					{
					$мСлушатель 			=FileRead::arrJSON($сРасполож.'/'.$сСлушательФайл);
					if($мСлушатель['сЖанр']!='')
						{
						$мСлушателиЗаПятьМинут[]	=$мСлушатель;
						}
					$чСлушателиЗаПятьМинут++;
					}
				$чСлушателиВсегоЗаписей++;
				}
			}
		$this->м020['мСлушателиЗаПятьМинут']	=$мСлушателиЗаПятьМинут; //{strStyle=>'Style'}
		$this->м020['чСлушателиЗаПятьМинут']	=$чСлушателиЗаПятьМинут;
		$this->м020['чСлушателиВсегоЗаписей']	=$чСлушателиВсегоЗаписей;
		$this->м020['чСлушателиЗа24Часа']	=$чСлушателиЗа24Часа;
		}
	public static function м($_сРасполож)
		{
		//echo $_сРасполож;
		//exit(0);
		$оПрочитатьСлушателей	=new ПрочитатьСлушателей($_сРасполож);
		return $оПрочитатьСлушателей->м020;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaScreen
	{
	public $strHTML;
	public function __construct($_arrData)
		{
		}
	public static function strStart($objEDRO, $strSearchForm)
		{
		if($objEDRO->arrEvent['bIzDynamic'])
			{
			$intHeight	=122;
			if($objEDRO->arrReality['bIzApple'])
				{
				$intHeight	=102;
				}
			$str		=$objEDRO->strRealityInit();
			$str		.='
				<brickTop 
					class="block" 
					style="width:100%;height:'.$intHeight.'px;margin:0;padding:0;"
					>
				</brickTop>';

			}
		else
			{
			$str		=FileRead::strGetDesignHTML('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php', $objEDRO);
			$str		.=$strSearchForm;
			$str		.=Listeners::strHTML($objEDRO->arrReality['arrCurrentListeners'], $objEDRO->arrEvent['arrReality']);
			//$str		.=FileRead::strGetDesignHTML(array(), '/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/_UpdateMessage.php', $objEDRO);
			$str		.='
			<dynaScreen
				id	="DynaScreen"
				class	="fixed block layer_1"
				style	="
					top			:0;
					left			:0;
					width			:100%;
					height			:100%;
					display			:block;
					"
				>
				<brickTop 
					class="block" 
					style="width:100%;height:82px;margin:0;padding:0;"
					>
				</brickTop>
				';
			}
		
		//$str.='<marginTop class="block" style="width:100%;height:2%"></marginTop>';
		//$str.='<pageDate id="pageDateTimeServer" style="display:none">'.сКодировать(date('Y-m-d H:i:s').$_SESSION['strListener'], 'вКоманду').'</pageDate>';
		//file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/symbols.txt', сКодировать(date('Y-m-d H:i:s').$_SESSION['strListener'], 'вКоманду'));

		return $str;
		}
	public static function strEnd($objEDRO, $bIzDynamic)
		{
		$str='';
		if($bIzDynamic)
			{
			//$str.='<brickBottom class="block" style="width:100%;height:200px"></brickBottom>';
			}
		else
			{
			//$str='<brickBottom class="block" style="width:100%;height:100px"></brickBottom>';
			$str.='</dynaScreen>';
			$str.=DynaScreen::strObjectInit();
			$str.=Design::strObjectInit();
			$str.=Objects::strObjectInit();
			}
		return $str;
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('DynaScreen');
		}
	public static function strObjectDeclare()
		{
		$str	= <<<oo2oo
		<script>
		console.log('[V]EDRO.Objects: DynaScreen');
		class DynaScreen
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects.DynaScreen: construct()');
				this.objXHR		=new XMLHttpRequest();
				this.objHTML		=document.getElementById('DynaScreen');
				this.intHeight		=0;
				this.intWidth		=0;
				this._GetDimensions();
				this.objXHR.onload	=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onload');
					if(objDynaScreen.objXHR.status==200)
						{	
						if(objReality.bIzDynaScreen)
							{
							objDynaScreen.objHTML.innerHTML	=objDynaScreen.objXHR.response;
							objReality.bIzHistory		=false;
							objReality.bIzDynaScreen	=false;
							objReality.bIzLoading		=false;
							}
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objPlayer.updateOnReload();
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					else
						{
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onload');
					}
				this.objXHR.onProgress		=function(event)
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onProgress');
					if(event.lengthComputable)
						{
						//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
						}
					else
						{
						//console.log('Получено'+event.loaded+'байт');
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onProgress');
					}
				this.objXHR.onError=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onError');
					objReality.bIzLoading		=false;
					objReality.bIzDynaScreen	=false;
					objReality.bIzError		=true;
					
					objDynaScreenEventIndicator.objHTML.style.display="none";
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onError');
					}
				//this.strEvent		='/search';
				//this.strParametrs	='';
				//this.strDynaUpdate	='';
				//this.strUrl		='';
				//this.bIzHistory		=true;
				console.log('[..]EDRO.Objects: DynaScreen.construct()');
				}
			_GetDimensions()
				{
				//console.log('[Vv]EDRO.Objects.DynaScreen:  _GetDimensions()');
				this.intHeight		=this.objHTML.offsetHeight;
				this.intWidth		=this.objHTML.offsetWidth;
				//console.log('[..]EDRO.Objects.DynaScreen:  _GetDimensions()');
				}
			}
		console.log('[.]EDRO.Design: DynaScreen');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objData)
		{
		$objDynaScreen=new DynaScreen($_objData);
		return $objDynaScreen->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class HiFiNavigation
	{
	public $strHTML;
	public function __construct($_arrPagination, $arrReality, $objEDRO)
		{

		$intPage		=$_arrPagination['int0Page'];
		$intStart		=$_arrPagination['int0Start'];
		$intEnd			=$_arrPagination['int0Untill'];
		$intPageParamName	='int0Page';
		$intPages		=$_arrPagination['int0Pages'];
		$intTotal		=$_arrPagination['int0Total'];
		$intNextPage		=($intPage+1);
		$intPrevPage		=($intPage-1);
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$arrO['Forward']	='Нажмите, чтобы перейти на следующую страницу.';
			$arrO['Backward']	='Нажмите, чтобы перейти на предидущую страницу.';
			$arrO['Counters']	='[Отображены станции от-до][Не отображено станций до конца списка][Всего станций]';
			$arrO['Selector']	='Введите номер страницы на которую вы хотите перепрыгнуть.';
			}
		else
			{
			$arrO['Forward']	='Press this button, to go to the next page.';
			$arrO['Backward']	='Press this button, to go to the previous page.';
			$arrO['Counters']	='[Showing stations from-to][Stations remain][Total stations]';
			$arrO['Selector']	='Enter the page number to jump to.';
			}
		//echo $intPageParamName;
		//echo $intNextPage;
		//	$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
		//	echo $arrEventLink['strHref'];
		
		$str='
		<pageNavShader
			class="
				fixed V1 block layer_4 BC1 TC1 BBV Lx2
				"
			style="
				left		:0;
				width		:100%;
				"
			>
		</pageNavShader>
		<pageNav
			class="
				fixed V1 block layer_5 BC1 TC1 BBV Lx2
				"
			style="
				left		:15%;
				width		:70%;
				text-align	:center;
				margin		:auto;
				"
			>';

			if($intPage<$intPages)
				{
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
				$str.=
				'<a
				id	="objPageForward"'
				.$arrEventLink['strHref'].' '
				.$arrEventLink['strOnClick'].
				'class="block right BBV BTA BC2 TC2 cursor no-select Lx2t2"
					style="
						font-size	:large;
						width		:34%;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['Forward'].'"
					>
					>>
				</a>';
				}
			else
				{
				$str.=
				'<abuf
					id	="objPageForward"
					href	="#"
					onclick	=""
					class	="block right BBV BTA BC1 TC1 cursor no-select Lx2t2"
					style	="
						width		:34%;
						text-align	:center;
						text-decoration	:none;
						"
					>
				</abuf>';
				}
			$str.=
			'<pagerNum
				class="fix V1 block tcenter BC1 TC1 BLL BRJ BBV BTA no-select Lx2"
				style="
					left		:36%;
					width		:28%;
					"
				title="'.$arrO['Counters'].'"
				>


				<strPage
					class="brick tcenter"
					>
					<input 
						id	="objPageNumberSelect"
						class	=""
						style	="
							width:40%;
							"
						onChange="
							//bizHiFiNavigationInputSelect	=false; //Need to send result
							objEvent.arrReality.'.$intPageParamName.'=this.value;
							objEvent._UpdateURLDyn();
							return false;
							"
						onFocusin="
							//objHiFiNavigation.bizPageSelectFoucus=true;
							bizHiFiNavigationInputSelect	=true;
							"
						onfocusout="
							//objHiFiNavigation.bizPageSelectFoucus=false;
							bizHiFiNavigationInputSelect	=false;
							"
						type	="number" 
						value	="'.$intPage.'"
						step	="1" 
						min	="0" 
						max	="'.$intPages.'"
						title	="'.$arrO['Selector'].'"
					/>
					<strPages
						id	="objPageMaximum"
						class	="L1"
						style="
							width:60%;
							"
						>
						<ifRU>из </ifRU>
						<ifEN>of </ifEN>
						<int0Max
							id	="objPageMaximum"
							>
							'.$intPages.'
						</int0Max>
					</strPages>
				</strPage>
			</pagerNum>';
			if($intPage<1)
				{
				$str.='
				<abuf
					id	="objPageBackward"
					onclick	=""
					class	="block left BBV BTA BC1 TC1 cursor no-select Lx2"
					style	="
						text-align	:center;
						text-decoration	:none;
						"
					>
				</abuf>';
				}
			else
				{
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intPrevPage, true);
				$str.=
				'<a
					id	="objPageBackward"'.
					$arrEventLink['strHref'].' '.
					$arrEventLink['strOnClick'].'
					class="block left BBV BTA BC2 TC2 cursor no-select Lx2t2"
					style="
						font-size	:large;
						width		:34%;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['Backward'].'"
					>
					<<
				</a>';
				}
		$str.=
		'</pageNav>';
		$str.=HiFiNavigation::strObjectInit();
		$this->strHTML	=$str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[Vv]HiFiNavigation declare.');
			class HiFiNavigation
				{
				objRight		='';
				objLeft			='';
				//bizPageSelectFoucus	=true;
				int0Page		=0;
				int0PageMaximum		=0;
				constructor()
					{
					this.objXHR		=new XMLHttpRequest();
					this.objRight		=document.getElementById("objPageForward");
					this.objLeft		=document.getElementById("objPageBackward");
					this.int0Page		=document.getElementById("objPageNumberSelect").value;
					this.int0PageMaximum	=document.getElementById("objPageMaximum").innerHTML;
					this.objXHR.onload	=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onload');
						if(objHiFiNavigation.objXHR.status==200)
							{	
							if(objReality.bIzPlayer)
								{
								}
							if(objReality.bIzDynaScreen)
								{
								}
							if(objReality.bIzCheckMaNet)
								{
								}
							}
						else
							{
							}
						console.log('[...]EDRO.Objects: objXHR.onload');
						}
					this.objXHR.onProgress		=function(event)
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onProgress');
						if(event.lengthComputable)
							{
							//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
							}
						else
							{
							//console.log('Получено'+event.loaded+'байт');
							}
						console.log('[...]EDRO.Objects: objXHR.onProgress');
						}
					this.objXHR.onError=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onError');
						console.log('[...]EDRO.Objects: objXHR.onError');
						}
					console.log('[..]EDRO.Event: Constructor');
					}
				}
			console.log('[..]HiFiNavigation declare.');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('HiFiNavigation');
		}
	public static function strHTML($_arrPagination, $_arrReality, $objEDRO=array())
		{
		$objHiFiNavigation=new HiFiNavigation($_arrPagination, $_arrReality, $objEDRO);
		return $objHiFiNavigation->strHTML;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Listeners
	{
	public $strHTML;
	public function __construct($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
	
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$мСлушатели	=$_мСлушатели;
		$мСлушатели5Мин	=$_мСлушатели['мСлушателиЗаПятьМинут'];
		           unset($_мСлушатели);
		$this->strHTML='
			<activeListeners 
				class="fixed V3 block BTA layer_5 BC1 TC1" 
				style="
					left		:0px;
					Width		:100%;
					height		:20px;
					font-size	:small;
					"
				>
				<listenersAmount
					class	="block left"
					style	="font-size:xx-small;width:50px;line-height:10px;"
					>
					<listeners5mins 
						class	="TC3 BC3 block left"
						style	="width:100%;;text-align:left;"
						title	="Listeners in past 5 minutes."
						>5m:'.
						$мСлушатели['чСлушателиЗаПятьМинут'].
					'<listeners5mins>'.
					'<listeners24hours 
						class	="TC3 BC3 block left"
						style	="width:100%;text-align:right;"
						title	="Listeners in past 24 hours."
						>24h:'.
						$мСлушатели['чСлушателиЗа24Часа'].
					'</listeners24hours>'.
					'<listenersSome 
						class	="TC3 BC3 block left"
						title	="Listeners from the last o2o clearing."
						>/T:'.
						$мСлушатели['чСлушателиВсегоЗаписей'].
					'</listenersSome>'.
					':
				</listenersAmount>
				';
		$ч0СлушателиНаЭкране=0;
		foreach($мСлушатели5Мин as $чСлушательИД=>$мСлушательПараметры)
			{
			if(!empty($мСлушательПараметры['strStyle']))
				{
				$this->strHTML.='
					<activeListener 
						class="block left scrollerY scrollerGlide BRJ BC1 TC1" 
						style="
							height:20px;
							"
						>
						';
						$this->strHTML	.=Tag::strHTML($objKIIM, $мСлушательПараметры['strStyle'], $_мПоиск, 'strStyle');
				$this->strHTML.='
					</activeListener>
					';
				if($ч0СлушателиНаЭкране>10)
					{
					break;
					}
				$ч0СлушателиНаЭкране++;
				}
			}
		$this->strHTML.='
			</activeListeners>
			';
		$this->strHTML;
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$о	=new Listeners($_objKIIM, $_мСлушатели, $_мПоиск);
		return $о->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class LogIn
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<buttonLogin
				id	="objLoginButton"
				class	="brick left BLL BLR sensorButton"
				style	="
					text-align	:center;
					padding		:0 5px 0 5px;
					"
				>
				<ifEN style="width:100%;">LogIn</ifEN>
				<ifRU style="width:100%;">Вход</ifRU>
			</buttonLogin>
			';

		$this->strHTML.='
			<HiFiLoginForm
				id	="objLoginForm"
				class	="fix block layer_6  HL0 V99 TC1 BC1 BBV"
				onclick	="
					//this.parentNode.classList.remove(\'CutDown\');
					//this.parentNode.className+=\' Expanded\';
					"
				style	="
					width		:100vw;
					height		:100vh;
					"
				>
				<menu
					class	="block"
					style	="
						width		:100%;
						height		:40px;
						padding		:0;
						margin		:0;
						"
					>
					<topTouchBuffer
						class	="block TC2 BC2"
						style	="
							height	:10px;
							width	:100%;
							font-size	:x-small;
							"
						>
					</topTouchBuffer>
					<ifRU>Вход</ifRU>
					<ifEN>LogIn</ifEN>
					<closeButton
						class	="sensor block right TC3 BC3"
						style	="
							height		:20px;
							width		:60px;
							text-align	:center;
							line-height	:18px;
								"
						onclick	="
							this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
							this.parentNode.parentNode.parentNode.className+=\' CutDown\';
							"
						>
						<ifRU>
							x
						</ifRU>
						<ifEN>
							x
						</ifEN>
					</closeButton>
					<bottomTouchBuffer
						class	="block TC2 BC2"
						style	="
							height		:10px;
							width		:100%;
							font-size	:x-small;
							"
						>
					</bottomTouchBuffer>
				</menu>
				<data
					class	="block scrollerY TC1 BC1"
					style	="
						width	:100%;
						height	:152px;
						"
					>
					<form 
						id		="objFormLogin"
						class		="block TC1 BC1"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width		:100%;
								height		:152px;
								"
						>
					</form>
				</data>
			</HiFiLoginForm>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO LogIn: Declare.');
			class Login // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO Login: construct.');
					
				
					this.objButton			=document.getElementById('objLoginButton');
					this.objFormBrick		=document.getElementById('objLoginForm');
					this.objForm			=document.getElementById('objFormLogin');

					console.log('[..]EDRO Login: construct.');
					}
				}
			console.log('[.]EDRO LogIn: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('LogIn');
		}
	public static function strButton()
		{
		}
	public static function strHTML()
		{
		//$obj		=new LogIn();
		//return $obj->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Overlay
	{
	public 	$strHTML;
	private $arrEvent	=
		array(
		'close'=>
			array(
			'strLink'		=>'',
			'strOnClick'		=>'this.parentNode.className +=\' hidden\';',
			)
		);
	private $arrDesign	=
		array(
		'close'=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>'',
			),
		'informationWindow'=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'strLayer'		=>'layer_6',
			),
		'scrollerPart '=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>1,
			),
		);
	private $objReality	=
		array(
		'close'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		'informationWindow'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		'scrollerPart'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		);
	private $arrObjects	=
		array(
		'title'=>array(
			'EN'=>'Close this window',
			'RU'=>'Закрыть это окошко',
			),
		);
	public function __construct($objEDRO=array())
		{
		$this->strHTML='
		<informationWindow
			id	="objInformationOverlay"
			class	="fixed V94 block window '.$this->arrDesign['informationWindow']['strLayer'].' TC3 BC3 BBV BTA"
			style	="
				width		:100vw;
				height		:300px;
				max-height	:50vh;
				"
			>
			<close
				class		="block TC1 BC2 sensor"
				onClick		="'.$this->arrEvent['close']['strOnClick'].'"
				>
				<close
					class	="block right"
					style	="
						width		: 40px;
						color		: #fff;
						background-color: #000;
						text-align	: center;
						"
					title	="'.$this->arrObjects['title'][$objEDRO->arrReality['strLangSignal']].'"
						>
						X
	    				</close>
				HiFiIntelligentClub
			</close>
			<scrollerPart 
				class	="block scrollerY"
				style	="
					width		:100vw;
					height		:240px;
					max-height	:40vh;
					"
				>
				<ifEN>HiFi Intelligent Club - is the friend for the real people who are exist right here and now. Only for today.</ifEN>
				<ifRU>HiFi Intelligent Club - для людей, существующих сдесь и сейчас. Только сегодня.</ifRU>
				<ifRU>
					<p>
						<a name="УвеличитьЭкран"><h2>Слишком мелко?</h2></a>
						<p>
							<color style="font-size:x-large;color:green">Зажмите клавишу ctrl(Контрл) 
							и крутите колесо мышки. Станет крупнее/мельче.</color><br/>
							Приложение само подстроится под ваши настройки, удалив с экрана выступающие за край элементы.<br/>
							CTRL+Колесо мыши: Выведите на экран станцию такого размера, как вам удобно смотреть!
						</p>
						<p>
							Искренне ваш Hfic.Samin Президент HiFiIntelligentClub.
						</p>
					</p>
				</ifRU>
				<ifEN>
					<p>
						<a name="Enlarge_ctrlmouseWheel"><h2>"Too small text?"</h2></a>
						<p>
							<color style="font-size:x-large;color:green">Hold down the ctrl key and turn the 
							mouse wheel</color><br/>
							The application will adjust itself to your vision, Displaying a station of the 
							size that is convenient for you to look at!
						</p>
						<p>
							Sincerely yours Hfic. Samin President of HiFiIntelligentClub.
						</p>
					</p>
				</ifEN>
			</scrollerPart>

		</informationWindow>';




/*-[.]*/	}

/*-[E]*/private function strEvent()
		{
		//$strD='class="'.$this->arrDesign['strClass'].'" ';
		//$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		//$strD='class="'.$this->arrDesign['strClass'].'" ';
		//$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		//print_r($_SESSION);
		//$this->objReality['arrRole'];
		//$this->objReality['arrLang'];
		//$strR='<ifRU>'.$this->objReality['arrLang']['ifRU'].'</ifRU>';
		//$strR.='<ifEN>'.$this->objReality['arrLang']['ifEN'].'</ifEN>';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		return $strO;
/*-[.]*/	}
	public static function strHTML($objEDRO=array())
		{
		$objOverlay=new Overlay($objEDRO);
		return $objOverlay->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Pagination
	{
	public $arr	=array();
	public function __construct($objEDRO)
		{
		/*echo '<pre>';
		print_r($objEDRO->arrEvent);
		echo '</pre>';*/
		//exit;
		//$objEDRO->arrEvent['arrReality']['int0PlayingStationNum'];
		//$objKIIM=$_objKIIM;
		   //unset($_objKIIM);
			//print_r($objEDRO);
			//exit;
		/*echo*/$int1PlayingStationNum		=$objEDRO->arrEvent['arrReality']['int1PlayingStationNum'];
		/*echo*/$int0Page			=($objEDRO->arrEvent['arrReality']['int0Page']); //0,1,xxx
		/*echo*/$int1OnPage			=$objEDRO->arrEvent['arrReality']['int1OnPage']; //1-> 8 = 8
		/*echo*/$int0Start			=0+($int0Page*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
		/*echo*/$int1Untill			=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
		/*echo*/$int0Untill			=($int1Untill-1);
			if($objEDRO->arrObjects['ч0РасположениеTotal'])
				{
		/*echo*/	if($objEDRO->arrObjects['ч0РасположениеTotal']===0)
					{
					$int1Total	=1; //Channge in par
					$int0Total	=0;
					}
				else
					{
					$int1Total	=($objEDRO->arrObjects['ч0РасположениеTotal']+1); //Channge in par
					$int0Total	=($int1Total-1);
					}
				}
			else
				{
				$objTotal	=FileRead::objJSON($objEDRO->arrObjects['сРасположениеTotal']); //0-lastone
				if($objTotal===0)
					{
					$int1Total	=1; //Channge in par
					$int0Total	=0;
					}
				else
					{
		/*echo*/		$int1Total	=($objTotal->total+1); //Channge in par
					$int0Total	=($int1Total-1);
					}    
				}

		unset($objTotal);
		if($int1OnPage==0)
			{
			
			$int1Pages		=intRoundUp(($int1Total)/1);
			}
		else
			{
			/*echo*/$int1Pages	=intRoundUp(($int1Total)/$int1OnPage);//totall is not from 0, to find we need to convert ;
			}
		$int0Pages		=($int1Pages-1);
		if($int0Page>$int0Pages)
			{
			$objEDRO->arrEvent['arrReality']['int0Page']	=$int0Pages;
			$int0Page					=$int0Pages;
			/*echo*/ $int0Start	=0+($int0Pages*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
			/*echo*/ $int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
			}
		else
			{
			//$int0Page					=($int1Page-1);
			}
		if($int0Total<$int0Untill)
			{
			$int0Untill=$int0Total;
			}
		else
			{
			//$int0Untill=($int1Untill-1);
			}
		if($int0Total<$int0Start)
			{
			$int0Start	=($int1OnPage*$int0Page);
			}
		/*if($int0PlayingStationNum>=0)
			{
			$int0Page	=round(($int1PlayingStationNum/$int1OnPage), 0);
			}
		else
			{
			$int0Page	=round((($int0Start+1)/$int1OnPage), 0);
			}*/
		$arrReturn['int0Start']		=$int0Start;
		$arrReturn['int0Page']		=$int0Page;
		$arrReturn['int0Pages']		=$int0Pages;
		$arrReturn['int1OnPage']	=$int1OnPage;
		$arrReturn['int0Untill']	=$int0Untill;
		$arrReturn['int0Total']		=($int1Total-1);

		$this->arr			=$arrReturn;
		}

	public static function arr($objEDRO)
		{
		$objPagination		=new Pagination($objEDRO);
		return $objPagination->arr;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Registration
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<buttonRegister
				id	="objRegisterButton"
				class	="brick left BLL BLR sensorButton"
				style	="
					text-align	:center;
					padding		:0 5px 0 5px;
					"
				>
				<ifEN style="width:100%;">Register</ifEN>
				<ifRU style="width:100%;">Регистрация</ifRU>
			</buttonRegister>
			';

		$this->strHTML.='
			<HiFiRegistrationForm
				id	="objRegisterForm"
				class	="fix block layer_6  HL0 V99 TC1 BC1 BBV"
				onclick	="
					//this.parentNode.classList.remove(\'CutDown\');
					//this.parentNode.className+=\' Expanded\';
					"
				style	="
					height		:150px;
					width		:100vw;
					"
				>
				<menu
					class	="block"
					style	="
						width		:100%;
						height		:40px;
						padding		:0;
						margin		:0;
						"
					>
					<topTouchBuffer
						class	="block TC2 BC2"
						style	="
							height	:10px;
							width	:100%;
							font-size	:x-small;
							"
						>
					</topTouchBuffer>
					<ifRU>Регистрация</ifRU>
					<ifEN>REgistration</ifEN>
					<closeButton
						class	="sensor block right TC3 BC3"
						style	="
							height		:20px;
							width		:60px;
							text-align	:center;
							line-height	:18px;
								"
						onclick	="
							this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
							this.parentNode.parentNode.parentNode.className+=\' CutDown\';
							"
						>
						<ifRU>
							x
						</ifRU>
						<ifEN>
							x
						</ifEN>
					</closeButton>
					<bottomTouchBuffer
						class	="block TC2 BC2"
						style	="
							height		:10px;
							width		:100%;
							font-size	:x-small;
							"
						>
					</bottomTouchBuffer>
				</menu>
				<data
					class	="block scrollerY TC1 BC1"
					style	="
						width	:100%;
						height	:152px;
						"
					>
					<form 
						id		="objFormRegistration"
						class		="block TC1 BC1"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width		:100%;
								height		:152px;
								"
						>
					</form>
				</data>
			</HiFiRegistrationForm>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO Register: Declare.');
			class Registration // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO Register: construct.');
					
				
					this.objButton			=document.getElementById('objRegisterButton');
					this.objFormBrick		=document.getElementById('objRegisterForm');
					this.objForm			=document.getElementById('objFormRegistration');

					console.log('[..]EDRO Register: construct.');
					}
				}
			console.log('[.]EDRO Register: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('Registration');
		}
	public function strHTML()
		{
		$obj		=new Registration();
		return $obj->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StationSearchBlock  // feat Мира Стрельцова. 07.08.2020 Шеорше ля фам, господа конкуренты. Hfic.Samin -> PreReleased at 21-21-2021
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_arrValues=array(), $_arrReality) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{
		$strSearchName		=$_arrValues['strName'];
		//if($_arrValues['strGenre']!==''&&isset($_arrValues['strStyle'])&&$strStyle!=''&&$strStyle!='undefined')
		//	{
		//	$strSearchGenre		=$_arrValues['strStyle'];
		//	}
		//else
		//	{
			$strSearchGenre		=$_arrValues['strGenre'];
		//	}
		
				   unset($_arrValues);
		$strLang		=$_arrReality['strLangSignal'];
				   unset($_arrReality);
		$arrInputName 		=
			array(
			'strLang'	=> $strLang,
			'arrName'	=>
				array(
				'RU'=>'Название',
				'EN'=>'Name'
				), 
			'arrSetup'	=>
				array(

				'strInputValue'		=>  $strSearchName,
				'strInputType'		=>  'text',
				'strInputName'		=>  'strName',
				'intInputSize'		=>  25,
				'intInputMaxLength'	=>  250,
				'intInputWidth'		=>  50,
				)
			);
		$arrInputGenre 		=
			array(
			'strLang'	=>$strLang,
			'arrName'	=>
				array(
				'RU'=>'Жанр',
				'EN'=>'Genre'
				), 
			'arrSetup'	=>
				array(

				'strInputValue'		=> $strSearchGenre,
				'strInputType'		=> 'text',
				'strInputName'		=> 'strGenre',
				'intInputSize'		=>  15,
				'intInputMaxLength'	=>  20,
				'intInputWidth'		=>  40,
				)
			);

		$this->strHTML	='
			<hficSearch
				class="fix HR0 V99 layer_5 default"
				>
				<ifCutDown
					class	="block right sensor TC1 BC1 no-select"
					onclick	="
						this.parentNode.classList.remove(\'CutDown\');
						this.parentNode.className+=\' Expanded\';
						objSearch.objValueInputstrGenre.focus();
						"
					style	="
						text-align	:center;
						line-height	:36px;
						height		:40px;
						width		:80px;
						"
					>
					<ifRU>
						ПОИСК
					</ifRU>
					<ifEN>
						SEARCH
					</ifEN>
				</ifCutDown>
				<ifExpanded
					class	="fix brick HL0 HV99 TC1 BC0 BBV L2" 

					style	="
						width		:100vw;
						min-width	:320px;
						"
					>
					<form 
						id		="formStationSearch"
						class		="brick TC1 BC0"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width	:100%;
								"
						>
						<searchByGenre
						class	="fix brick left L0 V99 no-select layer_2_2"
						style	="
							color	:#4c4c4c;
							left	:0px;
							"
							>
							<ifEN>[=]Search by genre</ifEN>
							<ifRU>[=]Поиск по жанру:</ifRU>
						</searchByGenre>
						<searchStationName
						class	="fix brick left L0 V99 no-select layer_2_2"
						style	="
							color	:#4c4c4c;
							left	:40%;
							"
							>
							<ifEN>[+]Search by name:</ifEN>
							<ifRU>[+]Поиск по имени:</ifRU>
						</searchStationName>
						<searchInputs
							class	="brick left"
							style	="
								width		:100%;
								margin-top	:5px;
								"
							>
							'.
							FormInput::strHtml($arrInputGenre).
							FormInput::strHtml($arrInputName).
							'<closeButton
								class="fix sensor block TC2 BC2 Lx2 V99 HR0 layer_2_3"
								style="
									width		:10%;
									text-align	:center;
									"
	    							onclick="
									this.parentNode.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
									this.parentNode.parentNode.parentNode.parentNode.parentNode.className+=\' CutDown\';
									"
								>
								<ifRU
									class="brick"
									style="width:100%;height:100%;"
									title="Закрыть форму и отобразить результаты поиска. Результаты поиска можно вывсти и не закрывая форму, просто нажав на клавишу enter, на клавиатуре по окончанию ввода."
									>x
								</ifRU>
								<ifEN
									class="brick"
									style="width:100%;height:100%;"
									title="Close search form and display search results. You can display search results without closing this search form, by clicking enter button on your keyboard."
									>x
								</ifEN>
							</closeButton>
						</searchInputs>
						<!--bottomTouchBuffer
							class	="fix block TC2 BC2 V97 L0"
							style	="
								width		:100%;
								"
							>
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer-->
					</form>';
				//<data
				//	class="block scrollerY TC1 BC1"
				///	style="
				//		width	:100%;
				//		height	:152px;
				//		"
					//	>
					//		//FormInput::strHtml($objKIIM, array('RU'=>'РФИд','EN'=>'RFId'), $strSearchId).
					//		$this->strHTML	.=FileRead::str($objKIIM,'/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/SearchBlock.php');
					//		$this->strHTML	.='<hr/>';
					//		foreach($_SERVER as $strName => $strValue)
					//			{
					//			$this->strHTML	.='<srv class="block">'.$strName.' - '.$strValue.'</srv>';
					///			}
					//		$this->strHTML	.='<hr/>';
					//	$this->strHTML	.='
					//	</questions>';

					$this->strHTML	.='
				</ifExpanded>
				'.
				$this->strObjectInit();
				$this->strHTML	.=
			'</hficSearch>
			';
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('Search');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Object.SearchForm: Declare');
		class Search //Init in  StationSearchBlock.php
			{
			constructor()
				{
				console.log('[Vv]EDRO.Object.SearchForm: Construct');
				this.objStationSearch		=document.getElementById('formStationSearch');
				this.objValueInputstrName	=document.getElementById('SearchBystrName');
				this.strValueInputstrName	=this.objValueInputstrName.value;
				this.objValueInputstrGenre	=document.getElementById('SearchBystrGenre');
				this.strValueInputstrGenre	=this.objValueInputstrGenre.value;
				//this.objValueInputintBitrate	=document.getElementById('SearchByintBitrate');
				//this.strValueInputintBitrate	=this.objValueInputintBitrate.value;
				//this.objValueInputstrCodec	=document.getElementById('SearchBystrCodec');
				//this.strValueInputstrCodec	=this.objValueInputstrCodec.value;
				this.bIzHistory			=true;
				console.log('[..]EDRO.Object.SearchForm: Construct');
				}
			}
		console.log('[.]EDRO.Object.SearchForm: Declare');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_arrValues=array(), $_arrReality)
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_arrValues, $_arrReality);
		return $obj->strHTML;
		}
	}

/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class AudioType
	{
	public $strHTML;
	public function __construct($_strData, $_arrSearch='')
		{

		$strAudioCodec		=str_replace(array("/", " ", "audio", "application", "ogg:codecs="), '', $_strData);
													   unset($_strData);
		$arrSearch		=$_arrSearch;
				   unset($_arrSearch);
		if($arrSearch['strCodec']==$strAudioCodec)
			{
			$arrEventLink=arrEventLink($arrSearch, 'strCodec', '', 		 false, 0);
			$this->strHTML='
			<a
				'.
				$arrEventLink['strHref'].
				$arrEventLink['strOnClick'].
				'
				class="rel block left sensor BLL BRJ TC1 BC1"
				style="
					text-align	:center;
					text-decoration	:none;
					"
				>'.
				$strAudioCodec.
			'</a>';
			}
		else
			{
			$arrEventLink=arrEventLink($arrSearch, 'strCodec', $strAudioCodec, false, 0);
			$this->strHTML='
			<a
				'.
				$arrEventLink['strHref'].
				$arrEventLink['strOnClick'].
				'
				class="sensor block left BLL2 BRJ TC2 BC2"
				style="
					text-align	:center;
					text-decoration	:none;
					"
				>'.
				$strAudioCodec.
			'</a>';
			}
		}
	public static function strHTML($_strData, $_arrSearch='')
		{
		$obj=new AudioType($_strData, $_arrSearch);
		return $obj->strHTML;
		}
	}

/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class ICQRType
	{
	public $strHTML;
	public function __construct($_strData, $_arrSearch='', $objEDRO)
		{
		$arrHiFi[сПреобразовать('Low quality', 'вКоманду')]		='No HiFi!';
		$arrHiFi[сПреобразовать('HiFi beginner', 'вКоманду')]		='HiFi_[L]';
		$arrHiFi[сПреобразовать('HiFi casual', 'вКоманду')]		='HiFi_[N]';
		$arrHiFi[сПреобразовать('HiFi often', 'вКоманду')]		='HiFi_[T]';
		$arrHiFi[сПреобразовать('HiFi mustbe', 'вКоманду')]		='HiFi_[2.1]';
		$arrHiFi[сПреобразовать('HiFi canBe', 'вКоманду')]		='HiFi_[5.1]';
		/*$arrHiFi[сПреобразовать('HiFi couldBe', 'вКоманду')]		='HiFi_[7.1]';*/
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$arrO['strTitle']['Enabled']='Нажмите на этот индикатор чтобы выбрать станции вещающие в формате доступном вашему оборудованию.';
			$arrO['strTitle']['Active']='Ваш текущий активный селектор качества, подходящий для вашего оборудования.';
			$arrO['strTitle']['Disabled']='Высококачественные каналы, для HiFi аппаратуры высшего класса. Мы в процессе поиска станций для этой категории. В настоящее время раздел отключен, тк тестирование каналов ICQR продолжается. Это высокоточная и продолжительная работа. Спасибо за ваше ожидание. Hfic.Samin федеративный канцлер HiFiIntelligentCLub.';
			}
		else
			{
			$arrO['strTitle']['Enabled']='Press this indicator to select quality format that are more situable for your equipement.';
			$arrO['strTitle']['Active']='Your current active selector of quality that could be supported by your equipement.';
			$arrO['strTitle']['Disabled']='High quality HiFi selector, for higher cost equipement. Searching stations for this category is in progress. Currently disabled, because of the ICQR testing procedure are continue. This is a high precision and hard work. Thank you for your waiting. Hfic.Samin the federal kanzler of HiFiIntelligentClub.';
			}

		$strHiFiType			=сПреобразовать($_strData, 'вСтроку');
					   unset($_strData);
		$arrSearch		=$_arrSearch;
				   unset($_arrSearch);
		$intX=0;
		foreach($arrHiFi as $strCmd=>$strName)
			{
			if(strpos($arrSearch['strHiFiType'], '/'.сПреобразовать($strCmd, 'вСтроку'))!==FALSE)
				{
				$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', '', 		 false, 0);
				if($intX>1)
					{
					$this->strHTML.='
					<aaa
					class="brick left sensor BRJ TC3 BC3 L1"
					style="
						padding		:0 5px 0 5px;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
						>'.$strName.
					'</aaa>';
					}
				else
					{
					$this->strHTML.='
					<a
					'.
					$arrEventLink['strHref'].
					$arrEventLink['strOnClick'].
					'
					class="block left sensor BRJ TC3 BC3 L2"
					style="
						padding		:0 5px 0 5px;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Active'].'"
						>'.$strName.
					'</a>';
					}
				}
			else
				{
				$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', $strCmd, false, 0);
				if($intX>1)
					{
					$this->strHTML.='
					<aaa
					class="block left sensor BRJ  BC1 L1"
					style="
						color		:#AAA;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Disabled'].'"
						>'.
						$strName.
					'</aaa>';	
					}
				else
					{
					$this->strHTML.='
					<a
					'.
					$arrEventLink['strHref'].
					$arrEventLink['strOnClick'].
					'
					class="block left sensor BRJ  BC1"
					style="
						color		:#000;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Enabled'].'"
					>'.
						$strName.
					'</a>';
					}
				}
			$intX++;
			}
		}
	public static function strHTML($_strData, $_arrSearch='', $objEDRO=array())
		{
		$obj=new ICQRType($_strData, $_arrSearch, $objEDRO);
		return $obj->strHTML;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Header
	{
	public $strHTML;
	public function __construct($_str, $_arrSearch, $_arrICQR, $_strICQR_Q, $objEDRO)
		{
		$str		=сПреобразовать($_str, 'вСтроку');// Header text
			   unset($_str);
		$intStrLen	=mb_strlen($str);
		$intStrLenPx	=$intStrLen*12;
		$arrSearch	=$_arrSearch;
			   unset($_arrSearch);
		/*$strBitrate	=$_strBitrate;
			   unset($_strBitrate);*/
		/*$strCodec	=$_strCodec;
			   unset($_strCodec);*/
		$arrICQR	=$_arrICQR;
			   unset($_arrICQR);
		//$strStationLink=strLinkGroove($arrSearch, 'name', $str);
		$this->strHTML='
			<header
				class="rel block TC1 BC1"
				title="'.$str.'"
				style="
					width			:100%;
					height			:100%;
					"
				>
				<whiteBlockPad
					class="abs block left BC3 layer_1_2"
					style="
						top		:0;
						left		:0;
						width		:1px;
						height		:100%;
						"
					>
				</whiteBlockPad>
				<whiteBlock
					class="rel block left layer_1_3"
					style="
						width		:1px;
						height		:100%;
						background-color:#FFF;
						"
					>
				</whiteBlock>
				<blockTitle
					class="block left TC1 BC1 BBV PlayHighLightTop"
					style="
						font-size	:x-small;
						width		:99%;
						height		:9px;
						line-height	:9px;
						"
					>
					<ICQRType
						style="
							width:80%;
							"
						class="block left"
						>
						<ICQR
							class="block left"
							style="padding: 0 5px 0 5px;"
							>
							ICQR:
						</ICQR>
						<ICQR
							class="block left"
							style="margin-left:5px;"
							>
							
							'.ICQRType::strHTML($_strICQR_Q, $arrSearch, $objEDRO).
							'
						</ICQR>
						<rightBufferBlock 
							class="block left TC2 BC2"
							style="width:76px;height:100%"
							>
						</rightBufferBlock>

					</ICQRType>

				</blockTitle>
				<h2
					class="abs left block scrollerX layer_1_1"
					style="
						top		:10px;
						width		:99.5%;
						height		:40px;
						padding		:0;
						margin		:0;
						font-size	:large;
						font-weight	:unset;
						"
					>
					<strScrolling 
						class="block TC1 BC1 L2"
						style="
							width		:'.$intStrLenPx.'px;
							min-width	:100%;
							font-size	:large;
							line-height	:20px;
							"
						>'.
						$str.
					'</strScrolling>
				</h2>'.
				'
				<nextBlockTitle
					class="abs block left TC1 BC1 layer_1_2 BTA PlayHighLightBottom"
					style="
						bottom		:0px;
						font-size	:x-small;
						width		:99%;
						height		:29px;
						line-height	:9px;
						"
					>
					<icqr
						class="block left TC1 BC1"
						style="width	:88%"
						>
						<ifRU class="block left">
							'.$arrICQR['RU'].'
						</ifRU>
						<ifEN class="block left">
							'.$arrICQR['EN'].'
						</ifEN>
					</icqr>
					<stationLink
						class="block right sensor no-select TC1 line"
						style="
							width		:10%
							right		:0;
							color		:#FFF;
						
						"
						>'
						.StationQualityUPLink::strHTML($str, $arrSearch, $objEDRO).
					'</stationLink>
				</nextBlockTitle>
			</header>
			';
		}
	public static function strHTML($_str, $_arrSearch,$_arrICQR, $_strICQR_Q, $objEDRO=array())
		{
		$objHeader=new Header($_str, $_arrSearch, $_arrICQR, $_strICQR_Q, $objEDRO);
		return $objHeader->strHTML;
		}
	}


/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class Player
	{
	private $arr;
	private $strHTML;
	private $strAudio;
	public function __construct($_strAudio, $_strAudioType)
		{
		//$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//unset($_objKIIM);
		//exit;
		//$this->strAudio		=strEncode($_strAudio, 'HiFiIntelligentClub', 'e');
		$this->strAudio			=$_strAudio;
					   unset($_strAudio);
		$strAudioType			='audio/'.$_strAudioType;
		//$this->arr=$_arrData;
		if(!empty($this->strAudio))
			{ //
			$this->strHTML=
			'<ifReady
				class	="block cursor no-select TC1 BC1"
				onclick	="objPlayer.play(this,\''.$this->strAudio.'\', \''.$strAudioType.'\' );"
				style	="
					text-align	:center;
					"
				>
				<ifOverload
					style	="
						display:none;
						"
					>
					<ifEN>
						<marquee style="width:44px;">Station overloaded. Please try another or less bitrate Kbps, this stations
						  sounds with less quality but  this is situable for slower internet.</marquee>
					</ifEN>
					<ifRU>
						<marquee>Станция  перегружена. Попробуйте другую или вырырайте станцию с меньшим качеством КБит/сек, 
						но годной для более медленного интернета.</marquee>
					</ifRU>
				</ifOverload>
				<recordLabelAudioMeta
					class="block no-select doubleLine"
					style="
						text-align	:center;
						width		:40px;
						"
					>
					<recordLabel
						class="block border TC3 BC3"
						style="
							margin-top	: 9px;
							height		: 20px;
							width		: 40px;
							line-height	: 19px;
							padding		: 0;
							font-size	: initial;
							"
						>
						<ifEN
							title="Play station"
							>Play
						</ifEN>
						<ifRU
							style	="font-size	:small;"
							title	="Нажмите чтобы начать слушать радио."
							>Воспр.
						</ifRU>
					</recordLabel>
				</recordLabelAudioMeta>
			</ifReady>
			<ifPlaying
				class="block cursor TC1 no-select"
				onclick="objPlayer.stop();"
				style="
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					"
				>
				<recordAudioData
					class="block no-select"
					style="
						width		:34px;
						height		:22px;
						text-align	:center;
						margin-top	:9px;
						margin-left	:3px;
						"
					>
					<recordLabel
						class="block L1 border-right"
						style="
							color			: #2b70b6; /*Sven color*/
							background-color	: white;
							border-top		: 1px solid #2b70b6;
							border-bottom		: 1px solid #2b70b6;
							width			: 32px;
							text-align		: center;
							margin			: 0;
							padding			: 0;
							"
						>
						<ifEN
							title="Press to stop playing."
							>
							Stp
						</ifEN>
						<ifRU
							title="Нажмите чтобы остановить воспроизведение."
							>
							Стп
						</ifRU>
					</recordLabel>
				</recordAudioData>
			</ifPlaying>
			<ifLoadingAudio
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					color		:#000;
					/*background-color:yellow;*/
					"
				>
				<recordAudioData
					class="block no-select"
					style="
						width		:34px;
						height		:22px;
						text-align	:center;
						margin-top	:8px;
						margin-left	:3px;
						"
					>
					<recordLabel
						class="block TC3"
						style="
							width		: 32px;
							height		: 22px;
							text-align	: center;
							line-height	: 19px;
							margin		: 0;
							padding		: 0;
							"
						>
					</recordLabel>
				</recordAudioData>
			</ifLoadingAudio>
			<ifNoConnection
				class="block cursor TC2 BC1 no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\', \''.$strAudioType.'\' );"
				style="
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:rgba(255,255,255,0.82);
					"
				>
				<ifEN>
					<marquee style="width:36px;">This  station is currently offline. Please try another one.</marquee>
				</ifEN>
				<ifRU>
					<marquee style="width:36px;">"Эта радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
					Пока станция недоступна, попробуйте послушать другую.</marquee>
				</ifRU>
			</ifNoConnection>';
			}
		//KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_strAudio, $_strAudioType)
		{
		$objShader=new Player($_strAudio, $_strAudioType);
		return $objShader->strHTML;
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('Player');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Objects.Player: Declare Player');
		class Player
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects.Player: Player.constructor()');

				//this.objAudio			=document.getElementById("objHiFiIntelligentClubAudio");
				this.objAudio			=document.createElement('audio');
				this.intPlayerLoadingAnim	=0;
				this.strPlayerLoadingAnim	=0;
				this.objStation			='';
				this.strCurrentID		='';
				this.strPlayingID		='';
				this.strStationName		='';
				this.objAudio.crossorigin	="use-credentials";
				this.objVisibleControls		=document.getElementById('playerControlAlwaysVisible');
				this.objVisibleControlsStat	=document.getElementById('playerControlAlwaysVisibleLoadingStat');
				this.objVisibleControlsText	=document.getElementById('playerControlAlwaysVisibleLoadingText');

				this.bIzLoading					=false;
				this.intLoadingDuration				=0;
				this.objVisibleControlsLoading			=document.getElementById('playerControlAlwaysVisibleLoading');
				this.objVisibleControlsLoadingStationName	=document.getElementById('playerControlAlwaysVisibleLoadingStationName');
				this.objVisibleControlsLoadingDuration		=document.getElementById('playerControlAlwaysVisibleLoadingDuration');
				this.objVisibleControlsLoadingErrors		=document.getElementById('playerControlAlwaysVisibleLoadingErrors');
				

				this.bIzPlaying					=false;
				this.intPlayingDuration				=0;
				this.objVisibleControlsPlaying			=document.getElementById('playerControlAlwaysVisiblePlaying');
				this.objVisibleControlsPlayingDuration		=document.getElementById('playerControlAlwaysVisiblePlayingDuration');

				this.objVisibleControlsNoConnectionStationName	=document.getElementById('playerControlAlwaysVisibleNoConnectionStationName');
				this.objVisibleControlsOverloadStationName	=document.getElementById('playerControlAlwaysVisibleOverloadStationName');
				this.objVisibleControlsPlayingErrors		=document.getElementById('playerControlAlwaysVisiblePlayingErrors');
				this.objVisibleControlsPlayingErrorDuration	=document.getElementById('playerControlAlwaysVisibleStoppedErrorsDuration');

				this.objVisibleControlsStopped	=document.getElementById('playerControlAlwaysVisibleStopped');
				//this.objDebugString		=document.getElementById('strPlayerPlayEventsDebugString');
				this.objCurrentBlock;
				this.objPlayingBlock;
				this.bIzWhileHumanEvent		=false;
				this.bIzPlayedOnceEvent		=false;
				this.bIzNeedToBeStoppedEvent	=false;
				this.bIzWeThinkPlayerIsPlaying	=false;
				//this.objDebugString.innerHTML	='objPlayer.objAudio.construct<br/>';
				this.objAudio.onloadstart	=function()
					{
					//alert('.onloadstart');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onloadstart<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onLoadStart');
					objReality.arrPlayer.bIzLoading	=true;
					objReality.arrPlayer.bIzPlaying	=false;
					//console.log(objPlayer.objAudio.readyState);
					//console.log(objPlayer.objStation);
					
					//objKIIM_StatisticalMembrane._incTime();
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					objPlayer.objVisibleControls.className	+=' loadingAudio';
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						objPlayer.objCurrentBlock.classList.remove('overload');
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}

					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onloadstart .bIzWhileHumanEvent=false;<br/>';
					objPlayer.bIzWhileHumanEvent=false;
					
					console.log('[...]EDRO.Objects.Player: onLoadStart');
					}
				this.objAudio.onwaiting		=function()
					{
					//alert('.onwaiting');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onWaiting()');
					//console.log('[Vvv]EDRO.Objects.Player: objAudio.Load()');
					//objReality.arrPlayer.bIzLoading=true;
					//objPlayer.objAudio.load();//--
					objReality.arrPlayer.bIzLoading	=false;
					objReality.arrPlayer.bIzPlaying	=false;
					objReality.arrPlayer.bIzWaiting	=true;

					objPlayer.objVisibleControls.classList.remove('WaitingAudio');
					objPlayer.objVisibleControls.classList.remove('stopped');
					//objPlayer.objVisibleControls.classList.remove('loadingAudio');
					//objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					objPlayer.objVisibleControls.className	+=' WaitingAudio';
					if(typeof(objPlayer.objCurrentBlock)=='object')
						{
						objPlayer.objCurrentBlock.classList.remove('WaitingAudio');
						//objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						//objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						objPlayer.objCurrentBlock.classList.remove('overload');
						objPlayer.objCurrentBlock.className	+=' WaitingAudio'
						}
					objPlayer.objAudio.play(); //++n
					//console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.Load()');
					//objPlayer.bIzWhileHumanEvent=false;
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting .bIzWhileHumanEvent=false;<br/>';
					//console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onWaiting()');
					}
				this.objAudio.oncanplay		=function()
					{
					//alert('.oncanplay');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onCanPlay()');

					console.log('[Vvv]EDRO.Objects.Player: objAudio.play()');
					objPlayer.objAudio.play();
					//objPlayer.objAudio.play();
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.play()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay<br/>';
					//this.bIzWeThinkPlayerIsPlaying	=true;
					//objPlayer.bIzWhileHumanEvent	=false;
					console.log('[...]EDRO.Objects.Player: objAudio.play()');
					}
				this.objAudio.oncanplaythrough	=function()
					{
					//alert('.oncanplaythrough');
					console.log('[Vvv]EDRO.Objects.Player: onCanPlayThrough()');
					objReality.arrPlayer.bIzLoading	=false;
					objReality.arrPlayer.bIzPlaying	=true;
					objReality.arrPlayer.bIzWaiting	=false;
					objPlayer.bIzWhileHumanEvent	=false;
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplaythrough<br/>';
					objPlayer.objAudio.play();
					//this.play();
					//this.bIzWeThinkPlayerIsPlaying	=true;
					//objPlayer.bIzWhileHumanEvent	=false;
					console.log('[...]EDRO.Objects.Player: onCanPlayThrough()');
					}
				this.objAudio.onplaying		=function()
					{
					//alert('.onplaying');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onPlaying()');
					objReality.arrPlayer.bIzLoading	=false;
					objReality.arrPlayer.bIzPlaying	=true;
					objReality.arrPlayer.bIzWaiting	=false;
					objPlayer.bIzWhileHumanEvent	=false;
					//this.bIzWeThinkPlayerIsPlaying		=true;
					console.log('[Vvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=true');
					//objPlayer.bIzPlayedOnceEvent		=true; //New - 30.08.2020
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('WaitingAudio');
					objPlayer.objVisibleControls.className	+=' playing';

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: objCurrentBlock+Playing');
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('WaitingAudio');
						objPlayer.objCurrentBlock.className	+=' playing';
						console.log('[....]EDRO.Objects.Player: objCurrentBlock+Playing');
						}
					console.log('[...]EDRO.Objects.Player: onPlaying()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying bIzWhileHumanEvent=false<br/>';
					//objPlayer.bIzWhileHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onPlaying()');
					}
				this.objAudio.onended		=function()
					{
					//alert('onended');
					console.log('[Vvv]EDRO.Objects.Player: onEnded()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onEnded bIzWhileHumanEvent=false<br/>';
					console.log('[Vvv]EDRO.Objects.Player: objAudio.load()');
					objPlayer.objAudio.load(); //++ New - 30.08.2020 //--
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.load()');
					//console.log('[...]EDRO.Objects.Player: onEnded()');
					}
				this.objAudio.onpause		=function()
					{
					//alert('onpause');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause start-><br/>';
					console.log('[Vvv]EDRO.Objects.Player: onPause()');
					objReality.arrPlayer.bIzWaiting	=false;
					//console.log(objPlayer.objAudio);
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('WaitingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: objCurrentBlock');
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock-><br/>';
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('WaitingAudio');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						if(objPlayer.bIzWhileHumanEvent==false)
							{
							console.log('[Vvvvv]EDRO.Objects.Player: objCurrentBlock');
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock->bIzWhileHumanEvent==false<br/>';
					
							objPlayer.objVisibleControls.className	+=' overload';
							objPlayer.objCurrentBlock.className	+=' overload';
							//objPlayer.objAudio.load();
							
							console.log('[Vvvvv]EDRO.Objects.Player: load()');
							//objPlayer.objAudio.load();//--
							//this.bIzLoading=true;
							console.log('[Vvvvv]EDRO.Objects.Player: AFTER:load()');
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause-><br/>';
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzWhileHumanEvent->objPlayer.objAudio.load();<br/>';
							//objPlayer.objAudio.play();
							//objPlayer.play();
							console.log('[.....]EDRO.Objects.Player: objCurrentBlock');
							}
						else //isHumanEvent
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause->objPlayer.!bIzWhileHumanEvent->objPlayer.src drop;<br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: !objCurrentBlock(Stop)');
							this.bIzWeThinkPlayerIsPlaying		=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
							objPlayer.bIzNeedToBeStoppedEvent	=true;
							console.log('[Vvvvv]EDRO.Objects.Player: .bIzNeedToBeStoppedEvent=true');
							objPlayer.objAudio.src			='';
							console.log('[Vvvvv]EDRO.Objects.Player: ZzzuzzZ real stop patch 2009, progressed by assminog to total stop event 2020.');
							objPlayer.objVisibleControls.className	+=' stopped';
							console.log('[.....]EDRO.Objects.Player: !objCurrentBlock(Stop)');
							}
						console.log('[....]EDRO.Objects.Player: objCurrentBlock');
						}
					
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause end start->objPlayer.bIzWhileOnHumanEvent=false<br/>';
					objPlayer.bIzWhileOnHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onPause()');
					}
				this.objAudio.onerror		=function()
					{
					//alert('onerror');
					console.log('[Vvv]EDRO.Objects.Player: onError');
					objReality.arrPlayer.bIzWaiting	=false;
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError start-><br/>';
					
					////objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objKIIM_StatisticalMembrane._stop()-><br/>';

					

					objPlayer.objPlayingBlock		=document.getElementById(objPlayer.strPlayingID);
					if(objPlayer.bIzWhileHumanEvent)
						{
						objPlayer.objVisibleControls.classList.remove('errorAudio');
						objPlayer.objVisibleControls.classList.remove('WaitingAudio');
						objPlayer.objVisibleControls.classList.remove('stopped');
						objPlayer.objVisibleControls.classList.remove('loadingAudio');
						objPlayer.objVisibleControls.classList.remove('playing');
						objPlayer.objVisibleControls.classList.remove('overload');
						objPlayer.objVisibleControls.className	+=' errorAudio';
	    					if(objPlayer.objPlayingBlock)
							{
							objPlayer.objPlayingBlock.classList.remove('overload');
							objPlayer.objPlayingBlock.classList.remove('playing');
							objPlayer.objPlayingBlock.classList.remove('stopped');
							objPlayer.objPlayingBlock.classList.remove('loadingAudio');
							objPlayer.objPlayingBlock.classList.remove('errorAudio');
							objPlayer.objPlayingBlock.classList.remove('WaitingAudio');
							objPlayer.objPlayingBlock.className	+=' errorAudio';
							}
						console.log('[....]EDRO.Objects.Player: objPlayingBlock');
						return true;
						}
					else
						{
						if(objPlayer.bIzNeedToBeStoppedEvent)
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=true<br/>';
							console.log('[Vvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent==TRUE');
							
							objPlayer.bIzNeedToBeStoppedEvent	=false;
							//console.log('[Vvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=false');
							this.bIzWeThinkPlayerIsPlaying		=false;
							//console.log('[Vvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
							//jPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError<br/>';

							objPlayer.objVisibleControls.classList.remove('errorAudio');
							objPlayer.objVisibleControls.classList.remove('stopped');
							objPlayer.objVisibleControls.classList.remove('loadingAudio');
							objPlayer.objVisibleControls.classList.remove('WaitingAudio');
							objPlayer.objVisibleControls.classList.remove('playing');
							objPlayer.objVisibleControls.classList.remove('overload');
							objPlayer.objVisibleControls.className	+=' stopped';
		    					if(objPlayer.objPlayingBlock)
								{
								objPlayer.objPlayingBlock.classList.remove('overload');
								objPlayer.objPlayingBlock.classList.remove('playing');
								objPlayer.objPlayingBlock.classList.remove('loadingAudio');
								objPlayer.objPlayingBlock.classList.remove('WaitingAudio');
								objPlayer.objPlayingBlock.classList.remove('errorAudio');
								objPlayer.objPlayingBlock.className	+=' stopped';
								}
							//objPlayer.stop();
							console.log('[====]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
							return true;
							}
						else
							{
							objPlayer.objAudio.load();//++
							}
						}
					/*
					if(objPlayer.objPlayingBlock)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock<br/>';
						console.log('[Vvvv]EDRO.Objects.Player: objPlayingBlock');
						if(objPlayer.bIzNeedToBeStoppedEvent)
							{
							
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=true-><br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
							objPlayer.objVisibleControls.classList.remove('stopped');
							objPlayer.objVisibleControls.classList.remove('loadingAudio');
							objPlayer.objVisibleControls.classList.remove('playing');
							objPlayer.objVisibleControls.classList.remove('overload');
							objPlayer.objVisibleControls.className	+=' stopped';

							objPlayer.objPlayingBlock.classList.remove('overload');
							objPlayer.objPlayingBlock.classList.remove('playing');
							objPlayer.objPlayingBlock.classList.remove('loadingAudio');
							objPlayer.objPlayingBlock.classList.remove('errorAudio');
							objPlayer.objPlayingBlock.className	+=' stopped';
							//objPlayer.stop();
							objKIIM_StatisticalMembrane._stop();
							objPlayer.bIzNeedToBeStoppedEvent	=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=false');
							this.bIzWeThinkPlayerIsPlaying		=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
							console.log('[=====]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
							return true;
							}
						else
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock<br/>';
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=false-><br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: !bIzNeedToBeStoppedEvent?');
							//if(objReality.arrPlayer.bIzPlaying==false)
							//	{
							//	objPlayer.objPlayingBlock.className	+=' errorAudio';
							//	}
							//else
							//	{
								objPlayer.objAudio.load();//++
							//	}
							console.log('[.....]EDRO.Objects.Player: !bIzNeedToBeStoppedEvent?');
							//return true;
							//objKIIM_StatisticalMembrane._error();
							}

						}

						*/
					//objKIIM_StatisticalMembrane._error();
					//objPlayer.objVisibleControls.className	+=' errorAudio';
					console.log('[Vvv]EDRO.Objects.Player: objPlayingBlock.setError+');


					//objPlayer.bIzWhileOnHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					//objPlayer.objAudio.load();
					//this.bIzLoading=true;
					
					////objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError dropHumanEvent flag->';
					//objKIIM_StatisticalMembrane._stop();
					//objPlayer.bIzWhileOnHumanEvent=false;
					//console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onError');
					}
				this.objAudio.onstalled		=function()
					{
					//alert('.onstalled	');
					console.log('[Vvv]EDRO.Objects.Player: objAudio.onstalled');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled<br/><br/>';
					//objPlayer.bIzWhileHumanEvent	=false; //+ new!  30.08.2020
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled-> .load()<br/>';
					//objPlayer.objAudio.play(); //++n
					//objKIIM_StatisticalMembrane._error();


					if(objReality.bIzAndroid)
						{
						console.log('[...]EDRO.Object Reality: Adroid');
						objPlayer.objAudio.play();
						}
					else
						{
						objPlayer.objAudio.load();//--
						}
					if(objReality.bIzApple)
						{
						console.log('[...]EDRO.Object Reality: Apple');
						}
					if(objReality.bIzDesktop)
						{
						console.log('[...]EDRO.Object Reality: Other');
						}
					
					this.bIzLoading		=false;
					console.log('[...]EDRO.Objects.Player: objAudio.onstalled');
					//objPlayer.objAudio.play(); //++n
					}
				this.objAudio.onabort		=function() //Abort is allowed in Russia. But we disallow abort. Abort is a murder death kill! Hfic Samin.
					{
					console.log('[Vvv]EDRO.Objects.Player: onAbort');
					//alert('onabort');
					//objReality.arrPlayer.bIzPlaying
					if(objReality.arrPlayer.bIzLoading===true)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onAbort while loading pass through';
						}
					else
						{
						if(objReality.arrPlayer.bIzPlaying===true)
							{
							objPlayer.objAudio.load();
							}
						}
					//console.log('[Vvv]EDRO.Objects.Player: onAbort');
					//objKIIM_StatisticalMembrane._error();
					//objPlayer.bIzWhileHumanEvent		=false;
					//console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.bIzNeedToBeStoppedEvent	=false;
					//console.log('[Vvv=^+v]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=true');
					//objPlayer.objAudio.pause();  //+ new!  30.08.2020
					////objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onAbort dropHumanEvent flag->';
					console.log('[...]EDRO.Objects.Player: onAbort');
					}
				this.objAudio.onsuspend		=function()
					{
					//alert('onsuspend');
					console.log('[Vvv]EDRO.Objects.Player: onSspend');
					////objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onSuspend<br/>'; //drop 
					//objPlayer.bIzWhileHumanEvent	=false; //+ new!  30.08.2020
					//console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onSuspend-> .drplg<br/>'; //drop log
					if(objReality.bIzAndroid)
						{
						console.log('[...]EDRO.Object Reality: Adroid');
						}
					if(objReality.bIzApple)
						{
						console.log('[...]EDRO.Object Reality: Apple');
						}
					if(objReality.bIzDesktop)
						{
						console.log('[...]EDRO.Object Reality: Other');
						}
					if(objReality.arrPlayer.bIzLoading===true)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onSuspend while loading pass through';
						console.log('[...]EDRO.Object Suspend on loading');
						}
					else
						{
						if(objReality.arrPlayer.bIzPlaying===true)
							{
							console.log('[...]EDRO.Object Suspend on playing');
							//objPlayer.objAudio.load();
							}
						console.log('[...]EDRO.Object Suspend on unknown');
						}
					//objPlayer.objAudio.play();
					//objPlayer.objAudio.play(); //++n
					console.log('[...]EDRO.Objects.Player: onSspend');
					}
				console.log('[..]EDRO.Objects.Player: Player.constructor()');
				}
			play(obj, strAudio, strAudioType)
				{
				//objPlayer.objAudio.play();
				console.log('[Vv]EDRO.Objects.Player: play()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.Play-><br/>';
				objReality.arrPlayer.bIzLoading		=true;
				objPlayer.intLoadingDuration	=0;
				objReality.arrPlayer.bIzPlaying		=false;
				objPlayer.intPlayingDuration	=0;
				objPlayer.objVisibleControlsPlaying.innerHTML='';
				console.log('[Vv]EDRO.Objects.Player: clear.Indicator.Playing');
				objPlayer.bIzWhileHumanEvent	=true;
				console.log('[Vv]EDRO.Objects.Player: bIzWhileHumanEvent=true');
				objPlayer.bIzPlayedOnceEvent	=false;
				console.log('[Vv]EDRO.Objects.Player: bIzPlayedOnceEvent=false');

				if(objPlayer.strPlayingID!=false)
					{
					console.log('[Vvv]EDRO.Objects.Player: strPlayingID!=false');
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('WaitingAudio');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');


					objPlayer.objPlayingBlock	=document.getElementById(objPlayer.strPlayingID);
					console.log('[Vvv]EDRO.Objects.Player: reload.objPlayer');
					if(objPlayer.objPlayingBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: reload.objPlayingBlock?');
						objPlayer.objPlayingBlock.classList.remove('overload');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('WaitingAudio');
						objPlayer.objPlayingBlock.classList.remove('errorAudio');
						console.log('[....]EDRO.Objects.Player: reload.objPlayingBlock?');
						}
					console.log('[...]EDRO.Objects.Player: strPlayingID!=false');
					}


				//objPlayer.objCurrentBlock		=obj.parentNode.parentNode;
				if(typeof(obj)=='object')
					{
					console.log('[Vvv]EDRO.Objects.Player: obj==object?');
					objPlayer.objStation			=obj.parentNode.parentNode.parentNode;
					objPlayer.strCurrentID			=objPlayer.objStation.id;
					//objPlayer.objAudio.src			=b64clr(strAudio);
					console.log('[...]EDRO.Objects.Player: obj==object?');

					}
				objPlayer.objCurrentBlock			=document.getElementById(objPlayer.strCurrentID);
				console.log('[Vv]EDRO.Objects.Player: loadCurrentBlock by objPlayer.strCurrentID');
				if(objPlayer.objCurrentBlock)
						{
						objPlayer.strStationName			=objPlayer.objCurrentBlock.getElementsByTagName('strScrolling')[0].innerHTML;
						objPlayer.intNum				=objPlayer.objCurrentBlock.attributes.num.value;
						}
				//alert(objPlayer.intNum);
				objEvent.arrReality.int1PlayingStationNum		=objPlayer.intNum;
				objEvent.arrReality.strPlayingStationId			=objPlayer.strCurrentID;
				objPlayer.objVisibleControlsPlaying.innerHTML			='<a style="color:white;text-decoration:none" href="#" onClick="objEvent.arrReality.strName=objPlayer.strStationName; objEvent.arrReality.strStyle=\'\';objEvent.arrReality.intBitrate=\'\';objEvent.arrReality.strCodec=\'\';objEvent._UpdateURLDyn(true);">'+objPlayer.strStationName+'</a>';
				objPlayer.objVisibleControlsLoadingStationName.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsNoConnectionStationName.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.innerHTML			='<a style="color:gray;text-decoration:none" href="#" onClick="objEvent.arrReality.strName=objPlayer.strStationName; objEvent.arrReality.strStyle=\'\';objEvent.arrReality.intBitrate=\'\';objEvent.arrReality.strCodec=\'\';objEvent._UpdateURLDyn(true);">'+objPlayer.strStationName+'</a>';
				objPlayer.objVisibleControlsOverloadStationName.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.setAttribute('playerId', objPlayer.strCurrentID);
				//objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
				objPlayer.objVisibleControls.className		+=' loadingAudio';
				if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.className		+=' loadingAudio';
						}
				console.log('[Vv]EDRO.Objects.Player: Visible controls +loadingAudio');
				console.log('[Vv]EDRO.Objects.Player: +loadingAudio');
				//objPlayer.objAudio.setAttribute('type', strAudioType);
				if(objReality.bIzAndroid)
					{
					console.log('[Vvv]EDRO.Objects.Player: bIzAndroid');
					objPlayer.objAudio.src		=strAudio;
					objPlayer.objAudio.volume	=1;
					objPlayer.objAudio.play();
					console.log('[...]EDRO.Objects.Player: bIzAndroid');
					}
				else
					{
					console.log('[Vvv]EDRO.Objects.Player: bIzAndroid=false');
					objEvent._PlayStation(objPlayer.strCurrentID);
					console.log('[...]EDRO.Objects.Player: bIzAndroid=false');
					}
				objPlayer.strPlayingID				=objPlayer.strCurrentID;
				console.log('[Vv]EDRO.Objects.Player: Current>>Playing');
				objPlayer.bIzWhileHumanEvent			=false;
				console.log('[Vv]EDRO.Objects.Player: .bIzWhileHumanEvent=false');
				objReality.arrPlayer.bIzLoading			=false;
				//objPlayer.objAudio.src			=strAudio;
				//objPlayer.objAudio.load();

				console.log('[..]EDRO.Objects.Player: play()');
				}
			stop(strIsHumanOr='Unknown')
				{
				console.log('[Vv]EDRO.Objects.Player: stop()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.Stop-><br/>';
				objPlayer.bIzWhileHumanEvent		=true;
				console.log('[Vv]EDRO.Objects.Player: bIzWhileHumanEvent=true');
				objPlayer.bIzPlayedOnceEvent		=false;
				console.log('[Vv]EDRO.Objects.Player: bIzPlayedOnceEvent=false');
				objPlayer.bIzNeedToBeStoppedEvent	=true;
				console.log('[Vv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=true');

				console.log('[Vv]EDRO.Objects.Player: BEFORE:pause()');
				objPlayer.objAudio.pause();
				console.log('[V]EDRO.Objects.Player: AFTER:pause()');
				objPlayer.objAudio.src			='';
				console.log('[Vv]EDRO.Objects.Player: ZzzuzzZ real stop patch 2009, progressed by assminog to total stop event 2020.');
				console.log('[..]EDRO.Objects.Player: stop()');
				}
			updateOnReload()
				{
				console.log('[Vv]EDRO.Objects.Player: updateOnReload()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.updateOnReload-><br/>';
				if(objPlayer.objVisibleControls.classList.contains('playing'))
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer. has playing flag-><br/>';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer. is current block-><br/>';
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					}
				if(objPlayer.objVisibleControls.classList.contains('loadingAudio'))
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer. has loadingAudio block-><br/>';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer. adding loadingAudio flag to current block-><br/>';
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}
					}
				console.log('[..]EDRO.Objects.Player: updateOnReload()');
				}
			keepCurrentState()
				{
				console.log('[Vv]EDRO.Objects.Player: keepCurrentState()');
				console.log('[..]EDRO.Objects.Player: keepCurrentState()');
				}
			}
		console.log('[.]EDRO.Objects.Player: Declare Player');
		</script>
oo2oo;
		return $str;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationBlock
	{
	public  $strHTML;
	public function __construct($arrStatrion, $arrPagination, $arrEventReality, $objEDRO)
		{
		/*echo '<pre>';
		print_r($arrStatrion);
		echo '</pre>';
		exit;*/
		$strAudioType	='';
		//echo '/home/ЕДРО:ПОЛИМЕР/HiFiIntelligentClub/Stations/belongs/Genred/'.$arrStatrion['strId'].'.plmr';
		$arrStationGenres	=(array)FileRead::objJSON('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/belongs/Genres/'.$arrStatrion['strId'].'.plmr');
		//print_r($arrStationGenres);
		$strGenre	='';
		$strGenres	='';
		if(is_array($arrStationGenres)&&!empty($arrStationGenres))
			{
			foreach($arrStationGenres as $strGenre)
				{
				$strGenres	.=Tag::strHTML($strGenre, $arrEventReality, 'strGenre', 11, $objEDRO);
				}
			}

		$strId			=$arrStatrion['strId'];
		$strName		=$arrStatrion['strName'];
		$strAudio		=$arrStatrion['strAudio'];
		//$strAudioType		=$arrStatrion['strAudioType'];
		//$strAudioBitrate	=$arrStatrion['strAudioBitrate'];
		//$strStyle		=$arrStatrion['strStyle'];
		$int0ListNum		=$arrStatrion['int0ListNum'];
		$arrICQR		=$arrStatrion['arrICQR'];
		$strICQR_Q		=$arrStatrion['strICQR_Q'];
		$int0PageStart		=$arrPagination['int0Start'];
		$int1ListNum		=($int0PageStart+$int0ListNum)+1;
					unset($arrStatrion);

		/*if($_SESSION['strListener']=='e1NgS3lCcnYо26')
			{
			echo '<pre>';
			print_r($arrPagination[$int0Start]);
			echo '</pre>';
			}
    			//print_r($arrPagination['int0CurrentStation']);
		*/
		$intListPosition	=$int1ListNum;

		$this->strHTML	='
		<station
			id	="'.$strAudio.'"
			num	="'.$int1ListNum.'"
			class	="block left rel layer_1_1 BLL BRJ TC1 BC1"
			style	="
				width		:398px;
				height		:100px;
				max-width	:99vw;
				text-decoration	:none;
				margin-right	:10px;
				margin-bottom	:7px;
				margin-top	:0;
				"
			>
			<header
				class="block BC1"
				style="
					width		:398px;
					height		:60px;
					"
				>
				<player
					class="left"
					style="
						width		:40px;
						height		:50px;
						"
					>'.
					Player::strHTML($strAudio, $strAudioType).
				'</player>
				<stationName
					class="block left TC1 BC1"
					style="
						width		:358px;
						height		:100%;
						"
					>'.
					Header::strHTML($strName, $arrEventReality, $arrICQR, $strICQR_Q, $objEDRO).
				'</stationName>
			</header>
			<genre
				class="block scrollerY"
				style="
					height		:40px;
					"
				>'.
				StatisticIndicator::strDesign($arrPagination, $int0ListNum).
				'
				<blockText
					class="block rel"
					style="
						height		:20px;
						font-size	:xx-small;
						"
					>
					<overlay 
						title=""
						class="abs TC1" 
						style="
							width			:100%;
							height			:100%;
							font-size		:xx-small;
							background-color	:rgba(255,255,255,0.7);
							font-size		:large;
							text-align		:center;
							"
						>
					</overlay>
					<ifEN title="Declared styles:">
						Declared:
					</ifEN>
					<ifRU title="Заявленные стили:">
						Заявленные:
					</ifRU>
					
				</blockText>
				'.
				$strGenres.
				'
				<blockText
					class="block left rel"
					style="
						font-size	:xx-small;
						height		:20px;
						width		:49%;
						"
					>
					<overlay 
						title="Feature. Will be avaliable soon."
						class="
							abs TC1
							" 
						style="
							width			:100%;
							height			:100%;
							font-size		:xx-small;
							text-align		:center;
							background-color	:rgba(255,255,255,0.7);
							"
						>
					</overlay>
					<ifEN>
						ICQR:
					</ifEN>
					<ifRU>
						ICQR:
					</ifRU>
				</blockText>
				<blockText
					class="
						block left rel
						"
					style="
						font-size	:xx-small;
						height		:20px;
						width		:49%;
						"
					>
					<overlay 
						title="Feature. Will be avaliable soon."
						class="abs TC1" 
						style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;"
						>
					</overlay>
					<ifEN>
						Now:
					</ifEN>
					<ifRU>
						Cейчас:
					</ifRU>
					
				</blockText>
			</genre>
			<ICQR_Setup
				class="block border-bottom"
				style="
					height		:20px;
					width		:100%;
					"
				>
			</ICQR_Setup>
			'.
			//HFIC_CreatorsRespect::strHTML($objKIIM, $this->arr['_strCopyrightInfo']).
			''.
			//Shader::strHTML($objKIIM, $this->strLogo).
			''.
			
			''.
			//Overlay::strHTML($objKIIM, 'Loading. Please wait.').
			'
			<description
				class="block rel layer_1_4"
				style="
					display		:none; /*Disabeled untill 31.08.2020 23:59*/
					"
				>'.
				//$this->arr['_strDescription'].
			'</description>
			<!--marquee>Сообщения Сообщения Сообщения</marquee-->
		</station>';
		//print_r($this);
		}
	public static function strHTML($arrStatrion, $arrPagination, $arrEventReality, $objEDRO=array())
		{
		$objStationBlock=new StationBlock($arrStatrion, $arrPagination, $arrEventReality, $objEDRO);
		return $objStationBlock->strHTML;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationLink
	{
	public $strHTML='';
	public function __construct($_strData, $_arrSearch)
		{
		$strData=$_strData;
		   unset($_strData);
		$arrSearch=$_arrSearch;
		     unset($_arrSearch);
		$arrEvent=arrEventLink($arrSearch, 'name', $strData);
		$this->strHTML=''.
		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block BC2 TC2"

			style="
				width		:100%;
				height		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>
			>'.
		'</a>';
		//	onclick="
		//		objSearch.strValueInputName=\''.$strData.'\';
		//		objSearch._ActualizeInputFields();
		//		objDynaScreen.strURL=this.href;
		//		objEvent.strURL=this.href;
		//		objDynaScreen._Update();
		//		return false;
		//		"
		}

	public static function strHTML($_strData, $_arrSearch)
		{
		$objStationLink=new StationLink($_strData, $_arrSearch);

		return $objStationLink->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StationList
	{
	public $strHTML;
	private $arrEDRO=
	array(
		'arrE'=>
		array(
			'/','/search'
			),
		'arrD'=>
		array(
			'/home/EDRO/2.Design/.strFileList.php',
			),
		'arrR'=>
		array(
			'arrLang'=>
			array(
				'EN','RU',
			),
			'arrRole'=>
			array(
				'Listener'
				),
			),
		'arrO'=>
		array(
			'strHTML'=>''
			),
		);
	public function __construct($objEDRO)
		{

		$arrPagination=$objEDRO->arrObjects['мРасположение'];
		$int0ListNum		=0;
		foreach($objEDRO->arrObjects['мТаблица'] as $сРасположение)
			{
			$objStation				=FileRead::objJSON($сРасположение);
			///$objGenres				=FileRead::objJSON($objKIIM, $сРасположение);
			$arrStationS['strId']			=strSafeUsers($objStation->id);
			$arrStationS['strStationName']		=strSafeUsers($objStation->server_name);
			if(isset($objStation->strICQR_Q))
				{
				$arrStationS['strICQR_Q']		=strSafeUsers($objStation->strICQR_Q);
				}
			else
				{
				$arrStationS['strICQR_Q']		='';
				}
			//$objStation->server_type		=strSafeUsers($objStation->server_type);
			//$objStation->bitrate			=strSafeUsers($objStation->bitrate);
			//$objStation->genre			=strSafeUsers($objStation->genre);
			if(isset($objStation->strICQR_live))
				{
				$arrStationS['strICQR_LIVE']		=strSafeUsers($objStation->strICQR_live);
				}
			else
				{
				$arrStationS['strICQR_LIVE']		='';
				}
			$arrStationS['arrStationDeclaredGenres']=array();
			$arrStationS['arrICQRGenres']		=array();
			$arrStationS['arrCurrentGenres']	=array();
			$arrStationS['arrCurrentDjMessages']	=array();
			$arrStationS['arrStationShedullerNotice']=
				array(
				'strShedulledProgramName'=>
					array(
					'strBegin'=>'xxxx-xx-xx xx:xx:::xx GMT+X',
					'strEnd'=>'xxxx-xx-xx xx:xx:::xx GMT+X',
					'strDjName'=>
						array(
						'Dj Logo',
						'Dj NickName',
						'Dj Contacts',
						'Dj Welcome Message',
						'Dj programm genre',
						'Dj programm position HiFi/NoHiFi',
						'Dj Social networks links',
						'Dj own site',
						'Dj adverticement messages',
						'Dj adverticement images',
						'Dj adverticement links',
						'Dj adverticement interval',
						'Dj thanks and respects words',
						'Label name',
						'Label logo image',
						'Label Contacts',
						'Label site',
						'Label adverticement messages'
						),
					'arrChatMessages'=>array(),
					'arrConnectionReport'=>
						array(
						'ConnectedFrom',
						'FailureDate/Time',
						'FailureType',
						),
					'arrQualityReport'=>
						array(
						'From',
						'Date/Time',
						),
					'arrListenersReport'=>
						array(
						'From',
						'Date/Time1',
						'Date/Time2',
						)
					),
				    
				);
			//echo'<pre>';
			//print_r($objStation);
			//echo'</pre>';
			$arrICQR['RU']				='';
			$arrICQR['EN']				='';
			//echo'<pre>';
			//	print_r($arrStationS);
			//echo'</pre>';
			//$a					=strSafeUsers(sarrConnect_RU);
			//$b					=strSafeUsers(sarrConnect_EN);
			$strICQRPrefix				='';
			$strICQRSuffix				='';
			if($objEDRO->arrReality['bIzAndroid'])
				{
				$strAudio	=сКодировать($arrStationS['strId'], 'д');
				}
			else
				{
				$strAudio	=$arrStationS['strId'];
				//echo	$strAudio;
				}
			$arrStation=
			array(
				'strId'			=>$arrStationS['strId'],
				'int0ListNum'		=>$int0ListNum,
				'strName'		=>$arrStationS['strStationName'],
				'strAudio'		=>$strAudio,
				'strICQR_Q'		=>$arrStationS['strICQR_Q'],
				// 'strAudioType'	=>$objStation->server_type,
				// 'strAudioBitrate'	=>$objStation->bitrate,
				// 'strStyle'		=>$objStation->genre,
				'arrICQR'		=>$arrICQR
				);
		
			$arrPagination['int0CurrentStation']	=$int0ListNum;
			$this->strHTML.= StationBlock::strHTML($arrStation, $arrPagination, $objEDRO->arrEvent['arrReality'], $objEDRO);
			$int0ListNum++;
			}
		}
	public function _HTML($objEDRO)
		{
		$objStationList=new StationList($objEDRO);
		}
	public function strHTML($objEDRO)
		{
		$objStationList=new StationList($objEDRO);
		return $objStationList->strHTML;
		}
	public function _EDRO($objEDRO)
		{
		$objStationList=new StationList($objEDRO);
		return $objStationList->strEDRO;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationQualityUPLink
	{
	public $strHTML='';
	public function __construct($_strData, $_arrSearch, $objEDRO)
		{
		//$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//unset($_objKIIM);
		//$strData=$_strData;
		  // unset($_strData);
		/*foreach($_arrSearch as $strName=>$strValue)
			{
			//$arrSearch[$strName]	=нольЧИлиС($strName,'');	
			$arrSearch[$strName]	='';
			}
		unset($_arrSearch)*/
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$strO='title="Записать значение имени станции в поиск по имени станции"';
			}
		else
			{
			$strO='title="Write station name to current search by name value."';
			}
		
		$arrEvent=arrEventLink($_arrSearch, 'strName', $_strData);
		$this->strHTML=''.
		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block TC3 BC3 halfLine"
			'.$strO.'
			style="
				width		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>
			>'.
		'</a>';
		//
//		$arrEvent=arrEventLink($arrSearch, 'name', $strData);
//		$this->strHTML=''.
/*		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block"
			title=""
			style="
				color		:#000;
				background-color:#FFF;
				width		:100%;
				height		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>'.
			'+'.
		'</a>';*/
		//KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	public static function strHTML($_strData, $_arrSearch, $objEDRO=array())
		{
		$objStationLink=new StationQualityUPLink($_strData, $_arrSearch, $objEDRO);
		return $objStationLink->strHTML;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaScreenEventIndicator
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='
		<eventIndicator
			id	="DynaScreenEventIndicator"
			class	="brick abs layer_3_2  line"
			style	="
				display			:none;
				top			:0px;
				left			:0px;
				width			:2px;
				background-color	:#fff;
				"
			>
			<light

				class	="brick abs layer_3_4 blink-fast line"
				style	="
					display			:block;
					top			:0px;
					left			:0px;
					width			:2px;
					background-color	:#333;
					"
				>
			</light>
		</eventIndicator>';
		$this->strHTML.=DynaScreenEventIndicator::strObjectInit();
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('DynaScreenEventIndicator');
		}
	public static function strObjectDeclare()
		{
		$str='
		<script>
			class DynaScreenEventIndicator
				{
				constructor()
					{
					this.objHTML=document.getElementById(\'DynaScreenEventIndicator\');
					console.log(\'Loaded DynaScreen event indicator (objDynaScreenEventIndicator).\');
					}
				}
		</script>';
		return $str;
		}
	public static function strHTML()
		{
		$objDynaScreenEventIndicator=new DynaScreenEventIndicator();
		return $objDynaScreenEventIndicator->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion


                             |E    |D     |R      |O      |
                             |Event|Design|Reality|Objects|

                                       ЕДРО:ПОЛИМЕР
                            ___________          ___________
                           |   /////  /          \  \\\\\   |
                           |  // /                    \ \\  |
                           | /// /                    \ \\\ |
                           |///// /                 \ \\\\\\|

                                      ////// 2021
                                    //        /\ 
                                    //      <  **> 
                                     //////   jl
                                 /./././././././././.

class IndicatorDimensionsDesign
	{
	public $strEDRO		='';
	public function __construct()
		{
		$this->_Event();
		$this->_Design();
		$this->_Reality();
		$this->_ObjectHTML()
		
		}
	private 	function _Event()
		{
		}
	private  	function _Design()
		{
		}
	private  	function _Reality()
		{
		}
	private  	function _ObjectHTML()
		{
		}
	public 	staic	function strHTML()
		{
		}
	}

--.---------------------------------------------------------------------------------
1.| EDRO Разложение, запись в 1 строку:
--|---------------------------------------------------------------------------------
  | EDRO	=objName[->E(),->D(),->R(),->O()]
  |
--|---------------------------------------------------------------------------------
2.| EDRO Разложение, запись в 4 строки:
--|---------------------------------------------------------------------------------
  |[E]:=objName->strEvent()
  |[D]:=objName->strDesign()
  |[R]:=objName->strReality()
  |[O]:=objName->strObjects()
  |
*/

class IndicatorDimensions
	{
	public $strHTML ='';
	private $arrEDRO=
		array(
			'arrE'=>
			array(
				'/','/search'
				),
			'arrD'=>
			array(
				'/home/EDRO/2.Design/.strFileList.php',
				),
			'arrR'=>
			array(
				'arrLang'=>
				array(
					'EN','RU',
					),
				'arrRole'=>
				array(
					'Listener'
					),
				),
			'arrO'=>
			array(
				'strHTML'=>''
				),
			);
	public function __construct()
		{
		//$this->_Event();
		$this->_Design();
		//$this->_Reality();
		//$this->_Object();
		//$this->strEDRO		='';
		}
	private function _Event()
		{

		}
	private function _Design()
		{
		$this->strHTML='
			<dimensionsDesign
				id="designDimensions"
				class="fixed block TC1 BC1 layer_5"
				style="	
					top		: 9px;
					left		: 10px;
					width		: 2px;
					height		: 2px;
					text-align	: center;
					margin-right	: 1px;
					"
				>
			</dimensionsDesign>
		';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function _Reality()
		{
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorDimensions: Declare.');
			class IndicatorDimensions // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO.IndicatorDimensions: construct.');
					this.objStr		=document.getElementById('designDimensions');
					console.log('[..]EDRO.IndicatorDimensions: construct.');
					}
				}
			console.log('[.]EDRO IndicatorDimensions: Declare().');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorDimensions');
		}
	public static function strHTML()
		{
		$objIndicatorDimensions		=new IndicatorDimensions();
		return $objIndicatorDimensions->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorHiFi
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
		<HiFi
			class="rel left no-select ifNoFollowingDj TC3 BC3"
			style="
				height		:20px;
				font-size	:smaller;
				text-align	:center;
				line-height	:18px;
				"
			>
			<PictogramHelper
				id		="strListener"
				class		="block"
				>


			</PictogramHelper>
		</HiFi>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorHiFi: Declare.');
			class IndicatorHiFi // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorHiFi: construct.');
					
				
					this.objStr			=document.getElementById('strListener');

					console.log('[..]EDRO IndicatorHiFi: construct.');
					}
				}
			console.log('[.]EDRO IndicatorHiFi: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorHiFi');
		}
	public function strHTML()
		{
		$objIndicatorHiFi		=new IndicatorHiFi();
		return $objIndicatorHiFi->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorLang
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<lang
				id="SignalLanguage"
				class="rel right BC3 TC3"
				style="	
					height		: 100%;
					width		: 25px;
					text-align	: center;
					margin-right	: 1px;
					font-size	: small;
					line-height	: 19px;
					"
				>
				<!--handle
					id="SignalLanguageInteractiveBlock"
					class="block abs layer_3_2"
					style="
						display	:none;
						right	:0;
						top	:0;
						width	:188px;
						height	:86px;
						"
					>'.
					/*SensorList::strHTML(array(
								"RU","EN","FR","IT","BY","UA"
								)
							).*/
				'</handle-->
				<result
					id="LanguageSignalWindow"
					>
					<ifRU
						class="no-select"
						>
						RU
					</ifRU>
					<ifEN
						class="no-select"
						>
						EN
					</ifEN>
				</result>
			</lang>
			';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorLang: Declare.');
			class IndicatorLang // Init after signal panel//
				{
				constructor()
					{
					this.objStr		=document.getElementById('LanguageSignalWindow');
					this.objStr.innerHTML	=strSignalLang;
					}
				}
			console.log('[.]EDRO IndicatorLang: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorLang');
		}
	public function strHTML()
		{
		$objIndicatorLang		=new IndicatorLang();
		return $objIndicatorLang->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorMasterClock
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<masterClock
				class="fix layer_3  block no-select TC3 BC3 V98"
				style="	
					width		: 40px;
					height		: 20px;
					left		: 0px;
					text-align	: left;
					font-size	: x-small;
					"
				>
				<masterHeartBeat_ClockIndicator
					id	="MasterClock"
					class	="block"
					title	="Player session total operation time"
					style="
						width		: 100%;
						height		: 50%;
						line-height	: 9px;
						"
					>
					0
				</masterHeartBeat_ClockIndicator>
				<masterHeartBeat_ServerLoading
					id	="ServerLoadingTime"
					class	="block"
					title	="Total server loading time"
					style="
						width		: 100%;
						height		: 50%;
						line-height	: 9px;
						"
					>
					0
				<masterHeartBeat_ServerLoading>
			</masterClock>
			';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorMasterClock: Declare.');
			class IndicatorMasterClock
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorMasterClock: construct.');
					this.objStr			=document.getElementById('MasterClock');
					this.objStrServerLoading	=document.getElementById('ServerLoadingTime');
					console.log('[..]EDRO IndicatorMasterClock: construct.');
					}
				}
			console.log('[.]EDRO IndicatorMasterClock: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorMasterClock');
		}
	public function strHTML()
		{
		$objIndicatorMasterClock		=new IndicatorMasterClock();
		return $objIndicatorMasterClock->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorNetwork
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<network
				class	="fix block BRJ layer_2_1"
				style	="
					line-height	:9px;
					margin-right	:1px;
					"
				>
				<NetSrvReady
					id="NetSrvReady"
					class="block left  BLL"
					style="	
						left		: 10px;
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Stream network avaliability status"
						class		="no-select"
						>
						N
					</ifRU>
					<ifEN
						title		="Статус доступности аудиопотока сети"
						class		="no-select"
						>
						H
					</ifEN>
				</NetSrvReady>
				<NetSrvPortsReady
					id="NetSrvPortsReady"
					class="block left  BLL"
					style="	
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Готовность к воспроизведению аудиопотока"
						class		="no-select"
						>
						Р
					</ifRU>
					<ifEN
						title		="Ready to play audiostream"
						class		="no-select"
						>
						R
					</ifEN>
				</NetSrvPortsReady>
			</network>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorNetwork: Declare.');
			class IndicatorNetwork
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorNetwork: construct.');
					this.objStrSrvReady			=document.getElementById('NetSrvReady');
					this.objStrSrvPortsReady		=document.getElementById('NetSrvPortsReady');
					console.log('[..]EDRO IndicatorNetwork: construct.');
					}
				}
			console.log('[.]EDRO IndicatorNetwork: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorNetwork');
		}
	public function strHTML()
		{
		$objIndicatorNetwork		=new IndicatorNetwork();
		return $objIndicatorNetwork->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorPlayer
	{
	public $str;
	public function __construct()
		{
		//Новый год  🎄🎅
		//✰✰
		//★
		//🌠
		$this->str='
		<playerControlAlwaysVisible
			id	="playerControlAlwaysVisible"
			class	="left no-select ЕС3 BC3"
			style	="
				text-align	:left;
				width		:67%;
				height		:100%;
				margin-right	:1px;
				"
			>'.
			'
			<ifReady
				class	="abs V99 block cursor BC1 TC1 layer_2_2 select scrollerY Lx2"
				style	="
					text-align	:left;
					Width		:80vw;
					"
				>
				<Hfic_Samin
					class="block right"
					style="
						width		:40px;
						height		:100%;
						"
					>
					<image
						title="Hfic: Is there any hifi sound can i hear?" 
						src="cloudrepublic.ru/Hfic_Samin.jpg" 
						class="block" 
						style="
							height:100%;
							"
					/>'.ICQRType::strHTML(array(), '', '', array()).'
				</Hfic_Samin>
				<!--ReadyButtonStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
				</ReadyButtonStat-->
				<readyText
					class	="block scrollerY Lx2 BRJ"
					style	="
						height	:40px;
						width	:40px;
						"
					>
				</readyText>
			</ifReady>
			<ifOverload
				class	="abs line V99"
				style	="
					display		:none;
					left		:0px;
					width		:100vw;
					color		:#fff;
					background-color:red;
					"
				>
				<!--playerOverloadStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<loadingDuration
						class="block"
						>
						0
					</loadingDuration>
					<loadingErrors
						class="block"
						>
						0
					</loadingErrors>
				</playerOverloadStat-->
				<playerOverloadText
					class	="block scrollerY"
					style	="
						height		:100%;
						text-align	:left;
						"
					>
					<playerOverloadStationName
						
						id	="playerControlAlwaysVisibleOverloadStationName"
						>
					</playerOverloadStationName>
					<ifEN>
						<marquee>This station rejects playing. May be this station is overload or your internet connection is not enoght. Can\'t stay connected. You can try to listen another station</marquee>
					</ifEN>
					<ifRU>
						<marquee>Не получается подключиться к выбранной радиостанции. Возможно станция перегружена или интернет канал слишком мал, чтобы воспроизводить выбранную станцию. Вы можете попробовать выбрать другую радиостанцию.</marquee>
					</ifRU>
				</playerOverloadText>
			</ifOverload>
			<ifLoadingAudio
				id	="objLoadingAudioTopSmall"
				class	="brick left cursor TC1 no-select line"
				onclick	="objPlayer.stop();"
				style	="
					display		:none;
					width		:20px;
					text-align	:center;
					"
				>
				<playShader
					class	="fix block layer_2"
					style	="
						left		:0px;
						height		:20px;
						width		:20px;
						line-height	:20px;
						background-color:#f0ff00;
						"
					>
				</playShader>
				<loadIndicator
					class="fix brick layer_2_3  cursor no-select BLL BRJ TC3"
					onclick	="objPlayer.stop();"
					style	="
						left		:0px;
						font-size	:xx-small;
						width		:20px;
						line-height	:20px;
						text-align	:center;
						color		:#FFF;
						background-color:#ffeb00b8;
						"
					>
					<ifRU 
						title	="Для отмены загрузки радио станции нажмите."
						>
						☒
					</ifRU>
					<ifEN
						title	="To stop loading this audio stream just press."
						>
						☒
					</ifEN>
				</loadIndicator>
			</ifLoadingAudio>
			<ifLoadingAudio
				class	="fix V99 cursor TC3 layer_2_2 no-select doubleLine"
				style	="
					display		:none;
					left		:0px;
					width		:100vw;
					text-align	:left;
					"
				>
				<playerLoadingButton
					class	="block left BLJ TC3 BC3 doubleLine"
					id	="playerControlAlwaysVisibleLoading"
					onclick	="objPlayer.stop();"
					style	="
						text-align	:center;
						height		:100%;
						width		:40px
						"
					>
					<ifRU
						title="Нажмите чтобы отменить подключение"
						>
						☒
					</ifRU>
					<ifEN
						title="Press to stop connecting"
						>
						☒
					</ifEN>
				</playerLoadingButton>
				<!--playerLoadingStat
					id	="playerControlAlwaysVisibleLoadingStat"
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<loadingDuration
						class="block"
						>
						<header
							class="block left"
							>pl
						</header>
						<digit
							id	="playerControlAlwaysVisibleLoadingDuration"
							>
							0
						</digit>
						
					</loadingDuration>
					<loadingErrors
						class="block"
						>
						<header
							class="block left"
							>pe
						</header>
						<digit
							id	="playerControlAlwaysVisibleLoadingErrors"
							>
							0
						</digit>
					</loadingErrors>
				</playerLoadingStat-->
				<playerLoadingText
					id	="playerControlAlwaysVisibleLoadingText"
					class="block scrollerY TC1 BC1"
					style	="
						height		:100%;
						"
					>
					<marquee>
						<ifRU>
							Подключаюсь к радиостанции...
						</ifRU>
						<ifEN>
							Connecting to radiostation.... 
						</ifEN>
					</marquee>
					<playerLoadingStationName
						id	="playerControlAlwaysVisibleLoadingStationName"
						>
					</playerLoadingStationName>
				</playerLoadingText>
			</ifLoadingAudio>
			<ifPlaying
				id	="objPlayingAudioTopSmall"
				class	="block TC3 line"
				
				style	="
					display		:none;
					width		:100%;
					"
				>
				<playShader
					class	="fix block layer_2"
					style	="
						left		:0px;
						height		:20px;
						width		:20px;
						line-height	:20px;
						background-color:#062b88;
						"
					>
				</playShader>
				<playIndicator
					class="fix block left cursor no-select BLL BRJ TC3 layer_2_2"
					onclick	="objPlayer.stop();"
					style	="
						left		:0px;
						font-size	:xx-small;
						width		:20px;
						line-height	:20px;
						text-align	:center;
						color		:#FFF;
						background-color:#062b8824;
						"
					>
					<ifRU 
						title="Для остановки воспроизведения нажмите."
						>
						■
					</ifRU>
					<ifEN
						title="To stop plaing this audio stream just press."
						>
						■
					</ifEN>
				</playIndicator>
				<playIndicatorSongName
					id	="playerControlAlwaysVisiblePlaying"
					class	="block left scrollerY"
					style="
						margin-right	:20px;
						margin-left	:20px;
						height		:100%;
						max-width	:70%;
						font-size	:large;
						"
					>
					HiFiIntelligentClub
				</playIndicatorSongName>
			</ifPlaying>
			<ifPlaying
				class	="abs V99 cursor layer_2_2 select TC3 doubleLine"
				style	="
					display		:none;
					left		:0;
					width		:100vw;
					text-align	:left;
					background-color:#062b88;
					"
				>
				<playerPlayingButton
					class	="brick left BLL BRJ doubleLine"
					style	="
						    width	:40px;
						    "
					>
					<playerPlayingButton
						class	="brick left"
						onclick	="objPlayer.stop();"
						style="
							text-align	: center;
							width		: 40px;
							color		: #FFF;
							font-size	: small;
							background-color: #2d90f52b;/*Цвет Министерства Культуры Российской Федерации*/
							"
						>
						<ifRU 
							title="Для остановки воспроизведения нажмите."
							>
							Стоп
						</ifRU>
						<ifEN
							title="To stop plaing this audio stream just press."
							>
							Stop
						</ifEN>
					</playerPlayingButton>
				</playerPlayingButton>
				<playerPlayingLike
					id	="playerControlAlwaysVisiblePlayingLike"
					class	="block left BLL BRJ TC3 BC3 line"
					style	="
						font-size	:x-large;
						text-align	:center;
						width		:25px;
						margin-left	:5px;
						line-height	:13px;
						"
					onclick	="
						alert(\'coming soon!\');
						"
					>
					+
				</playerPlayingLike>
				<playerPlayingNews
					id	="playerControlAlwaysVisiblePlayingNews"
					class	="block right BLL BRJ TC3 BC3 line"
					style	="
						font-size	:large;
						text-align	:center;
						width		:95px;
						margin-left	:5px;
						margin-right	:85px;
					
						"
					onclick	="
						alert(\'coming soon!\');
						"
					>
					<ifRU>Новости</ifRU>
					<ifEN>News</ifEN>
				</playerPlayingNews>
				<!--a 
					class="block left"
					href		="/getNews"
					onClick		="
						return false;
						"
					>
					<ifRU>
						В избранные станции
					</ifRU>
					<ifEN>
						To selected stations
					</ifEN>
				</a-->
			</ifPlaying>
			<ifNoConnection
				class	="cursor layer_2_2 no-select TC3 BC3 doubleLine"
				onclick	="objPlayer.play();"
				style	="
					display		:none;
					color		:#000;
					text-align	:center;
					"
				>⚠
			</ifNoConnection>
			<ifNoConnection
				class	="abs V99 cursor layer_2_2 no-select BC1 TC1 doubleLine"
				onclick	="objPlayer.play();"
				style	="
					display		:none;
					width		:100vw;
					left		:0px;
					text-align	:center;
					"
				>
				<!--playerNoConnectionStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<NoConnectionDuration
						class="block"
						>
						0
					</NoConnectionDuration>
					<NoConnectionErrors
						class="block"
						>
						0
					</NoConnectionErrors>
				</playerNoConnectionStat-->
				<playerNoConnectionext
					class	="block scrollerY"
					style	="
						height		:100%;
						text-align	:left;
						"
					>
					<playerNoConnectionStationName
						
						id	="playerControlAlwaysVisibleNoConnectionStationName"
						>
					</playerNoConnectionStationName>
					<ifRU>
						<marquee>Радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. Попробуйте выбрать выбрать другую радиостанцию из списка.</marquee>
						
					</ifRU>
					<ifEN>
					[p	<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
					</ifEN>
				</playerNoConnectionext>
			</ifNoConnection>
			<ifStopped
				class	="fix block cursor layer_2_2 TC3 no-select line BRJ"
				onclick	="
					//objPlayer.objAudio.src				=objPlayerIndicatorMembrane.getAttribute(\'playerId\');
					objPlayer.play();
					"
				style	="
					display		: none;
					text-align	: center;
					background-color: #0000006e;
					width		: 40px;
					"
				>
				▷
			</ifStopped>
			<ifStopped
				class	="abs V99 cursor layer_2_2 BC1 select doubleLine"
				style	="
					display		:none;
					left		:0;
					width		:100vw;
					text-align	:center;
					color		:#777;
					"
				>
				<playerPlayButton
					class	="block left TC3 BC3 line"
					onclick	="
						//objPlayer.objAudio.src			=this.parentNode.getAttribute(\'playerId\');
						objPlayer.play();
						"
					style	="
						text-align	:center;
						width		:40px;
						"
					>
					<ifEN
						title="Play station"
						>Play
					</ifEN>
					<ifRU
						title="Нажмите чтобы начать слушать радио."
						>Воспр.
					</ifRU>
				</playerPlayButton>
				<playerNoConnectionStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<NoConnectionDuration
						class="block"
						>
						0
					</NoConnectionDuration>
					<NoConnectionErrors
						class="block"
						>
						0
					</NoConnectionErrors>
				</playerNoConnectionStat>
				<playerPlayText
					id	="playerControlAlwaysVisibleStopped"
					class	="block scrollerY"
					style	="
						height		:100%;
						"
					onClick	="
						objEvent.arrReality.strID=\'\';
						objEvent.arrReality.strName=\'\'; 
						objEvent.arrReality.strStyle=\'\';
						objEvent.arrReality.intBitrate=\'\';
						objEvent.arrReality.strCodec=\'\';
						objEvent._UpdateURLDyn(true);"
						"
					>
				</playerPlayText>
			</ifStopped>
		</playerControlAlwaysVisible>
		'.Player::strObjectInit();
		}
	public static function strHTML()
		{
		$objIndicatorPlayer	=new IndicatorPlayer();
		return $objIndicatorPlayer->str;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class IndicatorRole
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<role
				id	="SignalRole"
				class	="block right BRJ BLL BC3 TC3"
				style	="	
					height		: 100%;
					/*width		: 60px;*/
					padding-right	: 4px;
					padding-left	: 4px;
					font-size	: smaller;
					text-align	: center;
					line-height	: 18px;
					"
				>
				<ifRU
					class="no-select"
					>
					Роль
				</ifRU>
				<ifEN
					class="no-select"
					>
					Role
				</ifEN>
			</role>
		';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorRole: Declare.');
			class IndicatorRole
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorRole: construct.');
					this.objStr			=document.getElementById('SignalRole');
					this.objStr.innerHTML		=strSignalRole;
					console.log('[..]EDRO IndicatorRole: construct.');
					}
				}
			console.log('[.]EDRO IndicatorRole: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorRole');
		}

	public function strHTML()
		{
		$objIndicatorRole		=new IndicatorRole();
		return $objIndicatorRole->strHTML;
		}
	}
                /*_____
© Andrey Chekmaryov 2020 Hfic.Samin@vk.com 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
////////////////////// /2021
////////  /\ ///////// /
/////// <  **> /////// /
///////   jl ///////// /
./././././././*/
class IndicatorSuspend
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<network
				class	="fix block BRJ layer_2_1"
				style	="
					line-height	: 9px;
					margin-right	: 1px;
					"
				>
				<NetSrvSuspend
					id	="NetSrvReady"
					class	="block left  BLL"
					style	="	
						left		: 20px;
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Stream network avaliability status"
						class		="no-select"
						>
						N
					</ifRU>
					<ifEN
						title		="Статус доступности аудиопотока сети"
						class		="no-select"
						>
						H
					</ifEN>
				</NetSrvSuspend>
			</network>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorSuspend: Declare.');
			class IndicatorSuspend
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorSuspend: construct.');
					this.objStrSrvReady			=document.getElementById('NetSrvReady');
					this.objStrSrvPortsReady		=document.getElementById('NetSrvPortsReady');
					console.log('[..]EDRO IndicatorSuspend: construct.');
					}
				}
			console.log('[.]EDRO IndicatorSuspend: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('IndicatorSuspend');
		}
	public function strHTML()
		{
		$objIndicatorSuspend		=new IndicatorSuspend();
		return $objIndicatorSuspend->strHTML;
		}
	}

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class PlayerEventIndicator
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='
		<eventIndicator
			id	="PlayerEventIndicator1"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:3px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light
				class	="block rel layer_3_4 blink-fast"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator2"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:11px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>

			<light
				class	="block rel layer_3_4 blink-fast1"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator3"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:19px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast2"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator4"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:27px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast3"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator5"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:35px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast4"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator6"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:43px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast5"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator7"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:51px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast6"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML='';
		//$this->strHTML.=PlayerEventIndicator::strInitJs();
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('PlayerEventIndicator');
		}
	public static function strObjectDeclare()
		{
		$str='
		<script>
			class PlayerEventIndicator
				{
				constructor()
					{
					this.objHTML=document.getElementById(\'PlayerEventIndicator\');
					console.log(\'Loaded Player event indicator (objPlayerEventIndicator).\');
					}
				}
		</script>';
		return $str;
		}
	public static function strHTML()
		{
		$objPlayerEventIndicator=new PlayerEventIndicator();
		return $objPlayerEventIndicator->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StatisticIndicator
	{
	public $strD;
	private $int0PageStart	=0;
	private	$int0ListNum	=0;
	private	$int1ListNum	=0;
	public function __construct($_arrPagination='', $_int0ListNum='')
		{
		$this->int0PageStart	= $_arrPagination['int0Start'];
		$this->int0ListNum	= $_int0ListNum;
		$this->int1ListNum	=($this->int0PageStart+$this->int0ListNum)+1;
		$this->strD		=$this->strD();
		}
	private function strD()
		{
		$str='
		<statisticIndicator
			title	="Successfull listeners"  
			class	="rel left block BRJ scrollerY" 
			style	="width:40px;height:40px;font-size:xx-small;">
			<overlay 
				title="Feature. Will be avaliable soon."
				class="abs TC1" 
				style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;line-height:39px"
				>'.
				$this->int1ListNum.
				'<!--indicator
								class="abs"
					style="left:0px;width:10px;height:20%;background-color:rgba(177,177,177,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:10px;width:10px;height:20%;background-color:rgba(77,77,77,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:20px;width:10px;height:20%;background-color:rgba(0,0,0,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:30px;width:10px;height:20%;background-color:rgba(120,120,120,0.9);"
					>
				</indicator-->
			</overlay>
			<played
				title	="Played"
				class	="block"
				>
				<strHeader>+</strHeader>
				<int>0</int>
			</played>
			<avgPlayingTime
				title	="Average playing time"
				class	="block"
				>
				<strHeader>+</strHeader>
				<strFormattedString>0</strFormattedString>
				<strUnit>s</strUnit>
			</avgPlayingTime>
			<liked 
				title	="Liked"
				class	="block"
				>
				<strHeader>+</strHeader>
				<int>0</int>
			</liked>
			<avgLoadingTime
				title	="Average loading time"
				class	="block"
				>
				<strHeader>-</strHeader>
				<strFormattedString>0</strFormattedString>
				<strUnit>s</strUnit>
                	</avgLoadingTime>
			<DropListener
				title	="Drop listener"
				class	="block"
				>
				<strHeader>-</strHeader>
				<int>0</int>
			</DropListener>
			<Reconnects
				title	="Reconnects while playing count"
				class	="block"
				>
				<strHeader>-+</strHeader>
				<int>0</int>
                	</<Reconnects>
			<viewed
				title	="Viewed"
				class	="block"
				>
				<strHeader>_</strHeader>
				<int>0</int>
			</viewed>
		</statisticIndicator>';
		return $str;
		}
	public static function strDesign($_arrPagination='', $_int0ListNum='')
		{
		$obj= new StatisticIndicator($_arrPagination, $_int0ListNum);
		return $obj->strD;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//         /\                  // /   
//       <  **>               /// /  
 //////    jl                ///// /    
./././././././*/
class SystemEventIndicatorStream
	{
	public $strHTML;
	private $arrEDRO=
	array(
		'arrE'=>
		array(
			'/','/search'
			),
		'arrD'=>
		array(
			'/home/EDRO/2.Design/.strFileList.php',
			),
		'arrR'=>
		array(
			'arrLang'=>
			array(
				'EN','RU',
				),
			'arrRole'=>
			array(
				'Listener'
				),
			),
		'arrO'=>
		array(
			'strHTML'=>''
			),
		);
	public function __construct()
		{
		$this->strHTML='
		<EDROContextSignals
			class="abs layer_4 matrixTop V100 BC3 BT3"
			style="	
				left		:0;
				height		:20px;
				width		:100%;
				"
			>'.
			DynaScreenEventIndicator::strHtml().
			IndicatorPlayer::strHTML().
			IndicatorNetwork::strHTML().
			IndicatorHiFi::strHtml().
			Login::strHTML().
			IndicatorMasterClock::strHTML().
			IndicatorDimensions::strHTML().
			IndicatorLang::strHtml().
			IndicatorRole::strHTML().
		'</EDROContextSignals>';
		}
	public static function strHTML()
		{
		//$arrData['_strName']=$_objData->strName;
		$objSystemEventIndicatorStream		=new SystemEventIndicatorStream();
		return $objSystemEventIndicatorStream->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov Hfic.Samin@vk.com 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//         /\                  // /   
//       <  **>               /// /  
 //////    jl                ///// /    
./././././././*/
class SystemEventIndicatorStreamIsDNT
	{
	public $strHTML;
	private $arrEDRO=
	array(
		'arrE'=>
		array(
			'/','/search'
			),
		'arrD'=>
		array(
			'/home/EDRO/2.Design/.strFileList.php',
			),
		'arrR'=>
		array(
			'arrLang'=>
			array(
				'EN','RU',
				),
			'arrRole'=>
			array(
				'Listener'
				),
			),
		'arrO'=>
		array(
			'strHTML'=>''
			),
		);
	public function __construct()
		{
		$this->strHTML='
		<EDROContextSignals
			class="abs layer_4 matrixTop V100 BC3 BT3"
			style="	
				left		:0;
				height		:20px;
				width		:100%;
				"
			>'.
			DynaScreenEventIndicator::strHtml().
			IndicatorPlayer::strHTML().
			IndicatorNetwork::strHTML().
			IndicatorHiFi::strHtml().
			Login::strHTML().
			IndicatorMasterClock::strHTML().
			IndicatorDimensions::strHTML().
			IndicatorLang::strHtml().
			IndicatorRole::strHTML().
		'</EDROContextSignals>';
		}
	public static function strHTML()
		{
		//$arrData['_strName']=$_objData->strName;
		$objSystemEventIndicatorStream		=new SystemEventIndicatorStream();
		return $objSystemEventIndicatorStream->strHTML;
		}
	}

                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class FormInput
	{
	public $strHTML;
	public function __construct($_arrReality)
		{//$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);


		$strLang				=$_arrReality['strLang'];
		$arrReality['strDisplayName']		=$_arrReality['arrName'][$strLang];
		$arrReality['strInputName']		=$_arrReality['arrSetup']['strInputName'];
		$arrReality['strInputValue']		=$_arrReality['arrSetup']['strInputValue'];
		$arrReality['strInputType']		=$_arrReality['arrSetup']['strInputType'];
		$arrReality['intInputSize']		=$_arrReality['arrSetup']['intInputSize'];
		$arrReality['intInputMaxLength']	=$_arrReality['arrSetup']['intInputMaxLength'];
		$arrReality['intInputWidth']		=$_arrReality['arrSetup']['intInputWidth'];
					         unset($_arrReality);
		//print_r($arrReality);
		//exit;



		$this->strHTML='
			<input'.$arrReality['strInputName'].'
				class="brick left"
				style="
					width			:'.($arrReality['intInputWidth']).'%;
					"
				>'.

				//$strFirstSelect.
				//$strSecSelect.
				'
				<input 
					id=		"SearchBy'.$arrReality['strInputName'].'"
					size		="'.$arrReality['intInputSize'].'"
					maxlength	="'.$arrReality['intInputMaxLength'].'"
					name		="'.strtolower($arrReality['strInputName']).'"
					type		="'.$arrReality['strInputType'].'"
					onchange	="
							objEvent.arrReality[\''.$arrReality['strInputName'].'\']	=encodeURIComponent(this.value);
							objEvent._UpdateURLDyn();
							"
					onFocusin	="
							//objSearch.strActiveInputWidth	=this.parentNode.style.width;
							//this.parentNode.style.width	=\'80%\';
							
							"
					onFocusout	="
							//this.parentNode.style.width	=objSearch.strActiveInputWidth;
							"
					value		="'.сПреобразовать($arrReality['strInputValue'], 'вСтроку').'"
					placeholder	="'.$arrReality['strDisplayName'].'"
					class		="brick left LTR_RTL L2"
					style		="
							width		:73%;
							border		:0;
							outline		:0;
							text-align	:center;
							"

					/>
				<resetButton
					class="brick right sensor TC1 L2 border-right"
					style="
						width			:10%;
						text-align		:center;
						right			:0;
						"
					onclick="
						objSearch.objValueInput'.$arrReality['strInputName'].'.value	=\'\';
						objEvent.arrReality.'.$arrReality['strInputName'].'=\'\';
						this.previousElementSibling.focus();
						objEvent._UpdateURLDyn();
						";
					>
					<ifRU	title="Сбросить"
						>
						x
					</ifRU>
					<ifEN
						title="Reset"
						>
						x
					</ifEN>
				</resetButton>

			</input'.$arrReality['strInputName'].'>
			';
		//KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_arrReality)
		{
		$objFormInput=new FormInput($_arrReality);
		return $objFormInput->strHTML;
		}
	}
 //                                                                                                              . Гагарин
// © A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, hfic.samin@vk.com 2021                                . ' 
//р=Ресурс	сп=СтрокаПакет(Пакет для вебсервера)                                                            . 
//Вдохновлённый коммуникацией с Алексеем Семёновым, по-настольгировав по былым временам ИТМО,                  .
//постеснялся оставлять недоинтегрированную структуру и витая мыслями где-то там,                                      . '
//доделал интеграл, получив 1 абстрактный класс EDRO, и интерфейс EDRO-ЕДРО, переписываю уже целый день,              ; '. 
//очень боюсь критики от спеца.. Надеюсь успею к утру :). Хорошего дня.                                                .   ,
//                                                                                                                        '
//          .                         .             .                           .                      .
// .            .         Е  .                        .                           .                               .
//                        Д
//      .               EDRO              .              .                            .                                     .
//                        О:ПОЛИМЕР
//			    EDRO.SOT							    .  	
//											||/.				
//										       ./.					
//										      . 							
ЕДРО::XTerm();
class ЕДРО
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
				// 'дбг_сВходящиеНастройки' => '',
				// 'мВходящиеНастройки'	=> array(),
				'мСервер'		=>
							array(
							'strProto'		=> strProto,
							'strAddr'		=> strAddr,
							'intPort'		=> intPort,
							'intReadBlockSize'	=> intReadBlockSize,
							'дТаймаут'		=> дТаймаут,
							),
			);
	private $D	= array(  //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
				 // 'дбг_сНастройкиЭлемента'=> '',
				// 'мНастройкиЭлемента'	=> array(),
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
				'СЗапрос'		=> '',
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'bIzSocket'		=> FALSE,
				'bizReadedBlock'	=> FALSE,
				'intWritedBytes'	=> 0,
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
				'EЗаписьВыход'		=> '',
				'оЕДРО'			=> '',
				'оСостояние'		=> '',
				'оОшибка'		=> '',
				'оСервер'		=> '',
			);
	public static function XTerm()
		{
		while(TRUE)
			{
			$оЕДРО = new ЕДРО();
			}
		}
	public function __construct()
		{
		$this->R['сСостояние']		= __CLASS__.'/'.__FUNCTION__;
		//$this->O['оСостояние'] 	= new ОповещениеСостояние(__CLASS__, __FUNCTION__);
		//$this->O['оОшибка'] 		= new ОповещениеОшибка();
		
		$this->O['оСервер']		= new СерверЧтенияЛокальный($this->E['мСервер']);

		while($рПередача = $this->O['оСервер']->ifWaitForListenerAccess())
			{
			$this->O['ЕЧтениеВход']		= new ЕЧтениеВход($рПередача, $this->E['мСервер']['intReadBlockSize']);

			if($this->O['ЕЧтениеВход']->R['фЗапрос']===TRUE)
				{
				//$ЕЧтениеВход		= $this->O['ЕЧтениеВход']->R['сЗапрос'];

				$this->O['оЕДРО']	= new EDRO($this->O['ЕЧтениеВход']->R['сЗапрос']);

			//	$this->O['EЗаписьВыход']		= new EЗаписьВыход($this->R['рПередача'], );
				}
				//print_r($this);
				exit;
			}
		
		}
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
class ПрочитатьЕ
	{
	}
class ПрочитатьD
	{
	}
class ПрочитатьR
	{
	}
class ПрочитатьO
	{
	}

class ЕДРО
	{
	public $Е	= FALSE;
	public $Д	= 'Прочитать';
	public $Р	= 'json';
	public $О	= 'php';
	public function __construct($сД, $сРасположение)
		{
		//switch($сД)
		//	{
			///case'Настройки':
			//	$this->_ПрочитатьD($сРасположение);
			//break;
			//case'Объект':
			//	$this->_ПрочитатьO($сРасположение);
			//break;
		//	}
		}
	private function _ПрочитатьD($сРасположение)
		{
		//$this->Р	= FileRead::arrJSON($сРасположение.'/run.D');
		}
	private function _ПрочитатьO($сРасположение)
		{
		//if(is_file($сРасположение.'/0.php'))
		//	{
		//$this->О	= FileRead::objJSON($сРасположение.'/run.php');
		//	}
		//echo $сРасположение;
		}
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
class ЕЧтениеВход
	{
	private $E	= array();
	private $D	= array(
			'сСостояние'	=> '',
			'сОшибка'	=> '',
				);
	public 	$R	= array();
	private $O	= array(
			'оСекундомер'	=> array(),
			'оОшибка'	=> array(),
				);
	public function __construct($рПередача, $intReadBlockSize)
		{
		$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		//					$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		///$this->O['оОшибка'] 			= new ОповещениеОшибка();
		if($рПередача)
			{
			if(empty($сЗапрос = fread($рПередача, $intReadBlockSize)))
				{
				$this->R['сЗапрос']		= '';
				$this->R['фЗапрос']		= FALSE;
				$this->R['сОшибка']		= 'fread($рПередача '.$intReadBlockSize.') empty.';
				//				$this->O['оОшибка']->_PushError($this);
				}
			else
				{
				$this->R['сЗапрос']		= $сЗапрос;
				$this->R['фЗапрос']		= TRUE;
				//				$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
				}
			}
		else
			{
			$this->R['сЗапрос']		= '';
			$this->R['фЗапрос']		= FALSE;
			$this->R['сОшибка']		= 'рПередача: FALSE'.$рПередача;
			//				$this->O['оОшибка']->_PushError($this);
			}
		}
	}

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru Hfic.Samin@vk.com 2021
class EЗаписьВыход
	{
	private $E	= array();
	private $D	= array(
			'сСостояние'	=> '',
			'сОшибка'	=> '',
				);
	private $R	= array();
	private $O	= array(
			'оСекундомер'	=> array(),
			'оОшибка'	=> array(),
				);
	public function __construct($рПередача, $strListenerBlock)
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
							$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
		if($рПередача)
			{
			$intWrited	= fwrite($рПередача, $strListenerBlock, strlen($strListenerBlock));
					fclose($рПередача);
			if(	($intWrited>0)&&
				($intWrited==strlen($strListenerBlock)))
				{
				}
			else
				{
				$this->R['сОшибка']		= 'Write result to listener are not equal to quantity of data attempted to write to';
								$this->O['оОшибка']->_PushError($this);
				}
			}
		else
			{
			$this->R['сОшибка']			= 'fwrite answer to listener($рПередача failed';
								$this->O['оОшибка']->_PushError($this);
			}
							$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	}
?>