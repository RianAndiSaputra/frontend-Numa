<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Numa</title>
    <link href="https://unpkg.com/lucide@latest/dist/lucide.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --bg-gray: #e9ecef;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --shadow-hover: 0 8px 25px rgba(0,0,0,0.15);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-gray) 100%);
            min-height: 100vh;
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 50px 20px 30px;
            border-radius: 0 0 25px 25px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
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
            transition: var(--transition);
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            flex: 1;
            text-align: center;
        }

        .header-title h1 {
            font-size: clamp(18px, 4vw, 20px);
            font-weight: 600;
            margin-bottom: 2px;
        }

        /* Tab Navigation */
        .tabs {
            display: flex;
            background: var(--white);
            padding: 0 20px;
            border-bottom: 1px solid var(--bg-gray);
            position: sticky;
            top: 110px;
            z-index: 99;
        }

        .tab {
            padding: 15px 0;
            margin-right: 25px;
            font-size: clamp(13px, 3vw, 14px);
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            position: relative;
        }

        .tab.active {
            color: var(--primary-color);
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--primary-color);
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
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--text-light);
        }

        .empty-title {
            font-size: clamp(15px, 3.5vw, 16px);
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .empty-text {
            font-size: clamp(13px, 3vw, 14px);
            color: var(--text-light);
            margin-bottom: 20px;
        }

        /* Ticket Card */
        .ticket-card {
            background: var(--white);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .ticket-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .ticket-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: clamp(10px, 2.5vw, 11px);
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
            align-items: flex-start;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed var(--bg-gray);
        }

        .ticket-airline {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .airline-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }

        .airline-name {
            font-size: clamp(14px, 3vw, 15px);
            font-weight: 600;
        }

        .ticket-price {
            font-size: clamp(15px, 3.5vw, 16px);
            font-weight: 700;
            color: var(--primary-color);
            margin-top: 5px;
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
            font-size: clamp(16px, 3.5vw, 18px);
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 4px;
        }

        .city {
            font-size: clamp(12px, 2.5vw, 13px);
            color: var(--text-light);
            margin-bottom: 2px;
        }

        .airport {
            font-size: clamp(10px, 2.5vw, 11px);
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
            font-size: clamp(10px, 2.5vw, 11px);
            color: var(--text-light);
            margin-bottom: 8px;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: var(--bg-gray);
            position: relative;
        }

        .stops {
            font-size: clamp(9px, 2.5vw, 10px);
            color: var(--primary-color);
            margin-top: 4px;
            font-weight: 500;
        }

        .ticket-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px dashed var(--bg-gray);
        }

        .ticket-info {
            font-size: clamp(11px, 2.5vw, 12px);
            color: var(--text-light);
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
            transition: var(--transition);
        }

        .print-btn {
            background: var(--bg-light);
            color: var(--text-dark);
        }

        .print-btn:hover {
            background: #dee2e6;
        }

        .detail-btn {
            background: var(--primary-color);
            color: white;
        }

        .detail-btn:hover {
            background: var(--secondary-color);
        }

        /* Bottom Navigation - Improved */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background: var(--white);
            padding: 12px 20px;
            border-top: 1px solid var(--bg-gray);
            box-shadow: var(--shadow-md);
            z-index: 10;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            padding: 5px 10px;
            border-radius: 8px;
            text-decoration: none;
            color: inherit;
        }

        .nav-item.active {
            color: var(--primary-color);
        }

        .nav-item.active .nav-icon {
            background: var(--primary-color);
            color: var(--white);
        }

        .nav-item.active .nav-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-icon {
            width: 38px;
            height: 38px;
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            transition: var(--transition);
        }

        .nav-label {
            font-size: 11px;
            color: var(--text-light);
            font-weight: 500;
            transition: var(--transition);
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
            transition: var(--transition);
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
            transition: var(--transition);
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: var(--shadow);
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid var(--bg-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 1;
        }

        .modal-title {
            font-size: clamp(16px, 3.5vw, 18px);
            font-weight: 600;
        }

        .close-btn {
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            padding: 5px;
            border-radius: 50%;
            transition: var(--transition);
        }

        .close-btn:hover {
            background: var(--bg-light);
        }

        .modal-body {
            padding: 20px;
        }

        .detail-section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: clamp(13px, 3vw, 14px);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: clamp(12px, 2.5vw, 13px);
        }

        .detail-label {
            color: var(--text-light);
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
            border-bottom: 1px solid var(--bg-gray);
        }

        .passenger-name {
            font-weight: 500;
            font-size: clamp(13px, 3vw, 14px);
        }

        .passenger-type {
            color: var(--text-light);
            font-size: clamp(11px, 2.5vw, 12px);
        }

        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid var(--bg-gray);
            display: flex;
            justify-content: flex-end;
            position: sticky;
            bottom: 0;
            background: white;
        }

        .print-full-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: clamp(13px, 3vw, 14px);
            transition: var(--transition);
            box-shadow: 0 4px 10px rgba(139, 0, 0, 0.2);
        }

        .print-full-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(139, 0, 0, 0.3);
        }

        /* Download Button Style */
        .download-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: clamp(13px, 3vw, 14px);
            transition: var(--transition);
            margin-top: 15px;
            width: 100%;
            justify-content: center;
        }

        .download-btn:hover {
            background: linear-gradient(135deg, var(--secondary-color), #B00020);
        }

        /* Responsive adjustments */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
            }
            
            .ticket-content {
                padding: 25px;
            }
        }

        /* Animation for better interactivity */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .ticket-card {
            animation: fadeIn 0.5s ease-out;
        }

        .ticket-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .ticket-card:nth-child(2) {
            animation-delay: 0.15s;
        }

        .empty-state {
            animation: fadeIn 0.5s ease-out;
            animation-delay: 0.1s;
        }

        /* New styles for price positioning */
        .ticket-price-container {
            margin-top: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                    </svg>
                </button>
                <div class="header-title">
                    <h1>Tiket Saya</h1>
                </div>
                <div style="width: 40px;"></div> <!-- Spacer for balance -->
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
                        <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24" style="margin-right: 4px;">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Aktif
                    </div>
                    <div class="ticket-header">
                        <div class="ticket-airline">
                            <div class="airline-logo">GA</div>
                            <div class="airline-name">Garuda Indonesia</div>
                        </div>
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

                    <div class="ticket-price-container">
                        <div class="ticket-price">Rp1.350.000</div>
                    </div>

                    <div class="ticket-footer">
                        <div class="ticket-info">
                            <div>25 Des 2024 • 1 Penumpang</div>
                            <div>Booking ID: GA230125XYZ</div>
                        </div>
                        <div class="ticket-actions">
                            <div class="action-btn print-btn" onclick="downloadTicket('GA230125XYZ')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                            </div>
                            <div class="action-btn detail-btn" onclick="showTicketDetail('GA230125XYZ')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ticket Card 2 -->
                <div class="ticket-card">
                    <div class="ticket-badge badge-active">
                        <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24" style="margin-right: 4px;">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Aktif
                    </div>
                    <div class="ticket-header">
                        <div class="ticket-airline">
                            <div class="airline-logo">CA</div>
                            <div class="airline-name">Citilink</div>
                        </div>
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

                    <div class="ticket-price-container">
                        <div class="ticket-price">Rp980.000</div>
                    </div>

                    <div class="ticket-footer">
                        <div class="ticket-info">
                            <div>28 Des 2024 • 2 Penumpang</div>
                            <div>Booking ID: QG281225ABC</div>
                        </div>
                        <div class="ticket-actions">
                            <div class="action-btn print-btn" onclick="downloadTicket('QG281225ABC')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                                </svg>
                            </div>
                            <div class="action-btn detail-btn" onclick="showTicketDetail('QG281225ABC')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
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
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.9 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 12 7.4l3.38 4.6L17 10.83 14.92 8H20v6z"/>
                        </svg>
                    </div>
                    <h3 class="empty-title">Tidak ada riwayat tiket</h3>
                    <p class="empty-text">Anda belum memiliki tiket yang telah digunakan</p>
                    <button class="print-full-btn" onclick="location.href='home'" style="margin: 0 auto;">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="margin-right: 8px;">
                            <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                        Cari Penerbangan
                    </button>
                </div>
            </div>
        </div>

        <!-- Ticket Detail Modal -->
        <div class="modal-overlay" id="ticket-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Detail Tiket</h3>
                    <button class="close-btn" onclick="hideTicketDetail()">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="detail-section">
                        <div class="section-title">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                            </svg>
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
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                            </svg>
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
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
                            </svg>
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
                    <button class="print-full-btn" onclick="downloadTicket('GA230125XYZ')">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="margin-right: 8px;">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                        </svg>
                        Unduh Tiket (PDF)
                    </button>
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="nav-items">
                <a href="/home" class="nav-item">
                    <div class="nav-icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="nav-label">Beranda</div>
                </a>
                <a href="/tiket" class="nav-item active">
                    <div class="nav-icon">
                        <i data-lucide="ticket"></i>
                    </div>
                    <div class="nav-label">Carter</div>
                </a>
                <a href="/profile" class="nav-item">
                    <div class="nav-icon">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="nav-label">Profil</div>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
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

        // Function to download ticket as PDF
        function downloadTicket(ticketId) {
            // In a real app, this would generate/download a PDF ticket
            alert(`Mengunduh tiket PDF dengan ID: ${ticketId}`);
            // You would typically use a PDF generation library here
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