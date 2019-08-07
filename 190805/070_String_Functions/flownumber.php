<?php
$sData = "524";


$iLen = strlen($sData);

if($iLen<4){
    $num = 4-$iLen;
    for($i=0;$i<$num;$i++){
        $sData = 0 . $sData;
    }
    echo $sData;
}else{
    echo $sData;
}


// for ($iPos = 0; $iPos < $iLen; $iPos++)
// {
// 	$ch = substr($sData, $iPos, 1);
// 	$result = $ch . str_replace($ch, "", $result);

// }
// echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>