
        // Objet contenant les traductions
        const translations = {
            en: {
                home: "HOME",
                about: "ABOUT",
                products: "PRODUCTS",
                fashion: "FASHION",
                news: "NEWS",
                contact: "CONTACT US",
                login: "Login"
            },
            fr: {
                home: "ACCUEIL",
                about: "À PROPOS",
                products: "PRODUITS",
                fashion: "MODE",
                news: "NOUVELLES",
                contact: "CONTACTEZ-NOUS",
                login: "Connexion"
            },
            ar: {
                home: "الصفحة الرئيسية",
                about: "معلومات عنا",
                products: "المنتجات",
                fashion: "الموضة",
                news: "الأخبار",
                contact: "اتصل بنا",
                login: "تسجيل الدخول"
            }
        };

        // Fonction pour changer la langue
        const changeLanguage = (lang) => {
            const elements = document.querySelectorAll("[data-key]");
            elements.forEach((el) => {
                const key = el.getAttribute("data-key");
                el.textContent = translations[lang][key];
            });
        };

        // Détection du changement de langue
        document.getElementById("languageSelector").addEventListener("change", (e) => {
            const selectedLang = e.target.value;
            changeLanguage(selectedLang);
        });

        // Initialiser la langue par défaut
        changeLanguage("en");