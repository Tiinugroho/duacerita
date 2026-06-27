<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kode OTP DuaCerita</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #faf8f5; color: #434343; padding: 20px; }
        .card { background-color: #ffffff; border-radius: 16px; padding: 32px; max-width: 500px; margin: 0 auto; box-shadow: 0 4px 12px rgba(143, 116, 190, 0.08); border: 1px solid #f3eff8; }
        .logo { font-size: 28px; font-family: Georgia, serif; color: #d473a9; font-weight: bold; margin-bottom: 24px; text-align: center; }
        .code { font-size: 32px; font-weight: bold; letter-spacing: 6px; text-align: center; color: #8f74be; margin: 24px 0; background-color: #faf8f5; padding: 12px; border-radius: 12px; border: 1px dashed #d473a9; }
        .footer { font-size: 11px; color: #9c9c9c; text-align: center; margin-top: 32px; line-height: 1.5; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">DuaCerita</div>
        <p>Halo, <strong>{{ $userName }}</strong>,</p>
        <p>Terima kasih telah mendaftar di DuaCerita. Silakan gunakan kode OTP di bawah ini untuk menyelesaikan proses verifikasi email Anda:</p>
        <div class="code">{{ $otpCode }}</div>
        <p style="font-size: 12px; color: #6b6b6b;">Kode verifikasi ini hanya berlaku selama <strong>10 menit</strong>. Harap tidak membagikan kode ini kepada siapa pun demi keamanan akun Anda.</p>
        <p>Jika Anda tidak merasa melakukan pendaftaran atau login ini, silakan abaikan email ini.</p>
        <div class="footer">
            &copy; {{ date('Y') }} DuaCerita Wedding. All rights reserved.
        </div>
    </div>
</body>
</html>
