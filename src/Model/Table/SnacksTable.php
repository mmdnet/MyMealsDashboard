<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Snacks Model
 *
 * @method \App\Model\Entity\Snack newEmptyEntity()
 * @method \App\Model\Entity\Snack newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Snack[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Snack get($primaryKey, $options = [])
 * @method \App\Model\Entity\Snack findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Snack patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Snack[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Snack|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Snack saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Snack[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Snack[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Snack[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Snack[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SnacksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('snacks');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('ingredients')
            ->requirePresence('ingredients', 'create')
            ->notEmptyString('ingredients');

        $validator
            ->scalar('recipe')
            ->requirePresence('recipe', 'create')
            ->notEmptyString('recipe');

        return $validator;
    }
}
