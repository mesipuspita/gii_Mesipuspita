<?php 
namespace app\models;
use yii;
use yii\base\Model;

/**
* 
*/
class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return[
		[['nama','email'], ' reguired'],
		['email','email'],
		];
	}
}
