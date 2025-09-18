<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>✨ Portal Wifi Hospot ✨</title>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --neon-green: #39ff14;
            --dark-bg: #0a0f0b;
            --dark-card: #121c15;
            --text: #e0ffe6;
        }

        body {
            background-color: var(--dark-bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
            position: relative;
        }

        /* Animasi Neon Glow */
        @keyframes neonPulse {
            0%, 100% { text-shadow: 0 0 5px var(--neon-green), 0 0 10px var(--neon-green); }
            50% { text-shadow: 0 0 15px var(--neon-green), 0 0 30px var(--neon-green), 0 0 45px var(--neon-green); }
        }

        /* Navbar */
        .navbar {
            width: 100%;
            background: var(--dark-card);
            padding: 15px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 2px solid var(--neon-green);
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.5);
        }

        .navbar h2 {
            font-size: 1.5rem;
            color: var(--neon-green);
            animation: neonPulse 2s infinite;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* Container Utama */
        .container {
            background: var(--dark-card);
            border-radius: 20px;
            padding: 40px 25px;
            margin: 30px 20px;
            box-shadow: 0 0 20px rgba(57, 255, 20, 0.3);
            max-width: 500px;
            width: 100%;
            text-align: center;
            border: 1px solid rgba(57, 255, 20, 0.2);
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--neon-green);
            animation: neonPulse 2.5s infinite;
            background: transparent;
            -webkit-text-fill-color: var(--neon-green);
        }

        p {
            margin: 15px 0;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #c0ffc8;
        }

        /* WiFi Info */
        .wifi-info {
            background: rgba(57, 255, 20, 0.05);
            padding: 25px;
            border-radius: 15px;
            margin: 25px 0;
            font-size: 1.15rem;
            border: 1px solid rgba(57, 255, 20, 0.3);
        }

        .wifi-info strong {
            color: var(--neon-green);
        }

        .password-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        #password {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--neon-green);
            letter-spacing: 2px;
        }

        .hidden {
            display: none;
        }

        .password-btn, .copy-btn {
            background: transparent;
            color: var(--neon-green);
            border: 1px solid var(--neon-green);
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .password-btn:hover, .copy-btn:hover {
            background: var(--neon-green);
            color: #000;
            box-shadow: 0 0 15px var(--neon-green);
        }

        /* CTA Banner */
        .cta-banner {
            background: linear-gradient(90deg, transparent, var(--neon-green), transparent);
            padding: 15px;
            margin: 30px 0;
            border-radius: 10px;
            animation: bannerGlow 3s infinite alternate;
            font-weight: bold;
            font-size: 1.1rem;
            color: #000;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
        }

        @keyframes bannerGlow {
            0% { opacity: 0.7; }
            100% { opacity: 1; box-shadow: 0 0 20px var(--neon-green); }
        }

        /* Footer */
        footer {
            margin-top: auto;
            padding: 30px 20px;
            width: 100%;
            background: #0d150f;
            text-align: center;
            border-top: 1px solid rgba(57, 255, 20, 0.2);
        }

        .footer-note {
            margin-bottom: 20px;
            font-size: 0.95rem;
            color: #a0ffa9;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin: 20px 0;
        }

        .social-links a {
            color: var(--neon-green);
            font-size: 1.8rem;
            transition: transform 0.3s, text-shadow 0.3s;
            cursor: pointer;
        }

        .social-links a:hover {
            transform: scale(1.2);
            text-shadow: 0 0 10px var(--neon-green);
        }

        .copyright {
            font-size: 0.85rem;
            opacity: 0.7;
            margin-top: 20px;
        }
        
        .copyright a {
    color: var(--neon-green) !important;
    text-decoration: none;
    font-weight: bold;
    transition: text-shadow 0.3s ease;
}

.copyright a:hover {
    text-shadow: 0 0 8px var(--neon-green);
}

        /* Modal Overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        .modal {
            background: var(--dark-card);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            border: 2px solid var(--neon-green);
            box-shadow: 0 0 30px var(--neon-green);
            max-width: 90%;
            width: 350px;
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .modal-overlay.active .modal {
            transform: scale(1);
        }

        .modal h3 {
            color: var(--neon-green);
            margin-bottom: 20px;
            font-size: 1.3rem;
            animation: neonPulse 2s infinite;
        }

        .modal p {
            margin-bottom: 25px;
            font-size: 1rem;
        }

        .modal-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .modal-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }

        .confirm-btn {
            background: var(--neon-green);
            color: #000;
        }

        .cancel-btn {
            background: #444;
            color: #fff;
        }

        .confirm-btn:hover {
            box-shadow: 0 0 15px var(--neon-green);
        }

        .cancel-btn:hover {
            background: #555;
        }

        /* Responsif */
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }
            h1 {
                font-size: 1.8rem;
            }
            .navbar h2 {
                font-size: 1.3rem;
            }
            .social-links {
                gap: 15px;
            }
            .social-links a {
                font-size: 1.5rem;
            }
            .modal {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h2>
            <i data-lucide="wifi" style="width:24px; height:24px;"></i>
            WIFI HOTSPOT
        </h2>
    </div>

    <!-- Container Utama -->
    <div class="container">
        <h1>✨ Portal WiFi Hospot ✨</h1>
        <p>Selamat datang di portal eksklusif kami. Nikmati akses cepat dan nyaman.</p>

        <!-- CTA Banner -->
        <div class="cta-banner">
            🚀 KONEKSIKAN SEKARANG — GRATIS!
        </div>

        <!-- Info WiFi -->
        <div class="wifi-info">
            <p>📶 <strong>Nama WiFi:</strong> <strong>PEMBALUT BERKILAU</strong></p>
            <p>🔑 <strong>Password:</strong>
                <span id="password" class="hidden">04062001</span>
                <div class="password-container">
                    <button class="password-btn" onclick="togglePassword()">
                        <i data-lucide="eye" id="eye-icon"></i>
                        <span id="btn-text">Lihat Password</span>
                    </button>
                    <button id="copy-btn" class="copy-btn hidden" onclick="copyPassword()">
                        <i data-lucide="copy"></i>
                        Salin
                    </button>
                </div>
            </p>
        </div>
    </div>

<!-- Footer -->
<footer>
    <div class="footer-note">
        ❗ <strong>Hubungi admin jika password salah atau tidak bisa terhubung.</strong>
    </div>

    <div class="social-links">
        <a data-href="https://wa.me/6282144131734" onclick="confirmContact(event)" aria-label="WhatsApp">
            <i data-lucide="message-circle"></i>
        </a>
        <a data-href="https://www.facebook.com/chrsdntymakaremas.makaremas.7?mibextid=ZbWKwL" onclick="confirmContact(event)" aria-label="Facebook">
            <i data-lucide="facebook"></i>
        </a>
        <a data-href="https://www.instagram.com/djafar_0406?igsh=MWw5cnQ2OXlldGx4OA==" onclick="confirmContact(event)" aria-label="Instagram">
            <i data-lucide="instagram"></i>
        </a>
        <a data-href="https://www.tiktok.com/@rifaldo_djfar?_t=ZS-8zp97RnE0pj&_r=1" onclick="confirmContact(event)" aria-label="TikTok">
            <i data-lucide="music"></i>
        </a>
    </div>

    <div class="copyright">
        &copy; 2025 Portal Manual — Nikmati koneksimu tanpa ribet. Semua hak cipta dilindungi. 
        <a href="https://wa.me/6282144131734">By : Rifaldo Djafar</a>
    </div>
</footer>

    <!-- Modal Konfirmasi -->
    <div class="modal-overlay" id="confirm-modal">
        <div class="modal">
            <h3>⚠️ Konfirmasi</h3>
            <p>Apakah anda yakin ingin menghubungi Admin WiFi Hospot?</p>
            <div class="modal-buttons">
                <button class="modal-btn confirm-btn" onclick="proceedContact()">Ya</button>
                <button class="modal-btn cancel-btn" onclick="closeModal('confirm-modal')">Batal</button>
            </div>
        </div>
    </div>

    <!-- Modal Notifikasi Salin -->
    <div class="modal-overlay" id="copy-modal">
        <div class="modal">
            <h3>✅ Password Berhasil di SALIN!</h3>
            <p>Anda dapat menempelkannya di pengaturan WiFi perangkat Anda.</p>
            <div class="modal-buttons">
                <button class="modal-btn confirm-btn" onclick="closeModal('copy-modal')">OK</button>
            </div>
        </div>
    </div>

    <!-- Inisialisasi Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

    <!-- Toggle Password & Show Copy Button -->
    <script>
        function togglePassword() {
            const passwordElement = document.getElementById('password');
            const btnText = document.getElementById('btn-text');
            const eyeIcon = document.getElementById('eye-icon');
            const copyBtn = document.getElementById('copy-btn');

            if (passwordElement.classList.contains('hidden')) {
                passwordElement.classList.remove('hidden');
                btnText.textContent = 'Sembunyikan';
                eyeIcon.setAttribute('data-lucide', 'eye-off');
                copyBtn.classList.remove('hidden'); // Tampilkan tombol salin
            } else {
                passwordElement.classList.add('hidden');
                btnText.textContent = 'Lihat Password';
                eyeIcon.setAttribute('data-lucide', 'eye');
                copyBtn.classList.add('hidden'); // Sembunyikan tombol salin
            }

            lucide.createIcons();
        }

        // Salin Password ke Clipboard
        function copyPassword() {
            const password = document.getElementById('password').textContent;
            navigator.clipboard.writeText(password).then(() => {
                showModal('copy-modal');
            }).catch(err => {
                console.error('Gagal menyalin: ', err);
            });
        }

        // Konfirmasi Kontak Admin
        let targetUrl = '';
        function confirmContact(event) {
            event.preventDefault();
            targetUrl = event.currentTarget.getAttribute('data-href');
            showModal('confirm-modal');
        }

        function proceedContact() {
            if (targetUrl) {
                window.open(targetUrl, '_blank');
            }
            closeModal('confirm-modal');
        }

        // Modal Control
        function showModal(modalId) {
            document.getElementById(modalId).classList.add('active');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        // Tutup modal jika klik di luar
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>