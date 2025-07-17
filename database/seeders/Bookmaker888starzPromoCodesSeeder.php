<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz offers both welcome bonuses for newcomers and a whole range of promotions for active users. Cashbacks, free spins, and exclusive birthday offers – all of these can significantly boost your winnings. Bonuses are available for both the sports betting section and the casino."}',
             'value_es' => '{"0":"888starz ofrece tanto bonos de bienvenida para nuevos jugadores como una amplia gama de promociones para usuarios activos. Reembolsos, giros gratis y ofertas exclusivas por cumpleaños: todas estas promociones pueden aumentar considerablemente tus ganancias. Los bonos pueden utilizarse tanto en apuestas deportivas como en el casino."}',
             'value_fr' => '{"0":"888starz propose à la fois des bonus de bienvenue pour les nouveaux joueurs et toute une gamme de promotions pour les utilisateurs actifs. Cashback, free spins, offres exclusives pour votre anniversaire – toutes ces options peuvent considérablement augmenter vos gains. Les bonus sont valables à la fois dans la section paris sportifs et dans le casino."}',
             'value_pt' => '{"0":"A 888starz oferece tanto bônus de boas-vindas para novos jogadores quanto uma ampla variedade de promoções para usuários ativos. Cashback, giros grátis e ofertas exclusivas de aniversário — todas essas promoções podem aumentar significativamente seus ganhos. Os bônus podem ser utilizados tanto nas apostas esportivas quanto no cassino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker also provides a welcome bonus for new players. To receive it, you need to use the promo code :promocode from 888starz. We’ll explain how to do it below."}',
             'value_es' => '{"0":"Además, la casa de apuestas ofrece un bono de bienvenida para los nuevos usuarios. Para obtenerlo, debes usar el código promocional :promocode de 888starz. A continuación, te explicamos cómo hacerlo."}',
             'value_fr' => '{"0":"Le bookmaker offre également un bonus de bienvenue aux nouveaux joueurs. Pour en profiter, vous devez utiliser le code promo :promocode de 888starz. Nous vous expliquons comment faire ci-dessous."}',
             'value_pt' => '{"0":"Além disso, a casa de apostas oferece um bônus de boas-vindas para novos jogadores. Para recebê-lo, é necessário usar o código promocional :promocode da 888starz. A seguir, explicamos como fazer isso."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To activate the :promocode promo code on 888starz, simply enter it during the registration process. You can register in several ways. Click the «Register» button in the top panel and choose one of the available methods: by phone number, email, one-click, or via social media. In the registration form, you’ll need to provide basic details, including your country of residence, account currency, and contact information."}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en 888starz, simplemente introdúcelo durante el proceso de registro. Puedes registrarte de varias formas. Haz clic en el botón «Registrarse» en la parte superior de la página y elige uno de los métodos disponibles: por número de teléfono, correo electrónico, con un solo clic o mediante redes sociales. En el formulario de registro deberás proporcionar información básica, como tu país de residencia, la moneda de la cuenta y datos de contacto."}',
             'value_fr' => '{"0":"Pour activer le code promo :promocode sur 888starz, il suffit de le saisir lors de l\'inscription. Vous pouvez vous inscrire de plusieurs manières. Cliquez sur le bouton «S\'inscrire» dans le menu supérieur et choisissez l\'une des options disponibles : par numéro de téléphone, par e-mail, en un clic ou via les réseaux sociaux. Dans le formulaire d\'inscription, vous devrez fournir des informations de base telles que votre pays de résidence, la devise du compte et vos coordonnées."}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode na 888starz, basta inseri-lo durante o processo de registro. Você pode se registrar de várias formas. Clique no botão «Registrar» no topo da página e escolha uma das opções disponíveis: por número de telefone, e-mail, com um clique ou por meio das redes sociais. No formulário de registro, será necessário fornecer informações básicas, como país de residência, moeda da conta e dados de contato."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"During registration, there is a separate field for entering a promo code. By entering :promocode, you automatically activate the corresponding promotional offer, which may include an increased welcome bonus, additional free spins, or cashback. Don’t forget to specify where you want to use the bonus funds — for sports betting or in the casino."}',
             'value_es' => '{"0":"Durante el registro, hay un campo específico para introducir el código promocional. Al ingresar :promocode, activarás automáticamente la oferta correspondiente, que puede incluir un bono de bienvenida mejorado, giros gratis adicionales o cashback. No olvides indicar si deseas usar el bono en apuestas deportivas o en el casino."}',
             'value_fr' => '{"0":"Pendant l\'inscription, un champ spécifique est prévu pour entrer le code promo. En saisissant :promocode, vous activerez automatiquement l\'offre promotionnelle correspondante, qui peut inclure un bonus de bienvenue augmenté, des free spins supplémentaires ou du cashback. N\'oubliez pas de préciser si vous souhaitez utiliser vos fonds bonus pour les paris sportifs ou dans le casino."}',
             'value_pt' => '{"0":"Durante o preenchimento do formulário, há um campo específico para inserir o código promocional. Ao digitar :promocode, a oferta promocional correspondente será ativada automaticamente, podendo incluir aumento do bônus de boas-vindas, giros grátis extras ou cashback. Não se esqueça de indicar se pretende usar os bônus nas apostas esportivas ou no cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"After completing registration, you must verify your email or phone number and make your first deposit to claim the bonuses."}',
             'value_es' => '{"0":"Una vez completado el registro, deberás verificar tu correo electrónico o número de teléfono y realizar tu primer depósito para recibir los bonos."}',
             'value_fr' => '{"0":"Après avoir terminé l\'inscription, vous devrez vérifier votre e-mail ou votre numéro de téléphone et effectuer un premier dépôt pour recevoir les bonus."}',
             'value_pt' => '{"0":"Após finalizar o registro, é necessário confirmar seu e-mail ou telefone e realizar o primeiro depósito para receber os bônus."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 888starz?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 888starz?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 888starz ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 888starz?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz pays great attention to its regular users by offering a range of ongoing and special promotions. These include weekly cashback, Sunday top-up bonuses, birthday gifts, and tournaments with prize pools. Active players can also expect personalized offers sent via email or available in their personal account."}',
             'value_es' => '{"0":"888starz presta gran atención a sus usuarios habituales, ofreciendo una variedad de promociones regulares y especiales. Entre ellas se encuentran los reembolsos semanales, bonos por recargas los domingos, regalos de cumpleaños y torneos con fondos de premios. Los jugadores activos pueden recibir ofertas personalizadas enviadas por correo electrónico o disponibles en su cuenta personal."}',
             'value_fr' => '{"0":"888starz accorde une grande importance à ses utilisateurs réguliers en proposant une série de promotions régulières et spéciales. Cela inclut des cashbacks hebdomadaires, des bonus pour les dépôts du dimanche, des cadeaux d\'anniversaire et des tournois avec des cagnottes. Les joueurs actifs peuvent également recevoir des offres personnalisées par e-mail ou dans leur espace personnel."}',
             'value_pt' => '{"0":"A 888starz dá grande atenção aos seus usuários frequentes, oferecendo uma variedade de promoções regulares e especiais. Entre elas estão cashback semanal, bônus por depósito aos domingos, presentes de aniversário e torneios com prêmios em dinheiro. Jogadores ativos também podem receber ofertas personalizadas enviadas por e-mail ou disponíveis em sua conta pessoal."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For casino players, there is a loyalty program. The more you play, the higher the cashback percentage you can receive."}',
             'value_es' => '{"0":"Para los clientes del casino, existe un programa de fidelidad. Cuanto más juegues, mayor será el porcentaje de reembolso que podrás obtener."}',
             'value_fr' => '{"0":"Pour les clients du casino, un programme de fidélité est prévu. Plus vous jouez, plus le pourcentage de cashback que vous pouvez recevoir est élevé."}',
             'value_pt' => '{"0":"Para os clientes do cassino, existe um programa de fidelidade. Quanto mais você joga, maior será o percentual de cashback que poderá receber."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Currently, there are no such offers. However, no deposit bonuses do appear on 888starz. They may include free spins on slots or small bonuses in the form of risk-free bets."}',
             'value_es' => '{"0":"Actualmente, no hay ofertas de este tipo. Sin embargo, los bonos sin depósito sí aparecen en 888starz. Estos pueden incluir giros gratis en tragamonedas o pequeños bonos en forma de apuestas sin riesgo."}',
             'value_fr' => '{"0":"Actuellement, il n’y a pas de telles offres. Toutefois, des bonus sans dépôt apparaissent parfois sur 888starz. Ils peuvent inclure des tours gratuits sur les machines à sous ou un petit bonus sous forme de paris sans risque."}',
             'value_pt' => '{"0":"Atualmente, não há ofertas desse tipo. No entanto, bônus sem depósito podem aparecer na 888starz. Eles podem incluir rodadas grátis em slots ou pequenos bônus em forma de apostas sem risco."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses often have a limited validity period and come with wagering requirements, so it’s important to read the terms before activating them. If new no deposit offers become available, information about them will appear in the «Promotions» section on the website or will be sent by email."}',
             'value_es' => '{"0":"Los bonos sin depósito suelen tener una vigencia limitada y requisitos de apuesta, por lo que es importante leer los términos antes de activarlos. Si se lanzan nuevas ofertas sin depósito, la información aparecerá en la sección de «Promociones» del sitio web o se enviará por correo electrónico."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sont souvent valables pour une durée limitée et soumis à des conditions de mise, il est donc important de lire les conditions avant de les activer. En cas de nouvelles offres sans dépôt, les informations seront disponibles dans la section «Promotions» du site ou envoyées par e-mail."}',
             'value_pt' => '{"0":"Os bônus sem depósito geralmente têm um prazo de validade limitado e exigências de apostas, por isso é importante ler os termos antes de ativá-los. Caso surjam novas ofertas sem depósito, as informações aparecerão na seção «Promoções» do site ou serão enviadas por e-mail."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package up to 1500 EUR + 150 FS"}',
                'value_es' => '{"0":"Paquete de bienvenida de hasta 1500 EUR + 150 FS"}',
                'value_fr' => '{"0":"Pack de bienvenue jusqu\'à 1500 EUR + 150 FS"}',
                'value_pt' => '{"0":"Pacote de boas-vindas de até 1500 EUR + 150 FS"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The main welcome offer at 888starz is a bonus package for the first four deposits, allowing you to receive up to €1500 and 150 free spins. This is one of the most generous promotions, primarily aimed at casino players. The bonus is credited as follows:"}',
             'value_es' => '{"0":"La oferta de bienvenida principal de 888starz es un paquete de bonificación para los primeros cuatro depósitos, que permite recibir hasta 1500€ y 150 giros gratis. Es una de las promociones más generosas, orientada principalmente a los jugadores de casino. El bono se acredita de la siguiente manera:"}',
             'value_fr' => '{"0":"L’offre de bienvenue principale chez 888starz est un pack de bonus sur les quatre premiers dépôts, permettant de recevoir jusqu’à 1500€ et 150 free spins. Il s’agit de l’une des promotions les plus généreuses, principalement destinée aux joueurs de casino. Le bonus est accordé comme suit :"}',
             'value_pt' => '{"0":"A principal oferta de boas-vindas da 888starz é um pacote de bônus para os quatro primeiros depósitos, permitindo receber até 1500€ e 150 rodadas grátis. Esta é uma das promoções mais generosas, voltada principalmente para jogadores de cassino. O bônus é creditado da seguinte forma:"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list_v2',
             'value_en' => '{"0":"After your first deposit: 100% of the deposit amount, up to €300 + 30 FS",
                             "1":"After your second deposit: 50% of the deposit amount, up to €350 + 35 FS",
                             "2":"After your third deposit: 25% of the deposit amount, up to €400 + 40 FS",
                             "3":"After your fourth deposit: 25% of the deposit amount, up to €450 + 45 FS"}',
             'value_es' => '{"0":"Tras el primer depósito: 100% del importe depositado, hasta 300€ + 30 giros gratis",
                             "1":"Tras el segundo depósito: 50% del importe depositado, hasta 350€ + 35 giros gratis",
                             "2":"Tras el tercer depósito: 25% del importe depositado, hasta 400€ + 40 giros gratis",
                             "3":"Tras el cuarto depósito: 25% del importe depositado, hasta 450€ + 45 giros gratis"}',
             'value_fr' => '{"0":"Après le premier dépôt : 100% du montant déposé, jusqu’à 300€ + 30 tours gratuits",
                             "1":"Après le deuxième dépôt : 50% du montant déposé, jusqu’à 350€ + 35 tours gratuits",
                             "2":"Après le troisième dépôt : 25% du montant déposé, jusqu’à 400€ + 40 tours gratuits",
                             "3":"Après le quatrième dépôt : 25% du montant déposé, jusqu’à 450€ + 45 tours gratuits"}',
             'value_pt' => '{"0":"Após o primeiro depósito: 100% do valor depositado, até 300€ + 30 rodadas grátis",
                             "1":"Após o segundo depósito: 50% do valor depositado, até 350€ + 35 rodadas grátis",
                             "2":"Após o terceiro depósito: 25% do valor depositado, até 400€ + 40 rodadas grátis",
                             "3":"Após o quarto depósito: 25% do valor depositado, até 450€ + 45 rodadas grátis"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To activate each bonus, a corresponding minimum deposit is required. Free spins are credited for specific slots. To withdraw the bonus funds, they must be wagered within 7 days after activation. This requires making 35 winning bets. Bonuses are not credited automatically — the user must activate them manually in their account before making a deposit."}',
             'value_es' => '{"0":"Para activar cada bono, se requiere un depósito mínimo correspondiente. Los giros gratis se acreditan para tragamonedas específicos. Para retirar los fondos del bono, deben apostarse dentro de los 7 días posteriores a la activación. Esto requiere realizar 35 apuestas ganadoras. Los bonos no se acreditan automáticamente: el usuario debe activarlos manualmente en su cuenta antes de realizar un depósito."}',
             'value_fr' => '{"0":"Pour activer chaque bonus, un dépôt minimum correspondant est requis. Les tours gratuits sont crédités pour certaines machines à sous. Pour retirer les fonds bonus, ils doivent être misés dans un délai de 7 jours après l’activation. Cela nécessite de placer 35 paris gagnants. Les bonus ne sont pas crédités automatiquement — l’utilisateur doit les activer manuellement dans son compte avant d’effectuer un dépôt."}',
             'value_pt' => '{"0":"Para ativar cada bônus, é necessário fazer o depósito mínimo correspondente. As rodadas grátis são creditadas para slots específicos. Para sacar os fundos do bônus, é preciso apostar o valor dentro de 7 dias após a ativação. Isso exige realizar 35 apostas vencedoras. Os bônus não são creditados automaticamente — o usuário deve ativá-los manualmente na sua conta antes de fazer o depósito."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sunday Boom"}',
                'value_es' => '{"0":"Domingo explosivo"}',
                'value_fr' => '{"0":"Boum du dimanche"}',
                'value_pt' => '{"0":"Explosão de Domingo"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Every Sunday, 888starz runs the Sunday Boom promotion, offering a deposit bonus. As part of this offer, every registered user can receive 50% of their deposit amount, up to €100, as well as 20 free spins on slots."}',
             'value_es' => '{"0":"Cada domingo, 888starz realiza la promoción Sunday Boom y ofrece un bono por depósito. Como parte de esta oferta, cada usuario registrado puede recibir el 50% del monto depositado, hasta 100€, además de 20 giros gratis en tragamonedas."}',
             'value_fr' => '{"0":"Chaque dimanche, 888starz propose la promotion Sunday Boom avec un bonus sur dépôt. Dans le cadre de cette offre, chaque utilisateur enregistré peut recevoir 50% du montant de son dépôt, jusqu’à 100€, ainsi que 20 tours gratuits sur des machines à sous."}',
             'value_pt' => '{"0":"Todos os domingos, a 888starz realiza a promoção Sunday Boom e oferece um bônus de depósito. Como parte desta oferta, cada usuário registrado pode receber 50% do valor depositado, até 100€, além de 20 rodadas grátis em slots."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The bonus is activated with a Sunday deposit of at least €10. The free spins are valid for 24 hours. To withdraw the bonus funds, players must wager them by making 40 winning bets."}',
             'value_es' => '{"0":"El bono se activa con un depósito dominical de al menos 10€. Los giros gratis son válidos por 24 horas. Para retirar los fondos del bono, deben apostarse realizando 40 apuestas ganadoras."}',
             'value_fr' => '{"0":"Le bonus s’active avec un dépôt effectué le dimanche d’un montant minimum de 10€. Les free spins sont valables pendant 24 heures. Pour pouvoir retirer les gains, les fonds doivent être misés en réalisant 40 paris gagnants."}',
             'value_pt' => '{"0":"O bônus é ativado com um depósito feito no domingo no valor mínimo de 10€. As rodadas grátis são válidas por 24 horas. Para sacar os fundos do bônus, é necessário apostar e realizar 40 apostas vencedoras."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Sunday Boom is a great opportunity for regular casino players to boost their balance before the new week begins."}',
             'value_es' => '{"0":"Sunday Boom es una excelente oportunidad para que los jugadores habituales del casino aumenten su saldo antes de comenzar la nueva semana."}',
             'value_fr' => '{"0":"Sunday Boom est une excellente occasion pour les joueurs réguliers de casino d’augmenter leur solde avant le début de la nouvelle semaine."}',
             'value_pt' => '{"0":"O Sunday Boom é uma ótima oportunidade para jogadores regulares de cassino aumentarem seu saldo antes do início de uma nova semana."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Celebrate your birthday with 888starz"}',
                'value_es' => '{"0":"Celebre su cumpleaños con 888starz"}',
                'value_fr' => '{"0":"Fêtez votre anniversaire avec 888starz"}',
                'value_pt' => '{"0":"Celebre o seu aniversário com a 888starz"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz celebrates users’ birthdays with personalized gifts. To take part in this promotion, you need to enter your birth date in your profile and complete verification no later than 7 days before your birthday."}',
             'value_es' => '{"0":"888starz felicita a sus usuarios en su cumpleaños con regalos personalizados. Para aprovechar esta promoción, debes ingresar tu fecha de nacimiento en el perfil y completar la verificación al menos 7 días antes de la fecha."}',
             'value_fr' => '{"0":"888starz célèbre les anniversaires de ses utilisateurs avec des cadeaux personnalisés. Pour bénéficier de cette promotion, il faut renseigner sa date de naissance dans le profil et compléter la vérification au plus tard 7 jours avant son anniversaire."}',
             'value_pt' => '{"0":"A 888starz comemora o aniversário dos seus usuários com presentes personalizados. Para aproveitar esta promoção, é necessário informar a data de nascimento no perfil e concluir a verificação com pelo menos 7 dias de antecedência."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The gift may include free spins, a deposit bonus, or a risk-free bet. The offer is one-time, but it can be claimed every year."}',
             'value_es' => '{"0":"El regalo puede incluir giros gratis, un bono por depósito o una apuesta sin riesgo. La promoción es válida una vez, pero se renueva cada año."}',
             'value_fr' => '{"0":"Le cadeau peut inclure des free spins, un bonus sur dépôt ou un pari sans risque. L’offre est unique mais renouvelable chaque année."}',
             'value_pt' => '{"0":"O presente pode incluir rodadas grátis, bônus de depósito ou uma aposta sem risco. A promoção é válida uma vez, mas pode ser resgatada anualmente."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes luck turns its back, and a losing streak begins. But there’s no need to worry — 888starz supports you during tough times by offering cashback on lost bets."}',
             'value_es' => '{"0":"A veces la suerte no acompaña y comienzan las rachas de pérdidas. Pero no te preocupes, 888starz te apoya en los momentos difíciles y ofrece reembolso por las apuestas perdidas."}',
             'value_fr' => '{"0":"Il arrive parfois que la chance tourne et qu\'une série de pertes commence. Mais pas de panique — 888starz vous soutient dans les moments difficiles en offrant un cashback sur vos mises perdues."}',
             'value_pt' => '{"0":"Às vezes, a sorte vira e uma sequência de perdas começa. Mas não se preocupe — a 888starz está do seu lado nos momentos difíceis e oferece cashback sobre apostas perdidas."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is specially designed for active casino players and allows you to recover part of your losses. The cashback percentage increases with your player status and can reach up to 11%. Cashback is credited weekly and does not require wagering."}',
             'value_es' => '{"0":"Esta promoción está diseñada especialmente para jugadores activos de casino y permite recuperar parte del dinero perdido. El porcentaje de cashback aumenta según el estatus del jugador y puede alcanzar hasta el 11%. El reembolso se acredita semanalmente y no requiere condiciones de apuesta."}',
             'value_fr' => '{"0":"Cette promotion est spécialement conçue pour les joueurs actifs de casino et permet de récupérer une partie de ses pertes. Le pourcentage de cashback augmente selon le statut du joueur, pouvant atteindre jusqu\'à 11 %. Le cashback est crédité chaque semaine et ne nécessite aucun pari."}',
             'value_pt' => '{"0":"Esta promoção foi criada especialmente para jogadores ativos de cassino e permite recuperar parte do valor perdido. A percentagem de cashback aumenta de acordo com o status do jogador e pode chegar a 11%. O cashback é creditado semanalmente e não exige requisitos de apostas."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 31
            ]
        );
    }
}
