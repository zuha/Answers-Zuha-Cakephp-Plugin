<?php
App::uses('AnswersAppController', 'Answers.Controller');

class _AnswersController extends AnswersAppController {
    
/**
 * Name
 * 
 * @var string
 */
	public $name = 'Answers';
    
/**
 * Uses
 * 
 * @var string
 */
	public $uses = 'Answers.Answer';
	
	
	public function add() {
		
	}
    

}

if (!isset($refuseInit)) {
	class AnswersController extends _AnswersController {}
}