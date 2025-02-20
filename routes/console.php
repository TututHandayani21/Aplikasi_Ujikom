<?php

// Mengimpor class yang diperlukan dari Laravel
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Mendefinisikan perintah Artisan kustom bernama 'inspire'
Artisan::command('inspire', function () {
    // Menampilkan kutipan inspiratif ke dalam output console
    $this->comment(Inspiring::quote());
    
// Menetapkan tujuan perintah sebagai 'Menampilkan kutipan inspiratif' 
// dan mengatur agar dijalankan setiap jam secara otomatis
})->purpose('Display an inspiring quote')->hourly();
