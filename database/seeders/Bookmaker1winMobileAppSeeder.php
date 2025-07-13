<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1win"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1win"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"The bookmaker 1win, which has gained popularity across Europe, Asia, and the CIS countries in just a few years, offers fully functional mobile apps for Android and iOS. The company has focused on simplicity, stability, and full alignment between the mobile app and the desktop platform, allowing users to enjoy unrestricted functionality. Whether you\'re a sports betting enthusiast or a live casino fan, the 1win mobile apps let you play anytime and anywhere — as long as you have a stable internet connection."}',
                'value_es' => '{"0":"La casa de apuestas 1win, que ha ganado popularidad en Europa, Asia y los países de la CEI en tan solo unos años, ofrece aplicaciones móviles totalmente funcionales para Android e iOS. La empresa ha apostado por la simplicidad, la estabilidad y la plena correspondencia entre la aplicación móvil y la versión de escritorio, lo que permite a los usuarios disfrutar de todas las funciones sin restricciones. Ya sea que seas un aficionado a las apuestas deportivas o un amante del casino en vivo, las aplicaciones móviles de 1win te permiten jugar en cualquier momento y lugar, siempre que tengas una conexión estable a internet."}',
                'value_fr' => '{"0":"Le bookmaker 1win, qui a gagné en popularité en Europe, en Asie et dans les pays de la CEI en quelques années seulement, propose des applications mobiles entièrement fonctionnelles pour Android et iOS. L’entreprise mise sur la simplicité, la stabilité et une parfaite correspondance entre l’application mobile et la version de bureau, offrant ainsi aux utilisateurs une expérience sans limitations. Que vous soyez amateur de paris sportifs ou adepte de casino en direct, les applications mobiles de 1win vous permettent de jouer à tout moment et en tout lieu, à condition de disposer d’une connexion Internet stable."}',
                'value_pt' => '{"0":"A casa de apostas 1win, que conquistou popularidade na Europa, Ásia e nos países da CEI em apenas alguns anos, oferece aplicativos móveis totalmente funcionais para Android e iOS. A empresa priorizou a simplicidade, a estabilidade e a total equivalência entre o aplicativo móvel e a plataforma de desktop, permitindo que os usuários desfrutem de todas as funcionalidades sem limitações. Seja você um fã de apostas esportivas ou de cassinos ao vivo, os aplicativos móveis da 1win permitem jogar a qualquer hora e em qualquer lugar — desde que tenha uma conexão estável com a internet."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 1win Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1win"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1win"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1win"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"Convenient interface",
                                 "1":"Full website functionality",
                                 "2":"Push notifications and personalization",
                                 "3":"Built-in live streams"},
                             "1":
                                {"0":"Not available in Play Market and App Store in some countries"}
                             }',
                'value_es' => '{"0":
                                {"0":"Interfaz conveniente",
                                 "1":"Funcionalidad completa del sitio web",
                                 "2":"Notificaciones push y personalización",
                                 "3":"Transmisiones en vivo integradas"},
                             "1":
                                {"0":"No disponible en Play Market y App Store en algunos países"}
                             }',
                'value_fr' => '{"0":
                                {"0":"Interface conviviale",
                                 "1":"Fonctionnalité complète du site web",
                                 "2":"Notifications push et personnalisation",
                                 "3":"Diffusions en direct intégrées"},
                             "1":
                                {"0":"Non disponible sur Play Market et App Store dans certains pays"}
                             }',
                'value_pt' => '{"0":
                                {"0":"Interface conveniente",
                                 "1":"Funcionalidade completa do site",
                                 "2":"Notificações push e personalização",
                                 "3":"Transmissões ao vivo integradas"},
                             "1":
                                {"0":"Não disponível na Play Market e App Store em alguns países"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 1win App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 1win en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 1win sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1win no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"Installing the app doesn’t take much time, especially when you follow our step-by-step guide."}',
                'value_es' => '{"0":"La instalación de la aplicación no lleva mucho tiempo, especialmente si sigues nuestra guía paso a paso."}',
                'value_fr' => '{"0":"L\'installation de l\'application ne prend pas beaucoup de temps, surtout si vous suivez notre guide étape par étape."}',
                'value_pt' => '{"0":"A instalação do aplicativo não leva muito tempo, especialmente se você seguir nosso guia passo a passo."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"1. Open the browser on your smartphone."}',
                'value_es' => '{"0":"1. Abre el navegador en tu smartphone."}',
                'value_fr' => '{"0":"1. Ouvrez le navigateur sur votre smartphone."}',
                'value_pt' => '{"0":"1. Abra o navegador no seu smartphone."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"2. Go to the official 1win website."}',
                'value_es' => '{"0":"2. Ve al sitio web oficial de 1win."}',
                'value_fr' => '{"0":"2. Allez sur le site officiel de 1win."}',
                'value_pt' => '{"0":"2. Acesse o site oficial da 1win."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"3. On the homepage, find the «Mobile App» section in the menu."}',
                'value_es' => '{"0":"3. En la página principal, encuentra la sección «Aplicación móvil» en el menú."}',
                'value_fr' => '{"0":"3. Sur la page d’accueil, trouvez la section « Application mobile » dans le menu."}',
                'value_pt' => '{"0":"3. Na página inicial, encontre a seção «Aplicativo móvel» no menu."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"4. Click the «Download for Android» button — the APK file will start downloading."}',
                'value_es' => '{"0":"4. Haz clic en el botón «Descargar para Android» — se iniciará la descarga del archivo APK."}',
                'value_fr' => '{"0":"4. Cliquez sur le bouton « Télécharger pour Android » — le fichier APK commencera à se télécharger."}',
                'value_pt' => '{"0":"4. Clique no botão «Baixar para Android» — o arquivo APK começará a ser baixado."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"5. Once downloaded, open the file. If a warning appears, go to settings and allow installation from unknown sources."}',
                'value_es' => '{"0":"5. Una vez descargado, abre el archivo. Si aparece una advertencia, ve a la configuración y permite la instalación de aplicaciones de orígenes desconocidos."}',
                'value_fr' => '{"0":"5. Une fois le fichier téléchargé, ouvrez-le. Si un message d’avertissement apparaît, allez dans les paramètres et autorisez l’installation à partir de sources inconnues."}',
                'value_pt' => '{"0":"5. Após o download, abra o arquivo. Se aparecer um aviso, vá para as configurações e permita a instalação de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"6. Confirm the installation and wait for the process to complete."}',
                'value_es' => '{"0":"6. Confirma la instalación y espera a que se complete el proceso."}',
                'value_fr' => '{"0":"6. Confirmez l’installation et attendez qu’elle se termine."}',
                'value_pt' => '{"0":"6. Confirme a instalação e aguarde até que o processo seja concluído."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"7. The app will appear on your home screen. Open it."}',
                'value_es' => '{"0":"7. La aplicación aparecerá en la pantalla principal. Ábrela."}',
                'value_fr' => '{"0":"7. L’application apparaîtra sur votre écran d’accueil. Ouvrez-la."}',
                'value_pt' => '{"0":"7. O aplicativo aparecerá na tela inicial. Abra-o."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"8. Log in to your account or register a new profile."}',
                'value_es' => '{"0":"8. Inicia sesión en tu cuenta o crea un nuevo perfil."}',
                'value_fr' => '{"0":"8. Connectez-vous à votre compte ou créez un nouveau profil."}',
                'value_pt' => '{"0":"8. Faça login na sua conta ou registre um novo perfil."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"We recommend downloading the app only from the official website to avoid fakes or infected APK files."}',
                'value_es' => '{"0":"Recomendamos descargar la aplicación solo desde el sitio web oficial para evitar archivos APK falsos o infectados."}',
                'value_fr' => '{"0":"Nous vous conseillons de télécharger l\'application uniquement depuis le site officiel afin d\'éviter les fichiers APK falsifiés ou infectés."}',
                'value_pt' => '{"0":"Recomendamos baixar o aplicativo apenas do site oficial para evitar arquivos APK falsos ou infectados."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 1win App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 1win en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 1win sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1win no iOS (iPhone, iPad)"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately, the mobile app for iOS users is currently not available in the App Store. But there\'s no need to worry — 1win offers a solution that works just as well as a mobile app. Below, we’ll explain how you can use it."}',
                'value_es' => '{"0":"Lamentablemente, la aplicación móvil para usuarios de iOS no está disponible actualmente en la App Store. Pero no te preocupes, ya que 1win ofrece una solución que funciona tan bien como una aplicación móvil. A continuación, te explicamos cómo utilizarla."}',
                'value_fr' => '{"0":"Malheureusement, l’application mobile pour les utilisateurs iOS n’est actuellement pas disponible sur l’App Store. Mais pas de panique — 1win propose une solution qui fonctionne tout aussi bien qu’une application mobile. Ci-dessous, nous vous expliquons comment l’utiliser."}',
                'value_pt' => '{"0":"Infelizmente, o aplicativo móvel para usuários iOS não está disponível na App Store no momento. Mas não se preocupe — a 1win oferece uma solução que funciona tão bem quanto um aplicativo. Abaixo, explicamos como utilizá-la."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"1. Open Safari on your iPhone."}',
                'value_es' => '{"0":"1. Abre Safari en tu iPhone."}',
                'value_fr' => '{"0":"1. Ouvrez Safari sur votre iPhone."}',
                'value_pt' => '{"0":"1. Abra o Safari no seu iPhone."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"2. Go to the official 1win website."}',
                'value_es' => '{"0":"2. Ve al sitio web oficial de 1win."}',
                'value_fr' => '{"0":"2. Allez sur le site officiel de 1win."}',
                'value_pt' => '{"0":"2. Acesse o site oficial da 1win."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"3. In the «Mobile App» section, tap the «Install on iOS» button."}',
                'value_es' => '{"0":"3. En la sección «Aplicación móvil», pulsa el botón «Instalar en iOS»."}',
                'value_fr' => '{"0":"3. Dans la section « Application mobile », appuyez sur le bouton « Installer sur iOS »."}',
                'value_pt' => '{"0":"3. Na seção «Aplicativo móvel», toque no botão «Instalar no iOS»."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"4. The site will prompt you to add a shortcut to your home screen — this is a web app that looks like a regular mobile app."}',
                'value_es' => '{"0":"4. El sitio te sugerirá añadir un acceso directo a la pantalla de inicio — se trata de una aplicación web que se ve como una aplicación móvil normal."}',
                'value_fr' => '{"0":"4. Le site vous proposera d’ajouter un raccourci à votre écran d’accueil — c’est une application web qui ressemble à une application mobile classique."}',
                'value_pt' => '{"0":"4. O site sugerirá adicionar um atalho à tela inicial — é um aplicativo web que se parece com um app móvel comum."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"5. Tap «Share» (the icon with an upward arrow), then select «Add to Home Screen»."}',
                'value_es' => '{"0":"5. Pulsa «Compartir» (el icono con la flecha hacia arriba) y luego «Agregar a pantalla de inicio»."}',
                'value_fr' => '{"0":"5. Appuyez sur « Partager » (l’icône avec une flèche vers le haut), puis sur « Ajouter à l’écran d’accueil »."}',
                'value_pt' => '{"0":"5. Toque em «Compartilhar» (ícone com uma seta para cima) e depois em «Adicionar à tela de início»."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"6. The 1win icon will appear among your apps — you can open it like a regular application."}',
                'value_es' => '{"0":"6. El icono de 1win aparecerá entre tus aplicaciones — podrás abrirlo como una app habitual."}',
                'value_fr' => '{"0":"6. L’icône 1win apparaîtra parmi vos applications — vous pourrez l’ouvrir comme une application normale."}',
                'value_pt' => '{"0":"6. O ícone da 1win aparecerá entre seus aplicativos — você poderá abri-lo como um aplicativo normal."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 1win Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1win"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1win"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"The 1win mobile app is not just a simplified version of the website. It’s a fully functional tool for daily gaming, offering all the features available on the desktop version. Here’s what you can do in the app:"}',
                'value_es' => '{"0":"La aplicación móvil de 1win no es simplemente una versión simplificada del sitio web. Es una herramienta completa para jugar a diario, con todas las funciones disponibles en la versión de escritorio. Esto es lo que puedes hacer en la app:"}',
                'value_fr' => '{"0":"L\'application mobile 1win n\'est pas simplement une version allégée du site web. C’est un outil complet pour jouer au quotidien, avec toutes les fonctionnalités disponibles sur la version de bureau. Voici ce que vous pouvez faire dans l’application :"}',
                'value_pt' => '{"0":"O aplicativo móvel da 1win não é apenas uma versão simplificada do site. É uma ferramenta completa para jogar diariamente, com todos os recursos disponíveis na versão para desktop. Veja o que você pode fazer no app:"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
                'value_en' => '{"0":"Register",
                                "1":"Place sports bets",
                                "2":"Place esports bets",
                                "3":"Play in the casino and live casino",
                                "4":"Perform financial transactions",
                                "5":"Use bonuses, cashback, and take part in promotions",
                                "6":"Access 24/7 customer support"}',
                'value_es' => '{"0":"Registrarse",
                                "1":"Hacer apuestas deportivas",
                                "2":"Hacer apuestas en deportes electrónicos",
                                "3":"Jugar en el casino y casino en vivo",
                                "4":"Realizar operaciones financieras",
                                "5":"Usar bonos, cashback y participar en promociones",
                                "6":"Acceder al servicio de atención al cliente 24/7"}',
                'value_fr' => '{"0":"S\'inscrire",
                                "1":"Placer des paris sportifs",
                                "2":"Parier sur l’esport",
                                "3":"Jouer au casino et au live casino",
                                "4":"Effectuer des transactions financières",
                                "5":"Utiliser les bonus, le cashback et participer aux promotions",
                                "6":"Accéder au service client 24h/24 et 7j/7"}',
                'value_pt' => '{"0":"Registrar-se",
                                "1":"Fazer apostas esportivas",
                                "2":"Fazer apostas em eSports",
                                "3":"Jogar no cassino e cassino ao vivo",
                                "4":"Realizar transações financeiras",
                                "5":"Usar bônus, cashback e participar de promoções",
                                "6":"Acessar o suporte ao cliente 24/7"}',
             'order' => 27
            ]
        );
    }
}
