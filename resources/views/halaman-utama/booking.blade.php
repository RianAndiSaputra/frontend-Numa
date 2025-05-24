<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan - SkyBooking</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .header-subtitle {
            font-size: 12px;
            opacity: 0.9;
            margin-top: 5px;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 15px;
            position: relative;
            background: var(--white);
            margin-top: 10px;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 5px;
            border: 2px solid #e9ecef;
            transition: var(--transition);
        }

        .step.active .step-number {
            background: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
        }

        .step.completed .step-number {
            background: #28a745;
            color: var(--white);
            border-color: #28a745;
        }

        .step-text {
            font-size: 10px;
            color: var(--text-light);
            text-align: center;
            max-width: 80px;
            word-break: break-word;
        }

        .step.active .step-text {
            color: var(--primary-color);
            font-weight: 500;
        }

        .progress-line {
            position: absolute;
            top: 35px;
            left: 15%;
            right: 15%;
            height: 2px;
            background: #e9ecef;
            z-index: 1;
        }

        .progress-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 50%;
            background: var(--primary-color);
            transition: var(--transition);
        }

        /* Flight Summary */
        .flight-summary {
            background: var(--white);
            border-radius: 12px;
            margin: 15px;
            padding: 16px;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px dashed #e9ecef;
        }

        .summary-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .edit-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 12px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .flight-detail {
            display: flex;
            margin-bottom: 15px;
        }

        .airline-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
            margin-right: 12px;
        }

        .flight-info {
            flex: 1;
        }

        .airline-name {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .flight-number {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 10px;
        }

        .flight-route {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .route-segment {
            flex: 1;
        }

        .time {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .date {
            font-size: 12px;
            color: var(--text-light);
            margin: 3px 0;
        }

        .airport {
            font-size: 12px;
            color: #adb5bd;
        }

        .flight-duration {
            text-align: center;
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .duration {
            font-size: 12px;
            color: var(--text-light);
            white-space: nowrap;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: #e9ecef;
            position: relative;
            margin: 5px 0;
        }

        .path-line::after {
            content: '✈️';
            position: absolute;
            top: -8px;
            right: -8px;
            font-size: 12px;
        }

        /* Form Sections */
        .form-section {
            padding: 15px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title .icon {
            width: 24px;
            height: 24px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            transition: var(--transition);
            background: var(--white);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            gap: 10px;
        }

        .form-col {
            flex: 1;
        }

        .select-wrapper {
            position: relative;
        }

        .select-wrapper::after {
            content: '⌄';
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: var(--text-light);
            pointer-events: none;
        }

        .form-select {
            appearance: none;
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            background-color: var(--white);
        }

        /* Contact Info */
        .contact-info {
            background: var(--bg-light);
            border-radius: 12px;
            padding: 16px;
            margin: 15px;
        }

        .info-note {
            font-size: 12px;
            color: var(--text-light);
            margin-top: 10px;
            line-height: 1.5;
        }

        /* Baggage Selection */
        .baggage-options {
            margin-top: 10px;
        }

        .option-card {
            display: flex;
            align-items: center;
            padding: 12px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            margin-bottom: 8px;
            cursor: pointer;
            transition: var(--transition);
            background: var(--white);
        }

        .option-card:hover {
            border-color: var(--primary-color);
        }

        .option-card.selected {
            border-color: var(--primary-color);
            background: rgba(139, 0, 0, 0.03);
        }

        .option-radio {
            margin-right: 12px;
            accent-color: var(--primary-color);
            width: 16px;
            height: 16px;
        }

        .option-details {
            flex: 1;
        }

        .option-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .option-desc {
            font-size: 12px;
            color: var(--text-light);
        }

        .option-price {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-color);
            margin-left: 12px;
        }

        /* Insurance Toggle */
        .insurance-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            background: var(--bg-light);
            border-radius: 8px;
            margin-top: 15px;
        }

        .toggle-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toggle-icon {
            width: 30px;
            height: 30px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
        }

        .toggle-text h4 {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .toggle-text p {
            font-size: 12px;
            color: var(--text-light);
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: var(--transition);
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: var(--transition);
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: var(--primary-color);
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Price Summary */
        .price-summary {
            background: var(--white);
            border-radius: 12px;
            margin: 15px;
            padding: 16px;
            box-shadow: var(--shadow-sm);
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .price-label {
            font-size: 14px;
            color: var(--text-light);
        }

        .price-value {
            font-size: 14px;
            font-weight: 500;
        }

        .price-total {
            border-top: 1px dashed #e9ecef;
            margin-top: 10px;
            padding-top: 10px;
            font-weight: 700;
        }

        .price-total .price-value {
            font-size: 18px;
            color: var(--primary-color);
        }

        /* Passenger List */
        .passenger-list {
            margin-bottom: 15px;
        }

        .passenger-item {
            background: var(--bg-light);
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 8px;
            position: relative;
        }

        .passenger-name {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .passenger-details {
            font-size: 12px;
            color: var(--text-light);
        }

        .remove-passenger {
            position: absolute;
            top: 8px;
            right: 8px;
            background: none;
            border: none;
            color: #dc3545;
            font-size: 14px;
            cursor: pointer;
        }

        .add-passenger-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 12px;
            background: var(--bg-light);
            border: 1px dashed #adb5bd;
            border-radius: 8px;
            color: var(--primary-color);
            font-weight: 500;
            cursor: pointer;
            margin-top: 8px;
            font-size: 14px;
            transition: var(--transition);
        }

        .add-passenger-btn:hover {
            background: #e9ecef;
        }

        /* Bottom Action */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: var(--white);
            padding: 15px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-sizing: border-box;
        }

        .total-price {
            display: flex;
            flex-direction: column;
            flex: 1;
            max-width: calc(100% - 150px);
        }

        .total-label {
            font-size: 12px;
            color: var(--text-light);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .total-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pay-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            min-width: 120px;
            flex-shrink: 0;
        }

        .pay-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139,0,0,0.3);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: var(--white);
            width: 90%;
            max-width: 400px;
            border-radius: 12px;
            padding: 16px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: var(--shadow-lg);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: var(--text-light);
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
        }

        .btn-secondary {
            background: var(--bg-light);
            border: 1px solid #e9ecef;
            color: var(--text-dark);
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
        }

        /* Responsive Adjustments */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                position: relative;
            }
            
            .bottom-action {
                left: 50%;
                transform: translateX(-50%);
                max-width: 500px;
                border-radius: 12px 12px 0 0;
            }
            
            .total-price {
                max-width: none;
            }
            
            .flight-summary,
            .contact-info,
            .price-summary {
                margin: 20px;
                padding: 18px;
            }
            
            .form-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="main-header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="header-title">
                    Detail Pemesanan
                    <div class="header-subtitle">Isi data penumpang dan pembayaran</div>
                </div>
                <div style="width: 40px;"></div> <!-- Spacer for alignment -->
            </div>
        </div>

        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="step completed">
                <div class="step-number">1</div>
                <div class="step-text">Penerbangan</div>
            </div>
            <div class="step active">
                <div class="step-number">2</div>
                <div class="step-text">Data Diri</div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-text">Pembayaran</div>
            </div>
            <div class="progress-line">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- Flight Summary -->
        <div class="flight-summary">
            <div class="summary-header">
                <div class="summary-title">Penerbangan Anda</div>
                <button class="edit-btn" onclick="editFlight()">
                    <i data-lucide="pencil"></i>
                    Ubah
                </button>
            </div>
            <div class="flight-detail">
                <div class="airline-logo">GA</div>
                <div class="flight-info">
                    <div class="airline-name">Garuda Indonesia</div>
                    <div class="flight-number">GA 410 • Ekonomi</div>
                    <div class="flight-route">
                        <div class="route-segment">
                            <div class="time">07:30</div>
                            <div class="date">Rab, 25 Des 2024</div>
                            <div class="airport">CGK - Jakarta</div>
                        </div>
                        <div class="flight-duration">
                            <div class="duration">2j 15m</div>
                            <div class="path-line"></div>
                            <div class="stops">Langsung</div>
                        </div>
                        <div class="route-segment" style="text-align: right;">
                            <div class="time">10:45</div>
                            <div class="date">Rab, 25 Des 2024</div>
                            <div class="airport">DPS - Bali</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passenger Form -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">1</div>
                <span>Data Penumpang</span>
            </div>
            
            <div class="passenger-list" id="passengerList">
                <!-- Passenger items will be added here dynamically -->
            </div>
            
            <button class="add-passenger-btn" onclick="openAddPassengerModal()">
                <i data-lucide="user-plus"></i>
                Tambah Penumpang
            </button>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-title">
                <div class="icon">2</div>
                <span>Kontak Informasi</span>
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@contoh.com">
            </div>
            
            <div class="form-group">
                <label class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" placeholder="+62 812-3456-7890">
            </div>
            
            <p class="info-note">
                Tiket elektronik dan detail pemesanan akan dikirim ke alamat email dan nomor telepon ini.
                Pastikan data yang dimasukkan benar.
            </p>
        </div>

        <!-- Baggage Selection -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">3</div>
                <span>Tambahan Bagasi</span>
            </div>
            
            <div class="baggage-options">
                <div class="option-card selected">
                    <input type="radio" name="baggage" class="option-radio" checked>
                    <div class="option-details">
                        <div class="option-title">Bagasi Standar</div>
                        <div class="option-desc">Termasuk 20kg bagasi kabin + 7kg bagasi tangan</div>
                    </div>
                    <div class="option-price">Gratis</div>
                </div>
                
                <div class="option-card">
                    <input type="radio" name="baggage" class="option-radio">
                    <div class="option-details">
                        <div class="option-title">Ekstra 10kg</div>
                        <div class="option-desc">Tambahan 10kg bagasi kabin</div>
                    </div>
                    <div class="option-price">Rp150.000</div>
                </div>
                
                <div class="option-card">
                    <input type="radio" name="baggage" class="option-radio">
                    <div class="option-details">
                        <div class="option-title">Ekstra 20kg</div>
                        <div class="option-desc">Tambahan 20kg bagasi kabin</div>
                    </div>
                    <div class="option-price">Rp250.000</div>
                </div>
            </div>
        </div>

        <!-- Travel Insurance -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">4</div>
                <span>Asuransi Perjalanan</span>
            </div>
            
            <div class="insurance-toggle">
                <div class="toggle-info">
                    <div class="toggle-icon">
                        <i data-lucide="shield-alert"></i>
                    </div>
                    <div class="toggle-text">
                        <h4>Asuransi Perjalanan</h4>
                        <p>Proteksi selama perjalanan Anda</p>
                    </div>
                </div>
                <label class="toggle-switch">
                    <input type="checkbox" id="insuranceToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </div>

        <!-- Price Summary -->
        <div class="price-summary">
            <div class="section-title">
                <div class="icon">5</div>
                <span>Ringkasan Harga</span>
            </div>
            
            <div class="price-row">
                <div class="price-label">Harga Tiket (1 orang)</div>
                <div class="price-value">Rp1.250.000</div>
            </div>
            
            <div class="price-row">
                <div class="price-label">Biaya Layanan</div>
                <div class="price-value">Rp25.000</div>
            </div>
            
            <div class="price-row">
                <div class="price-label">Pajak Bandara</div>
                <div class="price-value">Rp75.000</div>
            </div>
            
            <div class="price-row price-total">
                <div class="price-label">Total Pembayaran</div>
                <div class="price-value">Rp1.350.000</div>
            </div>
        </div>

        <!-- Bottom Action -->
        <div class="bottom-action">
            <div class="total-price">
                <div class="total-label">Total Pembayaran</div>
                <div class="total-value">Rp1.350.000</div>
            </div>
            <button class="pay-btn" onclick="proceedToPayment()">Bayar Sekarang</button>
        </div>
    </div>

    <!-- Add Passenger Modal -->
    <div class="modal" id="addPassengerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Penumpang</h3>
                <button class="close-modal" onclick="closeModal()">
                    <i data-lucide="x"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label class="form-label">Titel</label>
                <div class="select-wrapper">
                    <select class="form-select" id="passengerTitle">
                        <option value="">Pilih titel</option>
                        <option value="Tn">Tn.</option>
                        <option value="Ny">Ny.</option>
                        <option value="Nn">Nn.</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="passengerName" placeholder="Nama lengkap">
            </div>
            
            <div class="form-group">
                <label class="form-label">Jenis Kelamin</label>
                <div class="select-wrapper">
                    <select class="form-select" id="passengerGender">
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Nomor Paspor/KTP</label>
                <input type="text" class="form-control" id="passengerId" placeholder="Masukkan nomor ID">
            </div>
            
            <div class="form-group">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="passengerDob">
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal()">Batal</button>
                <button class="btn btn-primary" onclick="addPassenger()">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }

        // Fungsi untuk mengubah penerbangan
        function editFlight() {
            if(confirm('Anda yakin ingin mengubah penerbangan?')) {
                window.location.href = 'flight-results.html';
            }
        }

        // Fungsi untuk melanjutkan ke pembayaran
        function proceedToPayment() {
            // Validasi form sebelum melanjutkan
            if(validateForm()) {
                window.location.href = '/payment';
            }
        }

        // Fungsi validasi form
        function validateForm() {
            const passengerList = document.getElementById('passengerList').children;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            
            if(passengerList.length === 0) {
                alert('Harap tambahkan minimal 1 penumpang!');
                return false;
            }
            
            if(!email || !phone) {
                alert('Harap lengkapi semua data yang diperlukan!');
                return false;
            }
            
            if(!validateEmail(email)) {
                alert('Format email tidak valid!');
                return false;
            }
            
            return true;
        }

        // Fungsi validasi email
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Toggle untuk pilihan bagasi
        document.querySelectorAll('.option-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                this.querySelector('input').checked = true;
                updatePriceSummary();
            });
        });

        // Toggle untuk asuransi
        document.getElementById('insuranceToggle').addEventListener('change', function() {
            updatePriceSummary();
        });

        // Fungsi untuk update ringkasan harga
        function updatePriceSummary() {
            // Implementasi update harga berdasarkan pilihan
            // Ini adalah contoh sederhana, Anda perlu menyesuaikan dengan logika bisnis Anda
            
            const basePrice = 1250000;
            let total = basePrice;
            
            // Tambahan bagasi
            const selectedBaggage = document.querySelector('.option-card.selected .option-price').textContent;
            if(selectedBaggage.includes('150.000')) {
                total += 150000;
            } else if(selectedBaggage.includes('250.000')) {
                total += 250000;
            }
            
            // Asuransi
            if(document.getElementById('insuranceToggle').checked) {
                total += 100000; // Contoh biaya asuransi
            }
            
            // Update tampilan
            document.querySelector('.price-total .price-value').textContent = formatCurrency(total);
            document.querySelector('.total-value').textContent = formatCurrency(total);
        }

        // Format mata uang
        function formatCurrency(amount) {
            return 'Rp' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Fungsi untuk modal penumpang
        function openAddPassengerModal() {
            document.getElementById('addPassengerModal').style.display = 'flex';
            // Refresh icons in modal
            lucide.createIcons();
        }

        function closeModal() {
            document.getElementById('addPassengerModal').style.display = 'none';
            // Reset form
            document.getElementById('passengerTitle').value = '';
            document.getElementById('passengerName').value = '';
            document.getElementById('passengerGender').value = '';
            document.getElementById('passengerId').value = '';
            document.getElementById('passengerDob').value = '';
        }

        function addPassenger() {
            const title = document.getElementById('passengerTitle').value;
            const name = document.getElementById('passengerName').value;
            const gender = document.getElementById('passengerGender').value;
            const id = document.getElementById('passengerId').value;
            const dob = document.getElementById('passengerDob').value;
            
            if(!title || !name || !gender || !id || !dob) {
                alert('Harap lengkapi semua data penumpang!');
                return;
            }
            
            // Format tanggal lahir untuk tampilan
            const dobDate = new Date(dob);
            const formattedDob = dobDate.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            
            // Buat elemen penumpang baru
            const passengerItem = document.createElement('div');
            passengerItem.className = 'passenger-item';
            passengerItem.innerHTML = `
                <button class="remove-passenger" onclick="removePassenger(this)">
                    <i data-lucide="x"></i>
                </button>
                <div class="passenger-name">${title} ${name}</div>
                <div class="passenger-details">
                    <div>${gender} • ${formattedDob}</div>
                    <div>ID: ${id}</div>
                </div>
            `;
            
            // Tambahkan ke daftar penumpang
            document.getElementById('passengerList').appendChild(passengerItem);
            
            // Refresh icons in new passenger item
            lucide.createIcons();
            
            // Tutup modal
            closeModal();
            
            // Update ringkasan harga
            updatePriceSummary();
        }

        function removePassenger(button) {
            if(confirm('Hapus penumpang ini?')) {
                button.parentElement.remove();
                updatePriceSummary();
            }
        }

        // Tutup modal saat klik di luar konten modal
        window.onclick = function(event) {
            const modal = document.getElementById('addPassengerModal');
            if(event.target === modal) {
                closeModal();
            }
        }

        // Inisialisasi data pertama kali
        updatePriceSummary();
    </script>
</body>
</html>