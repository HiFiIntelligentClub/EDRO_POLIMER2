<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function мУрлРазобратьПоток($_сВход) 	//Разобрать стрим. Сергею Корякину и его коллеге в Ролексе Вадим Раскумандрину
	{				//и Люсьене Гусевой из Лапси привет.:)
			//Алексу Соловьёву тоже привет и всем девчёнкам. Если я ещё раз у вас появлюсь,
			//скорее всего потому, что решил жениться на одной из вас, а может и на самой великой Люсьене, 
			//но мне кажется, она уже занята.  :)
			//Лучшие коляски, прошедшие краштест и дополнительный краштест в СПБ - это Lapsi.ru
			//Игорю Борисовичу тоже привет. Чекмарёв конкурентам не сдастся. Это все знают.
			//Согластно философии WhiteHat, если я зашёл на сайт и увидел ошибку, 
			//обязательно должен написать об этом.
			//Стараюсь на сайты вобще не ходить, но надо.
			//Хорошего дня.
	$м['strLinkAfter2Dot']	= сНачОтСимвола($_сВход, '/', 2);
	$м['strAddress']	= сНачОтДоСимвола($_сВход, '/', ':', 2);
	$м['intPort']		= сНачОтДоСимвола($м['strLinkAfter2Dot'], ';', '/', 1);
	if(strlen($м['intPort'])>6)
	    {
	    $м['intPort']	=FALSE;
	    }
	
	$м['strGet']		= сНачОтСимвола($_сВход, '/', 1);
	return $м;
	}
function фCreateListen_lnSock($_сВход)
	{
	echo $_сВход."\n";
	$ф			= FALSE;
	$мУрлПоток		= мУрлРазобратьПоток($_сВход);
	$intUDP			= 1;
	$strAddress		=$мУрлПоток['strAddress'];
	$intPort		=$мУрлПоток['intPort'];
	$strGet			=$мУрлПоток['strGet'];
	$intSockListen		= 3;
	$nu0			= 0;
    
	$lnSOCK	=socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	//echo 'http://'.$strAddress.':'.$intPort.'/'.$strGet."\n";
	if($intPort===FALSE)
	    {
	    if(fopen('http://'.$strAddress, "r")===FALSE)
		{
		//echo "fopen FALSE"."\n";
		$ф			= FALSE;
		//return FALSE;
		}
	    else
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    }
	else
	    {
	    $bIzSocket=socket_connect($lnSOCK, $strAddress, $intPort);
	    if($lnSOCK)
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    else
		{
		$ф			= FALSE;
		//echo "fopen FALSE"."\n";
		//return FALSE;
		}
	    if($bIzSocket)
		{
		$ф			= TRUE;
		//echo "fopen TRUE"."\n";
		//return TRUE;
		}
	    else
		{
		$ф			= FALSE;
		//echo "fopen FALSE"."\n";
		//return FALSE;
		}
	    }
	if($ф)
	    {
	    echo 'Result TRUE'."\n";
	    }
	else
	    {
	    echo 'Result FALSE'."\n";
	    }
	return $ф;
	}
?>