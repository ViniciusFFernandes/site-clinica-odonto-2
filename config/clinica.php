<?php
/**
 * Configuração do site — Dr(a). Nome Sobrenome
 * Edite AQUI todos os dados e textos. O HTML (index.php) não precisa mudar.
 */
return [
  // ====== Identidade ======
  'name'    => 'Dr(a). Nome Sobrenome',
  'clinic'  => 'Dr(a). Nome Sobrenome',
  'short'   => 'Nome Sobrenome',
  'tagline' => 'Odontologia · Cidade Exemplo',
  'logo'    => 'img/logo.svg',

  // ====== Contato ======
  'phone'           => '(00) 00000-0000',
  'phone_raw'       => '+5500000000000',
  'whatsapp_numero' => '5500000000000',
  'whatsapp_msg'    => 'Olá, Dr(a). Nome Sobrenome! Vim pelo site e gostaria de agendar uma avaliação.',

  // ====== Endereço ======
  'address'    => 'Rua Exemplo, 000',
  'district'   => 'Cidade Exemplo',
  'city'       => 'Cidade Exemplo',
  'state'   => 'UF',
  'maps_query' => 'Rua Exemplo, 000, Cidade Exemplo · UF',
  'geo_lat'    => 0,
  'geo_lng'    => 0,

  // ====== Avaliações ======
  'rating'     => '5,0',
  'rating_num' => 5.0,
  'reviews'    => 47,

  // ====== Horário ======
  'horario_semana' => 'Seg a Sex · 08h às 19h',
  'horario_sabado' => 'Sábado · sob agendamento',

  // ====== Redes sociais ======
  'instagram'     => '',
  'instagram_handle' => '',

  // ====== SEO ======
  'seo_title' => 'Dr(a). Nome Sobrenome — Dentista em Cidade Exemplo | Odontologia Estética e Humanizada',
  'seo_desc'  => 'Dr(a). Nome Sobrenome, dentista em Cidade Exemplo (UF). Atendimento personalizado e humanizado, tecnologia moderna e tratamentos de estética dental: clareamento, facetas, implantes, ortodontia e mais. Nota 5,0 no Google. Agende pelo WhatsApp.',

  // ====== Hero ======
  'hero_titulo_1'  => 'Um sorriso saudável transforma muito mais',
  'hero_titulo_2'  => 'do que a aparência.',
  'hero_subtitulo' => 'Atendimento personalizado, tecnologia moderna e tratamentos pensados para cuidar da saúde e da autoestima de cada paciente.',

  // ====== Diferenciais ======
  'diferenciais' => [
    ['icon' => 'heart-handshake', 'title' => 'Atendimento Humanizado',            'desc' => 'Escuta atenta e acolhimento em cada etapa. Aqui você é ouvida antes de ser tratada, com tempo e cuidado de verdade.'],
    ['icon' => 'clipboard-check', 'title' => 'Planejamento Personalizado',        'desc' => 'Cada sorriso é único. O tratamento é desenhado sob medida para os seus objetivos, com clareza em cada passo.'],
    ['icon' => 'sofa',            'title' => 'Ambiente Moderno',                   'desc' => 'Um espaço leve, acolhedor e contemporâneo, pensado para o seu conforto do primeiro ao último atendimento.'],
    ['icon' => 'microscope',      'title' => 'Equipamentos Atualizados',           'desc' => 'Tecnologia moderna a favor de diagnósticos precisos, procedimentos seguros e resultados naturais.'],
    ['icon' => 'star',            'title' => 'Excelente Avaliação',                'desc' => 'Nota 5,0 no Google com 47 avaliações de pacientes que confiam no cuidado e no resultado do atendimento.'],
    ['icon' => 'map-pin',         'title' => 'Fácil Acesso',                       'desc' => 'Localização privilegiada na Av. ACM, em Cidade Exemplo, com acesso simples e prático para você chegar sem preocupação.'],
  ],

  // ====== Tratamentos (navegação por categorias) ======
  'especialidades' => [
    [
      'key' => 'clareamento', 'icon' => 'sparkles', 'featured' => true,
      'title' => 'Clareamento Dental',
      'img' => 'img/trat-clareamento.svg',
      'desc' => 'Devolvemos o brilho natural ao seu sorriso com protocolos de clareamento seguros e supervisionados, respeitando a sensibilidade e a saúde dos seus dentes.',
      'benef' => ['Sorriso mais branco e uniforme', 'Protocolo seguro e supervisionado', 'Menor sensibilidade', 'Resultado natural e duradouro'],
    ],
    [
      'key' => 'facetas', 'icon' => 'layers', 'featured' => true,
      'title' => 'Facetas',
      'img' => 'img/trat-facetas.svg',
      'desc' => 'Harmonia, proporção e naturalidade. As facetas são planejadas individualmente para desenhar um sorriso que combina com o seu rosto e a sua personalidade.',
      'benef' => ['Desenho de sorriso personalizado', 'Correção de forma e cor', 'Aparência natural', 'Planejamento individual'],
    ],
    [
      'key' => 'implantes', 'icon' => 'anchor', 'featured' => false,
      'title' => 'Implantes',
      'img' => 'img/trat-implantes.svg',
      'desc' => 'Reposição de dentes perdidos com implantes planejados para devolver mastigação, fala e estética com firmeza e naturalidade.',
      'benef' => ['Solução firme e duradoura', 'Estética e função restauradas', 'Planejamento cuidadoso', 'Conforto no dia a dia'],
    ],
    [
      'key' => 'ortodontia', 'icon' => 'align', 'featured' => false,
      'title' => 'Ortodontia',
      'img' => 'img/trat-ortodontia.svg',
      'desc' => 'Alinhamento dos dentes e equilíbrio da mordida com opções convencionais e estéticas, acompanhadas de perto em cada fase.',
      'benef' => ['Alinhamento dos dentes', 'Correção da mordida', 'Opções estéticas', 'Acompanhamento próximo'],
    ],
    [
      'key' => 'limpeza', 'icon' => 'shield-check', 'featured' => false,
      'title' => 'Limpeza',
      'img' => 'img/trat-limpeza.svg',
      'desc' => 'Profilaxia profissional que remove placa e manchas, mantendo gengivas saudáveis e o seu sorriso sempre leve e cuidado.',
      'benef' => ['Remoção de placa e tártaro', 'Gengivas mais saudáveis', 'Hálito mais fresco', 'Prevenção de problemas futuros'],
    ],
    [
      'key' => 'canal', 'icon' => 'activity', 'featured' => false,
      'title' => 'Canal',
      'img' => 'img/trat-canal.svg',
      'desc' => 'Tratamento endodôntico conduzido com técnica e cuidado para eliminar a dor, preservar o dente e devolver o seu bem-estar.',
      'benef' => ['Alívio da dor', 'Preservação do dente natural', 'Procedimento cuidadoso', 'Recuperação orientada'],
    ],
    [
      'key' => 'proteses', 'icon' => 'tooth', 'featured' => false,
      'title' => 'Próteses',
      'img' => 'img/trat-proteses.svg',
      'desc' => 'Próteses fixas e removíveis planejadas sob medida para devolver função e naturalidade, com conforto e acabamento delicado.',
      'benef' => ['Próteses fixas e removíveis', 'Estética natural', 'Ajuste sob medida', 'Conforto ao mastigar e sorrir'],
    ],
    [
      'key' => 'preventiva', 'icon' => 'stethoscope', 'featured' => false,
      'title' => 'Odontologia Preventiva',
      'img' => 'img/trat-preventiva.svg',
      'desc' => 'Cuidado contínuo com avaliações, orientação e acompanhamento para manter a sua saúde bucal em dia e evitar tratamentos maiores.',
      'benef' => ['Avaliações periódicas', 'Orientação personalizada', 'Prevenção de problemas', 'Saúde bucal de longo prazo'],
    ],
  ],

  // ====== Processo (linha do tempo) ======
  'jornada' => [
    ['n' => '01', 'icon' => 'message-circle',  'title' => 'Primeiro contato', 'desc' => 'Você fala com a gente pelo WhatsApp, tira dúvidas e agenda no melhor horário para você.'],
    ['n' => '02', 'icon' => 'stethoscope',     'title' => 'Avaliação',        'desc' => 'A Dr(a). Nome Sobrenome faz um exame cuidadoso, ouvindo suas queixas, desejos e objetivos.'],
    ['n' => '03', 'icon' => 'clipboard-check', 'title' => 'Planejamento',     'desc' => 'Apresentamos um plano claro, sob medida, com prioridades, etapas e orçamento transparente.'],
    ['n' => '04', 'icon' => 'tooth',           'title' => 'Tratamento',       'desc' => 'Conduzimos cada etapa com técnica, delicadeza e o seu conforto sempre em primeiro lugar.'],
    ['n' => '05', 'icon' => 'heart-handshake', 'title' => 'Acompanhamento',   'desc' => 'Acompanhamos os resultados de perto, com manutenção e cuidado contínuo ao longo do tempo.'],
    ['n' => '06', 'icon' => 'sparkles',        'title' => 'Novo sorriso',     'desc' => 'Você celebra um sorriso mais saudável, bonito e cheio de confiança para viver sem receios.'],
  ],

  // ====== Galeria (placeholders editáveis) ======
  'galeria' => [
    ['img' => 'img/galeria-consultorio.svg', 'alt' => 'Consultório da Dr(a). Nome Sobrenome',   'label' => 'Consultório',  'span' => 'lg:col-span-2 lg:row-span-2'],
    ['img' => 'img/galeria-recepcao.svg',    'alt' => 'Recepção acolhedora',                  'label' => 'Recepção',     'span' => ''],
    ['img' => 'img/galeria-equipamentos.svg','alt' => 'Equipamentos odontológicos modernos',  'label' => 'Equipamentos', 'span' => ''],
    ['img' => 'img/galeria-atendimento.svg', 'alt' => 'Atendimento humanizado ao paciente',   'label' => 'Atendimento',  'span' => ''],
    ['img' => 'img/galeria-detalhes.svg',    'alt' => 'Detalhes do ambiente',                 'label' => 'Detalhes',     'span' => ''],
  ],

  // ====== Depoimentos ======
  'depoimentos' => [
    ['name' => 'Fernanda Lopes',   'role' => 'Facetas',           'initials' => 'FL', 'text' => 'A Dr(a). Nome Sobrenome desenhou o meu sorriso dos sonhos com muita delicadeza. Explicou cada etapa com calma e o resultado ficou natural e lindo. Me sinto muito mais confiante.'],
    ['name' => 'Beatriz Nogueira', 'role' => 'Clareamento',       'initials' => 'BN', 'text' => 'Atendimento impecável do início ao fim. Ambiente lindo, acolhedor, e um cuidado que faz toda a diferença. Meu clareamento ficou perfeito e sem sensibilidade.'],
    ['name' => 'Rafael Menezes',   'role' => 'Implante',          'initials' => 'RM', 'text' => 'Fui muito bem recebido e senti confiança em cada consulta. O implante ficou firme e natural, idêntico aos meus outros dentes. Profissionalismo e humanidade juntos.'],
    ['name' => 'Larissa Costa',    'role' => 'Ortodontia',        'initials' => 'LC', 'text' => 'Estou no tratamento ortodôntico e me sinto acolhida em todas as consultas. A Dra. é atenciosa, pontual e tira todas as minhas dúvidas. Recomendo de olhos fechados.'],
    ['name' => 'Camila Teixeira',  'role' => 'Odontologia geral', 'initials' => 'CT', 'text' => 'Sempre tive medo de dentista e aqui isso mudou. Atendimento humano de verdade, delicado e sem pressa. Hoje cuido do meu sorriso com tranquilidade.'],
    ['name' => 'Paulo Andrade',    'role' => 'Prótese',           'initials' => 'PA', 'text' => 'Minha prótese ficou muito confortável e natural. Cada detalhe foi pensado com carinho. Um atendimento de altíssimo nível, do acolhimento ao resultado final.'],
  ],

  // ====== Sobre / Institucional ======
  'sobre_eyebrow' => 'Sobre a Dr(a). Nome Sobrenome',
  'sobre_titulo'  => 'Cuidar do sorriso é cuidar das pessoas.',
  'sobre_p1' => 'Para a Dr(a). Nome Sobrenome, cada paciente é único e merece atenção individual. O atendimento começa pela escuta — entender a sua história, os seus receios e os seus objetivos — para então construir um cuidado que faça sentido de verdade para você.',
  'sobre_p2' => 'Acolhimento, confiança e qualidade guiam cada etapa. É um cuidado atento aos detalhes, que une técnica e sensibilidade para proporcionar uma experiência confortável, segura e verdadeiramente humana — do primeiro contato ao seu novo sorriso.',
  'sobre_stats' => [
    ['v' => '5,0', 'l' => 'nota no Google'],
    ['v' => '47',  'l' => 'avaliações de pacientes'],
    ['v' => '100%','l' => 'foco em você'],
  ],
  'sobre_valores' => [
    'Atenção individual a cada paciente',
    'Acolhimento em todas as etapas',
    'Cuidado atento a cada detalhe',
    'Transparência e confiança sempre',
  ],

  // ====== CTA final ======
  'cta_titulo' => 'Agende uma avaliação e descubra como podemos cuidar do seu sorriso.',
  'cta_sub'    => 'Fale agora com a Dr(a). Nome Sobrenome pelo WhatsApp e dê o primeiro passo para um sorriso mais saudável e cheio de confiança.',
];
