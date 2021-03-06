<?php
namespace Common\Model;
use Think\Model\RelationModel;
class CaseModel extends RelationModel{
	protected $_link=array(
		'_user'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'User',
			'foreign_key'=>'uid',
			'as_fields' => 'truename:truename',
		),
		'_zizhileixing'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Type',
			'foreign_key'=>'zizhileixing',
			'as_fields' => 'title:zizhileixing',
		),
		'_banlizhouqi'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Type',
			'foreign_key'=>'banlizhouqi',
			'as_fields' => 'title:banlizhouqi',
		)
	);
}

?>