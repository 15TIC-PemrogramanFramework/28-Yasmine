<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
if ( ! function_exists('tab_helper')){
	function ban()
	{
		return
		'<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_1" data-toggle="tab">FDR</a></li>
		<li><a href="#tab_2" data-toggle="tab">CORSA</a></li>
		<li><a href="#tab_3" data-toggle="tab">MAXXIS</a></li>
		</ul>';
	}

	function helm()
	{
		return
		'<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_4" data-toggle="tab">GM</a></li>
		<li><a href="#tab_5" data-toggle="tab">KYT</a></li>
		<li><a href="#tab_6" data-toggle="tab">DYR</a></li>
		<li><a href="#tab_7" data-toggle="tab">MDS</a></li>
		<li><a href="#tab_8" data-toggle="tab">GTZONE</a></li>
		<li><a href="#tab_9" data-toggle="tab">NPN</a></li>
		<li><a href="#tab_10" data-toggle="tab">TAKIRA</a></li>
		</ul>';
	}
}
?>

