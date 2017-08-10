<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Blog;

class IndexController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}
	public function index()
	{
		echo'这是首页';
	}
	
}