<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Home (HomeController)
 * @author : xiaodao
 * @version : 1.1
 * @since : 2018.03.20
 */
class Home extends MY_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
         parent::__construct();
    }
    

    public function index()
    {
        $data = [];

        // $this->load->view('ticker/list');
        $this->render('home/index',$data,array('title'=>'首页'));

    }

    public function show()
    {
        $data = [];

        // $this->load->view('ticker/list');
        $this->render('home/content',$data,array('title'=>'首页'));

    }

}

?>