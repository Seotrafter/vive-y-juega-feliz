<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildWing Haven - Magical Forest Adventure</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href='/src/icons/logo.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Lilita One", serif;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #95A59E;
                padding: 1rem;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                padding: 0.75rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            .nav-links a:last-child {
                border-bottom: none;
            }
        }

        .terms-section {
            background: linear-gradient(to bottom, #A8C9EA 0%, white 100%);
        }

        .terms-section-2 {
            background: white;
        }

        .terms-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background: white/90;
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(122, 167, 210, 0.1);
        }

        .terms-heading {
            color: #7AA7D2;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            border-bottom: 3px solid #95A59E;
            padding-bottom: 1rem;
        }

        .section-heading {
            color: #7AA7D2;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 2rem 0 1rem;
        }

        .terms-text {
            color: #4A5568;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .terms-list {
            list-style-type: disc;
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #4A5568;
        }

        .terms-list li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body class="bg-[#A8C9EA]">

    <!-- Header -->
    <header class="sticky top-0 bg-[#95A59E] shadow-lg z-50 border-b border-white/20">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center space-x-3">
                    <img src="/src/icons/logo.png" alt="Logo" class="w-10 h-10 rounded-full" />
                    <span class="text-white text-xl font-bold">WildWing Haven</span>
                </a>

                <div class="nav-links hidden md:flex md:items-center md:space-x-8">
                    <a href="/#features" class="text-white hover:text-[#DCE0EB] transition-colors border-r border-white/20 pr-8">Features</a>
                    <a href="/#birds" class="text-white hover:text-[#DCE0EB] transition-colors border-r border-white/20 pr-8">Birds</a>
                    <a href="/#about" class="text-white hover:text-[#DCE0EB] transition-colors border-r border-white/20 pr-8">About</a>
                    <a href="/#download" class="text-white hover:text-[#DCE0EB] transition-colors">Download</a>
                </div>

                <button class="md:hidden text-white focus:outline-none" onclick="toggleNav()">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>
    </header>
    <section class="terms-section py-20">
        <div class="container mx-auto px-4">
            <div class="terms-container">
                <h1 class="terms-heading">Terms and Conditions</h1>

                <p class="terms-text">Welcome to WildWing Haven!</p>

                <p class="terms-text">
                    These terms and conditions outline the rules and regulations for the use of WildWing Haven's Website, located at https://vive-y-juega-feliz.com/.
                </p>

                <p class="terms-text">
                    By accessing this website we assume you accept these terms and conditions. Do not continue to use WildWing Haven if you do not agree to take all of the terms and conditions stated on this page.
                </p>

                <p class="terms-text">
                    The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves.
                </p>

                <h2 class="section-heading">Cookies</h2>
                <p class="terms-text">
                    We employ the use of cookies. By accessing WildWing Haven, you agreed to use cookies in agreement with WildWing Haven's Privacy Policy. Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.
                </p>
            </div>
        </div>
    </section>
    <section class="terms-section-2 py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="terms-container">
                <h2 class="section-heading">License</h2>
                <p class="terms-text">
                    Unless otherwise stated, WildWing Haven and/or its licensors own the intellectual property rights for all material on WildWing Haven. All intellectual property rights are reserved.
                </p>

                <p class="terms-text">You must not:</p>
                <ul class="terms-list">
                    <li>Republish material from WildWing Haven</li>
                    <li>Sell, rent or sub-license material from WildWing Haven</li>
                    <li>Reproduce, duplicate or copy material from WildWing Haven</li>
                    <li>Redistribute content from WildWing Haven</li>
                </ul>

                <h2 class="section-heading">Comments</h2>
                <p class="terms-text">
                    Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. WildWing Haven does not filter, edit, publish or review Comments prior to their presence on the website.
                </p>

                <p class="terms-text">You warrant and represent that:</p>
                <ul class="terms-list">
                    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so</li>
                    <li>The Comments do not invade any intellectual property right of any third party</li>
                    <li>The Comments do not contain any defamatory, libelous, offensive, indecent, or otherwise unlawful material</li>
                    <li>The Comments will not be used to solicit or promote business or unlawful activity</li>
                </ul>

                <h2 class="section-heading">Hyperlinking to our Content</h2>
                <p class="terms-text">
                    The following organizations may link to our Website without prior written approval:
                </p>
                <ul class="terms-list">
                    <li>Government agencies</li>
                    <li>Search engines</li>
                    <li>News organizations</li>
                    <li>Online directory distributors</li>
                    <li>System-wide Accredited Businesses</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="terms-section-2 py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="terms-container">
                <h2 class="section-heading">Content Liability</h2>
                <p class="terms-text">
                    We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims that are rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene, or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third-party rights.
                </p>

                <h2 class="section-heading">Reservation of Rights</h2>
                <p class="terms-text">
                    We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and its linking policy at any time.
                </p>

                <h2 class="section-heading">Disclaimer</h2>
                <p class="terms-text">
                    To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website. Nothing in this disclaimer will:
                </p>
                <ul class="terms-list">
                    <li>Limit or exclude our or your liability for death or personal injury</li>
                    <li>Limit or exclude our or your liability for fraud or fraudulent misrepresentation</li>
                    <li>Limit any of our or your liabilities in any way that is not permitted under applicable law</li>
                    <li>Exclude any of our or your liabilities that may not be excluded under applicable law</li>
                </ul>

                <p class="terms-text">
                    As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#7AA7D2] py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mb-8">
                <div>
                    <h3 class="text-white font-bold text-xl mb-4">WildWing Haven</h3>
                    <p class="text-white/80">A magical forest adventure awaits!</p>
                </div>
                <div>
                    <h3 class="text-white font-bold text-xl mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="/Privacy16/" class="text-white/80 hover:text-white">Privacy Policy</a></li>
                        <li><a href="/Terms92/" class="text-white/80 hover:text-white">Terms of Service</a></li>
                        <li><a href="/Cookie24/" class="text-white/80 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-bold text-xl mb-4">Contact</h3>
                    <p class="text-white/80">info@<?php echo $_SERVER['HTTP_HOST'] ?></p>
                </div>
            </div>
            <div class="border-t border-white/20 pt-8 text-center">
                <p class="text-white/80">&copy; 2025 WildWing Haven. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        function toggleNav() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>

</html>

<?php
$cookieConsentHtml = '
<style>
.cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    transform: translateY(100%);
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 50;
    background: rgba(122, 167, 210, 0.95);
    backdrop-filter: blur(8px);
    border-top: 2px solid #A8C9EA;
}

.cookie-container {
    padding: 1rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.cookie-content {
    flex: 1;
}

.cookie-title {
    font-size: 1.1rem;
    color: white;
    margin-bottom: 0.5rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.cookie-title i {
    color: #95A59E;
}

.cookie-text {
    color: white;
    line-height: 1.4;
    font-size: 0.9rem;
    margin: 0;
    opacity: 0.9;
}

.cookie-link {
    color: #6A7865;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    border-bottom: 1px solid rgba(149, 165, 158, 0.3);
}

.cookie-link:hover {
    color: white;
    border-bottom-color: white;
}

.cookie-buttons {
    display: flex;
    gap: 1rem;
    align-items: center;
    flex-shrink: 0;
}

.cookie-button-reject,
.cookie-button-accept {
    padding: 0.5rem 1.25rem;
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 999px;
}

.cookie-button-reject {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.cookie-button-reject:hover {
    background: white;
    color: #7AA7D2;
}

.cookie-button-accept {
    background: #95A59E;
    border: none;
    color: white;
    font-weight: 600;
}

.cookie-button-accept:hover {
    background: white;
    color: #95A59E;
}

@media (max-width: 768px) {
    .cookie-container {
        flex-direction: column;
        padding: 1rem;
        text-align: center;
    }

    .cookie-buttons {
        width: 100%;
        justify-content: center;
    }
}
</style>
<div id="cookieConsent" class="cookie-consent">
    <div class="cookie-container">
        <div class="cookie-content">
            <h3 class="cookie-title">
                <i class="fas fa-cookie-bite"></i>
                Cookie Policy
            </h3>
            <p class="cookie-text">
                At WildWing Haven, we use cookies to enhance your gaming experience. By continuing to use our website, you agree to our use of cookies. For more information, please read our 
                <a href="/Privacy16/" class="cookie-link">Privacy Policy</a> 
                and 
                <a href="/Terms92/" class="cookie-link">Terms of Service</a>.
            </p>
        </div>
        
        <div class="cookie-buttons">
            <button id="rejectCookies" class="cookie-button-reject">
                Decline
            </button>
            <button id="acceptCookies" class="cookie-button-accept">
                Accept
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
   const cookieConsent = document.getElementById("cookieConsent");
   const acceptBtn = document.getElementById("acceptCookies");
   const rejectBtn = document.getElementById("rejectCookies");
   
   if (!getCookie("aprenderd_cookie_consent")) {
       setTimeout(() => {
           cookieConsent.style.transform = "translateY(0)";
       }, 1000);
   }

   function getCookie(name) {
       let matches = document.cookie.match(new RegExp(
           "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"
       ));
       return matches ? decodeURIComponent(matches[1]) : undefined;
   }
   
   function setCookie(name, value, days) {
       const date = new Date();
       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
       const expires = "; expires=" + date.toUTCString();
       document.cookie = name + "=" + value + expires + "; path=/; SameSite=Strict; Secure";
   }

   function handleConsent(consent) {
       setCookie("aprenderd_cookie_consent", consent, 365);
       cookieConsent.style.transform = "translateY(100%)";
       
       setTimeout(() => {
           cookieConsent.remove();
       }, 500);
   }

   acceptBtn.addEventListener("click", () => handleConsent("accepted"));
   rejectBtn.addEventListener("click", () => handleConsent("rejected"));
});
</script>
';

if (!isset($_COOKIE["aprenderd_cookie_consent"])) {
    echo $cookieConsentHtml;
}
?>