<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Regular Promotions and Bonuses"}',
                'value_es' => '{"0":"Promociones y Bonos Regulares"}',
                'value_fr' => '{"0":"Promotions et Bonus Réguliers"}',
                'value_pt' => '{"0":"Promoções e Bônus Regulares"}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET is an international bookmaker with more than a decade of experience in the industry. Since its launch in 2009, the platform has expanded to over 90 countries and gained a reputation for offering players various bonuses, promotions, and loyalty programs. The company focuses primarily on sports betting, casino games, live games, and esports. Welcome bonuses, no-deposit free bets, bet insurance, and a VIP cashback program are all part of MOSTBET’s comprehensive marketing strategy."}',
             'value_es' => '{"0":"MOSTBET es una casa de apuestas internacional con más de una década de experiencia en el mercado. Desde su fundación en 2009, la plataforma ha logrado expandirse a más de 90 países y ha ganado una sólida reputación por ofrecer a los jugadores bonos, promociones y programas de fidelidad. La empresa se enfoca principalmente en apuestas deportivas, juegos de casino, juegos en vivo y deportes electrónicos. Bonos de bienvenida, apuestas gratuitas sin depósito, seguros de apuestas y un programa VIP con reembolsos forman parte de su estrategia integral de marketing."}',
             'value_fr' => '{"0":"MOSTBET est un bookmaker international avec plus de dix ans d’expérience sur le marché. Depuis sa création en 2009, la plateforme s’est étendue à plus de 90 pays et s’est forgée une réputation en offrant des bonus, des promotions et des programmes de fidélité à ses utilisateurs. L’entreprise se concentre principalement sur les paris sportifs, les jeux de casino, les jeux en direct et l’esport. Les bonus de bienvenue, les paris gratuits sans dépôt, l’assurance des paris et le programme VIP avec cashback font partie intégrante de sa stratégie marketing."}',
             'value_pt' => '{"0":"A MOSTBET é uma casa de apostas internacional com mais de uma década de experiência no mercado. Desde a sua fundação em 2009, a plataforma expandiu-se para mais de 90 países e ganhou reputação por oferecer aos jogadores bônus, promoções e programas de fidelidade. A empresa concentra-se principalmente em apostas esportivas, jogos de cassino, jogos ao vivo e eSports. Bônus de boas-vindas, apostas grátis sem depósito, seguro de apostas e um programa VIP com cashback fazem parte da sua estratégia de marketing abrangente."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET also offers an exclusive promo code: :promocode, which allows you to receive an enhanced welcome bonus. Instead of the standard 125% on your first deposit, you can get 150%. Below, we’ll explain how to use it."}',
             'value_es' => '{"0":"Además, MOSTBET ofrece un código promocional exclusivo: :promocode, con el que puedes obtener un bono de bienvenida mejorado. En lugar del 125% habitual por tu primer depósito, recibirás un 150%. A continuación te explicamos cómo utilizarlo."}',
             'value_fr' => '{"0":"MOSTBET propose également un code promo exclusif : :promocode, qui vous permet de recevoir un bonus de bienvenue amélioré. Au lieu de 125% sur votre premier dépôt, vous pouvez recevoir 150%. Nous expliquons ci-dessous comment en profiter."}',
             'value_pt' => '{"0":"A MOSTBET também oferece um código promocional exclusivo: :promocode, que permite receber um bônus de boas-vindas aumentado. Em vez dos habituais 125% no primeiro depósito, você poderá obter 150%. Abaixo explicamos como utilizá-lo."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Instant Registration"}',
                'value_es' => '{"0":"Registro Instantáneo"}',
                'value_fr' => '{"0":"Inscription Instantanée"}',
                'value_pt' => '{"0":"Registro Instantâneo"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode on MOSTBET, you need to register by choosing one of the available methods: via email, phone number, social media, or one-click quick registration. All these options allow you to enter the :promocode and activate it. This code grants you an enhanced welcome bonus that exceeds the standard MOSTBET offer. With the :promocode, you can receive 150% on your first deposit instead of the usual 125%, along with additional free spins."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode en MOSTBET, es necesario registrarse eligiendo uno de los métodos disponibles: correo electrónico, número de teléfono, redes sociales o registro rápido en un clic. Todas estas opciones permiten introducir el código :promocode y activarlo. Este código ofrece un bono de bienvenida ampliado que supera la oferta estándar de MOSTBET. Con :promocode, puedes obtener un 150% en tu primer depósito en lugar del habitual 125%, además de activar giros gratis adicionales."}',
             'value_fr' => '{"0":"Pour utiliser le code promotionnel :promocode sur MOSTBET, vous devez vous inscrire en choisissant l’une des options disponibles : email, numéro de téléphone, réseaux sociaux ou inscription rapide en un clic. Toutes ces méthodes vous permettent de saisir le code :promocode et de l’activer. Ce code vous offre un bonus de bienvenue amélioré, supérieur à l’offre standard de MOSTBET. Avec :promocode, vous recevrez 150% sur votre premier dépôt au lieu des 125% habituels, ainsi que des tours gratuits supplémentaires."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode na MOSTBET, é necessário registrar-se escolhendo um dos métodos disponíveis: email, número de telefone, redes sociais ou registro rápido com um clique. Todas essas opções permitem inserir e ativar o código :promocode. Este código oferece um bônus de boas-vindas ampliado que supera a oferta padrão da MOSTBET. Com o :promocode, você recebe 150% no primeiro depósito em vez dos 125% habituais, além de rodadas grátis adicionais."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Once the registration is complete, the user must make a first deposit. The minimum deposit amount starts from just 1 euro, but to get the full benefit, it is recommended to deposit a higher amount."}',
             'value_es' => '{"0":"Una vez completado el registro, el usuario debe realizar su primer depósito. El importe mínimo comienza desde solo 1 euro, pero para obtener el máximo beneficio, se recomienda depositar una cantidad mayor."}',
             'value_fr' => '{"0":"Une fois l’inscription terminée, l’utilisateur doit effectuer un premier dépôt. Le montant minimum commence à partir de 1 euro, mais pour profiter pleinement de l’offre, il est conseillé de déposer une somme plus importante."}',
             'value_pt' => '{"0":"Após concluir o cadastro, o usuário deve fazer o primeiro depósito. O valor mínimo começa em apenas 1 euro, mas para aproveitar ao máximo o bônus, é recomendável depositar um valor maior."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Next, you must choose which type of bonus you want to activate — for sports betting or for the casino. For sports betting, the bonus must be wagered 5 times using accumulator bets with at least three events, and each event must have odds of 1.40 or higher. In the casino, the conditions are more demanding: the wagering requirement is x60 in slots or TV games, and you have 72 hours to meet the requirement."}',
             'value_es' => '{"0":"Luego, deberás elegir qué tipo de bono deseas activar: para apuestas deportivas o para el casino. En el caso de apuestas deportivas, el bono debe apostarse 5 veces en apuestas combinadas con al menos tres eventos, y cada evento debe tener una cuota mínima de 1.40. En el casino, las condiciones son más exigentes: se requiere un rollover de x60 en slots o juegos de TV, y el plazo para cumplir con ello es de 72 horas."}',
             'value_fr' => '{"0":"Ensuite, vous devrez choisir le type de bonus à activer : pour les paris sportifs ou pour le casino. Pour les paris sportifs, le bonus doit être misé 5 fois sur des paris combinés avec au moins trois événements, chacun ayant une cote minimale de 1.40. Pour le casino, les conditions sont plus strictes : un rollover de x60 est exigé sur les machines à sous ou les jeux TV, avec une limite de 72 heures pour le remplir."}',
             'value_pt' => '{"0":"Em seguida, será necessário escolher qual tipo de bônus deseja ativar — para apostas esportivas ou para o cassino. Para apostas esportivas, o bônus deve ser apostado 5 vezes em acumuladores com pelo menos três eventos, e cada evento deve ter uma odd mínima de 1.40. No cassino, os requisitos são mais exigentes: o rollover é de x60 em slots ou jogos de TV, e o prazo para cumprir essa exigência é de 72 horas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Only after the full wagering is completed will the bonus funds be transferred to the main account, from which they can be withdrawn. The minimum withdrawal amount is around $10, while the maximum per transaction is limited to $2000."}',
             'value_es' => '{"0":"Solo después de cumplir completamente con los requisitos de apuesta, los fondos del bono se transferirán a la cuenta principal, desde donde podrán retirarse. El retiro mínimo es de aproximadamente 10 dólares y el máximo por transacción está limitado a 2000 dólares."}',
             'value_fr' => '{"0":"Ce n’est qu’après avoir rempli toutes les conditions de mise que les fonds du bonus seront transférés sur le compte principal, à partir duquel ils peuvent être retirés. Le montant minimum de retrait est d’environ 10 dollars, et le maximum par transaction est limité à 2000 dollars."}',
             'value_pt' => '{"0":"Somente após o cumprimento total do rollover os fundos do bônus serão transferidos para a conta principal, de onde poderão ser sacados. O valor mínimo de saque é cerca de 10 dólares, enquanto o máximo por transação é limitado a 2000 dólares."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MelBet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET’s bonus policy goes far beyond just welcome offers. A significant portion of promotions is aimed at active players who are already using the platform. For example, the loyalty system rewards users for regular sports betting or participation in tournaments and promotions. As you remain active on the site, your status increases, and with it — the bonuses you receive become more generous."}',
             'value_es' => '{"0":"La política de bonos de MOSTBET no se limita a las ofertas de bienvenida. La mayoría de las promociones están dirigidas a jugadores activos que ya utilizan la plataforma. Por ejemplo, existe un sistema de fidelidad que otorga recompensas por hacer apuestas deportivas de forma regular o por participar en torneos y promociones. Cuanto más activo seas en el sitio, mayor será tu nivel, y los bonos irán aumentando en consecuencia."}',
             'value_fr' => '{"0":"La politique de bonus de MOSTBET ne se limite pas aux offres de bienvenue. Une grande partie des promotions est destinée aux joueurs actifs qui utilisent déjà la plateforme. Par exemple, il existe un système de fidélité qui récompense les utilisateurs pour leurs paris sportifs réguliers ou leur participation à des tournois et à des promotions. Plus vous êtes actif sur le site, plus votre statut augmente, et avec lui, les bonus deviennent plus généreux."}',
             'value_pt' => '{"0":"A política de bônus da MOSTBET não se limita às ofertas de boas-vindas. A maior parte das promoções é voltada para jogadores ativos que já utilizam a plataforma. Por exemplo, há um sistema de fidelidade que recompensa os usuários por fazerem apostas esportivas com frequência ou por participarem de torneios e promoções. Quanto mais ativo o jogador for, maior será seu nível e, consequentemente, melhores serão os bônus."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"One of the standout promotions is the Accumulator Booster, which increases the total odds of your accumulator bets. If your bet slip includes four or more events, a percentage boost — ranging from 5% to as much as 40% — is automatically applied. This promotion is enabled by default once it’s activated in your profile settings."}',
             'value_es' => '{"0":"Una de las promociones más destacadas es Accumulator Booster, que mejora las cuotas totales de las apuestas combinadas. Si tu cupón incluye cuatro o más eventos, se te aplica automáticamente un aumento en las cuotas — que puede ir del 5% al 40%. Esta promoción se activa automáticamente al habilitarla en la configuración del perfil."}',
             'value_fr' => '{"0":"Parmi les autres bonus à noter, on trouve l’offre Accumulator Booster, qui augmente le coefficient total des paris combinés. Si votre coupon contient au moins quatre événements, un bonus automatique est appliqué — allant de 5% à 40%. Cette fonctionnalité s’active automatiquement depuis les paramètres du profil."}',
             'value_pt' => '{"0":"Entre os destaques está a promoção Accumulator Booster, que aumenta as odds totais de apostas múltiplas. Se o bilhete de aposta contiver quatro ou mais eventos, um bônus percentual — de 5% até 40% — será aplicado automaticamente. Esta promoção pode ser ativada nas configurações do perfil."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Another valuable offer is the Lucky Loser promotion, which compensates players after a streak of losses. If a user places 20 losing bets in a row, the system awards a free bet worth 50% of the average stake."}',
             'value_es' => '{"0":"Otra promoción interesante es Lucky Loser, que te recompensa si atraviesas una racha negativa. Si realizas 20 apuestas perdedoras consecutivas, recibirás una apuesta gratuita equivalente al 50% del valor medio de tus apuestas."}',
             'value_fr' => '{"0":"Une autre promotion intéressante est Lucky Loser, qui vous rembourse en cas de série de pertes. Si vous enchaînez 20 paris perdants, vous recevrez un pari gratuit équivalent à 50% de votre mise moyenne."}',
             'value_pt' => '{"0":"Se o usuário fizer 20 apostas perdidas consecutivas, ele receberá uma aposta grátis equivalente a 50% do valor médio das apostas feitas."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Every Friday, there’s the Triumphant Friday promotion. If you make a deposit on that day, you’ll receive a 100% bonus on your deposit."}',
             'value_es' => '{"0":"Cada viernes está disponible la promoción Triumphant Friday. Si recargas tu cuenta ese día, recibirás un bono del 100% sobre tu depósito."}',
             'value_fr' => '{"0":"Chaque vendredi, la promotion Triumphant Friday est disponible. Si vous effectuez un dépôt ce jour-là, vous recevrez un bonus de 100% sur le montant déposé."}',
             'value_pt' => '{"0":"Toda sexta-feira está disponível a promoção Triumphant Friday. Ao fazer um depósito nesse dia, o jogador recebe um bônus de 100% sobre o valor depositado."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Currently, like most bookmakers, MOSTBET does not offer no-deposit bonuses. However, among its promotional offers, you can still find options that can boost your winnings. You can also count on cashback in case of losses."}',
             'value_es' => '{"0":"Actualmente, al igual que la mayoría de las casas de apuestas, MOSTBET no ofrece bonos sin depósito. Sin embargo, entre sus promociones podrás encontrar opciones que aumenten tus ganancias. Además, puedes contar con reembolsos (cashback) en caso de pérdidas."}',
             'value_fr' => '{"0":"Actuellement, comme la plupart des bookmakers, MOSTBET ne propose pas de bonus sans dépôt. Cependant, parmi ses offres promotionnelles, vous pouvez trouver des options qui augmenteront vos gains. Vous pouvez également bénéficier d’un cashback en cas de pertes."}',
             'value_pt' => '{"0":"Atualmente, assim como a maioria das casas de apostas, a MOSTBET não oferece bônus sem depósito. No entanto, entre suas promoções, você pode encontrar opções que aumentem seus ganhos. Além disso, você pode contar com cashback em caso de perdas."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
             'value_en' => '{"0":"Sports Loyalty Programme"}',
             'value_es' => '{"0":"Sports Loyalty Programme"}',
             'value_fr' => '{"0":"Sports Loyalty Programme"}',
             'value_pt' => '{"0":"Sports Loyalty Programme"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is designed for active players and works on a system of accumulating «coins», which are awarded for each bet placed, account top-up, or participation in promotions. Depending on the number of coins collected, new loyalty levels are unlocked. Each level offers greater rewards, such as increased cashback, free bets, or personalized offers."}',
             'value_es' => '{"0":"Esta promoción está dirigida a jugadores activos y funciona mediante un sistema de acumulación de «monedas», que se obtienen por cada apuesta realizada, recarga de cuenta o participación en promociones. Dependiendo de la cantidad de monedas acumuladas, se desbloquean nuevos niveles de fidelidad. Cada nivel ofrece mayores recompensas, como reembolsos aumentados, apuestas gratuitas u ofertas personalizadas"}',
             'value_fr' => '{"0":"Cette promotion est destinée aux joueurs actifs et repose sur un système d’accumulation de «pièces», attribuées pour chaque pari effectué, dépôt réalisé ou participation à des promotions. En fonction du nombre de pièces collectées, de nouveaux niveaux de fidélité sont débloqués. Chaque niveau apporte des récompenses plus importantes, comme un cashback amélioré, des paris gratuits ou des offres personnalisées."}',
             'value_pt' => '{"0":"Esta promoção é voltada para jogadores ativos e funciona com um sistema de acumulação de «moedas», que são concedidas por cada aposta feita, recarga de conta ou participação em promoções. Dependendo da quantidade de moedas acumuladas, novos níveis de fidelidade são desbloqueados. Cada nível oferece recompensas maiores, como cashback aumentado, apostas grátis ou ofertas personalizadas."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Coins can be exchanged for free bets or used to activate special promotions. The more the player bets, the faster their level increases and the more benefits they unlock."}',
             'value_es' => '{"0":"Las monedas se pueden canjear por apuestas gratuitas o utilizar para activar promociones especiales. Cuanto más apueste el jugador, más rápido subirá de nivel y desbloqueará nuevas ventajas."}',
             'value_fr' => '{"0":"Les pièces peuvent être échangées contre des paris gratuits ou utilisées pour activer des promotions spéciales. Plus un joueur parie, plus il progresse rapidement et accède à de nouveaux avantages."}',
             'value_pt' => '{"0":"As moedas podem ser trocadas por apostas grátis ou usadas para ativar promoções especiais. Quanto mais o jogador apostar, mais rápido ele sobe de nível e desbloqueia novos benefícios."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"ACCUMULATOR BOOSTER"}',
                'value_es' => '{"0":"Accumulator BOOSTER"}',
                'value_fr' => '{"0":"Accumulator BOOSTER"}',
                'value_pt' => '{"0":"REFORÇO DE COMBINADA"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is designed specifically for those who enjoy accumulator bets. MOSTBET automatically boosts the odds of such bets if the slip includes at least four events with minimum odds of 1.20. The size of the bonus directly depends on the number of events. For example, with four events, the odds increase by 5%, and with ten events — by 40%. This allows you to receive significantly higher winnings with the same stake amount, without any additional risk or conditions."}',
             'value_es' => '{"0":"Esta promoción está pensada especialmente para quienes disfrutan de las apuestas combinadas. MOSTBET aumenta automáticamente las cuotas de estas apuestas si el cupón incluye al menos cuatro eventos con una cuota mínima de 1.20. El porcentaje del bono depende directamente del número de eventos. Por ejemplo, con cuatro eventos, la cuota se incrementa en un 5%, y con diez — en un 40%. Esto permite obtener ganancias mucho mayores con el mismo importe apostado, sin riesgos ni condiciones adicionales."}',
             'value_fr' => '{"0":"Cette promotion a été spécialement conçue pour ceux qui aiment les paris combinés. MOSTBET augmente automatiquement les cotes de ces paris si le coupon contient au moins quatre événements avec une cote minimale de 1.20. Le montant du bonus dépend directement du nombre d’événements. Par exemple, avec quatre événements, la cote est augmentée de 5%, et avec dix — de 40%. Cela permet de gagner beaucoup plus avec la même mise, sans risques ni conditions supplémentaires."}',
             'value_pt' => '{"0":"Esta promoção foi criada especialmente para quem gosta de apostas múltiplas. A MOSTBET aumenta automaticamente as odds dessas apostas se o bilhete incluir pelo menos quatro eventos com odds mínimas de 1.20. O valor do bônus depende diretamente do número de eventos. Por exemplo, com quatro eventos, as odds aumentam em 5%, e com dez — em 40%. Isso permite obter ganhos significativamente maiores com o mesmo valor apostado, sem riscos ou exigências adicionais."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"RISK-FREE BET"}',
                'value_es' => '{"0":"Apuesta Sin Riesgo"}',
                'value_fr' => '{"0":"Pari Sans Risque"}',
                'value_pt' => '{"0":"APOSTA SEM RISCO"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"A risk-free bet is a promotion where MOSTBET refunds the full amount if your bet loses. To take advantage of this offer, you need to place a single bet with minimum odds of 2.00 on an event selected by the bookmaker. If the bet loses, the amount is returned as bonus funds. To withdraw these funds, they must be wagered using accumulator bets with at least three events, each having minimum odds of 1.40. This is one of the most popular promotions among new users."}',
             'value_es' => '{"0":"La apuesta sin riesgo es una promoción en la que MOSTBET reembolsa al jugador el importe total en caso de pérdida. Para beneficiarte de esta promoción, debes realizar una apuesta simple con una cuota mínima de 2.00 en un evento seleccionado por la casa de apuestas. Si la apuesta resulta perdedora, el importe se devuelve en forma de fondos de bono. Para retirar estos fondos, deberás apostarlos en combinadas con al menos tres eventos, cada uno con una cuota mínima de 1.40. Es una de las promociones más populares entre los nuevos usuarios."}',
             'value_fr' => '{"0":"Le pari sans risque est une promotion dans laquelle MOSTBET rembourse au joueur l’intégralité de sa mise en cas de perte. Pour profiter de cette offre, il faut placer un pari simple avec une cote d’au moins 2.00 sur un événement sélectionné par le bookmaker. Si le pari est perdant, le montant est remboursé sous forme de fonds bonus. Pour retirer ces fonds, il faut les rejouer en paris combinés contenant au moins trois événements, chacun avec une cote minimale de 1.40. C’est l’une des promotions les plus populaires auprès des nouveaux utilisateurs."}',
             'value_pt' => '{"0":"A aposta sem risco é uma promoção em que a MOSTBET reembolsa o valor total da aposta em caso de perda. Para aproveitar esta oferta, é necessário fazer uma aposta simples com odds mínimas de 2.00 em um evento selecionado pela casa de apostas. Se a aposta não for vencedora, o valor é devolvido como saldo de bônus. Para sacar esses fundos, é necessário apostá-los em acumuladores com no mínimo três eventos, cada um com odds a partir de 1.40. Esta é uma das promoções mais populares entre os novos usuários."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
    }
}
