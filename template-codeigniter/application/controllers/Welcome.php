<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome
 */
class Welcome extends MY_Controller
{
    /**
     * Middleware controller.
     *
     * @return array
     */
    public function middleware()
    {
        /**
         * Return the list of middlewares you want to be applied,
         * Here is list of some valid options
         *
         * loggged_in                    // As used below, simplest, will be applied to all
         * someother|except:index,list   // This will be only applied to posts()
         * yet_another_one|only:index    // This will be only applied to index()
         */
        return [];
    }

    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade']);
        $this->load->helper(['url']);
    }

    /**
     * The index page.
     *
     * @see    GET|HEAD: http://www.domain.tld
     * @return blade view.
     */
	public function index()
	{
		return $this->blade->render('welcome');
	}
}
