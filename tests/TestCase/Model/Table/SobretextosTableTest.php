<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SobretextosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SobretextosTable Test Case
 */
class SobretextosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SobretextosTable
     */
    protected $Sobretextos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sobretextos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sobretextos') ? [] : ['className' => SobretextosTable::class];
        $this->Sobretextos = $this->getTableLocator()->get('Sobretextos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sobretextos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SobretextosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
