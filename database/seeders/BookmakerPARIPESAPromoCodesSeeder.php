<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers a variety of promotions aimed at supporting players, encouraging their activity, and providing additional opportunities to increase winnings. Special attention is given to promo codes that allow you to get favorable conditions during registration or on subsequent bets."}',
             'value_es' => '{"0":"PARIPESA ofrece diversas promociones destinadas a apoyar a los jugadores, fomentar su actividad y brindar oportunidades adicionales para aumentar las ganancias. Se presta especial atención a los códigos promocionales que permiten obtener condiciones favorables durante el registro o en apuestas posteriores."}',
             'value_fr' => '{"0":"PARIPESA propose une variété de promotions visant à soutenir les joueurs, encourager leur activité et offrir des opportunités supplémentaires d’augmenter leurs gains. Une attention particulière est accordée aux codes promo qui permettent d’obtenir des conditions avantageuses lors de l’inscription ou pour les paris suivants."}',
             'value_pt' => '{"0":"PARIPESA oferece diversas promoções destinadas a apoiar os jogadores, incentivar sua atividade e proporcionar oportunidades adicionais para aumentar os ganhos. Atenção especial é dada aos códigos promocionais que permitem obter condições vantajosas durante o registro ou em apostas subsequentes."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will look at the main bonuses available on the platform and explain in detail how to use the exclusive PARIPESA promo code :promocode."}',
             'value_es' => '{"0":"En esta reseña analizaremos los principales bonos disponibles en la plataforma y explicaremos detalladamente cómo utilizar el código promocional exclusivo de PARIPESA :promocode."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons les principaux bonus disponibles sur la plateforme et expliquerons en détail comment utiliser le code promo exclusif PARIPESA :promocode."}',
             'value_pt' => '{"0":"Nesta análise, vamos examinar os principais bônus disponíveis na plataforma e explicar detalhadamente como usar o código promocional exclusivo PARIPESA :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the PARIPESA promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de PARIPESA?"}',
                'value_fr' => '{"0":"Comment profiter du code promo PARIPESA ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da PARIPESA?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To activate the promo code during registration, you need to enter the special code :promocode in the appropriate field of the registration form while creating your account. The registration process on PARIPESA is standard: you need to provide basic information such as email, password, country of residence, and currency. Entering the promo code guarantees the activation of the bonus offer to increase your welcome bonus."}',
             'value_es' => '{"0":"Para activar el código promocional durante el registro, debes ingresar el código especial :promocode en el campo correspondiente del formulario de registro al crear tu cuenta. El proceso de registro en PARIPESA es estándar: debes proporcionar información básica como correo electrónico, contraseña, país de residencia y moneda. Ingresar el código promocional garantiza la activación de la oferta de bono para aumentar tu bono de bienvenida."}',
             'value_fr' => '{"0":"Pour activer le code promo lors de l’inscription, vous devez saisir le code spécial :promocode dans le champ approprié du formulaire d’inscription lors de la création de votre compte. Le processus d’inscription sur PARIPESA est standard : vous devez fournir des informations de base telles que l’e-mail, le mot de passe, le pays de résidence et la devise. La saisie du code promo garantit l’activation de l’offre de bonus pour augmenter votre bonus de bienvenue."}',
             'value_pt' => '{"0":"Para ativar o código promocional durante o registro, você precisa inserir o código especial :promocode no campo apropriado do formulário de registro ao criar sua conta. O processo de registro na PARIPESA é padrão: você deve fornecer informações básicas como e-mail, senha, país de residência e moeda. Inserir o código promocional garante a ativação da oferta de bônus para aumentar seu bônus de boas-vindas."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"After completing registration and confirming your account via email, you will be able to activate the enhanced welcome bonus."}',
             'value_es' => '{"0":"Después de completar el registro y confirmar tu cuenta por correo electrónico, podrás activar el bono de bienvenida mejorado."}',
             'value_fr' => '{"0":"Après avoir terminé l’inscription et confirmé votre compte par e-mail, vous pourrez activer le bonus de bienvenue amélioré."}',
             'value_pt' => '{"0":"Após concluir o registro e confirmar sua conta por e-mail, você poderá ativar o bônus de boas-vindas aprimorado."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MelBet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA regularly launches promotions for existing users as well. These can include cashback programs and special deposit bonuses. Additionally, there are promotions that offer increased winnings on specific sports events or in the casino."}',
             'value_es' => '{"0":"PARIPESA lanza regularmente promociones también para usuarios habituales. Estas pueden incluir programas de cashback y bonos especiales para depósitos. Además, existen promociones que permiten obtener mayores ganancias en eventos deportivos específicos o en el casino."}',
             'value_fr' => '{"0":"PARIPESA lance régulièrement des promotions également pour les utilisateurs réguliers. Celles-ci peuvent inclure des programmes de cashback et des bonus de dépôt spéciaux. De plus, il existe des promotions offrant des gains augmentés sur certains événements sportifs ou au casino."}',
             'value_pt' => '{"0":"A PARIPESA lança regularmente promoções também para usuários frequentes. Estas podem incluir programas de cashback e bônus especiais para depósitos. Além disso, existem promoções que oferecem ganhos aumentados em eventos esportivos específicos ou no cassino."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Regular customers can use special promo codes that provide extra benefits or enhanced odds. To receive such bonuses, it is recommended to subscribe to PARIPESA’s newsletter and follow updates on the official website or in the app."}',
             'value_es' => '{"0":"Los clientes habituales pueden utilizar códigos promocionales especiales que ofrecen beneficios adicionales o cuotas mejoradas. Para recibir estos bonos, se recomienda suscribirse al boletín de PARIPESA y seguir las novedades en el sitio web oficial o en la aplicación."}',
             'value_fr' => '{"0":"Les clients réguliers peuvent utiliser des codes promo spéciaux qui offrent des avantages supplémentaires ou des cotes améliorées. Pour recevoir ces bonus, il est recommandé de s’abonner à la newsletter de PARIPESA et de suivre les actualités sur le site officiel ou dans l’application."}',
             'value_pt' => '{"0":"Clientes frequentes podem usar códigos promocionais especiais que oferecem benefícios extras ou odds melhoradas. Para receber esses bônus, recomenda-se assinar o boletim informativo da PARIPESA e acompanhar as novidades no site oficial ou no aplicativo."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, PARIPESA does not offer classic no deposit bonuses that provide funds or free bets without making a deposit. However, temporary promotions occasionally appear where you can receive such rewards."}',
             'value_es' => '{"0":"En el momento de esta reseña, PARIPESA no ofrece bonos clásicos sin depósito que otorguen fondos o apuestas gratis sin realizar un depósito. Sin embargo, ocasionalmente pueden aparecer promociones temporales donde puedes recibir estas recompensas."}',
             'value_fr' => '{"0":"Au moment de cette revue, PARIPESA ne propose pas de bonus classiques sans dépôt qui offrent des fonds ou des paris gratuits sans effectuer de dépôt. Cependant, des promotions temporaires peuvent parfois apparaître où vous pouvez recevoir de telles récompenses."}',
             'value_pt' => '{"0":"No momento desta análise, a PARIPESA não oferece bônus clássicos sem depósito que concedem fundos ou apostas grátis sem fazer um depósito. No entanto, promoções temporárias podem surgir ocasionalmente onde você pode receber essas recompensas."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package"}',
                'value_es' => '{"0":"Paquete de bienvenida"}',
                'value_fr' => '{"0":"Pack de bienvenue"}',
                'value_pt' => '{"0":"Pacote de boas-vindas"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This is a comprehensive welcome bonus that includes several stages of rewards. The first deposit in a newly created account is accompanied by the crediting of bonus funds — usually a certain percentage of the deposit amount, for example, a 100% bonus on the first deposit. In addition to bonus money, free bets or free spins for the casino may be granted."}',
             'value_es' => '{"0":"Este es un bono de bienvenida completo que incluye varias etapas de recompensas. El primer depósito en una cuenta recién creada va acompañado del acreditamiento de fondos de bonificación, generalmente un cierto porcentaje del importe del depósito, por ejemplo, un bono del 100 % sobre el primer depósito. Además del dinero del bono, se pueden otorgar apuestas gratuitas o giros gratis para el casino."}',
             'value_fr' => '{"0":"Il s’agit d’un bonus de bienvenue complet qui comprend plusieurs étapes de récompenses. Le premier dépôt sur un compte nouvellement créé est accompagné du crédit de fonds bonus — généralement un certain pourcentage du montant du dépôt, par exemple un bonus de 100 % sur le premier dépôt. En plus de l’argent bonus, des paris gratuits ou des tours gratuits pour le casino peuvent être accordés."}',
             'value_pt' => '{"0":"Este é um bônus de boas-vindas abrangente que inclui várias etapas de recompensas. O primeiro depósito em uma conta recém-criada é acompanhado pelo crédito de fundos bônus — geralmente uma certa porcentagem do valor do depósito, por exemplo, um bônus de 100% no primeiro depósito. Além do dinheiro bônus, podem ser concedidas apostas grátis ou giros grátis para o cassino."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw the bonus, wagering requirements must be met. The bonus must be wagered on bets with odds of at least 1.80–1.90. The total amount of bets must be at least 5 times the bonus amount. The bonus must be wagered within 14 days after activation. If this period is missed, the bonus and all winnings from it are forfeited. The bonus wagering can only be done on pre-match or live sports bets."}',
             'value_es' => '{"0":"Para poder retirar el bono, se deben cumplir los requisitos de apuesta. El bono debe apostarse en apuestas con cuotas de al menos 1,80–1,90. La cantidad total de apuestas debe ser al menos 5 veces el importe del bono. El bono debe apostarse dentro de los 14 días posteriores a la activación. Si se pierde este plazo, el bono y todas las ganancias derivadas se perderán. El bono solo se puede apostar en apuestas deportivas pre-partido o en vivo."}',
             'value_fr' => '{"0":"Pour pouvoir retirer le bonus, il faut remplir les conditions de mise. Le bonus doit être misé sur des paris avec des cotes d’au moins 1,80–1,90. Le montant total des mises doit être au moins 5 fois le montant du bonus. Le bonus doit être misé dans les 14 jours suivant son activation. Si ce délai est dépassé, le bonus et tous les gains qui en découlent sont annulés. Le pari du bonus ne peut être effectué que sur des paris sportifs pré-match ou en direct."}',
             'value_pt' => '{"0":"Para poder sacar o bônus, é necessário cumprir os requisitos de aposta. O bônus deve ser apostado em apostas com odds de pelo menos 1,80–1,90. O valor total das apostas deve ser pelo menos 5 vezes o valor do bônus. O bônus deve ser apostado dentro de 14 dias após a ativação. Se esse prazo for perdido, o bônus e todos os ganhos dele resultantes serão anulados. A aposta do bônus só pode ser feita em apostas esportivas pré-jogo ou ao vivo."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Bonus"}',
                'value_es' => '{"0":"BONO DE COMBINADA"}',
                'value_fr' => '{"0":"BONUS COMBINÉ"}',
                'value_pt' => '{"0":"BÓNUS DE ACUMULADOR"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This bonus applies to accumulator bets on multiple events simultaneously. PARIPESA provides an additional percentage of profit when an accumulator consisting of three events wins."}',
             'value_es' => '{"0":"Este bono se aplica a las apuestas acumuladoras en varios eventos simultáneamente. PARIPESA ofrece un porcentaje adicional de ganancia cuando una acumuladora compuesta por tres eventos gana."}',
             'value_fr' => '{"0":"Ce bonus s’applique aux paris combinés sur plusieurs événements simultanément. PARIPESA offre un pourcentage supplémentaire de gain lorsqu’un combiné composé de trois événements est gagnant."}',
             'value_pt' => '{"0":"Este bônus se aplica a apostas acumuladoras em vários eventos simultaneamente. A PARIPESA oferece uma porcentagem adicional de lucro quando uma acumuladora composta por três eventos vence."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The size of the bonus depends on the number of events in the bet: the more events, the higher the percentage increase to the winnings. This promotion is designed especially for players who like to take risks and want to increase their potential winnings."}',
             'value_es' => '{"0":"El tamaño del bono depende de la cantidad de eventos en la apuesta: cuantos más eventos, mayor es el porcentaje de aumento en las ganancias. Esta promoción está diseñada especialmente para jugadores que les gusta arriesgar y quieren aumentar sus posibles ganancias."}',
             'value_fr' => '{"0":"La taille du bonus dépend du nombre d’événements dans le pari : plus il y a d’événements, plus le pourcentage ajouté aux gains est élevé. Cette promotion est spécialement conçue pour les joueurs qui aiment prendre des risques et souhaitent augmenter leurs gains potentiels."}',
             'value_pt' => '{"0":"O valor do bônus depende do número de eventos na aposta: quanto mais eventos, maior a porcentagem de acréscimo ao ganho. Esta promoção é especialmente feita para jogadores que gostam de arriscar e desejam aumentar seus ganhos potenciais."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To activate the bonus, the bet must include at least 3 events, each with a minimum odds of 1.40. The bonus percentage depends on the number of events in the combination. For example, for 3 events, it is +5% to the winnings; for 4 events — +7%; for 5 events — +10%; for 6 or more — from 12%."}',
             'value_es' => '{"0":"Para activar el bono, la apuesta debe incluir al menos 3 eventos, cada uno con una cuota mínima de 1.40. El porcentaje del bono depende de la cantidad de eventos en la combinación. Por ejemplo, para 3 eventos, es +5% a las ganancias; para 4 eventos — +7%; para 5 eventos — +10%; para 6 o más — desde 12%."}',
             'value_fr' => '{"0":"Pour activer le bonus, le pari doit inclure au moins 3 événements, chacun avec une cote minimale de 1,40. Le pourcentage du bonus dépend du nombre d’événements dans la combinaison. Par exemple, pour 3 événements, c’est +5 % aux gains ; pour 4 événements — +7 % ; pour 5 événements — +10 % ; pour 6 événements ou plus — à partir de 12 %."}',
             'value_pt' => '{"0":"Para ativar o bônus, a aposta deve incluir pelo menos 3 eventos, cada um com uma odd mínima de 1,40. A porcentagem do bônus depende do número de eventos na combinação. Por exemplo, para 3 eventos, será +5% ao ganho; para 4 eventos — +7%; para 5 eventos — +10%; para 6 ou mais — a partir de 12%."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The bonus is credited as a percentage of the total winnings from the accumulator bet and is added to your account in addition to the main winnings."}',
             'value_es' => '{"0":"El bono se acredita como un porcentaje de las ganancias totales de la apuesta acumuladora y se añade a su cuenta además de las ganancias principales."}',
             'value_fr' => '{"0":"Le bonus est crédité en pourcentage du gain total du pari combiné et est ajouté à votre compte en plus des gains principaux."}',
             'value_pt' => '{"0":"O bônus é creditado como uma porcentagem do ganho total da aposta acumuladora e é adicionado à sua conta além do ganho principal."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus for a series of losing bets"}',
                'value_es' => '{"0":"Bono por una serie de apuestas perdidas"}',
                'value_fr' => '{"0":"Bonus pour une série de paris perdants"}',
                'value_pt' => '{"0":"Bónus por uma série de apostas perdedoras"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers bonuses for players who experience a series of losing bets. The promotion conditions provide for a bonus to be credited after a certain number of consecutive losing bets. This bonus is calculated as a percentage of the total amount lost and returned to the user’s account."}',
             'value_es' => '{"0":"PARIPESA ofrece bonos para jugadores que han tenido una serie de apuestas perdedoras. Las condiciones de la promoción establecen que se otorgará un bono después de cierta cantidad de apuestas consecutivas perdedoras. Este bono se calcula como un porcentaje del monto total perdido y se devuelve a la cuenta del usuario."}',
             'value_fr' => '{"0":"PARIPESA propose des bonus pour les joueurs qui subissent une série de paris perdants. Les conditions de la promotion prévoient l’attribution d’un bonus après un certain nombre de paris perdants consécutifs. Ce bonus est calculé en pourcentage du montant total perdu et crédité sur le compte de l’utilisateur."}',
             'value_pt' => '{"0":"A PARIPESA oferece bônus para jogadores que passam por uma série de apostas perdedoras. As condições da promoção preveem a concessão de um bônus após um certo número de apostas consecutivas perdedoras. Esse bônus é calculado como uma porcentagem do valor total perdido e devolvido para a conta do usuário."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"By taking advantage of this promotion, you can compensate for your losses."}',
             'value_es' => '{"0":"Al aprovechar esta promoción, podrás compensar tus pérdidas."}',
             'value_fr' => '{"0":"En profitant de cette promotion, vous pouvez compenser vos pertes."}',
             'value_pt' => '{"0":"Ao aproveitar essa promoção, você pode compensar suas perdas."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 25
            ]
        );
    }
}
