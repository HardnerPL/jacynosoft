<?php

class Language_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_page_texts($page) {
		if ($this->agent->accept_lang('pl')) {
			$lang = 'pl';
		} else {
			$lang = 'en';
		}
		$texts = $this->db->query("SELECT * FROM texts WHERE page = '$page' AND language = '$lang'")->result();
		$textList = new stdClass();
		foreach($texts as $text) {
			$textList->{$text->name} = $text->text;
		}
		return $textList;
	}
}
