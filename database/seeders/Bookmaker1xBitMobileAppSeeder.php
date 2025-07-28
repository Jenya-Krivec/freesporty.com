<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 1
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h2',
                'value_en' => '{"0":"1xBit Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1xBit"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1xBit"}',
                'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit bookmaker, known for its focus on cryptocurrency betting, offers a mobile app for Android users and a convenient mobile version of the website for iOS users."}',
             'value_es' => '{"0":"La casa de apuestas 1xBit, conocida por su enfoque en las apuestas con criptomonedas, ofrece una aplicación móvil para usuarios de Android y una versión móvil del sitio web para usuarios de iOS."}',
             'value_fr' => '{"0":"Le bookmaker 1xBit, reconnu pour son orientation vers les paris en cryptomonnaies, propose une application mobile pour les utilisateurs Android et une version mobile pratique du site pour les utilisateurs iOS."}',
             'value_pt' => '{"0":"A casa de apostas 1xBit, conhecida pelo seu foco em apostas com criptomoedas, oferece um aplicativo móvel para usuários de Android e uma versão móvel prática do site para usuários de iOS."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This solution provides fast and convenient access to all platform features. You can place bets on sports and live games, play in the casino, and perform financial transactions."}',
             'value_es' => '{"0":"Esta solución garantiza un acceso rápido y cómodo a todas las funciones de la plataforma. Podrás hacer apuestas deportivas y en vivo, jugar en el casino y realizar transacciones financieras."}',
             'value_fr' => '{"0":"Cette solution permet un accès rapide et pratique à toutes les fonctionnalités de la plateforme. Vous pouvez parier sur des sports et des jeux en direct, jouer au casino et effectuer des transactions financières."}',
             'value_pt' => '{"0":"Essa solução garante acesso rápido e conveniente a todos os recursos da plataforma. Você pode fazer apostas esportivas e ao vivo, jogar no cassino e realizar transações financeiras."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"So, you can always stay connected to your favorite platform anytime and from anywhere, while maintaining maximum anonymity and security."}',
             'value_es' => '{"0":"Así, siempre podrás mantenerte conectado con tu plataforma favorita en cualquier momento y lugar, preservando el máximo nivel de anonimato y seguridad."}',
             'value_fr' => '{"0":"Vous pouvez ainsi rester connecté à votre plateforme préférée à tout moment et en tout lieu, tout en conservant un maximum d’anonymat et de sécurité."}',
             'value_pt' => '{"0":"Assim, você pode permanecer conectado à sua plataforma favorita a qualquer hora e em qualquer lugar, mantendo o máximo de anonimato e segurança."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 1xBit Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1xBit"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1xBit"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1xBit"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Interface adapted for mobile devices",
                                 "1":"Full website functionality supported",
                                 "2":"Pre-match and live betting, casino",
                                 "3":"Financial transactions available"},
                             "1":
                                {"0":"iOS app not available in the App Store"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz adaptada a dispositivos móviles",
                                 "1":"Compatibilidad con todas las funciones del sitio web",
                                 "2":"Apuestas pre-partido y en vivo, casino",
                                 "3":"Operaciones financieras disponibles"},
                             "1":
                                {"0":"La aplicación para iOS no está disponible en la App Store"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface adaptée aux appareils mobiles",
                                 "1":"Prise en charge de toutes les fonctionnalités du site",
                                 "2":"Paris pré-match et en direct, casino",
                                 "3":"Opérations financières possibles"},
                             "1":
                                {"0":"L’application iOS n’est pas disponible sur l’App Store"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface adaptada para dispositivos móveis",
                                 "1":"Suporte total às funcionalidades do site",
                                 "2":"Apostas pré-jogo e ao vivo, cassino",
                                 "3":"Operações financeiras disponíveis"},
                             "1":
                                {"0":"O aplicativo para iOS não está disponível na App Store"}
                             }',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 1xBit App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 1xBit en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 1xBit sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1xBit no Android"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"For Android users, 1xBit offers a full-featured mobile app. However, it cannot be downloaded from the Play Market due to Google’s gambling policy. That’s why we provide a step-by-step guide for alternative installation of the mobile app."}',
             'value_es' => '{"0":"Para los usuarios de Android, 1xBit ofrece una aplicación móvil completa. Sin embargo, no se puede descargar desde Play Market debido a la política de Google sobre los juegos de azar. Por ello, ofrecemos una guía paso a paso para la instalación alternativa de la aplicación móvil."}',
             'value_fr' => '{"0":"Pour les utilisateurs Android, 1xBit propose une application mobile complète. Cependant, elle ne peut pas être téléchargée depuis le Play Market en raison de la politique de Google concernant les jeux d’argent. C’est pourquoi nous proposons un guide étape par étape pour une installation alternative de l’application."}',
             'value_pt' => '{"0":"Para usuários de Android, o 1xBit oferece um aplicativo móvel completo. No entanto, não é possível baixá-lo pela Play Store devido à política do Google em relação a jogos de azar. Por isso, fornecemos um guia passo a passo para a instalação alternativa do aplicativo móvel."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 1xBit website using your smartphone browser, scroll down the page, and find the link to the app download page."}',
             'value_es' => '{"0":"1. Visita el sitio web oficial de 1xBit con el navegador de tu smartphone, desplázate hacia abajo y encuentra el enlace a la página de descarga de la aplicación."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de 1xBit via le navigateur de votre smartphone, faites défiler vers le bas et trouvez le lien vers la page de téléchargement de l\'application."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 1xBit usando o navegador do seu smartphone, role até o final da página e encontre o link para a página de download do aplicativo."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"2. Tap the button to download the APK file."}',
             'value_es' => '{"0":"2. Pulsa el botón para descargar el archivo APK."}',
             'value_fr' => '{"0":"2. Appuyez sur le bouton pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"2. Toque no botão para baixar o arquivo APK."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"3. If your smartphone blocks the download for security reasons, allow installations from unknown sources in your phone settings. To do this, go to Settings → Security → Allow installation from unknown sources."}',
             'value_es' => '{"0":"3. Si tu teléfono bloquea la descarga por motivos de seguridad, permite la instalación desde fuentes desconocidas en la configuración del dispositivo. Ve a Ajustes → Seguridad → Permitir instalación desde fuentes desconocidas."}',
             'value_fr' => '{"0":"3. Si votre téléphone bloque le téléchargement pour des raisons de sécurité, autorisez les installations de sources inconnues dans les paramètres. Allez dans Paramètres → Sécurité → Autoriser l\'installation depuis des sources inconnues."}',
             'value_pt' => '{"0":"3. Se o seu smartphone bloquear o download por motivos de segurança, permita a instalação de fontes desconhecidas nas configurações. Vá para Configurações → Segurança → Permitir instalação de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"4. Once the file is downloaded, open the APK and confirm the installation."}',
             'value_es' => '{"0":"4. Una vez descargado el archivo, ábrelo y confirma la instalación."}',
             'value_fr' => '{"0":"4. Une fois le fichier téléchargé, ouvrez-le et confirmez l\'installation."}',
             'value_pt' => '{"0":"4. Após o download, abra o arquivo APK e confirme a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"5. After installation is complete, open the app, log in or register, and start using the platform."}',
             'value_es' => '{"0":"5. Cuando se complete la instalación, abre la aplicación, inicia sesión o regístrate y empieza a usar la plataforma."}',
             'value_fr' => '{"0":"5. Une fois l\'installation terminée, ouvrez l\'application, connectez-vous ou inscrivez-vous, et commencez à utiliser la plateforme."}',
             'value_pt' => '{"0":"5. Depois de instalado, abra o aplicativo, faça login ou registre-se e comece a usar a plataforma."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 1xBit App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 1xBit en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 1xBit sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1xBit no iOS (iPhone, iPad)"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The mobile app is currently unavailable for iOS users. However, there\'s no need to worry, as 1xBit offers a great alternative – a mobile version of the website."}',
             'value_es' => '{"0":"La aplicación móvil aún no está disponible para los usuarios de iOS. Sin embargo, no hay motivo para preocuparse, ya que 1xBit ofrece una excelente alternativa: la versión móvil del sitio web."}',
             'value_fr' => '{"0":"L’application mobile n’est pas encore disponible pour les utilisateurs d’iOS. Mais ne vous inquiétez pas, 1xBit propose une excellente alternative : la version mobile du site."}',
             'value_pt' => '{"0":"O aplicativo móvel ainda não está disponível para usuários de iOS. No entanto, não há motivo para preocupação, pois a 1xBit oferece uma ótima alternativa – a versão móvel do site."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The site interface is well-optimized for mobile devices and runs smoothly without lags. Moreover, it fully replicates all the features of the desktop site. So, you won\'t face any mobility issues with 1xBit."}',
             'value_es' => '{"0":"La interfaz del sitio está bien optimizada para dispositivos móviles y funciona sin retrasos. Además, reproduce completamente todas las funciones del sitio de escritorio. Así que no tendrás problemas de movilidad con 1xBit."}',
             'value_fr' => '{"0":"L’interface du site est bien optimisée pour les appareils mobiles et fonctionne sans ralentissements. De plus, elle reproduit entièrement toutes les fonctionnalités du site principal. Vous n’aurez donc aucun problème de mobilité avec 1xBit."}',
             'value_pt' => '{"0":"A interface do site é bem otimizada para dispositivos móveis e funciona sem travamentos. Além disso, ela replica totalmente todas as funcionalidades do site principal. Portanto, você não terá problemas de mobilidade com a 1xBit."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 1xBit Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1xBit"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1xBit"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'list_v2',
             'value_en' => '{"0":"Pre-match and live sports betting with up-to-date odds.",
                             "1":"Real-time event tracking and quick bet placement.",
                             "2":"Access to live streams of many sports events directly in the app.",
                             "3":"Ability to play slots, table games, and live dealer games.",
                             "4":"Deposits and withdrawals supported in over 40 cryptocurrencies, plus access to transaction history.",
                             "5":"Profile settings, access to betting history, bonus and promo code activation, and customer support access."}',
             'value_es' => '{"0":"Apuestas deportivas pre-partido y en vivo con cuotas actualizadas.",
                             "1":"Seguimiento de eventos en tiempo real y colocación rápida de apuestas.",
                             "2":"Acceso a transmisiones en vivo de muchos eventos deportivos directamente desde la app.",
                             "3":"Posibilidad de jugar tragamonedas, juegos de mesa y juegos con crupieres en vivo.",
                             "4":"Depósitos y retiros con soporte para más de 40 criptomonedas, además de acceso al historial de transacciones.",
                             "5":"Configuración del perfil, acceso al historial de apuestas, activación de bonos y códigos promocionales, y acceso al soporte al cliente."}',
             'value_fr' => '{"0":"Paris sportifs avant-match et en direct avec des cotes actualisées.",
                             "1":"Suivi des événements en temps réel et placement rapide des paris.",
                             "2":"Accès aux flux en direct de nombreux événements sportifs directement dans l\'application.",
                             "3":"Possibilité de jouer aux machines à sous, jeux de table et jeux avec croupiers en direct.",
                             "4":"Dépôts et retraits pris en charge dans plus de 40 cryptomonnaies, avec accès à l\'historique des transactions.",
                             "5":"Paramètres de profil, accès à l\'historique des paris, activation des bonus et codes promo, et accès au support client."}',
             'value_pt' => '{"0":"Apostas esportivas pré-jogo e ao vivo com odds atualizadas.",
                             "1":"Acompanhamento de eventos em tempo real e colocação rápida de apostas.",
                             "2":"Acesso a transmissões ao vivo de muitos eventos esportivos diretamente no aplicativo.",
                             "3":"Possibilidade de jogar caça-níqueis, jogos de mesa e jogos com crupiês ao vivo.",
                             "4":"Depósitos e saques com suporte para mais de 40 criptomoedas, além de acesso ao histórico de transações.",
                             "5":"Configurações de perfil, acesso ao histórico de apostas, ativação de bônus e códigos promocionais, e acesso ao suporte ao cliente."}',
             'order' => 19
            ]
        );
    }
}
