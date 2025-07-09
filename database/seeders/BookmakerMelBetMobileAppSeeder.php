<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MelBet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de MelBet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile MelBet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da MelBet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Often, the speed of decision-making, access to betting options, and real-time statistics updates can directly influence your winnings. That’s why mobile apps have become an essential part of every bookmaker’s offering."}',
                'value_es' => '{"0":"A menudo, la rapidez en la toma de decisiones, el acceso a las apuestas y la actualización de estadísticas en tiempo real pueden influir directamente en tus ganancias. Por eso, las aplicaciones móviles se han convertido en una parte fundamental de los servicios de cualquier casa de apuestas."}',
                'value_fr' => '{"0":"Souvent, la rapidité de prise de décision, l’accès aux paris et la mise à jour des statistiques en temps réel peuvent influencer directement vos gains. C’est pourquoi les applications mobiles sont devenues une composante essentielle des services de chaque bookmaker."}',
                'value_pt' => '{"0":"Frequentemente, a velocidade na tomada de decisões, o acesso às apostas e a atualização das estatísticas em tempo real podem influenciar diretamente os seus ganhos. Por isso, os aplicativos móveis tornaram-se uma parte essencial dos serviços de qualquer casa de apostas."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"MelBet also provides fully functional mobile apps for both Android and iOS. These apps are designed to allow users to place bets anytime and anywhere, without compromising on functionality or convenience."}',
                'value_es' => '{"0":"MelBet también ofrece aplicaciones móviles completas para Android e iOS. Estas apps están diseñadas para que los usuarios puedan apostar en cualquier momento y lugar, sin perder funcionalidad ni comodidad."}',
                'value_fr' => '{"0":"MelBet propose également des applications mobiles complètes pour Android et iOS. Ces applications sont conçues pour permettre aux utilisateurs de parier à tout moment et en tout lieu, sans compromettre la fonctionnalité ni la commodité."}',
                'value_pt' => '{"0":"A MelBet também oferece aplicativos móveis completos para Android e iOS. Esses aplicativos foram criados para que os usuários possam apostar a qualquer hora e em qualquer lugar, sem perder funcionalidade ou praticidade."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Thanks to continuous interface improvements and a wide range of features, MelBet\'s mobile apps have become a true companion for sports betting enthusiasts. In this review, we will take a closer look at all the features of these apps, their advantages, and provide step-by-step installation guides."}',
                'value_es' => '{"0":"Gracias a la mejora constante de la interfaz y a su amplio conjunto de funciones, las aplicaciones móviles de MelBet se han convertido en un verdadero aliado para los aficionados a las apuestas deportivas. En este análisis, examinaremos en detalle todas las características, ventajas e incluiremos guías paso a paso para la instalación."}',
                'value_fr' => '{"0":"Grâce à l’amélioration continue de l’interface et à ses nombreuses fonctionnalités, les applications mobiles de MelBet sont devenues un véritable compagnon pour les amateurs de paris sportifs. Dans cette revue, nous examinerons en détail toutes les fonctionnalités, les avantages, ainsi que des instructions d’installation étape par étape."}',
                'value_pt' => '{"0":"Graças à melhoria contínua da interface e a um conjunto rico de funcionalidades, os aplicativos móveis da MelBet tornaram-se verdadeiros aliados para os entusiastas das apostas desportivas. Nesta análise, vamos explorar todas as características dos apps, suas vantagens e fornecer um guia passo a passo para a instalação."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MelBet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MelBet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MelBet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MelBet"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive and user-friendly interface",
                                 "1":"Wide selection of sports events and bet types",
                                 "2":"Live betting with real-time odds updates",
                                 "3":"Live match streaming",
                                 "4":"Easy deposit and withdrawal options",
                                 "5":"High level of security"},
                             "1":
                                {"0":"Android app must be downloaded from the official website"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva y fácil de usar",
                                 "1":"Gran variedad de eventos deportivos y tipos de apuestas",
                                 "2":"Apuestas en vivo con actualización instantánea de cuotas",
                                 "3":"Transmisión en directo de partidos",
                                 "4":"Posibilidad de depósitos y retiros",
                                 "5":"Alto nivel de seguridad"},
                             "1":
                                {"0":"La app para Android debe descargarse desde el sitio oficial"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive et conviviale",
                                 "1":"Large choix d\'événements sportifs et de types de paris",
                                 "2":"Paris en direct avec mise à jour instantanée des cotes",
                                 "3":"Diffusion en direct des matchs",
                                 "4":"Possibilité de dépôt et de retrait",
                                 "5":"Niveau de sécurité élevé"},
                             "1":
                                {"0":"L’application Android doit être téléchargée depuis le site officiel"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva e fácil de usar",
                                 "1":"Grande variedade de eventos esportivos e tipos de apostas",
                                 "2":"Apostas ao vivo com atualização instantânea das odds",
                                 "3":"Transmissão ao vivo de partidas",
                                 "4":"Facilidade para depósitos e saques",
                                 "5":"Alto nível de segurança"},
                             "1":
                                {"0":"O app para Android deve ser baixado no site oficial"}
                             }',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the MelBet App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de MelBet en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application MelBet sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MelBet no Android"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Installing the MelBet mobile app on Android requires a bit more effort than a standard download from Google Play, but the process is quite simple and safe. To make it easier, we\'ve compiled step-by-step installation guidelines."}',
             'value_es' => '{"0":"Instalar la aplicación móvil de MelBet en Android requiere un poco más de esfuerzo que una descarga estándar desde Google Play, pero el proceso es bastante sencillo y seguro. Para facilitarlo, hemos recopilado algunas recomendaciones de instalación."}',
             'value_fr' => '{"0":"L\'installation de l\'application mobile MelBet sur Android demande un peu plus d\'efforts qu\'un simple téléchargement depuis Google Play, mais le processus reste simple et sécurisé. Pour vous aider, nous avons rassemblé des recommandations d\'installation."}',
             'value_pt' => '{"0":"Instalar o aplicativo móvel da MelBet no Android exige um pouco mais de esforço do que um download comum pela Google Play, mas o processo é bastante simples e seguro. Para facilitar, reunimos algumas recomendações de instalação."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official MelBet website. It’s best to do this via your smartphone’s mobile browser to be automatically directed to the mobile-friendly version of the site."}',
             'value_es' => '{"0":"Accede al sitio web oficial de MelBet. Es mejor hacerlo desde el navegador móvil de tu smartphone para ser redirigido automáticamente a la versión adaptada para dispositivos móviles."}',
             'value_fr' => '{"0":"Rendez-vous sur le site officiel de MelBet. Il est préférable de le faire via le navigateur mobile de votre smartphone afin d’être automatiquement redirigé vers la version adaptée aux appareils mobiles."}',
             'value_pt' => '{"0":"Acesse o site oficial da MelBet. É melhor fazer isso pelo navegador móvel do seu smartphone para ser direcionado automaticamente para a versão adaptada para dispositivos móveis."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Find the «Download App» section. The link to this page is located at the bottom right of the website."}',
             'value_es' => '{"0":"Busca la sección «Descargar aplicación». El enlace a esta página se encuentra en la parte inferior derecha del sitio web."}',
             'value_fr' => '{"0":"Trouvez la section « Télécharger l\'application ». Le lien vers cette page se trouve en bas à droite du site."}',
             'value_pt' => '{"0":"Encontre a seção «Baixar aplicativo». O link para essa página está localizado no canto inferior direito do site."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Select the Android version. Tap the button to download the APK file. A warning may appear on your phone about the risks of downloading from unknown sources — this is a standard message."}',
             'value_es' => '{"0":"Selecciona la versión para Android. Pulsa el botón para descargar el archivo APK. Es posible que aparezca una advertencia en tu teléfono sobre los riesgos de descargar desde fuentes desconocidas; este es un mensaje estándar."}',
             'value_fr' => '{"0":"Sélectionnez la version Android. Appuyez sur le bouton pour télécharger le fichier APK. Un avertissement peut s\'afficher sur votre téléphone concernant les risques liés au téléchargement depuis des sources inconnues — c\'est un message standard."}',
             'value_pt' => '{"0":"Selecione a versão para Android. Toque no botão para baixar o arquivo APK. Pode aparecer um aviso no seu telefone sobre os riscos de baixar de fontes desconhecidas — esta é uma mensagem padrão."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Enable permission to install from unknown sources in your smartphone settings. To do this:"}',
             'value_es' => '{"0":"Activa el permiso para instalar desde fuentes desconocidas en la configuración de tu smartphone. Para hacerlo:"}',
             'value_fr' => '{"0":"Activez l’autorisation d’installer depuis des sources inconnues dans les paramètres de votre smartphone. Pour ce faire :"}',
             'value_pt' => '{"0":"Ative a permissão para instalar de fontes desconhecidas nas configurações do seu smartphone. Para isso:"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Go to «Settings» → «Security» → find the option «Allow installation from unknown sources».",
                             "1":"Enable it for the browser you used to download the file."}',
             'value_es' => '{"0":"Ve a «Ajustes» → «Seguridad» → busca la opción «Permitir instalación desde fuentes desconocidas».",
                             "1":"Actívala para el navegador que usaste para descargar el archivo."}',
             'value_fr' => '{"0":"Allez dans « Paramètres » → « Sécurité » → trouvez l’option « Autoriser l’installation depuis des sources inconnues. »",
                             "1":"Activez-la pour le navigateur que vous avez utilisé pour télécharger le fichier."}',
             'value_pt' => '{"0":"Vá em «Configurações» → «Segurança» → encontre a opção «Permitir instalação de fontes desconhecidas».",
                             "1":"Ative essa opção para o navegador que você usou para baixar o arquivo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Open the downloaded APK file in the «Downloads» folder. The system will prompt you to confirm the installation — tap «Install»."}',
             'value_es' => '{"0":"Abre el archivo APK descargado en la carpeta «Descargas». El sistema te pedirá que confirmes la instalación — pulsa «Instalar»."}',
             'value_fr' => '{"0":"Ouvrez le fichier APK téléchargé dans le dossier « Téléchargements ». Le système vous demandera de confirmer l’installation — appuyez sur « Installer »."}',
             'value_pt' => '{"0":"Abra o arquivo APK baixado na pasta «Downloads». O sistema solicitará a confirmação da instalação — toque em «Instalar»."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Wait for the installation process to complete. After that, the MelBet icon will appear on your smartphone."}',
             'value_es' => '{"0":"Espera a que se complete el proceso de instalación. Después de eso, el ícono de MelBet aparecerá en tu smartphone."}',
             'value_fr' => '{"0":"Attendez la fin du processus d’installation. Une fois terminé, l’icône de MelBet apparaîtra sur votre smartphone."}',
             'value_pt' => '{"0":"Aguarde até que o processo de instalação seja concluído. Após isso, o ícone da MelBet aparecerá no seu smartphone."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Launch the app. Log in with your account or create a new one."}',
             'value_es' => '{"0":"Abre la aplicación. Inicia sesión con tu cuenta o crea una nueva."}',
             'value_fr' => '{"0":"Lancez l’application. Connectez-vous avec votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"Abra o aplicativo. Faça login com sua conta ou crie uma nova."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the MelBet App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de MelBet en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application MelBet sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MelBet no iOS (iPhone, iPad)"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The installation process of MelBet on Apple devices is more convenient, as the app can be downloaded directly from the App Store:"}',
             'value_es' => '{"0":"El proceso de instalación de MelBet en dispositivos Apple es más sencillo, ya que la aplicación se puede descargar directamente desde la App Store:"}',
             'value_fr' => '{"0":"Le processus d’installation de MelBet sur les appareils Apple est plus pratique, car l’application peut être téléchargée directement depuis l’App Store :"}',
             'value_pt' => '{"0":"O processo de instalação do MelBet em dispositivos Apple é mais conveniente, pois o aplicativo pode ser baixado diretamente da App Store:"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Open the App Store on your iPhone or iPad.",
                             "1":"In the search bar, type «MelBet».",
                             "2":"Tap the «Get» button.",
                             "3":"Wait for the installation to complete. The app will appear on your home screen.",
                             "4":"Launch MelBet. Enter your account details or register if you are a new user."}',
             'value_es' => '{"0":"Abre el App Store en tu iPhone o iPad.",
                             "1":"En la barra de búsqueda, escribe «MelBet».",
                             "2":"Pulsa el botón «Obtener».",
                             "3":"Espera a que se complete la instalación. La aplicación aparecerá en la pantalla principal.",
                             "4":"Abre MelBet. Introduce los datos de tu cuenta o regístrate si eres un usuario nuevo."}',
             'value_fr' => '{"0":"Ouvrez l’App Store sur votre iPhone ou iPad.",
                             "1":"Dans la barre de recherche, tapez «MelBet».",
                             "2":"Appuyez sur le bouton «Obtenir».",
                             "3":"Attendez la fin de l’installation. L’application apparaîtra sur votre écran d’accueil.",
                             "4":"Lancez MelBet. Saisissez vos identifiants ou inscrivez-vous si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"Abra a App Store no seu iPhone ou iPad.",
                             "1":"Na barra de pesquisa, digite «MelBet».",
                             "2":"Toque no botão «Obter».",
                             "3":"Aguarde a conclusão da instalação. O aplicativo aparecerá na tela inicial.",
                             "4":"Abra o MelBet. Insira seus dados de conta ou registre-se se for um novo usuário."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in some countries, the app may be unavailable in the App Store due to local restrictions. In such cases, you can use the official MelBet website or change your App Store region."}',
             'value_es' => '{"0":"Tenga en cuenta que en algunos países la aplicación puede no estar disponible en el App Store debido a restricciones locales. En ese caso, puede usar el sitio oficial de MelBet o cambiar la región de su App Store."}',
             'value_fr' => '{"0":"Veuillez noter que dans certains pays, l’application peut ne pas être disponible sur l’App Store en raison de restrictions locales. Dans ce cas, vous pouvez utiliser le site officiel de MelBet ou changer la région de votre App Store."}',
             'value_pt' => '{"0":"Observe que em alguns países o aplicativo pode não estar disponível na App Store devido a restrições locais. Nesse caso, você pode usar o site oficial da MelBet ou alterar a região da sua App Store."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the MelBet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de MelBet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile MelBet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da MelBet"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet mobile app is not just a betting tool but a full-fledged platform with many features designed for the most comfortable gaming experience. Here are some of the app’s capabilities:"}',
             'value_es' => '{"0":"La aplicación móvil MelBet no es solo una herramienta para apostar, sino una plataforma completa con muchas funciones para una experiencia de juego lo más cómoda posible. Aquí algunas de las características de la app:"}',
             'value_fr' => '{"0":"L’application mobile MelBet n’est pas simplement un outil de paris, mais une plateforme complète avec de nombreuses fonctionnalités pour une expérience de jeu optimale. Voici quelques-unes des possibilités offertes par l’application :"}',
             'value_pt' => '{"0":"O aplicativo móvel MelBet não é apenas uma ferramenta de apostas, mas uma plataforma completa com muitos recursos para a experiência de jogo mais confortável possível. Aqui estão algumas das funcionalidades do aplicativo:"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Live betting",
                             "1":"Live match streaming",
                             "2":"Viewing bet history, activating bonuses and promo codes in the personal account",
                             "3":"Deposits and withdrawals",
                             "4":"Push notifications",
                             "5":"Customer support",
                             "6":"Access to analytics, statistics, and expert predictions"}',
             'value_es' => '{"0":"Apuestas en tiempo real",
                             "1":"Transmisión en vivo de partidos",
                             "2":"Visualización del historial de apuestas, activación de bonos y códigos promocionales en la cuenta personal",
                             "3":"Depósitos y retiros",
                             "4":"Notificaciones push",
                             "5":"Atención al cliente",
                             "6":"Acceso a análisis, estadísticas y predicciones de expertos"}',
             'value_fr' => '{"0":"Paris en temps réel",
                             "1":"Diffusion en direct des matchs",
                             "2":"Consultation de l’historique des paris, activation des bonus et codes promo dans le compte personnel",
                             "3":"Dépôts et retraits",
                             "4":"Notifications push",
                             "5":"Support client",
                             "6":"Accès à l’analyse, aux statistiques et aux pronostics d’experts"}',
             'value_pt' => '{"0":"Apostas ao vivo",
                             "1":"Transmissão ao vivo das partidas",
                             "2":"Visualização do histórico de apostas, ativação de bônus e códigos promocionais na conta pessoal",
                             "3":"Depósitos e saques",
                             "4":"Notificações push",
                             "5":"Suporte ao cliente",
                             "6":"Acesso a análises, estatísticas e previsões de especialistas"}',
             'order' => 25
            ]
        );
    }
}
