<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login to StudySync - Discover your optimal learning style">
    <title>Gpart - Login | Shopping Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/dist/output.css"/>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body class="min-h-screen bg-gray-50">
    <?php include 'header2.php'; ?>
    
    <div class="flex min-h-[calc(100vh-80px)]">
        <!-- Left Column tetap sama -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-[#424955] to-[#6A9EFF] p-12 items-center justify-center relative overflow-hidden">
        </div>

        <!-- Right Column - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="bg-[#4B87E5] rounded-3xl p-8 shadow-xl transform transition-all duration-300 hover:shadow-2xl">
                    <h2 class="text-2xl font-bold text-white text-center mb-8">Login</h2>
                    
                    <form class="space-y-6" id="loginForm">
                        <!-- Form fields tetap sama -->
                        <!-- ... kode form fields tidak berubah ... -->

                        <!-- Google Sign In -->
                        <div 
                            id="tombolLoginGoogle"
                            class="w-full bg-white text-gray-600 rounded-lg overflow-hidden transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300"
                        ></div>

                        <!-- Register Link -->
                        <div class="text-center text-sm text-white">
                            Not a member yet? 
                            <a href="register.php" class="font-medium hover:underline transition-all duration-300 hover:text-blue-200">Register!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script>
        function inisialisasiGoogleAuth() {
            const client_id = '58577252532-tn368lfh8g20174o42os7prvdg369978.apps.googleusercontent.com'; // Ganti dengan client ID dari Google Cloud Console
            
            google.accounts.id.initialize({
                client_id: client_id,
                callback: handleResponseLogin
            });

            google.accounts.id.renderButton(
                document.getElementById("tombolLoginGoogle"),
                { 
                    theme: "outline",
                    size: "large",
                    width: "100%",
                    type: "standard",
                    text: "continue_with",
                    shape: "rectangular",
                }
            );
        }

        async function handleResponseLogin(response) {
            try {
                const idToken = response.credential;
                
                // Kirim token ke backend Anda
                const hasil = await fetch('/api/auth/google', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ token: idToken }),
                });
                
                const data = await hasil.json();
                
                if (data.success) {
                    console.log('Berhasil login dengan Google');
                    // Redirect ke dashboard atau halaman utama
                    window.location.href = 'index.php';
                } else {
                    console.error('Autentikasi gagal');
                    alert('Login gagal. Silakan coba lagi.');
                }
            } catch (error) {
                console.error('Error selama proses autentikasi:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        }
        window.onload = inisialisasiGoogleAuth;
    </script>
</body>
</html>