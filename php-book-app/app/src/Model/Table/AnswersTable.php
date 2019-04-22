<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;


/**
 * Answers Model
 */
class AnswersTable extends Table
{
    /**
     * @inheritdoc
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('answers');       //使用されるテーブル名
        $this->setDisplayField('id');      //list形式でデータを取得する際に使用されるカラム名
        $this->setPrimaryKey('id');        //プライマリーキーとなるカラム名

        $this->addBehavior('Timestamp'); //created及びmodifiedカラムを自動設定する

        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id',
            'joinType'   => 'INNER',
        ]);
    }

    /**
     * バリデーションルールの定義
     *
     * @oaram \Cake\Validation\Validator $validator バリデーションインスタンス
     * @return \Cake\Validation\Validator バリデーションインスタンス
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id', 'IDが不正です')
            ->allowEmpty('id', 'create', 'IDが不正です');

        $validator
            ->scalar('body', '質問内容が不正です')
            ->requirePresence('body', 'create', '質問内容が不正')
            ->notEmpty('body', '質問内容は必ず入力してください')
            ->maxLength('body', 140, '質問内容は140字以内で入力してください');

        return $validator;
    }

    /**
     * バリデーションルールの定義
     *
     * @oaram \Cake\ORM\RulesChecker $rules ルールチェッカーのオブジェクト
     * @return \Cake\ORM\RulesChecker ルールチェッカーのオブジェクト
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existIn(
            ['question_id'],
            'Questions',
            '質問が質問が既に削除されているため回答することができません。'
        ));

        return $rules;
    }
}