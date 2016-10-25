<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_model extends CI_Model {
	public $config = array(
		'check_product' => array(
                                    array(
                                        'field'   => 'brand_name',
                                        'label'   => 'Бренд',
                                        'rules'   => 'required|xss_clean|prep_for_form'
                                    ),
                                    array(
                                        'field'   => 'title',
                                        'label'   => 'Название',
                                        'rules'   => 'required|xss_clean|prep_for_form|min_length[3]|max_length[20]|trim'
                                    ),
                                    array(
                                        'field'   => 'description',
                                        'label'   => 'Описание',
                                        'rules'   => 'required|xss_clean|prep_for_form|min_length[6]|max_length[5000]|trim'
                                    ),
                                    array(
                                        'field'   => 'manufacturer',
                                        'label'   => 'Страна-производитель',
                                        'rules'   => 'required|xss_clean|prep_for_form'
                                    ),
                                    array(
                                        'field'   => 'price',
                                        'label'   => 'Цена',
                                        'rules'   => 'required|xss_clean|prep_for_form|integer'
                                    ),
									array(
					                     'field'   => 'category',
					                     'label'   => 'Категория',
					                     'rules'   => 'required|xss_clean|prep_for_form'
					                )
                                    )


	);

}
