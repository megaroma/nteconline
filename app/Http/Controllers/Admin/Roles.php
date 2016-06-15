<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use DD\Crud\CrudController;
use DD\Crud\Classes\Crud;
use App\DB\Role;

class Roles extends CrudController  {
	public $format = array();
    public $filters = array();
	public function __construct() {
        $this->middleware('admin_auth');
        $this->format['App_DB_Role'] = array(
           'id' => array(
                'title' => 'ID',
                'value' => '{id}' 
                ),   
			'name' => array(
				'title' => 'Name',
				'value' => '{name}',
				'editable' => array(
					'type' => 'input',
					'validate' => 'required'
					)				
				)                           	
        	);

		$this->filters['App_DB_Role'] = array(
		'name' => array(
			'title' => 'Name',
			'selectors' => '=,!=,like,not_like,start_like,end_like',
			'type' => 'text'

			)

        	);

    }


    public function anyIndex(Request $request) {
        $crud_data = array(
            'crud_title' => 'Roles',
            'crud_model' => 'App_DB_Role',
            'crud_sort' => '',
            'crud_order' => '',
            'crud_page' => '1',
    
                'crud_auto_filter' => true,
                'crud_filter_button' => true,
                'crud_show_filters' => true,

            'crud_insert_mode' => true,
            'crud_delete_mode' => true,

            'filters' => $this->filters['App_DB_Role']
            );


        if($res = $this->initCrud($request)) return $res;

        $data['title'] = "Roles"; 
        $data['content'] =  view('Crud::view',$crud_data);

        return view('admin.main',$data);
    }

}