<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GêneroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GêneroTable Test Case
 */
class GêneroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GêneroTable
     */
    protected $Gênero;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Gênero',
        'app.Vagas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gênero') ? [] : ['className' => GêneroTable::class];
        $this->Gênero = $this->getTableLocator()->get('Gênero', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Gênero);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GêneroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
