<?php
$input="([4*2]";
$length=strlen($input);
$bracket=[];
$bracket_index=0;
function error($message)
{
	exit($message);
}
function close($character)
{
	global $bracket;
	global $bracket_index;
	// print_r($bracket);
	$character_open='';
	if($character === '}')
	{
		$character_open='{';
	}
	else if($character === ']')
	{
		$character_open='[';
	}
	else if($character === ')')
	{
		$character_open='(';
	}
	else
	{
		error("Unknown character!");
		return;
	}
	if(isset($bracket[$bracket_index-1]))
	{
		$get=$bracket[$bracket_index-1];
		if($get === $character_open)
		{
			unset($bracket[$bracket_index-1]);
		}
		else
		{
			error("Wrong Input for close the '%character_open' character!");
		}
	}
}
for($index=0;$index<$length;$index++)
{
	$character=$input[$index];
	/////////////////////////////////////////
	if($character === '{')
	{
		$bracket[$bracket_index]=$character;
		$bracket_index++;
	}
	else if($character === '(')
	{
		$bracket[$bracket_index]=$character;
		$bracket_index++;
	}
	else if($character === '[')
	{
		$bracket[$bracket_index]=$character;
		$bracket_index++;
	}
	/////////////////////////////////////////
	else if($character === '}')
	{
		close($character);
	}
	else if($character === ')')
	{
		close($character);
	}
	else if($character === ']')
	{
		close($character);
	}
	/////////////////////////////////////////
	// print $character."\n";
}
print_r($bracket);
