<?php
defined('InShopNC') or exit('Access Invalid!');
/**
 * 团购状态 
 */
$lang['groupbuy_state_all'] = 'All group purchase';
$lang['groupbuy_state_verify'] = 'Not audited';
$lang['groupbuy_state_cancel'] = 'Has been canceled';
$lang['groupbuy_state_progress'] = 'Already passed';
$lang['groupbuy_state_fail'] = 'Audit failure';
$lang['groupbuy_state_close'] = 'Be through with';

/**
 * 团购字段
 **/
$lang['group_template'] = 'Group purchase activity';
$lang['group_template_tip'] = 'Choose to participate in the activities and time to buy';
$lang['group_name'] = 'Group name';
$lang['group_name_tip'] = 'Buy Title length can be entered into the maximum length of 30 characters';
$lang['group_goods_sel'] = 'Select goods';
$lang['group_help'] = 'Group purchase instructions';
$lang['start_time'] = 'Start time';
$lang['end_time'] = 'Finish time';
$lang['goods_price'] = 'Commodity price';
$lang['goods_storage'] = 'Commodity stock';
$lang['store_price'] = 'Mall price';
$lang['groupbuy_price'] = 'Group purchase price';
$lang['groupbuy_price_tip'] = 'Group purchase price for the goods to participate in the activities of the promotional price <br/> must be 0.01~1000000 between the number (unit: yuan)';
$lang['limit_type'] = 'Restricted type';
$lang['virtual_quantity'] = 'Virtual quantity';
$lang['min_quantity'] = 'Number of clusters';
$lang['sale_quantity'] = 'Purchase quantity';
$lang['max_num'] = 'Total commodity';
$lang['group_intro'] = 'Introduction of the group';
$lang['group_pic'] = 'Buy pictures';
$lang['group_edit'] = 'Edit content';

$lang['groupbuy_class'] = 'Group buying category';
$lang['groupbuy_class_tip'] = 'Please select the category of group purchase goods';
$lang['groupbuy_area'] = 'Region of the genus';
$lang['groupbuy_goods'] = 'Group purchase goods';
$lang['groupbuy_goods_explain'] = 'Click on the top of the input box from the release of goods to participate in the purchase of goods to participate';
$lang['min_quantity_explain'] = 'The lowest value of the success of the group, the default is 1"';
$lang['virtual_quantity_explain'] = 'Virtual purchase quantity, only for the front display, does not affect the transaction records';
$lang['sale_quantity_explain'] = 'ID each buyer can buy the maximum number, not limited to the number of please fill in "0"';
$lang['max_num_explain'] = 'The total number of buy goods should be equal to or less than the quantity of the goods inventory <br/> please confirm in advance to participate in the activities of the commodity inventory quantity enough';
$lang['group_pic_explain'] = 'For group purchase activities page pictures, please use the width of 440 pixels, height 293 pixels, the size of the picture in <br/>, 1M support JPG, JPEG, GIF, png format.';
$lang['group_pic_explain2'] = 'For Group buy page side edge recommendation, the first page of the picture, please use the width of 210 pixels, a height of 180 pixels, the size of the picture in <br/>, 1M support JPG, JPEG, GIF, png format.';
$lang['groupbuy_message_not_start'] = 'Group buying activity has not yet begun';
$lang['groupbuy_message_close'] = 'Group buying activity is over';
$lang['groupbuy_message_start'] = 'Quantity is limited, please place your order as soon as possible';
$lang['groupbuy_message_success'] = 'Buy success can continue to buy';

/**
 * 错误提示
 **/
$lang['groupbuy_unavailable'] = 'Buy function is not open';
$lang['no_groupbuy_template_in_progress'] = 'There is no ongoing group purchase activities';
$lang['no_groupbuy_info'] = 'No group purchase information';
$lang['no_groupbuy_template_soon'] = 'There is no upcoming Group purchase activities';
$lang['no_groupbuy_template_history'] = 'No historical group purchase activities';
$lang['no_groupbuy'] = 'There is no buy information';
$lang['param_error'] = 'parameter error';
$lang['group_name_error'] = 'Buy name can not be empty';
$lang['group_goods_error'] = 'Please choose to buy goods';
$lang['group_help_error'] = 'Group purchase note can not be empty';
$lang['start_time_error'] = 'Start time cannot be empty';
$lang['end_time_error'] = 'End time cannot be empty';
$lang['groupbuy_price_error'] = 'Please enter the correct purchase price';
$lang['group_pic_error'] = 'Group buy pictures can not be empty, and must be jpg/gif/png format';
$lang['min_quantity_error'] = 'The number of groups can not be empty, and must be more than 0 of the integer';
$lang['virtual_quantity_error'] = 'The virtual number cannot be empty and must be an integer.';
$lang['sale_quantity_error'] = 'The number can not be empty, it must be an integer';
$lang['max_num_error'] = 'The total number of goods can not be empty, and must be less than the current stock';
$lang['groupbuy_none'] = 'Platform currently does not carry out the activities of the group';
$lang['group_goods_is_exist'] = 'This product has been in the Group buy activities, please choose other products';
$lang['goods_info'] = 'commodity information';
$lang['buyer_list'] = 'Purchase records';
$lang['store_info'] = 'Store information';
$lang['groupbuy_not_state'] = 'Group buying activity has not yet begun';
$lang['groupbuy_closed'] = 'Group buying activity is over';
$lang['goods_not_enough'] = 'Commodity inventory shortage';
$lang['groupbuy_not_enough'] = 'Group purchase balance';
$lang['groupbuy_sale_quantity'] = 'You can only buy at most';
$lang['can_not_buy'] = 'You can\'t buy your own products.';

$lang['groupbuy_add_success'] = 'Buy event release success, please wait for the audit';
$lang['groupbuy_add_fail'] = 'Buy event release failed';
$lang['groupbuy_edit_success'] = 'Buy activities to edit successfully';
$lang['groupbuy_edit_fail'] = 'Buy event editing failed';
$lang['groupbuy_quota_add_success'] = 'Buy event package to buy success';

/**
 * 文字
 **/
$lang['groupbuy_title'] = 'Commodity group purchase';
$lang['groupbuy_soon'] = 'About to begin';
$lang['groupbuy_history'] = 'To group purchase';
$lang['text_year'] = 'year';
$lang['text_month'] = 'month';
$lang['text_day'] = 'day';
$lang['text_tian'] = 'day';
$lang['text_hour'] = 'hour';
$lang['text_minute'] = 'part';
$lang['text_second'] = 'second';
$lang['text_to'] = 'to';
$lang['text_di'] = 'only';
$lang['text_qi'] = 'term';
$lang['text_groupbuy'] = 'Mall group purchase';
$lang['text_groupbuy_list'] = 'Group purchase list';
$lang['text_groupbuy_detail'] = 'Group purchase details';
$lang['text_goods_price'] = 'Original price';
$lang['text_zhe'] = 'fracture';
$lang['text_discount'] = 'discount';
$lang['text_save'] = 'save';
$lang['groupbuy_buy'] = 'I want to group';
$lang['groupbuy_close'] = 'be through with';
$lang['text_end_time'] = 'Distance to the end of this period';
$lang['text_start_time'] = 'From the beginning of the current period';
$lang['text_no_limit'] = 'Unlimited';
$lang['text_class'] = 'Classification';
$lang['text_price'] = 'Price';
$lang['text_unit_price'] = 'Unit Price';
$lang['text_default'] = 'Default';
$lang['text_sale'] = 'Sales volume';
$lang['text_rebate'] = 'discount';
$lang['text_order'] = 'sort';
$lang['text_country'] = 'Whole country';
$lang['text_people'] = 'people';
$lang['text_buy'] = 'Already buy';
$lang['text_jiangyu'] = 'In';
$lang['text_start'] = 'Just in time';
$lang['see_store'] = 'Go shopping';
$lang['see_goods'] = 'View merchandise';
$lang['to_see'] = 'Go and see';
$lang['history_hot'] = 'Previous sales ranking';
$lang['current_hot'] = 'Current popular group purchase';
$lang['text_buyer'] = 'buyers';
$lang['text_buy_count'] = 'Purchase quantity';
$lang['text_buy_now'] = 'Buy immediately';
$lang['text_buy_time'] = 'Single time';
$lang['text_piece'] = 'paper';
$lang['text_goods_buy'] = 'This commodity has been bought';
$lang['text_goods_store'] = 'Where goods store';
$lang['text_goods_commend'] = 'Store recommended goods';
$lang['text_read_agree1'] = 'I have read';
$lang['text_read_agree2'] = 'Also agreed';
$lang['text_agreement'] = 'Group purchase service agreement';
$lang['agree_must'] = 'You must agree to this agreement.';
$lang['store_goods_album_insert_users_photo'] = 'Insert photo album';
$lang['text_remain'] = 'Surplus';

/**
 * index
 */
$lang['groupbuy_index_no_right']			= 'Your store level does not have this permission';
$lang['groupbuy_index_in_audit']			= 'Your store level is under review.';
$lang['groupbuy_index_add_success']			= 'Add Group buy activity success';
$lang['groupbuy_index_add_fail']			= 'Add buy activity failed';
$lang['groupbuy_index_not_exists']			= 'Group purchase activity not found';
$lang['groupbuy_index_modify_success']		= 'Modify group purchase activity success';
$lang['groupbuy_index_modify_fail']			= 'Modify group purchase activity failed';
$lang['groupbuy_index_default_spec']		= 'Default specification';
$lang['groupbuy_index_all_group']			= 'All group purchase';
$lang['groupbuy_index_unpublish']			= 'Not released';
$lang['groupbuy_index_canceled']			= 'Has been canceled';
$lang['groupbuy_index_going']				= 'underway';
$lang['groupbuy_index_finished']			= 'off the stocks';
$lang['groupbuy_index_ended']				= 'be through with';
$lang['groupbuy_index_num']					= '(number of people)';
$lang['groupbuy_index_amount']				= '(Number)';
$lang['groupbuy_index_desc']				= 'Explain';
$lang['groupbuy_index_order_num']			= 'Order number';
$lang['groupbuy_index_input_name']			= 'Please fill in the name of the group';
$lang['groupbuy_index_desc']				= 'Group purchase instructions';
$lang['groupbuy_index_end_time']			= 'finish time';
$lang['groupbuy_index_search_first']		= 'Please first search buy goods';
$lang['groupbuy_index_input_right_num']		= 'Please fill in the number of the group';
$lang['groupbuy_index_input_right_amount']	= 'Please fill in the correct number of clusters';
$lang['groupbuy_index_def_quantity_error']  = 'Please fill in the order number';
$lang['groupbuy_index_goods_sum_null']		= 'The total number of goods can not be empty';
$lang['groupbuy_index_goods_sum_one']		= 'The total number of goods can not be less than 1';
$lang['groupbuy_index_input_right_price']	= 'Please fill in the purchase price';
$lang['groupbuy_index_max_per_user_error']  = 'Please fill in the quantity per person';
$lang['groupbuy_index_input_price']			= 'Please fill in the purchase price';
$lang['groupbuy_index_base_info']			= 'Buy basic information';
$lang['groupbuy_index_activity_name']		= 'Activity name';
$lang['groupbuy_index_publish_now']			= 'Immediate release';
$lang['groupbuy_index_yes']					= 'are';
$lang['groupbuy_index_no']					= 'no';
$lang['groupbuy_index_publish_tip']			= 'If the "immediate release", in addition to the "group purchase" information will not be changed';
$lang['groupbuy_index_start_time']			= 'start time';
$lang['groupbuy_index_end_time']			= 'finish time';
$lang['groupbuy_index_goods_info']			= 'Group purchase merchandise information';
$lang['groupbuy_index_choose_goods']		= 'Selection of goods';
$lang['groupbuy_index_order_num_now']		= 'Number of orders';
$lang['groupbuy_index_order_num_published']	= 'Number of orders displayed after publication';
$lang['groupbuy_index_condition']			= 'restrictive condition';
$lang['groupbuy_index_by_num']				= 'To purchase the success of the number of groups';
$lang['groupbuy_index_by_amount']			= 'Product purchase quantity';
$lang['groupbuy_index_group_num']			= 'Number of clusters';
$lang['groupbuy_index_group_espect_num']	= 'Expected to complete the purchase order number';
$lang['groupbuy_index_group_amount']		= 'Group number';
$lang['groupbuy_index_group_espect_amount']	= 'To complete the expected number of group purchase order';
$lang['groupbuy_index_amount_limit']		= 'Purchase per person';
$lang['groupbuy_index_amount_limit_tip']	= 'The number of each tour up to order, 0 unlimited';
$lang['groupbuy_index_goods_sum']			= 'Total commodity';
$lang['groupbuy_index_amount_max_limit']	= 'The number of all the tour up to order, the default number of merchandise inventory';
$lang['groupbuy_index_intro']				= 'Introduction of the group';
$lang['groupbuy_index_spec_price']			= 'Specification price';
$lang['groupbuy_index_spec']				= 'Specifications';
$lang['groupbuy_index_stock']				= 'Stock';
$lang['groupbuy_index_store_price']			= 'Shop price';
$lang['groupbuy_index_group_price']			= 'Group purchase price';
$lang['groupbuy_index_search']				= 'query';
$lang['groupbuy_index_submit']				= 'submit';
$lang['groupbuy_index_new_group']			= 'Add buy';
$lang['groupbuy_index_activity_state']		= 'active state';
$lang['groupbuy_index_start_time']			= 'starting time';
$lang['groupbuy_index_group_num']			= 'Already buy';
$lang['groupbuy_index_to']					= 'to';
$lang['groupbuy_index_year']				= 'year';
$lang['groupbuy_index_month']				= 'month';
$lang['groupbuy_index_day']					= 'day';
$lang['groupbuy_index_publish_tip']			= 'After the release, in addition to modification instructions can no longer be edited, you are sure to publish it';
$lang['groupbuy_index_publish']				= 'Release';
$lang['groupbuy_index_del_tip']				= 'If the group has been completed, then delete the buy will lead to a single user can not order, you determine to do so';
$lang['groupbuy_index_order']				= 'Order';
$lang['groupbuy_index_order_state']			= 'Order situation';
$lang['groupbuy_index_finish_tip']			= 'The operation will be set to buy the success of the state, you are sure to end the reservation';
$lang['groupbuy_index_finish']				= 'complete';
$lang['groupbuy_index_end']				    = 'End reservation';
$lang['groupbuy_index_no_record']			= 'Did not find the goods in line with the conditions';
$lang['groupbuy_index_loading_list']		= 'Loading goods list';
$lang['groupbuy_index_no_goods']			= 'Did not find the relevant goods';
$lang['groupbuy_index_choose_goods']		= 'Select goods';
$lang['groupbuy_index_goods_name']			= 'name of commodity';
$lang['groupbuy_index_store_class']			= 'Store classification';
$lang['groupbuy_index_please_choose']		= 'All classification';
$lang['groupbuy_index_search_back']			= 'Please search from above';
$lang['groupbuy_index_publish_success']		= 'Release success';
$lang['groupbuy_index_change_to_finish']		= 'Changed state to complete';
$lang['groupbuy_index_group_canceled']			= 'Buy merchandise has been canceled';
$lang['groupbuy_index_modify_intro_success']	= 'Success in modifying the merchandise';
$lang['groupbuy_index_modify_order_num_sucess']	= 'Modify the number of goods ordered successfully';
$lang['groupbuy_index_cancel_reason']			= 'Cancel reason';
$lang['groupbuy_index_username']				= 'user name';
$lang['groupbuy_index_linkman']					= 'contacts';
$lang['groupbuy_index_phone']					= 'contact number';
$lang['groupbuy_index_jian']					= 'paper';
$lang['groupbuy_index_no_record_now']			= 'In order to record';
$lang['groupbuy_index_del_success']		= 'Delete Group buy activities successfully';
$lang['groupbuy_index_del_fail']		= 'Delete group purchase activity failed';
$lang['groupbuy_index_datefail']		= 'Date can not be less than the same day, \n default buy time is 7 days!';
$lang['groupbuy_index_startdatefail']		= 'Buy start time is not earlier than the day, \n default start time for the day!';
