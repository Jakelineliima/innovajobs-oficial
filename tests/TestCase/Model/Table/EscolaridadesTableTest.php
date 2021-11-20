<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscolaridadesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscolaridadesTable Test Case
 */
class EscolaridadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EscolaridadesTable
     */
    protected $Escolaridades;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Escolaridades',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Escolaridades') ? [] : ['className' => EscolaridadesTable::class];
        $this->Escolaridades = $this->getTableLocator()->get('Escolaridades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Escolaridades);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EscolaridadesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
