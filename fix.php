<?php
$input="([4*2]";
$length=strlen($input);
$bracket=[];
$bracket_index=0;
function error($message)
{
	exit($message);
}
function getopen($character)
{
	if($character === '{')
	{
		return '}';
	}
	else if($character === '[')
	{
		return ']';
	}
	else if($character === '(')
	{
		return ')';
	}
	else
	{
		error("Unknown character!");
		return;
	}
}
function getclose($character)
{
	if($character === '}')
	{
		return '{';
	}
	else if($character === ']')
	{
		return '[';
	}
	else if($character === ')')
	{
		return '(';
	}
	else
	{
		error("Unknown character!");
		return;
	}
}
function close($character)
{
	global $bracket;
	global $bracket_index;
	// print_r($bracket);
	$character_open=getclose($character);
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
function fix()
{
	global $bracket;
	global $input;
	$count=count($bracket);
	if($count === 0)
	{
		return true;
	}
	foreach($bracket as $index=>$character)
	{
		$character_close=getopen($character);
		$input.=$character_close;
		unset($bracket[$index]);
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
fix();
// print_r($bracket);
echo($input);
