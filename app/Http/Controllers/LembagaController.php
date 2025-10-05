<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function index()
    {
        $data = [
            'rw' => [
                'rw_id' => 1,
                'nomor_rw' => '01',
                'ketua_rw' => 'Budi Santoso',
                'keterangan' => 'RW utama wilayah utara'
            ],
            'rt' => [
                'rt_id' => 5,
                'rw_id' => 1,
                'nomor_rt' => '05',
                'ketua_rt' => 'Slamet Riyadi',
                'keterangan' => 'RT perumahan blok A'
            ],
            'perangkat_desa' => [
                'perangkat_id' => 1,
                'nama' => 'Siti Aminah',
                'jabatan' => 'Sekretaris Desa',
                'nip' => '123456789',
                'kontak' => '08123456789',
                'periode' => '2022 - 2028'
            ],
            'lembaga_desa' => [
                'lembaga_id' => 1,
                'nama' => 'Karang Taruna',
                'deskripsi' => 'Organisasi pemuda desa',
                'kontak' => 'karangtaruna@desa.id'
            ],
            'jabatan_lembaga' => [
                'jabatan_id' => 1,
                'lembaga' => 'Karang Taruna',
                'nama_jabatan' => 'Ketua',
                'level' => '1'
            ],
            'anggota_lembaga' => [
                'anggota_id' => 10,
                'nama' => 'Agus Prasetyo',
                'jabatan' => 'Sekretaris',
                'periode' => '2023 - 2026'
            ]
        ];

        return view('lembaga.index', compact('data'));
    }
}
