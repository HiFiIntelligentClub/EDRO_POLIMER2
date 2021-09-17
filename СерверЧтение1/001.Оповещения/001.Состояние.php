<?php
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
?>