<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categorias Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasProdutos form content">
            <?= $this->Form->create($categoriasProduto) ?>
            <fieldset>
                <legend><?= __('Adicionar uma categoria de produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_categoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
