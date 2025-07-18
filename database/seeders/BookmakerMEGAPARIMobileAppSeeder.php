<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
             'value_en' => '{"0":"MEGAPARI Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de MEGAPARI"}',
             'value_fr' => '{"0":"Revue de l\'application mobile MEGAPARI"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da MEGAPARI"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is a modern international bookmaker that offers not only a user-friendly website but also high-quality mobile applications for Android and iOS. These apps are designed for convenient and fast gameplay on smartphones and tablets, allowing users to place bets, watch live streams, claim bonuses, and manage their accounts anytime and anywhere."}',
             'value_es' => '{"0":"MEGAPARI es una casa de apuestas internacional moderna que ofrece no solo un sitio web fácil de usar, sino también aplicaciones móviles de alta calidad para Android e iOS. Estas apps están diseñadas para un juego cómodo y rápido desde smartphones y tablets, permitiendo a los usuarios apostar, ver transmisiones en vivo, recibir bonos y gestionar su cuenta en cualquier momento y lugar."}',
             'value_fr' => '{"0":"MEGAPARI est un bookmaker international moderne qui propose non seulement un site web convivial, mais aussi des applications mobiles de haute qualité pour Android et iOS. Ces applications sont conçues pour un jeu rapide et confortable sur smartphones et tablettes, permettant aux utilisateurs de parier, regarder des matchs en direct, obtenir des bonus et gérer leur compte à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"A MEGAPARI é uma casa de apostas internacional moderna que oferece não apenas um site fácil de usar, mas também aplicativos móveis de alta qualidade para Android e iOS. Os aplicativos foram criados para proporcionar uma experiência confortável e rápida em smartphones e tablets, permitindo aos usuários fazer apostas, assistir transmissões ao vivo, receber bônus e gerenciar sua conta a qualquer hora e em qualquer lugar."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The interface is intuitive, supports multiple languages, and is adapted to various screen sizes. Let’s take a closer look at the app\'s features, installation process, as well as its advantages and disadvantages."}',
             'value_es' => '{"0":"La interfaz es intuitiva, multilingüe y adaptada a distintos tamaños de pantalla. Veamos más de cerca sus funciones, el proceso de instalación y sus ventajas y desventajas."}',
             'value_fr' => '{"0":"L’interface est intuitive, multilingue et adaptée à différents formats d’écran. Découvrons en détail ses fonctionnalités, le processus d’installation ainsi que ses avantages et inconvénients."}',
             'value_pt' => '{"0":"A interface é intuitiva, suporta vários idiomas e se adapta a diferentes tamanhos de tela. Vamos analisar em detalhes as funcionalidades do app, o processo de instalação e os seus prós e contras."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MEGAPARI Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MEGAPARI"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MEGAPARI"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MEGAPARI"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full functionality",
                                 "1":"Live streaming",
                                 "2":"Support for multiple payment methods",
                                 "3":"User-friendly design",
                                 "4":"Regular updates"},
                             "1":
                                {"0":"Access restrictions in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa",
                                 "1":"Transmisiones en vivo",
                                 "2":"Compatibilidad con múltiples métodos de pago",
                                 "3":"Diseño intuitivo",
                                 "4":"Actualizaciones regulares"},
                             "1":
                                {"0":"Restricciones de acceso en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète",
                                 "1":"Diffusions en direct",
                                 "2":"Prise en charge de nombreux moyens de paiement",
                                 "3":"Conception conviviale",
                                 "4":"Mises à jour régulières"},
                             "1":
                                {"0":"Restrictions d’accès dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa",
                                 "1":"Transmissões ao vivo",
                                 "2":"Suporte para vários métodos de pagamento",
                                 "3":"Design intuitivo",
                                 "4":"Atualizações regulares"},
                             "1":
                                {"0":"Restrições de acesso em alguns países"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the MEGAPARI App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de MEGAPARI en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application MEGAPARI sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MEGAPARI no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Due to Google Play\'s gambling policy, the Android app is not available on the market. This may slightly complicate the installation, so we have prepared a step-by-step guide on how to install the mobile app on your device."}',
             'value_es' => '{"0":"Debido a la política de Google Play sobre juegos de azar, la aplicación para Android no está disponible en el mercado. Esto puede complicar un poco la instalación, por lo que hemos preparado una guía paso a paso para instalar la aplicación móvil en tu dispositivo."}',
             'value_fr' => '{"0":"En raison de la politique de Google Play concernant les jeux d\'argent, l\'application Android n\'est pas disponible sur le marché. Cela peut compliquer légèrement l\'installation, c\'est pourquoi nous avons préparé un guide étape par étape pour installer l\'application mobile sur votre appareil."}',
             'value_pt' => '{"0":"Devido à política do Google Play sobre jogos de azar, o aplicativo Android não está disponível na loja. Isso pode tornar a instalação um pouco mais complicada, por isso preparamos um guia passo a passo para instalar o aplicativo móvel no seu dispositivo."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official MEGAPARI website in the browser on your Android device."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de MEGAPARI en el navegador de tu dispositivo Android."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de MEGAPARI dans le navigateur de votre appareil Android."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da MEGAPARI no navegador do seu dispositivo Android."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the «Mobile App» section and click the link to download the APK file."}',
             'value_es' => '{"0":"2. Ve a la sección «Aplicación móvil» y haz clic en el enlace para descargar el archivo APK."}',
             'value_fr' => '{"0":"2. Allez dans la section «Application mobile» et cliquez sur le lien pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"2. Vá até a seção «Aplicativo móvel» e clique no link para baixar o arquivo APK."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"3. Before downloading, enable permission to install apps from unknown sources in your security settings. Go to «Settings» → «Security» → find the option «Allow installation from unknown sources»."}',
             'value_es' => '{"0":"3. Antes de descargar, activa el permiso para instalar aplicaciones de fuentes desconocidas en los ajustes de seguridad. Ve a «Ajustes» → «Seguridad» → busca la opción «Permitir instalación de fuentes desconocidas»."}',
             'value_fr' => '{"0":"3. Avant de télécharger, activez l’autorisation d’installer des applications de sources inconnues dans les paramètres de sécurité. Allez dans «Paramètres» → «Sécurité» → trouvez l’option «Autoriser l\'installation d\'applications de sources inconnues»."}',
             'value_pt' => '{"0":"3. Antes de fazer o download, ative a permissão para instalar aplicativos de fontes desconhecidas nas configurações de segurança. Vá em «Configurações» → «Segurança» → encontre a opção «Permitir instalação de fontes desconhecidas»."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"4. Download the APK file and open it to start the installation."}',
             'value_es' => '{"0":"4. Descarga el archivo APK y ábrelo para comenzar la instalación."}',
             'value_fr' => '{"0":"4. Téléchargez le fichier APK et ouvrez-le pour démarrer l\'installation."}',
             'value_pt' => '{"0":"4. Baixe o arquivo APK e abra-o para iniciar a instalação."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"5. Wait for the installation to complete, then open the app and log in or register."}',
             'value_es' => '{"0":"5. Espera a que finalice la instalación, luego abre la aplicación e inicia sesión o regístrate."}',
             'value_fr' => '{"0":"5. Une fois l’installation terminée, ouvrez l’application et connectez-vous ou créez un compte."}',
             'value_pt' => '{"0":"5. Aguarde a conclusão da instalação, depois abra o aplicativo e faça login ou cadastre-se."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"That\'s it. Now you can place sports bets using the MEGAPARI mobile app!"}',
             'value_es' => '{"0":"¡Eso es todo! Ahora puedes hacer apuestas deportivas desde la aplicación móvil de MEGAPARI."}',
             'value_fr' => '{"0":"Et voilà. Vous pouvez désormais placer des paris sportifs depuis l\'application mobile MEGAPARI !"}',
             'value_pt' => '{"0":"É isso! Agora você pode fazer apostas esportivas pelo aplicativo móvel da MEGAPARI."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the MEGAPARI App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de MEGAPARI en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application MEGAPARI sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MEGAPARI no iOS (iPhone, iPad)"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, the installation process is much simpler than for Android users, as the app is available for download in the App Store. Here\'s how to do it:"}',
             'value_es' => '{"0":"Para los usuarios de iOS, el proceso de instalación es mucho más sencillo que para los usuarios de Android, ya que la aplicación está disponible para su descarga en la App Store. Aquí te explicamos cómo hacerlo:"}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, le processus d\'installation est bien plus simple que pour les utilisateurs Android, car l\'application est disponible au téléchargement sur l\'App Store. Voici comment faire :"}',
             'value_pt' => '{"0":"Para os usuários de iOS, o processo de instalação é muito mais simples do que para os usuários de Android, pois o aplicativo está disponível para download na App Store. Veja como fazer:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l\'App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"2. Search for «MEGAPARI» or follow the direct link from the official bookmaker’s website."}',
             'value_es' => '{"0":"2. Busca «MEGAPARI» o sigue el enlace directo desde el sitio web oficial del operador."}',
             'value_fr' => '{"0":"2. Recherchez «MEGAPARI» ou utilisez le lien direct depuis le site officiel du bookmaker."}',
             'value_pt' => '{"0":"2. Pesquise por «MEGAPARI» ou acesse o link direto no site oficial da casa de apostas."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the download button and confirm installation using your Apple ID or Face/Touch ID."}',
             'value_es' => '{"0":"3. Pulsa el botón de descarga y confirma la instalación con tu Apple ID o Face/Touch ID."}',
             'value_fr' => '{"0":"3. Appuyez sur le bouton de téléchargement et confirmez l\'installation avec votre identifiant Apple ou Face/Touch ID."}',
             'value_pt' => '{"0":"3. Toque no botão de download e confirme a instalação com seu Apple ID ou Face/Touch ID."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"4. Wait for the app to install on your device."}',
             'value_es' => '{"0":"4. Espera a que la aplicación se instale en tu dispositivo."}',
             'value_fr' => '{"0":"4. Attendez que l\'application soit installée sur votre appareil."}',
             'value_pt' => '{"0":"4. Aguarde a instalação do aplicativo no seu dispositivo."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"5. Launch the app, log into your account, or create a new one."}',
             'value_es' => '{"0":"5. Abre la aplicación, inicia sesión en tu cuenta o crea una nueva."}',
             'value_fr' => '{"0":"5. Lancez l\'application, connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"5. Abra o aplicativo, entre na sua conta ou crie uma nova."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"As you can see, the installation process is straightforward and doesn’t take much time. The app is now ready to use. Place bets, claim bonuses, and watch live streams from anywhere."}',
             'value_es' => '{"0":"Como puedes ver, el proceso de instalación es estándar y no toma mucho tiempo. La aplicación ya está lista para usarse. Haz apuestas, aprovecha los bonos y mira transmisiones en vivo desde cualquier lugar."}',
             'value_fr' => '{"0":"Comme vous pouvez le voir, l\'installation est simple et ne prend pas beaucoup de temps. L\'application est maintenant prête à l\'emploi. Placez vos paris, profitez des bonus et regardez les retransmissions en direct où que vous soyez."}',
             'value_pt' => '{"0":"Como você pode ver, o processo de instalação é padrão e leva pouco tempo. O aplicativo agora está pronto para uso. Faça apostas, aproveite os bônus e assista às transmissões ao vivo de qualquer lugar."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the MEGAPARI Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de MEGAPARI"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile MEGAPARI"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da MEGAPARI"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Here’s what the MEGAPARI app offers:"}',
             'value_es' => '{"0":"Estas son las funciones que ofrece la aplicación de MEGAPARI:"}',
             'value_fr' => '{"0":"Voici ce que propose l\'application MEGAPARI:"}',
             'value_pt' => '{"0":"Veja o que o aplicativo da MEGAPARI oferece:"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list_v2',
             'value_en' => '{"0":"Pre-match and live betting",
                             "1":"Live video streaming of sports events with simultaneous access to live bets",
                             "2":"Analytics and statistics",
                             "3":"Casino section with live games, slots, and other gambling entertainment",
                             "4":"Cashback, bonuses, and promotions",
                             "5":"Account deposits and withdrawals via various payment methods",
                             "6":"Customer support via chat, phone, or email directly in the app",
                             "7":"Push notifications about new promotions, bet results, and important updates"}',
             'value_es' => '{"0":"Apuestas pre-partido y en vivo",
                             "1":"Transmisión en vivo de eventos deportivos con acceso simultáneo a apuestas en directo",
                             "2":"Análisis y estadísticas",
                             "3":"Sección de casino con juegos en vivo, tragamonedas y otros juegos de azar",
                             "4":"Reembolsos, bonos y promociones",
                             "5":"Depósitos y retiros mediante varios métodos de pago",
                             "6":"Atención al cliente por chat, teléfono o correo electrónico directamente desde la app",
                             "7":"Notificaciones push sobre nuevas promociones, resultados de apuestas y actualizaciones importantes"}',
             'value_fr' => '{"0":"Paris avant-match et en direct",
                             "1":"Diffusion vidéo en direct des événements sportifs avec accès simultané aux paris live",
                             "2":"Analyses et statistiques",
                             "3":"Section casino avec jeux en direct, machines à sous et autres divertissements de jeu",
                             "4":"Cashback, bonus et promotions",
                             "5":"Dépôts et retraits via différents moyens de paiement",
                             "6":"Service client via chat, téléphone ou e-mail directement dans l’application",
                             "7":"Notifications push sur les nouvelles promotions, les résultats des paris et les mises à jour importantes"}',
             'value_pt' => '{"0":"Apostas pré-jogo e ao vivo",
                             "1":"Transmissão ao vivo de eventos esportivos com acesso simultâneo a apostas ao vivo",
                             "2":"Análises e estatísticas",
                             "3":"Seção de cassino com jogos ao vivo, slots e outras opções de entretenimento de apostas",
                             "4":"Cashback, bônus e promoções",
                             "5":"Depósitos e saques por meio de vários métodos de pagamento",
                             "6":"Suporte ao cliente via chat, telefone ou e-mail diretamente no aplicativo",
                             "7":"Notificações push sobre novas promoções, resultados de apostas e atualizações importantes"}',
             'order' => 25
            ]
        );
    }
}
