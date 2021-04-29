<?php
/**
 * Created by PhpStorm.
 * User: wtanabe-ryota
 * Date: 2019/05/21
 * Time: 0:27
 */
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnswersFixture
 *
 */
class UsersFixture extends TestFixture
{
    /**
     * テーブルのフィールド情報
     *
     * @var array
     */
    //@codingStandardsIgnoreStart
    public $fields = [
        'id' => [
            'type' => 'integer',
            'length' => 10,
            'unsigned' => true,
            'null' => false,
            'default' => null,
            'comment' => '',
            'autoIncrement' => true,
            'precision' => null
        ],
        'username' => [
            'type' => 'string',
            'length' => 16,
            'null' => false,
            'default' => '',
            'collate' => 'utf8mb4_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'password' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8mb4_general_ci',
            'comment' => '',
            'precision' => null
        ],
        'nickname' => [
            'type' => 'string',
            'length' => 32,
            'null' => false,
            'default' => '',
            'collate' => 'utf8mb4_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'created' => [
            'type' => 'datetime',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'modified' => [
            'type' => 'datetime',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        '_constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => ['id'],
                'length' => []
            ],
            'username' => [
                'type' => 'unique',
                'columns' => ['username'],
                'length' => []
            ]
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collection' => 'utf8mb4_general_ci',
        ]
    ];
    //@codingStandardsIgnoreEnd

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'username' => 'itosho',
                'password' => 'password1',
                'nickname' => 'いとしょ',
                'created' => '2018-12-01 10:00:00',
                'modified' => '2018-12-01 10:00:00'
            ],
            [
                'id' => 2,
                'username' => 'fortkle',
                'password' => 'password2',
                'nickname' => 'ふくあき',
                'created' => '2018-12-02 10:00:00',
                'modified' => '2018-12-02 10:00:00'
            ]
        ];
        parent::init();
    }
}