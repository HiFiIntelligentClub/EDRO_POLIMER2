<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
set_time_limit(0);
class ReadServer1
	{
	private	$E	= array(
			);
	private	$D	= array(
			///'strAddr'			=> '127.0.0.1', //Setup in server start 
			///'intPort'			=> 75,
			///'дТаймаут'			=> -1
			);
	private $R	= array(
			'рПриёмник'			=> '',
			'рПередача'			=> '',
			'сОшибка'			=> '',
			'strErrorNo'			=> '',
			'strError'			=> '',
			);
	public 	$O	= array(
			'оОшибка'			=> ,
			'oСекундомер'			=> ,
			);
	function _construct($мНастройки)
		{
		$this->О['оОшибка'] 			= new ОповещениеОшибка();
		$this->О['оСекундомер'] 		= new Секундомер(__CLASS__, __FUNCTION__);

		$this->D				= $мНастройки;
		$this->_memoryPrepare();

		}
	private function _memoryPrepare()
		{
		
		if($this->R['рПриёмник'])
			{
			}
		else
			{
			$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
			$this->R['рПриёмник']			= stream_socket_server('tcp://'.$this->D['strAddr'].':'.$this->D['intPort'], $this->R['strErrorNo'], $this->R['strError']);
			if($this->R['рПриёмник']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
									$this->О['оОшибка']->_PushError($this);
									$this->_memoryPrepare();
				}
			else
				{
				$this->R['сОшибка']			= '';
				}
			$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
			}
		}
	private function ifManyReconnects()
		{
		}
	public function ifGgetRead()
		{
		$this->О['оСекундомер']->_Старт(__CLASS__, __FUNCTION__);
		if($this->R['рПриёмник'])
			{
			$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->D['дТаймаут']);
			if($this->R['рПередача']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПередача';
									$this->О['оОшибка']->_PushError($this);
									$this->_memoryPrepare();
				}
			else
				{
				$this->R['сОшибка']			= '';
				}
			}
		else
			{
			$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
								$this->О['оОшибка']->_PushError($this);
								$this->_memoryPrepare();
			}
		$this->О['оСекундомер']->_Стоп(__CLASS__, __FUNCTION__);
		return $this->R['рПередача'];
		}
	}
?>