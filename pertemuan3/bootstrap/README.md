# Instagram Profile (Bootstrap Responsive Demo)

Halaman ini adalah replika sederhana struktur profil Instagram menggunakan **Bootstrap 5** dengan fokus pada:
- Penerapan sistem Grid (`container → row → col`) dan fitur lanjutan (breakpoints, nesting, order).
- Layout responsif untuk header profil, bio, feed (≥12 gambar), serta footer informatif.
- Demonstrasi praktik aksesibilitas dasar dan skalabilitas grid.

---

## 1. Struktur File

```
/.
├── index.html
├── assets/
│   ├── css/
│   │   └── custom.css
│   └── img/
│       ├── profile.jpg
│       ├── highlight1.jpg … highlightN.jpg
│       ├── postingan1.png … postingan12.png
│       └── (tambahan gambar feed lain jika diperlukan)
└── README.md
```

| File/Folder | Deskripsi |
|-------------|-----------|
| `index.html` | Halaman utama, memuat struktur markup dan komponen Bootstrap. |
| `assets/css/custom.css` | Kustomisasi style (override Bootstrap ringan + efek hover + footer). |
| `assets/img/*` | Aset gambar profil, highlight, dan feed. |
| `README.md` | Dokumentasi proyek ini. |

---

## 2. Dependensi

| Library | Sumber | Kegunaan |
|---------|--------|----------|
| Bootstrap 5.3.8 (CSS & JS Bundle) | CDN | Grid system, utility classes, komponen (nav-tabs, buttons). |
| Font Awesome 6.x | CDN | Ikon (grid/posts, reels, bookmark, user, settings). |
| (Opsional) Live Server / Static HTTP | Lokal | Untuk reload otomatis saat pengembangan. |

---

## 3. Cara Menjalankan

### Metode Live Development
```bash
# VSCode Extension
Live Server → Open with Live Server
```

## 4. Fitur Utama

- Header profil responsif (gambar profil, username, tombol aksi, statistik).
- Bio terstruktur dengan tipografi berbeda.
- Highlights (stories) bergulir horizontal pada layar kecil (overflow auto).
- Feed dengan **≥12** gambar menggunakan kartu homogen (rasio 1:1).
- Footer adaptif menampilkan tautan & pemilihan bahasa.
- Hover overlay (ikon like & comment) hanya aktif di perangkat non-touch (diatur via media query breakpoint ≥768px).

---

## 5. Strategi Grid & Responsiveness

| Bagian | Implementasi | Penjelasan |
|--------|--------------|-----------|
| Feed | `col-12 col-md-6 col-lg-4 col-xl-3` | Skala 1 → 2 → 3 → 4 kolom mengikuti lebar viewport, menjaga ukuran visual nyaman. |
| Header | Flex + nested grid (row di dalam col) | Memisahkan area username + tombol dari stats & bio untuk fleksibilitas. |
| Highlights | Flex horizontal dengan `flex-shrink-0` | Mencegah distorsi saat overflow di mobile. |
| Tabs | `nav nav-tabs` Bootstrap | Memanfaatkan komponen siap pakai. |
| Buttons | Utility spacing + responsive ordering | Mengubah posisi dan prioritas interaksi antar breakpoint. |

---

## 6. Pertanyaan README

### 6.1 Mengapa memilih konfigurasi `col` tertentu untuk tiap breakpoint?

Konfigurasi feed menggunakan:
```
col-12 (≤576px)
col-md-6 (≥768px)
col-lg-4 (≥992px)
col-xl-3 (≥1200px)
```
Alasan:
- **Mobile (col-12)**: Fokus konsumsi vertikal; satu kolom memaksimalkan keterbacaan dan menghindari target sentuh terlalu kecil.
- **Tablet (col-md-6)**: Dua kolom cukup untuk memanfaatkan ruang tambahan tanpa membuat kartu terlalu kecil.
- **Desktop menengah (col-lg-4)**: Tiga kolom adalah sweet spot untuk densitas konten tanpa overload visual.
- **Desktop lebar (col-xl-3)**: Empat kolom menjaga proporsi image (rasio 1:1) tetap nyaman secara ergonomis dan meminimalkan scrolling berlebih.
- Menggunakan pola **bertingkat** (1→2→3→4) membuat scaling progresif, meminimalkan “layout jump” drastis antar breakpoint.

### 6.2 Bagaimana memastikan tombol Follow / Edit Profile tetap mudah dijangkau di mobile? Pendekatan:

Walau contoh ini memakai “Edit profile / View archive”, prinsipnya sama untuk tombol “Follow”:
- **Stacked early**: Di mobile tombol ditempatkan setelah username dalam blok vertikal (flex-column) agar segera terlihat setelah identitas.
- **Tap target**: Menggunakan `btn btn-outline-light btn-sm` (Bootstrap) dengan padding kustom tetap ≥44px area efektif (gabungan padding + margin).
- **Responsive alignment**: Pada layar lebih besar (sm/md ke atas) tombol berpindah ke satu garis horizontal dengan username (flex-row) agar efisiensi ruang meningkat.
- **Order-friendly**: Jika suatu saat diperlukan perbedaan prioritas (misal Follow lebih penting), cukup tambahkan `order-sm-*` untuk menukar urutan tanpa ubah markup.
- **Aksesibilitas**: Kontras tinggi (teks putih / latar abu gelap), serta tetap menggunakan elemen `<button>` (bukan `<div>`), sehingga focus dan keyboard navigation bekerja default.

### 6.3 Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi grid mengatasinya?

| Potensi Masalah | Dampak | Solusi yang Sudah / Dapat Diterapkan |
|------------------|--------|--------------------------------------|
| Scroll sangat panjang | UX menurun | Tambah pagination, infinite scroll, atau lazy-loading (Intersection Observer). |
| Waktu muat gambar | Performa lambat | Gunakan `loading="lazy"` pada `<img>` (mudah ditambah tanpa ubah struktur). |
| Konsistensi tinggi | Gambar tak seragam memecah layout | Sudah distandarisasi dengan aspect-ratio (CSS) & `object-fit: cover`. |
| Densitas konten berlebih di desktop besar | Fatigue visual | Breakpoint tambahan (`col-xxl-2` bila ingin 6 kolom) untuk adaptasi resolusi ultra-lebar. |
| Reflow saat gambar besar di-cache lambat | Layout shift | Gunakan ukuran kontainer tetap (rasio 1:1) → sudah diterapkan via `.post-img { aspect-ratio: 1; }`. |

Dengan sistem grid deklaratif Bootstrap, menambah jumlah posting bukan mengubah layout: cukup duplikasi blok “col-*” dan grid otomatis wrap ke baris berikutnya.
