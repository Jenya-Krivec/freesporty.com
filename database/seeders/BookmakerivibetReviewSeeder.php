<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
             'value_en' => '{"0":"ivibet Review"}',
             'value_es' => '{"0":"Reseña de ivibet"}',
             'value_fr' => '{"0":"Avis sur ivibet"}',
             'value_pt' => '{"0":"Análise da ivibet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet is a relatively new bookmaker on the international market. Despite this, the site offers a user-friendly interface and attractive bonuses for both new and regular players."}',
             'value_es' => '{"0":"ivibet es una casa de apuestas relativamente nueva en el mercado internacional. A pesar de ello, el sitio cuenta con una interfaz fácil de usar y ofrece buenos bonos tanto para nuevos usuarios como para jugadores habituales."}',
             'value_fr' => '{"0":"ivibet est un bookmaker relativement récent sur le marché international. Malgré cela, le site propose une interface conviviale et de bons bonus pour les nouveaux joueurs comme pour les habitués."}',
             'value_pt' => '{"0":"A ivibet é uma casa de apostas relativamente nova no mercado internacional. Apesar disso, o site possui uma interface amigável e oferece bons bônus tanto para novos jogadores quanto para usuários frequentes."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"On the platform, you can place traditional sports bets as well as enjoy casino games. It\'s worth noting that the bookmaker provides full functionality on both the desktop and mobile versions."}',
             'value_es' => '{"0":"En el sitio web se pueden hacer apuestas deportivas tradicionales y también jugar en el casino. Cabe destacar que el operador ofrece una funcionalidad completa tanto en la versión de escritorio como en la versión móvil."}',
             'value_fr' => '{"0":"Vous pouvez y effectuer des paris sportifs classiques ainsi que jouer au casino. Il convient de noter que le site offre une fonctionnalité complète aussi bien sur la version de bureau que sur la version mobile."}',
             'value_pt' => '{"0":"No site, é possível fazer apostas esportivas tradicionais e também jogar no cassino. Vale destacar que a casa oferece funcionalidade completa tanto na versão desktop quanto na versão móvel."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The company operates under a Curacao license and accepts players from dozens of countries, including India, Canada, Germany, and other key markets. If you encounter access issues, we recommend using a VPN."}',
             'value_es' => '{"0":"La compañía opera bajo una licencia de Curazao y acepta jugadores de decenas de países, incluyendo India, Canadá, Alemania y otros mercados clave. Si tienes problemas para acceder al sitio, te recomendamos utilizar una VPN."}',
             'value_fr' => '{"0":"La société opère sous licence de Curaçao et accepte des joueurs de dizaines de pays, notamment de l’Inde, du Canada, de l’Allemagne et d’autres marchés clés. Si vous avez des problèmes d’accès au site, nous vous conseillons d’utiliser un VPN."}',
             'value_pt' => '{"0":"A empresa opera sob licença de Curaçau e aceita jogadores de dezenas de países, incluindo Índia, Canadá, Alemanha e outros mercados importantes. Se tiver dificuldades para acessar o site, recomendamos o uso de uma VPN."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet offers betting on over 40 sports, including not only traditional disciplines like football, tennis, basketball, or hockey, but also less common ones such as water polo, snooker, Gaelic football, darts, and a wide range of esports."}',
             'value_es' => '{"0":"ivibet ofrece apuestas en más de 40 deportes, incluyendo no solo disciplinas tradicionales como fútbol, tenis, baloncesto o hockey, sino también deportes menos comunes como waterpolo, snooker, fútbol gaélico, dardos y una gran variedad de disciplinas de deportes electrónicos."}',
             'value_fr' => '{"0":"ivibet propose des paris sur plus de 40 sports, incluant non seulement des disciplines traditionnelles comme le football, le tennis, le basketball ou le hockey, mais aussi des sports moins populaires comme le water-polo, le snooker, le football gaélique, les fléchettes, ainsi qu’un grand nombre de disciplines d’esport."}',
             'value_pt' => '{"0":"A ivibet oferece apostas em mais de 40 esportes, incluindo não apenas disciplinas tradicionais como futebol, tênis, basquete ou hóquei, mas também modalidades menos comuns como polo aquático, snooker, futebol gaélico, dardos e uma grande variedade de eSports."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Players can choose between pre-match and live betting, easily switch between events, and use filters for quick access to the desired league or market."}',
             'value_es' => '{"0":"El jugador puede elegir entre apuestas pre-partido y en vivo, cambiar fácilmente entre eventos y usar filtros para acceder rápidamente a la liga o mercado deseado."}',
             'value_fr' => '{"0":"Le joueur peut choisir entre des paris avant-match et en direct, basculer facilement entre les événements et utiliser des filtres pour accéder rapidement à la ligue ou au marché souhaité."}',
             'value_pt' => '{"0":"O jogador pode escolher entre apostas pré-jogo e ao vivo, alternar facilmente entre os eventos e usar filtros para acessar rapidamente a liga ou mercado desejado."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Here is a list of the main sports available on the bookmaker’s website:"}',
             'value_es' => '{"0":"Aquí tienes una lista de los principales deportes disponibles en el sitio del operador:"}',
             'value_fr' => '{"0":"Voici la liste des principaux sports disponibles sur le site du bookmaker :"}',
             'value_pt' => '{"0":"Aqui está uma lista dos principais esportes disponíveis no site da casa de apostas:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet consistently offers high odds on popular sports events, especially in football, tennis, and basketball categories. For top-tier matches such as those in the English Premier League or the Champions League, the odds often surpass those of other bookmakers. For example, in the match between Manchester City and Arsenal, the odds are 2.05 for a Manchester City win, 3.50 for a draw, and 3.70 for an Arsenal win."}',
             'value_es' => '{"0":"ivibet ofrece cuotas consistentemente altas en eventos deportivos populares, especialmente en categorías como fútbol, tenis y baloncesto. En partidos de alto nivel, como los de la Premier League inglesa o la Liga de Campeones, las cuotas suelen superar a las de otros operadores. Por ejemplo, en el partido Manchester City – Arsenal, la cuota para la victoria del Manchester City es de 2.05, para el empate es de 3.50 y para la victoria del Arsenal es de 3.70."}',
             'value_fr' => '{"0":"ivibet propose des cotes régulièrement élevées sur les événements sportifs populaires, notamment dans les catégories football, tennis et basketball. Pour les matchs de haut niveau comme ceux de la Premier League anglaise ou de la Ligue des champions, les cotes dépassent souvent celles d’autres bookmakers. Par exemple, pour le match Manchester City – Arsenal, la cote pour une victoire de Manchester City est de 2.05, celle pour un match nul est de 3.50, et celle pour une victoire d’Arsenal est de 3.70."}',
             'value_pt' => '{"0":"A ivibet oferece consistentemente odds altas em eventos esportivos populares, especialmente nas categorias de futebol, tênis e basquete. Em partidas de alto nível, como da Premier League inglesa ou da Liga dos Campeões, as odds frequentemente superam as de outros operadores. Por exemplo, na partida Manchester City – Arsenal, a odd para vitória do Manchester City é 2.05, para empate é 3.50, e para vitória do Arsenal é 3.70."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet also stands out with favorable odds on correct score bets and combination bets, where many other bookmakers tend to lower the values. In live betting, odds update quickly, which is crucial for players who prefer dynamic, real-time wagering."}',
             'value_es' => '{"0":"ivibet también se destaca en apuestas a marcador exacto y combinadas, donde muchos otros operadores reducen los valores. En las apuestas en vivo, las cuotas se actualizan rápidamente, lo cual es clave para quienes juegan en un entorno dinámico."}',
             'value_fr' => '{"0":"ivibet se distingue également par ses cotes avantageuses sur les paris score exact et combinés, domaines dans lesquels de nombreux concurrents appliquent des valeurs réduites. En paris en direct, les cotes sont mises à jour rapidement, ce qui est crucial pour les joueurs misant dans un environnement dynamique."}',
             'value_pt' => '{"0":"A ivibet também se destaca em apostas de placar exato e apostas combinadas, onde muitos outros sites reduzem significativamente os valores. Nas apostas ao vivo, as odds são atualizadas rapidamente, o que é essencial para jogadores que preferem apostas em tempo real."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Even for less popular sports, the odds remain at a competitive level. This applies not only to lower-tier football leagues but also to niche sports like futsal, table tennis, or cricket."}',
             'value_es' => '{"0":"Incluso en deportes menos populares, las cuotas se mantienen en un nivel aceptable. Esto incluye no solo ligas de fútbol secundarias, sino también deportes de nicho como fútbol sala, tenis de mesa o críquet."}',
             'value_fr' => '{"0":"Même pour les sports moins populaires, les cotes restent à un niveau compétitif. Cela vaut aussi bien pour les divisions inférieures de football que pour les sports de niche comme le futsal, le tennis de table ou le cricket."}',
             'value_pt' => '{"0":"Mesmo em esportes menos populares, as odds permanecem em um nível competitivo. Isso se aplica não apenas às ligas secundárias de futebol, mas também a esportes de nicho como futsal, tênis de mesa e críquete."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For top football matches, the number of available betting options can exceed 1,500 markets. This includes not only traditional bet types but also options like yellow cards, corners, and offsides. You can also bet on individual player actions such as shots on target or number of fouls committed."}',
             'value_es' => '{"0":"En los partidos de fútbol más importantes, el número de mercados disponibles puede superar los 1.500. Esto incluye no solo las apuestas tradicionales, sino también opciones como tarjetas amarillas, saques de esquina y fueras de juego. También puedes apostar a acciones individuales de los jugadores, como disparos a puerta o número de faltas cometidas."}',
             'value_fr' => '{"0":"Pour les matchs de football majeurs, le nombre d’options de paris disponibles peut dépasser 1 500 marchés. Cela inclut non seulement les types de paris classiques, mais aussi des options comme les cartons jaunes, les corners ou les hors-jeu. Il est également possible de parier sur les actions individuelles des joueurs, telles que les tirs cadrés ou le nombre de fautes commises."}',
             'value_pt' => '{"0":"Em partidas de futebol de alto nível, o número de opções de apostas pode ultrapassar 1.500 mercados. Isso inclui não apenas apostas tradicionais, mas também apostas em cartões amarelos, escanteios e impedimentos. Também é possível apostar em ações individuais dos jogadores, como chutes ao gol ou número de faltas cometidas."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, players can wager on quarter totals and individual player points, while in tennis — on number of games, double faults, or service breaks."}',
             'value_es' => '{"0":"En baloncesto, se puede apostar a totales parciales y puntos individuales de los jugadores, mientras que en tenis — al número de juegos, dobles faltas o rupturas de servicio."}',
             'value_fr' => '{"0":"Au basketball, les parieurs peuvent miser sur les totaux par quart-temps et les points individuels des joueurs, tandis qu’au tennis — sur le nombre de jeux, les doubles fautes ou les breaks."}',
             'value_pt' => '{"0":"No basquete, é possível apostar em totais parciais e pontos individuais de jogadores; no tênis — em número de games, duplas faltas ou quebras de serviço."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the interactive match graphics, players can track the progress of a game in real time. For football matches, for example, data is displayed on shots, ball possession, attacks, and dangerous moments."}',
             'value_es' => '{"0":"Gracias a los gráficos interactivos de los partidos, los jugadores pueden seguir el desarrollo del encuentro en tiempo real. En los partidos de fútbol, por ejemplo, se muestra información sobre tiros, posesión del balón, ataques y ocasiones peligrosas."}',
             'value_fr' => '{"0":"Grâce à la représentation graphique interactive des événements, les joueurs peuvent suivre le déroulement d’un match en temps réel. Pour les matchs de football, par exemple, on peut voir les tirs, la possession du ballon, les attaques et les actions dangereuses."}',
             'value_pt' => '{"0":"Graças à visualização gráfica interativa dos eventos, os jogadores podem acompanhar o andamento da partida em tempo real. Em jogos de futebol, por exemplo, são exibidas informações como chutes, posse de bola, ataques e lances perigosos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For a number of events, a multi-view feature is available, allowing users to follow several matches at once. Odds update with minimal delay, enabling timely reactions to in-game developments. Additionally, the live section includes combined bets, which are rarely offered by other bookmakers."}',
             'value_es' => '{"0":"Para varios eventos está disponible la función de multivisión, que permite seguir varios partidos al mismo tiempo. Las cuotas se actualizan con un mínimo retraso, lo que permite reaccionar a tiempo a lo que ocurre en el partido. Además, la sección en vivo incluye apuestas combinadas, algo poco común en otras casas de apuestas."}',
             'value_fr' => '{"0":"Une fonction de multifenêtre est disponible pour certains matchs, permettant de suivre plusieurs rencontres en même temps. Les cotes se mettent à jour avec un délai minimal, permettant de réagir rapidement aux événements du match. De plus, le segment live propose également des paris combinés, rarement disponibles chez d’autres bookmakers."}',
             'value_pt' => '{"0":"Para diversos jogos, há uma função de multijanela que permite acompanhar várias partidas ao mesmo tempo. As odds são atualizadas com atraso mínimo, possibilitando reações rápidas às mudanças no jogo. Além disso, o segmento ao vivo também oferece apostas combinadas, algo raro em outras casas de apostas."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Although ivibet does not yet offer live streaming for all events, the platform is gradually integrating this feature for popular disciplines such as football, tennis, table tennis, and esports."}',
             'value_es' => '{"0":"Aunque ivibet aún no ofrece transmisiones en vivo para todos los eventos, la plataforma está integrando gradualmente esta función para disciplinas populares como el fútbol, el tenis, el tenis de mesa y los deportes electrónicos."}',
             'value_fr' => '{"0":"Bien qu’ivibet ne propose pas encore de retransmissions vidéo pour tous les événements, la plateforme intègre progressivement cette fonctionnalité pour les disciplines populaires telles que le football, le tennis, le tennis de table et l’esport."}',
             'value_pt' => '{"0":"Embora a ivibet ainda não ofereça transmissões ao vivo para todos os eventos, a plataforma está gradualmente integrando esse recurso para disciplinas populares como futebol, tênis, tênis de mesa e eSports."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Events with streaming support are marked with a corresponding indicator, and the video quality is sufficient to comfortably follow the match even from a mobile device. For most other events, infographic displays and detailed statistics are available."}',
             'value_es' => '{"0":"Los eventos con soporte de streaming están marcados con un indicador correspondiente, y la calidad de imagen permite seguir el partido cómodamente incluso desde un dispositivo móvil. Para la mayoría de los demás eventos, hay infografías y estadísticas detalladas disponibles."}',
             'value_fr' => '{"0":"Les événements avec streaming sont signalés par un indicateur spécifique, et la qualité vidéo permet de suivre confortablement le match, même depuis un appareil mobile. Pour la plupart des autres événements, des infographies et des statistiques détaillées sont disponibles."}',
             'value_pt' => '{"0":"Os eventos com suporte a streaming são marcados com um indicador apropriado, e a qualidade da imagem permite acompanhar a partida confortavelmente mesmo em dispositivos móveis. Para a maioria dos outros eventos, estão disponíveis infográficos e estatísticas detalhadas."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Games section offers over 5,000 slots from top providers such as Pragmatic Play, NetEnt, Microgaming, and Play’n GO."}',
             'value_es' => '{"0":"La sección de juegos ofrece más de 5.000 tragamonedas de los principales proveedores como Pragmatic Play, NetEnt, Microgaming y Play’n GO."}',
             'value_fr' => '{"0":"La section Jeux propose plus de 5 000 machines à sous des principaux fournisseurs tels que Pragmatic Play, NetEnt, Microgaming et Play’n GO."}',
             'value_pt' => '{"0":"A seção de jogos oferece mais de 5.000 slots dos principais provedores como Pragmatic Play, NetEnt, Microgaming e Play’n GO."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The live casino features tables with real dealers, including roulette, baccarat, blackjack, and sic bo. There is also a dedicated «Tournaments» section where players can participate in regular competitions with cash prizes."}',
             'value_es' => '{"0":"El casino en vivo incluye mesas con crupieres reales, como ruleta, bacará, blackjack y sic bo. También hay una sección dedicada a «Torneos» donde los jugadores pueden participar en competiciones regulares con premios en efectivo."}',
             'value_fr' => '{"0":"Le casino en direct comprend des tables avec des croupiers en direct, notamment la roulette, le baccara, le blackjack et le sic bo. Une section « Tournois » distincte permet aux joueurs de participer à des compétitions régulières avec des prix en argent."}',
             'value_pt' => '{"0":"O cassino ao vivo conta com mesas com dealers reais, incluindo roleta, bacará, blackjack e sic bo. Há também uma seção dedicada a «Torneios», onde os jogadores podem participar de competições regulares com prêmios em dinheiro."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet uses modern security protocols, including SSL encryption, two-factor authentication, and constant transaction monitoring to detect suspicious activity."}',
             'value_es' => '{"0":"ivibet utiliza protocolos de seguridad modernos, incluyendo cifrado SSL, autenticación de dos factores y monitoreo constante de transacciones para detectar actividades sospechosas."}',
             'value_fr' => '{"0":"ivibet utilise des protocoles de sécurité modernes, y compris le chiffrement SSL, l’authentification à deux facteurs et une surveillance constante des transactions pour détecter toute activité suspecte."}',
             'value_pt' => '{"0":"A ivibet utiliza protocolos de segurança modernos, incluindo criptografia SSL, autenticação de dois fatores e monitoramento constante das transações para detectar atividades suspeitas."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The company operates under a Curaçao license. User verification is mandatory upon the first withdrawal request."}',
             'value_es' => '{"0":"La empresa opera bajo una licencia de Curazao. La verificación de usuarios es obligatoria al realizar la primera solicitud de retiro."}',
             'value_fr' => '{"0":"L’entreprise opère sous licence du Curaçao. La vérification des utilisateurs est obligatoire lors de la première demande de retrait."}',
             'value_pt' => '{"0":"A empresa opera sob licença de Curaçao. A verificação dos usuários é obrigatória no primeiro pedido de saque."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet supports over 40 payment methods, including Visa and MasterCard bank cards, e-wallets such as Skrill, Neteller, Jeton, ecoPayz, as well as cryptocurrencies like Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"ivibet admite más de 40 métodos de pago, incluidas tarjetas bancarias Visa y MasterCard, monederos electrónicos como Skrill, Neteller, Jeton, ecoPayz, así como criptomonedas como Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"ivibet prend en charge plus de 40 méthodes de paiement, y compris les cartes bancaires Visa et MasterCard, les portefeuilles électroniques comme Skrill, Neteller, Jeton, ecoPayz, ainsi que les cryptomonnaies telles que Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"A ivibet oferece suporte a mais de 40 métodos de pagamento, incluindo cartões bancários Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, Jeton, ecoPayz, além de criptomoedas como Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from €10 or the equivalent in another currency. Withdrawals usually take from a few minutes to 24 hours depending on the method and amount. The platform does not charge any fees, but charges may apply from the payment provider."}',
             'value_es' => '{"0":"El depósito mínimo es de 10 € o su equivalente en otra moneda. Las retiradas suelen tardar entre unos minutos y 24 horas, dependiendo del método y la cantidad. La plataforma no cobra comisiones, pero el proveedor de pagos podría aplicarlas."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 € ou l’équivalent dans une autre devise. Les retraits prennent généralement de quelques minutes à 24 heures selon la méthode et le montant. La plateforme ne prélève pas de commission, mais des frais peuvent être appliqués par le prestataire de paiement."}',
             'value_pt' => '{"0":"O depósito mínimo é de €10 ou o equivalente noutra moeda. Os levantamentos geralmente levam de alguns minutos até 24 horas, dependendo do método e do valor. A plataforma não cobra taxas, mas o provedor de pagamento pode aplicar encargos."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of the main payment methods available on the site:"}',
             'value_es' => '{"0":"A continuación, encontrará los principales métodos de pago disponibles en el sitio:"}',
             'value_fr' => '{"0":"Voici les principales méthodes de paiement proposées sur le site :"}',
             'value_pt' => '{"0":"Abaixo estão os principais métodos de pagamento disponíveis no site:"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet\'s support service is available 24/7. You can contact it via live chat or email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de ivibet está disponible las 24 horas, los 7 días de la semana. Puedes contactarlo a través del chat en vivo o por correo electrónico."}',
             'value_fr' => '{"0":"Le service client d’ivibet est disponible 24h/24 et 7j/7. Vous pouvez le contacter via le chat en direct ou par e-mail."}',
             'value_pt' => '{"0":"O suporte da ivibet está disponível 24 horas por dia, 7 dias por semana. Pode ser contactado por chat ao vivo ou por e-mail."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 38
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and betting options",
                                 "1":"High odds on top events",
                                 "2":"Large variety of slots and live casino games",
                                 "3":"Many payment methods",
                                 "4":"Cashout",
                                 "5":"Push notifications"},
                             "1":
                                {"0":"Limited live streaming coverage",
                                 "1":"No mobile apps"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos y opciones de apuestas",
                                 "1":"Cuotas altas en eventos destacados",
                                 "2":"Amplia selección de tragamonedas y juegos de casino en vivo",
                                 "3":"Muchos métodos de pago",
                                 "4":"Cashout",
                                 "5":"Notificaciones push"},
                             "1":
                                {"0":"Cobertura limitada de transmisiones en vivo",
                                 "1":"Sin aplicaciones móviles"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs et d’options de pari",
                                 "1":"Cotes élevées sur les événements majeurs",
                                 "2":"Grande variété de machines à sous et de jeux de casino en direct",
                                 "3":"Nombreuses méthodes de paiement",
                                 "4":"Cashout",
                                 "5":"Notifications push"},
                             "1":
                                {"0":"Couverture limitée des retransmissions en direct",
                                 "1":"Pas d’applications mobiles"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos e opções de apostas",
                                 "1":"Odds altas em eventos principais",
                                 "2":"Ampla seleção de slots e jogos de casino ao vivo",
                                 "3":"Diversos métodos de pagamento",
                                 "4":"Cashout",
                                 "5":"Notificações push"},
                             "1":
                                {"0":"Cobertura limitada de transmissões ao vivo",
                                 "1":"Sem aplicativos móveis"}
                             }',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 39
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de ivibet"}',
                'value_fr' => '{"0":"FAQ de ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do ivibet"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 40
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is the ivibet mobile app available?"}',
             'value_es' => '{"0":"¿Está disponible la aplicación móvil de ivibet?"}',
             'value_fr' => '{"0":"L’application mobile ivibet est-elle disponible ?"}',
             'value_pt' => '{"0":"O aplicativo móvel da ivibet está disponível?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 41
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, full-featured apps for Android and iOS are not available. However, there is a mobile version of the website as an alternative."}',
             'value_es' => '{"0":"No, no hay aplicaciones completas para Android ni iOS. Sin embargo, existe una versión móvil del sitio web como alternativa."}',
             'value_fr' => '{"0":"Non, il n’existe pas d’applications complètes pour Android et iOS. Cependant, une version mobile du site est disponible en alternative."}',
             'value_pt' => '{"0":"Não, aplicativos completos para Android e iOS não estão disponíveis. No entanto, há uma versão móvel do site como alternativa."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 42
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Se requiere verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle nécessaire ?"}',
             'value_pt' => '{"0":"É necessária verificação?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 43
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, verification is mandatory when withdrawing funds."}',
             'value_es' => '{"0":"Sí, la verificación es obligatoria al retirar fondos."}',
             'value_fr' => '{"0":"Oui, la vérification est obligatoire lors du retrait des fonds."}',
             'value_pt' => '{"0":"Sim, a verificação é obrigatória ao solicitar um saque."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 44
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can you play with cryptocurrencies?"}',
             'value_es' => '{"0":"¿Se puede jugar con criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on jouer avec des cryptomonnaies ?"}',
             'value_pt' => '{"0":"É possível jogar com criptomoedas?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 45
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, ivibet supports deposits and withdrawals in Bitcoin, Ethereum, Tether, and other cryptocurrencies."}',
             'value_es' => '{"0":"Sí, ivibet admite depósitos y retiros en Bitcoin, Ethereum, Tether y otras criptomonedas."}',
             'value_fr' => '{"0":"Oui, ivibet prend en charge les dépôts et retraits en Bitcoin, Ethereum, Tether et autres cryptomonnaies."}',
             'value_pt' => '{"0":"Sim, ivibet suporta depósitos e saques em Bitcoin, Ethereum, Tether e outras criptomoedas."}',
             'order' => 45
            ]
        );
    }
}
