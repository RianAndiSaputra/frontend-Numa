<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - SkyBooking</title>
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

        /* Profile Content */
        .profile-content {
            padding: 20px;
            padding-bottom: 100px;
        }

        /* Profile Header */
        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 15px;
            background: linear-gradient(135deg, #8B0000, #A0001C);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }

        .avatar-edit {
            position: absolute;
            bottom: 20px;
            right: calc(50% - 50px);
            background: #8B0000;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            border: 2px solid white;
        }

        .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .profile-email {
            font-size: 14px;
            color: #6c757d;
        }

        /* Profile Sections */
        .profile-section {
            margin-bottom: 25px;
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #f1f1f1;
        }

        .section-icon {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, #8B0000, #A0001C);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 12px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            flex: 1;
        }

        .edit-btn {
            color: #8B0000;
            background: none;
            border: none;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Profile Info */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            margin-bottom: 12px;
        }

        .info-label {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 14px;
            font-weight: 500;
            padding: 8px 12px;
            background: #f8f9fa;
            border-radius: 8px;
            min-height: 38px;
            display: flex;
            align-items: center;
        }

        /* Edit Mode */
        .info-value.edit-mode {
            background: white;
            border: 1px solid #e9ecef;
            padding: 7px 11px;
        }

        .info-value input, .info-value select {
            width: 100%;
            border: none;
            outline: none;
            background: transparent;
            font-size: 14px;
            font-family: inherit;
        }

        /* Account Actions */
        .account-actions {
            margin-top: 30px;
        }

        .action-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f1f1f1;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .action-item:hover {
            background: rgba(139, 0, 0, 0.03);
        }

        .action-icon {
            width: 30px;
            height: 30px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #8B0000;
        }

        .action-text {
            flex: 1;
            font-size: 14px;
        }

        .logout-btn {
            color: #dc3545;
        }

        .logout-btn .action-icon {
            color: #dc3545;
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

        /* Modal */
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
            padding: 25px;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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
            margin-bottom: 20px;
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

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #495057;
            border: none;
        }

        .btn-primary {
            background: #8B0000;
            color: white;
            border: none;
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
                    <h1>Profil Saya</h1>
                </div>
            </div>
        </div>

        <!-- Profile Content -->
        <div class="profile-content">
            <!-- Profile Header -->
            <div class="profile-header">
                <div class="profile-avatar" id="profile-avatar">JD</div>
                <div class="avatar-edit" onclick="openAvatarModal()">
                    <i data-lucide="camera" width="16" height="16"></i>
                </div>
                <h2 class="profile-name">John Doe</h2>
                <p class="profile-email">john.doe@example.com</p>
            </div>

            <!-- Personal Information Section -->
            <div class="profile-section">
                <div class="section-header">
                    <div class="section-icon">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="section-title">Informasi Pribadi</div>
                    <button class="edit-btn" onclick="toggleEditMode('personal-info')">
                        <i data-lucide="edit-2" width="14" height="14"></i> Edit
                    </button>
                </div>

                <div class="info-grid" id="personal-info">
                    <div class="info-item">
                        <div class="info-label">Nama Panggilan</div>
                        <div class="info-value">
                            <span class="display-value">John</span>
                            <input type="text" class="edit-value" value="John" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nama Depan</div>
                        <div class="info-value">
                            <span class="display-value">John</span>
                            <input type="text" class="edit-value" value="John" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nama Belakang</div>
                        <div class="info-value">
                            <span class="display-value">Doe</span>
                            <input type="text" class="edit-value" value="Doe" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Jenis Kelamin</div>
                        <div class="info-value">
                            <span class="display-value">Laki-laki</span>
                            <select class="edit-value" style="display: none;">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Tanggal Lahir</div>
                        <div class="info-value">
                            <span class="display-value">15/05/1990</span>
                            <input type="date" class="edit-value" value="1990-05-15" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Kebangsaan</div>
                        <div class="info-value">
                            <span class="display-value">Indonesia</span>
                            <select class="edit-value" style="display: none;">
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Identity Information -->
            <div class="profile-section">
                <div class="section-header">
                    <div class="section-icon">
                        <i data-lucide="id-card"></i>
                    </div>
                    <div class="section-title">Identitas Diri</div>
                    <button class="edit-btn" onclick="toggleEditMode('identity-info')">
                        <i data-lucide="edit-2" width="14" height="14"></i> Edit
                    </button>
                </div>

                <div class="info-grid" id="identity-info">
                    <div class="info-item">
                        <div class="info-label">Tipe ID</div>
                        <div class="info-value">
                            <span class="display-value">KTP</span>
                            <select class="edit-value" style="display: none;">
                                <option value="KTP">KTP</option>
                                <option value="Passport">Passport</option>
                                <option value="SIM">SIM</option>
                            </select>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nomor ID</div>
                        <div class="info-value">
                            <span class="display-value">3275011505900001</span>
                            <input type="text" class="edit-value" value="3275011505900001" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="profile-section">
                <div class="section-header">
                    <div class="section-icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <div class="section-title">Kontak</div>
                    <button class="edit-btn" onclick="toggleEditMode('contact-info')">
                        <i data-lucide="edit-2" width="14" height="14"></i> Edit
                    </button>
                </div>

                <div class="info-grid" id="contact-info">
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">
                            <span class="display-value">john.doe@example.com</span>
                            <input type="email" class="edit-value" value="john.doe@example.com" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nomor HP</div>
                        <div class="info-value">
                            <span class="display-value">+6281234567890</span>
                            <input type="tel" class="edit-value" value="+6281234567890" style="display: none;">
                        </div>
                    </div>
                    <div class="info-item" style="grid-column: span 2;">
                        <div class="info-label">Alamat</div>
                        <div class="info-value">
                            <span class="display-value">Jl. Sudirman No. 123, Jakarta Selatan</span>
                            <textarea class="edit-value" style="display: none;">Jl. Sudirman No. 123, Jakarta Selatan</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Actions -->
            <div class="profile-section account-actions">
                <div class="action-item" onclick="openModal('privacy-modal')">
                    <div class="action-icon">
                        <i data-lucide="shield"></i>
                    </div>
                    <div class="action-text">Kebijakan Privasi</div>
                    <i data-lucide="chevron-right"></i>
                </div>
                <div class="action-item" onclick="openModal('about-modal')">
                    <div class="action-icon">
                        <i data-lucide="info"></i>
                    </div>
                    <div class="action-text">Tentang Kami</div>
                    <i data-lucide="chevron-right"></i>
                </div>
                <div class="action-item logout-btn" onclick="logout()">
                    <div class="action-icon">
                        <i data-lucide="log-out"></i>
                    </div>
                    <div class="action-text">Keluar</div>
                    <i data-lucide="chevron-right"></i>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <a href="search.html" class="nav-item">
                <i data-lucide="search" class="nav-icon" width="18" height="18"></i>
                <span>Cari</span>
            </a>
            <a href="tickets.html" class="nav-item">
                <i data-lucide="ticket" class="nav-icon" width="18" height="18"></i>
                <span>Tiket</span>
            </a>
            <a href="profile.html" class="nav-item active">
                <i data-lucide="user" class="nav-icon" width="18" height="18"></i>
                <span>Profil</span>
            </a>
        </div>

        <!-- Avatar Modal -->
        <div class="modal-overlay" id="avatar-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Ubah Foto Profil</h3>
                    <button class="close-btn" onclick="closeModal('avatar-modal')">
                        <i data-lucide="x" width="20" height="20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="text-align: center; margin: 20px 0;">
                        <div class="profile-avatar" id="modal-avatar" style="width: 120px; height: 120px; margin: 0 auto 20px;">JD</div>
                        <input type="file" id="avatar-upload" accept="image/*" style="display: none;">
                        <button class="btn btn-secondary" onclick="document.getElementById('avatar-upload').click()" style="margin-bottom: 10px;">
                            <i data-lucide="upload" width="16" height="16"></i> Unggah Foto
                        </button>
                        <button class="btn btn-secondary" onclick="removeAvatar()">
                            <i data-lucide="trash-2" width="16" height="16"></i> Hapus Foto
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" onclick="closeModal('avatar-modal')">Batal</button>
                    <button class="btn btn-primary" onclick="saveAvatar()">Simpan</button>
                </div>
            </div>
        </div>

        <!-- Privacy Policy Modal -->
        <div class="modal-overlay" id="privacy-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Kebijakan Privasi</h3>
                    <button class="close-btn" onclick="closeModal('privacy-modal')">
                        <i data-lucide="x" width="20" height="20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                        SkyBooking menghargai privasi Anda. Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda.
                    </p>
                    <h4 style="font-size: 15px; margin: 15px 0 10px; color: #8B0000;">Informasi yang Kami Kumpulkan</h4>
                    <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                        Kami mengumpulkan informasi yang Anda berikan saat membuat akun, memesan tiket, atau berkomunikasi dengan kami. Ini termasuk nama, alamat email, nomor telepon, dan detail pembayaran.
                    </p>
                    <h4 style="font-size: 15px; margin: 15px 0 10px; color: #8B0000;">Penggunaan Informasi</h4>
                    <p style="font-size: 14px; line-height: 1.6;">
                        Informasi Anda digunakan untuk memproses pemesanan, memberikan layanan pelanggan, dan meningkatkan pengalaman pengguna. Kami tidak menjual atau membagikan informasi Anda kepada pihak ketiga tanpa izin Anda.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="closeModal('privacy-modal')">Mengerti</button>
                </div>
            </div>
        </div>

        <!-- About Us Modal -->
        <div class="modal-overlay" id="about-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tentang Kami</h3>
                    <button class="close-btn" onclick="closeModal('about-modal')">
                        <i data-lucide="x" width="20" height="20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #8B0000, #A0001C); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                            <i data-lucide="plane" width="32" height="32" color="white"></i>
                        </div>
                        <h3 style="font-size: 18px; margin-bottom: 5px;">SkyBooking</h3>
                        <p style="font-size: 14px; color: #6c757d;">Versi 2.1.0</p>
                    </div>
                    <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                        SkyBooking adalah platform pemesanan tiket pesawat terkemuka yang menyediakan pengalaman perjalanan yang mulus dan nyaman bagi pelanggan kami.
                    </p>
                    <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                        Didirikan pada tahun 2015, kami telah melayani jutaan pelanggan dengan komitmen untuk memberikan layanan terbaik dan harga kompetitif.
                    </p>
                    <div style="margin-top: 20px;">
                        <h4 style="font-size: 15px; margin-bottom: 10px; color: #8B0000;">Hubungi Kami</h4>
                        <p style="font-size: 14px; line-height: 1.6;">
                            Email: support@skybooking.id<br>
                            Telepon: +62 21 1234 5678<br>
                            Alamat: Gedung SkyBooking, Jl. Gatot Subroto No. 1, Jakarta
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="closeModal('about-modal')">Tutup</button>
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

        // Function to toggle edit mode
        function toggleEditMode(sectionId) {
            const section = document.getElementById(sectionId);
            const isEditing = section.classList.contains('edit-mode');
            
            if (isEditing) {
                // Save changes
                section.classList.remove('edit-mode');
                section.querySelectorAll('.edit-value').forEach(input => {
                    input.style.display = 'none';
                });
                section.querySelectorAll('.display-value').forEach(span => {
                    span.style.display = 'inline';
                    if (input.type !== 'file') {
                        span.textContent = input.value;
                    }
                });
            } else {
                // Enter edit mode
                section.classList.add('edit-mode');
                section.querySelectorAll('.edit-value').forEach(input => {
                    input.style.display = 'block';
                    if (input.tagName === 'SELECT') {
                        input.value = input.previousElementSibling.textContent;
                    }
                });
                section.querySelectorAll('.display-value').forEach(span => {
                    span.style.display = 'none';
                });
            }
        }

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        // Avatar functions
        function openAvatarModal() {
            openModal('avatar-modal');
        }

        function removeAvatar() {
            document.getElementById('modal-avatar').style.background = 'linear-gradient(135deg, #8B0000, #A0001C)';
            document.getElementById('modal-avatar').textContent = 'JD';
            document.getElementById('modal-avatar').style.color = 'white';
        }

        function saveAvatar() {
            const fileInput = document.getElementById('avatar-upload');
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-avatar').style.backgroundImage = `url(${e.target.result})`;
                    document.getElementById('profile-avatar').textContent = '';
                    document.getElementById('modal-avatar').style.backgroundImage = `url(${e.target.result})`;
                    document.getElementById('modal-avatar').textContent = '';
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
            closeModal('avatar-modal');
        }

        // Logout function
        function logout() {
            if (confirm('Apakah Anda yakin ingin keluar?')) {
                window.location.href = 'login.html';
            }
        }

        // Close modal when clicking outside
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                }
            });
        });

        // Avatar upload preview
        document.getElementById('avatar-upload').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('modal-avatar').style.backgroundImage = `url(${event.target.result})`;
                    document.getElementById('modal-avatar').textContent = '';
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
</body>
</html>