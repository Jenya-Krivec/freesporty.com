<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international bookmaker that has quickly gained the trust of a large number of players thanks to its wide selection of sports events, competitive odds, and—most importantly—an attractive bonus policy."}',
             'value_es' => '{"0":"BETANDYOU es una casa de apuestas internacional que ha logrado ganarse la confianza de una gran cantidad de jugadores en poco tiempo gracias a su amplia oferta de eventos deportivos, cuotas competitivas y, sobre todo, una política de bonificaciones atractiva."}',
             'value_fr' => '{"0":"BETANDYOU est un bookmaker international qui a rapidement su gagner la confiance d’un grand nombre de joueurs grâce à un large choix d’événements sportifs, des cotes compétitives et, surtout, une politique de bonus attrayante."}',
             'value_pt' => '{"0":"A BETANDYOU é uma casa de apostas internacional que conquistou rapidamente a confiança de muitos jogadores graças à sua ampla variedade de eventos desportivos, odds competitivas e, acima de tudo, a uma política de bónus atrativa."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The company is constantly expanding its range of bonuses and promotions, making the betting experience not only exciting but also profitable. Special attention is given to promo codes, which allow users to receive extra funds during registration."}',
             'value_es' => '{"0":"La compañía amplía constantemente su gama de bonos y promociones, haciendo que jugar sea no solo emocionante, sino también rentable. Se presta especial atención a los códigos promocionales, que permiten obtener fondos adicionales al registrarse."}',
             'value_fr' => '{"0":"L’entreprise ne cesse d’élargir sa gamme de bonus et de promotions, rendant le jeu non seulement intéressant, mais aussi avantageux. Une attention particulière est portée aux codes promotionnels, qui permettent d’obtenir des fonds supplémentaires lors de l’inscription."}',
             'value_pt' => '{"0":"A empresa está constantemente a expandir a sua gama de bónus e promoções, tornando a experiência de jogo não apenas emocionante, mas também lucrativa. Os códigos promocionais recebem especial destaque, permitindo obter fundos adicionais durante o registo."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at how BETANDYOU bonuses work, what promotions are available for both new and existing customers, and how to use the promo code :promocode to receive an enhanced welcome bonus of 130%."}',
             'value_es' => '{"0":"En este análisis, examinaremos en detalle cómo funcionan los bonos de BETANDYOU, qué promociones están disponibles para nuevos y ya registrados usuarios, y cómo utilizar el código promocional :promocode para recibir un bono de bienvenida mejorado del 130%."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons en détail le fonctionnement des bonus chez BETANDYOU, les offres disponibles pour les nouveaux et les anciens utilisateurs, ainsi que la manière d’utiliser le code promo :promocode pour recevoir un bonus de bienvenue amélioré de 130 %."}',
             'value_pt' => '{"0":"Nesta análise, explicamos detalhadamente como funcionam os bónus da BETANDYOU, que promoções estão disponíveis para novos e atuais clientes, e como usar o código promocional :promocode para receber um bónus de boas-vindas aumentado de 130%."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the BETANDYOU promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de BETANDYOU?"}',
                'value_fr' => '{"0":"Comment profiter du code promo BETANDYOU ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da BETANDYOU?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"On the homepage of the website, click the «Registration» button located in the top right corner. A standard registration form will then appear. You can choose one of two registration methods: by phone number or by email."}',
             'value_es' => '{"0":"En la página principal del sitio web, haz clic en el botón «Registro» que se encuentra en la esquina superior derecha. Aparecerá un formulario estándar. Puedes elegir uno de los dos métodos de registro: por número de teléfono o por correo electrónico."}',
             'value_fr' => '{"0":"Sur la page d’accueil du site, cliquez sur le bouton « Inscription » situé en haut à droite. Un formulaire standard apparaîtra. Vous pouvez choisir l’une des deux méthodes d’inscription : par numéro de téléphone ou par e-mail."}',
             'value_pt' => '{"0":"Na página inicial do site, clique no botão «Registar» localizado no canto superior direito. Um formulário padrão aparecerá. Pode escolher um dos dois métodos de registo: por número de telemóvel ou por e-mail."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Next, you need to enter your phone number, select your country of residence, account currency, and create a secure password. You will also need to provide your last name, first name, and date of birth."}',
             'value_es' => '{"0":"A continuación, debes ingresar tu número de teléfono, seleccionar tu país de residencia, la moneda de tu cuenta y crear una contraseña segura. También tendrás que indicar tu apellido, nombre y fecha de nacimiento."}',
             'value_fr' => '{"0":"Ensuite, vous devez indiquer votre numéro de téléphone, sélectionner votre pays de résidence, la devise du compte, créer un mot de passe sécurisé, puis saisir votre nom, prénom et date de naissance."}',
             'value_pt' => '{"0":"Depois, deve introduzir o seu número de telemóvel, selecionar o país de residência, a moeda da conta e criar uma palavra-passe segura. Também terá de indicar o apelido, o nome e a data de nascimento."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"At this stage, you must enter our promo code :promocode. Don’t forget to select where you would like to use your bonus funds—choose either the casino or sports betting from the list on the left."}',
             'value_es' => '{"0":"En este paso debes introducir nuestro código promocional :promocode. No olvides seleccionar dónde deseas utilizar los fondos del bono: elige entre casino o apuestas deportivas en la lista de la izquierda."}',
             'value_fr' => '{"0":"C’est à cette étape que vous devez entrer notre code promo :promocode. N’oubliez pas de choisir où vous souhaitez utiliser vos fonds bonus : sélectionnez soit le casino, soit les paris sportifs dans la liste à gauche."}',
             'value_pt' => '{"0":"É nesta etapa que deve inserir o nosso código promocional :promocode. Não se esqueça de escolher onde pretende utilizar os fundos do bónus: selecione à esquerda se é para o casino ou para apostas desportivas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Once you complete the form and confirm your registration, all that remains is to make your first deposit to receive a 130% welcome bonus based on your deposit amount."}',
             'value_es' => '{"0":"Una vez completado el formulario y confirmada la inscripción, solo tendrás que hacer tu primer depósito para recibir el bono de bienvenida del 130% sobre el monto depositado."}',
             'value_fr' => '{"0":"Une fois le formulaire complété et l’inscription confirmée, il vous suffit d’effectuer votre premier dépôt pour recevoir le bonus de bienvenue de 130 % sur le montant déposé."}',
             'value_pt' => '{"0":"Depois de preencher o formulário e confirmar o registo, só precisa de fazer o seu primeiro depósito para receber o bónus de boas-vindas de 130% sobre o valor depositado."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at BETANDYOU?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en BETANDYOU?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur BETANDYOU ?"}',
                'value_pt' => '{"0":"E se você já for registrado na BETANDYOU?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU values its regular customers and frequently updates its list of bonuses and promotions, which are available not only to newcomers but also to experienced players. For those who already have an account, the company offers bonuses on repeated deposits."}',
             'value_es' => '{"0":"BETANDYOU valora a sus clientes habituales y actualiza regularmente su lista de bonos y promociones, disponibles no solo para los recién llegados, sino también para los jugadores experimentados. Para quienes ya tienen una cuenta, la empresa ofrece bonos por depósitos repetidos."}',
             'value_fr' => '{"0":"BETANDYOU accorde une grande importance à ses clients fidèles et met régulièrement à jour sa liste de bonus et de promotions, disponibles non seulement pour les nouveaux venus, mais aussi pour les joueurs expérimentés. Pour ceux qui possèdent déjà un compte, l’entreprise propose des bonus sur les dépôts récurrents."}',
             'value_pt' => '{"0":"A BETANDYOU valoriza os seus clientes fiéis e atualiza regularmente a lista de bónus e promoções, disponíveis não só para os recém-chegados, mas também para jogadores experientes. Para quem já tem uma conta, a empresa oferece bónus em depósitos subsequentes."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, there are cashback programs that return a portion of lost funds back to the account. BETANDYOU also runs regular themed promotions tied to major sporting events or holidays, offering special bonuses or enhanced odds."}',
             'value_es' => '{"0":"Además, existen programas de reembolso que devuelven una parte de las pérdidas a la cuenta. BETANDYOU también organiza promociones temáticas regulares relacionadas con eventos deportivos importantes o festividades, ofreciendo bonos especiales o cuotas mejoradas."}',
             'value_fr' => '{"0":"En outre, des programmes de cashback permettent de récupérer une partie des pertes sur le compte. BETANDYOU organise également des promotions thématiques régulières à l’occasion d’événements sportifs majeurs ou de fêtes, avec des bonus spéciaux ou des cotes améliorées."}',
             'value_pt' => '{"0":"Além disso, existem programas de reembolso (cashback) que devolvem uma parte das perdas à conta do jogador. A BETANDYOU também realiza promoções temáticas regulares associadas a grandes eventos desportivos ou feriados, oferecendo bónus especiais ou odds melhoradas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Active casino players also receive free spins and other incentives. All these bonuses can be easily activated through your personal account."}',
             'value_es' => '{"0":"Los jugadores activos del casino también reciben giros gratis y otros incentivos. Todos estos bonos se pueden activar fácilmente desde la cuenta personal."}',
             'value_fr' => '{"0":"Les joueurs actifs du casino bénéficient aussi de tours gratuits et d’autres récompenses. Tous ces bonus peuvent être facilement activés depuis votre espace personnel."}',
             'value_pt' => '{"0":"Os jogadores ativos no casino também recebem rodadas grátis e outras recompensas. Todos estes bónus podem ser facilmente ativados através da conta pessoal."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, BETANDYOU does not offer traditional no-deposit bonuses that provide money or free sports bets. However, the bookmaker often runs various promotions with minimal deposit requirements."}',
             'value_es' => '{"0":"Actualmente, BETANDYOU no ofrece bonos sin depósito tradicionales que otorguen dinero o apuestas deportivas gratuitas. Sin embargo, la casa de apuestas suele lanzar diversas promociones con requisitos mínimos de depósito."}',
             'value_fr' => '{"0":"Actuellement, BETANDYOU ne propose pas de bonus sans dépôt classiques offrant de l\'argent ou des paris sportifs gratuits. Toutefois, le bookmaker organise souvent diverses promotions avec des exigences de dépôt minimales."}',
             'value_pt' => '{"0":"No momento, a BETANDYOU não oferece bónus tradicionais sem depósito que concedam dinheiro ou apostas desportivas grátis. No entanto, a casa de apostas frequentemente realiza promoções com requisitos mínimos de depósito."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Free bet on your first deposit"}',
                'value_es' => '{"0":"Apuesta gratis con su primer depósito"}',
                'value_fr' => '{"0":"Pari gratuit sur votre premier dépôt"}',
                'value_pt' => '{"0":"Aposta grátis no seu primeiro depósito"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This is one of the most popular and rewarding offers from BETANDYOU. Under the terms of this promotion, free bets are credited to the customer\'s account after making their first deposit. The amount of the free bet depends on the size of the first deposit."}',
             'value_es' => '{"0":"Esta es una de las ofertas más populares y rentables de BETANDYOU. Según los términos de esta promoción, se acreditan apuestas gratuitas en la cuenta del cliente tras realizar su primer depósito. El monto del freebet depende del importe del primer depósito."}',
             'value_fr' => '{"0":"C’est l’une des offres les plus populaires et avantageuses de BETANDYOU. Selon les conditions de cette promotion, des paris gratuits sont crédités sur le compte du client après son premier dépôt. Le montant du freebet dépend de la somme déposée."}',
             'value_pt' => '{"0":"Esta é uma das ofertas mais populares e vantajosas da BETANDYOU. De acordo com os termos desta promoção, os freebets são creditados na conta do cliente após o primeiro depósito. O valor do freebet depende do montante do primeiro depósito."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To activate it, you must make a minimum deposit and place your first bet for at least the same amount. The free bet can be used on a wide range of sporting events. This promotion is ideal for new players who want to explore the platform and evaluate its features without financial risk."}',
             'value_es' => '{"0":"Para activarla, es necesario hacer un depósito mínimo y realizar la primera apuesta por una cantidad no inferior a ese depósito. El freebet se puede usar en una amplia variedad de eventos deportivos. Esta promoción es ideal para los nuevos usuarios que quieren conocer la plataforma sin correr riesgos financieros."}',
             'value_fr' => '{"0":"Pour l’activer, il faut effectuer un dépôt minimum et placer un premier pari d’un montant au moins équivalent. Le freebet peut être utilisé sur un large choix d’événements sportifs. Cette offre convient parfaitement aux nouveaux joueurs qui souhaitent découvrir la plateforme sans prendre de risques financiers."}',
             'value_pt' => '{"0":"Para ativar, é necessário fazer um depósito mínimo e realizar a primeira aposta num valor igual ou superior a esse depósito. O freebet pode ser utilizado numa grande variedade de eventos desportivos. Esta promoção é ideal para novos jogadores que querem explorar a plataforma sem riscos financeiros."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Advancebet"}',
                'value_es' => '{"0":"Advancebet"}',
                'value_fr' => '{"0":"Advancebet"}',
                'value_pt' => '{"0":"Apostaconfiança"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The «Advancebet» promotion is designed for experienced players who want to react to sporting events as quickly as possible without waiting for the settlement of their current bets. If you have active bets, BETANDYOU allows you to receive a credit bet equal to the amount of those active bets."}',
             'value_es' => '{"0":"La promoción «Advancebet» está diseñada para jugadores experimentados que desean reaccionar rápidamente a los eventos deportivos sin esperar a que se liquiden sus apuestas actuales. Si tienes apuestas activas, BETANDYOU te permite recibir una apuesta a crédito por un monto igual al de esas apuestas activas."}',
             'value_fr' => '{"0":"La promotion «Advancebet» est conçue pour les joueurs expérimentés souhaitant réagir rapidement aux événements sportifs sans attendre la résolution de leurs paris en cours. Si vous avez des paris actifs, BETANDYOU vous permet d’obtenir un pari à crédit équivalent au montant de ces paris actifs."}',
             'value_pt' => '{"0":"A promoção «Apostaconfiança» é destinada a jogadores experientes que desejam reagir rapidamente aos eventos desportivos, sem ter de esperar pela liquidação das suas apostas em aberto. Se tiver apostas ativas, a BETANDYOU permite-lhe receber uma aposta a crédito no valor equivalente ao dessas apostas."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This means you can place new bets without waiting for the results of your existing ones."}',
             'value_es' => '{"0":"Esto significa que puedes realizar nuevas apuestas sin esperar los resultados de las ya realizadas."}',
             'value_fr' => '{"0":"Cela signifie que vous pouvez placer de nouveaux paris sans attendre les résultats des paris déjà effectués."}',
             'value_pt' => '{"0":"Ou seja, pode fazer novas apostas sem ter de aguardar os resultados das anteriores."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Advancebet has certain restrictions: the credit bet cannot be withdrawn and must be used within a specified time frame."}',
             'value_es' => '{"0":"Advancebet tiene ciertas restricciones: la apuesta a crédito no se puede retirar y debe utilizarse dentro de un plazo determinado."}',
             'value_fr' => '{"0":"L’offre Advancebet comporte certaines restrictions : le pari à crédit ne peut pas être retiré et doit être utilisé dans un délai imparti."}',
             'value_pt' => '{"0":"O Advancebet tem algumas limitações: a aposta a crédito não pode ser levantada e deve ser utilizada dentro de um prazo específico."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_es' => '{"0":"RECOMIENDE A UN AGENTE MOBCASH"}',
                'value_fr' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_pt' => '{"0":"REFIRA UM AGENTE MOBCASH"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This affiliate program is designed by BETANDYOU for active users who not only want to play but also earn by attracting new players to the platform."}',
             'value_es' => '{"0":"Este programa de afiliación ha sido desarrollado por BETANDYOU para usuarios activos que no solo desean jugar, sino también ganar dinero atrayendo nuevos jugadores a la plataforma."}',
             'value_fr' => '{"0":"Ce programme d’affiliation a été développé par BETANDYOU pour les utilisateurs actifs qui souhaitent non seulement jouer, mais aussi gagner de l’argent en attirant de nouveaux joueurs sur la plateforme."}',
             'value_pt' => '{"0":"Este programa de afiliados foi desenvolvido pela BETANDYOU para utilizadores ativos que desejam não apenas jogar, mas também ganhar dinheiro ao atrair novos jogadores para a plataforma."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Registered clients can become MobCash agents and invite friends, receiving a 20% bonus from their next deposit."}',
             'value_es' => '{"0":"Los clientes registrados pueden convertirse en agentes de MobCash e invitar a amigos, recibiendo un bono del 20% del siguiente depósito de cada uno."}',
             'value_fr' => '{"0":"Les clients enregistrés peuvent devenir agents MobCash et inviter leurs amis, recevant ainsi un bonus de 20 % sur le prochain dépôt de chacun."}',
             'value_pt' => '{"0":"Os clientes registados podem tornar-se agentes MobCash e convidar amigos, recebendo um bónus de 20% sobre o próximo depósito de cada um."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 28
            ]
        );
    }
}
