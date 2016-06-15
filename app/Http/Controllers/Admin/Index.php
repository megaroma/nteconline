<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class Index extends BaseController {
	public function __construct() {
        $this->middleware('admin_auth');
    }

    public function getIndex() {

    	$content_data = array();
        $data['title'] = "Admin Page"; 
        $data['content'] =  view('admin.dashboard',$content_data);

        return view('admin.main',$data);
    }

}
