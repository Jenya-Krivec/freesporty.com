<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"PARIPESA Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de PARIPESA"}',
                'value_fr' => '{"0":"Revue de l\'application mobile PARIPESA"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da PARIPESA"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"More and more players prefer placing sports bets via mobile devices. That’s why having a functional, fast, and stable app is a significant advantage for any bookmaker."}',
                'value_es' => '{"0":"Cada vez más jugadores prefieren hacer sus apuestas deportivas desde dispositivos móviles. Por eso, contar con una aplicación funcional, rápida y estable es una gran ventaja para cualquier casa de apuestas."}',
                'value_fr' => '{"0":"De plus en plus de joueurs préfèrent parier sur le sport depuis leurs appareils mobiles. C’est pourquoi disposer d’une application fonctionnelle, rapide et stable constitue un véritable atout pour toute maison de paris."}',
                'value_pt' => '{"0":"Cada vez mais jogadores preferem fazer apostas esportivas em dispositivos móveis. Por isso, ter um aplicativo funcional, rápido e estável é uma vantagem importante para qualquer casa de apostas."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"PARIPESA is no exception and offers dedicated mobile apps for both Android and iOS, providing full access to the platform\'s features: sports betting, live events, casino games, financial transactions, and customer support. The apps support dozens of languages, are optimized for different screen sizes, and work reliably even with average internet speed."}',
                'value_es' => '{"0":"PARIPESA no es la excepción y ofrece aplicaciones móviles independientes para Android e iOS, que brindan acceso completo a todas las funciones de la plataforma: apuestas deportivas, eventos en vivo, juegos de casino, operaciones financieras y soporte técnico. Las apps admiten decenas de idiomas, están adaptadas a diferentes tamaños de pantalla y funcionan de forma estable incluso con una velocidad de internet media."}',
                'value_fr' => '{"0":"PARIPESA ne fait pas exception et propose des applications mobiles distinctes pour Android et iOS, offrant un accès complet à toutes les fonctionnalités de la plateforme : paris sportifs, événements en direct, jeux de casino, transactions financières et assistance. Les applications prennent en charge des dizaines de langues, sont adaptées à différents formats d’écran et fonctionnent de manière stable, même avec une connexion internet moyenne."}',
                'value_pt' => '{"0":"A PARIPESA não é exceção e oferece aplicativos móveis separados para Android e iOS, que proporcionam acesso completo a todos os recursos da plataforma: apostas esportivas, eventos ao vivo, jogos de cassino, transações financeiras e suporte ao cliente. Os aplicativos suportam dezenas de idiomas, são adaptados para diferentes tamanhos de tela e funcionam de forma estável mesmo com conexão à internet de velocidade média."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Despite limited availability in official marketplaces, both Android and iOS versions can be installed through alternative methods — which we explain below."}',
                'value_es' => '{"0":"A pesar de su disponibilidad limitada en las tiendas oficiales, ambas versiones (Android e iOS) se pueden instalar mediante métodos alternativos, que explicamos a continuación."}',
                'value_fr' => '{"0":"Malgré une disponibilité limitée sur les stores officiels, les deux versions — Android et iOS — peuvent être installées via des méthodes alternatives, que nous décrivons ci-dessous."}',
                'value_pt' => '{"0":"Apesar da disponibilidade limitada nas lojas oficiais, ambas as versões — Android e iOS — podem ser instaladas por métodos alternativos, como explicamos abaixo."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the PARIPESA Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de PARIPESA"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles PARIPESA"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da PARIPESA"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"Full functionality",
                                 "1":"High refresh speed",
                                 "2":"Intuitive interface",
                                 "3":"Push notifications",
                                 "4":"Optimized navigation",
                                 "5":"24/7 support"},
                             "1":
                                {"0":"Lack of live video streaming"}
                             }',
                'value_es' => '{"0":
                                {"0":"Funcionalidad completa",
                                 "1":"Alta velocidad de actualización",
                                 "2":"Interfaz intuitiva",
                                 "3":"Notificaciones push",
                                 "4":"Navegación optimizada",
                                 "5":"Soporte 24/7"},
                             "1":
                                {"0":"Falta de transmisiones de video en vivo"}
                             }',
                'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète",
                                 "1":"Vitesse de mise à jour élevée",
                                 "2":"Interface intuitive",
                                 "3":"Notifications push",
                                 "4":"Navigation optimisée",
                                 "5":"Assistance 24h/24 et 7j/7"},
                             "1":
                                {"0":"Absence de retransmissions vidéo en direct"}
                             }',
                'value_pt' => '{"0":
                                {"0":"Funcionalidade completa",
                                 "1":"Alta velocidade de atualização",
                                 "2":"Interface intuitiva",
                                 "3":"Notificações push",
                                 "4":"Navegação otimizada",
                                 "5":"Suporte 24/7"},
                             "1":
                                {"0":"Falta de transmissões de vídeo ao vivo"}
                             }',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the PARIPESA App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de PARIPESA en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application PARIPESA sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da PARIPESA no Android"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Due to Google’s policy on betting companies, the Android mobile app is not available on the Google Play Store. Therefore, the bookmaker PARIPESA offers Android users an alternative method to install the app. Here is a step-by-step guide on how to do it:"}',
                'value_es' => '{"0":"Debido a la política de Google sobre casas de apuestas, la aplicación móvil para Android no está disponible en Google Play Store. Por ello, la casa de apuestas PARIPESA ofrece a los usuarios de Android un método alternativo para instalar la app. A continuación, se muestra una guía paso a paso para hacerlo:"}',
                'value_fr' => '{"0":"En raison de la politique de Google concernant les sociétés de paris, l\'application mobile Android n\'est pas disponible sur le Google Play Store. Ainsi, le bookmaker PARIPESA propose aux utilisateurs Android une méthode alternative pour installer l\'application. Voici un guide étape par étape pour le faire :"}',
                'value_pt' => '{"0":"Devido à política do Google em relação às casas de apostas, o aplicativo móvel para Android não está disponível na Google Play Store. Por isso, a casa de apostas PARIPESA oferece aos usuários de Android um método alternativo de instalação. Veja abaixo um guia passo a passo de como fazer isso:"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"1. Go to the official PARIPESA website using your phone’s browser."}',
                'value_es' => '{"0":"1. Accede al sitio web oficial de PARIPESA desde el navegador de tu teléfono."}',
                'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de PARIPESA via le navigateur de votre téléphone."}',
                'value_pt' => '{"0":"1. Acesse o site oficial da PARIPESA pelo navegador do seu celular."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"2. Scroll to the bottom of the homepage and tap «Mobile Applications»."}',
                'value_es' => '{"0":"2. En la parte inferior de la página principal, pulsa «Aplicaciones móviles»."}',
                'value_fr' => '{"0":"2. En bas de la page d’accueil, appuyez sur «Applications mobiles»."}',
                'value_pt' => '{"0":"2. Na parte inferior da página inicial, toque em «Aplicativos móveis»."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"3. Download the .apk file."}',
                'value_es' => '{"0":"3. Descarga el archivo .apk."}',
                'value_fr' => '{"0":"3. Téléchargez le fichier .apk."}',
                'value_pt' => '{"0":"3. Baixe o arquivo .apk."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"4. Enable the option to install apps from unknown sources in your phone’s settings."}',
                'value_es' => '{"0":"4. Activa la opción de instalar aplicaciones de fuentes desconocidas en los ajustes del teléfono."}',
                'value_fr' => '{"0":"4. Activez l’installation d’applications provenant de sources inconnues dans les paramètres du téléphone."}',
                'value_pt' => '{"0":"4. Ative a opção de instalar aplicativos de fontes desconhecidas nas configurações do celular."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"5. Install the app by opening the downloaded file."}',
                'value_es' => '{"0":"5. Instala la aplicación abriendo el archivo descargado."}',
                'value_fr' => '{"0":"5. Installez l’application en ouvrant le fichier téléchargé."}',
                'value_pt' => '{"0":"5. Instale o aplicativo abrindo o arquivo baixado."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"6. Launch the app, log in or register."}',
                'value_es' => '{"0":"6. Abre la aplicación, inicia sesión o regístrate."}',
                'value_fr' => '{"0":"6. Lancez l’application, connectez-vous ou inscrivez-vous."}',
                'value_pt' => '{"0":"6. Abra o aplicativo, faça login ou registre-se."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"We recommend downloading the file only from the official PARIPESA website to avoid counterfeit copies."}',
                'value_es' => '{"0":"Recomendamos descargar el archivo únicamente desde el sitio web oficial de PARIPESA para evitar copias falsificadas."}',
                'value_fr' => '{"0":"Nous vous recommandons de télécharger le fichier uniquement depuis le site officiel de PARIPESA afin d’éviter les copies contrefaites."}',
                'value_pt' => '{"0":"Recomendamos baixar o arquivo apenas no site oficial da PARIPESA para evitar cópias falsificadas."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the PARIPESA App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de PARIPESA en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application PARIPESA sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da PARIPESA no iOS (iPhone, iPad)"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"iOS mobile device users can also install the app, and with our step-by-step guide, it won’t take much time."}',
                'value_es' => '{"0":"Los usuarios de dispositivos móviles con iOS también pueden instalar la aplicación, y con nuestra guía paso a paso no les llevará mucho tiempo."}',
                'value_fr' => '{"0":"Les utilisateurs d’appareils mobiles sous iOS peuvent également installer l’application, et grâce à notre guide étape par étape, cela ne prendra pas beaucoup de temps."}',
                'value_pt' => '{"0":"Os usuários de dispositivos móveis com iOS também podem instalar o aplicativo, e com nosso guia passo a passo isso não levará muito tempo."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"1. Go to the official PARIPESA website using Safari on your iPhone."}',
                'value_es' => '{"0":"1. Accede al sitio web oficial de PARIPESA desde Safari en tu iPhone."}',
                'value_fr' => '{"0":"1. Accédez au site officiel de PARIPESA via Safari sur votre iPhone."}',
                'value_pt' => '{"0":"1. Acesse o site oficial da PARIPESA pelo Safari no seu iPhone."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"2. Select the «Mobile Applications» or “iOS App” section."}',
                'value_es' => '{"0":"2. Selecciona la sección «Aplicaciones móviles» o “App para iOS”."}',
                'value_fr' => '{"0":"2. Sélectionnez la section «Applications mobiles» ou “App iOS”."}',
                'value_pt' => '{"0":"2. Selecione a seção «Aplicativos móveis” ou “App para iOS»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"3. Tap on the «Download for iOS» icon — you will be prompted to install a profile."}',
                'value_es' => '{"0":"3. Pulsa el icono «Descargar para iOS» — se te pedirá instalar un perfil."}',
                'value_fr' => '{"0":"3. Appuyez sur l’icône «Télécharger pour iOS» — il vous sera demandé d’installer un profil."}',
                'value_pt' => '{"0":"3. Toque no ícone «Baixar para iOS» — será solicitado que você instale um perfil."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"4. Enable permission to install an enterprise profile in Settings → General → VPN & Device Management."}',
                'value_es' => '{"0":"4. Activa el permiso para instalar perfiles empresariales en Ajustes → General → VPN y gestión de dispositivos."}',
                'value_fr' => '{"0":"4. Autorisez l’installation de profils d’entreprise via Réglages → Général → VPN et gestion des appareils."}',
                'value_pt' => '{"0":"4. Ative a permissão para instalar perfis corporativos em Ajustes → Geral → VPN e gerenciamento de dispositivos."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"5. Trust the PARIPESA profile and complete the installation."}',
                'value_es' => '{"0":"5. Confía en el perfil de PARIPESA y completa la instalación."}',
                'value_fr' => '{"0":"5. Faites confiance au profil PARIPESA et terminez l’installation."}',
                'value_pt' => '{"0":"5. Confirme confiança no perfil da PARIPESA e conclua a instalação."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"6. Open the app and log into your account."}',
                'value_es' => '{"0":"6. Abre la aplicación e inicia sesión en tu cuenta."}',
                'value_fr' => '{"0":"6. Ouvrez l’application et connectez-vous à votre compte."}',
                'value_pt' => '{"0":"6. Abra o aplicativo e faça login na sua conta."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Due to App Store restrictions, PARIPESA uses an alternative installation method for the iOS app, which requires manual profile configuration."}',
                'value_es' => '{"0":"Debido a las restricciones de la App Store, PARIPESA utiliza un método alternativo de instalación para la app de iOS, que requiere la configuración manual de un perfil."}',
                'value_fr' => '{"0":"En raison des restrictions de l’App Store, PARIPESA utilise une méthode alternative pour l’installation de l’application iOS, nécessitant la configuration manuelle d’un profil."}',
                'value_pt' => '{"0":"Devido às restrições da App Store, a PARIPESA utiliza um método alternativo de instalação para o aplicativo iOS, que exige a configuração manual de um perfil."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the PARIPESA Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de PARIPESA"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile PARIPESA"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da PARIPESA"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"The PARIPESA mobile apps fully replicate the functionality of the desktop version. With the app, you can:"}',
                'value_es' => '{"0":"Las aplicaciones móviles de PARIPESA replican completamente la funcionalidad de la versión de escritorio. Con la app, puedes:"}',
                'value_fr' => '{"0":"Les applications mobiles de PARIPESA reproduisent entièrement les fonctionnalités de la version de bureau. Avec l’application, vous pouvez :"}',
                'value_pt' => '{"0":"Os aplicativos móveis da PARIPESA reproduzem totalmente as funcionalidades da versão para desktop. Com o aplicativo, você pode:"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
                'value_en' => '{"0":"Place pre-match and live bets",
                                "1":"Play casino and live casino games",
                                "2":"Deposit and withdraw funds",
                                "3":"Use live statistics and match graphics",
                                "4":"Receive push notifications",
                                "5":"Change your password",
                                "6":"View transaction history"}',
                'value_es' => '{"0":"Realizar apuestas pre-partido y en vivo",
                                "1":"Jugar en el casino y casino en vivo",
                                "2":"Depositar y retirar fondos",
                                "3":"Usar estadísticas en vivo y gráficos de partidos",
                                "4":"Recibir notificaciones push",
                                "5":"Cambiar la contraseña",
                                "6":"Ver el historial de transacciones"}',
                'value_fr' => '{"0":"Placer des paris pré-match et en direct",
                                "1":"Jouer au casino et au casino en direct",
                                "2":"Effectuer des dépôts et des retraits",
                                "3":"Utiliser les statistiques en direct et les graphiques des matchs",
                                "4":"Recevoir des notifications push",
                                "5":"Changer votre mot de passe",
                                "6":"Consulter l’historique des transactions"}',
                'value_pt' => '{"0":"Fazer apostas pré-jogo e ao vivo",
                                "1":"Jogar no cassino e cassino ao vivo",
                                "2":"Depositar e sacar fundos",
                                "3":"Usar estatísticas ao vivo e gráficos das partidas",
                                "4":"Receber notificações push",
                                "5":"Alterar a senha",
                                "6":"Visualizar histórico de transações"}',
             'order' => 28
            ]
        );
    }
}
