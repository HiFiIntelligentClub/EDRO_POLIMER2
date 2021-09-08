<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
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
set_time_limit(0);

//require'/home/ЕДРО:ПОЛИМЕР/0.Настройки/1.Define.php';
//require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/01.СколькоВремя.php';

//require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/02.Секундомер.php';
//require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/10.StringFunctions.php';

StartReadServer::VoId();

class StartReadServer
	{
	private $E	= array(  //EVENT
				'strListenerBlock'	=> '',

				'сСлушатель'		=> '',
				'мЖурнал'		=> array(),
			);
	private $D	= array( //Design - Ready to use
				'с'			=> '',
				'м'			=> array(),
			);
	private $R	= array( //Reality - Flags and 
				'рПередача'		=> '',
				'strReadedBlock'	=> '',
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'bizReadedBlock'	=> FALSE,
				'strError'		=> '',
				'strErrorNo'		=> 0,
				'мЗаголовки'		=> array(),
			);
	public $O	= array(
				'оСервер'		=> '',
				'оЕДРО'			=> array(),
				'оКИМ'			=>

			);

	public function __construct()
		{
		//$this->_СтартЖурнала();
		//$this->_Буфферизация();
		$this->_VoidAuthorAndSystemName();

		$оСекундомер				= new Секундомер(__CLASS__, __FUNCTION__);

		$this->O['оСервер']			= new ReadServer1();
		while($this->R['рПередача']=$this->O['оСервер']->ifGgetRead())
			{
			$this->_ЧтениеЗапроса();
			$this->_ОбработкаЗапроса();
			//$this->_ФормированиеОтвета(); //
			//print_r($this);
			//exit;
			$this->_ЗаписьОтвета();
			$this->_СбросEventЖурнала();
			//exit();
			}
		$this->O['мСекундомер'][]		= $оСекундомер->_Стоп();
		}
	private function _VoidAuthorAndSystemName()
		{
		echo '-----------------------------------------------------------'."\n";
		echo '© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021'."\n";
		echo 'EDRO:POLIMER superserver'."\n";
		echo '-----------------------------------------------------------'."\n";
		echo "\n";
		echo "\n";
		}


	private function _ЧтениеЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$strReadedBlock				= fread($this->R['рПередача'], $this->E['мСервер']['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->R['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->E['мЖурнал'][]			= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->E['мСервер']['intReadBlockSize'].') empty.');
			}
		else
			{
			$this->R['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ОбработкаЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
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
					$this->О['мОшибка'][] 			= new ОповещениеОшибка($this);
					}
				}
			}
		else
			{
			$this->R['мЗаголовки']			= array();
			}

		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ФормированиеОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		//$this->О['мЗаголовки']			= MyJSON::str($this->R['мЗаголовки']);
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ЗаписьОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
							fwrite($this->R['рПередача'], $this->E['strListenerBlock'], strlen($this->E['strListenerBlock']));
		
							fclose($this->R['рПередача']);
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _СбросEventЖурнала()
		{
		//print_r($this);
		//$this->E = array();
		}
	public function _СтартЖурнала()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		//$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => '');$intStartTime = сВремя();
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		//$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => (сВремя() - $intStartTime));

		$this->O['мСекундомер'][]		= $оСекундомер->_Стоп();
		}
	private function _Буфферизация()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$this->O['strJPGLogo']			= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	public static function VoId()
		{
		while(TRUE)
			{
			$оReadServer = new StartReadServer();
			}
			//$оRead = Read::VoId();
		}
	}
?>