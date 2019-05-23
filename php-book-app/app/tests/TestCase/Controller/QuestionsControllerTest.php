<?php
/**
 * Created by PhpStorm.
 * User: wtanabe-ryota
 * Date: 2019/05/21
 * Time: 23:51
 */

namespace App\Test\TestCase\Controller;

use App\Model\Entity\Answer;
use App\Model\Entity\Question;
use App\Model\Entity\User;
use App\Model\Table\QuestionsTable;
use App\Model\Table\UsersTable;
use Cake\ORM\ResultSet;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuestionsController Test Case
 *
 * @property QuestionsTable $Questions
 * @property UsersTable $Users
 */
class QuestionsControllerTest extends IntegrationTestCase
{
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Answers',
        'app.Questions',
        'app.Users'
    ];

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();
        $this->Questions = TableRegistry::getTableLocator()->get('Questions');
        $this->Users = TableRegistry::getTableLocator()->get('Users');

        parent::tearDown();
    }

    /**
     * @inheritdoc
     */
    public function tearDown()
    {
        unset($this->Questions);
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * 質問一覧画面のテスト
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not Implement yet.');
    }

    /**
     * 質問詳細画面のテスト
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not Implement yet.');
    }

    /**
     * 質問投稿画面のテスト
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not Implement yet.');
    }
}