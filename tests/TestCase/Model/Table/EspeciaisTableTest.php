<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspeciaisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspeciaisTable Test Case
 */
class EspeciaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EspeciaisTable
     */
    protected $Especiais;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Especiais',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Especiais') ? [] : ['className' => EspeciaisTable::class];
        $this->Especiais = $this->getTableLocator()->get('Especiais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Especiais);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EspeciaisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
