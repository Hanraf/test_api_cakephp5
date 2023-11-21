<?php
declare(strict_types=1);

namespace App\Controller\Api;

//use Cake\ORM\Locator\LocatorInterface;
use Cake\Datasource\FactoryLocator;
use App\Controller\AppController;

/**
 * RaihanPengeluaranpribadi Controller
 *
 * @property \App\Model\Table\RaihanPengeluaranpribadiTable $RaihanPengeluaranpribadi
 */
class RaihanPengeluaranpribadiController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void{
        parent::initialize();
        $this->autoRender = false;
    }
    public function index()
    {     
        $parameter = $this->request->getQuery();
        $Model = $this->getTableLocator()->get("RaihanPengeluaranpribadi");

        if(!empty($parameter)) $data = $Model->find()->where($parameter)->toArray();
        else $data = $Model->find()->toArray();

        return $this->response->withType('application/json')
        ->withStringBody(json_encode([
            'status' => true,
            'parameter' => $parameter,
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]));
    }

    // /**
    //  * View method
    //  *
    //  * @param string|null $id Raihan Pengeluaranpribadi id.
    //  * @return \Cake\Http\Response|null|void Renders view
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function view($id = null)
    // {
    //     $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id, contain: []);
    //     $this->set(compact('raihanPengeluaranpribadi'));
    // }

    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
    //  */
    // public function add()
    // {
    //     $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->patchEntity($raihanPengeluaranpribadi, $this->request->getData());
    //         if ($this->RaihanPengeluaranpribadi->save($raihanPengeluaranpribadi)) {
    //             $this->Flash->success(__('The raihan pengeluaranpribadi has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The raihan pengeluaranpribadi could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('raihanPengeluaranpribadi'));
    // }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Raihan Pengeluaranpribadi id.
    //  * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id, contain: []);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->patchEntity($raihanPengeluaranpribadi, $this->request->getData());
    //         if ($this->RaihanPengeluaranpribadi->save($raihanPengeluaranpribadi)) {
    //             $this->Flash->success(__('The raihan pengeluaranpribadi has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The raihan pengeluaranpribadi could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('raihanPengeluaranpribadi'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Raihan Pengeluaranpribadi id.
    //  * @return \Cake\Http\Response|null Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id);
    //     if ($this->RaihanPengeluaranpribadi->delete($raihanPengeluaranpribadi)) {
    //         $this->Flash->success(__('The raihan pengeluaranpribadi has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The raihan pengeluaranpribadi could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
