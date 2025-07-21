<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 22BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 22BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is one of the leading international bookmakers actively developing in the betting market. Like all top companies, 22BET also offers its own mobile apps for Android and iOS, allowing users to conveniently and quickly place bets anytime and anywhere."}',
             'value_es' => '{"0":"22BET es una de las casas de apuestas internacionales líderes que se desarrolla activamente en el mercado de apuestas. Como todas las principales compañías, 22BET también ofrece sus propias aplicaciones móviles para Android e iOS, que permiten a los usuarios realizar apuestas de forma cómoda y rápida en cualquier momento y lugar."}',
             'value_fr' => '{"0":"22BET est l’un des principaux bookmakers internationaux en plein développement sur le marché des paris. Comme toutes les grandes entreprises, 22BET propose également ses propres applications mobiles pour Android et iOS, permettant aux utilisateurs de parier facilement et rapidement, où qu’ils soient et quand ils le souhaitent."}',
             'value_pt' => '{"0":"22BET é uma das principais casas de apostas internacionais que está se desenvolvendo ativamente no mercado de apostas. Assim como todas as principais empresas, a 22BET também oferece seus próprios aplicativos móveis para Android e iOS, permitindo que os usuários façam apostas de forma conveniente e rápida, em qualquer lugar e a qualquer momento."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The apps are designed according to modern requirements and include all the main features available on the desktop version of the site, while being optimized for mobile devices for maximum convenience and speed."}',
             'value_es' => '{"0":"Las aplicaciones están diseñadas según los requisitos modernos e incluyen todas las funciones principales disponibles en la versión de escritorio del sitio, mientras que están optimizadas para dispositivos móviles para máxima comodidad y rapidez."}',
             'value_fr' => '{"0":"Les applications sont conçues selon les exigences modernes et incluent toutes les principales fonctionnalités disponibles sur la version bureau du site, tout en étant optimisées pour les appareils mobiles afin d’assurer une commodité et une rapidité maximales."}',
             'value_pt' => '{"0":"Os aplicativos são projetados de acordo com os requisitos modernos e incluem todos os recursos principais disponíveis na versão para desktop do site, sendo otimizados para dispositivos móveis para máxima conveniência e velocidade."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 22BET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 22BET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 22BET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 22BET"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full functionality",
                                 "1":"Sports betting, live betting, casino",
                                 "2":"Access to bonuses and promotions",
                                 "3":"Adaptive interface",
                                 "4":"Support for multiple languages",
                                 "5":"Push notifications",
                                 "6":"Biometric authentication",
                                 "7":"Deposits and withdrawals"},
                             "1":
                                {"0":"The app size is quite large",
                                 "1":"Delays in updating odds in live mode"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa",
                                 "1":"Apuestas deportivas, apuestas en vivo, casino",
                                 "2":"Acceso a bonificaciones y promociones",
                                 "3":"Interfaz adaptable",
                                 "4":"Soporte para múltiples idiomas",
                                 "5":"Notificaciones push",
                                 "6":"Autenticación biométrica",
                                 "7":"Depósitos y retiros"},
                             "1":
                                {"0":"El tamaño de la aplicación es bastante grande",
                                 "1":"Retrasos en la actualización de cuotas en modo en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète",
                                 "1":"Paris sportifs, paris en direct, casino",
                                 "2":"Accès aux bonus et promotions",
                                 "3":"Interface adaptative",
                                 "4":"Prise en charge de plusieurs langues",
                                 "5":"Notifications push",
                                 "6":"Authentification biométrique",
                                 "7":"Dépôts et retraits"},
                             "1":
                                {"0":"La taille de l\'application est assez grande",
                                 "1":"Retards dans la mise à jour des cotes en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa",
                                 "1":"Apostas esportivas, apostas ao vivo, cassino",
                                 "2":"Acesso a bônus e promoções",
                                 "3":"Interface adaptável",
                                 "4":"Suporte a vários idiomas",
                                 "5":"Notificações push",
                                 "6":"Autenticação biométrica",
                                 "7":"Depósitos e saques"},
                             "1":
                                {"0":"O tamanho do aplicativo é bastante grande",
                                 "1":"Atrasos na atualização das odds em modo ao vivo"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 22BET App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 22BET en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 22BET sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 22BET no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"As with most bookmakers, the mobile app is not available for download from Google Play. That’s why our step-by-step installation guide will come in handy for installing the app on your device."}',
             'value_es' => '{"0":"Como ocurre con la mayoría de las casas de apuestas, la aplicación móvil no está disponible en Google Play. Por eso, nuestra guía paso a paso para instalar la aplicación en tu dispositivo te será de gran ayuda."}',
             'value_fr' => '{"0":"Comme pour la plupart des bookmakers, l\'application mobile n\'est pas disponible sur Google Play. C’est pourquoi notre guide d’installation étape par étape vous sera utile pour installer l’application sur votre appareil."}',
             'value_pt' => '{"0":"Como acontece com a maioria das casas de apostas, o aplicativo móvel não está disponível na Google Play. Por isso, o nosso guia passo a passo será útil para instalar o aplicativo no seu dispositivo."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official 22BET website via your smartphone browser."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de 22BET desde el navegador de tu smartphone."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de 22BET via le navigateur de votre smartphone."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 22BET através do navegador do seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the «Mobile Apps» section or click the banner to download the Android app."}',
             'value_es' => '{"0":"2. Ve a la sección «Aplicaciones móviles» o haz clic en el banner para descargar la app de Android."}',
             'value_fr' => '{"0":"2. Allez dans la section « Applications mobiles » ou cliquez sur la bannière pour télécharger l\'application Android."}',
             'value_pt' => '{"0":"2. Vá até a seção «Aplicativos móveis» ou clique no banner de download do app para Android."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file to your device."}',
             'value_es' => '{"0":"3. Descarga el archivo APK en tu dispositivo."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK para o seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"4. Before installing, open your Android settings and allow installation from unknown sources. You can do this by going to Settings → Security → Allow installation from unknown sources."}',
             'value_es' => '{"0":"4. Antes de instalar, abre la configuración de Android y permite la instalación desde fuentes desconocidas. Puedes hacerlo yendo a Configuración → Seguridad → Permitir instalación de aplicaciones de fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Avant l’installation, ouvrez les paramètres Android et autorisez l’installation depuis des sources inconnues. Vous pouvez le faire en allant dans Paramètres → Sécurité → Autoriser les applications de sources inconnues."}',
             'value_pt' => '{"0":"4. Antes de instalar, abra as configurações do Android e permita a instalação de fontes desconhecidas. Você pode fazer isso indo em Configurações → Segurança → Permitir instalação de aplicativos de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"5. Run the downloaded APK file and follow the on-screen instructions to install it."}',
             'value_es' => '{"0":"5. Ejecuta el archivo APK descargado y sigue las instrucciones en pantalla para completar la instalación."}',
             'value_fr' => '{"0":"5. Lancez le fichier APK téléchargé et suivez les instructions à l’écran pour l’installer."}',
             'value_pt' => '{"0":"5. Execute o arquivo APK baixado e siga as instruções na tela para concluir a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"6. Once installed, open the app, log in to your account or register."}',
             'value_es' => '{"0":"6. Una vez instalada, abre la app, inicia sesión en tu cuenta o regístrate."}',
             'value_fr' => '{"0":"6. Une fois installé, ouvrez l’application, connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo, faça login na sua conta ou registre-se."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Now you can stay updated on all 22BET promotions and bonuses and enjoy the game directly from your mobile device."}',
             'value_es' => '{"0":"Ahora puedes mantenerte al tanto de todas las promociones y bonificaciones de 22BET y disfrutar del juego directamente desde tu dispositivo móvil."}',
             'value_fr' => '{"0":"Vous pouvez désormais rester informé de toutes les promotions et bonus de 22BET et profiter du jeu directement depuis votre appareil mobile."}',
             'value_pt' => '{"0":"Agora você pode ficar por dentro de todas as promoções e bônus da 22BET e aproveitar o jogo diretamente no seu dispositivo móvel."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 22BET App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 22BET en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 22BET sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 22BET no iOS (iPhone, iPad)"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For users of mobile devices running on iOS, everything is much simpler, as the app is available in the App Store. Here’s what you need to do:"}',
             'value_es' => '{"0":"Para los usuarios de dispositivos móviles con iOS, todo es mucho más sencillo, ya que la aplicación está disponible en la App Store. Esto es lo que debes hacer:"}',
             'value_fr' => '{"0":"Pour les utilisateurs d\'appareils mobiles fonctionnant sous iOS, c’est beaucoup plus simple, car l\'application est disponible sur l\'App Store. Voici ce que vous devez faire :"}',
             'value_pt' => '{"0":"Para os usuários de dispositivos móveis com iOS, tudo é muito mais simples, pois o aplicativo está disponível na App Store. Veja o que você precisa fazer:"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l’App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Type «22BET» in the search bar and find the official app."}',
             'value_es' => '{"0":"Escribe «22BET» en la barra de búsqueda y encuentra la aplicación oficial."}',
             'value_fr' => '{"0":"Tapez «22BET» dans la barre de recherche et trouvez l’application officielle."}',
             'value_pt' => '{"0":"Digite «22BET» na barra de pesquisa e encontre o aplicativo oficial."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Download» or «Get» button."}',
             'value_es' => '{"0":"3. Pulsa el botón «Descargar» o «Obtener»."}',
             'value_fr' => '{"0":"3. Appuyez sur le bouton « Télécharger » ou « Obtenir »."}',
             'value_pt' => '{"0":"3. Toque no botão «Baixar» ou «Obter»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"4. Wait for the download and installation to complete."}',
             'value_es' => '{"0":"4. Espera a que se complete la descarga e instalación."}',
             'value_fr' => '{"0":"4. Attendez que le téléchargement et l\'installation se terminent."}',
             'value_pt' => '{"0":"4. Aguarde até que o download e a instalação sejam concluídos."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"5. Launch the app, log in with your credentials or register directly within the app."}',
             'value_es' => '{"0":"5. Abre la aplicación, inicia sesión con tus datos o regístrate directamente desde la app."}',
             'value_fr' => '{"0":"5. Lancez l\'application, connectez-vous avec vos identifiants ou inscrivez-vous directement dans l’application."}',
             'value_pt' => '{"0":"5. Abra o aplicativo, faça login com suas credenciais ou registre-se diretamente no app."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"As you can see, installing the 22BET app is no different from installing any other app and takes very little time."}',
             'value_es' => '{"0":"Como puedes ver, instalar la aplicación de 22BET no es diferente a cualquier otra y lleva muy poco tiempo."}',
             'value_fr' => '{"0":"Comme vous pouvez le constater, l’installation de l’application 22BET ne diffère en rien des autres applications et prend très peu de temps."}',
             'value_pt' => '{"0":"Como pode ver, instalar o aplicativo da 22BET não é diferente de qualquer outro e leva muito pouco tempo."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 22BET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 22BET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 22BET"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To better understand why you should install the mobile app on your device, here is a list of its main features:"}',
             'value_es' => '{"0":"Para comprender mejor por qué deberías instalar la aplicación móvil en tu dispositivo, aquí tienes una lista de sus principales funciones:"}',
             'value_fr' => '{"0":"Pour mieux comprendre pourquoi vous devriez installer l’application mobile sur votre appareil, voici la liste de ses principales fonctionnalités:"}',
             'value_pt' => '{"0":"Para entender melhor por que você deve instalar o aplicativo móvel no seu dispositivo, aqui está uma lista dos principais recursos:"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list_v2',
             'value_en' => '{"0":"Sports betting: A wide selection of sports events including football, tennis, basketball, esports, and other disciplines.",
                             "1":"Ability to place bets in real time with instant odds updates.",
                             "2":"Access to a large number of slots, table games, and live dealer games.",
                             "3":"Convenient deposits and withdrawals with support for over 100 payment methods.",
                             "4":"Activation of promo codes, claiming welcome and regular bonuses, and participation in promotions directly from the app.",
                             "5":"Timely notifications about bet status, new bonuses, and important events.",
                             "6":"Manage your profile, betting history, financial transactions, and security settings."}',
             'value_es' => '{"0":"Apuestas deportivas: Una amplia selección de eventos deportivos como fútbol, tenis, baloncesto, deportes electrónicos y otras disciplinas.",
                             "1":"Posibilidad de realizar apuestas en tiempo real con actualizaciones instantáneas de cuotas.",
                             "2":"Acceso a una gran variedad de tragamonedas, juegos de mesa y juegos con crupieres en vivo.",
                             "3":"Depósitos y retiros cómodos con soporte para más de 100 métodos de pago.",
                             "4":"Activación de códigos promocionales, obtención de bonos de bienvenida y regulares, y participación en promociones directamente desde la aplicación.",
                             "5":"Notificaciones oportunas sobre el estado de las apuestas, nuevos bonos y eventos importantes.",
                             "6":"Gestión del perfil, historial de apuestas, transacciones financieras y configuraciones de seguridad."}',
             'value_fr' => '{"0":"Paris sportifs: un large choix d’événements sportifs, dont le football, le tennis, le basketball, l’esport et d’autres disciplines.",
                             "1":"Possibilité de parier en temps réel avec mise à jour instantanée des cotes.",
                             "2":"Accès à un grand nombre de machines à sous, de jeux de table et de jeux avec croupiers en direct.",
                             "3":"Dépôts et retraits pratiques avec plus de 100 méthodes de paiement prises en charge.",
                             "4":"Activation de codes promo, obtention de bonus de bienvenue et réguliers, et participation aux promotions directement depuis l’application.",
                             "5":"Notifications en temps utile concernant l’état des paris, les nouveaux bonus et les événements importants.",
                             "6":"Gestion du profil, de l’historique des paris, des transactions financières et des paramètres de sécurité."}',
             'value_pt' => '{"0":"Apostas esportivas: ampla variedade de eventos esportivos como futebol, tênis, basquete, eSports e outras modalidades.",
                             "1":"Possibilidade de apostar em tempo real com atualização instantânea das odds.",
                             "2":"Acesso a uma grande variedade de slots, jogos de mesa e jogos com crupiês ao vivo.",
                             "3":"Depósitos e saques convenientes com suporte a mais de 100 métodos de pagamento.",
                             "4":"Ativação de códigos promocionais, recebimento de bônus de boas-vindas e regulares, e participação em promoções diretamente no app.",
                             "5":"Notificações em tempo hábil sobre o status das apostas, novos bônus e eventos importantes.",
                             "6":"Gerenciamento de perfil, histórico de apostas, transações financeiras e configurações de segurança."}',
             'order' => 26
            ]
        );
    }
}
