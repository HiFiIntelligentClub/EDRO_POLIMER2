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

define('сРасположениеО2о'						, '/home/ЕДРО:ПОЛИМЕР/о2о'					);
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
		echo __CLASS__."\n";
		print_r($о);
		}
	}
function фОшибка($str)
	{
	return FALSE;
	}

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
class ОповещениеСостояние
	{
	private $E	= array(
			
			);
	private $D	= array(
			
			);
	private $R	= array(
			
			);
	public  $O	= array(
			
			);
	private function _VoidAuthorAndSystemName()
		{
		system('clear');
		echo '-------------------------------------------------------------------------------------------------------------------------------------------'."\n";
		echo '----------=ЕДРО:ПОЛИМЕР II (Только чтение) © A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, hfic.samin@vk.com 2021=----------------'."\n";
		echo '-------------------------------------------------------------------------------------------------------------------------------------------'."\n";
		echo "\n";
		echo "\n";
		}
	public function __construct($о=array())
		{
		//print_r($о);
		}
	public function  _PushCondition($о=array())
		{
		$this->_VoidAuthorAndSystemName();
		echo '-E--------------------------------------------------------------------D--------------------------------------------------------------------'."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                 On aiR Only                                         '."\n";
		echo '                   Hello                                             -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                         Ori                                         -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '-R--------------------------------------------------------------------O--------------------------------------------------------------------'."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -          1Mix.co.uk                                                 '."\n";
		echo '                                                                     -          https://www.facebook.com/oriuplift                         '."\n";
		echo '                                                                     -  Near|   https://HiFiIntelligentClub.com/Ori                        '."\n";
		echo '                                                                     -      |   https://HiFiIntelligentClub.com/OriUplift                  '."\n";
		echo '                 1Mix.co.uk                                          -  start   https://HiFiIntelligentClub.ru/Ori                         '."\n";
		echo '                                                                     -      |   https://HiFiIntelligentClub.com/OriUplift                  '."\n";
		echo '                                                                     -      |   https://Ori.HiFiIntelligentClub.com                        '."\n";
		echo '                                                                     -      |   https://OriUplift.HiFiIntelligentClub.com                  '."\n";
		echo '                                                                     -      v   ...HIC.com    after collecting some money                  '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '                                                                     -                                                                     '."\n";
		echo '-------------------------------------------------------------------------------------------------------------------------------------------'."\n";

		//echo __CLASS__."\n";
		if(isset($о->O))
			{
			//print_r($о->O['оСекундомер']);
			echo 'Текущ: '.$о->O['оСекундомер']->sClass.'/'.$о->O['оСекундомер']->sFuncion.': '.$о->O['оСекундомер']->д4Итого."\n";
			if(is_array($о->O['оСекундомер']->мОценка))
				{
				foreach($о->O['оСекундомер']->мОценка as $ч0 => $м)
					{
					if(is_array($м))
						{
						echo 'Превыш: '.$м['сМетод'].': '.$м['д4Итого']."\n";
						}
					
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
	echo $_сВход."\n";
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
	    echo 'Result TRUE'."\n";
	    }
	else
	    {
	    echo 'Result FALSE'."\n";
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
		'strStyle'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
		'strGenre'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
		'strHiFiType'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
		'intBitrate'		=>array('int0FallBack'	=>'','int0MaxLength'	=>4,),
		'strCodec'		=>array('int0FallBack'	=>'','int0MaxLength'	=>16,),
		'int0Page'		=>array('int0FallBack'	=>0, 'int0MaxLength'	=>6,),
		'int1OnPage'		=>array('int0FallBack'	=>1, 'int0MaxLength'	=>3, 'int0MaxValue'	=>140,),
		'int1PlayingStationNum'	=>array('int0FallBack'	=>0, 'int0MaxLength'	=>10,),
		'strPlayingStationStyle'=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),
		'strPlayingStationId'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),
		'strListenerDate'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),),
        'arrObjects'		=>array(
		'arrEventData'		=>array('arrEN'		
					=>array('strAlias'	=>false, 'strTitle'	=>'Title',),
		'arrRU'			=>array('strAlias'	=>false, 'strTitle'	=>'Заголовок',),),
		'arrEventTestConditions'=>array('arrEventName'	=>array('int0MaxLength'	=>28,),
		'arrEventPage'		=>array('strFindTextToMarkExist' 	=>'HIC',),),
		'arrEventsOnErrors'	=>array('arrEventName'	=>array('strReport'		=>'Event name is too long.',
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
	if(	!$мPlatform['bIzCheckMaPhone']&&
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
		'bIzCheckMaPhone'	=> FALSE,
		'bIzAndroid'		=> FALSE,
		'bIzAppleMobile'	=> FALSE,
		'bIzDesktop'		=> FALSE,
		'bIzOther'		=> FALSE,
		);
	if(bIzCheckMaPhone($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzCheckMaPhone']	= true;
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
?>
<?php
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

//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
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
function arrRequest2IndexArray($_arrEvent)
	{
	$arrEvent['arrListener']['arrRequest']['strEvent']	= '';
	$arrEvent['arrListener']['arrRequest']['strProto']	= '';
	$arrEvent['arrListener']['arrRequest']['strEventName']	= '';
	$arrEvent['arrListener']['arrRequest']['strEvenParams']	= '';
	$arrEvent['arrListener']['arrRequest']['strEvenExt']	= '';
	$arrEvent['arrListener']['arrPlatform'] 		= '';
	$arrEvent['arrListener']['strHost']			= '';
	$arrEvent['arrListener']['strReferer']			= '';
	$arrEvent['arrListener']['arrAccept']			= '';
	$arrEvent['arrListener']['strAcceptLanguage']		= '';
	$arrEvent['arrListener']['strAcceptEncoding']		= '';
	$arrEvent['arrListener']['strConnection']		= '';
	$arrEvent['arrListener']['strPragma']			= '';
	$arrEvent['arrListener']['strCacheControl']		= '';
	$arrEvent['arrListener']['strUpgradeInsecureRequests']	= '';

	foreach($_arrEvent as $strListenerReality)
		{
		if(($strListenerRealityName=сНачДоСимвола($strListenerReality, ' '))!==FALSE)
			{
			$strListenerRealityName		= str_replace(':' ,'' ,$strListenerRealityName);
			if($strListenerRealityName=="GET"||$strListenerRealityName=="POST")//||$strListenerRealityName=="PUT"
				{
				$arrEvent['arrListener']['arrRequest']['strProto']		= сНачДоСимвола($strListenerReality, ' ');
				$arrEvent['arrListener']['arrRequest']['strProtoType']		= сКонцДоСимвола($strListenerReality, ' ');
				$arrEvent['arrListener']['arrRequest']['strEvent']		= trim(CheckMaSubstr($strListenerReality , strlen($strListenerRealityName),  -strlen($arrEvent['arrListener']['arrRequest']['strProtoType'])));
				$arrEvent['arrListener']['arrRequest']['strEventName']		= сНачДоСимвола($arrEvent['arrListener']['arrRequest']['strEvent'], "?");
				$arrEvent['arrListener']['arrRequest']['strEvenParams']		= сНачОтСимвола($arrEvent['arrListener']['arrRequest']['strEvent'], "?", 0, 1);
				$arrEvent['arrListener']['arrRequest']['arrReality']		= arrEventParams2Array($arrEvent['arrListener']['arrRequest']['strEvenParams']);
				$arrEvent['arrListener']['arrRequest']['strEvenExt']		= сКонцДоСимвола($arrEvent['arrListener']['arrRequest']['strEventName'], '.');
				}
			elseif($strListenerRealityName=='Host')
				{
				$arrEvent['arrListener']['strHost'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
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
				$arrEvent['arrListener']['arrAccept'] 		= $arr;
				}
			elseif($strListenerRealityName=='Connection')
				{
				$arrEvent['arrListener']['strConnection'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='User-Agent')
				{
				$arrEvent['arrListener']['strUserAgent'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				$arrEvent['arrListener']['arrPlatform'] 			= arrUserAgent2Platform($arrEvent['arrListener']['strUserAgent']);
				}
			elseif($strListenerRealityName=='Accept-Language')
				{
				$arrEvent['arrListener']['strAcceptLanguage'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Accept-Encoding')
				{
				$arrEvent['arrListener']['strAcceptEncoding'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Cache-Control')
				{
				$arrEvent['arrListener']['strCacheControl'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Pragma')
				{
				$arrEvent['arrListener']['strPragma'] 				= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Referer')
				{
				$arrEvent['arrListener']['strReferer'] 				= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Upgrade-Insecure-Requests')
				{
				$arrEvent['arrListener']['strUpgradeInsecureRequests'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}

			else
				{
				$arrEvent['arrListener'][$strListenerRealityName]		= сНачОтСимвола($strListenerReality, ":", 0, 1);
				фОтчёт('Unusall position of Event string $arrEvent[arrListener][strEvent]: '.$strListenerRealityName.'/'.сНачОтСимвола($strListenerReality, ":", 0, 1));
				}
			}
		}
	return $arrEvent;
	}
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
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase.'/Events/'.сПреобразовать($strEvent, "вКоманду").'/run.php'))
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

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
class EDRO
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
				'дбг_сВходящиеНастройки' => '',
				'мВходящиеНастройки'	=> array(),

			);
	private $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
				'дбг_сНастройкиЭлемента'=> '',
				'мНастройкиЭлемента'	=> array(),
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
				'strReadedBlock'	=> '',
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'bIzSocket'		=> FALSE,
				'bizReadedBlock'	=> FALSE,
				'intWritedBytes'	=> 0,
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
				'оОшибка'		=> '',
				'оСостояние'		=> '',
				'оСекундомер'		=> '',
				'оКИМ'			=> '',
				'оЖурнал'		=> '',
			);
	public function __construct($strHeaders)
		{
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->O['оСостояние'] 			= new ОповещениеСостояние();
		$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->O['oEvent']			= new Event($strHeaders);
		}
	}

                     /*_____
© Andrey Chekmaryov 2021
© Andrey Chekmaryov 2021
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
|Event|Design|Reality|Objects|         ЕДРО:ПОЛИМЕР
 ////// 2021                   /////  /  
//        /\                  // /      
//      <  **>               /// /     
 //////   jl                ///// /   
./././././././*/
//

class Event
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
				'дбг_сВходящиеНастройки' => '',
				'мВходящиеНастройки'	=> array(),

			);
	private $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
				'дбг_сНастройкиЭлемента'=> '',
				'мНастройкиЭлемента'	=> array(),
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
				'сЗаголовки'		=> '',
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
				'оОшибка'		=> '',
				'оСостояние'		=> '',
				'оСекундомер'		=> '',
			);
	
	public function __construct($_сЗаголовки)
		{
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->O['оСостояние'] 			= new ОповещениеСостояние();
		$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->E['сЗаголовки']			= $this->strSafeUsers($_сЗаголовки);
									unset($_сЗаголовки);
		$this->E['мВходящиеНастройки']		= arrRequest2IndexArray(explode("\n", $this->E['сЗаголовки']));
		print_r($this);
		exit;






		//$arr			= arrEventParams2Array($_сЗаголовки);
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
		//print_r($arr);
		//file_put_contents('/home/1.ЕДРО:ПОЛИМЕР2/журнал.txt', $сЗаголовки."\r\n\r\n", FILE_APPEND);
		//$сЗаголовки		= $this->strSafeUsers($_сЗаголовки);
		//$this->arrEvent		= arrRequest2IndexArray(explode("\n", $сЗаголовки));
		/*
		$this->arrEvent['arrListener']['arrPlatform']['bIzCheckMaPhone']	= true;
		$this->arrEvent['arrListener']['arrPlatform']['bIzAndroid']		= true;
		$this->arrEvent['arrListener']['arrPlatform']['bIzAppleMobile']		= true;
		$this->arrEvent['arrListener']['arrPlatform']['bIzCheckMaPhone']	= true;
		$this->arrEvent['arrListener']['arrPlatform']['bIzDesktop']		= true;
		$this->arrEvent['arrListener']['arrPlatform']['bIzOther']		= true; 
		$this->arrEvent['arrListener']['arrAccept'][1]				= '';
		$this->arrEvent['arrListener']['arrAccept'][2]				= '';
		$this->arrEvent['arrListener']['arrAcceptLanguage']			= '';
		$this->arrEvent['arrListener']['arrAcceptLanguage']			= '';
		$this->arrEvent['arrListener']['arrAcceptEncoding']			= '';
		$this->arrEvent['arrListener']['arrAcceptEncoding']			= '';
		$this->arrEvent['arrListener']['arrConnection']['strHost']		= 'www.hui.ru';
		$this->arrEvent['arrListener']['arrConnection']['strType']		= 'close';
		$this->arrEvent['arrListener']['arrConnection']['strCacheControl']	= 'no';
		$this->arrEvent['arrListener']['strConnection']['strHost']		= '/hui.ru';
		$this->arrEvent['arrListener']['strConnection']['strMethod']	= 'POST';
		$this->arrEvent['arrListener']['strConnection']['strProto']		= 'sFTP/0.9';
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
		//echo '<pre>';
		//print_r($this->arrEvent);
		//echo '</pre>';
		//$мКИМ	= array();
		
		///parent::__construct();
		//фОтчёт()
		//print_r($this);
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
	private function strSafeUsers($_strRequest)
		{
		return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
		}
	private function bIzDynamic()
		{
		$bIzDynamic	=false;
		if(isset($_REQUEST['d']))
			{
			$bIzDynamic	=true;
			}
		return $bIzDynamic;
		}
	public function strRealityInit()
		{
		$str='<script>';
			//$str.='alert(\'x\');';
			$str.='console.log(\'[V]EDRO.Event: strParamsInit()\');';
			$str.=rmlb($this->arrEvent['strObjectReality']);
			$str.='objEvent._Search();';
			$str.='console.log(\'[.]EDRO.Event: strParamsInit()\');';
		$str.='</script>';
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

// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
set_time_limit(0);
class ReadServer1
	{
	private	$E	= array(//ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
			);
	private	$D	= array(//НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
			///'strAddr'			=> '127.0.0.1', //Setup in server start 
			///'intPort'			=> 75,
			///'дТаймаут'			=> -1
			);
	private $R	= array(//Состояние операционной среды Реальность ([R]eality)
			'рПриёмник'			=> '',
			'рПередача'			=> '',
			'сСостояние'			=> '',
			'сОшибка'			=> '',
			'ч0Ошибка'			=> '',
			);
	public 	$O	= array(//Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
			'оОшибка'			=> '',
			'оСостояние'			=> '',
			'oСекундомер'			=> '',
		//	'оEDRO'				=> '',
			);
	function __construct($мНастройки)
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->E				= $мНастройки;
		
		$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->O['оСостояние'] 			= new ОповещениеСостояние();
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
							$this->_memoryPrepare();
		}
	private function _memoryPrepare()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
							$this->O['оСостояние']->_PushCondition($this);
		if($this->R['рПриёмник'])
			{
			}
		else
			{
			$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
			$this->R['рПриёмник']			= stream_socket_server($this->E['strProto'].'://'.$this->E['strAddr'].':'.$this->E['intPort'], $this->R['ч0Ошибка'], $this->R['сОшибка']);
			if($this->R['ч0Ошибка'] || $this->R['сОшибка'])
				{
				$this->O['оОшибка']->_PushError($this);
				}
			if($this->R['рПриёмник']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
									$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
									$this->O['оОшибка']->_PushError($this);
									//sleep(111);
									$this->_memoryPrepare();
				}
			else
				{
				$this->R['сОшибка']			= '';
									$this->O['оСостояние']->_PushCondition($this);
				}
			$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
			$this->O['оСостояние']->_PushCondition($this);
			}
		}
	private function ifManyReconnects()
		{
		}
	public function ifGgetRead()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
							$this->O['оСостояние']->_PushCondition($this);
		if($this->R['рПриёмник'])
			{
			$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->E['дТаймаут']);
			if($this->R['рПередача']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПередача';
									$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
									$this->O['оОшибка']->_PushError($this);
									
									$this->_memoryPrepare();
				}
			else
				{
				$this->R['сОшибка']			= '';
									$this->O['оСостояние']->_PushCondition($this);
				}
			}
		else
			{
			$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
								$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
								$this->O['оОшибка']->_PushError($this);
								$this->_memoryPrepare();
			}
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		$this->O['оСостояние']->_PushCondition($this);
		return $this->R['рПередача'];
		}
	}

// © A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, hfic.samin@vk.com 2021
//р=Ресурс	сп=СтрокаПакет(Пакет для вебсервера)
//Вдохновлённый коммуникацией с Алексеем Семёновым, по-настольгировав по былым временам ИТМО,
//постеснялся оставлять недоинтегрированную структуру и витая мыслями где-то там, 
//доделал интеграл, получив 1 абстрактный класс EDRO, и интерфейс EDRO-ЕДРО, переписываю уже целый день,
//очень боюсь критики от спеца.. Надеюсь успею к утру :). Хорошего дня.
//
//          .                         .             .                           .                      .
// .            .         Е  .                        .                           .                               .
//                        Д
//      .               EDRO              .              .                            .                                     .
//                        О:ПОЛИМЕР
//			    EDRO.SOT													
//																	
//																	
//																	
StartReadServer::XTerm();
class StartReadServer
	{
	private $E	= array(  //ВходящиеНастройки ([E]vent are starting, then we'w got the setup of the event)
				'дбг_сВходящиеНастройки' => '',
				'мВходящиеНастройки'	=> array(),
				'мСервер'		=>
							array(
							'strProto'		=> strProto,
							'strAddr'		=> strAddr,
							'intPort'		=> intPort,
							'intReadBlockSize'	=> intReadBlockSize,
							'дТаймаут'		=> дТаймаут,
							),

			);
	private $D	= array( //НастройкиЭлементаНадКоторымПроизводитсяРабота([D]esign - the screen in front of listener's eyes)
				'дбг_сНастройкиЭлемента'=> '',
				'мНастройкиЭлемента'	=> array(),
			);
	private $R	= array( //Состояние операционной среды Реальность ([R]eality)
				'рПередача'		=> '',
				'strReadedBlock'	=> '',
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'bIzSocket'		=> FALSE,
				'bizReadedBlock'	=> FALSE,
				'intWritedBytes'	=> 0,
			);
	public $O	= array( //Использующиеся объекты для работы и их настройки по-умолчанию. ([O]bjects)
				'оЕДРО'			=> '',
				'оКИМ'			=> '',
				'оОшибка'		=> '',
				'оСостояние'		=> '',
				'оСекундомер'		=> '',
				'оЖурнал'		=> '',

			);
	public static function XTerm()
		{
		while(TRUE)
			{
			$оReadServer = new StartReadServer();
			}
			//$оRead = Read::VoId();
		}
	public function __construct()
		{
		//$this->_СтартЖурнала();
		//$this->_Буфферизация();
		//$this->_VoidAuthorAndSystemName();
		$this->O['оСостояние'] 			= new ОповещениеСостояние();
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		

		$this->O['оСервер']			= new ReadServer1($this->E['мСервер']);
		while($this->R['рПередача']=$this->O['оСервер']->ifGgetRead())
			{
			$this->_ЧтениеЗапроса();
			$this->O['оЕДРО'] 			= new EDRO($this->R['strReadedBlock']);
			//$this->_ОбработкаЗапроса();
			
			//$this->_ФормированиеОтвета(); 
			//print_r($this);
			//exit;
			
			$this->_ЗаписьОтвета();
			$this->_СбросEventЖурнала();
			//exit();
			}
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}

	private function _ЧтениеЗапроса()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		$strReadedBlock				= fread($this->R['рПередача'], $this->E['мСервер']['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->R['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->R['сОшибка']			= 'fread($_рПередача '.$this->E['мСервер']['intReadBlockSize'].') empty.';
								$this->O['оОшибка']->_PushError($this);
			}
		else
			{
			$this->R['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ОбработкаЗапроса()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		/*
		if($this->R['bizReadedBlock']===TRUE)
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
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ФормированиеОтвета()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		//print_r($this);
		//$this->O['мЗаголовки']		= MyJSON::str($this->R['мЗаголовки']);
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ЗаписьОтвета()
		{
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
							fwrite($this->R['рПередача'], $this->E['strListenerBlock'], strlen($this->E['strListenerBlock']));
		
							fclose($this->R['рПередача']);
		
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _СбросEventЖурнала()
		{$this->R['сСостояние']			= __CLASS__.'/'.__FUNCTION__;
		//print_r($this);
		//$this->E = array();
		}
	public function _СтартЖурнала()
		{
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		//$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => '');$intStartTime = сВремя();
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		//$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => (сВремя() - $intStartTime));

		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _Буфферизация()
		{
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		//$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		//$this->O['strJPGLogo']		= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		//$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}

	}
?>