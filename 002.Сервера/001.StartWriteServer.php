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

StartWriteServer::VoId();

class StartWriteServer
	{
	private $E	= array(
				'strListenerBlock'	=> '',
				'strReadedBlock'	=> '',
				'сДоступ'		=> '/Listener',
				'мЗаголовки'		=> array(),
			);
	private $D	= array(
				'сДоступ'		=> '/Listener',
				'сЯзык'			=> 'RU',
				'intReadBlockSize'	=> 512,
			);
	private $R	= array(
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'сПлатформа'		=> '',
				
				'рПередача'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'bizReadedBlock'	=> FALSE,
				'strError'		=> '',
				'strErrorNo'		=> 0,
			);
	public $O	= array(
				'oСекундомер'		=> 
				'оОшибка'		=>,
				'оСервер'		=>
							array(
							'strAddr'		=> '127.0.0.1',
							'intPort'		=> 75,
							'intReadBlockSize'	=> 512,
							'дТаймаут'		=> -1,
							),

				'oEDRO'			=>,
				'оКИМ'			=>,
				'оЖурнал'		=>,
			);

	public function __construct()
		{
							$this->_VoidAuthorAndSystemName();
		$this->О['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->О['оОшибка'] 			= new ОповещениеОшибка();
		$this->O['оСервер']			= new ReadServer1($this->O[key($this->O['оСервер'])]);
		
		
		//$this->_СтартЖурнала();
		//$this->_Буфферизация();
		while($this->R['рПередача'] = $this->O['оСервер']->ifGgetRead())
			{
			$this->_ЧтениеЗапроса();      //+
			$this->_ОбработкаЗапроса();   //+
			$this->_ФормированиеОтвета(); //
			//print_r($this);
			//exit;
			$this->_ЗаписьОтвета();       //
			//$this->_СбросEventЖурнала();  //
			//exit();
			}
							$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _VoidAuthorAndSystemName();
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
							$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		$strReadedBlock				= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->E['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->R['сОшибка']			= 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.';
								$this->О['оОшибка']->_PushError($this);
		}
		else
			{
			$this->E['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
							$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	private function _ОбработкаЗапроса()
		{
							$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		if($this->R['bizReadedBlock']===TRUE)
			{
			$this->E['мЗаголовки']			= explode("\n", $this->E['strReadedBlock']);
			foreach($this->E['мЗаголовки'] as $сЗапрос)
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
					$this->R['сОшибка']			= 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.';
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
		
		$this->О['oEDRO']			= new EDRO($this);
		//$this->О['мЗаголовки']			= MyJSON::м($this->R['мЗаголовки']);
		
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
		
		$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$this->O['strJPGLogo']			= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
							$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		}
	public static function VoId()
		{
		while(TRUE)
			{
			$оWriteServer = new StartWriteServer();
			}
			//$оRead = Read::VoId();
		}
	}
?>