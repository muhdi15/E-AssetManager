<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('asset')->insert([
            [
                'nama_aset' => 'Laptop Dell Latitude 7490',
                'jenis_aset' => 'elektronik',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang IT',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'admin',
                'tanggal_penambahan' => Carbon::now(),
            ],
            [
                'nama_aset' => 'Kursi Ergonomis',
                'jenis_aset' => 'furniture',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang HRD',
                'tambahkan_oleh' => 'supervisor',
                'di_perbarui_oleh' => null,
                'tanggal_penambahan' => Carbon::now()->subDays(1),
            ],
            [
                'nama_aset' => 'Proyektor Epson EB-X41',
                'jenis_aset' => 'elektronik',
                'kondisi' => 'rusak_ringan',
                'lokasi' => 'Ruang Meeting',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'teknisi1',
                'tanggal_penambahan' => Carbon::now()->subDays(2),
            ],
            [
                'nama_aset' => 'Lemari Arsip Besi',
                'jenis_aset' => 'furniture',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang Arsip',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => null,
                'tanggal_penambahan' => Carbon::now()->subDays(3),
            ],
            [
                'nama_aset' => 'Scanner Canon LiDE 300',
                'jenis_aset' => 'elektronik',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang Keuangan',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'keuangan1',
                'tanggal_penambahan' => Carbon::now()->subDays(4),
            ],
            [
                'nama_aset' => 'Rak Dokumen Kayu',
                'jenis_aset' => 'furniture',
                'kondisi' => 'rusak_berat',
                'lokasi' => 'Ruang Arsip',
                'tambahkan_oleh' => 'supervisor',
                'di_perbarui_oleh' => null,
                'tanggal_penambahan' => Carbon::now()->subDays(5),
            ],
            [
                'nama_aset' => 'Keyboard Logitech K120',
                'jenis_aset' => 'elektronik',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang Operasional',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'teknisi2',
                'tanggal_penambahan' => Carbon::now()->subDays(6),
            ],
            [
                'nama_aset' => 'AC LG 1 PK',
                'jenis_aset' => 'elektronik',
                'kondisi' => 'rusak_ringan',
                'lokasi' => 'Ruang Direktur',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'teknisi1',
                'tanggal_penambahan' => Carbon::now()->subWeek(),
            ],
            [
                'nama_aset' => 'Whiteboard Magnetik',
                'jenis_aset' => 'lainnya',
                'kondisi' => 'baik',
                'lokasi' => 'Ruang Meeting',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => null,
                'tanggal_penambahan' => Carbon::now()->subDays(8),
            ],
            [
                'nama_aset' => 'Meja Rapat Besar',
                'jenis_aset' => 'furniture',
                'kondisi' => 'hilang',
                'lokasi' => 'Ruang Rapat',
                'tambahkan_oleh' => 'admin',
                'di_perbarui_oleh' => 'admin',
                'tanggal_penambahan' => Carbon::now()->subDays(10),
            ],
        ]);
    }
}
