<?php
//写命名空间 模块名\\congroller
namespace index\controller;

use csl\framework\Template;//引入名空间
class BaseController extends Template
{
	public function __construct()
	{
		$this->tplDir = $this->checkDir('app/index/view');
		$this->cacheDir = $this->checkDir('cache/index');
		// parent::__construct('cache/index','app/index/view');
		$this->_init();
	}

	//子类的初始化方法
	public function _init()
	{

	}

	public function display($viewFile=null,$isExtract=true)
	{
		if (empty($viewFile)) {
			$viewFile = $_GET['c'].'/'.$_GET['a'].'.html';
		}
		parent::display($viewFile,$isExtract);
	}
}
