<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\View\JsonView;

/**
 * RaihanKategoripengeluaran Controller
 *
 * @property \App\Model\Table\RaihanKategoripengeluaranTable $RaihanKategoripengeluaran
 */
class RaihanKategoripengeluaranController extends AppController
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
        $Model = $this->getTableLocator()->get("RaihanKategoripengeluaran");

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

    /**
     * View method
     *
     * @param string|null $id Raihan Kategoripengeluaran id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->get($id, contain: []);
    //     $this->set(compact('raihanKategoripengeluaran'));
    // }

    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
    //  */
    // public function add()
    // {
    //     $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->patchEntity($raihanKategoripengeluaran, $this->request->getData());
    //         if ($this->RaihanKategoripengeluaran->save($raihanKategoripengeluaran)) {
    //             $this->Flash->success(__('The raihan kategoripengeluaran has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The raihan kategoripengeluaran could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('raihanKategoripengeluaran'));
    // }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Raihan Kategoripengeluaran id.
    //  * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->get($id, contain: []);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->patchEntity($raihanKategoripengeluaran, $this->request->getData());
    //         if ($this->RaihanKategoripengeluaran->save($raihanKategoripengeluaran)) {
    //             $this->Flash->success(__('The raihan kategoripengeluaran has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The raihan kategoripengeluaran could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('raihanKategoripengeluaran'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Raihan Kategoripengeluaran id.
    //  * @return \Cake\Http\Response|null Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $raihanKategoripengeluaran = $this->RaihanKategoripengeluaran->get($id);
    //     if ($this->RaihanKategoripengeluaran->delete($raihanKategoripengeluaran)) {
    //         $this->Flash->success(__('The raihan kategoripengeluaran has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The raihan kategoripengeluaran could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
