<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - SkyBooking</title>
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

        .header-title p {
            font-size: 12px;
            opacity: 0.9;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: relative;
            background: white;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 5px;
            border: 2px solid #e9ecef;
        }

        .step.active .step-number {
            background: #8B0000;
            color: white;
            border-color: #8B0000;
        }

        .step.completed .step-number {
            background: #28a745;
            color: white;
            border-color: #28a745;
        }

        .step-text {
            font-size: 10px;
            color: #6c757d;
            text-align: center;
        }

        .step.active .step-text {
            color: #8B0000;
            font-weight: 500;
        }

        .progress-line {
            position: absolute;
            top: 35px;
            left: 20%;
            right: 20%;
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
            background: #8B0000;
            transition: all 0.3s ease;
        }

        /* Payment Content */
        .payment-content {
            padding: 20px;
            padding-bottom: 120px;
        }

        /* Order Summary */
        .order-summary {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border: 1px solid #f1f1f1;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .summary-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
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
            color: #6c757d;
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
            color: #8B0000;
        }

        /* Payment Methods */
        .payment-methods {
            margin-top: 25px;
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
            width: 25px;
            height: 25px;
            background: #8B0000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
        }

        /* GV Payment Card */
        .gv-payment-card {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            border-radius: 15px;
            padding: 20px;
            color: white;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .gv-payment-card::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .gv-payment-card::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -30px;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .gv-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .gv-icon {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .gv-details {
            flex: 1;
        }

        .gv-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .gv-desc {
            font-size: 13px;
            opacity: 0.9;
        }

        .gv-balance {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            position: relative;
            z-index: 2;
        }

        .balance-label {
            font-size: 12px;
            margin-bottom: 5px;
            opacity: 0.8;
        }

        .balance-amount {
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .refresh-btn {
            background: none;
            border: none;
            color: white;
            margin-left: 10px;
            cursor: pointer;
        }

        /* Payment Form */
        .payment-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            margin-bottom: 8px;
            color: #495057;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #8B0000;
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        /* Payment Summary */
        .payment-summary {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border: 1px solid #f1f1f1;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .summary-label {
            font-size: 13px;
            color: #6c757d;
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
            color: #8B0000;
        }

        /* Bottom Action */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 375px;
            background: white;
            padding: 15px 20px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .action-text {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 3px;
        }

        .action-price {
            font-size: 18px;
            font-weight: 700;
            color: #8B0000;
        }

        .confirm-btn {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
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

        /* Payment Success Modal */
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
            padding: 30px;
            text-align: center;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-icon {
            width: 80px;
            height: 80px;
            background: #d4edda;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #28a745;
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .modal-text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .modal-btn {
            background: #8B0000;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
        }

        @media (max-width: 375px) {
            .container {
                max-width: 100%;
            }
            
            .bottom-action {
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
                    <h1>Pembayaran</h1>
                    <p>Selesaikan pembayaran dalam 23:59</p>
                </div>
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

                <!-- GV Payment Card -->
                <div class="gv-payment-card">
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
                        <div class="input-with-icon">
                            <input type="text" class="form-control" placeholder="Masukkan kode GV">
                            <i data-lucide="gift" class="input-icon" color="#6c757d" width="18"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">PIN GV</label>
                        <div class="input-with-icon">
                            <input type="password" class="form-control" placeholder="Masukkan PIN GV">
                            <i data-lucide="lock" class="input-icon" color="#6c757d" width="18"></i>
                        </div>
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
            <button class="confirm-btn" onclick="showSuccessModal()">Bayar dengan GV</button>
        </div>

        <!-- Payment Success Modal -->
        <div class="modal-overlay" id="success-modal">
            <div class="modal-content">
                <div class="modal-icon">
                    <i data-lucide="check" width="40" height="40"></i>
                </div>
                <h3 class="modal-title">Pembayaran Berhasil!</h3>
                <p class="modal-text">Pembayaran Anda telah berhasil diproses menggunakan GV Payment. Tiket penerbangan akan dikirimkan ke email Anda dalam waktu 5 menit.</p>
                <button class="modal-btn" onclick="hideSuccessModal()">Lihat Tiket</button>
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

        // Function to show success modal
        function showSuccessModal() {
            document.getElementById('success-modal').classList.add('active');
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