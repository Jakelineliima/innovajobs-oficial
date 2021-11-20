<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GênerosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GênerosTable Test Case
 */
class GênerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GênerosTable
     */
    protected $Gêneros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Gêneros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gêneros') ? [] : ['className' => GênerosTable::class];
        $this->Gêneros = $this->getTableLocator()->get('Gêneros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Gêneros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GênerosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
