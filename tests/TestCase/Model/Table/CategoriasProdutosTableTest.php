<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasProdutosTable Test Case
 */
class CategoriasProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasProdutosTable
     */
    protected $CategoriasProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CategoriasProdutos',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CategoriasProdutos') ? [] : ['className' => CategoriasProdutosTable::class];
        $this->CategoriasProdutos = $this->getTableLocator()->get('CategoriasProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CategoriasProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
