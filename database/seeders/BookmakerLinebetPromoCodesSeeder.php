<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is one of the popular international betting platforms that attracts users not only with its wide range of betting markets and quality service, but also with its generous bonus offers. Whether you’re a new or experienced player, Linebet regularly provides promo codes, promotions, and bonuses that help increase your potential winnings."}',
             'value_es' => '{"0":"Linebet es una de las plataformas de apuestas internacionales más populares, que atrae a los jugadores no solo por su amplia variedad de mercados de apuestas y su servicio de calidad, sino también por sus atractivas ofertas de bonificación. Tanto para los nuevos usuarios como para los jugadores experimentados, Linebet ofrece regularmente códigos promocionales, promociones y bonos que ayudan a aumentar las ganancias."}',
             'value_fr' => '{"0":"Linebet est l’une des plateformes de paris internationales les plus populaires, attirant les joueurs non seulement par la diversité de ses marchés de paris et la qualité de son service, mais aussi grâce à ses offres de bonus avantageuses. Que vous soyez un nouveau joueur ou un utilisateur expérimenté, Linebet propose régulièrement des codes promo, des promotions et des bonus pour augmenter vos gains potentiels."}',
             'value_pt' => '{"0":"A Linebet é uma das plataformas de apostas internacionais mais populares, atraindo jogadores não apenas pela variedade de mercados e qualidade do serviço, mas também pelas ofertas de bônus vantajosas. Tanto novos usuários quanto apostadores experientes podem aproveitar códigos promocionais, promoções e bônus que a Linebet oferece regularmente para aumentar os ganhos."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a closer look at how promo codes work and what bonuses are available on the platform. We’ll also explain how to use our promo code :promocode to receive an enhanced welcome bonus during registration."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle cómo funcionan los códigos promocionales y qué bonificaciones están disponibles en la plataforma. También explicaremos cómo usar nuestro código promocional :promocode para obtener un bono de bienvenida mejorado al registrarte."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail le fonctionnement des codes promotionnels et les bonus disponibles sur la plateforme. Nous vous montrerons également comment utiliser notre code promo :promocode pour bénéficier d’un bonus de bienvenue amélioré lors de votre inscription."}',
             'value_pt' => '{"0":"Neste artigo, vamos analisar em detalhes como funcionam os códigos promocionais e quais bônus estão disponíveis na plataforma. Também explicaremos como usar nosso código promocional :promocode para receber um bônus de boas-vindas melhorado no momento do cadastro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the Linebet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de Linebet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo Linebet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da Linebet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Users on the Linebet website can register via email, phone number, social networks, or in one click. The registration form includes a special field for entering a promo code. To use the promo code:"}',
             'value_es' => '{"0":"Los usuarios del sitio web de Linebet pueden registrarse mediante correo electrónico, número de teléfono, redes sociales o con un solo clic. El formulario de registro incluye un campo especial para introducir un código promocional. Para utilizar el código promocional:"}',
             'value_fr' => '{"0":"Les utilisateurs du site Linebet peuvent s’inscrire par e-mail, numéro de téléphone, réseaux sociaux ou en un clic. Le formulaire d’inscription comprend un champ spécial pour saisir un code promo. Pour utiliser le code promo :"}',
             'value_pt' => '{"0":"Os usuários do site da Linebet podem se registrar por e-mail, número de telefone, redes sociais ou com um clique. O formulário de registro inclui um campo especial para inserir o código promocional. Para usar o código promocional:"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official Linebet website or open the mobile app."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de Linebet o abre la aplicación móvil."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de Linebet ou ouvrez l’application mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da Linebet ou abra o aplicativo móvel."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. Click the «Registration» button located at the top right of the site."}',
             'value_es' => '{"0":"2. Haz clic en el botón «Registro» en la parte superior derecha del sitio."}',
             'value_fr' => '{"0":"2. Cliquez sur le bouton « Inscription » en haut à droite du site."}',
             'value_pt' => '{"0":"2. Clique no botão «Registro» no canto superior direito do site."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. Choose your preferred registration method (phone, email, social networks, one-click)."}',
             'value_es' => '{"0":"3. Elige tu método de registro preferido (teléfono, correo electrónico, redes sociales, un clic)."}',
             'value_fr' => '{"0":"3. Choisissez votre méthode d’inscription préférée (téléphone, email, réseaux sociaux, en un clic)."}',
             'value_pt' => '{"0":"3. Escolha o método de registro desejado (telefone, e-mail, redes sociais ou com um clique)."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. Enter your details and select your account currency."}',
             'value_es' => '{"0":"4. Ingresa tus datos y selecciona la moneda de tu cuenta."}',
             'value_fr' => '{"0":"4. Saisissez vos informations et sélectionnez la devise de votre compte."}',
             'value_pt' => '{"0":"4. Insira seus dados e selecione a moeda da conta."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"5. In the «Promo Code» field, enter our promo code :promocode. This promo code will boost your welcome bonus."}',
             'value_es' => '{"0":"5. En el campo «Código promocional», introduce nuestro código :promocode. Este código aumentará tu bono de bienvenida."}',
             'value_fr' => '{"0":"5. Dans le champ « Code promo », entrez notre code :promocode. Ce code augmentera votre bonus de bienvenue."}',
             'value_pt' => '{"0":"5. No campo «Código promocional», digite o nosso código :promocode. Esse código aumentará seu bônus de boas-vindas."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"6. Confirm your registration and make your first deposit — the bonus will be credited to your account automatically."}',
             'value_es' => '{"0":"6. Confirma tu registro y realiza tu primer depósito: el bono se acreditará automáticamente en tu cuenta."}',
             'value_fr' => '{"0":"6. Confirmez votre inscription et effectuez votre premier dépôt — le bonus sera crédité automatiquement sur votre compte."}',
             'value_pt' => '{"0":"6. Confirme seu registro e faça o primeiro depósito — o bônus será creditado automaticamente na sua conta."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Please note that the bonus amount depends on the amount of your first deposit."}',
             'value_es' => '{"0":"Ten en cuenta que el monto del bono depende de la cantidad del primer depósito."}',
             'value_fr' => '{"0":"Veuillez noter que le montant du bonus dépend du montant de votre premier dépôt."}',
             'value_pt' => '{"0":"Tenha em mente que o valor do bônus depende do valor do seu primeiro depósito."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at Linebet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en Linebet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur Linebet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na Linebet?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Linebet actively supports regular players by offering ongoing bonuses and promotions. These include cashback programs, reload bonuses, and special offers on specific sports or casino games."}',
             'value_es' => '{"0":"Sí, Linebet apoya activamente a los jugadores habituales y les ofrece bonificaciones y promociones regulares. Estas incluyen programas de reembolso, bonos por recarga y promociones especiales para deportes o juegos de casino específicos."}',
             'value_fr' => '{"0":"Oui, Linebet soutient activement les joueurs réguliers en leur proposant des bonus et des promotions fréquentes. Il s\'agit notamment de programmes de cashback, de bonus de rechargement et d\'offres spéciales sur certains sports ou jeux de casino."}',
             'value_pt' => '{"0":"Sim, a Linebet apoia ativamente os jogadores frequentes e oferece bônus e promoções regulares. Isso inclui programas de cashback, bônus de recarga e promoções especiais para esportes ou jogos de cassino específicos."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, loyal customers can participate in tournaments, prize draws, and activity-based bonuses, making the gaming experience more exciting and rewarding. So you\'ll always find opportunities to boost your winnings."}',
             'value_es' => '{"0":"Además, los clientes habituales pueden participar en torneos, sorteos y bonos por actividad, lo que hace que jugar sea aún más emocionante y rentable. Así que siempre tendrás oportunidades para aumentar tus ganancias."}',
             'value_fr' => '{"0":"De plus, des tournois, des tirages au sort et des bonus liés à l\'activité sont organisés pour les clients fidèles, rendant l\'expérience de jeu encore plus intéressante et avantageuse. Vous trouverez donc toujours une opportunité d’augmenter vos gains."}',
             'value_pt' => '{"0":"Além disso, os clientes fiéis podem participar de torneios, sorteios e bônus por atividade, tornando a experiência de jogo ainda mais divertida e vantajosa. Assim, você sempre encontrará maneiras de aumentar seus ganhos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, Linebet does not offer classic no deposit bonuses where you receive money or free spins without making a deposit. However, there are many other promotions available that can significantly boost your winnings. So let’s take a closer look at them."}',
             'value_es' => '{"0":"Actualmente, Linebet no ofrece bonos sin depósito clásicos, donde se recibe dinero o giros gratis sin hacer un depósito. Sin embargo, existen muchas otras promociones que pueden aumentar significativamente tus ganancias. Así que vamos a analizarlas."}',
             'value_fr' => '{"0":"Actuellement, Linebet ne propose pas de bonus sans dépôt classiques, où vous recevez de l\'argent ou des tours gratuits sans effectuer de dépôt. Cependant, de nombreuses autres promotions peuvent augmenter considérablement vos gains. Voyons cela de plus près."}',
             'value_pt' => '{"0":"No momento, a Linebet não oferece bônus clássicos sem depósito, onde você recebe dinheiro ou rodadas grátis sem fazer um depósito. No entanto, há muitas outras promoções que podem aumentar significativamente seus ganhos. Vamos analisá-las."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Weekly Cashback"}',
                'value_es' => '{"0":"Devolución semanal"}',
                'value_fr' => '{"0":"Cashback hebdomadaire"}',
                'value_pt' => '{"0":"Cashback semanal"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Weekly Cashback is a regular promotion that helps reduce your losses in case of bad luck and allows you to keep playing. To achieve this, Linebet returns a portion of your weekly losses as cashback."}',
             'value_es' => '{"0":"El Devolución semanal es una promoción regular que te ayuda a reducir tus pérdidas en caso de mala suerte y te permite seguir jugando. Para ello, Linebet devuelve parte de tus pérdidas semanales en forma de reembolso."}',
             'value_fr' => '{"0":"Le Cashback hebdomadaire est une promotion régulière qui vous permet de réduire vos pertes en cas de malchance et de continuer à jouer. Pour cela, Linebet rembourse une partie de vos pertes hebdomadaires sous forme de cashback."}',
             'value_pt' => '{"0":"O Cashback semanal é uma promoção regular que ajuda a reduzir suas perdas em caso de azar e permite que você continue jogando. Para isso, a Linebet devolve uma parte das suas perdas semanais em forma de cashback."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Each week, Linebet calculates the total amount of your losses on sports bets or casino games, and a percentage of these losses is automatically returned to your account in the form of bonus money."}',
             'value_es' => '{"0":"Cada semana, Linebet calcula el total de tus pérdidas en apuestas deportivas o juegos de casino, y un porcentaje de esas pérdidas se devuelve automáticamente a tu cuenta como dinero de bonificación."}',
             'value_fr' => '{"0":"Chaque semaine, Linebet calcule le montant total de vos pertes sur les paris sportifs ou les jeux de casino, et un pourcentage de ces pertes est automatiquement reversé sur votre compte sous forme de bonus."}',
             'value_pt' => '{"0":"A cada semana, a Linebet calcula o total das suas perdas em apostas esportivas ou jogos de cassino, e uma porcentagem dessas perdas é automaticamente devolvida à sua conta como dinheiro de bônus."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The cashback percentage may vary depending on your activity and the type of bets placed. The received cashback can be used for further sports or casino bets."}',
             'value_es' => '{"0":"El porcentaje de reembolso puede variar según tu actividad y el tipo de apuestas realizadas. El cashback recibido puede utilizarse para realizar nuevas apuestas deportivas o en el casino."}',
             'value_fr' => '{"0":"Le pourcentage de cashback peut varier en fonction de votre activité et du type de paris effectués. Le cashback reçu peut être utilisé pour de nouveaux paris sportifs ou au casino."}',
             'value_pt' => '{"0":"A porcentagem de cashback pode variar conforme sua atividade e o tipo de apostas realizadas. O cashback recebido pode ser usado para novas apostas esportivas ou em cassinos."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw the cashback, you must meet the wagering requirements. You need to place an accumulator bet that includes at least 3 events with odds of no less than 1.50."}',
             'value_es' => '{"0":"Ten en cuenta que para poder retirar este reembolso, debes cumplir con los requisitos de apuesta. Es necesario realizar una apuesta combinada con al menos 3 eventos con cuotas de 1.50 o más."}',
             'value_fr' => '{"0":"Veuillez noter que pour retirer ce cashback, vous devez respecter les conditions de mise. Il faut effectuer un pari combiné comprenant au moins 3 événements avec une cote minimale de 1.50."}',
             'value_pt' => '{"0":"Vale lembrar que para sacar o cashback, é necessário cumprir os requisitos de apostas. Você precisa fazer uma aposta acumulada com pelo menos 3 eventos e odds mínimas de 1.50."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Of The Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This is a daily promotion for fans of accumulator bets. Every day, Linebet creates a special accumulator featuring several sports events with boosted odds. If you place a bet on this accumulator and win, the bookmaker will additionally increase your winnings."}',
             'value_es' => '{"0":"Se trata de una promoción diaria para los amantes de las apuestas combinadas. Cada día, Linebet crea una apuesta combinada especial con varios eventos deportivos y cuotas mejoradas. Si apuestas en esta combinada y ganas, la casa aumentará aún más tus ganancias."}',
             'value_fr' => '{"0":"Il s\'agit d\'une promotion quotidienne destinée aux amateurs de paris combinés. Chaque jour, Linebet propose un pari combiné spécial avec plusieurs événements sportifs et des cotes boostées. Si vous pariez sur ce combiné et gagnez, le bookmaker augmentera encore davantage vos gains."}',
             'value_pt' => '{"0":"Esta é uma promoção diária para os fãs de apostas acumuladas. Todos os dias, a Linebet prepara uma aposta acumulada especial com vários eventos esportivos e odds aumentadas. Se você apostar nessa acumulada e ganhar, a casa aumentará ainda mais seus ganhos."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The terms of this promotion can be found in the «Promotions» or «Special Offers» section on the website."}',
             'value_es' => '{"0":"Las condiciones de esta promoción se pueden encontrar en la sección de «Promociones» o «Ofertas especiales» del sitio web."}',
             'value_fr' => '{"0":"Les conditions de cette promotion sont disponibles dans la section «Promotions» ou «Offres spéciales» du site."}',
             'value_pt' => '{"0":"As condições desta promoção estão disponíveis na seção de «Promoções» ou «Ofertas Especiais» do site."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"LUCKY MONDAY PROMO"}',
                'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE"}',
                'value_fr' => '{"0":"PROMO LUNDI CHANCEUX"}',
                'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"LUCKY MONDAY PROMO is a special promotion held every Monday. To participate, you need to make a deposit during the day and activate the promotion. After that, you can receive a 100% bonus on your deposit."}',
             'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE es una promoción especial que se celebra cada lunes. Para participar, debes hacer un depósito durante el día y activar la promoción. Después de eso, puedes recibir un bono del 100% sobre tu depósito."}',
             'value_fr' => '{"0":"PROMO LUNDI CHANCEUX est une promotion spéciale qui a lieu chaque lundi. Pour en profiter, vous devez effectuer un dépôt au cours de la journée et activer la promotion. Ensuite, vous recevrez un bonus de 100 % sur le montant de votre dépôt."}',
             'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA é uma promoção especial realizada todas as segundas-feiras. Para participar, é necessário fazer um depósito durante o dia e ativar a promoção. Depois disso, você poderá receber um bônus de 100% sobre o valor depositado."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw the bonus, wagering requirements must be met: you need to place an accumulator bet with at least 3 events, each having odds of 1.40 or higher, and do it within the same day."}',
             'value_es' => '{"0":"Para liberar el bono, debes cumplir con los requisitos de apuesta: realizar una apuesta combinada con al menos 3 eventos, cada uno con una cuota mínima de 1.40, y hacerlo dentro del mismo día."}',
             'value_fr' => '{"0":"Pour retirer ce bonus, vous devez respecter les conditions de mise : placer un pari combiné comportant au moins 3 événements, chacun avec une cote d\'au moins 1.40, et ce le même jour."}',
             'value_pt' => '{"0":"Para liberar o bônus, é preciso cumprir os requisitos de aposta: fazer uma aposta acumulada com pelo menos 3 eventos, cada um com odds mínimas de 1.40, e isso deve ser feito no mesmo dia."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Please note that cryptocurrency deposits are not eligible for this promotion."}',
             'value_es' => '{"0":"Ten en cuenta que los depósitos en criptomonedas no califican para esta promoción."}',
             'value_fr' => '{"0":"Veuillez noter que les dépôts en cryptomonnaie ne sont pas éligibles à cette promotion."}',
             'value_pt' => '{"0":"Observe que depósitos em criptomoedas não são elegíveis para esta promoção."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Casino VIP Cashback is a money-back program for active casino players. It\'s a rewarding bonus for those who enjoy casino games and want to get more benefits from their play."}',
             'value_es' => '{"0":"Devolución VIP en Casino es un programa de devolución de dinero para jugadores activos de casino. Es un bono atractivo para quienes disfrutan del casino y desean obtener más beneficios por jugar."}',
             'value_fr' => '{"0":"Le Cashback VIP Casino est un programme de remboursement pour les joueurs de casino actifs. C’est un bonus avantageux pour ceux qui aiment jouer au casino et souhaitent en tirer plus de bénéfices."}',
             'value_pt' => '{"0":"O Cashback VIP do casino é um programa de reembolso para jogadores ativos de cassino. É um bônus atrativo para quem gosta de jogar e quer obter mais vantagens ao apostar."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The promotion applies to users who regularly play casino games, especially live games and slots. The cashback percentage depends on your VIP status and is credited weekly. It can be used for new games or withdrawn after meeting the wagering requirements. This promotion also includes personalized bonuses, gifts, and access to exclusive tournaments."}',
             'value_es' => '{"0":"La promoción está dirigida a usuarios que juegan con regularidad en el casino, especialmente en juegos en vivo y tragamonedas. El porcentaje de cashback depende del estatus VIP del jugador y se acredita semanalmente. Puede usarse para jugar o retirarse tras cumplir los requisitos de apuesta. Además, esta promoción incluye bonos personalizados, regalos y acceso a torneos exclusivos."}',
             'value_fr' => '{"0":"La promotion s’adresse aux utilisateurs qui jouent régulièrement au casino, notamment aux jeux en direct et aux machines à sous. Le pourcentage de cashback dépend du statut VIP du joueur et est crédité chaque semaine. Il peut être utilisé pour de nouveaux jeux ou retiré après avoir satisfait aux conditions de mise. Cette promotion comprend également des bonus personnalisés, des cadeaux et l’accès à des tournois exclusifs."}',
             'value_pt' => '{"0":"A promoção é válida para usuários que jogam regularmente no cassino, especialmente em jogos ao vivo e slots. A porcentagem do cashback depende do status VIP e é creditada semanalmente. Pode ser usada para jogar novamente ou sacada após o cumprimento dos requisitos de apostas. A promoção também oferece bônus personalizados, presentes e participação em torneios exclusivos."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 36
            ]
        );
    }
}
