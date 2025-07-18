<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"1XBET Review"}',
             'value_es' => '{"0":"Reseña de 1XBET"}',
             'value_fr' => '{"0":"Avis sur 1XBET"}',
             'value_pt' => '{"0":"Análise da 1XBET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is one of the most well-known international betting brands, offering sports betting and online casino services. The platform operates under a Curacao license and offers various bonuses for newcomers."}',
             'value_es' => '{"0":"1XBET es una de las marcas de apuestas más reconocidas a nivel internacional, que ofrece servicios de apuestas deportivas y casino en línea. La plataforma opera con una licencia de Curazao y ofrece varios bonos para los nuevos usuarios."}',
             'value_fr' => '{"0":"1XBET est l\'une des marques de paris les plus connues au niveau international, proposant des services de paris sportifs et de casino en ligne. La plateforme fonctionne sous licence de Curaçao et propose divers bonus pour les nouveaux utilisateurs."}',
             'value_pt' => '{"0":"1XBET é uma das marcas de apostas mais conhecidas internacionalmente, oferecendo serviços de apostas esportivas e cassino online. A plataforma opera sob licença de Curaçau e oferece vários bônus para novos usuários."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET started its operations in 2007, and just five years later, the company entered the online space and began actively expanding into the markets of Europe, Asia, Africa, Latin America, and other regions. Over time, 1XBET has become a true giant in the gambling industry. Every day, more than 4 million users visit the company\'s website or app. The platform supports over 50 languages, and its operations are licensed by the international regulator of Curacao — one of the most reputable in the gambling world. This confirms that players are dealing with a leading company in the industry."}',
             'value_es' => '{"0":"1XBET comenzó sus operaciones en 2007, y solo cinco años después, la empresa ingresó al espacio en línea y comenzó a expandirse activamente en los mercados de Europa, Asia, África, América Latina y otras regiones. Con el tiempo, 1XBET se ha convertido en un verdadero gigante de la industria del juego. Cada día, más de 4 millones de usuarios visitan el sitio web o la aplicación de la compañía. La plataforma está disponible en más de 50 idiomas, y su funcionamiento está licenciado por el regulador internacional de Curazao, uno de los más prestigiosos del mundo del juego. Esto confirma que los jugadores están tratando con una empresa líder en el sector."}',
             'value_fr' => '{"0":"1XBET a commencé ses activités en 2007, et seulement cinq ans plus tard, la société est entrée dans le domaine en ligne et a commencé à s\'étendre activement sur les marchés de l\'Europe, de l\'Asie, de l\'Afrique, de l\'Amérique latine et d\'autres régions. Au fil du temps, 1XBET est devenue un véritable géant de l\'industrie du jeu. Chaque jour, plus de 4 millions d\'utilisateurs visitent le site ou l\'application de la société. La plateforme est disponible en plus de 50 langues, et ses activités sont licenciées par le régulateur international de Curaçao — l’un des plus réputés dans le domaine du jeu. Cela confirme que les joueurs ont affaire à une entreprise leader du secteur."}',
             'value_pt' => '{"0":"A 1XBET iniciou suas operações em 2007 e, apenas cinco anos depois, entrou no espaço online e começou a expandir-se ativamente nos mercados da Europa, Ásia, África, América Latina e outras regiões. Com o tempo, a 1XBET tornou-se um verdadeiro gigante da indústria de jogos de azar. Diariamente, mais de 4 milhões de usuários acessam o site ou o aplicativo da empresa. A plataforma está disponível em mais de 50 idiomas e é licenciada pelo regulador internacional de Curaçau — um dos mais respeitados no mundo das apostas. Isso confirma que os jogadores estão lidando com uma empresa líder no setor."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Most clients have been using the platform for a long time. This is only possible with the full trust of players in the brand. The 1XBET team earned this trust through tireless work and dedication, improving the platform every day."}',
             'value_es' => '{"0":"La mayoría de los clientes han estado usando la plataforma durante mucho tiempo. Esto solo es posible con la plena confianza de los jugadores en la marca. El equipo de 1XBET ha ganado esta confianza gracias a un trabajo incansable y dedicación, mejorando la plataforma cada día."}',
             'value_fr' => '{"0":"La plupart des clients utilisent la plateforme depuis longtemps. Cela n\'est possible que grâce à la pleine confiance des joueurs envers la marque. L\'équipe de 1XBET a gagné cette confiance grâce à un travail acharné et à son dévouement, améliorant la plateforme chaque jour."}',
             'value_pt' => '{"0":"A maioria dos clientes usa a plataforma há muito tempo. Isso só é possível com a total confiança dos jogadores na marca. A equipe da 1XBET conquistou essa confiança através de trabalho incansável e dedicação, melhorando a plataforma todos os dias."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Today, 1XBET is an international betting company and a leader in the gambling industry. The company is proud of numerous awards from prestigious international gambling ceremonies, the trust of partners, and recognition among professionals. These include «Most Innovative Affiliate Program», «Best Sports Betting Platform», «Best Live Casino», and «Innovator of the Year»."}',
             'value_es' => '{"0":"Hoy, 1XBET es una empresa internacional de apuestas y un líder en la industria del juego. La compañía se enorgullece de numerosos premios en prestigiosas ceremonias internacionales de juego, la confianza de sus socios y el reconocimiento entre profesionales. Entre ellos están «Programa de afiliados más innovador», «Mejor plataforma de apuestas deportivas», «Mejor casino en vivo» e «Innovador del año»."}',
             'value_fr' => '{"0":"Aujourd\'hui, 1XBET est une société internationale de paris et un leader dans l\'industrie des jeux d\'argent. L\'entreprise est fière de nombreuses récompenses lors de prestigieuses cérémonies internationales de jeux, de la confiance de ses partenaires et de la reconnaissance parmi les professionnels. Parmi celles-ci figurent «Programme d\'affiliation le plus innovant», «Meilleure plateforme de paris sportifs», «Meilleur casino en direct» et «Innovateur de l\'année»."}',
             'value_pt' => '{"0":"Hoje, a 1XBET é uma empresa internacional de apostas e líder na indústria de jogos de azar. A empresa se orgulha de inúmeras premiações em prestigiosas cerimônias internacionais de jogos, da confiança dos parceiros e do reconhecimento entre os profissionais. Entre elas estão «Programa de afiliados mais inovador», «Melhor plataforma de apostas esportivas», «Melhor cassino ao vivo» e «Inovador do ano»."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET team truly loves sports and has made significant efforts to become an official partner of such well-known global clubs and organizations as FC Barcelona, PSG, La Liga, Serie A, and many others. Currently, 1XBET actively cooperates with ESL, OG Esports, Team Spirit, Tundra Esports, MIBR, and WePlay, offering esports fans a wide range of betting options on all popular disciplines."}',
             'value_es' => '{"0":"El equipo de 1XBET realmente ama el deporte y ha hecho esfuerzos significativos para convertirse en socio oficial de clubes y organizaciones globales tan reconocidos como el FC Barcelona, PSG, La Liga, Serie A y muchos más. Actualmente, 1XBET coopera activamente con ESL, OG Esports, Team Spirit, Tundra Esports, MIBR y WePlay, ofreciendo a los fanáticos de los esports una amplia variedad de opciones de apuestas en todas las disciplinas populares."}',
             'value_fr' => '{"0":"L\'équipe de 1XBET est véritablement passionnée de sport et a fait des efforts importants pour devenir partenaire officiel de clubs et organisations mondiaux renommés tels que le FC Barcelone, le PSG, La Liga, la Serie A, et bien d\'autres. Actuellement, 1XBET collabore activement avec ESL, OG Esports, Team Spirit, Tundra Esports, MIBR et WePlay, offrant aux fans d\'esports un large choix d\'options de paris sur toutes les disciplines populaires."}',
             'value_pt' => '{"0":"A equipe da 1XBET realmente ama o esporte e fez esforços significativos para se tornar parceiro oficial de clubes e organizações globais tão renomados como o FC Barcelona, PSG, La Liga, Serie A e muitos outros. Atualmente, a 1XBET coopera ativamente com ESL, OG Esports, Team Spirit, Tundra Esports, MIBR e WePlay, oferecendo aos fãs de esports uma ampla variedade de opções de apostas em todas as disciplinas populares."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Sports Betting"}',
             'value_es' => '{"0":"Apuestas Deportivas"}',
             'value_fr' => '{"0":"Paris Sportifs"}',
             'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"When choosing a bookmaker, it is important to carefully consider all available options to make an informed decision. Do you want to know why players choose 1XBET?"}',
             'value_es' => '{"0":"Al elegir un bookmaker, es importante analizar cuidadosamente todas las opciones disponibles para tomar una decisión informada. ¿Quieres saber por qué los jugadores eligen 1XBET?"}',
             'value_fr' => '{"0":"Lors du choix d\'un bookmaker, il est important d\'examiner attentivement toutes les options disponibles afin de prendre une décision éclairée. Voulez-vous savoir pourquoi les joueurs choisissent 1XBET ?"}',
             'value_pt' => '{"0":"Ao escolher um bookmaker, é importante considerar cuidadosamente todas as opções disponíveis para tomar uma decisão informada. Quer saber por que os jogadores escolhem a 1XBET?"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"High Ratios"}',
             'value_es' => '{"0":"Altas cuotas"}',
             'value_fr' => '{"0":"Cotes élevées"}',
             'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers increased odds on numerous events, allowing players to count on significant winnings. And these are not empty words — the bookmaker ensures that its offers are as profitable as possible."}',
             'value_es' => '{"0":"1XBET ofrece cuotas elevadas en numerosos eventos, lo que permite a los jugadores contar con ganancias significativas. Y no son solo palabras vacías — la casa de apuestas se asegura de que sus ofertas sean lo más rentables posible."}',
             'value_fr' => '{"0":"1XBET propose des cotes augmentées sur de nombreux événements, permettant aux joueurs de compter sur des gains importants. Et ce ne sont pas de vains mots — le bookmaker veille à ce que ses offres soient aussi avantageuses que possible."}',
             'value_pt' => '{"0":"A 1XBET oferece odds aumentadas em inúmeros eventos, permitindo que os jogadores contem com ganhos significativos. E isso não são apenas palavras vazias — a casa de apostas garante que suas ofertas sejam o mais lucrativas possível."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Wide Lines"}',
             'value_es' => '{"0":"Amplias líneas"}',
             'value_fr' => '{"0":"Lignes étendues"}',
             'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The range of bets on 1XBET is huge. Up to 30,000 events are available weekly across more than 150 different sports. 1XBET accepts bets on football, esports, basketball, tennis, hockey, cricket, chess, and even lacrosse. Additionally, users can place bets on events from politics, show business, science, and the economy. Who will become the next president of a certain country? Which films will win an Oscar? Who will be awarded the Nobel Prize? If you know the answers and want to place bets, below we have provided a more detailed list of sports games."}',
             'value_es' => '{"0":"La variedad de apuestas en 1XBET es enorme. Hasta 30,000 eventos están disponibles semanalmente en más de 150 deportes diferentes. 1XBET acepta apuestas en fútbol, esports, baloncesto, tenis, hockey, críquet, ajedrez e incluso lacrosse. Además, los usuarios pueden apostar en eventos de política, espectáculo, ciencia y economía. ¿Quién será el próximo presidente de cierto país? ¿Qué películas ganarán un Oscar? ¿Quién recibirá el Premio Nobel? Si conoces las respuestas y quieres apostar, a continuación hemos proporcionado una lista más detallada de deportes."}',
             'value_fr' => '{"0":"L\'offre de paris sur 1XBET est immense. Jusqu\'à 30 000 événements sont disponibles chaque semaine dans plus de 150 sports différents. 1XBET accepte les paris sur le football, l\'esport, le basket-ball, le tennis, le hockey, le cricket, les échecs et même le lacrosse. De plus, les utilisateurs peuvent parier sur des événements politiques, du show-business, des sciences et de l\'économie. Qui sera le prochain président d’un pays donné ? Quels films remporteront un Oscar ? Qui recevra le prix Nobel ? Si vous connaissez les réponses et souhaitez parier, ci-dessous nous avons fourni une liste plus détaillée des sports."}',
             'value_pt' => '{"0":"A variedade de apostas na 1XBET é enorme. Até 30.000 eventos estão disponíveis semanalmente em mais de 150 esportes diferentes. A 1XBET aceita apostas em futebol, esports, basquete, tênis, hóquei, críquete, xadrez e até lacrosse. Além disso, os usuários podem apostar em eventos de política, show business, ciência e economia. Quem será o próximo presidente de determinado país? Quais filmes ganharão um Oscar? Quem será premiado com o Nobel? Se você sabe as respostas e quer apostar, abaixo fornecemos uma lista mais detalhada de esportes."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Live Betting"}',
             'value_es' => '{"0":"Apuestas en Vivo"}',
             'value_fr' => '{"0":"Paris en Direct"}',
             'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In many sports, live betting is available and can be done during the game. This allows for more informed decisions and the chance to win big if the odds suddenly rise during the match. For example, Arsenal, playing at home against Bournemouth, was losing 0–1 with 28 minutes left in regular time. However, the fans\' support gave the team a boost, and eventually, Arsenal secured a 2–1 victory, scoring the winning goal in the final seconds. Just imagine the winnings of a player who placed $20 on the Gunners to win when the odds reached 40 — around the 88th minute of the match."}',
             'value_es' => '{"0":"En muchos deportes están disponibles las apuestas en vivo, que se pueden realizar durante el partido. Esto permite tomar decisiones más informadas y tener la posibilidad de ganar mucho si las cuotas suben repentinamente durante el juego. Por ejemplo, el Arsenal, jugando en casa contra el Bournemouth, iba perdiendo 0–1 cuando quedaban 28 minutos de tiempo reglamentario. Sin embargo, el apoyo de los aficionados impulsó al equipo, y finalmente el Arsenal logró una victoria por 2–1, marcando el gol decisivo en los últimos segundos. Imagina la ganancia de un jugador que apostó $20 a la victoria de los Gunners cuando la cuota llegó a 40, alrededor del minuto 88 del partido."}',
             'value_fr' => '{"0":"Dans de nombreux sports, les paris en direct sont disponibles et peuvent être effectués pendant le match. Cela permet de prendre des décisions plus éclairées et de réaliser de gros gains si les cotes augmentent brusquement pendant le jeu. Par exemple, Arsenal, jouant à domicile contre Bournemouth, perdait 0–1 alors qu’il restait 28 minutes de temps réglementaire. Cependant, le soutien des supporters a donné un élan à l’équipe, et Arsenal a finalement remporté une victoire 2–1 en marquant le but décisif dans les dernières secondes. Imaginez les gains d’un joueur ayant misé 20 $ sur la victoire des Gunners lorsque la cote a atteint 40 — vers la 88e minute du match."}',
             'value_pt' => '{"0":"Em muitos esportes, as apostas ao vivo estão disponíveis e podem ser feitas durante o jogo. Isso permite tomar decisões mais conscientes e ter a chance de ganhar muito se as odds aumentarem repentinamente durante a partida. Por exemplo, o Arsenal, jogando em casa contra o Bournemouth, estava perdendo por 0–1 com 28 minutos restantes no tempo regulamentar. No entanto, o apoio da torcida deu novo ânimo à equipe, e o Arsenal acabou vencendo por 2–1, marcando o gol da vitória nos segundos finais. Imagine o prêmio de um jogador que apostou $20 na vitória dos Gunners quando a odd chegou a 40 — por volta do minuto 88 do jogo."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Live Streaming"}',
             'value_es' => '{"0":"Transmisión en Vivo"}',
             'value_fr' => '{"0":"Diffusion en Direct"}',
             'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Most players value the ability to watch matches in real time — that’s why 1XBET has created a separate section for live broadcasts. Platform users can follow the most important events live and adjust their bets based on how the game develops."}',
             'value_es' => '{"0":"La mayoría de los jugadores valoran la posibilidad de ver los partidos en tiempo real, por eso 1XBET ha creado una sección especial para transmisiones en vivo. Los usuarios de la plataforma pueden seguir los eventos más importantes en directo y ajustar sus apuestas según se desarrolle el juego."}',
             'value_fr' => '{"0":"La plupart des joueurs apprécient la possibilité de regarder les matchs en temps réel — c’est pourquoi 1XBET a créé une section dédiée aux diffusions en direct. Les utilisateurs de la plateforme peuvent suivre les événements les plus importants en direct et ajuster leurs paris en fonction du déroulement du match."}',
             'value_pt' => '{"0":"A maioria dos jogadores valoriza a possibilidade de assistir às partidas em tempo real — por isso, a 1XBET criou uma seção exclusiva para transmissões ao vivo. Os usuários da plataforma podem acompanhar os eventos mais importantes ao vivo e ajustar suas apostas conforme o desenrolar do jogo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Games"}',
             'value_es' => '{"0":"Juegos"}',
             'value_fr' => '{"0":"Jeux"}',
             'value_pt' => '{"0":"Jogos"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is not only about sports betting but also offers a wide range of online games available on both computers and mobile devices. The platform features numerous slots, card games, and various simulators that provide vivid emotions and excitement. Additionally, there is a Live Casino — the perfect place to relax and experience the atmosphere of elite gambling establishments."}',
             'value_es' => '{"0":"1XBET no solo ofrece apuestas deportivas, sino también una amplia variedad de juegos en línea disponibles tanto en computadoras como en dispositivos móviles. La plataforma cuenta con numerosos tragamonedas, juegos de cartas y diversos simuladores que brindan emociones intensas y emoción. Además, hay un Casino en Vivo, el lugar perfecto para relajarse y experimentar la atmósfera de los establecimientos de juego de élite."}',
             'value_fr' => '{"0":"1XBET ne propose pas seulement des paris sportifs, mais également une large gamme de jeux en ligne accessibles sur ordinateurs et appareils mobiles. La plateforme offre de nombreux machines à sous, jeux de cartes et divers simulateurs qui procurent des émotions vives et du plaisir. De plus, il y a un Casino en Direct — l’endroit idéal pour se détendre et ressentir l’atmosphère des établissements de jeu élitistes."}',
             'value_pt' => '{"0":"A 1XBET não é apenas apostas esportivas, mas também oferece uma ampla variedade de jogos online disponíveis tanto em computadores quanto em dispositivos móveis. A plataforma conta com inúmeros caça-níqueis, jogos de cartas e vários simuladores que proporcionam emoções intensas e diversão. Além disso, há um Cassino Ao Vivo — o lugar perfeito para relaxar e experimentar a atmosfera de estabelecimentos de jogo de elite."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Innovative Solutions"}',
             'value_es' => '{"0":"Soluciones Innovadoras"}',
             'value_fr' => '{"0":"Solutions Innovantes"}',
             'value_pt' => '{"0":"Soluções Inovadoras"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET knows well that the comfort of the game is made up of many pleasant little things and strives to take each of them into account. The platform offers a lightweight version of the site, mobile apps for Android and iOS, as well as a large amount of statistical data for all key games that sports betting fans need."}',
             'value_es' => '{"0":"1XBET sabe bien que la comodidad del juego se compone de muchas pequeñas cosas agradables y se esfuerza por tenerlas todas en cuenta. La plataforma ofrece una versión ligera del sitio, aplicaciones móviles para Android e iOS, así como una gran cantidad de datos estadísticos para todos los juegos clave que los aficionados a las apuestas deportivas necesitan."}',
             'value_fr' => '{"0":"1XBET sait bien que le confort de jeu est constitué de nombreux petits plaisirs et s’efforce de prendre chacun d’eux en compte. La plateforme propose une version allégée du site, des applications mobiles pour Android et iOS, ainsi qu’une grande quantité de données statistiques pour tous les jeux clés dont les amateurs de paris sportifs ont besoin."}',
             'value_pt' => '{"0":"A 1XBET sabe bem que o conforto do jogo é composto por muitas pequenas coisas agradáveis e esforça-se para levar cada uma delas em consideração. A plataforma oferece uma versão leve do site, aplicativos móveis para Android e iOS, além de uma grande quantidade de dados estatísticos para todos os jogos principais que os fãs de apostas esportivas precisam."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Security"}',
             'value_es' => '{"0":"Seguridad"}',
             'value_fr' => '{"0":"Sécurité"}',
             'value_pt' => '{"0":"Segurança"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Protecting players’ personal data is the top priority for 1XBET. The cybersecurity team constantly works to ensure that no malicious actors can access clients’ confidential information. Modern encryption protocols, two-factor authentication, and other effective methods are used to prevent unauthorized access. Players can rest assured: 1XBET has been successfully operating online for over 10 years, and during this time the site has never been hacked."}',
             'value_es' => '{"0":"La protección de los datos personales de los jugadores es la máxima prioridad para 1XBET. El equipo de ciberseguridad trabaja constantemente para garantizar que ningún actor malicioso pueda acceder a la información confidencial de los clientes. Se utilizan protocolos modernos de cifrado, autenticación de dos factores y otros métodos efectivos para prevenir el acceso no autorizado. Los jugadores pueden estar tranquilos: 1XBET ha estado operando exitosamente en línea durante más de 10 años y, durante ese tiempo, el sitio nunca ha sido hackeado."}',
             'value_fr' => '{"0":"La protection des données personnelles des joueurs est la priorité absolue pour 1XBET. L’équipe de cybersécurité travaille constamment pour s’assurer qu’aucun acteur malveillant ne puisse accéder aux informations confidentielles des clients. Des protocoles de cryptage modernes, une authentification à deux facteurs et d’autres méthodes efficaces sont utilisés pour empêcher tout accès non autorisé. Les joueurs peuvent être rassurés : 1XBET opère avec succès en ligne depuis plus de 10 ans, et durant ce temps, le site n’a jamais été piraté."}',
             'value_pt' => '{"0":"A proteção dos dados pessoais dos jogadores é a principal prioridade da 1XBET. A equipe de cibersegurança trabalha constantemente para garantir que nenhum agente malicioso tenha acesso às informações confidenciais dos clientes. São utilizados protocolos modernos de criptografia, autenticação de dois fatores e outros métodos eficazes para prevenir acessos não autorizados. Os jogadores podem ficar tranquilos: a 1XBET opera online com sucesso há mais de 10 anos e, durante esse período, o site nunca foi hackeado."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Deposit and Withdrawal"}',
             'value_es' => '{"0":"Depósito y Retiro"}',
             'value_fr' => '{"0":"Dépôt et Retrait"}',
             'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"How to deposit into a game account? How to withdraw your winnings? These are questions every gambler is interested in. With 1XBET, it is extremely simple. You can deposit from anywhere in the world by choosing from a variety of international payment systems. Cryptocurrencies are also supported — 1XBET allows betting with over 10 different cryptocurrencies such as Bitcoin, Ethereum, and Litecoin. As for withdrawals, players usually receive their winnings using the same method they used to deposit."}',
             'value_es' => '{"0":"¿Cómo depositar en una cuenta de juego? ¿Cómo retirar tus ganancias? Estas son preguntas que interesan a todos los jugadores. Con 1XBET, es extremadamente sencillo. Puedes depositar desde cualquier lugar del mundo eligiendo entre una variedad de sistemas de pago internacionales. También se admiten criptomonedas: 1XBET permite apostar con más de 10 criptomonedas diferentes, como Bitcoin, Ethereum y Litecoin. En cuanto a los retiros, los jugadores suelen recibir sus ganancias utilizando el mismo método con el que hicieron el depósito."}',
             'value_fr' => '{"0":"Comment déposer sur un compte de jeu ? Comment retirer vos gains ? Ce sont des questions qui intéressent tous les joueurs. Avec 1XBET, c’est extrêmement simple. Vous pouvez déposer depuis n’importe où dans le monde en choisissant parmi une variété de systèmes de paiement internationaux. Les cryptomonnaies sont également prises en charge — 1XBET permet de parier avec plus de 10 cryptomonnaies différentes telles que Bitcoin, Ethereum et Litecoin. En ce qui concerne les retraits, les joueurs reçoivent généralement leurs gains via la même méthode utilisée pour le dépôt."}',
             'value_pt' => '{"0":"Como depositar em uma conta de jogo? Como sacar seus ganhos? Estas são perguntas que interessam a todos os jogadores. Com 1XBET, é extremamente simples. Você pode depositar de qualquer lugar do mundo escolhendo entre uma variedade de sistemas de pagamento internacionais. Criptomoedas também são suportadas — a 1XBET permite apostar com mais de 10 criptomoedas diferentes, como Bitcoin, Ethereum e Litecoin. Quanto aos saques, os jogadores geralmente recebem seus ganhos usando o mesmo método que usaram para depositar."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Below we have listed only the main payment systems, and you can find a more detailed list at the top of our review."}',
             'value_es' => '{"0":"A continuación, hemos listado solo los principales sistemas de pago, y puedes encontrar una lista más detallada en la parte superior de nuestra reseña."}',
             'value_fr' => '{"0":"Nous avons listé ci-dessous uniquement les principaux systèmes de paiement, et vous pouvez consulter une liste plus détaillée en haut de notre revue."}',
             'value_pt' => '{"0":"Abaixo listamos apenas os principais sistemas de pagamento, e você pode encontrar uma lista mais detalhada no topo da nossa análise."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Customer Support"}',
             'value_es' => '{"0":"Atención al Cliente"}',
             'value_fr' => '{"0":"Service Client"}',
             'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET customer support is always ready to help 24/7. If you have any questions, you can contact them by phone below or use the online chat, which supports over 50 languages. You can also request a callback or send an email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1XBET siempre está disponible para ayudar las 24 horas del día, los 7 días de la semana. Si tienes alguna pregunta, puedes contactarlos por teléfono a continuación o usar el chat en línea, que admite más de 50 idiomas. También puedes solicitar una llamada de devolución o enviar un correo electrónico."}',
             'value_fr' => '{"0":"Le service client de 1XBET est toujours prêt à aider 24h/24 et 7j/7. Si vous avez des questions, vous pouvez les contacter par téléphone ci-dessous ou utiliser le chat en ligne, qui prend en charge plus de 50 langues. Vous pouvez également demander un rappel ou envoyer un e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente da 1XBET está sempre pronto para ajudar 24 horas por dia, 7 dias por semana. Se você tiver alguma dúvida, pode entrar em contato por telefone abaixo ou usar o chat online, que suporta mais de 50 idiomas. Você também pode solicitar uma ligação de retorno ou enviar um e-mail."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'support',
                'value_en' => '{"0":"Live chat: click the green «live chat» bar at the bottom right of the screen."}',
                'value_es' => '{"0":"Chat en vivo: haz clic en la barra verde de «chat en vivo» en la esquina inferior derecha de la pantalla."}',
                'value_fr' => '{"0":"Chat en direct : cliquez sur la barre verte «chat en direct» en bas à droite de l\'écran."}',
                'value_pt' => '{"0":"Chat ao vivo: clique na barra verde de «chat ao vivo» no canto inferior direito da tela."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 33
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"24/7 customer support",
                                 "1":"Betting exchange",
                                 "2":"Massive range of e-sports",
                                 "3":"Live streaming of big matches",
                                 "4":"Great market depth"},
                             "1":
                                {"0":"Pages are very cluttered",
                                 "1":"Not open to UK customers"}
                             }',
                'value_es' => '{"0":
                                {"0":"Soporte al cliente 24/7",
                                 "1":"Bolsa de apuestas",
                                 "2":"Amplia gama de eSports",
                                 "3":"Transmisión en vivo de grandes partidos",
                                 "4":"Gran profundidad de mercados"},
                             "1":
                                {"0":"Las páginas están muy saturadas",
                                 "1":"No disponible para clientes del Reino Unido"}
                             }',
                'value_fr' => '{"0":
                                {"0":"Assistance clientèle 24h/24 et 7j/7",
                                 "1":"Bourse de paris",
                                 "2":"Large gamme d’e-sports",
                                 "3":"Diffusion en direct des grands matchs",
                                 "4":"Grande profondeur de marché"},
                             "1":
                                {"0":"Les pages sont très encombrées",
                                 "1":"Non accessible aux clients britanniques"}
                             }',
                'value_pt' => '{"0":
                                {"0":"Suporte ao cliente 24/7",
                                 "1":"Bolsa de apostas",
                                 "2":"Grande variedade de e-sports",
                                 "3":"Transmissão ao vivo dos grandes jogos",
                                 "4":"Grande profundidade de mercado"},
                             "1":
                                {"0":"As páginas são muito desorganizadas",
                                 "1":"Não está disponível para clientes do Reino Unido"}
                             }',
                'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 35
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Is 1XBET trustworthy?"}',
                'value_es' => '{"0":"¿Es 1XBET de confianza?"}',
                'value_fr' => '{"0":"1XBET est-il fiable ?"}',
                'value_pt' => '{"0":"A 1XBET é confiável?"}',
                'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 36
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Yes. It is fully licenced and regulated under the laws of Curacao, meaning that everything has to be kept above board or that licence would be revoked. 1XBET also uses a very secure SSL encrypted connection to ensure that all player information is safely stored away."}',
                'value_es' => '{"0":"Sí. Está completamente licenciada y regulada bajo las leyes de Curazao, lo que significa que todo debe mantenerse en regla o la licencia sería revocada. 1XBET también utiliza una conexión cifrada SSL muy segura para garantizar que toda la información de los jugadores esté almacenada de forma segura."}',
                'value_fr' => '{"0":"Oui. Elle est entièrement licenciée et réglementée selon les lois de Curaçao, ce qui signifie que tout doit être conforme, sinon la licence serait révoquée. 1XBET utilise également une connexion sécurisée chiffrée SSL pour garantir que toutes les informations des joueurs soient stockées en toute sécurité."}',
                'value_pt' => '{"0":"Sim. A empresa é totalmente licenciada e regulamentada pelas leis de Curaçao, o que significa que tudo deve estar em conformidade, ou a licença será revogada. A 1XBET também utiliza uma conexão criptografada SSL muito segura para garantir que todas as informações dos jogadores sejam armazenadas com segurança."}',
                'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 37
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"How do I claim my 1XBET free bets?"}',
                'value_es' => '{"0":"¿Cómo reclamo mis apuestas gratis en 1XBET?"}',
                'value_fr' => '{"0":"Comment puis-je réclamer mes paris gratuits sur 1XBET ?"}',
                'value_pt' => '{"0":"Como posso reivindicar minhas apostas grátis na 1XBET?"}',
                'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 38
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"If you’re a new customer to 1XBET, then you should be able to claim the 100% deposit match welcome offer. Click this link for full details about the bonus and how to claim it."}',
                'value_es' => '{"0":"Si eres un nuevo cliente de 1XBET, deberías poder reclamar la oferta de bienvenida con un bono del 100% sobre tu primer depósito. Haz clic en este enlace para obtener todos los detalles sobre el bono y cómo reclamarlo."}',
                'value_fr' => '{"0":"Si vous êtes un nouveau client chez 1XBET, vous devriez pouvoir bénéficier de l\'offre de bienvenue avec un bonus de 100 % sur votre premier dépôt. Cliquez sur ce lien pour obtenir tous les détails concernant le bonus et comment le réclamer."}',
                'value_pt' => '{"0":"Se você é um novo cliente da 1XBET, deve conseguir reivindicar a oferta de boas-vindas com 100% de bônus sobre o primeiro depósito. Clique neste link para ver todos os detalhes sobre o bônus e como resgatá-lo."}',
                'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 39
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Can I also play 1XBET Casino games?"}',
                'value_es' => '{"0":"¿También puedo jugar a los juegos de casino de 1XBET?"}',
                'value_fr' => '{"0":"Puis-je aussi jouer aux jeux de casino de 1XBET ?"}',
                'value_pt' => '{"0":"Também posso jogar os jogos de cassino da 1XBET?"}',
                'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 40
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Yes, 1XBET has a huge library of slots from over 80 of the biggest developers in the world, including NetEnt, Yggdrasil, Play N Go, and Betsoft. There is also a live casino where you can play blackjack, roulette, and poker against a variety of live dealers."}',
                'value_es' => '{"0":"Sí, 1XBET cuenta con una enorme biblioteca de tragamonedas de más de 80 de los desarrolladores más importantes del mundo, incluidos NetEnt, Yggdrasil, Play N Go y Betsoft. También hay un casino en vivo donde puedes jugar al blackjack, la ruleta y el póker contra una variedad de crupieres en vivo."}',
                'value_fr' => '{"0":"Oui, 1XBET propose une immense collection de machines à sous développées par plus de 80 des plus grands éditeurs du monde, dont NetEnt, Yggdrasil, Play N Go et Betsoft. Il y a également un casino en direct où vous pouvez jouer au blackjack, à la roulette et au poker contre divers croupiers en direct."}',
                'value_pt' => '{"0":"Sim, a 1XBET possui uma enorme biblioteca de slots de mais de 80 dos maiores desenvolvedores do mundo, incluindo NetEnt, Yggdrasil, Play N Go e Betsoft. Há também um cassino ao vivo onde você pode jogar blackjack, roleta e pôquer contra diversos crupiês ao vivo."}',
                'order' => 40
            ]
        );
    }
}
