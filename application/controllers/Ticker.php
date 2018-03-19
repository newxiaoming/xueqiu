<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// require APPPATH . '/libraries/BaseController.php';
// require APPPATH . '/core/Layout_Controller.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Ticker extends MY_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
         parent::__construct();
    }
    
    /**
     * Ticker
     */
    public function get_ticker_data()
    {
        $ticker_url = 'https://api.coinmarketcap.com/v1/ticker/?limit=10';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ticker_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $out = curl_exec($ch);
        curl_close($ch);

        return $out;
    }

    public function list()
    {
        $ticker_json_data = $this->get_ticker_data();
        
        $ticker_data['ticker'] = json_decode($ticker_json_data, true);

        // $this->load->view('ticker/list');
        $this->render('ticker/list',$ticker_data,array('title'=>'数字货币行情'));

    }

}

?>