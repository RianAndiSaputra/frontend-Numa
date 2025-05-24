<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi Numpak Mabur</title>
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
        .privacy-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 60px 20px 30px;
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .privacy-header::after {
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

        .privacy-header h1 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 600;
            position: relative;
        }

        .privacy-header p {
            opacity: 0.9;
            font-size: 14px;
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
        .privacy-content {
            padding: 30px 15px 15px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h2 {
            color: var(--primary-color);
            font-size: 18px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--bg-light);
        }

        .section h3 {
            font-size: 16px;
            margin: 15px 0 10px;
            color: var(--secondary-color);
        }

        .section p, .section ul {
            margin-bottom: 12px;
            font-size: 14px;
            color: var(--text-dark);
        }

        .section ul {
            padding-left: 20px;
        }

        .section li {
            margin-bottom: 8px;
        }

        .last-updated {
            text-align: center;
            font-size: 13px;
            color: var(--text-light);
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid var(--bg-light);
        }

        /* Responsive */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                min-height: 100vh;
            }
            
            .privacy-content {
                padding: 30px 20px 20px;
            }
        }

        @media (min-width: 768px) {
            .section h2 {
                font-size: 20px;
            }
            
            .section h3 {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="privacy-header">
            <button class="back-btn" onclick="window.history.back()">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>
            <h1>Kebijakan Privasi Numpak Mabur</h1>
            <p>Terakhir diperbarui: 30 Mei 2024</p>
        </div>

        <!-- Content -->
        <div class="privacy-content">
            <div class="section">
                <h2>Pengantar</h2>
                <p>Selamat datang di Numpak Mabur. Kami menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi Anda. Kebijakan Privasi ini menjelaskan jenis data yang kami kumpulkan, bagaimana kami menggunakannya, dan langkah-langkah yang kami ambil untuk memastikan keamanannya. Dengan menggunakan aplikasi kami, Anda menyetujui ketentuan kebijakan ini.</p>
            </div>

            <div class="section">
                <h2>Pengumpulan Data</h2>
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

            <div class="section">
                <h2>Bagaimana Kami Menggunakan Data Anda</h2>
                <p>Kami menggunakan data yang dikumpulkan dengan tujuan sebagai berikut:</p>
                <ul>
                    <li>Untuk verifikasi dan autentikasi pengguna</li>
                    <li>Untuk memproses transaksi dan pembayaran</li>
                    <li>Untuk menyediakan layanan dan dukungan pelanggan</li>
                    <li>Untuk meningkatkan kualitas layanan kami</li>
                    <li>Untuk memenuhi kewajiban hukum dan regulasi</li>
                </ul>
            </div>

            <div class="section">
                <h2>Pengungkapan Data</h2>
                <p>Kami tidak menjual, memperdagangkan, atau mentransfer data pribadi Anda kepada pihak luar tanpa persetujuan Anda, kecuali seperti yang dijelaskan di bawah ini:</p>
                <ul>
                    <li><strong>Penyedia Layanan:</strong> Kami dapat berbagi data Anda dengan penyedia layanan pihak ketiga yang terpercaya yang membantu kami dalam mengoperasikan aplikasi kami, menjalankan bisnis kami, atau melayani Anda, asalkan pihak-pihak tersebut setuju untuk menjaga kerahasiaan informasi ini.</li>
                    <li><strong>Persyaratan Hukum:</strong> Kami dapat mengungkapkan data Anda jika diwajibkan oleh hukum atau sebagai tanggapan terhadap permintaan yang sah oleh otoritas publik (misalnya, pengadilan atau badan pemerintah).</li>
                </ul>
            </div>

            <div class="section">
                <h2>Keamanan Data</h2>
                <p>Kami menerapkan berbagai langkah keamanan untuk menjaga keamanan informasi pribadi Anda. Kami menggunakan enkripsi untuk melindungi data sensitif yang dikirimkan secara online, dan juga melindungi informasi Anda secara offline.</p>
            </div>

            <div class="section">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi ini atau praktik data kami, silakan hubungi kami di:</p>
                <ul>
                    <li>Email: support@numpakmabur.com</li>
                </ul>
            </div>

            <div class="section">
                <h2>Perubahan pada Kebijakan Privasi Ini</h2>
                <p>Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu untuk mencerminkan perubahan dalam praktik kami atau persyaratan hukum. Kami akan memberi tahu Anda tentang perubahan signifikan dengan memposting Kebijakan Privasi baru di halaman ini dan memperbarui tanggal efektif.</p>
            </div>

            <div class="last-updated">
                Dokumen ini terakhir diperbarui pada 30 Mei 2024
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