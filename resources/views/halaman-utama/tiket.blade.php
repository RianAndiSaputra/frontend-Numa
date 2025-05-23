<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Saya - SkyBooking</title>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 375px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            padding: 50px 20px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
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
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            flex: 1;
        }

        .header-title h1 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        /* Tab Navigation */
        .tabs {
            display: flex;
            background: white;
            padding: 0 20px;
            border-bottom: 1px solid #e9ecef;
            position: sticky;
            top: 110px;
            z-index: 99;
        }

        .tab {
            padding: 15px 0;
            margin-right: 25px;
            font-size: 14px;
            font-weight: 500;
            color: #6c757d;
            cursor: pointer;
            position: relative;
        }

        .tab.active {
            color: #8B0000;
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: #8B0000;
        }

        /* Ticket Content */
        .ticket-content {
            padding: 20px;
            padding-bottom: 100px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
        }

        .empty-icon {
            width: 80px;
            height: 80px;
            background: #f1f1f1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #6c757d;
        }

        .empty-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .empty-text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        /* Ticket Card */
        .ticket-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid #f1f1f1;
            position: relative;
            overflow: hidden;
        }

        .ticket-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-active {
            background: #d4edda;
            color: #155724;
        }

        .badge-used {
            background: #f8d7da;
            color: #721c24;
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #e9ecef;
        }

        .ticket-airline {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .airline-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #8B0000, #A0001C);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }

        .airline-name {
            font-size: 15px;
            font-weight: 600;
        }

        .ticket-price {
            font-size: 16px;
            font-weight: 700;
            color: #8B0000;
        }

        .ticket-route {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .departure, .arrival {
            flex: 1;
        }

        .time {
            font-size: 18px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .city {
            font-size: 13px;
            color: #6c757d;
            margin-bottom: 2px;
        }

        .airport {
            font-size: 11px;
            color: #adb5bd;
        }

        .flight-path {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
        }

        .duration {
            font-size: 11px;
            color: #6c757d;
            margin-bottom: 8px;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: #e9ecef;
            position: relative;
        }

        .path-line::after {
            content: '';
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
        }

        .stops {
            font-size: 10px;
            color: #8B0000;
            margin-top: 4px;
            font-weight: 500;
        }

        .ticket-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px dashed #e9ecef;
        }

        .ticket-info {
            font-size: 12px;
            color: #6c757d;
        }

        .ticket-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .print-btn {
            background: #e9ecef;
            color: #495057;
        }

        .print-btn:hover {
            background: #dee2e6;
        }

        .detail-btn {
            background: #8B0000;
            color: white;
        }

        .detail-btn:hover {
            background: #A0001C;
        }

        /* Ticket Detail Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            width: 90%;
            max-width: 350px;
            border-radius: 20px;
            padding: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            max-height: 80vh;
            overflow-y: auto;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #f1f1f1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
        }

        .close-btn {
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
        }

        .modal-body {
            padding: 20px;
        }

        .detail-section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #8B0000;
        }

        .section-title i {
            width: 20px;
            height: 20px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 13px;
        }

        .detail-label {
            color: #6c757d;
            flex: 1;
        }

        .detail-value {
            flex: 1;
            text-align: right;
            font-weight: 500;
        }

        .passenger-list {
            margin-top: 10px;
        }

        .passenger-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .passenger-name {
            font-weight: 500;
        }

        .passenger-type {
            color: #6c757d;
            font-size: 12px;
        }

        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid #f1f1f1;
            display: flex;
            justify-content: flex-end;
        }

        .print-full-btn {
            background: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 375px;
            background: white;
            padding: 10px 20px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-around;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #6c757d;
            text-decoration: none;
            font-size: 10px;
            padding: 5px 10px;
        }

        .nav-item.active {
            color: #8B0000;
        }

        .nav-icon {
            margin-bottom: 3px;
        }

        @media (max-width: 375px) {
            .container {
                max-width: 100%;
            }
            
            .bottom-nav {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="header-title">
                    <h1>Tiket Saya</h1>
                </div>
            </div>
        </div>

        <!-- Tab Navigation -->
        <div class="tabs">
            <div class="tab active" data-tab="active">Aktif</div>
            <div class="tab" data-tab="history">Riwayat</div>
        </div>

        <!-- Ticket Content -->
        <div class="ticket-content">
            <!-- Active Tickets -->
            <div id="active-tickets">
                <!-- Ticket Card 1 -->
                <div class="ticket-card">
                    <div class="ticket-badge badge-active">
                        <i data-lucide="check-circle" width="12" height="12"></i> Aktif
                    </div>
                    <div class="ticket-header">
                        <div class="ticket-airline">
                            <div class="airline-logo">GA</div>
                            <div class="airline-name">Garuda Indonesia</div>
                        </div>
                        <div class="ticket-price">Rp1.350.000</div>
                    </div>

                    <div class="ticket-route">
                        <div class="departure">
                            <div class="time">07:30</div>
                            <div class="city">Jakarta (CGK)</div>
                            <div class="airport">Terminal 3</div>
                        </div>
                        <div class="flight-path">
                            <div class="duration">2j 15m</div>
                            <div class="path-line"></div>
                            <div class="stops">Langsung</div>
                        </div>
                        <div class="arrival">
                            <div class="time">10:45</div>
                            <div class="city">Bali (DPS)</div>
                            <div class="airport">Terminal 1</div>
                        </div>
                    </div>

                    <div class="ticket-footer">
                        <div class="ticket-info">
                            <div>25 Des 2024 • 1 Penumpang</div>
                            <div>Booking ID: GA230125XYZ</div>
                        </div>
                        <div class="ticket-actions">
                            <div class="action-btn print-btn" onclick="printTicket('GA230125XYZ')">
                                <i data-lucide="printer" width="16" height="16"></i>
                            </div>
                            <div class="action-btn detail-btn" onclick="showTicketDetail('GA230125XYZ')">
                                <i data-lucide="eye" width="16" height="16"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ticket Card 2 -->
                <div class="ticket-card">
                    <div class="ticket-badge badge-active">
                        <i data-lucide="check-circle" width="12" height="12"></i> Aktif
                    </div>
                    <div class="ticket-header">
                        <div class="ticket-airline">
                            <div class="airline-logo">CA</div>
                            <div class="airline-name">Citilink</div>
                        </div>
                        <div class="ticket-price">Rp980.000</div>
                    </div>

                    <div class="ticket-route">
                        <div class="departure">
                            <div class="time">14:20</div>
                            <div class="city">Jakarta (CGK)</div>
                            <div class="airport">Terminal 2</div>
                        </div>
                        <div class="flight-path">
                            <div class="duration">2j 25m</div>
                            <div class="path-line"></div>
                            <div class="stops">Langsung</div>
                        </div>
                        <div class="arrival">
                            <div class="time">17:45</div>
                            <div class="city">Bali (DPS)</div>
                            <div class="airport">Terminal 1</div>
                        </div>
                    </div>

                    <div class="ticket-footer">
                        <div class="ticket-info">
                            <div>28 Des 2024 • 2 Penumpang</div>
                            <div>Booking ID: QG281225ABC</div>
                        </div>
                        <div class="ticket-actions">
                            <div class="action-btn print-btn" onclick="printTicket('QG281225ABC')">
                                <i data-lucide="printer" width="16" height="16"></i>
                            </div>
                            <div class="action-btn detail-btn" onclick="showTicketDetail('QG281225ABC')">
                                <i data-lucide="eye" width="16" height="16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- History Tickets (Hidden by default) -->
            <div id="history-tickets" style="display: none;">
                <!-- Empty State -->
                <div class="empty-state">
                    <div class="empty-icon">
                        <i data-lucide="package" width="24" height="24"></i>
                    </div>
                    <h3 class="empty-title">Tidak ada riwayat tiket</h3>
                    <p class="empty-text">Anda belum memiliki tiket yang telah digunakan</p>
                    <button class="confirm-btn" onclick="location.href='search.html'">
                        <i data-lucide="search" width="16" height="16"></i> Cari Penerbangan
                    </button>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <a href="search.html" class="nav-item">
                <i data-lucide="search" class="nav-icon" width="18" height="18"></i>
                <span>Cari</span>
            </a>
            <a href="tickets.html" class="nav-item active">
                <i data-lucide="ticket" class="nav-icon" width="18" height="18"></i>
                <span>Tiket</span>
            </a>
            <a href="profile.html" class="nav-item">
                <i data-lucide="user" class="nav-icon" width="18" height="18"></i>
                <span>Profil</span>
            </a>
        </div>

        <!-- Ticket Detail Modal -->
        <div class="modal-overlay" id="ticket-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Detail Tiket</h3>
                    <button class="close-btn" onclick="hideTicketDetail()">
                        <i data-lucide="x" width="20" height="20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="detail-section">
                        <div class="section-title">
                            <i data-lucide="info"></i>
                            <span>Informasi Penerbangan</span>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Maskapai</div>
                            <div class="detail-value">Garuda Indonesia</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Nomor Penerbangan</div>
                            <div class="detail-value">GA 410</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Tanggal</div>
                            <div class="detail-value">25 Desember 2024</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Waktu</div>
                            <div class="detail-value">07:30 - 10:45 (2j 15m)</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Rute</div>
                            <div class="detail-value">Jakarta (CGK) → Bali (DPS)</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Kelas</div>
                            <div class="detail-value">Ekonomi</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Bagasi</div>
                            <div class="detail-value">20kg</div>
                        </div>
                    </div>

                    <div class="detail-section">
                        <div class="section-title">
                            <i data-lucide="users"></i>
                            <span>Penumpang</span>
                        </div>
                        <div class="passenger-list">
                            <div class="passenger-item">
                                <div>
                                    <div class="passenger-name">John Doe</div>
                                    <div class="passenger-type">Dewasa</div>
                                </div>
                                <div>
                                    <div class="detail-value">GA410-25DEC-1A</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="detail-section">
                        <div class="section-title">
                            <i data-lucide="credit-card"></i>
                            <span>Pembayaran</span>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Metode Pembayaran</div>
                            <div class="detail-value">GV Payment</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Total Pembayaran</div>
                            <div class="detail-value">Rp1.350.000</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Status</div>
                            <div class="detail-value">Terkonfirmasi</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Booking ID</div>
                            <div class="detail-value">GA230125XYZ</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="print-full-btn" onclick="printTicket('GA230125XYZ')">
                        <i data-lucide="printer" width="16" height="16"></i> Cetak Tiket
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // Function to go back
        function goBack() {
            window.history.back();
        }

        // Function to switch tabs
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Hide all ticket sections
                document.getElementById('active-tickets').style.display = 'none';
                document.getElementById('history-tickets').style.display = 'none';
                
                // Show selected ticket section
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-tickets`).style.display = 'block';
            });
        });

        // Function to show ticket detail modal
        function showTicketDetail(ticketId) {
            // In a real app, you would fetch ticket details based on ticketId
            document.getElementById('ticket-modal').classList.add('active');
        }

        // Function to hide ticket detail modal
        function hideTicketDetail() {
            document.getElementById('ticket-modal').classList.remove('active');
        }

        // Function to print ticket
        function printTicket(ticketId) {
            // In a real app, this would open a print dialog with ticket details
            alert(`Mencetak tiket dengan ID: ${ticketId}`);
            // window.open(`print-ticket.html?id=${ticketId}`, '_blank');
        }

        // Close modal when clicking outside
        document.getElementById('ticket-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideTicketDetail();
            }
        });
    </script>
</body>
</html>