# Pertemuan 3 - Instagram Profile Clone

Proyek ini merupakan implementasi clone profil Instagram menggunakan dua framework CSS yang berbeda: **Bootstrap** dan **Tailwind CSS**. Kedua implementasi menampilkan halaman profil Instagram yang responsive dan modern dengan fitur-fitur yang mirip dengan aplikasi Instagram asli.

## 📁 Struktur Proyek

```
pertemuan3/
├── bootstrap/          # Implementasi menggunakan Bootstrap 5
│   ├── img/           # Folder gambar/aset
│   ├── index.html     # File HTML utama
│   ├── style.css      # Custom CSS untuk styling
│   ├── package.json   # Dependencies Bootstrap
│   └── node_modules/  # Bootstrap packages
├── tailwind/          # Implementasi menggunakan Tailwind CSS
│   ├── img/           # Folder gambar/aset
│   └── index.html     # File HTML dengan Tailwind CDN
└── README.md          # Dokumentasi proyek (file ini)
```

## 🎯 Fitur yang Diimplementasikan

### ✅ Fitur Utama
- **Profile Header** - Foto profil, username, dan statistik
- **Action Buttons** - Edit profile, View archive, Settings
- **User Stats** - Posts, Followers, Following count
- **Bio Section** - Nama, deskripsi, dan informasi kontak
- **Story Highlights** - Highlight stories dengan icon
- **Navigation Tabs** - Posts, Reels, Tagged tabs
- **Posts Grid** - Grid layout untuk menampilkan foto
- **Footer** - Links Instagram dan copyright

### 🎨 Desain Features
- **Dark Theme** - Menggunakan tema gelap seperti Instagram
- **Responsive Design** - Menyesuaikan berbagai ukuran layar
- **Hover Effects** - Interaksi hover pada posts dan buttons
- **Instagram-like Styling** - Mengikuti design pattern Instagram

## 🚀 Cara Menjalankan

### Bootstrap Version

1. **Install Dependencies**
   ```bash
   cd bootstrap/
   npm install
   ```

2. **Jalankan Server Lokal**
   ```bash
   # Menggunakan Python
   python -m http.server 8080
   
   # Atau menggunakan Node.js
   npx serve .
   
   # Atau menggunakan Live Server (VS Code extension)
   ```

3. **Buka di Browser**
   ```
   http://localhost:8080
   ```

### Tailwind Version

1. **Jalankan Server Lokal**
   ```bash
   cd tailwind/
   
   # Menggunakan Python
   python -m http.server 8081
   
   # Atau menggunakan Node.js
   npx serve .
   ```

2. **Buka di Browser**
   ```
   http://localhost:8081
   ```

> **Note**: Tailwind version menggunakan CDN, sehingga tidak memerlukan instalasi dependencies.

## 🔧 Teknologi yang Digunakan

### Bootstrap Implementation
- **HTML5** - Struktur halaman
- **Bootstrap 5.3.8** - Framework CSS untuk responsive design
- **Font Awesome 6.4.0** - Icon library
- **Custom CSS** - Styling tambahan untuk Instagram theme
- **CSS Variables** - Untuk color scheme yang konsisten

### Tailwind Implementation  
- **HTML5** - Struktur halaman
- **Tailwind CSS** - Utility-first CSS framework (via CDN)
- **Font Awesome 6.0.0** - Icon library
- **Custom CSS** - Gradient effects dan styling khusus

## 📊 Perbandingan Framework

| Aspek | Bootstrap | Tailwind CSS |
|-------|-----------|--------------|
| **File Size** | Lebih besar (full framework) | Lebih kecil (utility classes) |
| **Customization** | Custom CSS diperlukan | Inline utility classes |
| **Learning Curve** | Mudah dipelajari | Membutuhkan pemahaman utility |
| **Development Speed** | Cepat dengan komponen siap pakai | Sangat cepat dengan utilities |
| **CSS Output** | Predefined components | Utility-first approach |
| **Responsive** | Grid system & breakpoints | Responsive utilities |

## 🎨 Preview

### Bootstrap Version
![Bootstrap Instagram Clone](screenshots/bootstrap-instagram.png)

*Implementasi menggunakan Bootstrap dengan komponen dan grid system yang telah disediakan.*

### Tailwind Version  
![Tailwind Instagram Clone](screenshots/tailwind-instagram.png)

*Implementasi menggunakan Tailwind CSS dengan utility classes untuk styling yang lebih granular.*

## 📱 Responsive Breakpoints

### Bootstrap Breakpoints
- **xs**: < 576px (Extra small devices)
- **sm**: ≥ 576px (Small devices) 
- **md**: ≥ 768px (Medium devices)
- **lg**: ≥ 992px (Large devices)
- **xl**: ≥ 1200px (Extra large devices)

### Tailwind Breakpoints
- **sm**: 640px (Small devices)
- **md**: 768px (Medium devices)
- **lg**: 1024px (Large devices)
- **xl**: 1280px (Extra large devices)
- **2xl**: 1536px (2X Large devices)

## 🎯 Pembelajaran

### Bootstrap Advantages
- ✅ Komponen siap pakai (buttons, cards, grid)
- ✅ Documentation yang lengkap
- ✅ Ecosystem yang matang
- ✅ Easy untuk beginners

### Tailwind Advantages
- ✅ Utility-first approach yang fleksibel
- ✅ Customization yang sangat mudah
- ✅ File size yang lebih optimal
- ✅ Consistent design system

### Key Differences dalam Implementasi

1. **CSS Architecture**
   - Bootstrap: Component-based dengan custom CSS
   - Tailwind: Utility-first dengan inline classes

2. **Responsive Design**
   - Bootstrap: Grid system (container, row, col)
   - Tailwind: Responsive utilities (sm:, md:, lg:)

3. **Styling Approach**
   - Bootstrap: CSS classes + custom CSS file
   - Tailwind: Utility classes langsung di HTML

## 📝 Profile Information

**Username**: anggasaputrraaa  
**Display Name**: baskara  
**Bio**: Mental health service  
**Email**: autoruns18@gmail.com  

**Stats**:
- 5 posts
- 521 followers  
- 387 following

## 🔗 Resources

- [Bootstrap Documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Font Awesome Icons](https://fontawesome.com/icons)
- [Instagram Design Reference](https://www.instagram.com/)

## 👥 Credits

Proyek ini dibuat untuk pembelajaran framework CSS dan responsive web design. Implementasi mengikuti design pattern dari Instagram dengan tujuan edukasi.

---

*Dibuat dengan ❤️ untuk pembelajaran Web Development*