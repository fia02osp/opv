<?php
class MatesController extends AppController {

	/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Mates';

    public $helpers = array('Html', 'Form');

     public function index() {
      $this->set('mates', $this->Mate->find('all'));
    }

    public function view($id = null) {
      $this->Mate->recursive = 0;
    }

    public function add() {
    if ($this->request->is('post')) {
            $this->Mate->create();
            $projectId = $this->params['pass'][0];
            $data = $this->request->data;
            $data['Mate']['project_id'] = $projectId;
            if ($this->Mate->save($data) ) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('controller' => 'projects', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
}
