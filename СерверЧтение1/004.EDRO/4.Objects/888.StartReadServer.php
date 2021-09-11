<?php
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
				'оСервер'		=>
							array(
							'strProto'		=> strProto,
							'strAddr'		=> strAddr,
							'intPort'		=> intPort,
							'intReadBlockSize'	=> intReadBlockSize,
							'дТаймаут'		=> дТаймаут,
							),
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
		$this->_VoidAuthorAndSystemName();

		$this->О['оОшибка'] 			= new ОповещениеОшибка();
		$this->О['оСостояние'] 			= new ОповещениеСостояние();
		$this->О['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->О['оЕДРО'] 			= new EDRO();

		$this->O['оСервер']			= new ReadServer1($this->O['оСервер']);
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
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _VoidAuthorAndSystemName()
		{
		echo '-------------------------------------------------------------------------------'."\n";
		echo '© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, hfic.samin@vk.com 2021'."\n";
		echo 'ЕДРО:ПОЛИМЕР II (Только чтение)' ."\n";
		echo '-------------------------------------------------------------------------------'."\n";
		echo "\n";
		echo "\n";
		}
	private function _ЧтениеЗапроса()
		{
							$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		$strReadedBlock				= fread($this->R['рПередача'], $this->О['оСервер']['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->R['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->R['сОшибка']			= 'fread($_рПередача '.$this->О['оСервер']['intReadBlockSize'].') empty.';
								$this->О['оОшибка']->_PushError($this);
			}
		else
			{
			$this->R['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
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
										$this->О['оОшибка']->_PushError($this);
					}
				}
			}
		else
			{
			$this->R['мЗаголовки']			= array();
			}
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ФормированиеОтвета()
		{
		$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		//$this->О['мЗаголовки']		= MyJSON::str($this->R['мЗаголовки']);
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ЗаписьОтвета()
		{
		$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
							fwrite($this->R['рПередача'], $this->E['strListenerBlock'], strlen($this->E['strListenerBlock']));
		
							fclose($this->R['рПередача']);
		
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _СбросEventЖурнала()
		{
		//print_r($this);
		//$this->E = array();
		}
	public function _СтартЖурнала()
		{
		$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		//$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => '');$intStartTime = сВремя();
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		//$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => (сВремя() - $intStartTime));

		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _Буфферизация()
		{
		$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		
		//$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		//$this->O['strJPGLogo']		= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		//$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}

	}
?>