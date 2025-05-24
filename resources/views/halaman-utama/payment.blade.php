<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - SkyBooking</title>
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
            width: 75%;
            background: var(--primary-color);
            transition: var(--transition);
        }

        /* Payment Content */
        .payment-content {
            padding: 15px;
            padding-bottom: 120px;
        }

        /* Order Summary */
        .order-summary {
            background: var(--white);
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 15px;
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

        .order-details {
            margin-top: 10px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .detail-label {
            font-size: 13px;
            color: var(--text-light);
        }

        .detail-value {
            font-size: 13px;
            font-weight: 500;
        }

        .divider {
            height: 1px;
            background: #f1f1f1;
            margin: 15px 0;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            margin-top: 10px;
        }

        .total-label {
            font-size: 15px;
        }

        .total-value {
            font-size: 18px;
            color: var(--primary-color);
        }

        /* Payment Methods */
        .payment-methods {
            margin-top: 20px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
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

        /* Payment Method Cards */
        .payment-method-cards {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            overflow-x: auto;
            padding-bottom: 5px;
            scrollbar-width: none;
        }

        .payment-method-cards::-webkit-scrollbar {
            display: none;
        }

        .payment-method-card {
            min-width: 100px;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .payment-method-card.active {
            border-color: var(--primary-color);
            background: rgba(139, 0, 0, 0.03);
        }

        .payment-method-icon {
            width: 36px;
            height: 36px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            color: var(--primary-color);
        }

        .payment-method-name {
            font-size: 12px;
            font-weight: 500;
            text-align: center;
        }

        /* GV Payment Card */
        .gv-payment-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            padding: 16px;
            color: white;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(139, 0, 0, 0.2);
        }

        .gv-payment-card::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 120px;
            height: 120px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .gv-payment-card::after {
            content: '';
            position: absolute;
            bottom: -60px;
            right: -20px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .gv-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .gv-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .gv-details {
            flex: 1;
        }

        .gv-name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .gv-desc {
            font-size: 12px;
            opacity: 0.9;
        }

        .gv-balance {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 8px;
            padding: 12px;
            margin-top: 12px;
            position: relative;
            z-index: 2;
        }

        .balance-label {
            font-size: 12px;
            margin-bottom: 5px;
            opacity: 0.8;
        }

        .balance-amount {
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .refresh-btn {
            background: none;
            border: none;
            color: white;
            margin-left: 8px;
            cursor: pointer;
        }

        /* Payment Form */
        .payment-form {
            margin-top: 15px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
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
            padding-left: 40px;
            background: var(--white);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 40px;
            color: var(--text-light);
        }

        /* Payment Summary */
        .payment-summary {
            background: var(--white);
            border-radius: 12px;
            padding: 16px;
            margin-top: 15px;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .summary-label {
            font-size: 13px;
            color: var(--text-light);
        }

        .summary-value {
            font-size: 13px;
            font-weight: 500;
        }

        .summary-total {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px dashed #e9ecef;
            font-weight: 600;
        }

        .summary-total .summary-value {
            font-size: 16px;
            color: var(--primary-color);
        }

        /* Bottom Action */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background: var(--white);
            padding: 15px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .action-text {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 3px;
        }

        .action-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .confirm-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .confirm-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139,0,0,0.3);
        }

        .confirm-btn:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* PIN Verification Modal */
        .pin-modal-overlay {
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

        .pin-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .pin-modal-content {
            background: var(--white);
            width: 90%;
            max-width: 350px;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transform: translateY(20px);
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
        }

        .pin-modal-overlay.active .pin-modal-content {
            transform: translateY(0);
        }

        .pin-modal-header {
            margin-bottom: 20px;
        }

        .pin-modal-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .pin-modal-subtitle {
            font-size: 14px;
            color: var(--text-light);
        }

        .pin-input-container {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin: 20px 0;
        }

        .pin-input {
            width: 45px;
            height: 45px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
        }

        .pin-input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .pin-modal-footer {
            margin-top: 20px;
        }

        .pin-submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: var(--transition);
        }

        .pin-submit-btn:hover {
            background: var(--secondary-color);
        }

        /* Payment Success Modal */
        .success-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .success-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .success-modal-content {
            background: var(--white);
            width: 90%;
            max-width: 350px;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transform: translateY(20px);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .success-modal-overlay.active .success-modal-content {
            transform: translateY(0);
        }

        .success-modal-icon {
            width: 70px;
            height: 70px;
            background: #d4edda;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: #28a745;
        }

        .confetti {
            position: absolute;
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            opacity: 0;
        }

        .success-modal-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .success-modal-text {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .success-modal-details {
            background: var(--bg-light);
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
            text-align: left;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 13px;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-label {
            color: var(--text-light);
        }

        .detail-value {
            font-weight: 500;
        }

        .success-modal-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: var(--transition);
        }

        .success-modal-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139,0,0,0.3);
        }

        /* Responsive Adjustments */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
            }
            
            .bottom-action {
                left: 50%;
                transform: translateX(-50%);
                border-radius: 12px 12px 0 0;
            }
            
            .order-summary,
            .payment-summary {
                padding: 18px;
                margin: 15px 20px 20px;
            }
            
            .payment-content {
                padding: 20px;
                padding-bottom: 120px;
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
                    Pembayaran
                    <div class="header-subtitle">Selesaikan pembayaran dalam 23:59</div>
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
            <div class="step completed">
                <div class="step-number">2</div>
                <div class="step-text">Data Diri</div>
            </div>
            <div class="step active">
                <div class="step-number">3</div>
                <div class="step-text">Pembayaran</div>
            </div>
            <div class="progress-line">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- Payment Content -->
        <div class="payment-content">
            <!-- Order Summary -->
            <div class="order-summary">
                <div class="summary-header">
                    <div class="summary-title">Ringkasan Pesanan</div>
                </div>
                <div class="order-details">
                    <div class="detail-row">
                        <div class="detail-label">Penerbangan</div>
                        <div class="detail-value">CGK → DPS</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Maskapai</div>
                        <div class="detail-value">Garuda Indonesia</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Tanggal</div>
                        <div class="detail-value">25 Des 2024</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Penumpang</div>
                        <div class="detail-value">1 Dewasa</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Bagasi</div>
                        <div class="detail-value">20kg</div>
                    </div>
                    <div class="divider"></div>
                    <div class="total-row">
                        <div class="total-label">Total Pembayaran</div>
                        <div class="total-value">Rp1.350.000</div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods">
                <div class="section-title">
                    <div class="icon">1</div>
                    <span>Metode Pembayaran</span>
                </div>

                <!-- Payment Method Cards -->
                {{-- <div class="payment-method-cards">
                    <div class="payment-method-card active" onclick="selectPaymentMethod('gv')">
                        <div class="payment-method-icon">
                            <i data-lucide="gift"></i>
                        </div>
                        <div class="payment-method-name">GV Payment</div>
                    </div>
                    <div class="payment-method-card" onclick="selectPaymentMethod('bank')">
                        <div class="payment-method-icon">
                            <i data-lucide="landmark"></i>
                        </div>
                        <div class="payment-method-name">Bank Transfer</div>
                    </div>
                    <div class="payment-method-card" onclick="selectPaymentMethod('cc')">
                        <div class="payment-method-icon">
                            <i data-lucide="credit-card"></i>
                        </div>
                        <div class="payment-method-name">Kartu Kredit</div>
                    </div>
                </div> --}}

                <!-- GV Payment Card -->
                <div class="gv-payment-card" id="gv-payment-section">
                    <div class="gv-header">
                        <div class="gv-icon">
                            <i data-lucide="gift"></i>
                        </div>
                        <div class="gv-details">
                            <div class="gv-name">GV Payment</div>
                            <div class="gv-desc">Bayar menggunakan Gift Voucher</div>
                        </div>
                    </div>
                    <div class="gv-balance">
                        <div class="balance-label">Saldo GV Tersedia</div>
                        <div class="balance-amount">
                            Rp2.500.000
                            <button class="refresh-btn">
                                <i data-lucide="refresh-ccw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- GV Code Input -->
                <div class="payment-form">
                    <div class="form-group">
                        <label class="form-label">Kode GV</label>
                        <i data-lucide="gift" class="input-icon"></i>
                        <input type="text" class="form-control" placeholder="Masukkan kode GV" id="gv-code">
                    </div>
                </div>
            </div>

            <!-- Payment Summary -->
            <div class="payment-summary">
                <div class="section-title">
                    <div class="icon">2</div>
                    <span>Ringkasan Pembayaran</span>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Harga Tiket</div>
                    <div class="summary-value">Rp1.200.000</div>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Pajak & Biaya</div>
                    <div class="summary-value">Rp150.000</div>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Biaya Admin</div>
                    <div class="summary-value">Rp0</div>
                </div>
                <div class="summary-row summary-total">
                    <div class="summary-label">Total Pembayaran</div>
                    <div class="summary-value">Rp1.350.000</div>
                </div>
            </div>
        </div>

        <!-- Bottom Action -->
        <div class="bottom-action">
            <div class="action-left">
                <div class="action-text">Total Pembayaran</div>
                <div class="action-price">Rp1.350.000</div>
            </div>
            <button class="confirm-btn" onclick="verifyPayment()">Bayar Sekarang</button>
        </div>

        <!-- PIN Verification Modal -->
        <div class="pin-modal-overlay" id="pin-modal">
            <div class="pin-modal-content">
                <div class="pin-modal-header">
                    <h3 class="pin-modal-title">Verifikasi Pembayaran</h3>
                    <p class="pin-modal-subtitle">Masukkan PIN GV Anda untuk melanjutkan</p>
                </div>
                <div class="pin-input-container">
                    <input type="password" class="pin-input" maxlength="1" oninput="moveToNext(this)">
                    <input type="password" class="pin-input" maxlength="1" oninput="moveToNext(this)">
                    <input type="password" class="pin-input" maxlength="1" oninput="moveToNext(this)">
                    <input type="password" class="pin-input" maxlength="1" oninput="moveToNext(this)">
                    <input type="password" class="pin-input" maxlength="1" oninput="moveToNext(this)">
                    <input type="password" class="pin-input" maxlength="1">
                </div>
                <div class="pin-modal-footer">
                    <button class="pin-submit-btn" onclick="processPayment()">Verifikasi</button>
                </div>
            </div>
        </div>

        <!-- Payment Success Modal -->
        <div class="success-modal-overlay" id="success-modal">
            <div class="success-modal-content">
                <div class="success-modal-icon">
                    <i data-lucide="check" width="30" height="30"></i>
                </div>
                <h3 class="success-modal-title">Pembayaran Berhasil!</h3>
                <p class="success-modal-text">Pembayaran Anda telah berhasil diproses menggunakan GV Payment. Tiket penerbangan akan dikirimkan ke email Anda.</p>
                
                <div class="success-modal-details">
                    <div class="detail-item">
                        <span class="detail-label">Kode Booking</span>
                        <span class="detail-value">SKB78945612</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Jumlah</span>
                        <span class="detail-value">Rp1.350.000</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Tanggal</span>
                        <span class="detail-value">25 Des 2024</span>
                    </div>
                </div>
                
                <button class="success-modal-btn" onclick="hideSuccessModal()">Lihat Tiket Saya</button>
                
                <!-- Confetti elements -->
                <div class="confetti" style="top: 10%; left: 20%;"></div>
                <div class="confetti" style="top: 15%; left: 50%;"></div>
                <div class="confetti" style="top: 5%; left: 70%;"></div>
                <div class="confetti" style="top: 20%; left: 30%;"></div>
                <div class="confetti" style="top: 10%; left: 80%;"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // Function to go back
        function goBack() {
            window.history.back();
        }

        // Select payment method
        function selectPaymentMethod(method) {
            const cards = document.querySelectorAll('.payment-method-card');
            cards.forEach(card => card.classList.remove('active'));
            
            const selectedCard = document.querySelector(`.payment-method-card[onclick="selectPaymentMethod('${method}')"]`);
            selectedCard.classList.add('active');
            
            // In a real app, you would show different payment sections based on selection
            // For this demo, we'll just show GV section
            document.getElementById('gv-payment-section').style.display = method === 'gv' ? 'block' : 'none';
        }

        // Verify payment and show PIN modal
        function verifyPayment() {
            const gvCode = document.getElementById('gv-code').value;
            
            if (!gvCode) {
                alert('Silakan masukkan kode GV terlebih dahulu');
                return;
            }
            
            document.getElementById('pin-modal').classList.add('active');
        }

        // Move to next PIN input field
        function moveToNext(input) {
            if (input.value.length === 1) {
                const next = input.nextElementSibling;
                if (next && next.classList.contains('pin-input')) {
                    next.focus();
                }
            }
        }

        // Process payment after PIN verification
        function processPayment() {
            // Hide PIN modal
            document.getElementById('pin-modal').classList.remove('active');
            
            // Show success modal
            document.getElementById('success-modal').classList.add('active');
            
            // Create confetti effect
            animateConfetti();
        }

        // Animate confetti in success modal
        function animateConfetti() {
            const confettiElements = document.querySelectorAll('.confetti');
            
            confettiElements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = `translateY(${Math.random() * 100}px) rotate(${Math.random() * 360}deg)`;
                    el.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateY(0) rotate(0)';
                    }, 1000);
                }, index * 100);
            });
        }

        // Function to hide success modal
        function hideSuccessModal() {
            document.getElementById('success-modal').classList.remove('active');
            // Redirect to ticket page
            window.location.href = 'tiket';
        }
    </script>
</body>
</html>