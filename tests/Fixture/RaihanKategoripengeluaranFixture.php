<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RaihanKategoripengeluaranFixture
 */
class RaihanKategoripengeluaranFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'raihan_kategoripengeluaran';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_kategori' => 'fc588ec1-6221-462e-9078-f0d48b38dfa8',
                'nama_kategori' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
