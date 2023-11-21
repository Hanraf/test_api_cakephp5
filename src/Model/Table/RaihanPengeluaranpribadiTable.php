<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RaihanPengeluaranpribadi Model
 *
 * @method \App\Model\Entity\RaihanPengeluaranpribadi newEmptyEntity()
 * @method \App\Model\Entity\RaihanPengeluaranpribadi newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RaihanPengeluaranpribadi> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RaihanPengeluaranpribadi findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RaihanPengeluaranpribadi> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanPengeluaranpribadi>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanPengeluaranpribadi>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanPengeluaranpribadi>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanPengeluaranpribadi> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanPengeluaranpribadi>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanPengeluaranpribadi>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanPengeluaranpribadi>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanPengeluaranpribadi> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RaihanPengeluaranpribadiTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('raihan_pengeluaranpribadi');
        $this->setDisplayField('id_pengeluaran');
        $this->setPrimaryKey('id_pengeluaran');
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
            ->date('tanggal')
            ->allowEmptyDate('tanggal');

        $validator
            ->scalar('deskripsi')
            ->maxLength('deskripsi', 255)
            ->allowEmptyString('deskripsi');

        $validator
            ->scalar('kategori')
            ->maxLength('kategori', 100)
            ->requirePresence('kategori', 'create')
            ->notEmptyString('kategori');

        $validator
            ->integer('jumlah_pengeluaran')
            ->allowEmptyString('jumlah_pengeluaran');

        $validator
            ->scalar('metode_pembayaran')
            ->maxLength('metode_pembayaran', 50)
            ->allowEmptyString('metode_pembayaran');

        $validator
            ->dateTime('tanggal_input')
            ->notEmptyDateTime('tanggal_input');

        return $validator;
    }
}
