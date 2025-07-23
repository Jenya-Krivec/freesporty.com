<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
             'value_en' => '{"0":"Linebet Review"}',
             'value_es' => '{"0":"Reseña de Linebet"}',
             'value_fr' => '{"0":"Avis sur Linebet"}',
             'value_pt' => '{"0":"Análise da Linebet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is a relatively young bookmaker that began operating in 2019. It is licensed under the international Curacao license, which allows it to accept players from many countries around the world. In a short time, Linebet has gained considerable popularity, especially among users from CIS countries and Asia. The bookmaker offers a wide betting line, generous bonuses, and an online casino."}',
             'value_es' => '{"0":"Linebet es una casa de apuestas relativamente joven que comenzó a operar en 2019. Funciona bajo una licencia internacional de Curazao, lo que le permite aceptar jugadores de muchos países del mundo. En poco tiempo, Linebet se ha vuelto bastante popular, especialmente entre los usuarios de los países de la CEI y Asia. La casa de apuestas ofrece una amplia gama de apuestas, bonos generosos y un casino en línea."}',
             'value_fr' => '{"0":"Linebet est un bookmaker relativement jeune qui a commencé ses activités en 2019. Il opère sous une licence internationale du Curaçao, ce qui lui permet d\'accepter des joueurs de nombreux pays à travers le monde. En peu de temps, Linebet est devenu assez populaire, notamment parmi les utilisateurs des pays de la CEI et d\'Asie. Le bookmaker propose une large gamme de paris, des bonus généreux et un casino en ligne."}',
             'value_pt' => '{"0":"A Linebet é uma casa de apostas relativamente jovem que começou a operar em 2019. Atua sob uma licença internacional de Curaçau, o que lhe permite aceitar jogadores de vários países do mundo. Em pouco tempo, a Linebet tornou-se bastante popular, especialmente entre os usuários dos países da CEI e da Ásia. A casa oferece uma ampla linha de apostas, bônus generosos e um cassino online."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"On Linebet, you can find bets on almost every type of sport. From the most popular ones like football, basketball, and tennis, to more niche sports such as cricket, snooker, or darts. There’s really a lot going on — thousands of betting options are available daily, covering both major tournaments and local championships. The platform offers convenient navigation by sport type and filters by country, league, or match start time."}',
             'value_es' => '{"0":"En Linebet puedes encontrar apuestas para prácticamente todos los deportes. Desde los más populares —fútbol, baloncesto, tenis— hasta disciplinas menos comunes como el críquet, el snooker o los dardos. Hay una gran cantidad de eventos disponibles cada día, con miles de opciones para apostar en torneos grandes y ligas locales. El sitio cuenta con una navegación cómoda por deportes y filtros por países, ligas o la hora de inicio de los partidos."}',
             'value_fr' => '{"0":"Sur Linebet, vous pouvez parier sur presque tous les types de sports. Des plus populaires comme le football, le basketball et le tennis, jusqu’aux sports plus rares comme le cricket, le snooker ou les fléchettes. Il y a vraiment beaucoup d’événements — des milliers d’options de paris sont disponibles chaque jour, couvrant aussi bien les grands tournois que les championnats locaux. Le site propose une navigation pratique par type de sport et des filtres par pays, ligue ou heure de début des matchs."}',
             'value_pt' => '{"0":"Na Linebet, você encontra apostas em praticamente todos os tipos de esportes. Desde os mais populares — como futebol, basquete e tênis — até modalidades mais incomuns como críquete, sinuca ou dardos. Há realmente muitos eventos disponíveis, com milhares de opções de apostas todos os dias, tanto para grandes torneios quanto para campeonatos locais. O site oferece navegação prática por tipo de esporte e filtros por país, liga ou horário de início dos jogos."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Here are the main sports you can place bets on at this site:"}',
             'value_es' => '{"0":"Estos son los principales deportes en los que podrás apostar en esta plataforma:"}',
             'value_fr' => '{"0":"Voici les principaux sports sur lesquels vous pouvez parier sur cette plateforme :"}',
             'value_pt' => '{"0":"Estes são os principais esportes nos quais você poderá apostar neste site:"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers high odds that often exceed the average among other bookmakers. For example, odds on top football matches can reach 1.95–1.97. The bookmaker also provides high odds for tennis, basketball, and hockey league bets."}',
             'value_es' => '{"0":"Linebet ofrece cuotas altas que a menudo superan el promedio entre otras casas de apuestas. Por ejemplo, en los partidos de fútbol más importantes, las cuotas pueden alcanzar entre 1.95 y 1.97. También ofrece cuotas elevadas en apuestas de tenis, baloncesto y ligas de hockey."}',
             'value_fr' => '{"0":"Linebet propose des cotes élevées, qui dépassent souvent la moyenne des autres bookmakers. Par exemple, pour les matchs de football majeurs, les cotes peuvent atteindre 1.95 à 1.97. Des cotes attractives sont également disponibles pour les paris sur le tennis, le basketball et les ligues de hockey."}',
             'value_pt' => '{"0":"A Linebet oferece odds altas que frequentemente superam a média entre as casas de apostas. Por exemplo, em jogos de futebol de destaque, as odds podem chegar a 1.95–1.97. Também há odds competitivas para apostas em tênis, basquete e ligas de hóquei."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet regularly features boosted odds, allowing players to earn even more profit with the right prediction."}',
             'value_es' => '{"0":"Con frecuencia, Linebet publica apuestas con cuotas mejoradas, lo que permite obtener mayores beneficios si se acierta el pronóstico."}',
             'value_fr' => '{"0":"Linebet propose régulièrement des paris avec cotes boostées, permettant de réaliser encore plus de bénéfices en cas de bon pronostic."}',
             'value_pt' => '{"0":"A plataforma frequentemente disponibiliza apostas com odds aumentadas, o que permite obter lucros ainda maiores com um palpite acertado."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The number of betting options at Linebet deserves special attention. For top matches, the number of available markets can exceed 1,500. In addition to standard bets on match outcomes, handicaps, and totals, there are also individual player stats, exact score, number of corners, and yellow cards. Combined bets are also available."}',
             'value_es' => '{"0":"La cantidad de opciones de apuesta en Linebet merece una mención aparte. En los partidos más importantes, el número de mercados disponibles puede superar los 1,500. Además de las apuestas estándar al resultado del partido, hándicaps y totales, también hay estadísticas individuales de jugadores, resultado exacto, número de saques de esquina y tarjetas amarillas. También se pueden hacer apuestas combinadas."}',
             'value_fr' => '{"0":"Le nombre d’options de paris chez Linebet mérite une attention particulière. Pour les matchs majeurs, le nombre de marchés disponibles peut dépasser 1 500. En plus des paris classiques sur le résultat, les handicaps et les totaux, on trouve des paris sur les statistiques individuelles des joueurs, le score exact, le nombre de corners et de cartons jaunes. Il est également possible de faire des paris combinés."}',
             'value_pt' => '{"0":"A quantidade de opções de apostas na Linebet merece destaque. Em partidas de alto nível, o número de mercados disponíveis pode ultrapassar 1.500. Além das apostas padrão no resultado da partida, handicaps e totais, há também estatísticas individuais de jogadores, placar exato, número de escanteios e cartões amarelos. Também é possível fazer apostas combinadas."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In esports, you can bet on events like first blood or the number of heroes killed. This variety will satisfy even the most demanding players."}',
             'value_es' => '{"0":"En los deportes electrónicos, puedes apostar a eventos como la primera sangre o el número de héroes eliminados. Esta variedad complacerá incluso a los jugadores más exigentes."}',
             'value_fr' => '{"0":"Dans les sports électroniques, vous pouvez parier sur des événements comme le premier sang ou le nombre de héros éliminés. Cette diversité satisfera même les parieurs les plus exigeants."}',
             'value_pt' => '{"0":"Nos eSports, é possível apostar em eventos como o primeiro abate ou o número de heróis eliminados. Essa diversidade agrada até mesmo os apostadores mais exigentes."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Live betting at Linebet is one of the platform’s main advantages. Every day, more than 1,000 events are available in real time."}',
             'value_es' => '{"0":"Las apuestas en vivo en Linebet son una de las principales ventajas de la plataforma. Cada día hay más de 1,000 eventos disponibles en tiempo real."}',
             'value_fr' => '{"0":"Les paris en direct chez Linebet sont l’un des atouts majeurs de la plateforme. Plus de 1 000 événements sont disponibles chaque jour en temps réel."}',
             'value_pt' => '{"0":"As apostas ao vivo na Linebet são um dos principais trunfos da plataforma. Diariamente, estão disponíveis mais de 1.000 eventos em tempo real."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Odds are updated instantly, and bets can be placed with a single click. Most events feature live statistics, a timeline of in-game actions, and an odds movement indicator. This allows users not only to react quickly to match developments but also to analyze the game dynamics."}',
             'value_es' => '{"0":"Las cuotas se actualizan al instante y se pueden realizar apuestas con un solo clic. La mayoría de los eventos ofrecen estadísticas en directo, cronología de acciones en el campo y un indicador de cambios en las cuotas. Esto permite reaccionar rápidamente a los acontecimientos del partido y analizar su dinámica."}',
             'value_fr' => '{"0":"Les cotes sont mises à jour instantanément, et les paris peuvent être placés en un seul clic. Pour la plupart des événements, on trouve des statistiques en direct, une chronologie des actions sur le terrain, et un indicateur de variation des cotes. Cela permet non seulement de réagir rapidement au déroulement du match, mais aussi d’analyser la dynamique du jeu."}',
             'value_pt' => '{"0":"As odds são atualizadas instantaneamente, e as apostas podem ser feitas com um único clique. A maioria dos eventos oferece estatísticas em tempo real, cronologia das ações em campo e um indicador de variação das cotações. Isso permite reagir rapidamente ao andamento do jogo e analisar sua dinâmica."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is ideal for both experienced bettors and beginners thanks to its simplicity and informative interface."}',
             'value_es' => '{"0":"Las apuestas en vivo son ideales tanto para jugadores experimentados como para principiantes, gracias a su simplicidad e información clara."}',
             'value_fr' => '{"0":"Le live betting convient aussi bien aux parieurs expérimentés qu’aux débutants grâce à sa simplicité et à son interface informative."}',
             'value_pt' => '{"0":"O live betting é ideal tanto para apostadores experientes quanto para iniciantes, graças à sua simplicidade e riqueza de informações."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers the ability to watch live streams directly on the website or through the mobile app. Live video is available for football, tennis, basketball, hockey, and even virtual sports matches. The stream quality is stable, with no delays or lags."}',
             'value_es' => '{"0":"Linebet ofrece la posibilidad de ver transmisiones en vivo directamente en el sitio web o en la aplicación móvil. Las transmisiones están disponibles para partidos de fútbol, tenis, baloncesto, hockey e incluso deportes virtuales. La calidad del video es estable, sin retrasos ni interrupciones."}',
             'value_fr' => '{"0":"Linebet permet de regarder des retransmissions en direct directement sur le site web ou via l\'application mobile. Le streaming est disponible pour les matchs de football, tennis, basketball, hockey et même les sports virtuels. La qualité de diffusion est stable, sans latence ni coupures."}',
             'value_pt' => '{"0":"A Linebet oferece a opção de assistir transmissões ao vivo diretamente no site ou no aplicativo móvel. As transmissões estão disponíveis para partidas de futebol, tênis, basquete, hóquei e até esportes virtuais. A qualidade do vídeo é estável, sem atrasos ou travamentos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Unlike many other bookmakers, you don’t need to place a bet to access the stream — simply having a registered account is enough."}',
             'value_es' => '{"0":"A diferencia de muchas otras casas de apuestas, no es necesario realizar una apuesta para acceder a la transmisión; basta con estar registrado en la plataforma."}',
             'value_fr' => '{"0":"Contrairement à de nombreux autres bookmakers, il n’est pas nécessaire de placer un pari pour accéder au flux vidéo — il suffit d’être inscrit sur le site."}',
             'value_pt' => '{"0":"Diferente de muitas outras casas de apostas, não é necessário fazer uma aposta para assistir à transmissão — basta ter uma conta registrada."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This feature allows you to watch events while placing live bets and adjusting your wagers based on how the game unfolds."}',
             'value_es' => '{"0":"Gracias a esta función, puedes ver los eventos mientras apuestas en vivo y ajustar tus jugadas según el desarrollo del partido."}',
             'value_fr' => '{"0":"Cette fonctionnalité vous permet de suivre un événement en direct tout en pariant, et d’ajuster vos mises en fonction du déroulement du match."}',
             'value_pt' => '{"0":"Com esse recurso, você pode assistir aos eventos ao mesmo tempo em que aposta ao vivo, ajustando suas apostas conforme o andamento da partida."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, Linebet offers a robust section with a wide variety of games. You’ll find thousands of slots from over 100 providers."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, Linebet cuenta con una sección sólida de juegos variados. Hay miles de tragamonedas disponibles de más de 100 proveedores."}',
             'value_fr' => '{"0":"En plus des paris sportifs, Linebet propose une section riche en jeux variés. Vous y trouverez des milliers de machines à sous issues de plus de 100 fournisseurs."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a Linebet oferece uma seção completa com uma grande variedade de jogos. Você encontrará milhares de slots de mais de 100 provedores."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The live casino features tables with real dealers from Evolution Gaming and Ezugi, offering roulette, blackjack, baccarat, and poker. In the virtual sports section, you can place bets on matches that take place every few minutes."}',
             'value_es' => '{"0":"El casino en vivo ofrece mesas con crupieres reales de Evolution Gaming y Ezugi, incluyendo ruleta, blackjack, bacará y póker. En la sección de deportes virtuales, puedes apostar en partidos que se juegan cada pocos minutos."}',
             'value_fr' => '{"0":"Le casino en direct propose des tables avec croupiers en direct d’Evolution Gaming et Ezugi, avec de la roulette, du blackjack, du baccarat et du poker. Dans les sports virtuels, vous pouvez parier sur des matchs qui ont lieu toutes les quelques minutes."}',
             'value_pt' => '{"0":"O cassino ao vivo conta com mesas com dealers reais da Evolution Gaming e Ezugi, oferecendo roleta, blackjack, bacará e pôquer. Na seção de esportes virtuais, é possível apostar em partidas que ocorrem a cada poucos minutos."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"So beyond sports betting, you’ll always have the option to enjoy games with live dealers as well."}',
             'value_es' => '{"0":"Así que, además de apostar en deportes, siempre tendrás la opción de jugar con crupieres en vivo."}',
             'value_fr' => '{"0":"Ainsi, au-delà des paris sportifs, vous avez toujours la possibilité de jouer à des jeux avec des croupiers en direct."}',
             'value_pt' => '{"0":"Portanto, além das apostas esportivas, você sempre terá a opção de jogar com dealers ao vivo também."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet takes player security seriously. All data is encrypted using SSL protocols, which protects both personal information and financial transactions. The bookmaker follows responsible gaming standards, allowing users to set deposit or total stake limits."}',
             'value_es' => '{"0":"Linebet se toma muy en serio la seguridad de los jugadores. Todos los datos están cifrados mediante protocolos SSL, lo que protege la información personal y las transacciones financieras. La casa de apuestas cumple con las normas de juego responsable, por lo que puedes establecer límites de depósito o de apuestas totales."}',
             'value_fr' => '{"0":"Linebet prend la sécurité des joueurs très au sérieux. Toutes les données sont chiffrées via des protocoles SSL, ce qui protège les informations personnelles et les transactions financières. Le bookmaker respecte les règles du jeu responsable, vous permettant de fixer des limites de dépôt ou de mise totale."}',
             'value_pt' => '{"0":"A Linebet leva a segurança dos jogadores muito a sério. Todos os dados são criptografados com protocolos SSL, o que protege as informações pessoais e as transações financeiras. A casa de apostas segue os princípios do jogo responsável, permitindo que você defina limites de depósito ou de apostas totais."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In cases of suspicious activity, the platform may request verification. In such cases, you’ll need to provide documents to confirm your identity. This is a standard procedure that ensures safe gaming and protects user funds."}',
             'value_es' => '{"0":"En casos de actividad sospechosa, la plataforma puede solicitar una verificación. En ese caso, deberás proporcionar documentos para confirmar tu identidad. Es un procedimiento estándar que garantiza un juego seguro y la protección de los fondos del usuario."}',
             'value_fr' => '{"0":"En cas d’activité suspecte, la plateforme peut demander une vérification. Dans ce cas, vous devrez fournir des documents pour confirmer votre identité. Il s’agit d’une procédure standard qui garantit la sécurité du jeu et la protection des fonds des utilisateurs."}',
             'value_pt' => '{"0":"Em casos de atividade suspeita, a plataforma pode solicitar verificação. Nesse caso, será necessário fornecer documentos para confirmar sua identidade. Este é um procedimento padrão que garante um ambiente de jogo seguro e a proteção dos fundos do usuário."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet supports over 50 deposit and withdrawal methods. These include Visa and Mastercard bank cards, e-wallets like Skrill, Neteller, Jeton, cryptocurrencies such as Bitcoin, Ethereum, and Tether, as well as payment systems like Piastrix, Perfect Money, Payeer, and even mobile operator top-ups."}',
             'value_es' => '{"0":"Linebet admite más de 50 métodos para depositar y retirar fondos. Entre ellos se encuentran tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, Jeton, criptomonedas como Bitcoin, Ethereum y Tether, así como sistemas de pago como Piastrix, Perfect Money, Payeer e incluso recargas mediante operador móvil."}',
             'value_fr' => '{"0":"Linebet prend en charge plus de 50 méthodes de dépôt et de retrait. Cela inclut les cartes bancaires Visa et Mastercard, les portefeuilles électroniques comme Skrill, Neteller, Jeton, les cryptomonnaies telles que Bitcoin, Ethereum et Tether, ainsi que des systèmes de paiement comme Piastrix, Perfect Money, Payeer et même les recharges via un opérateur mobile."}',
             'value_pt' => '{"0":"A Linebet oferece suporte a mais de 50 métodos para depósitos e saques. Isso inclui cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, Jeton, criptomoedas como Bitcoin, Ethereum e Tether, além de sistemas de pagamento como Piastrix, Perfect Money, Payeer e até recargas via operadora de celular."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit amount is from 1 euro or the equivalent in another currency. Withdrawals usually take from 15 minutes to 24 hours, depending on the method and amount. The bookmaker does not charge any fees, but warns that the payment system may apply a commission."}',
             'value_es' => '{"0":"El depósito mínimo es a partir de 1 euro o su equivalente en otra moneda. Los retiros suelen tardar entre 15 minutos y 24 horas, dependiendo del método y la cantidad. La casa de apuestas no cobra comisiones, pero advierte que el sistema de pago puede aplicar una tarifa."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 euro ou l’équivalent dans une autre devise. Les retraits prennent généralement entre 15 minutes et 24 heures, selon la méthode et le montant. Le bookmaker ne facture pas de frais, mais signale que des frais peuvent être appliqués par le système de paiement."}',
             'value_pt' => '{"0":"O valor mínimo de depósito é de 1 euro ou o equivalente em outra moeda. As retiradas geralmente são processadas em 15 minutos a 24 horas, dependendo do método e do valor. A casa de apostas não cobra comissões, mas alerta que o sistema de pagamento pode aplicar uma taxa."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"You can view the most popular payment systems at the top of this review, and below are some of them:"}',
             'value_es' => '{"0":"Puedes consultar los sistemas de pago más populares al principio de esta reseña, y a continuación te mostramos algunos de ellos:"}',
             'value_fr' => '{"0":"Vous pouvez consulter les systèmes de paiement les plus populaires en haut de cette revue, et ci-dessous, certains d’entre eux sont présentés :"}',
             'value_pt' => '{"0":"Você pode conferir os sistemas de pagamento mais populares no topo desta análise, e abaixo apresentamos alguns deles:"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet\'s customer support is available 24/7, including weekends and public holidays. You can contact the support team via live chat, email, phone, or through messaging apps."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Linebet está disponible las 24 horas del día, los 7 días de la semana, incluidos fines de semana y días festivos. Puedes contactar con los operadores a través del chat en vivo, correo electrónico, teléfono o mediante aplicaciones de mensajería."}',
             'value_fr' => '{"0":"Le service client de Linebet est disponible 24h/24 et 7j/7, y compris les week-ends et les jours fériés. Vous pouvez contacter les opérateurs via le chat en direct, par e-mail, par téléphone ou via des applications de messagerie."}',
             'value_pt' => '{"0":"O suporte ao cliente da Linebet está disponível 24 horas por dia, 7 dias por semana, incluindo fins de semana e feriados. Você pode entrar em contato com os operadores por chat ao vivo, e-mail, telefone ou por meio de aplicativos de mensagens."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large variety of sports",
                                 "1":"Live betting with video streaming",
                                 "2":"Acceptance of crypto payments",
                                 "3":"Apps for Android/iOS",
                                 "4":"High bonuses for new clients",
                                 "5":"Convenient and user-friendly interface"},
                             "1":
                                {"0":"Verification required before withdrawal",
                                 "1":"Access restrictions in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de deportes",
                                 "1":"Apuestas en vivo con transmisión de video",
                                 "2":"Aceptación de pagos con criptomonedas",
                                 "3":"Aplicaciones para Android/iOS",
                                 "4":"Bonos altos para nuevos clientes",
                                 "5":"Interfaz conveniente y fácil de usar"},
                             "1":
                                {"0":"Verificación obligatoria antes de retirar fondos",
                                 "1":"Restricciones de acceso en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grande variété de sports",
                                 "1":"Paris en direct avec diffusion vidéo",
                                 "2":"Acceptation des paiements en cryptomonnaies",
                                 "3":"Applications pour Android/iOS",
                                 "4":"Bonus élevés pour les nouveaux clients",
                                 "5":"Interface pratique et conviviale"},
                             "1":
                                {"0":"Vérification obligatoire avant retrait",
                                 "1":"Restrictions d’accès dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de esportes",
                                 "1":"Apostas ao vivo com transmissão de vídeo",
                                 "2":"Aceitação de pagamentos em criptomoedas",
                                 "3":"Aplicativos para Android/iOS",
                                 "4":"Altos bônus para novos clientes",
                                 "5":"Interface conveniente e fácil de usar"},
                             "1":
                                {"0":"Verificação obrigatória antes do saque",
                                 "1":"Restrições de acesso em alguns países"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can you play without verification?"}',
             'value_es' => '{"0":"¿Se puede jugar sin verificación?"}',
             'value_fr' => '{"0":"Peut-on jouer sans vérification ?"}',
             'value_pt' => '{"0":"É possível jogar sem verificação?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 40
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, but identity verification is mandatory for withdrawals."}',
             'value_es' => '{"0":"Sí, pero la verificación de identidad es obligatoria para los retiros."}',
             'value_fr' => '{"0":"Oui, mais la vérification d’identité est obligatoire pour les retraits."}',
             'value_pt' => '{"0":"Sim, mas a verificação de identidade é obrigatória para saques."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 41
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 42
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, mobile apps are available for Android and iOS. The website is also optimized for mobile devices."}',
             'value_es' => '{"0":"Sí, hay aplicaciones móviles disponibles para Android e iOS. El sitio también está adaptado para dispositivos móviles."}',
             'value_fr' => '{"0":"Oui, des applications mobiles sont disponibles pour Android et iOS. Le site est également adapté aux appareils mobiles."}',
             'value_pt' => '{"0":"Sim, aplicativos móveis estão disponíveis para Android e iOS. O site também é otimizado para dispositivos móveis."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 43
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How long does withdrawal take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro?"}',
             'value_fr' => '{"0":"Combien de temps prend un retrait ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 44
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"From 15 minutes up to 24 hours, depending on the method and platform load."}',
             'value_es' => '{"0":"De 15 minutos a 24 horas, dependiendo del método y la carga de la plataforma."}',
             'value_fr' => '{"0":"De 15 minutes à 24 heures, selon la méthode et la charge de la plateforme."}',
             'value_pt' => '{"0":"De 15 minutos até 24 horas, dependendo do método e da carga da plataforma."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 45
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can you watch streams for free?"}',
             'value_es' => '{"0":"¿Se pueden ver las transmisiones gratis?"}',
             'value_fr' => '{"0":"Peut-on regarder les retransmissions gratuitement ?"}',
             'value_pt' => '{"0":"É possível assistir às transmissões gratuitamente?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 46
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, streams are available to all registered users without any mandatory bets."}',
             'value_es' => '{"0":"Sí, las transmisiones están disponibles para todos los usuarios registrados sin apuestas obligatorias."}',
             'value_fr' => '{"0":"Oui, les retransmissions sont accessibles à tous les utilisateurs enregistrés sans paris obligatoires."}',
             'value_pt' => '{"0":"Sim, as transmissões estão disponíveis para todos os usuários registrados sem apostas obrigatórias."}',
             'order' => 46
            ]
        );
    }
}
