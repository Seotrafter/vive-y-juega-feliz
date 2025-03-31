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

        .privacy-section {
            background: linear-gradient(to bottom, #A8C9EA 0%, white 100%);
        }

        .privacy-section-2 {
            background: white;
        }

        .privacy-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background: white/90;
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(122, 167, 210, 0.1);
        }

        .privacy-heading {
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

        .privacy-text {
            color: #4A5568;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .privacy-link {
            color: #95A59E;
            text-decoration: none;
            border-bottom: 1px solid rgba(149, 165, 158, 0.3);
            transition: all 0.3s ease;
        }

        .privacy-link:hover {
            color: #7AA7D2;
            border-bottom-color: #7AA7D2;
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


    <section class="privacy-section py-20">
        <div class="container mx-auto px-4">
            <div class="privacy-container">
                <h1 class="privacy-heading">Privacy Policy</h1>

                <p class="privacy-text">
                    At WildWing Haven, accessible from https://vive-y-juega-feliz.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that are collected and recorded by WildWing Haven and how we use it.
                </p>

                <p class="privacy-text">
                    If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
                </p>

                <h2 class="section-heading">Log Files</h2>
                <p class="privacy-text">
                    WildWing Haven follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and are a part of hosting services' analytics. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any personally identifiable information. The purpose of the information is to analyze trends, administer the site, track users' movement on the website, and gather demographic information.
                </p>

                <h2 class="section-heading">Cookies and Web Beacons</h2>
                <p class="privacy-text">
                    Like any other website, WildWing Haven uses "cookies". These cookies are used to store information including visitors' preferences and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
                </p>

                <h2 class="section-heading">Google DoubleClick DART Cookie</h2>
                <p class="privacy-text">
                    Google is one of the third-party vendors on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to https://vive-y-juega-feliz.com/ and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL –
                    <a href="https://policies.google.com/technologies/ads" class="privacy-link">https://policies.google.com/technologies/ads</a>
                </p>
            </div>
        </div>
    </section>
    <section class="privacy-section-2 py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="privacy-container">
                <h2 class="section-heading">Our Advertising Partners</h2>
                <p class="privacy-text">
                    Some advertisers on our site may use cookies and web beacons. Our advertising partners have their own Privacy Policy for their policies on user data. For easier access, we have hyperlinked to their Privacy Policies below:
                </p>
                <p class="privacy-text">
                    Google - <a href="https://policies.google.com/technologies/ads" class="privacy-link">https://policies.google.com/technologies/ads</a>
                </p>

                <h2 class="section-heading">Third-Party Privacy Policies</h2>
                <p class="privacy-text">
                    WildWing Haven's Privacy Policy does not apply to other advertisers or websites. Thus, we advise you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt out of certain options.
                </p>
                <p class="privacy-text">
                    You can choose to disable cookies through your browser settings. More detailed information about cookie management with specific web browsers can be found on the browsers' respective websites.
                </p>

                <h2 class="section-heading">Children's Information</h2>
                <p class="privacy-text">
                    Protecting children while they use the internet is a top priority for us. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
                </p>
                <p class="privacy-text">
                    WildWing Haven does not knowingly collect any personally identifiable information from children under the age of 13. If you believe that your child has provided this kind of information on our website, we strongly encourage you to contact us immediately, and we will do our best to promptly remove such information from our records.
                </p>

                <h2 class="section-heading">Online Privacy Policy Only</h2>
                <p class="privacy-text">
                    This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they share and/or collect on WildWing Haven. This policy does not apply to any information collected offline or via channels other than this website.
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