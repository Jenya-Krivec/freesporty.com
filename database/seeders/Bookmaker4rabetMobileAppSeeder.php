<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 4rabet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 4rabet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 4rabet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers fully functional apps for both Android and iOS. Both versions provide fast navigation, full access to the platform’s features, and are optimized for use even with slow internet connections. The apps allow users to conveniently place live bets, play casino games, view statistics, and manage their accounts."}',
             'value_es' => '{"0":"4rabet ofrece aplicaciones completas para Android e iOS. Ambas versiones permiten una navegación rápida, acceso total a todas las funciones de la plataforma y están optimizadas para conexiones lentas a internet. Las aplicaciones permiten realizar apuestas en vivo, jugar en el casino, consultar estadísticas y gestionar la cuenta de forma cómoda."}',
             'value_fr' => '{"0":"4rabet propose des applications complètes pour Android et iOS. Les deux versions offrent une navigation fluide, un accès complet à toutes les fonctionnalités de la plateforme et sont optimisées pour fonctionner même avec une connexion Internet lente. Les applications permettent de placer des paris en direct, de jouer au casino, de consulter les statistiques et de gérer son compte facilement."}',
             'value_pt' => '{"0":"A 4rabet oferece aplicativos completos para Android e iOS. Ambas as versões proporcionam navegação rápida, acesso total a todas as funcionalidades da plataforma e são otimizadas para uso mesmo com conexões lentas de internet. Os aplicativos permitem apostar ao vivo com facilidade, jogar no cassino, visualizar estatísticas e gerenciar a conta com comodidade."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MelBet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MelBet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MelBet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MelBet"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full access to website functionality",
                                 "1":"App works even with unstable internet",
                                 "2":"Intuitive interface",
                                 "3":"Push notifications",
                                 "4":"Biometric login",
                                 "5":"Deposit and withdrawal options"},
                             "1":
                                {"0":"No live match video streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso completo a todas las funciones del sitio",
                                 "1":"La app funciona incluso con conexión inestable",
                                 "2":"Interfaz intuitiva",
                                 "3":"Notificaciones push",
                                 "4":"Inicio de sesión con biometría",
                                 "5":"Opciones de depósito y retiro"},
                             "1":
                                {"0":"Sin transmisiones en vivo de partidos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès complet aux fonctionnalités du site",
                                 "1":"L’application fonctionne même avec une connexion instable",
                                 "2":"Interface intuitive",
                                 "3":"Notifications push",
                                 "4":"Connexion biométrique",
                                 "5":"Dépôt et retrait possibles"},
                             "1":
                                {"0":"Pas de diffusion vidéo des matchs en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso completo às funcionalidades do site",
                                 "1":"O aplicativo funciona mesmo com internet instável",
                                 "2":"Interface intuitiva",
                                 "3":"Notificações push",
                                 "4":"Login por biometria",
                                 "5":"Opções de depósito e saque"},
                             "1":
                                {"0":"Sem transmissão ao vivo dos eventos esportivos"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 4rabet App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 4rabet en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application 4rabet sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 4rabet no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Although the mobile app is not available on the Play Market, 4rabet offers an alternative way to download and install the app on your mobile device. Below is a step-by-step installation guide:"}',
             'value_es' => '{"0":"Aunque la aplicación móvil no está disponible en Play Market, 4rabet ofrece una forma alternativa de descargar e instalar la aplicación en tu dispositivo móvil. A continuación, se presenta una guía paso a paso para la instalación:"}',
             'value_fr' => '{"0":"Bien que l’application mobile ne soit pas disponible sur le Play Market, 4rabet propose une méthode alternative pour télécharger et installer l’application sur votre appareil mobile. Voici le guide d’installation étape par étape :"}',
             'value_pt' => '{"0":"Embora o aplicativo móvel não esteja disponível na Play Store, a 4rabet oferece uma alternativa para baixar e instalar o aplicativo no seu dispositivo móvel. Veja abaixo um guia passo a passo de instalação:"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 4rabet website using your mobile browser."}',
             'value_es' => '{"0":"1. Accede al sitio web oficial de 4rabet desde tu navegador móvil."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de 4rabet via votre navigateur mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 4rabet pelo navegador do seu celular."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"2. Scroll to the bottom of the homepage and find the «Android App» button."}',
             'value_es' => '{"0":"2. En la parte inferior de la página principal, busca el botón «Android App»."}',
             'value_fr' => '{"0":"2. En bas de la page d’accueil, trouvez le bouton « Android App »."}',
             'value_pt' => '{"0":"2. Na parte inferior da página inicial, encontre o botão «Android App»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file by tapping the appropriate button."}',
             'value_es' => '{"0":"3. Descarga el archivo APK tocando el botón correspondiente."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK en appuyant sur le bouton correspondant."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK clicando no botão apropriado."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4. In your phone settings, allow installation from unknown sources."}',
             'value_es' => '{"0":"4. En los ajustes del teléfono, permite la instalación desde fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Dans les paramètres du téléphone, autorisez l’installation depuis des sources inconnues."}',
             'value_pt' => '{"0":"4. Nas configurações do telefone, permita a instalação de fontes desconhecidas."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and confirm the installation."}',
             'value_es' => '{"0":"5. Abre el archivo descargado y confirma la instalación."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et confirmez l’installation."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e confirme a instalação."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"6. Once installed, open the app and log in or register a new account."}',
             'value_es' => '{"0":"6. Una vez instalado, abre la app e inicia sesión o crea una cuenta."}',
             'value_fr' => '{"0":"6. Une fois installé, ouvrez l’application et connectez-vous ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo e faça login ou registre-se."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install the 4rabet App on iOS (iPhone, iPad)"}',
                'value_es' => '{"0":"Cómo instalar la aplicación de 4rabet en iOS (iPhone, iPad)"}',
                'value_fr' => '{"0":"Comment installer l\'application 4rabet sur iOS (iPhone, iPad)"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 4rabet no iOS (iPhone, iPad)"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can also install the WEB app on your mobile device using the instructions below:"}',
             'value_es' => '{"0":"También puedes instalar la aplicación WEB en tu dispositivo móvil siguiendo las instrucciones a continuación:"}',
             'value_fr' => '{"0":"Vous pouvez également installer l’application WEB sur votre appareil mobile en suivant les instructions ci-dessous :"}',
             'value_pt' => '{"0":"Você também pode instalar o aplicativo WEB no seu dispositivo móvel usando as instruções abaixo:"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the Safari browser on your iPhone or iPad. Other browsers (Chrome, Firefox) do not support the Add to Home Screen feature."}',
             'value_es' => '{"0":"1. Abre el navegador Safari en tu iPhone o iPad. Otros navegadores (Chrome, Firefox) no admiten la función de añadir a la pantalla de inicio."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre iPhone ou iPad. Les autres navigateurs (Chrome, Firefox) ne prennent pas en charge la fonction d’ajout à l’écran d’accueil."}',
             'value_pt' => '{"0":"1. Abra o navegador Safari no seu iPhone ou iPad. Outros navegadores (Chrome, Firefox) não suportam a função de adicionar à tela inicial."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"2. Enter the official website address 4rabet.com in the search bar and wait for the page to fully load."}',
             'value_es' => '{"0":"2. Escribe la dirección del sitio oficial 4rabet.com en la barra de búsqueda y espera a que la página se cargue por completo."}',
             'value_fr' => '{"0":"2. Saisissez l’adresse du site officiel 4rabet.com dans la barre de recherche et attendez le chargement complet de la page."}',
             'value_pt' => '{"0":"2. Digite o endereço oficial 4rabet.com na barra de pesquisa e aguarde o carregamento completo da página."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Share» icon at the bottom of the screen."}',
             'value_es' => '{"0":"3. Pulsa el icono de «Compartir» en la parte inferior de la pantalla."}',
             'value_fr' => '{"0":"3. Appuyez sur l’icône «Partager» en bas de l’écran."}',
             'value_pt' => '{"0":"3. Toque no ícone de «Compartilhar» na parte inferior da tela."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4. In the list of options, scroll down and find «Add to Home Screen». Tap it."}',
             'value_es' => '{"0":"4. En la lista de opciones, desplázate hacia abajo y selecciona «Añadir a pantalla de inicio». Pulsa sobre esa opción."}',
             'value_fr' => '{"0":"4. Dans la liste des options, faites défiler vers le bas et sélectionnez «Ajouter à l’écran d’accueil». Appuyez dessus."}',
             'value_pt' => '{"0":"4. Na lista de opções, role para baixo e toque em «Adicionar à tela de início»."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"5. Safari will suggest a default shortcut name — usually «4rabet». You can change it if you like. Then tap «Add» in the top right corner."}',
             'value_es' => '{"0":"5. Safari sugerirá un nombre predeterminado para el acceso directo — normalmente «4rabet». Puedes cambiarlo si lo deseas. Luego pulsa «Añadir» en la esquina superior derecha."}',
             'value_fr' => '{"0":"5. Safari proposera un nom par défaut pour le raccourci — généralement «4rabet». Vous pouvez le modifier si vous le souhaitez. Ensuite, appuyez sur «Ajouter» en haut à droite."}',
             'value_pt' => '{"0":"5. O Safari sugerirá um nome padrão para o atalho — geralmente «4rabet». Você pode alterá-lo se desejar. Em seguida, toque em «Adicionar» no canto superior direito."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"6. Done! You can now log into your account or register a new one."}',
             'value_es' => '{"0":"6. ¡Listo! Ahora puedes iniciar sesión en tu cuenta o registrar una nueva."}',
             'value_fr' => '{"0":"6. C’est fait ! Vous pouvez maintenant vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"6. Pronto! Agora você pode entrar na sua conta ou registrar uma nova."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 4rabet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 4rabet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 4rabet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 4rabet"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet mobile app provides full access to all core features of the platform. Players can:"}',
             'value_es' => '{"0":"La aplicación móvil de 4rabet ofrece acceso completo a todas las funciones principales de la plataforma. Los jugadores pueden:"}',
             'value_fr' => '{"0":"L’application mobile 4rabet offre un accès complet à toutes les fonctionnalités principales de la plateforme. Les joueurs peuvent :"}',
             'value_pt' => '{"0":"O aplicativo móvel da 4rabet oferece acesso completo a todas as principais funcionalidades da plataforma. Os jogadores podem:"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list_v2',
             'value_en' => '{"0":"place sports bets (pre-match and live)",
                             "1":"play slots, live casino, Teen Patti, Andar Bahar",
                             "2":"deposit and withdraw funds via popular payment services",
                             "3":"receive notifications about bet results, new promotions, and bonuses",
                             "4":"contact customer support directly through the app",
                             "5":"view bet history",
                             "6":"use bonuses and promo codes"}',
             'value_es' => '{"0":"realizar apuestas deportivas (pre-match y en vivo)",
                             "1":"jugar a las tragamonedas, casino en vivo, Teen Patti, Andar Bahar",
                             "2":"depositar y retirar fondos a través de servicios de pago populares",
                             "3":"recibir notificaciones sobre resultados de apuestas, nuevas promociones y bonos",
                             "4":"contactar con el servicio de atención al cliente directamente desde la aplicación",
                             "5":"ver el historial de apuestas",
                             "6":"usar bonos y códigos promocionales"}',
             'value_fr' => '{"0":"placer des paris sportifs (pré-match et en direct)",
                             "1":"jouer aux machines à sous, casino en direct, Teen Patti, Andar Bahar",
                             "2":"déposer et retirer des fonds via des services de paiement populaires",
                             "3":"recevoir des notifications sur les résultats des paris, les nouvelles promotions et bonus",
                             "4":"contacter le service client directement via l’application",
                             "5":"consulter l’historique des paris",
                             "6":"utiliser les bonus et codes promo"}',
             'value_pt' => '{"0":"fazer apostas esportivas (pré-jogo e ao vivo)",
                             "1":"jogar slots, cassino ao vivo, Teen Patti, Andar Bahar",
                             "2":"depositar e sacar fundos através de serviços de pagamento populares",
                             "3":"receber notificações sobre resultados de apostas, novas promoções e bônus",
                             "4":"contatar o suporte ao cliente diretamente pelo app",
                             "5":"visualizar o histórico de apostas",
                             "6":"usar bônus e códigos promocionais"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the app supports a multilingual interface, including English and Hindi, and allows quick switching between sections without the need to reload the page, making the app usage as comfortable as possible."}',
             'value_es' => '{"0":"Además, la aplicación soporta una interfaz multilingüe, incluyendo inglés e hindi, y permite cambiar rápidamente entre secciones sin necesidad de recargar la página, haciendo el uso de la app lo más cómodo posible."}',
             'value_fr' => '{"0":"De plus, l’application prend en charge une interface multilingue, incluant l’anglais et l’hindi, et permet de passer rapidement d’une section à l’autre sans avoir à recharger la page, rendant l’utilisation de l’application aussi confortable que possible."}',
             'value_pt' => '{"0":"Além disso, o aplicativo suporta uma interface multilíngue, incluindo inglês e hindi, e permite alternar rapidamente entre as seções sem precisar recarregar a página, tornando o uso do aplicativo o mais confortável possível."}',
             'order' => 25
            ]
        );
    }
}
