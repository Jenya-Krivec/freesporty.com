<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"BetWinner Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de BetWinner"}',
             'value_fr' => '{"0":"Revue de l\'application mobile BetWinner"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da BetWinner"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Bookmakers are actively developing mobile apps that allow users not only to place sports bets but also to watch live streams, top up their accounts, withdraw funds, and even play casino games. BetWinner, one of the leading betting companies, offers its own apps for Android and iOS. In this review, we will take a detailed look at their features, advantages, disadvantages, and the technical aspects of installing them on both platforms."}',
             'value_es' => '{"0":"Las casas de apuestas están desarrollando activamente aplicaciones móviles que permiten no solo apostar en deportes, sino también ver transmisiones en vivo, recargar el saldo, retirar fondos e incluso jugar en el casino. BetWinner, una de las principales casas de apuestas, ofrece sus propias aplicaciones para Android e iOS. En esta reseña analizaremos en detalle sus funciones, ventajas, desventajas y las particularidades técnicas de su instalación en ambas plataformas."}',
             'value_fr' => '{"0":"Les bookmakers développent activement des applications mobiles qui permettent non seulement de parier sur le sport, mais aussi de regarder des retransmissions en direct, d’alimenter son compte, de retirer de l’argent et même de jouer au casino. BetWinner, l’un des principaux opérateurs de paris, propose ses propres applications pour Android et iOS. Dans cet article, nous examinerons en détail leurs fonctionnalités, leurs avantages et inconvénients, ainsi que les aspects techniques de leur installation sur les deux plateformes."}',
             'value_pt' => '{"0":"As casas de apostas estão a desenvolver ativamente aplicações móveis que permitem não apenas apostar em desportos, mas também assistir a transmissões ao vivo, depositar fundos, fazer levantamentos e até jogar no casino. A BetWinner, uma das principais casas de apostas, oferece as suas próprias aplicações para Android e iOS. Nesta análise, vamos explorar em detalhe as funcionalidades, vantagens, desvantagens e os aspetos técnicos da instalação em ambas as plataformas."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"Pros and Cons of the BetWinner Mobile Apps"}',
             'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de BetWinner"}',
             'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles BetWinner"}',
             'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da BetWinner"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full website functionality available",
                                 "1":"One-click betting",
                                 "2":"Push notifications",
                                 "3":"Live video streaming",
                                 "4":"Multilingual support"},
                             "1":
                                {"0":"Android app not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio web disponible",
                                 "1":"Apuestas con pocos clics",
                                 "2":"Notificaciones push",
                                 "3":"Transmisiones en vivo",
                                 "4":"Soporte multilingüe"},
                             "1":
                                {"0":"La app para Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalités complètes du site disponibles",
                                 "1":"Paris en quelques clics",
                                 "2":"Notifications push",
                                 "3":"Diffusions vidéo en direct",
                                 "4":"Prise en charge de plusieurs langues"},
                             "1":
                                {"0":"L\'application Android n\'est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site disponível",
                                 "1":"Apostas em poucos cliques",
                                 "2":"Notificações push",
                                 "3":"Transmissões de vídeo ao vivo",
                                 "4":"Suporte multilíngue"},
                             "1":
                                {"0":"A aplicação Android não está disponível na Google Play"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the BetWinner App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de BetWinner en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application BetWinner sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da BetWinner no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Although the Android app is not available on Google Play, you can still download it to your smartphone. The download process is a bit more complex, but don’t worry — we’ve prepared a step-by-step guide to help you."}',
             'value_es' => '{"0":"Aunque la aplicación para Android no está disponible en Google Play, aún puedes descargarla en tu smartphone. El proceso de descarga es un poco más complejo, pero no te preocupes: hemos preparado una guía paso a paso para ti."}',
             'value_fr' => '{"0":"Bien que l’application Android ne soit pas disponible sur Google Play, vous pouvez tout de même la télécharger sur votre smartphone. La procédure est un peu plus complexe, mais ne vous inquiétez pas — nous avons préparé un guide étape par étape pour vous aider."}',
             'value_pt' => '{"0":"Embora a aplicação para Android não esteja disponível na Google Play, ainda assim pode ser descarregada para o seu smartphone. O processo de download é um pouco mais complexo, mas não se preocupe — preparámos um guia passo a passo para o ajudar."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official BetWinner website using your smartphone browser."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de BetWinner desde el navegador de tu smartphone."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de BetWinner depuis le navigateur de votre smartphone."}',
             'value_pt' => '{"0":"1. Aceda ao site oficial da BetWinner através do navegador do seu smartphone."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"2. At the bottom right of the page, find the «Mobile Applications» section."}',
             'value_es' => '{"0":"2. En la parte inferior derecha de la página, encuentra la sección «Aplicaciones móviles»."}',
             'value_fr' => '{"0":"2. En bas à droite de la page, trouvez la section « Applications mobiles »."}',
             'value_pt' => '{"0":"2. No canto inferior direito da página, encontre a secção «Aplicações móveis»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"3. Click «Download for Android» to download the APK file."}',
             'value_es' => '{"0":"3. Haz clic en «Descargar para Android» para descargar el archivo APK."}',
             'value_fr' => '{"0":"3. Cliquez sur « Télécharger pour Android » pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"3. Clique em «Descarregar para Android» para baixar o ficheiro APK."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"4. Go to Settings → Security and allow the installation of apps from unknown sources."}',
             'value_es' => '{"0":"4. Ve a Configuración → Seguridad y permite la instalación de aplicaciones de fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Allez dans Paramètres → Sécurité et autorisez l’installation d’applications provenant de sources inconnues."}',
             'value_pt' => '{"0":"4. Vá a Definições → Segurança e permita a instalação de aplicações de fontes desconhecidas."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded APK file and tap «Install»."}',
             'value_es' => '{"0":"5. Abre el archivo APK descargado y pulsa «Instalar»."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier APK téléchargé et appuyez sur « Installer »."}',
             'value_pt' => '{"0":"5. Abra o ficheiro APK descarregado e toque em «Instalar»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"6. After the installation is complete, the app will appear on the home screen. Open it, log in, or register."}',
             'value_es' => '{"0":"6. Después de completar la instalación, la aplicación aparecerá en la pantalla principal. Ábrela, inicia sesión o regístrate."}',
             'value_fr' => '{"0":"6. Une fois l’installation terminée, l’application apparaîtra sur l’écran d’accueil. Ouvrez-la, connectez-vous ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Após a conclusão da instalação, o aplicativo aparecerá na tela inicial. Abra-o, faça login ou registre-se."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"We recommend downloading the app exclusively from the official BetWinner website to avoid phishing copies."}',
             'value_es' => '{"0":"Recomendamos descargar la aplicación exclusivamente desde el sitio web oficial de BetWinner para evitar copias de phishing."}',
             'value_fr' => '{"0":"Nous recommandons de télécharger l’application uniquement depuis le site officiel de BetWinner afin d’éviter les copies de phishing."}',
             'value_pt' => '{"0":"Recomendamos descarregar a aplicação exclusivamente do site oficial da BetWinner para evitar cópias de phishing."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the BetWinner App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de BetWinner en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application BetWinner sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da BetWinner no iOS (iPhone, iPad)"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The mobile app is also available for users with iOS devices. Downloading the app is much easier than on Android since it is available in the App Store. If you experience any difficulties with installation, you can always use our guide:"}',
             'value_es' => '{"0":"La aplicación móvil también está disponible para usuarios con dispositivos iOS. Descargar la aplicación es mucho más sencillo que en Android, ya que está disponible en la App Store. Si tienes dificultades con la instalación, siempre puedes usar nuestra guía:"}',
             'value_fr' => '{"0":"L’application mobile est également disponible pour les utilisateurs d’appareils iOS. Le téléchargement est beaucoup plus simple que sur Android, car l’application est disponible sur l’App Store. Si vous rencontrez des difficultés lors de l’installation, vous pouvez toujours utiliser notre guide :"}',
             'value_pt' => '{"0":"A aplicação móvel também está disponível para utilizadores com dispositivos iOS. O download da aplicação é muito mais fácil do que no Android, pois está disponível na App Store. Se tiver dificuldades na instalação, pode sempre usar o nosso guia:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l’App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"2. In the search bar, type «BetWinner»."}',
             'value_es' => '{"0":"2. En el campo de búsqueda, escribe «BetWinner»."}',
             'value_fr' => '{"0":"2. Dans la barre de recherche, tapez «BetWinner»."}',
             'value_pt' => '{"0":"2. Na barra de pesquisa, digite «BetWinner»."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"3. If the app is available, tap «Download» and authenticate using Face ID, Touch ID, or your password."}',
             'value_es' => '{"0":"3. Si la aplicación está disponible, pulsa «Descargar» y autentícate con Face ID, Touch ID o tu contraseña."}',
             'value_fr' => '{"0":"3. Si l’application est disponible, appuyez sur « Télécharger » et authentifiez-vous avec Face ID, Touch ID ou votre mot de passe."}',
             'value_pt' => '{"0":"3. Se a aplicação estiver disponível, toque em «Descarregar» e autentique-se usando o Face ID, Touch ID ou a sua senha."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"4. If the app is not found:"}',
             'value_es' => '{"0":"4. Si la aplicación no se encuentra:"}',
             'value_fr' => '{"0":"4. Si l’application n’est pas trouvée :"}',
             'value_pt' => '{"0":"4. Se a aplicação não for encontrada:"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list_v2',
             'value_en' => '{"0":"Go to Settings → Apple ID → Media & Purchases → View.",
                             "1":"Choose «Country/Region» and change it to Cyprus, Turkey, or the Netherlands, where the app is officially available.",
                             "2":"After changing, return to the App Store and search again."}',
             'value_es' => '{"0":"Ve a Ajustes → Apple ID → Medios y compras → Ver.",
                             "1":"Elige «País/Región» y cámbialo a Chipre, Turquía o Países Bajos, donde la aplicación está oficialmente disponible.",
                             "2":"Después de cambiar, vuelve a la App Store y busca de nuevo."}',
             'value_fr' => '{"0":"Allez dans Réglages → Apple ID → Médias et achats → Voir.",
                             "1":"Choisissez « Pays/Région » et changez-le pour Chypre, Turquie ou Pays-Bas, où l’application est officiellement disponible.",
                             "2":"Après le changement, retournez dans l’App Store et recherchez à nouveau."}',
             'value_pt' => '{"0":"Vá a Definições → Apple ID → Mídia e compras → Ver.",
                             "1":"Escolha «País/Região» e altere para Chipre, Turquia ou Países Baixos, onde a aplicação está oficialmente disponível.",
                             "2":"Após a alteração, volte à App Store e procure novamente."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"5. Install the app and log into your account or register."}',
             'value_es' => '{"0":"5. Instala la aplicación e inicia sesión en tu cuenta o regístrate."}',
             'value_fr' => '{"0":"5. Installez l’application et connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"5. Instale a aplicação e faça login na sua conta ou registe-se."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You shouldn’t worry about changing the region, because after installation you can change it back and continue using the app without any issues."}',
             'value_es' => '{"0":"No deberías preocuparte por haber cambiado la región, ya que después de la instalación puedes volver a cambiarla y seguir usando la aplicación sin problemas."}',
             'value_fr' => '{"0":"Vous ne devez pas vous inquiéter d’avoir changé la région, car après l’installation, vous pouvez la changer à nouveau et continuer à utiliser l’application sans problème."}',
             'value_pt' => '{"0":"Não deve preocupar-se por ter alterado a região, pois após a instalação pode revertê-la e continuar a usar a aplicação sem problemas."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the BetWinner Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de BetWinner"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile BetWinner"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da BetWinner"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner mobile app combines the features of several platforms at once: a bookmaker, a casino, a financial hub, and an information center. Here are the main features:"}',
             'value_es' => '{"0":"La aplicación móvil de BetWinner combina las funciones de varias plataformas a la vez: una casa de apuestas, un casino, un centro financiero y un centro de información. Estas son las principales características:"}',
             'value_fr' => '{"0":"L’application mobile BetWinner combine les fonctions de plusieurs plateformes à la fois : un bookmaker, un casino, un centre financier et un centre d’information. Voici les principales fonctionnalités :"}',
             'value_pt' => '{"0":"A aplicação móvel BetWinner combina as funcionalidades de várias plataformas ao mesmo tempo: uma casa de apostas, um casino, um hub financeiro e um centro de informação. Aqui estão as principais funcionalidades:"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list_v2',
             'value_en' => '{"0":"Sports and esports betting",
                             "1":"Live bets on football, tennis, basketball, hockey, and more",
                             "2":"Detailed statistics, real-time odds, interactive match graphics",
                             "3":"Casino and live dealer games",
                             "4":"Instant account top-up and fast withdrawals",
                             "5":"Support for over 50 payment methods",
                             "6":"Bonuses and promotions",
                             "7":"24/7 live technical support chat"}',
             'value_es' => '{"0":"Apuestas deportivas y de esports",
                             "1":"Apuestas en vivo en fútbol, tenis, baloncesto, hockey y más",
                             "2":"Estadísticas detalladas, cuotas en tiempo real, gráficos interactivos de los partidos",
                             "3":"Casino y juegos en vivo con crupieres reales",
                             "4":"Recargas instantáneas de cuenta y retiros rápidos",
                             "5":"Soporte para más de 50 métodos de pago",
                             "6":"Bonos y promociones",
                             "7":"Chat en vivo de soporte técnico 24/7"}',
             'value_fr' => '{"0":"Paris sportifs et esports",
                             "1":"Paris en direct sur football, tennis, basket-ball, hockey, etc.",
                             "2":"Statistiques détaillées, cotes en temps réel, graphiques interactifs des matchs",
                             "3":"Casino et jeux en direct avec croupiers",
                             "4":"Recharge instantanée du compte et retraits rapides",
                             "5":"Support de plus de 50 méthodes de paiement",
                             "6":"Bonus et promotions",
                             "7":"Chat d’assistance technique en direct 24/7"}',
             'value_pt' => '{"0":"Apostas desportivas e esports",
                             "1":"Apostas ao vivo em futebol, ténis, basquetebol, hóquei e mais",
                             "2":"Estatísticas detalhadas, odds em tempo real, gráficos interativos das partidas",
                             "3":"Casino e jogos ao vivo com dealer",
                             "4":"Recarregamento instantâneo da conta e levantamentos rápidos",
                             "5":"Suporte para mais de 50 métodos de pagamento",
                             "6":"Bónus e promoções",
                             "7":"Chat técnico ao vivo 24/7"}',
             'order' => 26
            ]
        );
    }
}
