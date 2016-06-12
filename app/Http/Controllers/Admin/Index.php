<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class Index extends BaseController {
	public function __construct() {
        $this->middleware('admin_auth');
    }

    public function getIndex() {
    	return "boo";
    }

}
