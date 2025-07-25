<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"ivibet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de ivibet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile ivibet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da ivibet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Although Ivibet currently does not offer full-fledged mobile apps for Android and iOS, you can still install adapted web apps. A web app is a lightweight alternative to a traditional application that does not require installation from the App Store or Google Play, but provides a convenient browser-based experience."}',
             'value_es' => '{"0":"Aunque Ivibet actualmente no ofrece aplicaciones móviles completas para Android e iOS, aún puedes instalar aplicaciones web adaptadas. Una aplicación web es una alternativa ligera a una aplicación tradicional que no requiere instalación desde la App Store o Google Play, pero permite trabajar cómodamente desde el navegador."}',
             'value_fr' => '{"0":"Bien qu’Ivibet ne propose actuellement pas d\'applications mobiles complètes pour Android et iOS, vous pouvez néanmoins installer des applications web adaptées. Une application web est une alternative allégée aux applications traditionnelles, qui ne nécessite pas de téléchargement via l\'App Store ou Google Play, tout en offrant une expérience fluide depuis le navigateur."}',
             'value_pt' => '{"0":"Embora o Ivibet atualmente não ofereça aplicativos móveis completos para Android e iOS, ainda é possível instalar aplicativos web adaptados. Um aplicativo web é uma alternativa leve aos aplicativos tradicionais, que não exige instalação pela App Store ou Google Play, mas oferece uma experiência conveniente diretamente no navegador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that this type of app fully replicates the functionality of the website. You can place bets, play in the casino, watch live streams, conduct payment transactions, and much more."}',
             'value_es' => '{"0":"Cabe añadir que esta aplicación replica completamente la funcionalidad del sitio web. Podrás hacer apuestas, jugar en el casino, ver transmisiones en vivo, realizar operaciones de pago y mucho más."}',
             'value_fr' => '{"0":"Il convient également de noter que cette application reproduit entièrement les fonctionnalités du site. Vous pourrez placer des paris, jouer au casino, regarder des retransmissions en direct, effectuer des opérations de paiement, et bien plus encore."}',
             'value_pt' => '{"0":"Vale acrescentar que esse tipo de aplicativo reproduz totalmente as funcionalidades do site. Você poderá fazer apostas, jogar no cassino, assistir transmissões ao vivo, realizar transações financeiras e muito mais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the ivibet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de ivibet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles ivibet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da ivibet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place bets",
                                 "1":"Ability to play in the casino",
                                 "2":"Deposit and withdrawal of funds",
                                 "3":"Data-saving functionality",
                                 "4":"No updates required"},
                             "1":
                                {"0":"No push notifications"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de hacer apuestas",
                                 "1":"Posibilidad de jugar en el casino",
                                 "2":"Depósitos y retiros de fondos",
                                 "3":"Ahorro de datos",
                                 "4":"No requiere actualizaciones"},
                             "1":
                                {"0":"No hay notificaciones push"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de placer des paris",
                                 "1":"Possibilité de jouer au casino",
                                 "2":"Dépôt et retrait de fonds",
                                 "3":"Économie de données",
                                 "4":"Aucune mise à jour requise"},
                             "1":
                                {"0":"Pas de notifications push"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas",
                                 "1":"Possibilidade de jogar no cassino",
                                 "2":"Depósito e saque de fundos",
                                 "3":"Economia de dados",
                                 "4":"Não requer atualizações"},
                             "1":
                                {"0":"Sem notificações push"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the ivibet App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de ivibet en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application ivibet sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da ivibet no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To install the web app on Android mobile devices, follow these steps:"}',
             'value_es' => '{"0":"Para instalar la aplicación web en dispositivos móviles Android, siga estos pasos:"}',
             'value_fr' => '{"0":"Pour installer l\'application web sur un appareil mobile Android, suivez ces étapes :"}',
             'value_pt' => '{"0":"Para instalar o aplicativo web em dispositivos móveis Android, siga estes passos:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the Google Chrome browser on your smartphone or tablet."}',
             'value_es' => '{"0":"1. Abra el navegador Google Chrome en su smartphone o tablet."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Google Chrome sur votre smartphone ou tablette."}',
             'value_pt' => '{"0":"1. Abra o navegador Google Chrome no seu smartphone ou tablet."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the official Ivibet website."}',
             'value_es' => '{"0":"2. Vaya al sitio web oficial de Ivibet."}',
             'value_fr' => '{"0":"2. Accédez au site officiel d\'Ivibet."}',
             'value_pt' => '{"0":"2. Acesse o site oficial da Ivibet."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"3. Wait for the homepage to fully load."}',
             'value_es' => '{"0":"3. Espere a que se cargue completamente la página principal."}',
             'value_fr' => '{"0":"3. Attendez le chargement complet de la page d\'accueil."}',
             'value_pt' => '{"0":"3. Aguarde o carregamento completo da página inicial."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap the menu icon (three dots) in the top-right corner."}',
             'value_es' => '{"0":"4. Toque el icono de menú (tres puntos) en la esquina superior derecha."}',
             'value_fr' => '{"0":"4. Appuyez sur l’icône du menu (trois points) en haut à droite."}',
             'value_pt' => '{"0":"4. Toque no ícone de menu (três pontos) no canto superior direito."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"5. From the dropdown menu, select «Add to Home screen»."}',
             'value_es' => '{"0":"5. En el menú desplegable, seleccione «Añadir a la pantalla de inicio»."}',
             'value_fr' => '{"0":"5. Dans le menu déroulant, sélectionnez «Ajouter à l\'écran d\'accueil»."}',
             'value_pt' => '{"0":"5. No menu suspenso, selecione «Adicionar à tela inicial»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"6. Confirm the action, and a web app shortcut will be created on your home screen."}',
             'value_es' => '{"0":"6. Confirme la acción y se creará un acceso directo a la aplicación web en su pantalla de inicio."}',
             'value_fr' => '{"0":"6. Confirmez l’action, et un raccourci vers l’application web sera créé sur votre écran d’accueil."}',
             'value_pt' => '{"0":"6. Confirme a ação e um atalho para o aplicativo web será criado na tela inicial."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the ivibet App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de ivibet en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application ivibet sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da ivibet no iOS (iPhone, iPad)"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To install the web app on iOS mobile devices, follow these steps:"}',
             'value_es' => '{"0":"Para instalar la aplicación web en dispositivos móviles con iOS, siga estos pasos:"}',
             'value_fr' => '{"0":"Pour installer l\'application web sur un appareil mobile iOS, suivez les étapes suivantes :"}',
             'value_pt' => '{"0":"Para instalar o aplicativo web em dispositivos móveis iOS, siga estas etapas:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"1. Launch the Safari browser on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre el navegador Safari en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra o navegador Safari no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"2. Visit the official Ivibet website."}',
             'value_es' => '{"0":"2. Visita el sitio web oficial de Ivibet."}',
             'value_fr' => '{"0":"2. Accédez au site officiel d\'Ivibet."}',
             'value_pt' => '{"0":"2. Visite o site oficial do Ivibet."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"3. Once the site has loaded, tap the «Share» icon (an upward arrow in a box at the bottom of the screen)."}',
             'value_es' => '{"0":"3. Una vez que se haya cargado el sitio, toca el ícono de «Compartir» (una flecha hacia arriba dentro de un cuadro en la parte inferior de la pantalla)."}',
             'value_fr' => '{"0":"3. Une fois le site chargé, touchez l’icône «Partager» (une flèche vers le haut dans un carré en bas de l’écran)."}',
             'value_pt' => '{"0":"3. Após o carregamento do site, toque no ícone de «Compartilhar» (uma seta para cima dentro de um quadrado na parte inferior da tela)."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"4. From the menu, select «Add to Home Screen»."}',
             'value_es' => '{"0":"4. En el menú, selecciona «Añadir a la pantalla de inicio»."}',
             'value_fr' => '{"0":"4. Dans le menu, sélectionnez «Ajouter à l’écran d’accueil»."}',
             'value_pt' => '{"0":"4. No menu, selecione «Adicionar à Tela de Início»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"5. Enter a name for the shortcut and tap «Add»."}',
             'value_es' => '{"0":"5. Asigna un nombre al acceso directo y pulsa «Añadir»."}',
             'value_fr' => '{"0":"5. Donnez un nom au raccourci et appuyez sur «Ajouter»."}',
             'value_pt' => '{"0":"5. Dê um nome ao atalho e toque em «Adicionar»."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The shortcut will appear among your icons, and you’ll be able to use it like a regular app."}',
             'value_es' => '{"0":"El acceso directo aparecerá entre tus íconos y podrás usarlo como una aplicación normal."}',
             'value_fr' => '{"0":"Le raccourci apparaîtra parmi vos icônes et vous pourrez l’utiliser comme une application classique."}',
             'value_pt' => '{"0":"O atalho aparecerá entre os seus ícones e você poderá usá-lo como um aplicativo normal."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the ivibet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de ivibet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile ivibet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da ivibet"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list_v2',
             'value_en' => '{"0":"Sports betting in pre-match and live modes",
                             "1":"Instant update of odds and event graphics in real time",
                             "2":"Access to esports and virtual sports",
                             "3":"Full casino section: slots, roulette, blackjack, live games with live dealers",
                             "4":"Convenient deposit and withdrawal options",
                             "5":"Support for popular payment systems",
                             "6":"Personal account with betting history, transactions, and profile settings",
                             "7":"Access to bonuses, promotions, and promo codes",
                             "8":"24/7 customer support via live chat or email"}',
             'value_es' => '{"0":"Apuestas deportivas en modos pre-match y en vivo",
                             "1":"Actualización instantánea de cuotas y gráficos de eventos en tiempo real",
                             "2":"Acceso a eSports y deportes virtuales",
                             "3":"Sección completa de casino: tragamonedas, ruleta, blackjack, juegos en vivo con crupieres en vivo",
                             "4":"Depósito y retiro convenientes",
                             "5":"Soporte para sistemas de pago populares",
                             "6":"Cuenta personal con historial de apuestas, transacciones y configuración de perfil",
                             "7":"Acceso a bonos, promociones y códigos promocionales",
                             "8":"Soporte al cliente 24/7 vía chat en vivo o correo electrónico"}',
             'value_fr' => '{"0":"Paris sportifs en modes pré-match et en direct",
                             "1":"Mise à jour instantanée des cotes et des graphiques des événements en temps réel",
                             "2":"Accès à l’esport et aux sports virtuels",
                             "3":"Section casino complète : machines à sous, roulette, blackjack, jeux en direct avec croupiers en direct",
                             "4":"Dépôts et retraits pratiques",
                             "5":"Support des systèmes de paiement populaires",
                             "6":"Compte personnel avec historique des paris, transactions et paramètres du profil",
                             "7":"Accès aux bonus, promotions et codes promo",
                             "8":"Support client 24h/24 et 7j/7 via chat en direct ou email"}',
             'value_pt' => '{"0":"Apostas esportivas nos modos pré-jogo e ao vivo",
                             "1":"Atualização instantânea de odds e gráficos de eventos em tempo real",
                             "2":"Acesso a eSports e esportes virtuais",
                             "3":"Seção completa de cassino: slots, roleta, blackjack, jogos ao vivo com dealers reais",
                             "4":"Depósito e saque convenientes",
                             "5":"Suporte para sistemas de pagamento populares",
                             "6":"Conta pessoal com histórico de apostas, transações e configurações de perfil",
                             "7":"Acesso a bônus, promoções e códigos promocionais",
                             "8":"Suporte ao cliente 24/7 via chat ao vivo ou email"}',
             'order' => 24
            ]
        );
    }
}
