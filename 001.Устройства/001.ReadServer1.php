<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
set_time_limit(0);
class ReadServer1
	{
	private	$E	= array(
			'мСекундомер'			=> array(),
			);
	private	$D	= array(
			'strAddr'			=> '127.0.0.1',
			'intPort'			=> 75,
			'дТаймаут'			=> -1
			'strErrorNo'			=> ,
			'strError'			=> '',
			);
	private $R	= array(
			'рПриёмник'			=> '',
			'рПередача'			=> '',
			'сОшибка'			=> '',
			);
	public 	$O	= array(
			'оОшибка'			=> ,
			);
	function _construct()
		{
		$this->О['оОшибка'] 			= new ОповещениеОшибка();
		$this->_memoryPrepare();

		}
	private function _memoryPrepare()
		{
		
		if($this->R['рПриёмник'])
			{
			}
		else
			{
			$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
			$this->R['рПриёмник']			= stream_socket_server('tcp://'.$this->D['strAddr'].':'.$this->D['intPort'], $this->D['strErrorNo'], $this->D['strError']);
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
			$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
			}
		}
	private function ifManyReconnects()
		{
		}
	public function ifGgetRead()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
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
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		return $this->R['рПередача'];
		}
	}
?>