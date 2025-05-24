<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Numpak Mabur</title>
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Header */
        .about-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 10px 5px 5px; /* dikurangi agar header tidak terlalu panjang */
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 44px;
            border-bottom-right-radius: 44px;
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -24px;
            left: 0;
            right: 0;
            height: 24px;
            background: var(--white);
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            z-index: 1;
        }

        .logo-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 2px; /* margin bawah dikecilkan agar tulisan lebih dekat */
            padding: 10px;
        }

        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .about-header h1 {
            font-size: 20px;
            margin: 0px 0 0px; /* kecilkan jaraknya dengan elemen atas/bawah */
            font-weight: 600;
            position: relative;
        }

        ..about-header p {
            opacity: 0.9;
            font-size: 14px;
            margin: 0 auto;
            position: relative;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 2;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Content */
        .about-content {
            padding: 30px 15px 15px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary-color);
            font-size: 18px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--bg-light);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section p {
            margin-bottom: 15px;
            font-size: 14px;
            color: var(--text-dark);
        }

        /* Visi Misi */
        .vision-mission {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .card {
            background: var(--white);
            border-radius: 12px;
            padding: 16px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .card h3 {
            color: var(--secondary-color);
            font-size: 16px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card ul {
            padding-left: 20px;
        }

        .card li {
            margin-bottom: 8px;
            font-size: 13px;
        }

        /* List */
        ul {
            padding-left: 20px;
            margin-bottom: 15px;
        }

        li {
            font-size: 14px;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        /* Responsive */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                min-height: 100vh;
            }
            
            .about-content {
                padding: 30px 20px 20px;
            }
            
            .vision-mission {
                flex-direction: row;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="about-header">
            <button class="back-btn" onclick="window.history.back()">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>
            <div class="logo-container">
                <img src="/images/logo-numa.png" alt="Numpak Mabur Logo">
            </div>
            <h1>Kebijakan Privasi Numpak Mabur</h1>
            <p>Terakhir diperbarui: 30 Mei 2024</p>
        </div>

        <!-- Content -->
        <div class="about-content">
            <!-- Tentang Kami -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                    </svg>
                    Pengantar
                </h2>
                <p>Selamat datang di Numpak Mabur. Kami menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi Anda. Kebijakan Privasi ini menjelaskan jenis data yang kami kumpulkan, bagaimana kami menggunakannya, dan langkah-langkah yang kami ambil untuk memastikan keamanannya. Dengan menggunakan aplikasi kami, Anda menyetujui ketentuan kebijakan ini.</p>
            </div>

            <!-- Pengumpulan Data -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                    Pengumpulan Data
                </h2>
                <p>Numpak Mabur mengumpulkan jenis data sebagai berikut:</p>
                <ul>
                    <li>ID Pengguna</li>
                    <li>Identitas Pengguna</li>
                    <li>Alamat Pengguna</li>
                    <li>Informasi Perbankan Pengguna</li>
                    <li>Nomor Telepon Pengguna</li>
                    <li>Kebangsaan</li>
                </ul>
            </div>

            <!-- Penggunaan Data -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                    </svg>
                    Bagaimana Kami Menggunakan Data Anda
                </h2>
                <p>Kami menggunakan data yang dikumpulkan dengan tujuan sebagai berikut:</p>
                <ul>
                    <li>ID Pengguna</li>
                    <li>Identitas Pengguna</li>
                    <li>Alamat Pengguna</li>
                    <li>Informasi Perbankan Pengguna</li>
                    <li>Nomor Telepon Pengguna</li>
                    <li>Kebangsaan</li>
                </ul>
            </div>

            <!-- Pengungkapan Data -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15c1.66 0 3-1.34 3-3V6c0-1.66-1.34-3-3-3S9 4.34 9 6v6c0 1.66 1.34 3 3 3zm5.91-3c-.49 0-.9.36-.98.85C16.52 15.22 14.47 17 12 17s-4.52-1.78-4.93-4.15c-.08-.49-.49-.85-.98-.85-.61 0-1.09.54-1 1.14.49 3 2.89 5.35 5.91 5.78V20c0 .55.45 1 1 1s1-.45 1-1v-2.08c3.02-.43 5.42-2.78 5.91-5.78.1-.6-.39-1.14-1-1.14z"/>
                    </svg>
                    Pengungkapan Data
                </h2>
                <p>Kami tidak menjual, memperdagangkan, atau mentransfer data pribadi Anda kepada pihak luar tanpa persetujuan Anda, kecuali seperti yang dijelaskan di bawah ini:</p>
                
                <div class="vision-mission">
                    <div class="card">
                        <h3>
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                            Penyedia Layanan
                        </h3>
                        <p>Kami dapat berbagi data Anda dengan penyedia layanan pihak ketiga yang terpercaya yang membantu kami dalam mengoperasikan aplikasi kami, menjalankan bisnis kami, atau melayani Anda, asalkan pihak-pihak tersebut setuju untuk menjaga kerahasiaan informasi ini.</p>
                    </div>
                    <div class="card">
                        <h3>
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                            Persyaratan Hukum
                        </h3>
                        <p>Kami dapat mengungkapkan data Anda jika diwajibkan oleh hukum atau sebagai tanggapan terhadap permintaan yang sah oleh otoritas publik (misalnya, pengadilan atau badan pemerintah).</p>
                    </div>
                </div>
            </div>

            <!-- Hubungi Kami -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    Hubungi Kami
                </h2>
                <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi ini atau praktik data kami, silakan hubungi kami di:</p>
                <ul>
                    <li>Email: support@numpakmabur.com</li>
                </ul>
            </div>

            <!-- Perubahan Kebijakan -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
                    </svg>
                    Perubahan pada Kebijakan Privasi Ini
                </h2>
                <p>Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu untuk mencerminkan perubahan dalam praktik kami atau persyaratan hukum. Kami akan memberi tahu Anda tentang perubahan signifikan dengan memposting Kebijakan Privasi baru di halaman ini dan memperbarui tanggal efektif.</p>
            </div>

            <div class="section">
                <p style="text-align: center; color: var(--text-light); font-size: 13px;">
                    Dokumen ini terakhir diperbarui pada 30 Mei 2024
                </p>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>