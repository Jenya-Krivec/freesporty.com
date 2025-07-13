<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
             'value_en' => '{"0":"1win Review"}',
             'value_es' => '{"0":"Reseña de 1win"}',
             'value_fr' => '{"0":"Avis sur 1win"}',
             'value_pt' => '{"0":"Análise da 1win"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is one of the most well-known online betting platforms, actively growing since its launch in 2016. The company operates under an international Curaçao license. On the 1win website, you can place sports bets, play casino games, enjoy live games, or bet on esports. The site features a bright and modern design, an intuitive interface, support for multiple languages, and a user-friendly mobile version. Below, we’ll take a closer look at the main aspects of this bookmaker."}',
             'value_es' => '{"0":"1win es una de las plataformas de apuestas en línea más conocidas, que ha crecido activamente desde su lanzamiento en 2016. La empresa opera bajo una licencia internacional de Curazao. En el sitio web de 1win, puedes hacer apuestas deportivas, jugar en el casino, disfrutar de juegos en vivo o apostar en deportes electrónicos. El sitio tiene un diseño moderno y llamativo, una interfaz intuitiva, soporte para varios idiomas y una versión móvil muy cómoda. A continuación, te contamos en detalle los aspectos principales de esta casa de apuestas."}',
             'value_fr' => '{"0":"1win est l\'une des plateformes de paris en ligne les plus connues, en plein développement depuis sa création en 2016. L\'entreprise fonctionne sous licence internationale de Curaçao. Sur le site de 1win, vous pouvez parier sur le sport, jouer au casino, participer à des jeux en direct ou parier sur l\'esport. Le site propose un design moderne et attrayant, une interface intuitive, le support de plusieurs langues et une version mobile très pratique. Ci-dessous, nous vous présentons en détail les principaux aspects de ce bookmaker."}',
             'value_pt' => '{"0":"A 1win é uma das plataformas de apostas online mais conhecidas, em constante crescimento desde a sua criação em 2016. A empresa opera sob licença internacional de Curaçau. No site da 1win, você pode fazer apostas esportivas, jogar em cassinos, participar de jogos ao vivo ou apostar em eSports. O site conta com um design moderno e vibrante, interface intuitiva, suporte a vários idiomas e uma versão móvel muito prática. A seguir, apresentamos em detalhes os principais aspectos desta casa de apostas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers a wide range of sporting events. Players can bet on more than 40 sports, including traditional disciplines such as football, tennis, hockey, basketball, volleyball, boxing, baseball, as well as less common sports like darts, table tennis, cricket, golf, futsal, and more. In addition, there\'s an esports section where you can place bets on popular games like Dota 2, CS:GO, League of Legends, Valorant, StarCraft II, and others."}',
             'value_es' => '{"0":"1win ofrece una amplia variedad de eventos deportivos. Los jugadores pueden apostar en más de 40 deportes, incluyendo disciplinas tradicionales como fútbol, tenis, hockey, baloncesto, voleibol, boxeo, béisbol, así como deportes menos populares como dardos, tenis de mesa, críquet, golf, fútbol sala y más. Además, hay una sección de deportes electrónicos donde puedes apostar en juegos populares como Dota 2, CS:GO, League of Legends, Valorant, StarCraft II, entre otros."}',
             'value_fr' => '{"0":"1win propose un large choix d\'événements sportifs. Les joueurs peuvent parier sur plus de 40 disciplines, incluant les sports traditionnels comme le football, le tennis, le hockey, le basketball, le volley-ball, la boxe, le baseball, ainsi que des sports moins connus comme les fléchettes, le tennis de table, le cricket, le golf, le futsal, etc. Il existe également une section dédiée à l\'esport, où vous pouvez parier sur des jeux populaires comme Dota 2, CS:GO, League of Legends, Valorant, StarCraft II, et bien d\'autres."}',
             'value_pt' => '{"0":"A 1win oferece uma ampla variedade de eventos esportivos. Os jogadores podem apostar em mais de 40 modalidades, incluindo esportes tradicionais como futebol, tênis, hóquei, basquete, vôlei, boxe, beisebol, bem como esportes menos populares como dardos, tênis de mesa, críquete, golfe, futsal e outros. Além disso, há uma seção de eSports onde você pode apostar em jogos populares como Dota 2, CS:GO, League of Legends, Valorant, StarCraft II e muito mais."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker constantly updates the list of sports events available for betting, including matches, tournaments, and competitions. 1win allows betting both before the match starts and during the game (live), and for major events, analytical data and graphics are available."}',
             'value_es' => '{"0":"La casa de apuestas actualiza constantemente los eventos deportivos disponibles para apostar, incluyendo partidos, torneos y competiciones. 1win permite apostar tanto antes del inicio del partido como en directo, y para los eventos más importantes ofrece datos analíticos y gráficos."}',
             'value_fr' => '{"0":"Le bookmaker met constamment à jour les événements sportifs disponibles, y compris les matchs, les tournois et les compétitions. 1win permet de parier avant le début des matchs ainsi qu’en direct, avec des données analytiques et des graphiques disponibles pour les événements les plus importants."}',
             'value_pt' => '{"0":"A casa de apostas atualiza constantemente os eventos esportivos disponíveis para apostas, incluindo partidas, torneios e competições. A 1win permite apostas pré-jogo e ao vivo, e para os principais eventos há dados analíticos e gráficos disponíveis."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Below, we present the main sports categories available on the site:"}',
             'value_es' => '{"0":"A continuación, te presentamos las principales categorías deportivas disponibles en el sitio:"}',
             'value_fr' => '{"0":"Ci-dessous, vous trouverez les principales disciplines sportives proposées sur le site:"}',
             'value_pt' => '{"0":"A seguir, apresentamos as principais modalidades esportivas disponíveis no site:"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"One of the key factors is the high odds on popular sporting events. In top football championships, odds on the favorite often exceed 1.90, while the underdog can reach 4.00–5.50. For example, in the Champions League, odds on the favorite’s victory usually range from 1.85 to 1.95, a draw — 3.30 to 3.60, and the underdog — as high as 4.50 to 6.00. In live mode, the odds can soar to an impressive 10.00 or even higher."}',
             'value_es' => '{"0":"Uno de los factores clave son las altas cuotas en los eventos deportivos más populares. En los principales campeonatos de fútbol, las cuotas para el favorito suelen superar el 1.90, mientras que para el no favorito pueden alcanzar entre 4.00 y 5.50. Por ejemplo, en la Liga de Campeones, las cuotas para la victoria del favorito suelen estar entre 1.85 y 1.95, el empate entre 3.30 y 3.60, y la victoria del no favorito puede llegar hasta 4.50–6.00. En las apuestas en vivo, las cuotas pueden llegar incluso a 10.00 o más."}',
             'value_fr' => '{"0":"L’un des facteurs clés est la présence de cotes élevées sur les événements sportifs populaires. Dans les plus grands championnats de football, les cotes sur le favori dépassent souvent 1.90, tandis que celles sur l’outsider varient entre 4.00 et 5.50. Par exemple, en Ligue des Champions, les cotes sur la victoire du favori sont souvent entre 1.85 et 1.95, sur le match nul entre 3.30 et 3.60, et sur l’outsider jusqu’à 4.50–6.00. En mode live, les cotes peuvent grimper jusqu’à 10.00 voire plus."}',
             'value_pt' => '{"0":"Um dos principais destaques são as altas odds em eventos esportivos populares. Nos principais campeonatos de futebol, as odds para o favorito frequentemente ultrapassam 1.90, enquanto para o azarão podem chegar a 4.00–5.50. Por exemplo, na Liga dos Campeões, as odds para a vitória do favorito costumam variar entre 1.85 e 1.95, o empate entre 3.30 e 3.60, e a vitória do azarão pode atingir 4.50–6.00. No modo ao vivo, as odds podem chegar a impressionantes 10.00 ou mais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win also frequently runs promotions with boosted odds on key matches, such as European tournament finals."}',
             'value_es' => '{"0":"1win también lanza promociones con cuotas mejoradas para partidos clave, como las finales de torneos europeos."}',
             'value_fr' => '{"0":"1win organise également fréquemment des promotions avec des cotes boostées sur les matchs clés, comme les finales de tournois européens."}',
             'value_pt' => '{"0":"A 1win também costuma oferecer promoções com odds aumentadas para jogos importantes, como finais de torneios europeus."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For players who prefer accumulator bets, 1win offers a win boost. When adding multiple events to a bet slip, the combined odds increase with a multiplier that can boost total winnings by 5–20% depending on the number of selections."}',
             'value_es' => '{"0":"Para los jugadores que prefieren las apuestas combinadas, 1win ofrece un impulso al premio: al añadir varios eventos al cupón, las cuotas se incrementan mediante un multiplicador que puede aumentar el beneficio total entre un 5% y un 20%, según la cantidad de selecciones."}',
             'value_fr' => '{"0":"Pour les joueurs adeptes des paris combinés, 1win propose un boost de gain. En ajoutant plusieurs événements dans le coupon, les cotes sont augmentées avec un multiplicateur qui peut accroître les gains totaux de 5 à 20%, selon le nombre de sélections."}',
             'value_pt' => '{"0":"Para os jogadores que preferem apostas múltiplas, a 1win oferece um bônus de ganho: ao adicionar vários eventos ao bilhete, as odds são aumentadas com um multiplicador que pode elevar os ganhos totais em 5–20%, dependendo do número de seleções."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For major football matches, the number of available betting options exceeds 1,000. In addition to standard markets like totals, you’ll also find combo bets, bets on the number of yellow cards, corners, offsides, or even the exact score."}',
             'value_es' => '{"0":"Para los partidos de fútbol más importantes, la cantidad de opciones de apuesta disponibles supera las 1.000. Además de los mercados estándar como el total, también encontrarás apuestas combinadas, apuestas sobre el número de tarjetas amarillas, saques de esquina, fueras de juego o el resultado exacto."}',
             'value_fr' => '{"0":"Pour les matchs de football majeurs, le nombre d’options de paris disponibles dépasse 1 000. En plus des marchés standards comme les totaux, vous trouverez également des paris combinés, des paris sur le nombre de cartons jaunes, corners, hors-jeu ou encore le score exact."}',
             'value_pt' => '{"0":"Para os principais jogos de futebol, o número de opções de apostas disponíveis ultrapassa 1.000. Além dos mercados padrão como totais, também há apostas combinadas, apostas no número de cartões amarelos, escanteios, impedimentos ou no placar exato."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In NBA games, you can bet on player points or three-pointers."}',
             'value_es' => '{"0":"En los partidos de la NBA, puedes apostar a los puntos de los jugadores o a los triples."}',
             'value_fr' => '{"0":"Sur les matchs de NBA, il est possible de parier sur le nombre de points des joueurs ou les tirs à trois points."}',
             'value_pt' => '{"0":"Nos jogos da NBA, é possível apostar na pontuação dos jogadores ou em arremessos de três pontos."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"So even the most demanding bettor will find interesting events to wager on."}',
             'value_es' => '{"0":"Así que incluso el apostador más exigente podrá encontrar eventos interesantes en los que apostar."}',
             'value_fr' => '{"0":"Même les parieurs les plus exigeants y trouveront des événements intéressants sur lesquels miser."}',
             'value_pt' => '{"0":"Assim, até mesmo o apostador mais exigente encontrará eventos interessantes para apostar."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Іспанська: Apuestas en Vivo"}',
                'value_fr' => '{"0":"Французька: Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The live betting mode at 1win is implemented at a very high level. Over 700 live events are available daily, and on weekends this number exceeds 1,000. The platform updates the odds quickly, allowing players to instantly react to changes in the match."}',
             'value_es' => '{"0":"El modo en vivo de 1win está implementado a un nivel muy alto. Hay más de 700 eventos en vivo disponibles cada día, y durante los fines de semana esa cifra supera los 1.000. La plataforma actualiza las cuotas rápidamente, lo que permite a los jugadores reaccionar de inmediato a los cambios en el partido."}',
             'value_fr' => '{"0":"Le mode en direct chez 1win est réalisé à un niveau très élevé. Plus de 700 événements live sont disponibles chaque jour, et ce chiffre dépasse les 1 000 le week-end. La plateforme met à jour les cotes rapidement, ce qui permet aux joueurs de réagir immédiatement aux changements dans le match."}',
             'value_pt' => '{"0":"O modo ao vivo da 1win é implementado em um nível muito alto. Mais de 700 eventos ao vivo estão disponíveis diariamente, e nos fins de semana esse número ultrapassa 1.000. A plataforma atualiza as odds rapidamente, permitindo que os jogadores reajam instantaneamente às mudanças no jogo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"There is also the Cash Out option — a feature that lets you withdraw part of your bet before the event ends. It\'s useful when you realize it’s the right time to stop and secure your winnings."}',
             'value_es' => '{"0":"También existe la opción de Cash Out — que permite retirar parte de la apuesta antes de que termine el evento. Es útil cuando te das cuenta de que es momento de asegurar tu ganancia."}',
             'value_fr' => '{"0":"Il est également possible d\'utiliser la fonction Cash Out — qui permet de récupérer une partie de la mise avant la fin de l’événement. C’est pratique lorsque vous sentez que c’est le bon moment pour sécuriser vos gains."}',
             'value_pt' => '{"0":"Também está disponível a função Cash Out — que permite recuperar parte da aposta antes do fim do evento. Isso é útil quando você percebe que é hora de garantir seus ganhos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The live section interface is optimized for both desktop and mobile devices, allowing you to play without being tied to a computer."}',
             'value_es' => '{"0":"La interfaz de la sección en vivo está optimizada tanto para ordenadores como para móviles, lo que te permite apostar sin necesidad de estar frente a un PC."}',
             'value_fr' => '{"0":"L’interface de la section live est adaptée aussi bien aux ordinateurs qu’aux smartphones, ce qui permet de jouer sans être attaché à un poste fixe."}',
             'value_pt' => '{"0":"A interface da seção ao vivo é adaptada tanto para computadores quanto para smartphones, permitindo apostar sem estar preso a um dispositivo fixo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win supports video streaming for most sporting events. Users can watch matches directly on the website. Streams are available for football, basketball, tennis, and esports."}',
             'value_es' => '{"0":"1win ofrece transmisiones en vivo para la mayoría de los eventos deportivos. Los usuarios pueden ver los partidos directamente en el sitio web. Hay transmisiones disponibles de fútbol, baloncesto, tenis y deportes electrónicos."}',
             'value_fr' => '{"0":"1win propose des retransmissions en direct pour la plupart des événements sportifs. Les utilisateurs peuvent regarder les matchs directement sur le site. Des streams sont disponibles pour le football, le basketball, le tennis et l’e-sport."}',
             'value_pt' => '{"0":"A 1win oferece transmissões ao vivo para a maioria dos eventos esportivos. Os usuários podem assistir às partidas diretamente no site. Estão disponíveis transmissões de futebol, basquete, tênis e eSports."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If a video stream is unavailable for a particular event, users are provided with a graphic visualization and detailed statistics. This allows you to follow the match even without video. So you\'ll always stay up to date with the action."}',
             'value_es' => '{"0":"Si no hay video disponible para un evento en particular, se ofrece una visualización gráfica de los acontecimientos junto con estadísticas detalladas. Esto te permite seguir el partido incluso sin ver el video. Así, siempre estarás al tanto de lo que ocurre."}',
             'value_fr' => '{"0":"Si aucune vidéo n’est disponible pour un événement donné, une visualisation graphique et des statistiques détaillées sont proposées. Cela permet de suivre le match même sans diffusion vidéo. Vous serez donc toujours au courant de l’action."}',
             'value_pt' => '{"0":"Se o vídeo de um determinado evento não estiver disponível, o usuário recebe uma visualização gráfica com estatísticas detalhadas. Isso permite acompanhar a partida mesmo sem o vídeo. Assim, você sempre ficará por dentro do que está acontecendo."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is not just about sports betting — it’s a full-fledged online casino. You’ll have access to over 10,000 games from leading developers."}',
             'value_es' => '{"0":"1win no es solo apuestas deportivas, sino también un casino en línea completo. Tendrás acceso a más de 10.000 juegos de los principales desarrolladores."}',
             'value_fr' => '{"0":"1win, ce n’est pas seulement des paris sportifs — c’est aussi un véritable casino en ligne. Vous aurez accès à plus de 10 000 jeux des meilleurs éditeurs."}',
             'value_pt' => '{"0":"A 1win não é apenas apostas esportivas — é também um cassino online completo. Você terá acesso a mais de 10.000 jogos de desenvolvedores renomados."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"There are separate sections where you can play slots, table games, and live casino with real dealers. You can choose to play for real money or in demo mode."}',
             'value_es' => '{"0":"Hay secciones especiales donde puedes jugar a las tragamonedas, juegos de mesa y en el casino en vivo con crupieres reales. Puedes elegir jugar con dinero real o en modo demo."}',
             'value_fr' => '{"0":"Il existe des sections dédiées pour jouer aux machines à sous, aux jeux de table ou au casino en direct avec des croupiers réels. Vous pouvez choisir de jouer avec de l’argent réel ou en mode démo."}',
             'value_pt' => '{"0":"Existem seções dedicadas onde você pode jogar em slots, jogos de mesa e cassino ao vivo com crupiês reais. É possível jogar com dinheiro real ou no modo demo."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"There’s also virtual sports, lotteries, prize pool tournaments, and fast games like Aviator, JetX, and Mines."}',
             'value_es' => '{"0":"También hay deportes virtuales, loterías, torneos con premios acumulados y juegos rápidos como Aviator, JetX y Mines."}',
             'value_fr' => '{"0":"Vous trouverez également des sports virtuels, des loteries, des tournois avec cagnottes, ainsi que des jeux rapides comme Aviator, JetX et Mines."}',
             'value_pt' => '{"0":"Também há esportes virtuais, loterias, torneios com prêmios em dinheiro e jogos rápidos como Aviator, JetX e Mines."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"From a technical security standpoint, 1win uses modern protection protocols such as SSL encryption, user verification, payment protection, and data protection during login."}',
             'value_es' => '{"0":"Desde el punto de vista de la seguridad técnica, 1win utiliza protocolos de protección modernos como el cifrado SSL, la verificación de usuarios, la protección de pagos y la seguridad de los datos durante el inicio de sesión."}',
             'value_fr' => '{"0":"D’un point de vue technique, 1win utilise des protocoles de sécurité modernes tels que le chiffrement SSL, la vérification des utilisateurs, la protection des paiements et la sécurisation des données lors de la connexion."}',
             'value_pt' => '{"0":"Do ponto de vista da segurança técnica, a 1win utiliza protocolos modernos de proteção, como criptografia SSL, verificação de usuário, proteção de pagamentos e segurança dos dados no login."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers two-factor authentication via email or phone. We strongly recommend enabling two-factor authentication, as it significantly reduces the risk of account hacking and the loss of personal data or funds."}',
             'value_es' => '{"0":"La plataforma ofrece autenticación en dos pasos a través de correo electrónico o teléfono. Recomendamos encarecidamente activar la autenticación en dos pasos, ya que reduce significativamente el riesgo de que tu cuenta sea hackeada y de perder datos personales o dinero."}',
             'value_fr' => '{"0":"La plateforme propose l’authentification à deux facteurs par e-mail ou téléphone. Nous vous recommandons vivement d’activer cette option, car elle réduit considérablement les risques de piratage de votre compte ainsi que la perte de données personnelles ou d’argent."}',
             'value_pt' => '{"0":"A plataforma oferece autenticação em dois fatores via e-mail ou telefone. Recomendamos fortemente que você ative essa funcionalidade, pois ela reduz significativamente o risco de invasão da sua conta e a perda de dados pessoais ou dinheiro."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win supports popular payment methods such as Visa and MasterCard, e-wallets like Skrill, Neteller, YooMoney, Qiwi, and cryptocurrencies including Bitcoin, Ethereum, Litecoin, and USDT."}',
             'value_es' => '{"0":"1win admite métodos de pago populares como Visa y MasterCard, monederos electrónicos como Skrill, Neteller, YooMoney, Qiwi, y criptomonedas como Bitcoin, Ethereum, Litecoin y USDT."}',
             'value_fr' => '{"0":"1win prend en charge les méthodes de paiement populaires telles que Visa et MasterCard, les portefeuilles électroniques comme Skrill, Neteller, YooMoney, Qiwi, ainsi que les cryptomonnaies telles que Bitcoin, Ethereum, Litecoin et USDT."}',
             'value_pt' => '{"0":"A 1win aceita métodos de pagamento populares como Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, YooMoney, Qiwi e criptomoedas como Bitcoin, Ethereum, Litecoin e USDT."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit and withdrawal amount is just 1 euro. Deposits are processed instantly, and withdrawals usually take up to 24 hours."}',
             'value_es' => '{"0":"El depósito mínimo y el retiro mínimo es de solo 1 euro. Los depósitos se procesan de forma instantánea, y los retiros suelen tardar hasta 24 horas."}',
             'value_fr' => '{"0":"Le dépôt et le retrait minimum sont de seulement 1 euro. Les dépôts sont traités instantanément, tandis que les retraits prennent généralement jusqu’à 24 heures."}',
             'value_pt' => '{"0":"O valor mínimo para depósito e saque é de apenas 1 euro. Os depósitos são processados instantaneamente, e os saques geralmente levam até 24 horas."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"However, delays may occur occasionally, especially when withdrawing large amounts. You may be asked to provide documents, such as a selfie with your ID."}',
             'value_es' => '{"0":"Sin embargo, a veces pueden ocurrir retrasos, especialmente al retirar grandes cantidades. Es posible que te pidan documentos, como una selfie con tu documento de identidad."}',
             'value_fr' => '{"0":"Cependant, des retards peuvent parfois survenir, notamment lors de retraits de montants importants. Il se peut qu’on vous demande des documents, comme un selfie avec votre pièce d’identité."}',
             'value_pt' => '{"0":"No entanto, podem ocorrer atrasos, especialmente ao sacar grandes quantias. Você pode ser solicitado a fornecer documentos, como uma selfie com o seu documento de identidade."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win\'s customer support is available 24/7 via live chat on the website, email, and a Telegram bot."}',
             'value_es' => '{"0":"El soporte de 1win está disponible 24/7 a través del chat en vivo en el sitio web, correo electrónico y un bot de Telegram."}',
             'value_fr' => '{"0":"Le service client de 1win est disponible 24h/24 et 7j/7 via le chat en direct sur le site, par e-mail et via un bot Telegram."}',
             'value_pt' => '{"0":"O suporte da 1win está disponível 24 horas por dia, 7 dias por semana, através do chat ao vivo no site, e-mail e um bot no Telegram."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"A large number of sports events",
                                 "1":"High odds",
                                 "2":"Live betting and streams",
                                 "3":"Many casino games",
                                 "4":"Cryptocurrency support",
                                 "5":"Bonuses up to 500% for newcomers"},
                             "1":
                                {"0":"Possible withdrawal delays"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de eventos deportivos",
                                 "1":"Cuotas altas",
                                 "2":"Apuestas en vivo y transmisiones",
                                 "3":"Muchos juegos de casino",
                                 "4":"Soporte para criptomonedas",
                                 "5":"Bonos de hasta 500% para nuevos jugadores"},
                             "1":
                                {"0":"Posibles retrasos en los pagos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre d’événements sportifs",
                                 "1":"Cotes élevées",
                                 "2":"Paris en direct et retransmissions",
                                 "3":"Beaucoup de jeux de casino",
                                 "4":"Support des cryptomonnaies",
                                 "5":"Bonus jusqu’à 500% pour les nouveaux joueurs"},
                             "1":
                                {"0":"Retards possibles dans les paiements"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande número de eventos esportivos",
                                 "1":"Odds altas",
                                 "2":"Apostas ao vivo e transmissões",
                                 "3":"Muitos jogos de cassino",
                                 "4":"Suporte a criptomoedas",
                                 "5":"Bônus de até 500% para novos jogadores"},
                             "1":
                                {"0":"Possíveis atrasos nos saques"}
                             }',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 41
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 42
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to play on 1win?"}',
             'value_es' => '{"0":"¿Es seguro jugar en 1win?"}',
             'value_fr' => '{"0":"Est-il sûr de jouer sur 1win ?"}',
             'value_pt' => '{"0":"É seguro jogar na 1win?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 43
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The platform uses data protection and holds a Curaçao license."}',
             'value_es' => '{"0":"La plataforma utiliza protección de datos y cuenta con una licencia de Curazao."}',
             'value_fr' => '{"0":"La plateforme utilise la protection des données et possède une licence de Curaçao."}',
             'value_pt' => '{"0":"A plataforma utiliza proteção de dados e possui licença de Curaçao."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 44
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"How long does the withdrawal take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro?"}',
             'value_fr' => '{"0":"Combien de temps dure le retrait ?"}',
             'value_pt' => '{"0":"Quanto tempo leva o saque?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 45
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Usually from 15 minutes to 24 hours, sometimes longer if identity verification is required."}',
             'value_es' => '{"0":"Normalmente de 15 minutos a 24 horas, a veces más si es necesario verificar tu identidad."}',
             'value_fr' => '{"0":"Habituellement de 15 minutes à 24 heures, parfois plus longtemps si une vérification d’identité est nécessaire."}',
             'value_pt' => '{"0":"Geralmente de 15 minutos a 24 horas, às vezes mais, se for necessária a verificação de identidade."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 46
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 47
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win has an app for Android. Unfortunately, the app is not yet available for iOS, but you can use the mobile responsive version of the website."}',
             'value_es' => '{"0":"Sí, 1win tiene una aplicación para Android. Desafortunadamente, la aplicación aún no está disponible para iOS, pero puedes usar la versión móvil adaptativa del sitio web."}',
             'value_fr' => '{"0":"Oui, 1win dispose d’une application pour Android. Malheureusement, l’application n’est pas encore disponible pour iOS, mais vous pouvez utiliser la version mobile adaptative du site."}',
             'value_pt' => '{"0":"Sim, a 1win tem um aplicativo para Android. Infelizmente, o aplicativo ainda não está disponível para iOS, mas você pode usar a versão móvel adaptativa do site."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 48
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can I play without verification?"}',
             'value_es' => '{"0":"¿Se puede jugar sin verificación?"}',
             'value_fr' => '{"0":"Peut-on jouer sans vérification ?"}',
             'value_pt' => '{"0":"É possível jogar sem verificação?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 49
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, but verification is mandatory for withdrawing large amounts."}',
             'value_es' => '{"0":"Sí, pero la verificación es obligatoria para retirar grandes sumas."}',
             'value_fr' => '{"0":"Oui, mais la vérification est obligatoire pour retirer de grosses sommes."}',
             'value_pt' => '{"0":"Sim, mas a verificação é obrigatória para sacar grandes quantias."}',
             'order' => 49
            ]
        );
    }
}
