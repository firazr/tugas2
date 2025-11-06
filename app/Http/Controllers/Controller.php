use Illuminate\Support\Facades\Http;

public function kirimPesan(Request $request)
{
    $request->validate([
        'nama'   => ['required', 'string'],
        'email'  => ['required', 'email'],
        'g-recaptcha-response' => ['required', function($attr, $value, $fail){
            $resp = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify', [
                    'secret'   => config('services.recaptcha.secret_key'),
                    'response' => $value,
                    'remoteip' => request()->ip(),
                ]
            )->json();

            if (!($resp['success'] ?? false)) {
                $fail('Verifikasi reCAPTCHA gagal. Silakan coba lagi.');
            }
        }],
    ]);

    // ...lanjut proses form (kirim email/simpan)
    return back()->with('ok', 'Pesan terkirim!');
}
