<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is an international bookmaker known not only for its wide range of sports events but also for its generous bonus offers for both new and regular customers. Promo codes, promotions, and regular bonuses play a key role in its reward system."}',
             'value_es' => '{"0":"22BET es una casa de apuestas internacional conocida no solo por su amplia oferta de eventos deportivos, sino también por sus atractivas promociones para nuevos y antiguos usuarios. Los códigos promocionales, las ofertas y los bonos regulares ocupan un lugar importante en su sistema de recompensas."}',
             'value_fr' => '{"0":"22BET est un bookmaker international réputé non seulement pour son large choix d’événements sportifs, mais aussi pour ses offres de bonus avantageuses destinées aux nouveaux comme aux anciens clients. Les codes promo, les promotions et les bonus réguliers occupent une place centrale dans son système de récompenses."}',
             'value_pt' => '{"0":"A 22BET é uma casa de apostas internacional conhecida não apenas pela ampla variedade de eventos esportivos, mas também pelas ofertas de bônus atrativas para novos e antigos clientes. Códigos promocionais, promoções e bônus regulares desempenham um papel importante no seu sistema de recompensas."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"By using our exclusive promo code :promocode, you can significantly increase your starting balance. We recommend checking out practical tips on how to claim an enhanced welcome bonus from 22BET during registration."}',
             'value_es' => '{"0":"Con nuestro código promocional exclusivo :promocode, puedes aumentar considerablemente tu capital inicial. Te recomendamos revisar nuestros consejos prácticos para obtener un bono de bienvenida mejorado de 22BET al registrarte."}',
             'value_fr' => '{"0":"Grâce à notre code promo exclusif :promocode, vous pouvez augmenter considérablement votre capital de départ. Nous vous conseillons de consulter nos conseils pratiques pour obtenir un bonus de bienvenue amélioré lors de l’inscription sur 22BET."}',
             'value_pt' => '{"0":"Com o nosso código promocional exclusivo :promocode, você pode aumentar significativamente seu saldo inicial. Recomendamos conferir dicas práticas para garantir um bônus de boas-vindas melhorado ao se registrar na 22BET."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 22BET promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 22BET?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 22BET ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 22BET?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Registration at 22BET won’t take much of your time. During the account creation process, new users can enter the promo code :promocode in the designated field of the registration form to receive a 100% bonus."}',
             'value_es' => '{"0":"Registrarse en 22BET no te llevará mucho tiempo. Durante el proceso de creación de la cuenta, los nuevos usuarios pueden introducir el código promocional :promocode en el campo correspondiente del formulario de registro para recibir un bono del 100%."}',
             'value_fr' => '{"0":"L’inscription sur 22BET ne vous prendra que quelques minutes. Lors de la création du compte, les nouveaux utilisateurs peuvent saisir le code promo :promocode dans le champ prévu à cet effet dans le formulaire d’inscription afin de recevoir un bonus de 100 %."}',
             'value_pt' => '{"0":"O registro na 22BET não vai tomar muito do seu tempo. Durante a criação da conta, os novos usuários podem inserir o código promocional :promocode no campo apropriado do formulário de registro para receber um bônus de 100%."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code, simply:"}',
             'value_es' => '{"0":"Para utilizar el código promocional, simplemente:"}',
             'value_fr' => '{"0":"Pour utiliser le code promo, il suffit de :"}',
             'value_pt' => '{"0":"Para usar o código promocional, basta:"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 22BET website."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de 22BET."}',
             'value_fr' => '{"0":"1. Allez sur le site officiel de 22BET."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 22BET."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"2. Click the registration button. A registration form will appear. You can choose one of the methods: register via email, phone number, or social networks."}',
             'value_es' => '{"0":"2. Haz clic en el botón de registro. Aparecerá un formulario de registro. Puedes elegir uno de los métodos: registrarte por correo electrónico, número de teléfono o redes sociales."}',
             'value_fr' => '{"0":"2. Cliquez sur le bouton d’inscription. Un formulaire d’inscription apparaîtra. Vous pouvez choisir l’un des modes : par e-mail, numéro de téléphone ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"2. Clique no botão de registro. Um formulário de registro será exibido. Você pode escolher uma das opções: registrar-se por e-mail, número de telefone ou redes sociais."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"3. Enter all the required information. Please note that it’s better to provide accurate details, as they may be verified later with your ID or passport."}',
             'value_es' => '{"0":"3. Introduce todos los datos requeridos. Ten en cuenta que es mejor proporcionar datos reales, ya que podrían solicitar verificación con tu pasaporte más adelante."}',
             'value_fr' => '{"0":"3. Entrez toutes les informations requises. Notez qu’il est préférable de fournir des informations exactes, car elles pourraient être vérifiées ultérieurement avec votre passeport."}',
             'value_pt' => '{"0":"3. Insira todas as informações necessárias. É recomendável fornecer dados reais, pois eles podem ser solicitados para verificação com seu passaporte no futuro."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"4. Enter the promo code :promocode in the appropriate field."}',
             'value_es' => '{"0":"4. Introduce el código promocional :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"4. Saisissez le code promo :promocode dans le champ prévu à cet effet."}',
             'value_pt' => '{"0":"4. Insira o código promocional :promocode no campo apropriado."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"5. On the left side, don’t forget to choose where you want to use your bonus funds — in the casino or for sports betting."}',
             'value_es' => '{"0":"5. A la izquierda, no olvides seleccionar si quieres utilizar los fondos del bono en el casino o para apuestas deportivas."}',
             'value_fr' => '{"0":"5. Sur la gauche, n’oubliez pas de choisir si vous souhaitez utiliser le bonus dans le casino ou pour les paris sportifs."}',
             'value_pt' => '{"0":"5. À esquerda, não se esqueça de escolher onde deseja usar os fundos do bônus — no cassino ou em apostas esportivas."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"That\'s it! Now all you need to do is make your first deposit, and the enhanced bonus will appear in your bonus account. Keep in mind: the larger your first deposit, the more bonus funds you can receive."}',
             'value_es' => '{"0":"¡Eso es todo! Ahora solo necesitas hacer tu primer depósito, y el bono mejorado aparecerá en tu cuenta de bonificación. Ten en cuenta que cuanto mayor sea tu primer depósito, más bonos podrás obtener."}',
             'value_fr' => '{"0":"Et voilà ! Il ne vous reste plus qu’à effectuer votre premier dépôt, et le bonus amélioré apparaîtra sur votre compte bonus. Notez que plus votre premier dépôt est élevé, plus vous recevrez de bonus."}',
             'value_pt' => '{"0":"É isso! Agora, você só precisa fazer o seu primeiro depósito, e o bônus aprimorado aparecerá na sua conta de bônus. Lembre-se: quanto maior for o seu primeiro depósito, mais bônus você poderá receber."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 22BET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 22BET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 22BET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 22BET?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET regularly offers bonuses and promotions for active players. Regular users can benefit from cashback, boosted odds, special bonuses for specific sports or events, and a variety of seasonal offers."}',
             'value_es' => '{"0":"Sí, 22BET ofrece regularmente bonificaciones y promociones para jugadores activos. Los usuarios habituales pueden beneficiarse de reembolsos, cuotas mejoradas, bonificaciones especiales en deportes o eventos específicos y diversas promociones de temporada."}',
             'value_fr' => '{"0":"Oui, 22BET propose régulièrement des bonus et des promotions pour les joueurs actifs. Les utilisateurs réguliers peuvent profiter de cashback, de cotes boostées, de bonus spéciaux sur certains sports ou événements, ainsi que de diverses offres saisonnières."}',
             'value_pt' => '{"0":"Sim, a 22BET oferece regularmente bônus e promoções para jogadores ativos. Usuários frequentes podem aproveitar cashback, odds aumentadas, bônus especiais para determinados esportes ou eventos e várias promoções sazonais."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In addition, there is a loyalty program that allows you to earn points for your bets and exchange them for bonuses or free spins in the casino."}',
             'value_es' => '{"0":"Además, existe un programa de fidelidad que permite acumular puntos por tus apuestas y canjearlos por bonos o giros gratis en el casino."}',
             'value_fr' => '{"0":"De plus, un programme de fidélité permet de gagner des points à chaque pari et de les échanger contre des bonus ou des free spins au casino."}',
             'value_pt' => '{"0":"Além disso, há um programa de fidelidade que permite acumular pontos por apostas e trocá-los por bônus ou rodadas grátis no cassino."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Currently, 22BET does not offer no-deposit bonuses. However, the bookmaker occasionally runs promotions with no-deposit rewards or free spins, allowing you to win without making a deposit."}',
             'value_es' => '{"0":"Actualmente, 22BET no ofrece bonos sin depósito. Sin embargo, ocasionalmente la casa de apuestas lanza promociones con premios sin depósito o giros gratis que permiten ganar sin necesidad de hacer un ingreso."}',
             'value_fr' => '{"0":"Actuellement, 22BET ne propose pas de bonus sans dépôt. Toutefois, le bookmaker organise parfois des promotions avec des récompenses sans dépôt ou des free spins, permettant de gagner sans effectuer de dépôt."}',
             'value_pt' => '{"0":"Atualmente, a 22BET não oferece bônus sem depósito. No entanto, a casa de apostas ocasionalmente realiza promoções com prêmios sem depósito ou rodadas grátis, permitindo ganhar sem fazer um depósito."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"These offers are available for a limited time and can be activated through special promo codes or by participating in contests. We recommend checking our website regularly so you don’t miss out on such promotions."}',
             'value_es' => '{"0":"Estas ofertas están disponibles por tiempo limitado y se activan mediante códigos promocionales especiales o participando en concursos. Te recomendamos seguir las actualizaciones en nuestro sitio web para no perderte estas promociones."}',
             'value_fr' => '{"0":"Ces offres sont valables pour une durée limitée et s’activent via des codes promotionnels spéciaux ou en participant à des concours. Nous vous conseillons de suivre les mises à jour sur notre site afin de ne pas manquer ces offres."}',
             'value_pt' => '{"0":"Essas ofertas têm duração limitada e são ativadas por meio de códigos promocionais especiais ou participação em concursos. Recomendamos acompanhar as atualizações em nosso site para não perder essas promoções."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Rebate Bonus"}',
                'value_es' => '{"0":"Bono de Recuperación"}',
                'value_fr' => '{"0":"Bonus de remise"}',
                'value_pt' => '{"0":"Bónus de Rebate"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This is a cashback program from 22BET that returns a portion of lost funds to users. The percentage of the refund depends on the player’s activity and the type of bets."}',
             'value_es' => '{"0":"Este es un programa de reembolso de 22BET que devuelve una parte del dinero perdido a los usuarios. El porcentaje de devolución depende de la actividad del jugador y del tipo de apuestas."}',
             'value_fr' => '{"0":"Il s’agit d’un programme de cashback proposé par 22BET qui restitue une partie des fonds perdus aux utilisateurs. Le pourcentage de remboursement dépend de l’activité du joueur et du type de paris."}',
             'value_pt' => '{"0":"Este é um programa de reembolso da 22BET que devolve uma parte dos fundos perdidos aos usuários. A porcentagem do reembolso depende da atividade do jogador e do tipo de apostas."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is automatically credited to the player’s account, allowing them to minimize losses and continue playing with additional capital."}',
             'value_es' => '{"0":"El reembolso se acredita automáticamente en la cuenta del jugador, lo que permite minimizar las pérdidas y seguir jugando con capital adicional."}',
             'value_fr' => '{"0":"Le cashback est automatiquement crédité sur le compte du joueur, ce qui permet de réduire les pertes et de continuer à jouer avec un capital supplémentaire."}',
             'value_pt' => '{"0":"O cashback é creditado automaticamente na conta do jogador, permitindo minimizar as perdas e continuar jogando com capital extra."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Wednesday Cash Splash"}',
                'value_es' => '{"0":"¡Cash Splash los miércoles!"}',
                'value_fr' => '{"0":"Mercredi Cash Splash !"}',
                'value_pt' => '{"0":"Cash Splash de quarta-feira!"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This promotion offers users the chance to win extra money simply by being active on Wednesday. To participate, you need to place bets for a certain amount on Wednesday, after which you become eligible for cashback, bonuses, or gifts such as free spins. To qualify for the prize pool, you must place sports bets with a minimum stake of €5."}',
             'value_es' => '{"0":"Esta promoción ofrece a los usuarios la oportunidad de ganar dinero extra simplemente por estar activos los miércoles. Para participar, debes realizar apuestas por una cierta cantidad el miércoles, tras lo cual puedes optar a reembolsos, bonos o premios como giros gratis. Para calificar para los premios, debes realizar apuestas deportivas con una cantidad mínima de €5."}',
             'value_fr' => '{"0":"Cette promotion offre aux utilisateurs la possibilité de gagner de l\'argent supplémentaire simplement en étant actifs le mercredi. Pour participer, il faut placer des paris pour un certain montant le mercredi, après quoi vous pouvez prétendre à du cashback, des bonus ou des cadeaux tels que des free spins. Pour être éligible aux récompenses, vous devez effectuer des paris sportifs d’un montant minimum de 5 €."}',
             'value_pt' => '{"0":"Esta promoção oferece aos usuários a chance de ganhar dinheiro extra apenas por estarem ativos às quartas-feiras. Para participar, é necessário fazer apostas de um determinado valor na quarta-feira, após o que você poderá se qualificar para cashback, bônus ou prêmios como rodadas grátis. Para entrar na lista de premiados, é preciso apostar no mínimo €5 em esportes."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses received under the Wednesday Cash Splash promotion are subject to wagering requirements before withdrawal. You need to wager the bonus amount 5x or 10x with minimum odds of 1.40 or 1.50."}',
             'value_es' => '{"0":"Los bonos obtenidos en el marco de Wednesday Cash Splash están sujetos a requisitos de apuesta antes de poder retirarlos. Es necesario apostar el monto del bono 5x o 10x con cuotas mínimas de 1.40 o 1.50."}',
             'value_fr' => '{"0":"Les bonus obtenus dans le cadre de l’offre Wednesday Cash Splash sont soumis à des conditions de mise avant retrait. Il faut miser le montant du bonus 5x ou 10x avec des cotes minimales de 1.40 ou 1.50."}',
             'value_pt' => '{"0":"Os bônus recebidos na promoção Wednesday Cash Splash estão sujeitos a requisitos de apostas antes de poderem ser sacados. É necessário apostar o valor do bônus 5x ou 10x com odds mínimas de 1.40 ou 1.50."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Bet Booster"}',
                'value_es' => '{"0":"Bet Booster"}',
                'value_fr' => '{"0":"Bet Booster"}',
                'value_pt' => '{"0":"Bet Booster"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Bet Booster is a special offer that allows you to increase odds on selected events or markets. Thanks to this promotion, players can boost their potential winnings without additional risks."}',
             'value_es' => '{"0":"Bet Booster es una oferta especial que permite aumentar las cuotas en eventos o mercados seleccionados. Gracias a esta promoción, los jugadores pueden incrementar sus ganancias potenciales sin riesgos adicionales."}',
             'value_fr' => '{"0":"Bet Booster est une offre spéciale qui permet d’augmenter les cotes sur des événements ou marchés sélectionnés. Grâce à cette promotion, les joueurs peuvent augmenter leurs gains potentiels sans risques supplémentaires."}',
             'value_pt' => '{"0":"Bet Booster é uma oferta especial que permite aumentar as odds em eventos ou mercados selecionados. Graças a esta promoção, os jogadores podem aumentar seus ganhos potenciais sem riscos adicionais."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The promotion is often applied to popular sports or matches and is available for both new and regular users."}',
             'value_es' => '{"0":"La promoción suele aplicarse a deportes o partidos populares y está disponible tanto para usuarios nuevos como para habituales."}',
             'value_fr' => '{"0":"L’offre s’applique souvent aux sports ou matchs populaires et est disponible pour les nouveaux comme pour les utilisateurs réguliers."}',
             'value_pt' => '{"0":"A promoção é frequentemente aplicada a esportes ou jogos populares e está disponível tanto para novos quanto para usuários regulares."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"All you need to do is choose one of the offered accumulators and place a bet on it. The odds will already be increased; no additional promo code or activation is required. After a successful bet, the winnings including the bonus are credited immediately to your account."}',
             'value_es' => '{"0":"Solo tienes que elegir uno de los acumuladores ofrecidos y hacer tu apuesta. Las cuotas ya estarán aumentadas; no se requiere código promocional ni activación adicional. Tras una apuesta exitosa, la ganancia con el bono se acreditará inmediatamente en tu cuenta."}',
             'value_fr' => '{"0":"Il vous suffit de choisir l’un des accumulateurs proposés et de placer votre pari. Les cotes sont déjà augmentées, aucun code promo ou activation supplémentaire n’est nécessaire. Après un pari réussi, le gain avec le bonus est crédité immédiatement sur votre compte."}',
             'value_pt' => '{"0":"Basta escolher um dos acumuladores oferecidos e fazer sua aposta. As odds já estarão aumentadas; nenhum código promocional ou ativação adicional é necessário. Após uma aposta bem-sucedida, o valor do prêmio com o bônus é creditado imediatamente na sua conta."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 31
            ]
        );
    }
}
