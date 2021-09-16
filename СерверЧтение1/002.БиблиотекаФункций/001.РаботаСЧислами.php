<?php
//© A.A.CheckMaRev assminog@gmail.com, tubmulur@yandex.ru, Hfic.Samin@vk.com 2021
function нольЧИлиС($_сИмя, $_сДанные)
	{
	switch(strParType($_сИмя))
	    {
	    case 'int':
		if($_сДанные=='')
		    {
		    $сВыход		=0;
		    }
		else
		    {
		    $сВыход		=$_сДанные;
		    }
	    break;
	    case 'str':
		if($_сДанные=='')
		    {
		    $сВыход		="''";
		    }
		else
		    {
		    $сВыход		="'".str_replace("'","\'",$_сДанные)."'";
		    }
	    break;
	    }
	return $сВыход;
	}
function intRoundUp($_float)
	{
	$float	=$_float;
	   unset($_float);
	$intRoundedUp=FALSE;
	$intDotPos		=strpos($float,'.');
	if($intDotPos!==FALSE)
	    {
	    $float		=substr($float, 0, $intDotPos);
	    $float++;
	    $intRoundedUp	=$float;
	    }
	else
	    {
	    $intRoundedUp	=$float;
	    //$intPages
	    }
	return $intRoundedUp;
	}
?>