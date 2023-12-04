<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link rel="stylesheet" href="{{ url('static/css/rizfi/component/auth-profile.css') }}">


<div class="auth-profile">
    <div class="auth-content">
        <div id="bell-icon">
            <iconify-icon icon="mdi:bell" style="color: #ff872e;" width="40" height="40"></iconify-icon>
        </div>
        <div id="profile-img">
            <object data="{{ url('static/image/rizfi/auth-profile.svg') }}" type=""></object>
        </div>
        <div id="drop-icon">
            <iconify-icon icon="gridicons:dropdown" style="color: #ff872e;" width="40" height="40"></iconify-icon>
        </div>
    </div>
    <div id="notification">
        <div class="notif-header">
            My Notification
        </div>
        <div class="notif-content">
            <div class="notif-modal">
                <div class="notif-title">
                    Notifikasi Keuangan
                </div>
                <div class="notif-desc">
                    Pembayaran investasi 745774577457 <br>
                    berhasil dilakukan. Cek rinciannya di...
                </div>
            </div>
            <div class="notif-modal">
                <div class="notif-title">
                    Notifikasi Akun
                </div>
                <div class="notif-desc">
                    Foto profil Anda berhasil di-update. <br>
                    Lihat di sini.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const notifBtn = document.querySelector('#bell-icon')
    const notif = document.querySelector('#notification')
    notifBtn.addEventListener('click', (e) => {
        console.log(e);
        notif.classList.toggle('active')
    })
</script>
