<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function фДубль($_м_мСтанция, $_мСтанция, $_strGenre) // ifDoubles - will compare all genres of station and station name. 
	{//If equal - will be listed as different bitrate of the parent station. FallBack is higher bitrate.
	// Если название и жанры у станций одинаковы, значит станции одинаковы и будут отображаться, 
	//как разные битрейты станции с таким-же названием.
	$ф=FALSE;
	foreach($_м_мСтанция as $мСтанция)
	    {
	    if( 
		($мСтанция['id']	==	$_мСтанция['id'])	&&
		($мСтанция['genre']	==	$_strGenre)		&&
		($мСтанция['name']	==	$_мСтанция['server_name'])
	    )
		{
		$ф=TRUE;
		фОшибка("Найден дубль: ".$_мСтанция['id'].":/".$мСтанция['server_name'].'/'.$_strGenre);
		break;
		}
	    else
		{
		//$ф=FALSE;
		}
	    }
	return $ф;
	}
function сДляСравнения($сВход)
	{
	//радостно слушающих музыку, по всему миру.
		//Что бы не случилось. Хорошая Музыка выручит душу из любых передряг, 
		//может даже вернёт в этот мир......
		//Mr Hfic Samin after "Groove Jet" trip:
		//Jog dial was funny. Small Krz* LCD display was very, very big!!!
		//	noughty blue, right behinde my face, and the JOG DIAL itself, imagination 
		//	flash..where some where in my hand........ooogh! ..... but......
		//	all music were so silly cool, that i was laoghting all day long. Like!:))
		//	Where were no silences or pauses. Every touch works perfect.
		//	Only positive memories. Good emotions for me and my friends.
	
		//Mr Hfic Samin after "No f*cking developers maked their job right, b*t!" 
		//trip:
		//	Music stops. I can't start it again. Than, can't stop.....
		//	Carpets were like in the stomach of a monster......
		//	Bad day! Bad emotions! But.... Carpets and mobile is in a trashcan....
		//	Negative balance.
		//My figure prefere the first one.  Hfic.Samin. 2020
	$сВход	=str_replace($сВход, array( '.', ';', '@', ' '), '');
	return strtolower($сВход);
	}
?>