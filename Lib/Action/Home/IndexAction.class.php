<?php
/**
 * 
 * IndexAction.class.php (前台首页)
 *
 * @package		YLCMS
 *
 * @author 		Rakiy[Xux851@Gmail.com]
 *
 */
if(!defined("YLCMS")) exit("Access Denied");
class IndexAction extends BaseAction
{
    public function index()
    {
		$this->assign('bcid',0);//顶级栏目 
		$this->assign('ishome','home');
        $this->display();
    }
 
}
?>