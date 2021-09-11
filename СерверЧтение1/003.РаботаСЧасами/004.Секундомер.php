<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//$оСекундомер = new Секундомер::о();
//$оСекундомер->_Стоп();
//print_r($оСекундомер);
class Секундомер
	{
	private  $м		= array();
	private  $д4Старт	= 0.00;
	private  $д4Стоп	= 0.00;
	public   $д4Итого 	= 0.00;
	public   $оOценка;											// o20
	private  $sClass	= '';
	private  $sFuncion	= '';

	public function __construct($sClass, $sFuncion)                                            		//	><	//  .  .      //////// /
		{       
		$this->sClass	= $sClass;                                                      		//	Роскосмос . >< .
		$this->sFuncion = $sFuncion;
		//switch($сЕсли, $сОценкаДля= ОблакоРегРу480рВМес)                                          /////   ......    //     ////
		//	{                                                              		 //////////    / .      .  /         /
			                                                               		////////....../ .        . /////   / 
		$this->м[$sClass][$sFuncion]['д4Вкл']	= д4Время();                                        //                       .      .
			        					//	              //           ....
			
		//	case 'Стоп':
		//		$this->_Стоп();
		//	break;
		//	$this->оOценка();								//////
		//	}									//	//
		}											/////////
	public function _Старт($sClass, $sFuncion)							//
		{											// new Скорость
		$this->м[$sClass][$sFuncion]['д4Старт']	= д4Время();
		}
	public function _Стоп($sClass, $sFuncion)
		{
		$this->м[$sClass][$sFuncion]['д4Стоп']	= д4Время();
		$д4Стоп					= $this->м[$sClass][$sFuncion]['д4Стоп'];
		$д4Старт				= $this->м[$sClass][$sFuncion]['д4Старт'];
		$this->д4Итого				= round($д4Стоп - $д4Старт, 4);
							$this->_Оценка();
		///print_r($this);
		}
	private function _Оценка()
		{
		//$this->оOценка				= new Oценка($this->д4Старт);
		//  Значения производительности для хостинга и тарифа, для оценки производительности на платформе, до того, как всё повисло.
		}
	//public static function д4()
	//	{
		//return new Секундомер();
	//	}
	//public static function о()
	//	{
	//	return new Секундомер();
	//	}
	}
?>