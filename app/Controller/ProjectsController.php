<?php
App::uses('AuthComponent', 'Controller/Component');
class ProjectsController extends AppController {

	public $name = 'Projects';

    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');


     public function index() {
        $this->set('projects', $this->Project->find('all'));
    }

    public function view($id = null) {
        $this->Project->id = $id;
        $this->set('project', $this->Project->read());
    }

    public function add() {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash('Your Project has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Project.');
            }
    }

    public function getSearchResults(){
    	 //$this->autoRender = false;
         $this->layout = 'ajax';
         //$this->RequestHandler->respondAs('json');
         $this->render('view');
        if ($this->request->is('get')) {
            $searchTerm = $this->request->query['searchTerm'];
            $mateConditions = array( "OR" => array (
                            array("Mate.last_name LIKE" => "%".$searchTerm."%"),
                            array("Mate.first_name LIKE" => "%".$searchTerm."%"))
                          );
            $topicConditions = array("Project.topic LIKE" => "%".$searchTerm."%");
            $mateResults = $this->Project->Mate->find('list', array('conditions' => $mateConditions));

            $projectResults = $this->Project->find('list', array('conditions' => $topicConditions));

            foreach ($mateResults as $result) {
                $matchedMates = $this->Project->Mate->find('first', array('conditions' => array('Mate.id' => $result)));
                $projectId = $matchedMates['Mate']['project_id'];
             //   echo json_encode($matchedMates);
                if ($projectId){
                   $matchedProjects = $this->Project->find('first', array('conditions' => array('Project.id' => $projectId)));
                   //echo json_encode($matchedProjects);
                   $this->set('projects', $matchedProjects);
                }
            }
/* 
            foreach ($projectResults as $result) {
                $projectId = $matchedProjects['Project']['id'];
                 echo json_encode($matchedProjects);
                if ($projectId){
                    //$this->redirect(array('action' => 'view', 'id' => $projectId));
                }
            }
            debug($test);
            echo $test;
            RequestHandlerComponent::setContent('json'); // */
            
        }
    }

}