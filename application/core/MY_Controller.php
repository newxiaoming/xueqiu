<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
    protected $layout = 'layout/main';
    private $js_files = [
        '/statics/assets/js/jquery-3.3.1.min.js',
        '/assets/uikit3/js/uikit.min.js',
        '/assets/uikit3/js/uikit-icons.min.js',
        '/statics/assets/js/jQuery.textSlider.js'
    ];
    private $css_files = [
        '/assets/uikit3/css/uikit.min.css',
        '/statics/assets/css/custom.css',
    ];
 
    public function __construct()
    {
      parent::__construct();
    }

    public function add_js($filepath)
    {
      array_push($this->js_files, "<script type='text/javascript' src='". $filepath ."'></script>");
    }

    public function add_css($filepath)
    {
        array_push($this->css_files, "<link href='".$filepath."' rel='stylesheet' type='text/css'>"); 
    }

  
    //file 表示是否使用渲染子视图文件，viewData表示的是子视图中渲染数据，$layout表示父视图中使用的全局数据
    protected function render($file = NULL, &$viewData = [], $layoutData = [])
    {
        if($this->js_files){  
            $layoutData['js_files'] = $this->js_files;  
        }  
        if($this->css_files){  
            $layoutData['css_files'] = $this->css_files;  
         }

        if( !is_null($file) ) {
            $data['content'] = $this->load->view($file, $viewData, TRUE);
            $data['layout'] = $layoutData;
            $this->load->view($this->layout, $data);
        } else {
            $this->load->view($this->layout, $viewData);
        }
        $viewData = [];
    }
}