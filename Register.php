<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for Gpart - Start Buting For The Happines">
    <title>StudySync - Register | Learning Platform</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/dist/output.css"/>
</head>
<body class="min-h-screen bg-gray-50">
    <?php include 'header2.php'; ?>
    
    <div class="flex min-h-[calc(100vh-80px)]">
        <!-- Left Column - Image/Branding -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-[#4B87E5] to-[#6A9EFF] p-12 items-center justify-center relative overflow-hidden">
            <div class="relative z-10 max-w-lg">
                <div class="mb-8 transform transition-all duration-500 hover:scale-105">
                    <h1 class="text-4xl font-bold text-white mb-6 leading-tight">Join StudySync Today!</h1>
                    <p class="text-blue-100 text-lg mb-8 leading-relaxed">Create your account and begin your journey to discover your fashion story here  discover your unique Style! </p>
                </div>
                <div class="relative group">
                    <img src="/api/placeholder/600/400" alt="Learning Community Illustration" class="rounded-xl shadow-lg transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 rounded-xl bg-gradient-to-t from-blue-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute top-10 right-10 w-20 h-20 border-2 border-white rounded-full"></div>
                <div class="absolute bottom-20 left-10 w-32 h-32 border-2 border-white rounded-full"></div>
            </div>
        </div>

        <!-- Right Column - Registration Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="bg-[#4B87E5] rounded-3xl p-8 shadow-xl transform transition-all duration-300 hover:shadow-2xl">
                    <h2 class="text-2xl font-bold text-white text-center mb-8">Create Account</h2>
                    
                    <form class="space-y-6">
                        <!-- Full Name Input -->
                        <div class="relative group">
                            <input 
                                type="text" 
                                class="w-full bg-white/20 rounded-lg py-3 px-4 pr-10 text-white placeholder-white/70 outline-none border border-transparent focus:border-white/40 transition-all duration-300 focus:bg-white/30"
                                placeholder="Full Name"
                                required
                            >
                            <i class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-white/70 group-focus-within:text-white transition-colors duration-300"></i>
                        </div>

                        <!-- Email Input -->
                        <div class="relative group">
                            <input 
                                type="email" 
                                class="w-full bg-white/20 rounded-lg py-3 px-4 pr-10 text-white placeholder-white/70 outline-none border border-transparent focus:border-white/40 transition-all duration-300 focus:bg-white/30"
                                placeholder="Email Address"
                                required
                            >
                            <i class="fas fa-envelope absolute right-3 top-1/2 -translate-y-1/2 text-white/70 group-focus-within:text-white transition-colors duration-300"></i>
                        </div>

                        <!-- Password Input -->
                        <div class="relative group">
                            <input 
                                type="password" 
                                class="w-full bg-white/20 rounded-lg py-3 px-4 pr-10 text-white placeholder-white/70 outline-none border border-transparent focus:border-white/40 transition-all duration-300 focus:bg-white/30"
                                placeholder="Password"
                                required
                            >
                            <i class="fas fa-lock absolute right-3 top-1/2 -translate-y-1/2 text-white/70 group-focus-within:text-white transition-colors duration-300"></i>
                        </div>

                        <!-- Confirm Password Input -->
                        <div class="relative group">
                            <input 
                                type="password" 
                                class="w-full bg-white/20 rounded-lg py-3 px-4 pr-10 text-white placeholder-white/70 outline-none border border-transparent focus:border-white/40 transition-all duration-300 focus:bg-white/30"
                                placeholder="Confirm Password"
                                required
                            >
                            <i class="fas fa-check-circle absolute right-3 top-1/2 -translate-y-1/2 text-white/70 group-focus-within:text-white transition-colors duration-300"></i>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input 
                                    type="checkbox" 
                                    class="w-4 h-4 border border-white/40 rounded bg-white/20 focus:ring-2 focus:ring-white/50"
                                    required
                                >
                            </div>
                            <div class="ml-3 text-sm">
                                <label class="text-white/90">I agree to the <a href="#" class="text-white hover:underline">Terms of Service</a> and <a href="#" class="text-white hover:underline">Privacy Policy</a></label>
                            </div>
                        </div>

                        <!-- Register Button -->
                        <button 
                            type="submit" 
                            class="w-full bg-white text-[#4B87E5] rounded-lg py-3 font-medium hover:bg-blue-50 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] focus:ring-2 focus:ring-white/50"
                        >
                            Create Account
                        </button>

                        <!-- Divider -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-white/30"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-[#4B87E5] text-white/70">Or register with</span>
                            </div>
                        </div>

                        <!-- Google Sign Up -->
                        <button 
                            type="button" 
                            class="w-full bg-white text-gray-600 rounded-lg py-3 font-medium transition-all duration-300 hover:bg-blue-50 transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-2 group"
                        >
                            <img src="/api/placeholder/16/16" alt="Google" class="w-4 h-4 transition-transform duration-300 group-hover:scale-110">
                            Sign up with Google
                        </button>

                        <!-- Login Link -->
                        <div class="text-center text-sm text-white">
                            Already have an account? 
                            <a href="login.php" class="font-medium hover:underline transition-all duration-300 hover:text-blue-200">Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>