<?php
/**
 * @package     Joomla
 * @subpackage  System.adminaccess
 
 * @copyright   Copyright (C) 2017 janich.dk, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;


JFormHelper::loadFieldClass('text');


class JFormFieldAdminaccessGenerate extends JFormFieldText
{
	protected $type = 'adminaccessgenerate';

	
	protected function getLabel()
	{
		return '';
	}
	
	
	protected function getInput()
	{
		$html = '<div>';
		$html .= '<p><a target="_blank" href="'. JURI::root(false) .'?adminaccess='. md5('generate') .'" onclick="javascript:return confirm(\''. JText::_($this->element['confirm']) .'\')" class="btn btn-small btn-primary">'. JText::_($this->element['label']) .'</a></p>';
		$html .= '<small>'. JText::_($this->element['description']) .'</small>';
		$html .= '</div>';

		return $html;
	}
}