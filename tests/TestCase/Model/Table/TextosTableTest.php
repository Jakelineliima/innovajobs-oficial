<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TextosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TextosTable Test Case
 */
class TextosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TextosTable
     */
    protected $Textos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Textos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Textos') ? [] : ['className' => TextosTable::class];
        $this->Textos = $this->getTableLocator()->get('Textos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Textos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TextosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
