# Lara-Pack Livewire Quill

Lara-Pack Livewire Quill adalah komponen [Livewire 3](https://livewire.laravel.com/) untuk mempermudah integrasi _rich text editor_ [Quill.js](https://quilljs.com/) ke dalam aplikasi Laravel Anda.

## Instalasi

Tambahkan _package_ ini ke dalam aplikasi Laravel Anda menggunakan Composer:

```bash
composer require lara-pack/livewire-quill
```

> **Catatan:** Sesuaikan perintah di atas dengan _repository_ atau instalasi lokal dari _package_ ini.

## Persiapan (Asset Quill.js)

Karena komponen ini bergantung pada library Quill.js, pastikan Anda sudah memasukkan CSS dan JavaScript bawaan Quill pada _layout_ utama aplikasi Anda (contohnya di `resources/views/layouts/app.blade.php`).

```html
<head>
  <!-- ... tag lainnya ... -->

  <!-- Theme included stylesheets -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
  <!-- Jika ingin menggunakan tema 'bubble', tambahkan: -->
  <!-- <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet"> -->
</head>
<body>
  <!-- ... konten body ... -->

  <!-- Main Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</body>
```

## Penggunaan

Gunakan tag `<livewire:...>` pada file Blade atau _views_ komponen Livewire Anda. Anda bisa langsung melakukan _binding_ data menggunakan `wire:model` berkat Livewire 3 `#[Modelable]`.

### Contoh Dasar

```html
<livewire:lara-pack.livewire-quill wire:model="description" />
```

### Konfigurasi Properti Tambahan

Anda juga dapat mengatur tema editor dan waktu jeda (_debounce_) menggunakan properti berikut:

- `theme` (opsional): Tema editor Quill (`'snow'` atau `'bubble'`). **Default:** `'snow'`
- `debounceTime` (opsional): Waktu penundaan pembaruan dalam milidetik (ms). **Default:** `500`

**Contoh lengkap:**

```html
<livewire:lara-pack.livewire-quill
  wire:model="description"
  theme="bubble"
  debounceTime="1000"
/>
```

## Fitur Komponen

- Mendukung fitur `wire:model` (dua arah / _two-way data binding_).
- Dapat digunakan lebih dari sekali (multiple instances) dalam satu halaman (ID digenerate menggunakan UUID).
- Memiliki _debounce_ secara _built-in_ untuk menghemat proses _request_ ke server saat user sedang mengetik.
- Mendukung kustomisasi warna toolbar dasar yang sudah disiapkan di dalam skrip komponen.

## Lisensi

[MIT License](LICENSE)
