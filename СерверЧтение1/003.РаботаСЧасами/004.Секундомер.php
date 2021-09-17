<?php
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
?>