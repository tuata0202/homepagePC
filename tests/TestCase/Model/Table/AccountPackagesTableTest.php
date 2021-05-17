<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountPackagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountPackagesTable Test Case
 */
class AccountPackagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountPackagesTable
     */
    public $AccountPackages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.account_packages',
        'app.accounts',
        'app.packages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AccountPackages') ? [] : ['className' => AccountPackagesTable::class];
        $this->AccountPackages = TableRegistry::getTableLocator()->get('AccountPackages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountPackages);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
