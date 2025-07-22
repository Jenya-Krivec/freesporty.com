<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
             'value_en' => '{"0":"Linebet Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de Linebet"}',
             'value_fr' => '{"0":"Revue de l\'application mobile Linebet"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da Linebet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In today’s world of sports betting, having a convenient mobile app is critically important for any bookmaker. Linebet is no exception and offers users mobile apps for both Android and iOS platforms. These apps support the full functionality of the website: registration, placing bets in real time, topping up your balance, and watching live streams."}',
             'value_es' => '{"0":"En el mundo actual de las apuestas deportivas, contar con una aplicación móvil conveniente es fundamental para cualquier casa de apuestas. Linebet no es la excepción y ofrece a los usuarios aplicaciones móviles para las plataformas Android e iOS. Estas aplicaciones soportan toda la funcionalidad del sitio web: registro, realización de apuestas en tiempo real, recarga de saldo y visualización de transmisiones en vivo."}',
             'value_fr' => '{"0":"Dans le monde actuel des paris sportifs, disposer d’une application mobile pratique est essentiel pour tout bookmaker. Linebet ne fait pas exception et propose aux utilisateurs des applications mobiles pour les plateformes Android et iOS. Ces applications offrent toutes les fonctionnalités du site : inscription, paris en temps réel, rechargement de solde et visionnage des diffusions en direct."}',
             'value_pt' => '{"0":"No mundo atual das apostas esportivas, ter um aplicativo móvel conveniente é fundamental para qualquer casa de apostas. A Linebet não é exceção e oferece aos usuários aplicativos móveis para as plataformas Android e iOS. Esses apps suportam toda a funcionalidade do site: registro, realização de apostas em tempo real, recarga de saldo e visualização de transmissões ao vivo."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Installation won’t take much effort, so let’s explore the main features of the apps and the installation process in our review."}',
             'value_es' => '{"0":"La instalación no requerirá mucho esfuerzo, así que en nuestra reseña vamos a repasar las principales funciones de las aplicaciones y el proceso de instalación."}',
             'value_fr' => '{"0":"L’installation ne vous demandera pas beaucoup d’efforts, alors découvrons ensemble les principales fonctionnalités des applications et la procédure d’installation dans notre revue."}',
             'value_pt' => '{"0":"A instalação não exigirá muito esforço, então vamos explorar as principais funcionalidades dos apps e o processo de instalação em nossa análise."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Linebet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de Linebet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles Linebet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da Linebet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Access to pre-match and live bets, casino",
                                 "1":"Financial transactions",
                                 "2":"Low data consumption",
                                 "3":"Push notifications",
                                 "4":"Multilingual interface support"},
                             "1":
                                {"0":"Restrictions in some countries",
                                 "1":"Not available in Google Play Store"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso a apuestas pre-match y en vivo, casino",
                                 "1":"Operaciones financieras",
                                 "2":"Bajo consumo de datos",
                                 "3":"Notificaciones push",
                                 "4":"Soporte multilingüe en la interfaz"},
                             "1":
                                {"0":"Restricciones en algunos países",
                                 "1":"No disponible en Google Play Store"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès aux paris pré-match et en direct, casino",
                                 "1":"Opérations financières",
                                 "2":"Faible consommation de données",
                                 "3":"Notifications push",
                                 "4":"Support multilingue de l’interface"},
                             "1":
                                {"0":"Restrictions dans certains pays",
                                 "1":"Non disponible sur Google Play Store"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso a apostas pré-jogo e ao vivo, cassino",
                                 "1":"Transações financeiras",
                                 "2":"Baixo consumo de dados",
                                 "3":"Notificações push",
                                 "4":"Suporte multilíngue da interface"},
                             "1":
                                {"0":"Restrições em alguns países",
                                 "1":"Não disponível na Google Play Store"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the Linebet App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de Linebet en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application Linebet sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da Linebet no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Since the mobile app is not available in the Google Play Store, you might think that the installation process is potentially unsafe. However, this is not the case, as the app is available on the company’s official website. So, let’s take a look at the installation process."}',
             'value_es' => '{"0":"Como la aplicación móvil no está disponible en Google Play Store, podría parecer que el proceso de instalación es potencialmente inseguro. Sin embargo, no es así, ya que la aplicación está disponible en el sitio web oficial de la empresa. Entonces, veamos el proceso de instalación."}',
             'value_fr' => '{"0":"Puisque l’application mobile n’est pas disponible sur Google Play Store, vous pourriez penser que la procédure d’installation est potentiellement risquée. Ce n’est cependant pas le cas, car l’application est disponible sur le site officiel de la société. Examinons donc le processus d’installation."}',
             'value_pt' => '{"0":"Como o aplicativo móvel não está disponível na Google Play Store, você pode pensar que o processo de instalação é potencialmente inseguro. No entanto, isso não é verdade, pois o app está disponível no site oficial da empresa. Então, vamos analisar o processo de instalação."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official Linebet website from your mobile device."}',
             'value_es' => '{"0":"1. Acceda al sitio web oficial de Linebet desde su dispositivo móvil."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de Linebet depuis votre appareil mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da Linebet pelo seu dispositivo móvel."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. At the bottom of the homepage, click the «Mobile Apps» button."}',
             'value_es' => '{"0":"2. En la parte inferior de la página principal, haga clic en el botón «Aplicaciones móviles»."}',
             'value_fr' => '{"0":"2. En bas de la page d’accueil, cliquez sur le bouton « Applications mobiles »."}',
             'value_pt' => '{"0":"2. Na parte inferior da página inicial, clique no botão «Aplicativos móveis»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the Android version of the app."}',
             'value_es' => '{"0":"3. Seleccione la versión de Android de la aplicación."}',
             'value_fr' => '{"0":"3. Sélectionnez la version Android de l’application."}',
             'value_pt' => '{"0":"3. Selecione a versão Android do aplicativo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. Download the APK file to your smartphone."}',
             'value_es' => '{"0":"4. Descargue el archivo APK en su smartphone."}',
             'value_fr' => '{"0":"4. Téléchargez le fichier APK sur votre smartphone."}',
             'value_pt' => '{"0":"4. Baixe o arquivo APK para o seu smartphone."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"5. Go to your phone settings and enable «Allow installation from unknown sources»."}',
             'value_es' => '{"0":"5. Vaya a la configuración del teléfono y active «Permitir instalación desde fuentes desconocidas»."}',
             'value_fr' => '{"0":"5. Allez dans les paramètres de votre téléphone et activez « Autoriser l’installation depuis des sources inconnues »."}',
             'value_pt' => '{"0":"5. Vá para as configurações do telefone e ative «Permitir instalação de fontes desconhecidas»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"6. Open the downloaded file and tap «Install»."}',
             'value_es' => '{"0":"6. Abra el archivo descargado y toque «Instalar»."}',
             'value_fr' => '{"0":"6. Ouvrez le fichier téléchargé et appuyez sur « Installer »."}',
             'value_pt' => '{"0":"6. Abra o arquivo baixado e toque em «Instalar»."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"7. After installation is complete, open the app and log in or register a new account."}',
             'value_es' => '{"0":"7. Después de completar la instalación, abra la aplicación e inicie sesión o registre una nueva cuenta."}',
             'value_fr' => '{"0":"7. Une fois l’installation terminée, ouvrez l’application et connectez-vous ou créez un nouveau compte."}',
             'value_pt' => '{"0":"7. Após a instalação, abra o aplicativo e faça login ou registre uma nova conta."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the Linebet App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de Linebet en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application Linebet sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da Linebet no iOS (iPhone, iPad)"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official Linebet website in the Safari browser on your iPhone."}',
             'value_es' => '{"0":"1. Abra el sitio web oficial de Linebet en el navegador Safari de su iPhone."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de Linebet dans le navigateur Safari sur votre iPhone."}',
             'value_pt' => '{"0":"1. Abra o site oficial da Linebet no navegador Safari do seu iPhone."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. At the bottom of the site, go to the «Mobile Apps» section."}',
             'value_es' => '{"0":"2. En la parte inferior del sitio, vaya a la sección «Aplicaciones móviles»."}',
             'value_fr' => '{"0":"2. En bas du site, accédez à la section « Applications mobiles »."}',
             'value_pt' => '{"0":"2. Na parte inferior do site, vá para a seção «Aplicativos móveis»."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the iOS version."}',
             'value_es' => '{"0":"3. Seleccione la versión para iOS."}',
             'value_fr' => '{"0":"3. Sélectionnez la version iOS."}',
             'value_pt' => '{"0":"3. Selecione a versão para iOS."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. You will be redirected to the installation instructions (in some regions, you may need to change your Apple ID region settings)."}',
             'value_es' => '{"0":"4. Será redirigido a las instrucciones de instalación (en algunas regiones puede ser necesario cambiar la configuración de región del Apple ID)."}',
             'value_fr' => '{"0":"4. Vous serez redirigé vers les instructions d’installation (dans certaines régions, il peut être nécessaire de modifier les paramètres de région de votre identifiant Apple)."}',
             'value_pt' => '{"0":"4. Você será redirecionado para as instruções de instalação (em algumas regiões, pode ser necessário alterar as configurações de região do Apple ID)."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"5. Follow the instructions: if necessary, download the app via an alternative link or TestFlight."}',
             'value_es' => '{"0":"5. Siga las instrucciones: si es necesario, descargue la aplicación a través de un enlace alternativo o TestFlight."}',
             'value_fr' => '{"0":"5. Suivez les instructions : si besoin, téléchargez l’application via un lien alternatif ou TestFlight."}',
             'value_pt' => '{"0":"5. Siga as instruções: se necessário, baixe o aplicativo por meio de um link alternativo ou TestFlight."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"6. After installation, open the app, log in, or register."}',
             'value_es' => '{"0":"6. Después de la instalación, abra la aplicación, inicie sesión o regístrese."}',
             'value_fr' => '{"0":"6. Après l’installation, ouvrez l’application, connectez-vous ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo, faça login ou registre-se."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The availability of the app in the App Store depends on the country’s policy. In some cases, you may need to change your Apple ID region to a country where the app is available, for example, Cyprus or Turkey."}',
             'value_es' => '{"0":"La disponibilidad de la aplicación en la App Store depende de la política del país. En algunos casos, puede ser necesario cambiar la región de su Apple ID a un país donde la aplicación esté disponible, por ejemplo, Chipre o Turquía."}',
             'value_fr' => '{"0":"La disponibilité de l’application sur l’App Store dépend de la politique du pays. Dans certains cas, il peut être nécessaire de changer la région de votre identifiant Apple pour un pays où l’application est disponible, par exemple Chypre ou la Turquie."}',
             'value_pt' => '{"0":"A disponibilidade do aplicativo na App Store depende da política do país. Em alguns casos, pode ser necessário alterar a região do seu Apple ID para um país onde o aplicativo esteja disponível, por exemplo, Chipre ou Turquia."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Linebet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de Linebet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile Linebet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da Linebet"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet mobile app is a full replacement for the website for betting and gambling, adapted for smartphones. Users get access to all the features available in the desktop version:"}',
             'value_es' => '{"0":"La aplicación móvil de Linebet es un reemplazo completo del sitio web para apuestas y juegos de azar, adaptada para smartphones. Los usuarios tienen acceso a todas las funciones disponibles en la versión de escritorio:"}',
             'value_fr' => '{"0":"L’application mobile Linebet est une alternative complète au site web pour les paris et les jeux d’argent, adaptée aux smartphones. Les utilisateurs ont accès à toutes les fonctionnalités disponibles dans la version bureau :"}',
             'value_pt' => '{"0":"O aplicativo móvel da Linebet é uma substituição completa do site para apostas e jogos de azar, adaptado para smartphones. Os usuários têm acesso a todos os recursos disponíveis na versão para desktop:"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list_v2',
             'value_en' => '{"0":"Bets on over 40 sports, extended event line, the ability to place bets in a few clicks",
                             "1":"Detailed statistics, event graphics, fast real-time odds updates",
                             "2":"Live match broadcasts directly in the app",
                             "3":"Casino and live casino",
                             "4":"Activation of promo codes, possibility to receive bonuses and cashback, participation in tournaments",
                             "5":"Account top-up and withdrawal via bank cards, crypto wallets, e-wallets",
                             "6":"Account settings, viewing betting history and notifications",
                             "7":"24/7 support"}',
             'value_es' => '{"0":"Apuestas en más de 40 deportes, línea de eventos ampliada, posibilidad de hacer apuestas en pocos clics",
                             "1":"Estadísticas detalladas, gráficos de eventos, actualización rápida de cuotas en tiempo real",
                             "2":"Transmisiones en vivo de partidos directamente en la aplicación",
                             "3":"Casino y casino en vivo",
                             "4":"Activación de códigos promocionales, posibilidad de recibir bonos y reembolsos, participación en torneos",
                             "5":"Recarga y retiro de cuenta mediante tarjetas bancarias, billeteras cripto y billeteras electrónicas",
                             "6":"Configuración de cuenta, visualización del historial de apuestas y notificaciones",
                             "7":"Soporte 24/7"}',
             'value_fr' => '{"0":"Paris sur plus de 40 sports, ligne d’événements étendue, possibilité de placer des paris en quelques clics",
                             "1":"Statistiques détaillées, graphiques des événements, mise à jour rapide des cotes en temps réel",
                             "2":"Diffusions en direct des matchs directement dans l’application",
                             "3":"Casino et casino en direct",
                             "4":"Activation des codes promo, possibilité de recevoir des bonus et cashback, participation aux tournois",
                             "5":"Recharge et retrait de compte via cartes bancaires, portefeuilles crypto et portefeuilles électroniques",
                             "6":"Paramètres du compte, consultation de l’historique des paris et des notifications",
                             "7":"Support 24/7"}',
             'value_pt' => '{"0":"Apostas em mais de 40 esportes, linha de eventos ampliada, possibilidade de fazer apostas em poucos cliques",
                             "1":"Estatísticas detalhadas, gráficos de eventos, atualização rápida das odds em tempo real",
                             "2":"Transmissões ao vivo das partidas diretamente no aplicativo",
                             "3":"Cassino e cassino ao vivo",
                             "4":"Ativação de códigos promocionais, possibilidade de receber bônus e cashback, participação em torneios",
                             "5":"Recarregamento e saque da conta via cartões bancários, carteiras cripto e carteiras eletrônicas",
                             "6":"Configurações da conta, visualização do histórico de apostas e notificações",
                             "7":"Suporte 24/7"}',
             'order' => 26
            ]
        );
    }
}
