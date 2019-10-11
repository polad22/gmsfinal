<?php
	function setActive($path, $active = 'active')
	{
		return Request::segment(1) == $path ? $active : '';
	}