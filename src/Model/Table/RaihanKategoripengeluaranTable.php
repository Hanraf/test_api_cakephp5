<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RaihanKategoripengeluaran Model
 *
 * @method \App\Model\Entity\RaihanKategoripengeluaran newEmptyEntity()
 * @method \App\Model\Entity\RaihanKategoripengeluaran newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RaihanKategoripengeluaran> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RaihanKategoripengeluaran get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RaihanKategoripengeluaran findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RaihanKategoripengeluaran patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RaihanKategoripengeluaran> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RaihanKategoripengeluaran|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RaihanKategoripengeluaran saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanKategoripengeluaran>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanKategoripengeluaran>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanKategoripengeluaran>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanKategoripengeluaran> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanKategoripengeluaran>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanKategoripengeluaran>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RaihanKategoripengeluaran>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RaihanKategoripengeluaran> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RaihanKategoripengeluaranTable extends Table
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

        $this->setTable('raihan_kategoripengeluaran');
        $this->setDisplayField('id_kategori');
        $this->setPrimaryKey('id_kategori');
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
            ->scalar('nama_kategori')
            ->maxLength('nama_kategori', 255)
            ->allowEmptyString('nama_kategori');

        return $validator;
    }
}
