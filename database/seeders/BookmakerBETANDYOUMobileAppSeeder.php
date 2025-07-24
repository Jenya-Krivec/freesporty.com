<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Revue de l\'application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da BETANDYOU"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU, like most bookmakers, offers users full-featured apps for Android and iOS platforms. BETANDYOU apps stand out for their high speed and wide functionality, fully reflecting the capabilities of the desktop version of the site."}',
             'value_es' => '{"0":"BETANDYOU, al igual que la mayoría de las casas de apuestas, ofrece a los usuarios aplicaciones completas para las plataformas Android e iOS. Las aplicaciones de BETANDYOU se destacan por su alta velocidad y amplia funcionalidad, reflejando completamente las capacidades de la versión de escritorio del sitio."}',
             'value_fr' => '{"0":"BETANDYOU, comme la plupart des bookmakers, propose aux utilisateurs des applications complètes pour les plateformes Android et iOS. Les applications BETANDYOU se distinguent par leur grande rapidité et leur large fonctionnalité, reflétant pleinement les capacités de la version desktop du site."}',
             'value_pt' => '{"0":"A BETANDYOU, como a maioria das casas de apostas, oferece aos utilizadores aplicações completas para as plataformas Android e iOS. As aplicações BETANDYOU destacam-se pela sua alta velocidade e ampla funcionalidade, refletindo totalmente as capacidades da versão de desktop do site."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"With the mobile app, you can place sports bets, play casino games, perform financial transactions, and participate in bonus programs. All these features will be at your fingertips. In this review, we offer a detailed look at installing the mobile apps."}',
             'value_es' => '{"0":"Con la aplicación móvil, puedes hacer apuestas deportivas, jugar en el casino, realizar transacciones financieras y participar en programas de bonificación. Todas estas funciones estarán al alcance de tu mano. En esta reseña, te ofrecemos un análisis detallado sobre la instalación de las aplicaciones móviles."}',
             'value_fr' => '{"0":"Avec l’application mobile, vous pouvez placer des paris sportifs, jouer au casino, effectuer des transactions financières et participer aux programmes de bonus. Toutes ces fonctionnalités seront à portée de main. Dans cet article, nous proposons un examen détaillé de l’installation des applications mobiles"}',
             'value_pt' => '{"0":"Com a aplicação móvel, pode fazer apostas desportivas, jogar no casino, realizar transações financeiras e participar em programas de bónus. Todas estas funcionalidades estarão ao seu alcance. Nesta análise, oferecemos uma visão detalhada sobre a instalação das aplicações móveis."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the BETANDYOU Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de BETANDYOU"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles BETANDYOU"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da BETANDYOU"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Optimized interface",
                                 "1":"Instant odds updates",
                                 "2":"Push notifications",
                                 "3":"Financial transactions",
                                 "4":"Bonus programs"},
                             "1":
                                {"0":"No live video streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz optimizada",
                                 "1":"Actualización instantánea de cuotas",
                                 "2":"Notificaciones push",
                                 "3":"Transacciones financieras",
                                 "4":"Programas de bonificación"},
                             "1":
                                {"0":"Sin transmisiones de video en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface optimisée",
                                 "1":"Mise à jour instantanée des cote",
                                 "2":"Notifications push",
                                 "3":"Transactions financières",
                                 "4":"Programmes de bonus"},
                             "1":
                                {"0":"Pas de diffusion vidéo en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface otimizada",
                                 "1":"Atualização instantânea das odds",
                                 "2":"Notificações push",
                                 "3":"Transações financeiras",
                                 "4":"Programas de bónus"},
                             "1":
                                {"0":"Sem transmissões de vídeo ao vivo"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the BETANDYOU App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de BETANDYOU en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application BETANDYOU sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da BETANDYOU no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Since the mobile app for Android devices cannot be downloaded from the Google Play Store, we have specially prepared a step-by-step guide to help you install it without any problems."}',
             'value_es' => '{"0":"Dado que la aplicación móvil para dispositivos Android no se puede descargar desde Google Play Store, hemos preparado una guía paso a paso para que no tengas problemas al instalarla."}',
             'value_fr' => '{"0":"Comme l’application mobile pour les appareils Android ne peut pas être téléchargée depuis le Google Play Store, nous avons spécialement préparé un guide étape par étape pour vous aider à l’installer sans problème."}',
             'value_pt' => '{"0":"Como a aplicação móvel para dispositivos Android não pode ser descarregada a partir da Google Play Store, preparamos especialmente um guia passo a passo para que não tenha problemas na instalação."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official BETANDYOU website using the browser on your smartphone."}',
             'value_es' => '{"0":"1. Accede al sitio web oficial de BETANDYOU desde el navegador de tu smartphone."}',
             'value_fr' => '{"0":"1. Allez sur le site officiel de BETANDYOU via le navigateur de votre smartphone."}',
             'value_pt' => '{"0":"1. Aceda ao site oficial da BETANDYOU através do navegador do seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"2. In the top right corner, click the «Smartphone app» button and go to the mobile apps download page."}',
             'value_es' => '{"0":"2. En la esquina superior derecha, haz clic en el botón «Smartphone app» y dirígete a la página de descarga de aplicaciones móviles."}',
             'value_fr' => '{"0":"2. En haut à droite, cliquez sur le bouton «Smartphone app» et accédez à la page de téléchargement des applications mobiles."}',
             'value_pt' => '{"0":"2. No canto superior direito, clique no botão «Smartphone app» e vá para a página de download das aplicações móveis."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"3. Click the «Download for Android» button and save the APK file to your device."}',
             'value_es' => '{"0":"3. Haz clic en el botón «Descargar para Android» y guarda el archivo APK en tu dispositivo."}',
             'value_fr' => '{"0":"3. Cliquez sur le bouton «Télécharger pour Android» et enregistrez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"3. Clique no botão «Descarregar para Android» e guarde o ficheiro APK no seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"4. Enable permission to install apps from unknown sources in your device’s security settings. To do this, go to Settings → Security → Allow installation from unknown sources."}',
             'value_es' => '{"0":"4. Activa el permiso para instalar aplicaciones de fuentes desconocidas en la configuración de seguridad del dispositivo. Para ello, ve a Ajustes → Seguridad → Permitir instalación desde fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Activez l’autorisation d’installation d’applications provenant de sources inconnues dans les paramètres de sécurité de votre appareil. Pour cela, allez dans Paramètres → Sécurité → Autoriser l’installation depuis des sources inconnues."}',
             'value_pt' => '{"0":"4. Ative a permissão para instalar aplicações de fontes desconhecidas nas definições de segurança do dispositivo. Para isso, vá a Definições → Segurança → Permitir instalação a partir de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and start the installation."}',
             'value_es' => '{"0":"5. Abre el archivo descargado y comienza la instalación."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et lancez l’installation."}',
             'value_pt' => '{"0":"5. Abra o ficheiro descarregado e inicie a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"As you can see, the procedure is not complicated at all. Now you can log into your account or register and start playing right from your smartphone."}',
             'value_es' => '{"0":"Como puedes ver, el procedimiento no es complicado en absoluto. Ahora puedes iniciar sesión en tu cuenta o registrarte y comenzar a jugar desde tu smartphone."}',
             'value_fr' => '{"0":"Comme vous pouvez le voir, la procédure n’est pas du tout compliquée. Vous pouvez maintenant vous connecter à votre compte ou vous inscrire et commencer à jouer depuis votre smartphone."}',
             'value_pt' => '{"0":"Como pode ver, o procedimento não é nada complicado. Agora pode entrar na sua conta ou registar-se e começar a jogar diretamente no seu smartphone."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the BETANDYOU App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de BETANDYOU en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application BETANDYOU sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da BETANDYOU no iOS (iPhone, iPad)"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For users of iOS mobile devices, the installation process is even easier since the app can be downloaded from the App Store."}',
             'value_es' => '{"0":"Para los usuarios de dispositivos móviles con iOS, el proceso de instalación es aún más sencillo, ya que la aplicación se puede descargar desde la App Store."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’appareils mobiles iOS, la procédure d’installation est encore plus simple, car l’application peut être téléchargée depuis l’App Store."}',
             'value_pt' => '{"0":"Para os utilizadores de dispositivos móveis iOS, o processo de instalação é ainda mais fácil, pois a aplicação pode ser descarregada na App Store."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l’App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"2. In the search field, type «BETANDYOU»."}',
             'value_es' => '{"0":"2. En el campo de búsqueda, escribe «BETANDYOU»."}',
             'value_fr' => '{"0":"2. Dans le champ de recherche, tapez « BETANDYOU »."}',
             'value_pt' => '{"0":"2. No campo de pesquisa, digite «BETANDYOU»."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"3. Find the official app and click the «Download» button."}',
             'value_es' => '{"0":"3. Encuentra la aplicación oficial y pulsa el botón «Descargar»."}',
             'value_fr' => '{"0":"3. Trouvez l’application officielle et cliquez sur le bouton « Télécharger »."}',
             'value_pt' => '{"0":"3. Encontre a aplicação oficial e clique no botão «Descarregar»."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"After the installation is complete, open the app and log into your account or create a new one. If needed, allow notifications for a more convenient interaction with the platform."}',
             'value_es' => '{"0":"Después de completar la instalación, abre la aplicación e inicia sesión en tu cuenta o crea una nueva. Si es necesario, permite las notificaciones para una interacción más cómoda con la plataforma."}',
             'value_fr' => '{"0":"Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau. Si nécessaire, autorisez les notifications pour une interaction plus pratique avec la plateforme."}',
             'value_pt' => '{"0":"Após concluir a instalação, abra a aplicação e inicie sessão na sua conta ou crie uma nova. Se necessário, permita as notificações para uma interação mais conveniente com a plataforma."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the BETANDYOU Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da BETANDYOU"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The functionality of the BETANDYOU mobile app fully reflects the capabilities of the web version. Namely:"}',
             'value_es' => '{"0":"La funcionalidad de la aplicación móvil BETANDYOU refleja completamente las capacidades de la versión web. Es decir:"}',
             'value_fr' => '{"0":"La fonctionnalité de l’application mobile BETANDYOU reflète entièrement les capacités de la version web. À savoir :"}',
             'value_pt' => '{"0":"A funcionalidade da aplicação móvel BETANDYOU reflete totalmente as capacidades da versão web. Nomeadamente:"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list_v2',
             'value_en' => '{"0":"Sports betting in pre-match and live modes with instant odds updates",
                             "1":"Access to statistics and analytics",
                             "2":"Full access to casino sections, live casino, slots, roulette, and table games",
                             "3":"Account deposit and withdrawal",
                             "4":"Activation of bonuses, participation in promotions, receiving cashback",
                             "5":"Push notifications about bonuses, odds changes, bet results, and other events",
                             "6":"Convenient account management, viewing bet history, and profile settings",
                             "7":"24/7 access to customer support via live chat directly in the app"}',
             'value_es' => '{"0":"Apuestas deportivas en modos pre-match y en vivo con actualizaciones instantáneas de cuotas",
                             "1":"Acceso a estadísticas y análisis",
                             "2":"Acceso completo a las secciones de casino, casino en vivo, tragamonedas, ruleta y juegos de mesa",
                             "3":"Depósito y retiro de cuenta",
                             "4":"Activación de bonos, participación en promociones, recepción de cashback",
                             "5":"Notificaciones push sobre bonos, cambios en las cuotas, resultados de apuestas y otros eventos",
                             "6":"Gestión conveniente de la cuenta, visualización del historial de apuestas y configuración del perfil",
                             "7":"Acceso 24/7 al soporte al cliente a través del chat en vivo directamente en la aplicación"}',
             'value_fr' => '{"0":"Paris sportifs en modes pre-match et live avec mises à jour instantanées des cotes",
                             "1":"Accès aux statistiques et analyses",
                             "2":"Accès complet aux sections casino, casino en direct, machines à sous, roulette et jeux de table",
                             "3":"Dépôt et retrait de compte",
                             "4":"Activation des bonus, participation aux promotions, réception de cashback",
                             "5":"Notifications push concernant les bonus, les changements de cotes, les résultats des paris et autres événements",
                             "6":"Gestion pratique du compte, consultation de l’historique des paris et paramètres du profil",
                             "7":"Accès 24h/24 et 7j/7 au service client via chat en direct directement dans l’application"}',
             'value_pt' => '{"0":"Apostas desportivas nos modos pré-jogo e ao vivo com atualizações instantâneas das odds",
                             "1":"Acesso a estatísticas e análises",
                             "2":"Acesso completo às secções de casino, casino ao vivo, slots, roleta e jogos de mesa",
                             "3":"Depósito e levantamento de conta",
                             "4":"Ativação de bónus, participação em promoções, receção de cashback",
                             "5":"Notificações push sobre bónus, alterações das odds, resultados de apostas e outros eventos",
                             "6":"Gestão conveniente da conta, visualização do histórico de apostas e configurações de perfil",
                             "7":"Acesso 24/7 ao suporte ao cliente através do chat ao vivo diretamente na aplicação"}',
             'order' => 23
            ]
        );
    }
}
