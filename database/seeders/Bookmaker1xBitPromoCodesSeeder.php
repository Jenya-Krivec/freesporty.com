<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit pays special attention not only to traditional welcome bonuses but also to exclusive offers that allow you to increase your winnings and make bets more profitable."}',
             'value_es' => '{"0":"1xBit presta especial atención no solo a los bonos de bienvenida tradicionales, sino también a ofertas exclusivas que permiten aumentar tus ganancias y hacer las apuestas más rentables."}',
             'value_fr' => '{"0":"1xBit accorde une attention particulière non seulement aux bonus de bienvenue traditionnels, mais aussi aux offres exclusives qui permettent d’augmenter vos gains et de rendre les paris plus avantageux."}',
             'value_pt' => '{"0":"A 1xBit dá atenção especial não só aos bónus de boas-vindas tradicionais, mas também a ofertas exclusivas que permitem aumentar os seus ganhos e tornar as apostas mais rentáveis."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at the bonuses available for new and existing players, as well as popular promotions — VIP Cashback and Accumulator of the Day. We will also explain how to use our exclusive promo code :promocode during registration to receive an enhanced welcome bonus of up to 7 BTC and 250 free spins."}',
             'value_es' => '{"0":"En esta reseña, analizaremos detalladamente los bonos disponibles para nuevos y antiguos jugadores, así como las promociones populares — VIP Cashback y Accumulator of the Day. También explicaremos cómo usar nuestro código promocional exclusivo :promocode durante el registro para recibir un bono de bienvenida mejorado de hasta 7 BTC y 250 giros gratis."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons en détail les bonus disponibles pour les nouveaux et anciens joueurs, ainsi que les promotions populaires — VIP Cashback et Accumulator of the Day. Nous expliquerons également comment utiliser notre code promo exclusif :promocode lors de l’inscription pour recevoir un bonus de bienvenue amélioré allant jusqu’à 7 BTC et 250 tours gratuits."}',
             'value_pt' => '{"0":"Nesta análise, iremos detalhar os bónus disponíveis para novos e antigos jogadores, bem como as promoções populares — VIP Cashback e Accumulator of the Day. Também explicaremos como usar o nosso código promocional exclusivo :promocode durante o registo para receber um bónus de boas-vindas melhorado de até 7 BTC e 250 rodadas grátis."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 1xBit promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 1xBit?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 1xBit ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 1xBit?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Registration on 1xBit is very simple. You only need to create a cryptocurrency wallet without the need to provide personal data."}',
             'value_es' => '{"0":"La registración en 1xBit es muy sencilla. Solo necesitas crear una billetera de criptomonedas sin necesidad de proporcionar datos personales."}',
             'value_fr' => '{"0":"L’inscription sur 1xBit est très simple. Il vous suffit de créer un portefeuille de cryptomonnaies sans avoir à fournir de données personnelles."}',
             'value_pt' => '{"0":"O registo na 1xBit é muito simples. Só precisa de criar uma carteira de criptomoedas sem necessidade de fornecer dados pessoais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"First, go to the official 1xBit website and click the «Register» button located in the upper right corner. A registration form will open."}',
             'value_es' => '{"0":"Primero, visita la página oficial de 1xBit y haz clic en el botón «Registrarse» que se encuentra en la esquina superior derecha. Se abrirá un formulario de registro."}',
             'value_fr' => '{"0":"Tout d’abord, rendez-vous sur le site officiel de 1xBit et cliquez sur le bouton «S’inscrire» situé en haut à droite. Un formulaire d’inscription s’ouvrira."}',
             'value_pt' => '{"0":"Primeiro, vá ao site oficial da 1xBit e clique no botão «Registar-se» que está no canto superior direito. Abrirá um formulário de registo."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Enter your email and create a password. Also, don’t forget to enter our promo code :promocode."}',
             'value_es' => '{"0":"Introduce tu correo electrónico y crea una contraseña. Además, no olvides ingresar nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"Entrez votre adresse e-mail et créez un mot de passe. N’oubliez pas non plus de saisir notre code promo :promocode."}',
             'value_pt' => '{"0":"Introduza o seu email e crie uma palavra-passe. Também não se esqueça de inserir o nosso código promocional :promocode."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The promo code must be activated immediately during account creation because it cannot be applied later. Thanks to this, you will receive bonus funds or free spins right after confirming registration and making your first deposit."}',
             'value_es' => '{"0":"El código promocional debe activarse inmediatamente durante la creación de la cuenta, ya que no podrá aplicarse después. Gracias a esto, recibirás fondos de bono o giros gratis justo después de confirmar el registro y hacer tu primer depósito."}',
             'value_fr' => '{"0":"Le code promo doit être activé immédiatement lors de la création du compte, car il ne pourra pas être appliqué ultérieurement. Grâce à cela, vous recevrez des fonds bonus ou des tours gratuits dès la confirmation de l’inscription et le premier dépôt."}',
             'value_pt' => '{"0":"O código promocional deve ser ativado imediatamente durante a criação da conta, pois não poderá ser aplicado mais tarde. Graças a isso, receberá fundos bónus ou rodadas grátis logo após confirmar o registo e fazer o primeiro depósito."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Currently, 1xBit does not offer no-deposit bonuses, and such offers are generally very rare. The bookmaker focuses on cryptocurrency bets, so most promotions are related to deposits. However, from time to time, the bookmaker runs special campaigns where you can receive free spins in the casino."}',
             'value_es' => '{"0":"Actualmente, 1xBit no ofrece bonos sin depósito, y en general, estas ofertas son muy raras. El bookmaker se centra en las apuestas con criptomonedas, por lo que la mayoría de las promociones están relacionadas con depósitos. Sin embargo, de vez en cuando, el bookmaker lanza campañas especiales en las que se pueden obtener giros gratis en el casino."}',
             'value_fr' => '{"0":"Actuellement, 1xBit ne propose pas de bonus sans dépôt, et ces offres sont généralement très rares. Le bookmaker se concentre sur les paris en cryptomonnaies, donc la plupart des promotions sont liées aux dépôts. Cependant, de temps en temps, le bookmaker lance des campagnes spéciales où il est possible d’obtenir des tours gratuits au casino."}',
             'value_pt' => '{"0":"Atualmente, a 1xBit não oferece bónus sem depósito, e essas ofertas são geralmente muito raras. A casa de apostas foca-se em apostas com criptomoedas, por isso a maioria das promoções está relacionada com depósitos. No entanto, de vez em quando, a casa lança campanhas especiais onde pode receber rodadas grátis no casino."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"It is worth closely following the promotions section and news, as no-deposit offers usually have a limited validity period and may require meeting certain wagering conditions."}',
             'value_es' => '{"0":"Vale la pena seguir atentamente la sección de promociones y noticias, ya que las ofertas sin depósito suelen tener un período de validez limitado y pueden requerir cumplir ciertas condiciones de apuesta."}',
             'value_fr' => '{"0":"Il est conseillé de suivre attentivement la section des promotions et les actualités, car les offres sans dépôt ont généralement une durée limitée et peuvent nécessiter de remplir certaines conditions de mise."}',
             'value_pt' => '{"0":"Vale a pena acompanhar atentamente a secção de promoções e notícias, pois as ofertas sem depósito geralmente têm um período de validade limitado e podem exigir o cumprimento de certas condições de apostas."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 1xBit?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 1xBit?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 1xBit ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 1xBit?"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit supports regular customers through ongoing promotions and bonuses. You can expect cashback on bets, deposit bonuses, special offers on certain sporting events, and participation in tournaments."}',
             'value_es' => '{"0":"1xBit apoya a sus clientes habituales mediante promociones y bonos regulares. Puede contar con cashback en las apuestas, bonos de depósito, ofertas especiales en ciertos eventos deportivos y participación en torneos."}',
             'value_fr' => '{"0":"1xBit soutient ses clients réguliers grâce à des promotions et des bonus réguliers. Vous pouvez bénéficier de cashback sur les paris, de bonus sur dépôt, d’offres spéciales sur certains événements sportifs et de la participation à des tournois."}',
             'value_pt' => '{"0":"A 1xBit apoia os clientes regulares com promoções e bónus frequentes. Pode contar com cashback em apostas, bónus de depósito, ofertas especiais em determinados eventos desportivos e participação em torneios."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Below, we will explain some of these in more detail, how they work, whether there are wagering requirements, and what benefits you can gain from using them."}',
             'value_es' => '{"0":"A continuación, explicaremos algunos de ellos con más detalle, cómo funcionan, si tienen requisitos de apuesta y qué beneficios puede obtener al utilizarlos."}',
             'value_fr' => '{"0":"Nous allons vous expliquer ci-dessous certains d’entre eux plus en détail, leur fonctionnement, l’existence éventuelle de conditions de mise et les avantages que vous pouvez en tirer."}',
             'value_pt' => '{"0":"A seguir, explicaremos alguns deles com mais detalhe, como funcionam, se existem condições de aposta e quais os benefícios que pode obter ao utilizá-los."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Cashback"}',
                'value_es' => '{"0":"DEVOLUCIÓN VIP"}',
                'value_fr' => '{"0":"Cashback VIP"}',
                'value_pt' => '{"0":"Cashback VIP"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes a bet doesn’t win, and you lose money. 1xBit has considered such situations and offers a system of cashback for the most active players. The cashback rate depends on the user’s status in the loyalty program and the volume of bets placed, usually ranging from 5% to 15%."}',
             'value_es' => '{"0":"A veces una apuesta no resulta ganadora y pierdes dinero. 1xBit ha pensado en estas situaciones y ofrece un sistema de devolución de parte de las pérdidas para los jugadores más activos. El nivel de cashback depende del estatus del usuario en el programa de lealtad y del volumen de apuestas realizadas, generalmente entre el 5% y el 15%."}',
             'value_fr' => '{"0":"Parfois, un pari ne passe pas et vous perdez de l’argent. 1xBit a pensé à ces situations et propose un système de cashback pour les joueurs les plus actifs. Le taux de cashback dépend du statut de l’utilisateur dans le programme de fidélité et du volume des mises effectuées, généralement entre 5 % et 15 %."}',
             'value_pt' => '{"0":"Às vezes, uma aposta não resulta e você perde dinheiro. A 1xBit pensou nessas situações e oferece um sistema de cashback para os jogadores mais ativos. A taxa de cashback depende do status do usuário no programa de fidelidade e do volume de apostas feitas, geralmente entre 5% e 15%."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Every week, players receive a percentage of their lost amounts back, which helps minimize risks and partially compensate for unfavorable results. Importantly, this cashback is credited without wagering requirements and is available for withdrawal at any time."}',
             'value_es' => '{"0":"Cada semana, los jugadores reciben un porcentaje de las cantidades perdidas, lo que ayuda a minimizar riesgos y compensar parcialmente los resultados desfavorables. Es importante que este cashback se acredita sin requisitos de apuesta y está disponible para retirar en cualquier momento."}',
             'value_fr' => '{"0":"Chaque semaine, les joueurs reçoivent un pourcentage de leurs pertes, ce qui permet de minimiser les risques et de compenser partiellement les résultats défavorables. Il est important de noter que ce cashback est crédité sans conditions de mise et peut être retiré à tout moment."}',
             'value_pt' => '{"0":"Todas as semanas, os jogadores recebem uma porcentagem dos valores perdidos, o que ajuda a minimizar riscos e a compensar parcialmente os resultados desfavoráveis. É importante que este cashback seja creditado sem requisitos de apostas e esteja disponível para levantamento a qualquer momento."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This is a special offer for fans of accumulator bets. Every day, 1xBit selects a popular accumulator consisting of several sporting events, which is offered with increased odds or an additional bonus to the winnings."}',
             'value_es' => '{"0":"Esta es una oferta especial para los amantes de las apuestas acumuladoras. Cada día, 1xBit selecciona un acumulador popular compuesto por varios eventos deportivos, al que se le ofrecen cuotas aumentadas o un bono adicional sobre las ganancias."}',
             'value_fr' => '{"0":"C’est une offre spéciale pour les amateurs de paris combinés. Chaque jour, 1xBit sélectionne un combiné populaire composé de plusieurs événements sportifs, auquel s’ajoutent des cotes majorées ou un bonus supplémentaire sur les gains."}',
             'value_pt' => '{"0":"Esta é uma oferta especial para os fãs de apostas acumuladoras. Todos os dias, a 1xBit seleciona um acumulador popular composto por vários eventos desportivos, que oferece odds aumentadas ou um bónus adicional sobre os ganhos."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To take advantage of this promotion, you need to place a bet on the suggested accumulator with a set minimum amount. This allows you to increase your potential winnings and get an extra incentive for active play."}',
             'value_es' => '{"0":"Para aprovechar esta promoción, debes realizar una apuesta en el acumulador sugerido con una cantidad mínima establecida. Esto te permite aumentar tus posibles ganancias y obtener un incentivo adicional para jugar activamente."}',
             'value_fr' => '{"0":"Pour profiter de cette promotion, vous devez placer une mise sur le combiné proposé avec un montant minimum fixé. Cela vous permet d’augmenter vos gains potentiels et d’obtenir une incitation supplémentaire à jouer activement."}',
             'value_pt' => '{"0":"Para aproveitar esta promoção, deve fazer uma aposta no acumulador sugerido com um valor mínimo definido. Isto permite aumentar os seus ganhos potenciais e obter um incentivo extra para jogar ativamente."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that the bonus or increased winnings from this promotion are available for withdrawal immediately after being credited, with no additional wagering requirements."}',
             'value_es' => '{"0":"También cabe destacar que el bono o las ganancias aumentadas de esta promoción están disponibles para retiro inmediatamente después de ser acreditadas, sin requisitos adicionales de apuesta."}',
             'value_fr' => '{"0":"Il convient également de noter que le bonus ou les gains majorés de cette promotion sont disponibles pour retrait immédiatement après leur crédit, sans conditions de mise supplémentaires."}',
             'value_pt' => '{"0":"Também vale a pena notar que o bónus ou os ganhos aumentados desta promoção estão disponíveis para levantamento imediatamente após serem creditados, sem requisitos adicionais de apostas."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
    }
}
