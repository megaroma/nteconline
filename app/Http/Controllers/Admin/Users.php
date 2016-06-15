<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use DD\Crud\CrudController;
use DD\Crud\Classes\Crud;
use App\DB\Role;

class Users extends CrudController  {
	public $format = array();
    public $filters = array();
	public function __construct() {
        $this->middleware('admin_auth');
        $this->format['App_User'] = array(
           'id' => array(
                'title' => 'ID',
                'value' => '{id}' 
                ),      
			'name' => array(
				'title' => 'Full Name',
				'value' => '{name}',
				'editable' => array(
					'type' => 'input',
					'validate' => 'required'
					)				
				),      
            'email' => array(
                'title' => 'Email',
                'value' => '{email}',
                'editable' => array(
                    'type' => 'input',
                    'validate' => 'required'
                    )               
                ),
            'student_id' => array(
                'title' => 'Student Id',
                'value' => '{student_id}',
                'editable' => array(
                    'type' => 'input'
                    )               
                ),             
            'validated' => array(
                'title' => 'Validated',
                'value' => function ($row) {
                            return ($row['validated'] == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '';
                        },
                'editable' => array(
                    'type' => 'checkbox'
                    )
                ),           
            'roles' => array(
                'title' => 'Roles',
                'value' => '{roles}',
                'editable' => array(
                    'type' => 'checkboxes',
                    'resource' => function () {
                        return Role::all();
                    },
                    'default' => array()
                  )
                )                           
        	);

        $this->filters['App_User'] = array(
		'name' => array(
			'title' => 'Name',
			'selectors' => '=,!=,like,not_like,start_like,end_like',
			'type' => 'text'

			)

        	);

    }

    public function anyIndex(Request $request) {
        $crud_data = array(
            'crud_title' => 'Users',
            'crud_model' => 'App_User',
            'crud_sort' => '',
            'crud_order' => '',
            'crud_page' => '1',
    
                'crud_auto_filter' => true,
                'crud_filter_button' => true,
                'crud_show_filters' => true,

            'crud_insert_mode' => true,
            'crud_delete_mode' => true,

            'filters' => $this->filters['App_User']
            );


        $fn = function ($item)  {
            //$item->loginpasswd =  \Hash::make($item->loginpasswdplain);
        };

        Crud::set_callback ('App_User','before_save',$fn);

        if($res = $this->initCrud($request)) return $res;

        $data['title'] = "Users"; 
        $data['content'] =  view('Crud::view',$crud_data);

        return view('admin.main',$data);
    }

}
