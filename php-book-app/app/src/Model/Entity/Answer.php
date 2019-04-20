<?php

namespace App\Model\Answer;

use Cake\ORM\Entity;

/**
 * Questions Entity
 */
class Answer extends Entity
{
    /**
     * @var array 各プロパティが一括代入できるかの情報
     */
    protected $_accessible = [
        'question_id'  => true,
        'user_id'      => true,
        'body'         => true,
        'created'      => true,
        'modified'     => true
    ];
}