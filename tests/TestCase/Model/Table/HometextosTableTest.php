<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HometextosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HometextosTable Test Case
 */
class HometextosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HometextosTable
     */
    protected $Hometextos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Hometextos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Hometextos') ? [] : ['className' => HometextosTable::class];
        $this->Hometextos = $this->getTableLocator()->get('Hometextos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Hometextos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HometextosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
