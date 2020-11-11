<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriasProdutos Controller
 *
 * @property \App\Model\Table\CategoriasProdutosTable $CategoriasProdutos
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categoriasProdutos = $this->paginate($this->CategoriasProdutos);

        $this->set(compact('categoriasProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('categoriasProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasProduto = $this->CategoriasProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('A categoria produto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A categorias produto não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('categoriasProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('A categoria produto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A categoria produto não foi salvo.Por favor, tente novamente.'));
        }
        $this->set(compact('categoriasProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasProduto = $this->CategoriasProdutos->get($id);
        if ($this->CategoriasProdutos->delete($categoriasProduto)) {
            $this->Flash->success(__('A categoria produto foi deletado.'));
        } else {
            $this->Flash->error(__('A categoria produto não foi deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
