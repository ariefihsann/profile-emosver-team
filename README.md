# EMOSVER — PENS Underwater Robotics

Website profil tim **EMOSVER**, divisi robot bawah air (AUV/ROV) Politeknik Elektronika Negeri
Surabaya. Situs menampilkan profil tim, capaian kompetisi, galeri kegiatan, dan formulir kontak
untuk sponsorship maupun kolaborasi riset.

- **Production:** https://krbai.pens.ac.id
- **Stack:** Laravel 12 · Blade · Tailwind CSS 4 · Vite 7 · Alpine.js

## Halaman

| Route | View | Isi |
| --- | --- | --- |
| `/` | `welcome` | Hero, capaian, liputan berita, mitra |
| `/about` | `about` | Profil tim, filosofi, anggota, pembimbing |
| `/gallery` | `gallery` | Slider, grid foto, aftermovie |
| `/contact` | `tech` | Info kontak, formulir, peta |
| `POST /contact/send` | — | Kirim pesan ke `krbai@event.pens.ac.id` |

## Menjalankan secara lokal

Prasyarat: PHP 8.2+, Composer, Node.js 20+.

```bash
composer install
npm install

cp .env.example .env
php artisan key:generate

touch database/database.sqlite
php artisan migrate

npm run build        # aset produksi
php artisan serve    # http://127.0.0.1:8000
```

Untuk pengembangan frontend dengan hot reload, jalankan `npm run dev` di terminal terpisah.

## Konfigurasi

Semua konfigurasi ada di `.env`. Yang perlu diperhatikan:

```env
APP_NAME=EMOSVER
APP_URL=https://krbai.pens.ac.id

# Formulir kontak memerlukan mailer sungguhan di production
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@krbai.pens.ac.id
MAIL_FROM_NAME="EMOSVER Website"
```

Dengan `MAIL_MAILER=log`, pesan hanya ditulis ke `storage/logs/laravel.log` dan tidak terkirim.

## Aset

- Gambar disimpan di `public/img` dalam format **WebP**. Ukuran maksimal sisi terpanjang 1400px.
- Foto anggota tim ada di `public/img/team`.
- Video aftermovie: `public/video/aftermovie-720p.mp4` (720p, faststart) dengan poster
  `public/img/aftermovie-poster.webp`.
- Aset yang dibangun Vite berada di `public/build` dan **tidak** di-commit.

Saat menambah gambar baru, konversi dulu ke WebP dan sertakan `alt`, `width`, `height`, serta
`loading="lazy"` pada tag `<img>`.

## Test

```bash
php artisan test
```

Mencakup keterjangkauan setiap halaman, konsistensi label navigasi, tidak adanya aset yang hilang,
serta validasi dan penanganan kegagalan formulir kontak.

## Deployment

Push ke `main` memicu `.github/workflows/main.yml`:

1. `composer install` + `npm ci`
2. `php artisan test`
3. `npm run build`
4. Upload bundle sebagai artifact
5. `rsync` ke server (tanpa `.env`, `storage/`, dan `node_modules/`)
6. Di server: `composer install --no-dev`, `migrate --force`, cache config/route/view, perbaikan permission
7. Smoke test `https://krbai.pens.ac.id/` dan `/gallery`

Secret yang dibutuhkan:

| Secret | Wajib | Keterangan |
| --- | --- | --- |
| `SSH_PRIVATE_KEY` | ya | Private key untuk login ke server |
| `DEPLOY_USER` | tidak | Default `root`; sangat disarankan user deploy khusus |
| `KNOWN_HOSTS` | tidak | Isi untuk mem-pin host key; jika kosong memakai `ssh-keyscan` |

`vendor/` dan `public/build/` tidak di-commit, sehingga dependency dan aset selalu dibangun
ulang pada setiap deployment.

## Struktur direktori

```text
app/Http/Controllers/ContactController.php   # pengiriman formulir kontak
resources/views/                             # halaman Blade
resources/views/components/navbar.blade.php  # navigasi + loader
resources/css/app.css                        # entry Tailwind
routes/web.php                               # seluruh route
public/img, public/video                     # aset statis
tests/Feature                                # test halaman dan kontak
```

## Lisensi

Kode aplikasi memakai lisensi MIT. Logo, foto, dan video merupakan milik tim EMOSVER PENS.
