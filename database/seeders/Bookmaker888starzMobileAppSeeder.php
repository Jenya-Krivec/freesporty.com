<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888starz Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 888starz"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 888starz"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 888starz"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"888starz offers fully functional mobile apps for Android and iOS devices. Both apps provide complete access to all platform features. With them, you can place pre-match and live bets, play casino games, watch live streams, and manage your financial transactions."}',
                'value_es' => '{"0":"888starz ofrece aplicaciones móviles totalmente funcionales para dispositivos Android e iOS. Ambas aplicaciones brindan acceso completo a todas las funciones de la plataforma. Con ellas, puedes realizar apuestas pre-partido y en vivo, jugar en el casino, ver transmisiones en directo y gestionar tus operaciones financieras."}',
                'value_fr' => '{"0":"888starz propose des applications mobiles entièrement fonctionnelles pour les appareils Android et iOS. Les deux applications donnent un accès complet à toutes les fonctionnalités de la plateforme. Vous pouvez y placer des paris pré-match et en direct, jouer au casino, regarder des retransmissions en direct et effectuer des opérations financières."}',
                'value_pt' => '{"0":"A 888starz oferece aplicativos móveis totalmente funcionais para dispositivos Android e iOS. Ambos os aplicativos fornecem acesso completo a todos os recursos da plataforma. Com eles, você pode fazer apostas pré-jogo e ao vivo, jogar no cassino, assistir a transmissões ao vivo e realizar transações financeiras."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"Thanks to their intuitive interface and high stability, 888starz apps have become a reliable tool for players who value mobility and quick access to gaming services. And with our step-by-step installation guide, setting up the apps won’t take much of your time."}',
                'value_es' => '{"0":"Gracias a su interfaz intuitiva y alta estabilidad, las aplicaciones de 888starz se han convertido en una herramienta confiable para los jugadores que valoran la movilidad y el acceso rápido a los servicios de juego. Y con nuestra guía paso a paso, instalar las aplicaciones no te tomará mucho tiempo."}',
                'value_fr' => '{"0":"Grâce à une interface intuitive et une grande stabilité, les applications 888starz sont devenues un outil fiable pour les joueurs qui apprécient la mobilité et l’accès rapide aux services de jeu. Et avec notre guide d’installation étape par étape, l’installation des applications ne vous prendra que peu de temps."}',
                'value_pt' => '{"0":"Graças à interface intuitiva e alta estabilidade, os aplicativos da 888starz tornaram-se uma ferramenta confiável para jogadores que valorizam mobilidade e acesso rápido aos serviços de jogo. E com nosso guia passo a passo, instalar os aplicativos será rápido e fácil."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 888starz Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 888starz"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 888starz"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 888starz"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"Convenient navigation",
                                 "1":"Option to deposit and withdraw funds",
                                 "2":"One-click betting support",
                                 "3":"Push notification support"},
                             "1":
                                {"0":"Installation requires additional settings"}
                             }',
                'value_es' => '{"0":
                                {"0":"Navegación conveniente",
                                 "1":"Opción de depósito y retiro de fondos",
                                 "2":"Soporte para apuestas con un solo clic",
                                 "3":"Compatibilidad con notificaciones push"},
                             "1":
                                {"0":"La instalación requiere configuraciones adicionales"}
                             }',
                'value_fr' => '{"0":
                                {"0":"Navigation pratique",
                                 "1":"Possibilité de dépôt et de retrait de fonds",
                                 "2":"Support des paris en un clic",
                                 "3":"Prise en charge des notifications push"},
                             "1":
                                {"0":"L’installation nécessite des réglages supplémentaires"}
                             }',
                'value_pt' => '{"0":
                                {"0":"Navegação conveniente",
                                 "1":"Opção de depósito e retirada de fundos",
                                 "2":"Suporte para apostas com um clique",
                                 "3":"Compatibilidade com notificações push"},
                             "1":
                                {"0":"A instalação requer configurações adicionais"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 888starz App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 888starz en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 888starz sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 888starz no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"To install the mobile app, you need to make some adjustments to your mobile device settings. But let’s go step by step:"}',
                'value_es' => '{"0":"Para instalar la aplicación móvil, es necesario realizar algunos ajustes en la configuración de tu dispositivo móvil. Pero hagámoslo paso a paso:"}',
                'value_fr' => '{"0":"Pour installer l’application mobile, vous devez effectuer quelques réglages sur votre appareil mobile. Mais procédons étape par étape :"}',
                'value_pt' => '{"0":"Para instalar o aplicativo móvel, é necessário fazer alguns ajustes nas configurações do seu dispositivo. Mas vamos por etapas:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"1. Open the official 888starz website in your mobile browser."}',
                'value_es' => '{"0":"1. Abre el sitio web oficial de 888starz en el navegador de tu móvil."}',
                'value_fr' => '{"0":"1. Ouvrez le site officiel de 888starz dans le navigateur de votre mobile."}',
                'value_pt' => '{"0":"1. Abra o site oficial da 888starz no navegador do seu celular."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"2. Scroll down to the bottom of the homepage and tap the «Android App» button."}',
                'value_es' => '{"0":"2. Desplázate hasta la parte inferior de la página de inicio y pulsa el botón «Android App»."}',
                'value_fr' => '{"0":"2. Faites défiler jusqu\'en bas de la page d\'accueil et appuyez sur le bouton «Android App»."}',
                'value_pt' => '{"0":"2. Role até o final da página inicial e toque no botão «Android App»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"3. Download the APK file of the app to your smartphone."}',
                'value_es' => '{"0":"3. Descarga el archivo APK en tu teléfono."}',
                'value_fr' => '{"0":"3. Téléchargez le fichier APK sur votre smartphone."}',
                'value_pt' => '{"0":"3. Baixe o arquivo APK para o seu smartphone."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"4. Enable installation from unknown sources in your phone settings."}',
                'value_es' => '{"0":"4. Activa la opción para instalar aplicaciones de fuentes desconocidas en los ajustes del teléfono."}',
                'value_fr' => '{"0":"4. Activez l\'installation à partir de sources inconnues dans les paramètres de votre téléphone."}',
                'value_pt' => '{"0":"4. Ative a instalação de fontes desconhecidas nas configurações do telefone."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"5. Open the downloaded file and tap «Install»."}',
                'value_es' => '{"0":"5. Abre el archivo descargado y pulsa «Instalar»."}',
                'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et appuyez sur «Installer»."}',
                'value_pt' => '{"0":"5. Abra o arquivo baixado e toque em «Instalar»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"6. Once the installation is complete, open the app and log in or sign up."}',
                'value_es' => '{"0":"6. Una vez finalizada la instalación, abre la aplicación e inicia sesión o regístrate."}',
                'value_fr' => '{"0":"6. Une fois l\'installation terminée, ouvrez l\'application et connectez-vous ou inscrivez-vous."}',
                'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo e faça login ou cadastre-se."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 888starz App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 888starz en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 888starz sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 888starz no iOS (iPhone, iPad)"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"To install the mobile app for iOS, you also need to adjust some settings:"}',
                'value_es' => '{"0":"Para instalar la aplicación móvil en iOS, también es necesario realizar algunos ajustes:"}',
                'value_fr' => '{"0":"Pour installer l\'application mobile sur iOS, vous devez également effectuer certains réglages :"}',
                'value_pt' => '{"0":"Para instalar o aplicativo móvel no iOS, também é necessário fazer alguns ajustes:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"1. Open the Safari browser on your iPhone."}',
                'value_es' => '{"0":"1. Abre el navegador Safari en tu iPhone."}',
                'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre iPhone."}',
                'value_pt' => '{"0":"1. Abra o navegador Safari no seu iPhone."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"2. Go to the official 888starz website and find the mobile app section."}',
                'value_es' => '{"0":"2. Ve al sitio web oficial de 888starz y busca la sección de la aplicación móvil."}',
                'value_fr' => '{"0":"2. Accédez au site officiel de 888starz et trouvez la section de l\'application mobile."}',
                'value_pt' => '{"0":"2. Acesse o site oficial da 888starz e encontre a seção do aplicativo móvel."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"3. Tap the «iOS App» button."}',
                'value_es' => '{"0":"3. Pulsa el botón «iOS App»."}',
                'value_fr' => '{"0":"3. Appuyez sur le bouton « iOS App »."}',
                'value_pt' => '{"0":"3. Toque no botão «iOS App»."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"4. Follow the on-screen instructions: the app is installed via a configuration profile, which requires enabling permissions in your security settings."}',
                'value_es' => '{"0":"4. Sigue las instrucciones en pantalla: la aplicación se instala mediante un perfil, lo que requiere conceder permisos en la configuración de seguridad."}',
                'value_fr' => '{"0":"4. Suivez les instructions à l\'écran : l\'application s\'installe via un profil, ce qui nécessite d\'activer des autorisations dans les paramètres de sécurité."}',
                'value_pt' => '{"0":"4. Siga as instruções na tela: o aplicativo é instalado através de um perfil, o que exige concessão de permissões nas configurações de segurança."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"5. After installation, go to «Settings» → «General» → «Device Management» and trust the developer."}',
                'value_es' => '{"0":"5. Tras la instalación, ve a «Configuración» → «General» → «Gestión de dispositivos» y concede confianza al desarrollador."}',
                'value_fr' => '{"0":"5. Après l\'installation, allez dans « Réglages » → « Général » → « Gestion de l\'appareil » et faites confiance au développeur."}',
                'value_pt' => '{"0":"5. Após a instalação, vá em «Ajustes» → «Geral» → «Gerenciamento de Dispositivo» e confie no desenvolvedor."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"6. Open the app and log in to your account."}',
                'value_es' => '{"0":"6. Abre la aplicación e inicia sesión en tu cuenta."}',
                'value_fr' => '{"0":"6. Ouvrez l\'application et connectez-vous à votre compte."}',
                'value_pt' => '{"0":"6. Abra o aplicativo e faça login na sua conta."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"Due to App Store restrictions, this procedure might seem more complicated, but it is completely safe as long as you download it from the official 888starz website."}',
                'value_es' => '{"0":"Debido a las restricciones de la App Store, este procedimiento puede parecer más complicado, pero es completamente seguro si se descarga desde el sitio oficial de 888starz."}',
                'value_fr' => '{"0":"En raison des restrictions de l’App Store, cette procédure peut sembler plus complexe, mais elle est totalement sûre si vous téléchargez depuis le site officiel de 888starz."}',
                'value_pt' => '{"0":"Devido às restrições da App Store, esse procedimento pode parecer mais complicado, mas é totalmente seguro se for feito pelo site oficial da 888starz."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 888starz Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 888starz"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 888starz"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 888starz"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list_v2',
                'value_en' => '{"0":"Sports and esports betting in pre-match and live modes",
                                "1":"Real-time odds viewing",
                                "2":"Live event graphics and match streaming",
                                "3":"Access to online casino and live casino",
                                "4":"Fast account deposits and withdrawals",
                                "5":"Viewing bet and transaction history",
                                "6":"Activation of bonuses, cashback, and promo codes",
                                "7":"Personal messages and push notifications",
                                "8":"Full access to 24/7 customer support",
                                "9":"Adaptive interface for smartphones and tablets"}',
                'value_es' => '{"0":"Apuestas deportivas y de eSports en modos pre-partido y en vivo",
                                "1":"Visualización de cuotas en tiempo real",
                                "2":"Gráficos en vivo de eventos y transmisiones de partidos",
                                "3":"Acceso a casino online y casino en vivo",
                                "4":"Depósitos y retiros rápidos",
                                "5":"Visualización del historial de apuestas y transacciones",
                                "6":"Activación de bonos, reembolsos y códigos promocionales",
                                "7":"Mensajes personales y notificaciones push",
                                "8":"Acceso completo al soporte al cliente 24/7",
                                "9":"Interfaz adaptativa para smartphones y tablets"}',
                'value_fr' => '{"0":"Paris sur le sport et l’eSport en modes pré-match et en direct",
                                "1":"Consultation des cotes en temps réel",
                                "2":"Graphiques en direct des événements et diffusion des matchs",
                                "3":"Accès au casino en ligne et au casino en direct",
                                "4":"Dépôts et retraits rapides",
                                "5":"Consultation de l’historique des paris et des transactions",
                                "6":"Activation des bonus, cashback et codes promo",
                                "7":"Messages personnels et notifications push",
                                "8":"Accès complet au service client 24/7",
                                "9":"Interface adaptative pour smartphones et tablettes"}',
                'value_pt' => '{"0":"Apostas em esportes e eSports nos modos pré-jogo e ao vivo",
                                "1":"Visualização de odds em tempo real",
                                "2":"Gráficos ao vivo de eventos e transmissões de partidas",
                                "3":"Acesso a cassino online e cassino ao vivo",
                                "4":"Depósitos e saques rápidos",
                                "5":"Visualização do histórico de apostas e transações",
                                "6":"Ativação de bônus, cashback e códigos promocionais",
                                "7":"Mensagens pessoais e notificações push",
                                "8":"Acesso completo ao suporte ao cliente 24/7",
                                "9":"Interface adaptativa para smartphones e tablets"}',
             'order' => 25
            ]
        );
    }
}
