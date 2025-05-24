<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link href="https://unpkg.com/lucide@latest/dist/lucide.min.css" rel="stylesheet">
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
        .main-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 60px 20px 30px;
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-md);
        }

        .main-header::after {
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

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .back-btn {
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
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            font-size: 20px;
            font-weight: 600;
            flex: 1;
            text-align: center;
        }

        .filter-tabs {
            display: flex;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 4px;
            margin-top: 10px;
            position: relative;
            z-index: 2;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 8px;
            font-size: 13px;
            border-radius: 16px;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab.active {
            background: var(--white);
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Notification Content */
        .notification-content {
            padding: 30px 15px 15px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }

        .date-group {
            margin-bottom: 25px;
        }

        .date-label {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .date-label::before, .date-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }

        .notification-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Notification Item */
        .notification-item {
            background: var(--white);
            border-radius: 12px;
            padding: 16px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border-left: 4px solid transparent;
            position: relative;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .notification-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .notification-item.unread {
            border-left-color: var(--primary-color);
            background: rgba(139, 0, 0, 0.03);
        }

        .notification-item.important {
            border-left-color: var(--accent-color);
        }

        .notification-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 8px;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .notification-icon i {
            font-size: 18px;
        }

        .notification-icon.booking {
            color: var(--primary-color);
            background: rgba(139, 0, 0, 0.1);
        }

        .notification-icon.payment {
            color: #28a745;
            background: rgba(40, 167, 69, 0.1);
        }

        .notification-icon.warning {
            color: #ffc107;
            background: rgba(255, 193, 7, 0.1);
        }

        .notification-icon.alert {
            color: var(--accent-color);
            background: rgba(255, 107, 107, 0.1);
        }

        .notification-title {
            font-weight: 600;
            margin-bottom: 4px;
            flex: 1;
        }

        .notification-time {
            font-size: 12px;
            color: var(--text-light);
            margin-left: 8px;
            white-space: nowrap;
        }

        .notification-message {
            font-size: 14px;
            color: var(--text-dark);
            margin-left: 52px;
            margin-bottom: 12px;
        }

        .notification-detail {
            font-size: 13px;
            color: var(--text-light);
            margin-left: 52px;
            margin-bottom: 15px;
            padding: 10px;
            background: var(--bg-light);
            border-radius: 8px;
            border-left: 3px solid var(--primary-color);
        }

        .notification-actions {
            display: flex;
            gap: 10px;
            margin-left: 52px;
        }

        .action-btn {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .primary-btn {
            background: var(--primary-color);
            color: white;
        }

        .primary-btn:hover {
            background: #7a0000;
        }

        .secondary-btn {
            background: var(--bg-light);
            color: var(--text-dark);
        }

        .outline-btn {
            background: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .outline-btn:hover {
            background: rgba(139, 0, 0, 0.05);
        }

        .badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
        }

        .read-indicator {
            position: absolute;
            top: 16px;
            left: 16px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        /* Responsive */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                min-height: 100vh;
            }
            
            .notification-content {
                padding: 30px 20px 20px;
            }
            
            .notification-item {
                padding: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Main Header -->
        <div class="main-header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="header-title">Notifikasi</div>
                <div style="width: 40px;"></div>
            </div>
            <div class="filter-tabs">
                <div class="tab active">Semua</div>
                <div class="tab">Belum Dibaca</div>
                <div class="tab">Penting</div>
            </div>
        </div>

        <!-- Notification Content -->
        <div class="notification-content">
            <!-- Today -->
            <div class="date-group">
                <div class="date-label">Hari Ini</div>
                <div class="notification-list">
                    <!-- Shared Charter Notification -->
                    <div class="notification-item unread important" onclick="viewNotification('shared')">
                        <div class="read-indicator"></div>
                        <div class="notification-header">
                            <div class="notification-icon alert">
                                <i data-lucide="alert-circle"></i>
                            </div>
                            <div class="notification-title">Konfirmasi Shared Charter</div>
                            <div class="notification-time">10:30</div>
                        </div>
                        <div class="notification-message">
                            Penerbangan shared charter Anda telah dikonfirmasi. Silakan lanjutkan pembayaran.
                        </div>
                        <div class="notification-detail">
                            <strong>Note:</strong><br>
                            Harga shared charter berlaku selama 6 jam sebelum keberangkatan.<br>
                            Jika sampai dengan 6 jam sebelum keberangkatan masih ada kursi kosong.<br>
                            <br>
                            <strong>Rumus Shared:</strong><br>
                            Harga input ron cost / jumlah penumpang
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn primary-btn" onclick="continuePayment(event, 'shared')">Lanjut Pembayaran</button>
                            <button class="action-btn outline-btn" onclick="cancelBooking(event)">Batalkan</button>
                        </div>
                    </div>

                    <!-- Payment Reminder -->
                    <div class="notification-item unread">
                        <div class="read-indicator"></div>
                        <div class="notification-header">
                            <div class="notification-icon payment">
                                <i data-lucide="credit-card"></i>
                            </div>
                            <div class="notification-title">Pengingat Pembayaran</div>
                            <div class="notification-time">09:15</div>
                        </div>
                        <div class="notification-message">
                            Anda memiliki 1 pembayaran yang belum diselesaikan. Selesaikan sebelum 12:00 WIB hari ini.
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn primary-btn" onclick="continuePayment(event, 'reminder')">Bayar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Yesterday -->
            <div class="date-group">
                <div class="date-label">Kemarin</div>
                <div class="notification-list">
                    <!-- Booking Confirmation -->
                    <div class="notification-item">
                        <div class="notification-header">
                            <div class="notification-icon booking">
                                <i data-lucide="bookmark"></i>
                            </div>
                            <div class="notification-title">Konfirmasi Pemesanan</div>
                            <div class="notification-time">18:45</div>
                        </div>
                        <div class="notification-message">
                            Pemesanan tiket Anda untuk penerbangan CGK-DPS pada 15 Juni 2023 telah berhasil.
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn outline-btn" onclick="viewBooking(event)">Lihat Detail</button>
                        </div>
                    </div>

                    <!-- Promo Notification -->
                    <div class="notification-item">
                        <div class="notification-header">
                            <div class="notification-icon">
                                <i data-lucide="tag"></i>
                            </div>
                            <div class="notification-title">Promo Spesial untuk Anda</div>
                            <div class="notification-time">14:20</div>
                        </div>
                        <div class="notification-message">
                            Dapatkan diskon 20% untuk penerbangan domestik dengan kode promo <strong>TRAVEL20</strong>.
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn primary-btn" onclick="viewPromo(event)">Lihat Promo</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Older -->
            <div class="date-group">
                <div class="date-label">Lebih Lama</div>
                <div class="notification-list">
                    <!-- Flight Update -->
                    <div class="notification-item">
                        <div class="notification-header">
                            <div class="notification-icon warning">
                                <i data-lucide="alert-triangle"></i>
                            </div>
                            <div class="notification-title">Update Penerbangan</div>
                            <div class="notification-time">2 hari lalu</div>
                        </div>
                        <div class="notification-message">
                            Jadwal penerbangan Anda telah berubah. Silakan cek detail penerbangan terbaru.
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn outline-btn" onclick="viewFlightUpdate(event)">Lihat Update</button>
                        </div>
                    </div>

                    <!-- Payment Success -->
                    <div class="notification-item">
                        <div class="notification-header">
                            <div class="notification-icon payment">
                                <i data-lucide="check-circle"></i>
                            </div>
                            <div class="notification-title">Pembayaran Berhasil</div>
                            <div class="notification-time">3 hari lalu</div>
                        </div>
                        <div class="notification-message">
                            Pembayaran untuk pesanan #TRX12345678 telah berhasil diproses.
                        </div>
                        <div class="notification-actions">
                            <button class="action-btn outline-btn" onclick="viewReceipt(event)">Lihat Receipt</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Fungsi untuk menangani notifikasi shared charter
        function viewNotification(type) {
            if (type === 'shared') {
                console.log('Melihat detail notifikasi shared charter');
                // Di sini bisa ditambahkan logika untuk menandai sebagai sudah dibaca
                const item = event.currentTarget;
                item.classList.remove('unread');
                const indicator = item.querySelector('.read-indicator');
                if (indicator) indicator.style.display = 'none';
            }
        }

        // Fungsi untuk melanjutkan pembayaran
        function continuePayment(event, type) {
            event.stopPropagation();
            if (type === 'shared') {
                alert('Mengarahkan ke halaman pembayaran shared charter...');
                window.location.href = '/booking?type=shared';
            } else {
                alert('Mengarahkan ke halaman pembayaran biasa...');
                window.location.href = '/booking';
            }
        }

        // Fungsi untuk membatalkan booking
        function cancelBooking(event) {
            event.stopPropagation();
            if (confirm('Apakah Anda yakin ingin membatalkan pemesanan ini?')) {
                alert('Pemesanan telah dibatalkan');
                // Logika untuk membatalkan booking
                const item = event.closest('.notification-item');
                item.style.opacity = '0.5';
                item.style.pointerEvents = 'none';
            }
        }

        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }

        // Fungsi untuk melihat booking
        function viewBooking(event) {
            event.stopPropagation();
            window.location.href = '/booking/detail';
        }

        // Fungsi untuk melihat promo
        function viewPromo(event) {
            event.stopPropagation();
            window.location.href = '/promo';
        }

        // Fungsi untuk melihat update penerbangan
        function viewFlightUpdate(event) {
            event.stopPropagation();
            window.location.href = '/flight/update';
        }

        // Fungsi untuk melihat receipt
        function viewReceipt(event) {
            event.stopPropagation();
            window.location.href = '/receipt';
        }

        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelector('.tab.active').classList.remove('active');
                this.classList.add('active');
                // Here you would filter notifications based on the selected tab
            });
        });
    </script>
</body>
</html>