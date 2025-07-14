<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"MOSTBET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de MOSTBET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile MOSTBET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da MOSTBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Like all other bookmakers, MOSTBET has gradually evolved into a multi-platform ecosystem where mobile applications play a key role."}',
             'value_es' => '{"0":"Al igual que otras casas de apuestas, MOSTBET se ha transformado gradualmente en un ecosistema multiplataforma donde las aplicaciones móviles desempeñan un papel fundamental."}',
             'value_fr' => '{"0":"Comme tous les autres bookmakers, MOSTBET a progressivement évolué vers un écosystème multiplateforme où les applications mobiles jouent un rôle essentiel."}',
             'value_pt' => '{"0":"Assim como outras casas de apostas, a MOSTBET evoluiu gradualmente para um ecossistema multiplataforma onde os aplicativos móveis desempenham um papel fundamental."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers dedicated apps for Android and iOS, providing full access to all its services. With the apps, you can place bets on sports and esports, play in the casino, deposit and withdraw funds, use bonuses, and much more."}',
             'value_es' => '{"0":"Mostbet ofrece aplicaciones dedicadas para Android e iOS que brindan acceso completo a todos sus servicios. A través de las apps, puedes apostar en deportes y deportes electrónicos, jugar en el casino, depositar y retirar fondos, utilizar bonos y mucho más."}',
             'value_fr' => '{"0":"Mostbet propose des applications distinctes pour Android et iOS, offrant un accès complet à tous ses services. Grâce à ces applications, vous pouvez parier sur le sport et l’esport, jouer au casino, effectuer des dépôts et retraits, profiter des bonus et bien plus encore."}',
             'value_pt' => '{"0":"A Mostbet oferece aplicativos dedicados para Android e iOS que proporcionam acesso total a todos os seus serviços. Com os apps, você pode fazer apostas em esportes e eSports, jogar no cassino, depositar e sacar fundos, usar bônus e muito mais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"These apps are not simplified versions of the website — they are fully functional solutions designed for comfortable gaming wherever you are."}',
             'value_es' => '{"0":"Estas aplicaciones no son versiones simplificadas del sitio web, sino soluciones completas para disfrutar del juego cómodamente desde cualquier lugar."}',
             'value_fr' => '{"0":"Ces applications ne sont pas de simples versions allégées du site web, mais de véritables solutions complètes conçues pour jouer confortablement, où que vous soyez."}',
             'value_pt' => '{"0":"Esses aplicativos não são versões simplificadas do site — são soluções completas pensadas para garantir conforto e praticidade em qualquer lugar."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MOSTBET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MOSTBET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MOSTBET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MOSTBET"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full functionality as on the website",
                                 "1":"Optimized for slow internet connections",
                                 "2":"Automatically connects to the current mirror site",
                                 "3":"Push notifications",
                                 "4":"User-friendly interface"},
                             "1":
                                {"0":"Android version is not available on Google Play",
                                 "1":"Manual updates required on Android"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa como en el sitio web",
                                 "1":"Optimizado para conexiones de internet lentas",
                                 "2":"Se conecta automáticamente al espejo actual",
                                 "3":"Notificaciones push",
                                 "4":"Interfaz cómoda y fácil de usar"},
                             "1":
                                {"0":"La versión para Android no está disponible en Google Play",
                                 "1":"Actualizaciones manuales en Android"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète comme sur le site web",
                                 "1":"Optimisé pour les connexions internet lentes",
                                 "2":"Se connecte automatiquement au miroir actuel",
                                 "3":"Notifications push",
                                 "4":"Interface conviviale"},
                             "1":
                                {"0":"La version Android n’est pas disponible sur Google Play",
                                 "1":"Mises à jour manuelles sur Android"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa como no site",
                                 "1":"Otimizado para conexões de internet lentas",
                                 "2":"Conecta-se automaticamente ao espelho atual",
                                 "3":"Notificações push",
                                 "4":"Interface amigável"},
                             "1":
                                {"0":"Versão Android não disponível no Google Play",
                                 "1":"Atualizações manuais no Android"}
                             }',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 1XBET App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 1XBET en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 1XBET sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1XBET no Android"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Due to Google’s policy, the mobile app for Android is not available in the Google Play Store. But don’t worry, we will explain how you can install the app on your smartphone. So, here’s how:"}',
             'value_es' => '{"0":"Debido a la política de Google, la aplicación móvil para Android no está disponible en Google Play Store. Pero no te preocupes, te explicaremos cómo puedes instalar la aplicación en tu smartphone. Así que, aquí está cómo:"}',
             'value_fr' => '{"0":"En raison de la politique de Google, l’application mobile pour Android n’est pas disponible sur le Google Play Store. Mais ne vous inquiétez pas, nous allons vous expliquer comment installer l’application sur votre smartphone. Voici comment faire :"}',
             'value_pt' => '{"0":"Devido à política do Google, o aplicativo móvel para Android não está disponível na Google Play Store. Mas não desanime, vamos explicar como você pode instalar o app no seu smartphone. Então, veja como:"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official Mostbet website from your smartphone or tablet. It’s best to do this through a mobile browser."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de Mostbet desde tu smartphone o tablet. Es recomendable hacerlo desde un navegador móvil."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de Mostbet depuis votre smartphone ou tablette. Il est recommandé d’utiliser un navigateur mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da Mostbet pelo seu smartphone ou tablet. É recomendável usar um navegador móvel."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"2. Find the «Mobile App» section, usually located in the footer or as a banner on the homepage."}',
             'value_es' => '{"0":"2. Busca la sección «Aplicación móvil», que suele estar en el menú inferior o como un banner en la página principal."}',
             'value_fr' => '{"0":"2. Trouvez la section «Application mobile», située généralement dans le menu inférieur ou en bannière sur la page d’accueil."}',
             'value_pt' => '{"0":"2. Encontre a seção «Aplicativo móvel», geralmente localizada no menu inferior ou como um banner na página inicial."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap «Download for Android» — the APK file will start downloading."}',
             'value_es' => '{"0":"3. Pulsa en «Descargar para Android» — se iniciará la descarga del archivo APK."}',
             'value_fr' => '{"0":"3. Appuyez sur «Télécharger pour Android» — le fichier APK commencera à se télécharger."}',
             'value_pt' => '{"0":"3. Toque em «Baixar para Android» — o arquivo APK começará a ser baixado."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"4. Enable the permission to install from «Unknown sources». You can do this in your device’s security settings. This permission is required only once."}',
             'value_es' => '{"0":"4. Activa el permiso para instalar desde «Fuentes desconocidas». Esto se configura en los ajustes de seguridad de tu dispositivo. Solo es necesario hacerlo una vez."}',
             'value_fr' => '{"0":"4. Activez l’autorisation d’installation depuis «Sources inconnues». Cela se fait dans les paramètres de sécurité de votre appareil. Cette autorisation n’est requise qu’une seule fois."}',
             'value_pt' => '{"0":"4. Ative a permissão para instalar de «Fontes desconhecidas». Isso é feito nas configurações de segurança do seu dispositivo. Essa permissão é necessária apenas uma vez."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and tap «Install». The entire process takes less than a minute."}',
             'value_es' => '{"0":"5. Abre el archivo descargado y pulsa «Instalar». Todo el proceso tarda menos de un minuto."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et appuyez sur «Installer». L’ensemble de la procédure prend moins d’une minute."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e toque em «Instalar». Todo o processo leva menos de um minuto."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"6. Launch the app, register or log in, and you can immediately start placing sports bets."}',
             'value_es' => '{"0":"6. Abre la aplicación, regístrate o inicia sesión, y podrás comenzar a apostar en deportes de inmediato."}',
             'value_fr' => '{"0":"6. Lancez l’application, inscrivez-vous ou connectez-vous, et vous pourrez immédiatement commencer à parier sur le sport."}',
             'value_pt' => '{"0":"6. Inicie o aplicativo, registre-se ou faça login, e você poderá começar a apostar em esportes imediatamente."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the MOSTBET App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de MOSTBET en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application MOSTBET sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MOSTBET no iOS (iPhone, iPad)"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
                'order' => 16
            ],
            ['key' => 'mostbet',
                'bookmaker_id' => 5,
                'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
                'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, installing the app is much easier, as it is available in the App Store. Here’s how to do it:"}',
             'value_es' => '{"0":"Para los usuarios de iOS, instalar la aplicación es mucho más sencillo, ya que está disponible en la App Store. Así es como se hace:"}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’installation de l’application est beaucoup plus simple, car elle est disponible sur l’App Store. Voici comment faire :"}',
             'value_pt' => '{"0":"Para os usuários de iOS, instalar o aplicativo é muito mais fácil, pois ele está disponível na App Store. Veja como fazer:"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l’App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"2. In the search bar, type «Mostbet». Note that the app may not be available in all regions, so if needed, change your country in the Apple ID settings."}',
             'value_es' => '{"0":"2. En la barra de búsqueda, escribe «Mostbet». Ten en cuenta que la app puede no estar disponible en todas las regiones, así que si es necesario, cambia el país en la configuración de tu Apple ID."}',
             'value_fr' => '{"0":"2. Dans la barre de recherche, tapez «Mostbet». Notez que l’application peut ne pas être disponible dans toutes les régions, vous devrez peut-être changer de pays dans les paramètres de votre identifiant Apple."}',
             'value_pt' => '{"0":"2. Na barra de pesquisa, digite «Mostbet». Observe que o app pode não estar disponível em todas as regiões; se necessário, altere o país nas configurações do seu ID Apple."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the official app — it’s easy to recognize by the Mostbet logo."}',
             'value_es' => '{"0":"3. Selecciona la aplicación oficial — es fácil de reconocer por el logotipo de Mostbet."}',
             'value_fr' => '{"0":"3. Sélectionnez l’application officielle — facilement reconnaissable grâce au logo de Mostbet."}',
             'value_pt' => '{"0":"3. Selecione o aplicativo oficial — facilmente reconhecível pelo logotipo da Mostbet."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap «Download». The installation process takes up to 1 minute."}',
             'value_es' => '{"0":"4. Pulsa «Descargar». El proceso de descarga e instalación tarda hasta 1 minuto."}',
             'value_fr' => '{"0":"4. Appuyez sur «Télécharger». Le téléchargement et l’installation prennent jusqu’à une minute."}',
             'value_pt' => '{"0":"4. Toque em «Baixar». O processo de download e instalação leva até 1 minuto."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"5. Once installed, open the app and log in. All features will be available immediately."}',
             'value_es' => '{"0":"5. Una vez instalada, abre la app e inicia sesión. Todas las funciones estarán disponibles de inmediato."}',
             'value_fr' => '{"0":"5. Une fois installée, ouvrez l’application et connectez-vous. Toutes les fonctionnalités seront immédiatement accessibles."}',
             'value_pt' => '{"0":"5. Após a instalação, abra o app e faça login. Todos os recursos estarão disponíveis imediatamente."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"6. Set up notifications, interface language, and other preferences to make the experience as convenient as possible."}',
             'value_es' => '{"0":"6. Configura las notificaciones, el idioma de la interfaz y otros ajustes para que el uso sea lo más cómodo posible."}',
             'value_fr' => '{"0":"6. Configurez les notifications, la langue de l’interface et les autres paramètres pour une utilisation optimale."}',
             'value_pt' => '{"0":"6. Configure notificações, idioma da interface e outras preferências para tornar o uso o mais conveniente possível."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the MOSTBET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de MOSTBET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile MOSTBET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da MOSTBET"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet mobile app is not just a replacement for the website — it’s a standalone platform with extensive features:"}',
             'value_es' => '{"0":"La aplicación móvil de Mostbet no es simplemente una copia del sitio web, sino una plataforma independiente con amplias funcionalidades:"}',
             'value_fr' => '{"0":"L’application mobile Mostbet n’est pas seulement une alternative au site web — c’est une plateforme autonome aux fonctionnalités étendues :"}',
             'value_pt' => '{"0":"O aplicativo móvel da Mostbet não é apenas uma substituição do site — é uma plataforma independente com amplos recursos:"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list_v2',
             'value_en' => '{"0":"Live betting",
                             "1":"Casino and live games",
                             "2":"Bonuses and promotions",
                             "3":"Payment transactions",
                             "4":"Profile and settings",
                             "5":"24/7 support"}',
             'value_es' => '{"0":"Apuestas en vivo",
                             "1":"Casino y juegos en vivo",
                             "2":"Bonos y promociones",
                             "3":"Transacciones de pago",
                             "4":"Perfil y configuración",
                             "5":"Soporte 24/7"}',
             'value_fr' => '{"0":"Paris en direct",
                             "1":"Casino et jeux en direct",
                             "2":"Bonus et promotions",
                             "3":"Transactions de paiement",
                             "4":"Profil et paramètres",
                             "5":"Assistance 24h/24 et 7j/7"}',
             'value_pt' => '{"0":"Apostas ao vivo",
                             "1":"Cassino e jogos ao vivo",
                             "2":"Bônus e promoções",
                             "3":"Transações de pagamento",
                             "4":"Perfil e configurações",
                             "5":"Suporte 24 horas por dia, 7 dias por semana"}',
             'order' => 26
            ]
        );
    }
}
