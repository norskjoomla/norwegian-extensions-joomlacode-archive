<?php
/**
 * $Id$
 * author Joomla! i Norge
 * copyright (C) 2005 - 2008 Joomla! i Norge. All rights reserved.
 * license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

class JDatenb_NO extends JDate
{
	/**
	 * Gets the date in a specific format
	 *
	 * Returns a string formatted according to the given format. Month and weekday names and
	 * other language dependent strings respect the current locale
	 *
	 * @param string $format  The date format specification string (see {@link PHP_MANUAL#strftime})
	 * @return a date in a specific format
	 */
	function toFormat($format = '%Y-%m-%d %H:%M:%S')
	{
		$date = ($this->_date !== false) ? $this->strftime($format, $this->_date + $this->_offset) : null;
		return $date;
	}
	
	function strftime($format, $time)
	{
		$format = str_replace('%a', $this->_dayToString(date('w', $time), true), $format);
		$format = str_replace('%A', $this->_dayToString(date('w', $time)), $format);
		$format = str_replace('%b', $this->_monthToString(date('n', $time), true), $format);
		$format = str_replace('%B', $this->_monthToString(date('n', $time)), $format);
	
		$date = strftime($format, $time);
	
		return $date;
	}
	
	function _monthToString($month, $abbr = false)
	{
		switch ($month)
		{
			case 1: return $abbr ? JText::_('JANUARY_SHORT')   : JText::_('JANUARY');
			case 2: return $abbr ? JText::_('FEBRUARY_SHORT')  : JText::_('FEBRUARY');
			case 3: return $abbr ? JText::_('MARCH_SHORT')     : JText::_('MARCH');
			case 4: return $abbr ? JText::_('APRIL_SHORT')     : JText::_('APRIL');
			case 5: return $abbr ? JText::_('MAY_SHORT')       : JText::_('MAY');
			case 6: return $abbr ? JText::_('JUNE_SHORT')      : JText::_('JUNE');
			case 7: return $abbr ? JText::_('JULY_SHORT')      : JText::_('JULY');
			case 8: return $abbr ? JText::_('AUGUST_SHORT')    : JText::_('AUGUST');
			case 9: return $abbr ? JText::_('SEPTEMBER_SHORT') : JText::_('SEPTEMBER');
			case 10: return $abbr ? JText::_('OCTOBER_SHORT')   : JText::_('OCTOBER');
			case 11: return $abbr ? JText::_('NOVEMBER_SHORT')  : JText::_('NOVEMBER');
			case 12: return $abbr ? JText::_('DECEMBER_SHORT')  : JText::_('DECEMBER');
		}
	}
	
	function _dayToString($day, $abbr = false)
	{
		switch ($day)
		{
			case 0: return $abbr ? JText::_('SUN') : JText::_('SUNDAY');
			case 1: return $abbr ? JText::_('MON') : JText::_('MONDAY');
			case 2: return $abbr ? JText::_('TUE') : JText::_('TUESDAY');
			case 3: return $abbr ? JText::_('WED') : JText::_('WEDNESDAY');
			case 4: return $abbr ? JText::_('THU') : JText::_('THURSDAY');
			case 5: return $abbr ? JText::_('FRI') : JText::_('FRIDAY');
			case 6: return $abbr ? JText::_('SAT') : JText::_('SATURDAY');
		}
	}
}
