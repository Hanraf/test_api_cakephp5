<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RaihanPengeluaranpribadiFixture
 */
class RaihanPengeluaranpribadiFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'raihan_pengeluaranpribadi';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_pengeluaran' => 'cfdcb395-a0ee-4b16-9fe8-3393c07d6ae2',
                'tanggal' => '2023-11-21',
                'deskripsi' => 'Lorem ipsum dolor sit amet',
                'kategori' => 'Lorem ipsum dolor sit amet',
                'jumlah_pengeluaran' => 1,
                'metode_pembayaran' => 'Lorem ipsum dolor sit amet',
                'tanggal_input' => 1700559952,
            ],
        ];
        parent::init();
    }
}
