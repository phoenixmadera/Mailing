<?php

class ListsController extends MailingAppController {
    public $name = 'Lists';
    public $uses = array('Mailing.MailingList', 'Mailing.MailingUser', 'Mailing.MailingMessage', 'Mailing.MailingTemplate');


    public function index() {
     $lists = $this->MailingList->find('all');
     $this->set('lists', $lists);
     $users = $this->MailingUser->find('all');
     $this->set('users', $users);
     //$messages = $this->MailingMessage->find('all');
     //$this->set('messages', $messages);
     //$templates = $this->MailingTemplate->find('all');
     //$this->set('templates', $templates);
    }
}
?>