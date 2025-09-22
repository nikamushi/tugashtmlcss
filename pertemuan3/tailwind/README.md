# Instagram Profile (Tailwind)

Halaman ini adalah replika profil Instagram menggunakan **Tailwind CSS (CDN mode)** dengan pendekatan **mobile-first**. Fokus utama:
- Header profil (foto, username, tombol aksi, statistik)
- Bio singkat
- Highlights (stories)
- Feed foto (≥12 gambar) dengan variasi grid responsif + nested grid
- Footer informatif
- Eksplorasi utility responsive (`sm:`, `md:`, `lg:`), `grid`, `flex`, `order`, `gap`, `col-span`, dan teknik hover menggunakan `group`.

---

## 1. Struktur FIle

```
/.
├── index.html
├── assets/
│   └── img/
│       ├── profile.jpg
│       ├── highlight1.jpg … highlightN.jpg
│       ├── postingan1.png … postingan12.png
│       └── (tambahan gambar feed lain jika diperlukan)
└── README.md
```

---

## 2. Cara Menjalankan

### Metode Live Development
```bash
# VSCode Extension
Live Server → Open with Live Server
```

---

## 3. Dependensi

| Tool / Lib | Kegunaan |
|------------|----------|
| Tailwind CSS (browser CDN) | Utility-first styling |
| Font Awesome | Ikon UI (settings, media, dsb) |
| Native HTML | Struktur |

---

## 4. Desain & Arsitektur Layout

### 4.1 Pendekatan Mobile-First
Markup disusun untuk alur konsumsi vertikal:
1. Foto profil
2. Username + tombol
3. Statistik
4. Bio
5. Highlights (scrollable horizontal pada layar sempit)
6. Tabs ikon (posts / reels / saved / tagged)
7. Feed
8. Footer

### 4.2 Grid Feed (Core)
| Breakpoint | Kelas Tailwind | Kolom | Alasan |
|------------|----------------|-------|--------|
| Default (mobile) | `grid-cols-1` | 1 | Maksimalkan keterbacaan, scroll natural, target besar & aman untuk tap |
| `md:` (≥768px) | `md:grid-cols-3` | 3 | Tablet landscape cukup lebar untuk menampilkan beberapa konten sekaligus tanpa terlalu kecil |
| `lg:` (≥1024px) | `lg:grid-cols-4` | 4 | Densitas ideal di desktop standar |
| (Opsi) Perluasan | Bisa tambah `xl:grid-cols-5` / `2xl:grid-cols-6` | 5–6 | Adaptasi monitor lebar jika aset visual banyak |

### 4.3 Variasi / Highlight Grid
- Satu “featured block” menggunakan `md:col-span-2` + nested `grid grid-cols-2` → menampilkan 2 gambar di dalam satu slot besar (memberi ritme visual).
- Kelas `aspect-square` + `object-cover` memastikan konsistensi bentuk grid meski dimensi gambar asli beragam.

### 4.4 Spasi & Gap
| Breakpoint | Gap | Kelas | Alasan |
|------------|-----|-------|--------|
| Mobile | Rapat | `gap-1` | Minimalkan scroll namun tetap ada pemisah |
| Tablet | Sedang | `sm:gap-2` | Ruang bertambah → napas visual |
| Desktop | Longgar | `lg:gap-3` | Estetika / tampilan galeri lebih seimbang pada viewport lebar |

### 4.5 Tipografi Responsif
`text-xs → sm:text-sm → lg:text-lg` (stats / meta info) menjaga hierarki tanpa dominasi berlebih di layar kecil.

### 4.6 Interaksi
- Overlay likes/comments: `group` + `group-hover:*` + transition → hanya aktif terasa di pointer devices.
- Ikon state aktif (Posts tab) diberi border-top putih via `border-t-2 border-white` & offset negatif.

---

## 5. Utility Responsive yang Digunakan

| Masalah | Solusi Utility | Contoh |
|---------|----------------|--------|
| Layout kolom berubah device | `flex-col sm:flex-row`, `grid-cols-1 md:grid-cols-3 lg:grid-cols-4` | Header & feed |
| Konsistensi ukuran gambar profil | `w-20 sm:w-32 md:w-36 lg:w-44` | Foto profil |
| Ritme grid khusus | `md:col-span-2` + nested `grid grid-cols-2` | Featured post |
| Spasi adaptif | `gap-1 sm:gap-2 lg:gap-3` | Feed |
| Tombol adaptif | `px-3 py-1.5 sm:px-4 sm:py-2 lg:px-5` | Edit / Archive |
| Hover hanya terasa di desktop | Rely on inherent pointer media (tidak aktif di tap) | Overlay post |
| Perbedaan densitas highlights | `gap-4 sm:gap-8 lg:gap-16` | Section Stories |
| Penyesuaian ikon | `text-base sm:text-lg` | Tab navigation |

---

## 6. Aksesibilitas & UX

| Aspek | Pendekatan |
|-------|------------|
| Kontras | Teks putih / abu (#999–#ccc) di latar #000 |
| Target Sentuh | Tombol min. tinggi ±32–40px (padding responsif) |
| Fokus Visual | Default browser (bisa ditingkatkan dengan ring utilities bila diperlukan) |
| Hover vs Tap | Overlay tidak merusak navigasi di perangkat sentuh |
| Scroll Horizontal Highlights | `overflow-x-auto` + menyembunyikan scrollbar visual |

---

---

## 8. Pertanyaan README

### 8.1 Jelaskan keputusan `grid-cols` / `gap` di tiap breakpoint — kenapa begitu?
- **`grid-cols-1` (mobile)**: Mengurangi beban kognitif & meningkatkan keterfokusan; kartu penuh lebar memudahkan tap.
- **`md:grid-cols-3`**: Tiga kolom di tablet memberi densitas wajar tanpa memaksa scroll terlalu panjang atau kartu terlalu kecil.
- **`lg:grid-cols-4`**: Empat kolom di desktop menghasilkan grid simetris klasik (3–4 kolom lazim pada galeri sosial).
- **Gap bertingkat (`gap-1 → sm:gap-2 → lg:gap-3`)**: Permukaan kecil butuh kepadatan (menghemat scroll). Semakin besar layar, semakin perlu ruang udara visual agar tidak terlihat “blok massif”.
- **Featured span (`md:col-span-2`)**: Dosis variasi komposisi; memecah repetisi monoton.

### 8.2 Bagaimana memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout yang muncul di mobile?
Masalah umum & pendekatan:
| Masalah | Pendekatan |
|---------|------------|
| Header terlalu melebar di mobile | `flex-col` di mobile lalu `sm:flex-row` untuk layar lebih besar |
| Tombol memakan ruang & tidak proporsional | Ukuran adaptif: `px-3 py-1.5` (mobile) → `px-5 py-2` (desktop) + `text-xs → sm:text-sm` |
| Feed butuh prioritas konten utama dulu | Satu kolom dasar (`grid-cols-1`) memastikan fokus & progresif enhancement |
| Highlights overflow | `overflow-x-auto` + `flex-shrink-0` mencegah distorsi gambar |
| Hierarki tipografi berubah | `text-sm sm:text-base lg:text-lg` menjaga rasio tanpa ubah markup |
| Varian layout khusus (featured block) | `md:col-span-2` + nested `grid` di dalam parent grid |

### 8.3 Jelaskan trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri.
| Aspek | Banyak Utility | Component CSS |
|-------|----------------|---------------|
| Kecepatan Iterasi | Sangat cepat (langsung di HTML) | Butuh definisi dulu |
| Readability skala kecil | Mudah; niat desain terlihat eksplisit | Sedikit abstrak (harus buka CSS) |
| Readability skala besar | Bisa “class soup” | Lebih ringkas & terstruktur |
| Konsistensi | Konsisten jika disiplin gunakan pola | Bisa buat token / design system eksplisit |
| Refactor global | Sulit jika pola bervariasi | Mudah: ubah satu selector |
| Bundle size (build mode) | Aman karena purging (JIT) | Mirip; tapi custom CSS berlebih bisa tumbuh liar |
| Onboarding | Developer paham utilitas → langsung produktif | Perlu dokumentasi internal |
| Variasi cepat | Sangat fleksibel | Kadang harus tambah utilitas baru |

**Keputusan di proyek ini:** Mayoritas menggunakan utility inline karena:
- Skala kecil → cepat & transparan
- Eksperimen layout responsif intens
- Hanya sedikit CSS kustom untuk hal yang *benar-benar non-repetitif* (gradient & scrollbar hiding)

---
