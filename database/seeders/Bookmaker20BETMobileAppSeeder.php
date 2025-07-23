<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 20BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 20BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET bookmaker offers users convenient and functional apps for Android and a web app for iOS. Both versions are designed with a focus on speed, stability, and full access to all platform features. Through these apps, you can place sports bets, play live casino games, perform payment operations, and much more."}',
             'value_es' => '{"0":"La casa de apuestas 20BET ofrece a los usuarios aplicaciones cómodas y funcionales para Android y una aplicación web para iOS. Ambas versiones están diseñadas con un enfoque en la velocidad, la estabilidad y el acceso completo a todas las funciones de la plataforma. A través de estas aplicaciones, puedes hacer apuestas deportivas, jugar en el casino en vivo, realizar operaciones de pago y mucho más."}',
             'value_fr' => '{"0":"Le bookmaker 20BET propose aux utilisateurs des applications pratiques et fonctionnelles pour Android ainsi qu’une application web pour iOS. Les deux versions sont conçues avec un accent sur la rapidité, la stabilité et l’accès complet à toutes les fonctionnalités de la plateforme. Grâce à ces applications, vous pouvez placer des paris sportifs, jouer au casino en direct, effectuer des opérations de paiement, et bien plus encore."}',
             'value_pt' => '{"0":"A casa de apostas 20BET oferece aos usuários aplicativos convenientes e funcionais para Android e um aplicativo web para iOS. Ambas as versões foram desenvolvidas com foco na velocidade, estabilidade e acesso completo a todos os recursos da plataforma. Com esses aplicativos, você pode fazer apostas esportivas, jogar no cassino ao vivo, realizar transações financeiras e muito mais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a closer look at the features of the 20BET mobile applications, their advantages and disadvantages, and provide step-by-step installation instructions for both operating systems."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle las características de las aplicaciones móviles de 20BET, sus ventajas y desventajas, y proporcionaremos instrucciones paso a paso para la instalación en ambos sistemas operativos."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons en détail les particularités des applications mobiles de 20BET, leurs avantages et inconvénients, ainsi que des instructions d’installation étape par étape pour les deux systèmes d’exploitation."}',
             'value_pt' => '{"0":"Nesta análise, examinaremos em detalhes as características dos aplicativos móveis da 20BET, suas vantagens e desvantagens, e forneceremos instruções passo a passo para a instalação em ambos os sistemas operacionais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 20BET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 20BET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 20BET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 20BET"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full access to all site features",
                                 "1":"Fast page loading",
                                 "2":"Intuitive user interface",
                                 "3":"Bonus activation",
                                 "4":"Push notifications",
                                 "5":"Viewing transaction history"},
                             "1":
                                {"0":"Not available on the App Store and Google Play Store",
                                 "1":"No live chat"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso completo a todas las funciones del sitio",
                                 "1":"Carga rápida de páginas",
                                 "2":"Interfaz intuitiva",
                                 "3":"Activación de bonos",
                                 "4":"Notificaciones push",
                                 "5":"Visualización del historial de transacciones"},
                             "1":
                                {"0":"No disponible en App Store ni Google Play Store",
                                 "1":"Sin chat en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès complet à toutes les fonctionnalités du site",
                                 "1":"Chargement rapide des pages",
                                 "2":"Interface intuitive",
                                 "3":"Activation des bonus",
                                 "4":"Notifications push",
                                 "5":"Consultation de l’historique des transactions"},
                             "1":
                                {"0":"Non disponible sur l’App Store et Google Play Store",
                                 "1":"Pas de chat en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso completo a todas as funcionalidades do site",
                                 "1":"Carregamento rápido das páginas",
                                 "2":"Interface intuitiva",
                                 "3":"Ativação de bônus",
                                 "4":"Notificações push",
                                 "5":"Visualização do histórico de transações"},
                             "1":
                                {"0":"Não disponível na App Store e na Google Play Store",
                                 "1":"Sem chat ao vivo"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 20BET App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 20BET en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 20BET sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 20BET no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Since the app is not available on the Google Play Store, we have prepared a step-by-step guide for alternative installation of the mobile app:"}',
             'value_es' => '{"0":"Dado que la aplicación no está disponible en Google Play Store, hemos preparado una guía paso a paso para su instalación alternativa:"}',
             'value_fr' => '{"0":"Étant donné que l\'application n\'est pas disponible sur le Google Play Store, nous avons préparé un guide étape par étape pour une installation alternative de l\'application mobile :"}',
             'value_pt' => '{"0":"Como o aplicativo não está disponível na Google Play Store, preparamos um guia passo a passo para a instalação alternativa do aplicativo móvel:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 20BET website using your mobile browser."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de 20BET desde el navegador de tu móvil."}',
             'value_fr' => '{"0":"1. Allez sur le site officiel de 20BET via le navigateur de votre mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 20BET pelo navegador do seu celular."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"2. Find the «Mobile App» button in the top menu and go to the app download page."}',
             'value_es' => '{"0":"2. Busca el botón «Mobile App» en el menú superior y accede a la página de descarga."}',
             'value_fr' => '{"0":"2. Trouvez le bouton «Mobile App» dans le menu supérieur et accédez à la page de téléchargement."}',
             'value_pt' => '{"0":"2. Encontre o botão «Mobile App» no menu superior e vá para a página de download."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Download Android App» button."}',
             'value_es' => '{"0":"3. Pulsa el botón «Descargar aplicación para Android»."}',
             'value_fr' => '{"0":"3. Appuyez sur le bouton « Télécharger l’application Android »."}',
             'value_pt' => '{"0":"3. Toque no botão «Baixar aplicativo Android»."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"4. Confirm the download of the .apk file."}',
             'value_es' => '{"0":"4. Confirma la descarga del archivo .apk."}',
             'value_fr' => '{"0":"4. Confirmez le téléchargement du fichier .apk."}',
             'value_pt' => '{"0":"4. Confirme o download do arquivo .apk."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"5. In your phone settings, allow installation from unknown sources. To do this, go to Settings → Security → Allow installation from unknown sources."}',
             'value_es' => '{"0":"5. En la configuración del teléfono, permite la instalación de aplicaciones de fuentes desconocidas. Para ello, ve a Configuración → Seguridad → Permitir instalación de fuentes desconocidas."}',
             'value_fr' => '{"0":"5. Dans les paramètres du téléphone, autorisez l’installation depuis des sources inconnues. Allez dans Paramètres → Sécurité → Autoriser l’installation à partir de sources inconnues."}',
             'value_pt' => '{"0":"5. Nas configurações do celular, permita a instalação de fontes desconhecidas. Vá em Configurações → Segurança → Permitir instalação de fontes desconhecidas."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"6. Open the downloaded .apk file and confirm the installation."}',
             'value_es' => '{"0":"6. Abre el archivo .apk descargado y confirma la instalación."}',
             'value_fr' => '{"0":"6. Ouvrez le fichier .apk téléchargé et confirmez l’installation."}',
             'value_pt' => '{"0":"6. Abra o arquivo .apk baixado e confirme a instalação."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"That\'s it. All you need to do now is log in to your account or register. Please note: only install the mobile app from the official website."}',
             'value_es' => '{"0":"Eso es todo. Solo te queda iniciar sesión en tu cuenta o registrarte. Ten en cuenta que debes instalar la aplicación móvil únicamente desde el sitio web oficial."}',
             'value_fr' => '{"0":"C’est tout. Il ne vous reste plus qu’à vous connecter à votre compte ou à vous inscrire. Veuillez noter : installez l’application mobile uniquement depuis le site officiel."}',
             'value_pt' => '{"0":"É isso. Agora é só entrar na sua conta ou se registrar. Atenção: instale o aplicativo móvel apenas no site oficial."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 20BET App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 20BET en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 20BET sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 20BET no iOS (iPhone, iPad)"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"If the official 20BET app is not available in the App Store in your region, you can easily install the web app on your device’s home screen. This will allow you to launch the 20BET website like a regular app. To do this:"}',
             'value_es' => '{"0":"Si la aplicación oficial de 20BET no está disponible en la App Store de tu región, puedes instalar fácilmente la aplicación web en la pantalla de inicio de tu dispositivo. Esto te permitirá abrir el sitio web de 20BET como si fuera una aplicación normal. Para hacerlo:"}',
             'value_fr' => '{"0":"Si l’application officielle de 20BET n’est pas disponible dans l’App Store de votre région, vous pouvez facilement installer l’application web sur l’écran d’accueil de votre appareil. Cela vous permettra de lancer le site 20BET comme une application classique. Pour cela :"}',
             'value_pt' => '{"0":"Se o aplicativo oficial da 20BET não estiver disponível na App Store da sua região, você pode facilmente instalar o aplicativo web na tela inicial do seu dispositivo. Isso permitirá abrir o site da 20BET como se fosse um aplicativo comum. Para isso:"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"1. Open Safari on your iPhone or iPad, as installation is only available through Safari. Other browsers (Chrome, Firefox, etc.) do not support this feature."}',
             'value_es' => '{"0":"1. Abre Safari en tu iPhone o iPad, ya que la instalación solo está disponible a través de Safari. Otros navegadores (Chrome, Firefox, etc.) no admiten esta función."}',
             'value_fr' => '{"0":"1. Ouvrez Safari sur votre iPhone ou iPad, car l’installation n’est possible qu’avec Safari. Les autres navigateurs (Chrome, Firefox, etc.) ne prennent pas en charge cette fonctionnalité."}',
             'value_pt' => '{"0":"1. Abra o Safari no seu iPhone ou iPad, pois a instalação só está disponível através do Safari. Outros navegadores (Chrome, Firefox, etc.) não suportam essa função."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the official 20BET website and wait for the page to fully load."}',
             'value_es' => '{"0":"2. Ve al sitio web oficial de 20BET y espera a que la página se cargue completamente."}',
             'value_fr' => '{"0":"2. Accédez au site officiel de 20BET et attendez que la page se charge complètement."}',
             'value_pt' => '{"0":"2. Acesse o site oficial da 20BET e aguarde o carregamento completo da página."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Share» icon. This button looks like a square with an upward arrow and is located at the bottom of the screen."}',
             'value_es' => '{"0":"3. Pulsa el icono de «Compartir». Este botón parece un cuadrado con una flecha hacia arriba y está ubicado en la parte inferior de la pantalla."}',
             'value_fr' => '{"0":"3. Touchez l’icône «Partager». Ce bouton ressemble à un carré avec une flèche vers le haut, situé en bas de l’écran."}',
             'value_pt' => '{"0":"3. Toque no ícone de «Compartilhar». Esse botão parece um quadrado com uma seta apontando para cima e está localizado na parte inferior da tela."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"4. In the menu that appears, select «Add to Home Screen»."}',
             'value_es' => '{"0":"4. En el menú que aparece, selecciona «Añadir a pantalla de inicio»."}',
             'value_fr' => '{"0":"4. Dans le menu qui s’affiche, sélectionnez «Ajouter à l’écran d’accueil»."}',
             'value_pt' => '{"0":"4. No menu que aparecer, selecione «Adicionar à tela de início»."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"5. Tap «Add» in the top right corner."}',
             'value_es' => '{"0":"5. Pulsa «Añadir» en la esquina superior derecha."}',
             'value_fr' => '{"0":"5. Touchez «Ajouter» dans le coin supérieur droit."}',
             'value_pt' => '{"0":"5. Toque em «Adicionar» no canto superior direito."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Done! An icon for 20BET will appear on your home screen, opening the mobile version of the site in full-screen mode, allowing you to access the full functionality of the website."}',
             'value_es' => '{"0":"¡Listo! Un ícono de 20BET aparecerá en tu pantalla de inicio, abriendo la versión móvil del sitio en modo de pantalla completa y permitiéndote acceder a todas las funciones del sitio web."}',
             'value_fr' => '{"0":"C’est fait ! Une icône 20BET apparaîtra sur votre écran d’accueil, ouvrant la version mobile du site en mode plein écran, vous permettant ainsi d’accéder à toutes les fonctionnalités du site."}',
             'value_pt' => '{"0":"Pronto! Um ícone da 20BET aparecerá na tela inicial, abrindo a versão móvel do site em modo de tela cheia e permitindo que você acesse todas as funcionalidades do site."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 20BET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 20BET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 20BET"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET apps provide full functionality required both for betting and for account management:"}',
             'value_es' => '{"0":"Las aplicaciones de 20BET ofrecen toda la funcionalidad necesaria tanto para apostar como para gestionar tu cuenta:"}',
             'value_fr' => '{"0":"Les applications 20BET offrent toutes les fonctionnalités nécessaires pour parier et gérer votre compte :"}',
             'value_pt' => '{"0":"Os aplicativos da 20BET oferecem funcionalidade completa tanto para apostas quanto para a gestão da conta:"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list_v2',
             'value_en' => '{"0":"Quick access to thousands of events in pre-match and live modes, with filters by sports, leagues, and odds.",
                             "1":"Instant updates of odds and statistics.",
                             "2":"Access to slot machines, roulette, blackjack, and live games with real dealers.",
                             "3":"Deposits and withdrawals through all available payment methods, including bank cards, cryptocurrencies, and e-wallets.",
                             "4":"Promo code activation, participation in promotions and tournaments directly.",
                             "5":"Account management, profile settings.",
                             "6":"Viewing of bet and transaction history."}',
             'value_es' => '{"0":"Acceso rápido a miles de eventos en modos pre-partido y en vivo, con filtros por deportes, ligas y cuotas.",
                             "1":"Actualización instantánea de cuotas y estadísticas.",
                             "2":"Acceso a tragamonedas, ruleta, blackjack y juegos en vivo con crupieres reales.",
                             "3":"Depósitos y retiros a través de todos los métodos de pago disponibles, incluidas tarjetas bancarias, criptomonedas y monederos electrónicos.",
                             "4":"Activación de códigos promocionales, participación en promociones y torneos directamente.",
                             "5":"Gestión de cuenta, configuración de perfil.",
                             "6":"Visualización del historial de apuestas y transacciones."}',
             'value_fr' => '{"0":"Accès rapide à des milliers d’événements en modes pré-match et en direct, avec filtres par sports, ligues et cotes.",
                             "1":"Mise à jour instantanée des cotes et des statistiques.",
                             "2":"Accès aux machines à sous, à la roulette, au blackjack, ainsi qu’aux jeux en direct avec croupiers réels.",
                             "3":"Dépôts et retraits via tous les moyens de paiement disponibles, y compris cartes bancaires, cryptomonnaies et portefeuilles électroniques.",
                             "4":"Activation de codes promo, participation directe aux promotions et tournois.",
                             "5":"Gestion du compte, paramètres de profil.",
                             "6":"Consultation de l’historique des paris et des transactions."}',
             'value_pt' => '{"0":"Acesso rápido a milhares de eventos nos modos pré-jogo e ao vivo, com filtros por esportes, ligas e odds.",
                             "1":"Atualização instantânea de odds e estatísticas.",
                             "2":"Acesso a caça-níqueis, roleta, blackjack e jogos ao vivo com dealers reais.",
                             "3":"Depósitos e saques por todos os métodos de pagamento disponíveis, incluindo cartões bancários, criptomoedas e carteiras eletrônicas.",
                             "4":"Ativação de códigos promocionais, participação em promoções e torneios diretamente.",
                             "5":"Gerenciamento da conta, configurações de perfil.",
                             "6":"Visualização do histórico de apostas e transações."}',
             'order' => 26
            ]
        );
    }
}
