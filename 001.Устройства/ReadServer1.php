<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
set_time_limit(0);
class ReadServer1
	{
	private	$E	= array(
			'strAddr'			=> '127.0.0.1',
			'intPort'			=> 75,
			);
	private	$D	= array(
			'intReadBlockSize'		=> 512,
			'дТаймаут'			=> -1
			);
	private $R	= array(
			'рПриёмник'			=> '',
			'рПередача'			=> '',
			'ч0Шаг'				=> 0,
			'сОшибка'			=> '',
			);
	public 	$O	= array(
			'рПередача'			=> '',
			'мОповещение'			=> array(
							);
			);
	function _construct()
		{
		$this->_memoryPrepare();
		$this->O['рПередача']			= $this->ifGgetRead();
		}
	private function _memoryPrepare()
		{
		
		if($this->R['рПриёмник'])
			{
			$this->R['ч0Шаг']			= 0;
			}
		else
			{
			$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
			$this->R['рПриёмник']			= stream_socket_server('tcp://'.$this->E['strAddr'].':'.$this->E['intPort'], $this->E['strErrorNo'], $this->E['strError']);
			if($this->R['рПриёмник']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПриёмник';
				$this->О['мОшибка'][] 			= new ОповещениеОшибка($this);
				}
			else
				{
				$this->R['сОшибка']			= '';
				}
			//$this->R['ч0Шаг']++;
			$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
			}
		}
	private function ifGgetRead()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		if($this->R['рПриёмник'])
			{
			$this->R['рПередача'] 			= stream_socket_accept($this->D['рПриёмник'], $this->D['дТаймаут']);
			if($this->R['рПередача']===FALSE)
				{
				$this->R['сОшибка']			= 'Невозможно запустить передачу рПередача';
				$this->О['мОшибка'][] 			= new ОповещениеОшибка($this);
				}
			else
				{
				$this->R['сОшибка']			= '';
				}
			}
		else
			{
			$this->_memoryPrepare();
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		return $this->R['рПередача'];
		}
	public function ifManyReconnects()
		{
		}
	}
?>