<?php

function getMiddle($text)
{
	if (($len = strlen($text)) % 2 === 0) {
		return substr($text, ($len/2)-1, 2);
	}
	return substr($text, ((int)$len/2), 1);
}