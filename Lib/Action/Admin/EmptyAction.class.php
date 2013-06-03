<?php
/**
 * 
 * Empty (空模块)
 *
 * @package		YLCMS
 *
 * @author 		Rakiy[Xux851@Gmail.com]
 *
 */
if(!defined("YLCMS")) exit("Access Denied");
class EmptyAction extends Action
{	
	public function _empty()
	{
		R('Admin/Content/'.ACTION_NAME);
	}
}
?>