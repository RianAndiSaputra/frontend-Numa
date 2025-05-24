<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi</title>
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
            <h1>Kebijakan Privasi</h1>
            <p>Terakhir diperbarui: 1 Juni 2023</p>
        </div>

        <!-- Content -->
        <div class="privacy-content">
            <div class="section">
                <h2>Pengantar</h2>
                <p>Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan membagikan informasi pribadi Anda ketika Anda menggunakan aplikasi atau layanan kami. Dengan menggunakan layanan kami, Anda menyetujui pengumpulan dan penggunaan informasi sesuai dengan kebijakan ini.</p>
            </div>

            <div class="section">
                <h2>Informasi yang Kami Kumpulkan</h2>
                <p>Kami mengumpulkan beberapa jenis informasi untuk berbagai tujuan untuk menyediakan dan meningkatkan layanan kami:</p>
                
                <h3>Data Pribadi</h3>
                <p>Saat menggunakan layanan kami, kami mungkin meminta Anda untuk memberikan informasi identitas pribadi tertentu yang dapat digunakan untuk menghubungi atau mengidentifikasi Anda, termasuk tetapi tidak terbatas pada:</p>
                <ul>
                    <li>Nama lengkap</li>
                    <li>Alamat email</li>
                    <li>Nomor telepon</li>
                    <li>Alamat fisik</li>
                    <li>Data identitas (KTP, SIM, dll)</li>
                </ul>

                <h3>Data Penggunaan</h3>
                <p>Kami juga dapat mengumpulkan informasi tentang bagaimana layanan diakses dan digunakan ("Data Penggunaan"). Data Penggunaan ini mungkin mencakup informasi seperti alamat Protokol Internet perangkat Anda (mis. alamat IP), jenis browser, versi browser, halaman layanan kami yang Anda kunjungi, waktu dan tanggal kunjungan Anda, waktu yang dihabiskan pada halaman tersebut, pengenal perangkat unik, dan data diagnostik lainnya.</p>
            </div>

            <div class="section">
                <h2>Penggunaan Data</h2>
                <p>Kami menggunakan data yang dikumpulkan untuk berbagai tujuan:</p>
                <ul>
                    <li>Menyediakan dan memelihara layanan kami</li>
                    <li>Memberitahu Anda tentang perubahan layanan kami</li>
                    <li>Memungkinkan partisipasi Anda dalam fitur interaktif layanan kami</li>
                    <li>Memberikan dukungan pelanggan</li>
                    <li>Mengumpulkan analisis atau informasi berharga sehingga kami dapat meningkatkan layanan kami</li>
                    <li>Memantau penggunaan layanan kami</li>
                    <li>Mendeteksi, mencegah, dan mengatasi masalah teknis</li>
                </ul>
            </div>

            <div class="section">
                <h2>Transfer Data</h2>
                <p>Informasi Anda, termasuk Data Pribadi, dapat ditransfer ke — dan dipelihara di — komputer yang berada di luar yurisdiksi negara, provinsi, negara bagian, atau pemerintah lainnya di mana undang-undang perlindungan data mungkin berbeda dari yurisdiksi Anda.</p>
                <p>Jika Anda berada di luar Indonesia dan memilih untuk memberikan informasi kepada kami, harap dicatat bahwa kami mentransfer data, termasuk Data Pribadi, ke Indonesia dan memprosesnya di sana.</p>
                <p>Persetujuan Anda terhadap Kebijakan Privasi ini diikuti dengan pengiriman informasi tersebut merupakan persetujuan Anda untuk transfer tersebut.</p>
            </div>

            <div class="section">
                <h2>Keamanan Data</h2>
                <p>Keamanan data Anda penting bagi kami, tetapi ingat bahwa tidak ada metode transmisi melalui Internet atau metode penyimpanan elektronik yang 100% aman. Meskipun kami berusaha untuk menggunakan cara yang dapat diterima secara komersial untuk melindungi Data Pribadi Anda, kami tidak dapat menjamin keamanan mutlaknya.</p>
                <p>Kami menerapkan langkah-langkah teknis dan organisasi yang sesuai untuk melindungi informasi pribadi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah.</p>
            </div>

            <div class="section">
                <h2>Perubahan pada Kebijakan Privasi Ini</h2>
                <p>Kami dapat memperbarui Kebijakan Privasi kami dari waktu ke waktu. Kami akan memberi tahu Anda tentang perubahan apa pun dengan memposting Kebijakan Privasi baru di halaman ini.</p>
                <p>Kami akan memberi tahu Anda melalui email dan/atau pemberitahuan yang jelas di Layanan kami, sebelum perubahan menjadi efektif dan memperbarui tanggal "Terakhir diperbarui" di bagian atas Kebijakan Privasi ini.</p>
                <p>Anda disarankan untuk meninjau Kebijakan Privasi ini secara berkala untuk setiap perubahan. Perubahan pada Kebijakan Privasi ini berlaku efektif ketika diposting di halaman ini.</p>
            </div>

            <div class="section">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, silakan hubungi kami:</p>
                <ul>
                    <li>Melalui email: privasi@perusahaan.com</li>
                    <li>Melalui telepon: +62 123 4567 890</li>
                    <li>Melalui pos: Jl. Contoh No. 123, Jakarta, Indonesia</li>
                </ul>
            </div>

            <div class="last-updated">
                Dokumen ini terakhir diperbarui pada 1 Juni 2023
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