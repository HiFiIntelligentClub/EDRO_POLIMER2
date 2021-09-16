<?php
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
		{
		$this->E				= $мНастройки;
		$this->O['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->O['оОшибка'] 			= new ОповещениеОшибка();
		$this->O['оСостояние'] 			= new ОповещениеСостояние();
							$this->_memoryPrepare();
		}
	private function _memoryPrepare()
		{
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
									$this->O['оОшибка']->_PushError($this);
									sleep(111);
									$this->_memoryPrepare();
				}
			else
				{
									$this->O['оСостояние']->_PushCondition($this);
				$this->R['сОшибка']			= '';
				}
			$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
			}
		}
	private function ifManyReconnects()
		{
		}
	public function ifGgetRead()
		{
		$this->O['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		if($this->R['рПриёмник'])
			{
			$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->E['дТаймаут']);
			if($this->R['рПередача']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПередача';
									$this->O['оОшибка']->_PushError($this);
									$this->_memoryPrepare();
				}
			else
				{
									$this->O['оСостояние']->_PushCondition($this);
				$this->R['сОшибка']			= '';
				}
			}
		else
			{
			$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
								$this->O['оОшибка']->_PushError($this);
								$this->_memoryPrepare();
			}
		$this->O['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		return $this->R['рПередача'];
		}
	}
?>