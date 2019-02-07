<?php
namespace app\forms;

use Craft;
use plugins\dolphiq\form\models\Form;

class contactForm extends Form {

 public $firstname = "";
 public $phone = "";
 public $email = "";
 public $message = "";

 public function rules()
 {
     return [
         [['firstname', 'email', 'message'], 'required'],
         ['email', 'email'],
         ['phone', 'safe']
     ];
 }

 public function attributeLabels()
 {
     return [
         'firstname' => Craft::t('site', 'Firstname'),
         'phone' => Craft::t('site', 'Phone'),
         'email' => Craft::t('site', 'Email'),
         'message' => Craft::t('site', 'Message'),
     ];
 }
}
?>
